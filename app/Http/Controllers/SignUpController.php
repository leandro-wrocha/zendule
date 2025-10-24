<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Contracts\View\View;

class SignUpController extends Controller
{
    /**
     * Display the sign-up page.
     */
    public function index(): View
    {
        $this->data['title'] = 'Sign Up';
        $this->data['days_of_week'] = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];

        return view('signup', $this->data); 
    }
}
