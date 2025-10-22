<?php

namespace App\Http\Controllers;

class MeCalendarPrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['title'] = 'Me Calendar';

        return view('me-calendar', $this->data);
    }
}
