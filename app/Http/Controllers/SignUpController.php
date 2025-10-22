<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SignUpController extends Controller
{
    /**
     * Display the sign-up page.
     */
    public function index()
    {
        $this->data['title'] = 'Sign Up';
        $this->data['days_of_week'] = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];

        return view('signup', $this->data); 
    }
}
