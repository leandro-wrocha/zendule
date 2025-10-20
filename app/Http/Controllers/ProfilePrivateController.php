<?php

namespace App\Http\Controllers;

class ProfilePrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['title'] = 'Profile';

        return view('private.profile', $this->data);
    }
}
