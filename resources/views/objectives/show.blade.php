@extends('layouts.app')

@section('content')

    <div class="bs-example">
        <div class="panel panel-primary">
            <div class="panel-heading" style="background: #009FD7;"><h4 class="panel-title">Objective: {{ $objective->body }}</h4></div>
            <div class="panel-body small-panel-body">
                <div class="col-md-6">
                <h4><a href="/goals/show/{{ $objective->goal()->get()->first()->id }}">Belongs to Goal: {{ $objective->goal()->get()->first()->body }}</a></h4>
                </div>
                @role('bplead')
                <div class="col-md-6">
                    <a class="btn btn-primary" role="button" href="/objectives/{{ $objective->id }}/delete" style="float: right;">Delete</a>
                </div>
                @endrole
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($objective->actions()->orderBy('body', 'asc')->get() as $action)
                        <tr>
                            <td><a href="/actions/show/{{ $action->id }}">Action {{ $action->item }}: {{ $action->body }}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop
