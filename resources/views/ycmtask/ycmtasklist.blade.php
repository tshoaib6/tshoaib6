



@extends('layouts.master')
@section('content')

<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <div class="main-content-inner">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title float-left">Ycm Tasks</h4>
                <p class="float-right mb-4">
                    <a class="btn btn-primary text-white" href="">Assign New Task</a>
                </p>
                <div class="clearfix" ></div>
                <div>
                    @include('errors.messages')
        <div class="">

            <table class="table table-striped datatable text-center">
                <thead>
                    <tr>
                        <th width="5%">Name</th>
                        <th width="50%">Task</th>
                        <th width="10%">Status</th>
                        <th width="10%">Due Date</th>

                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
@foreach ($task as $item )
<tr>
    <td>
        @foreach ($employee as $em )
            {{$em->name}}
        @endforeach
    </td>
    <td>{{ $item->task }}</td>
    <td><span class="badge badge-info mr-1">
        {{ $item->status}}
    </span></td>
    <td>{{ $item->date}}</td>

    <td>
        <a class="btn btn-success text-white" href="">Edit</a>


        <a class="btn btn-danger text-white" href="#"
        onclick="event.preventDefault(); document.getElementById('delete-form-').submit();">
            Delete
        </a>

        {{-- <form id="delete-form-{{ }}" action="" method="POST" style="display: none;">
            @method('DELETE')
            @csrf
        </form> --}}
</td>



</tr>

@endforeach
                 </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
</div>
</div>
</div>
</div>
@endsection

