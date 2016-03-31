@extends('layouts.app')

@section('content')
<head>
        <meta charset="utf-8">
        <title>jQuery UI Datepicker - Default functionality</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/createPlan.js') }}"></script>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Plan Builder</div>

                    <div class="panel-body">
                        Complete the following steps to get your new Business Plan up and running quickly!
                        <form role="form" method="POST" action="{{ url('/plan/new') }}">
                            <!-- Step 1 -->
                            <div class="form-group pb-step" id="step1">
                                <label for="step1Label" class="pb-label">
                                    Step 1: Choose a plan year range:
                                </label>
                                <select name="startdate" id="startpicker"></select>
                                <select name="enddate" id="endpicker"></select>

                                <div id="toGoals">
                                    <button class="btn btn-primary pb-btn" type="button">Next</button>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="form-group pb-display pb-step" id="step2">
                                <label for="step2Label" class="pb-label">Step 2:</label>
                                <div class="pb-inner-step">
                                    <label for="goal1Label" class="pb-label">Goal 1 name:</label>
                                    <textarea name="goal1" rows="1" class="pb-text"></textarea>
                                    <button id="toObjs1" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                </div>
                                <div class="pb-inner-step">
                                    <label for="goal2Label" class="pb-label">Goal 2 name:</label>
                                    <textarea name="goal2" rows="1" class="pb-text"></textarea>
                                    <button id="toObjs2" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                </div>

                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="pb-display" id="backToPlan">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                    <button class="btn btn-primary pb-submit-btn" type="submit">Submit</button>
                                </div>

                            </div>

                            <!-- Step 3 -->
                            <!-- Step 3a -->
                            <div class="form-group pb-display pb-step" id="step3a">
                                <label for="step3Label" class="pb-label">Step 3:</label>
                                <div id="step3a" class="pb-display pb-inner-step">
                                    <label for="G1O1Label" class="pb-label">Objective 1 name:</label>
                                    <textarea name="obj1" rows="1" class="pb-text"></textarea>
                                    <button id="toActions1" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                </div>
                                <div id="step3a" class="pb-display pb-inner-step">
                                    <label for="G1O2Label" class="pb-label">Objective 2 name:</label>
                                    <textarea name="obj2" rows="1" class="pb-text"></textarea>
                                    <button id="toActions2" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                </div>

                                <div class="pb-display" id="backToGoals1">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 3b -->
                            <div class="form-group pb-display pb-step" id="step3b">
                                <label for="step3Label" class="pb-label">Step 3:</label>
                                <div id="step3b" class="pb-display pb-inner-step">
                                    <label for="G2O1Label" class="pb-label">Objective 1 name:</label>
                                    <textarea name="obj3" rows="1" class="pb-text"></textarea>
                                    <button id="toActions3" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                </div>
                                <div id="step3b" class="pb-display pb-inner-step">
                                    <label for="G2O2Label" class="pb-label">Objective 2 name:</label>
                                    <textarea name="obj4" rows="1" class="pb-text"></textarea>
                                    <button id="toActions4" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                </div>

                                <div class="pb-display" id="backToGoals2">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <!-- Step 4a -->
                            <div class="form-group pb-display pb-step" id="step4a">
                                <label for="step4Label" class="pb-label">Step 4:</label>
                                <div id="step4a" class="pb-display pb-inner-step">
                                    <label for="G1O1A1Label" class="pb-label">Action 1 name:</label>
                                    <textarea name="action1" rows="1" class="pb-text"></textarea>
                                    <button id="toTasks1" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                    <table name="actiontable1" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Due (YYYY-MM-DD)</th>
                                                <th>Owner</th>
                                                <th>Lead</th>
                                                <th>Collaborators</th>
                                                <th>Status</th>
                                                <th>Success Measures</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="action1row">
                                                <td contenteditable="true" id="date" name="dateA1"></td>
                                                <td contenteditable="true" id="owner" name="ownerA1"></td>
                                                <td contenteditable="true" id="lead" name="leadA1"></td>
                                                <td contenteditable="true" id="collaborators" name="collabA1"></td>
                                                <td contenteditable="true" id="status" name="statusA1"></td>
                                                <td contenteditable="true" id="success" name="successA1"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step4a" class="pb-display pb-inner-step">
                                    <label for="G1O1A2Label" class="pb-label">Action 2 name:</label>
                                    <textarea name="action2" rows="1" class="pb-text"></textarea>
                                    <button id="toTasks2" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                    <table name="actiontable2" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToObjs1">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 4b -->
                            <div class="form-group pb-display pb-step" id="step4b">
                                <label for="step4Label" class="pb-label">Step 4:</label>
                                <div id="step4b" class="pb-display pb-inner-step">
                                    <label for="G1O2A1Label" class="pb-label">Action 1 name:</label>
                                    <textarea name="action3" rows="1" class="pb-text"></textarea>
                                    <button id="toTasks3" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                    <table name="actiontable3" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step4b" class="pb-display pb-inner-step">
                                    <label for="G1O2A2Label" class="pb-label">Action 2 name:</label>
                                    <textarea name="action4" rows="1" class="pb-text"></textarea>
                                    <button id="toTasks4" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                    <table name="actiontable4" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToObjs2">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 4c -->
                            <div class="form-group pb-display pb-step" id="step4c">
                                <label for="step4Label" class="pb-label">Step 4:</label>
                                <div id="step4c" class="pb-display pb-inner-step">
                                    <label for="G2O1A1Label" class="pb-label">Action 1 name:</label>
                                    <textarea name="action5" rows="1" class="pb-text"></textarea>
                                    <button id="toTasks5" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                    <table name="actiontable5" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step4c" class="pb-display pb-inner-step">
                                    <label for="G2O1A2Label" class="pb-label">Action 2 name:</label>
                                    <textarea name="action6" rows="1" class="pb-text"></textarea>
                                    <button id="toTasks6" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                    <table name="actiontable6" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToObjs3">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 4d -->
                            <div class="form-group pb-display pb-step" id="step4d">
                                <label for="step4Label" class="pb-label">Step 4:</label>
                                <div id="step4d" class="pb-display pb-inner-step">
                                    <label for="G2O2A1Label" class="pb-label">Action 1 name:</label>
                                    <textarea name="action7" rows="1" class="pb-text"></textarea>
                                    <button id="toTasks7" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                    <table name="actiontable7" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step4d" class="pb-display pb-inner-step">
                                    <label for="G2O2A2Label" class="pb-label">Action 2 name:</label>
                                    <textarea name="action8" rows="1" class="pb-text"></textarea>
                                    <button id="toTasks8" class="btn btn-primary pb-arrow-btn" type="button"> > </button>
                                    <table name="actiontable8" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToObjs4">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 5 -->
                            <!-- Step 5a -->
                            <div class="form-group pb-display pb-step" id="step5a">
                                <label for="step5Label" class="pb-label">Step 5:</label>
                                <div id="step5a" class="pb-display pb-inner-step">
                                    <label for="G1O1A1T1Label" class="pb-label">Task 1 name:</label>
                                    <textarea name="task1" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable1" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step5a" class="pb-display pb-inner-step">
                                    <label for="G1O1A1T2Label" class="pb-label">Task 2 name:</label>
                                    <textarea name="task2" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable2" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToActions1">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 5b -->
                            <div class="form-group pb-display pb-step" id="step5b">
                                <label for="step5Label" class="pb-label">Step 5:</label>
                                <div id="step5b" class="pb-display pb-inner-step">
                                    <label for="G1O1A2T1Label" class="pb-label">Task 1 name:</label>
                                    <textarea name="task3" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable3" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step5b" class="pb-display pb-inner-step">
                                    <label for="G1O1A2T2Label" class="pb-label">Task 2 name:</label>
                                    <textarea name="task4" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable4" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToActions2">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 5c -->
                            <div class="form-group pb-display pb-step" id="step5c">
                                <label for="step5Label" class="pb-label">Step 5:</label>
                                <div id="step5c" class="pb-display pb-inner-step">
                                    <label for="G1O2A1T1Label" class="pb-label">Task 1 name:</label>
                                    <textarea name="task5" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable5" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step5b" class="pb-display pb-inner-step">
                                    <label for="G1O2A1T2Label" class="pb-label">Task 2 name:</label>
                                    <textarea name="task5" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable5" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToActions3">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 5d -->
                            <div class="form-group pb-display pb-step" id="step5d">
                                <label for="step5Label" class="pb-label">Step 5:</label>
                                <div id="step5d" class="pb-display pb-inner-step">
                                    <label for="G1O2A2T1Label" class="pb-label">Task 1 name:</label>
                                    <textarea name="task7" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable7" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step5d" class="pb-display pb-inner-step">
                                    <label for="G1O2A2T2Label" class="pb-label">Task 2 name:</label>
                                    <textarea name="task8" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable8" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToActions4">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 5e -->
                            <div class="form-group pb-display pb-step" id="step5e">
                                <label for="step5Label" class="pb-label">Step 5:</label>
                                <div id="step5e" class="pb-display pb-inner-step">
                                    <label for="G2O1A1T1Label" class="pb-label">Task 1 name:</label>
                                    <textarea name="task9" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable9" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step5e" class="pb-display pb-inner-step">
                                    <label for="G2O1A1T2Label" class="pb-label">Task 2 name:</label>
                                    <textarea name="task10" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable10" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToActions5">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 5f -->
                            <div class="form-group pb-display pb-step" id="step5f">
                                <label for="step5Label" class="pb-label">Step 5:</label>
                                <div id="step5f" class="pb-display pb-inner-step">
                                    <label for="G2O1A2T1Label" class="pb-label">Task 1 name:</label>
                                    <textarea name="task11" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable11" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step5f" class="pb-display pb-inner-step">
                                    <label for="G2O1A2T2Label" class="pb-label">Task 2 name:</label>
                                    <textarea name="task12" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable12" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToActions6">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 5g -->
                            <div class="form-group pb-display pb-step" id="step5g">
                                <label for="step5Label" class="pb-label">Step 5:</label>
                                <div id="step5g" class="pb-display pb-inner-step">
                                    <label for="G2O2A1T1Label" class="pb-label">Task 1 name:</label>
                                    <textarea name="task13" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable13" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step5g" class="pb-display pb-inner-step">
                                    <label for="G2O2A1T2Label" class="pb-label">Task 2 name:</label>
                                    <textarea name="task14" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable14" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToActions7">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>

                            <!-- Step 5h -->
                            <div class="form-group pb-display pb-step" id="step5h">
                                <label for="step5Label" class="pb-label">Step 5:</label>
                                <div id="step5h" class="pb-display pb-inner-step">
                                    <label for="G2O2A2T1Label" class="pb-label">Task 1 name:</label>
                                    <textarea name="task15" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable15" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="step5h" class="pb-display pb-inner-step">
                                    <label for="G2O2A2T2Label" class="pb-label">Task 2 name:</label>
                                    <textarea name="task16" rows="1" class="pb-text"></textarea>
                                    <table name="tasktable16" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Due (YYYY/MM/DD)</th>
                                            <th>Owner</th>
                                            <th>Lead</th>
                                            <th>Collaborators</th>
                                            <th>Status</th>
                                            <th>Success Measures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td contenteditable="true" id="date"></td>
                                            <td contenteditable="true" id="owner"></td>
                                            <td contenteditable="true" id="lead"></td>
                                            <td contenteditable="true" id="collaborators"></td>
                                            <td contenteditable="true" id="status"></td>
                                            <td contenteditable="true" id="success"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pb-display" id="backToActions8">
                                    <button class="btn btn-primary pb-btn" type="button">Back</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>







@stop