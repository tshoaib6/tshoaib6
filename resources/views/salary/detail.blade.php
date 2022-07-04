@extends('layouts.master')
@section('content')
@include('salary.addbank')

<div id="emp_profile" class="pro-overview tab-pane fade show active">
                    <div class="row">

                        <div class="col-md-12 d-flex">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Bank Details <a href="#" class="edit-icon" data-toggle="modal" data-target="#personal_info_modal"><i class="fa fa-pencil"></i></a></h3>
                                    
                                    <ul class="personal-info">
                                        <br>
                                      <div class="d-flex mb-2">
                                                    <div class="col md-6">
                                                        <div class="title">Bank Name : </div>
                                                    </div>
                                                    <div class="col md-6">
                                                        <div class="title">Branch : </div>
                                                    </div>
                                        </div>

                                        <div class="d-flex mb-2">
                                                    <div class="col md-6">
                                                        <div class="title">Account No :  </div>
                                                    </div>
                                                    
                                                    <div class="col md-6">
                                                        <div class="title">Salary :  </div>
                                                    </div>
                                                    
                                        </div>

                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>


@endsection