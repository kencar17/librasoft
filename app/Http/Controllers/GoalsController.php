<?php

namespace App\Http\Controllers;

use App\Objective;
use Illuminate\Http\Request;

use App\Goal;
use App\Plan;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoalsController extends Controller
{
    public function goal() {
        return view('goal');
    }


    public function index()
    {
        $plan = Plan::first();

        return view('Goal.index', compact('plan'));
    }



    public function newGoal() {
        return null;
    }
}
