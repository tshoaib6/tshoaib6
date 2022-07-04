
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
                    @if (Auth::user()->can('user.create'))
                    <a class="btn btn-primary text-white" href="/createuser">Create New User</a>
                    @endif
                </p>
                <div class="clearfix" ></div>
                <div>
                    @include('errors.messages')
        <div class="table-responsive">
            <table class="table table-striped custom-table datatable">
                <thead>
                    <tr >
                        <th width="5%">Sl</th>
                        <th width="10%">Name</th>
                        <th width="10%">Email</th>
                        <th width="40%">Roles</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                         <td>{{ $loop->index+1 }}</td>
                         <td>{{ $user->name }}</td>
                         <td>{{ $user->email }}</td>
                         <td>
                             @foreach ($user->roles as $role)
                                 <span class="badge badge-info mr-1">
                                     {{ $role->name }}
                                 </span>
                             @endforeach
                         </td>
                         <td>
                            @if (Auth::user()->can('user.edit'))
                             <a class="btn btn-success text-white" href="/user/edit/{{$user->id}}">Edit</a>
                             @endif
                             @if (Auth::user()->can('user.delete'))
                             <a class="btn btn-danger text-white" href=""
                             onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                                 Delete
                             </a>
                             @endif

                             <form id="delete-form-{{ $user->id }}" action="/user/delete/{{$user->id}}" method="POST" style="display: none;">
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

