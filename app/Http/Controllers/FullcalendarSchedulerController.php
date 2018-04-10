<?php

namespace App\Http\Controllers;

/**
 * Class FullcalendarSchedulerController
 * @package App\Http\Controllers
 */
class FullcalendarSchedulerController extends Controller
{
    public function index()
    {
        return view('fullcalendar-scheduler.index');
    }
}
