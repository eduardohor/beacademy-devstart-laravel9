<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function showTeams($id)
    {


        $team = Team::find($id);
        $team->load('users');
        return $team;
    }

    public function showUserToTeams($id)
    {

        if (!$user = User::find($id))
            return redirect()->route('users.index');

        $user->load('teams');

        return $user;
    }
}