@extends('layouts.master')
@section('content')

<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">User Create</h4>
                       
                    </div>
                </div>

            </div>
        </div>
        <!-- page title area end -->

        <div class="main-content-inner">
            <div class="row">
                <!-- data table start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Create New Role</h4>
                            @include('errors.messages')

                            <form action="/storeuser" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="name">User Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="email">User Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Password">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="password">Assign Roles</label>
                                        <select name="roles[]" id="roles" class="form-control select2" multiple>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save User</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- data table end -->

            </div>
        </div>
    </div>
</div>

        @endsection

        @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            })
        </script>
        @endsection