<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ProfilePrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->data['title'] = 'Profile';

        return view('private.profile', $this->data);
    }
}
