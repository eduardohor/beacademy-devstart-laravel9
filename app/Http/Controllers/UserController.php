<?php

namespace App\Http\Controllers;

use App\Exceptions\UserControllerException;
use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    public function index(Request $request)
    {
        $users = $this->model->getUsers(
            $request->search ?? ''
        );

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        // $user = User::where('id', $id)->first();
        // if (!$user = User::find($id))
        //     return redirect()->route('users.index');

        $user = User::findOrFail($id);

        if ($user) {
            return view('users.show', compact('user'));
        } else {
            throw new UserControllerException('User não encontrado');
        }
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)

    {

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        if ($request->image) {
            $path = $request->image->store('/images', 's3');
            $data['image'] = $path;




            // Storage::disk('s3')->put($file, file_get_contents($file));
        }

        $this->model->create($data);

        $request->session()->flash('create', 'Usuário cadastrado com sucesso!!');

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.index');

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $data['is_admin'] = $request->admin ? 1 : 0;

        $user->update($data);

        return redirect()->route('users.index')->with('edit', 'Usuário editado com sucesso!!');
    }

    public function destroy($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $user->delete();

        return redirect()->route('users.index')->with('destroy', 'Usuário deletado com sucesso!!');
    }

    public function admin()
    {
        return view('admin.index');
    }
}