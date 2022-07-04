



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
                <h4 class="header-title float-left">Users List</h4>
                <p class="float-right mb-4">
                    <a class="btn btn-primary text-white" href="/createRole">Create New User</a>
                </p>
                <div class="clearfix" ></div>
                <div>
                    @include('errors.messages')
        <div class="">

            <table class="table table-striped datatable text-center">
                <thead>
                    <tr>
                        <th width="5%">Sl</th>
                        <th width="10%">Name</th>
                        <th width="60%">Permissions</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                         <td>{{ $loop->index+1 }}</td>
                         <td>{{ $role->name }}</td>
                         <td >
                             @foreach ($role->permissions as $perm)
                                 <span class="badge badge-info mr-1">
                                     {{ $perm->name }}
                                 </span>
                             @endforeach
                         </td>
                         <td>
                                 <a class="btn btn-success text-white" href="/role/edit/{{$role->id}}">Edit</a>


                                 <a class="btn btn-danger text-white" href="#"
                                 onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">
                                     Delete
                                 </a>

                                 <form id="delete-form-{{ $role->id }}" action="/role/delete/{{$role->id}}" method="POST" style="display: none;">
                                     @method('DELETE')
                                     @csrf
                                 </form>
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

