<?php

namespace App\Http\Controllers;

class CalendarPrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['title'] = 'Calendar';

        return view('private.calendar', $this->data);
    }
}
