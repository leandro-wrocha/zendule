<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPrivateController extends Controller
{
    public function index()
    {
        $this->data['title'] = 'Dashboard';

        return view('private.index', $this->data);
    }
}
