@extends('layouts.master')
@section('content')

<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">

        <div class="container m-5 p-2 rounded mx-auto bg-light shadow">
            <!-- App title section -->
            <div class="row m-1 p-4">
                <div class="col">
                    <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                        <i class="fa fa-check bg-primary text-white rounded p-2"></i>
                        <u>Todo-s</u>
                    </div>
                </div>
            </div>

            <!-- Create todo section -->
            <form action="/savetask/{{$id}}" method="POST">
                @csrf
            <div class="row m-1 p-3">
                <div class="col col-11 mx-auto">
                    <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
                        <div class="col">
                            <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" name="task"type="text" placeholder="Add new ..">
                        </div>

                        <div class="col-auto m-0 px-2 d-flex align-items-center">
                            <label class="text-secondary my-2 p-0 px-1 view-opt-label due-date-label d-none">Due date not set</label>
                            <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" name="duedate" type="date" placeholder="">

                            <i class="fa fa-calendar my-2 px-1 text-primary btn due-date-button" data-toggle="tooltip" data-placement="bottom" title="Set a Due date"></i>
                            <i class="fa fa-calendar-times-o my-2 px-1 text-danger btn clear-due-date-button d-none" data-toggle="tooltip" data-placement="bottom" title="Clear Due date"></i>
                        </div>
                        <div class="col-auto px-0 mx-0 mr-2">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>

                    </div>
                </form>
                </div>
            </div>
            <div class="p-2 mx-4 border-black-25 border-bottom"></div>

            <!-- Todo list section -->

            </div>
        </div>
    </div>
</div>



@endsection
