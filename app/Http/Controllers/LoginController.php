<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['title'] = 'Login';

        return view('login', $this->data);
    }
}
