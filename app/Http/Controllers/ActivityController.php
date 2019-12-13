<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;


class ActivityController extends Controller
{
    public function bitacora()
    {
        $activities = Activity::all();
        return view('admin.bitacora', compact('activities'));
    }
}
