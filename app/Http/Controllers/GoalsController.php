<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Goal;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoalsController extends Controller
{
    public function goal() {
        return view('goal');
    }


    public function index()
    {
        $goals = Goal::all();
        $counter = 0;

        return view('Goal.index', compact('goals', 'counter'));

    }



    public function newGoal() {
        return null;
    }
}
