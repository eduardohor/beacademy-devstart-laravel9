<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function show()
    {
        dd('Chegou!');

        // $response = Http::withHeaders([
        //     'content-type' => 'application/json',
        //     'token' => 'UGFyYWLDqW5zLCB2b2PDqiBlc3RhIGluZG8gYmVtIQ=='

        // ])->post('https://tracktools.vercel.app/api/checkout', [
        //     "transaction_type" => $request->transaction_type,
        //     "transaction_amount" => $request->transaction_amount,
        //     "transaction_installments" => $request->transaction_installments,
        //     "customer_name" => $request->customer_name,
        //     "customer_document" => $request->customer_document,
        //     "customer_card_number" => $request->customer_card_number,
        //     "customer_card_expiration_date" => $request->customer_card_expiration_date,
        //     "customer_card_cvv" => $request->customer_card_cvv
        // ]);

        // return  $response;
    }

    public function index()
    {
        return view('api.index');
    }
}