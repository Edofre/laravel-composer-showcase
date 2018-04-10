<?php

namespace App\Http\Controllers;

/**
 * Class FullcalendarController
 * @package App\Http\Controllers
 */
class FullcalendarController extends Controller
{
    public function index()
    {
        return view('fullcalendar.index');
    }
}
