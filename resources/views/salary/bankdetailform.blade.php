@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">


<form action="" method="POST">
        @csrf

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label ">Bank Name </label>
                    <input class="form-control  @error('name') is-invalid @enderror " type="text" id="name" name="name" placeholder="Bank Name" value="{{old('name')}}">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Branch </label>
                    <input class="form-control @error('name') is-invalid @enderror " type="text" id="name" name="lname" placeholder="Branch Name" value="{{old('lname')}}">

                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Account No</label>
                    <input class="form-control @error('cnic') is-invalid @enderror " type="text" id="name" name="Accountno" placeholder="Account No" value="{{old('cnic')}}">

                </div>
            </div>
</form>


</div>
</div>
</div>