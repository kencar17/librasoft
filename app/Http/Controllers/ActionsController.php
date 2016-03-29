<?php

namespace App\Http\Controllers;

use App\Action;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActionsController extends Controller
{
    public function action() {
        return view('action');
    }

    public function newAction() {
        return null;
    }
    public function show(Action $action)
    {
        return view('actions.show')->with('action', $action);
    }
    public function postSuccess(Request $request) {
        //get id
        $pk = $request->pk;

        $col = 'success';

        //get new success
        $value = $request->value;

        //Get action data row where success is stored
        if ($finditem = Action::where('id', $pk)->update([$col => $value]))
        {
            return \Response::json(array('status' => 1));
        }
        else
        {
            return \Response::json(array('status' => 0));
        }
    }
}
