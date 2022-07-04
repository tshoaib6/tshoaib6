
@extends('layouts.master')
{{--
@section('menu')
@extends('sidebar.dashboard')
@endsection --}}
@section('content')



    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <!-- /Page Header -->
            <div class="card mb-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{$emp->name." ".$emp->lname}}</h3>
                                                <h6 class="text-muted"> </h6>
                                                <small class="text-muted"></small>
                                                <div class="staff-id">Employee ID :  {{$emp->id}}</div>
                                                <div class="small doj text-muted">Date of Join : {{$emp->created_at}}</div>
                                                <div class="d-flex">
                                                    @if($emp->contracted)
                                                <div  class="staff-msg"><a class="btn btn-custom"  href="/contracts/view/{{$emp->id}}">View Contract </a></div>
                                                @endif
                                                <div class="staff-msg ml-2"><a class="btn btn-custom" href="/all/employee/view/edit/{{$emp->id}}">View YCM form </a></div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="personal-info">
                                                <div class="d-flex mb-2">
                                                    <div class="col md-6">
                                                        <div class="title">Phone: {{$emp->phone_no}} </div>
                                                    </div>
                                                    <div class="col md-6">
                                                        <div class="title">Email: {{$emp->email}}</div>
                                                    </div>
                                              </div>
                                            <div class="d-flex mb-2">
                                                    <div class="col md-6">
                                                        <div class="title">Birthday: {{$emp->birth_date}}</div>
                                                    </div>
                                                    <div class="col md-6">
                                                        <div class="title">Address: {{$emp->address}} </div>
                                                    </div>

                                             </div>
                                             <div class="d-flex">
                                                <div class="col md-6">
                                                    <div class="title">Gender: {{$emp->gender}}</div>
                                                </div>
                                                <div class="col md-6">
                                                    <div class="title">Cnic : {{$emp->cnic}}</div>
                                                </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<br>

                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Jobs Experience <a href="/edit/ycm/{{$emp->id}}" class="edit-icon" ><i class="fa fa-pencil"></i></a></h3>
                                    <div class="experience-box">
                                        <ul class="experience-list">
                                            @foreach ($jobs as $job )
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <a href="#/" class="name">{{$job->Insitute}}</a>
                                                        <div>{{$job->posistion}}</div>
                                                        <span class="time">{{$job->Join_date." - ". $job->End_date}}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Dawah Experience <a href="/edit/ycm/{{$emp->id}}" class="edit-icon" data-toggle="modal" data-target="#experience_info"><i class="fa fa-pencil"></i></a></h3>
                                    <div class="experience-box">
                                        <ul class="experience-list">
                                            @foreach ($dawahs as $dawah )


                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <a href="#/" class="name">{{$dawah->Insitute}}</a>
                                                        <div>{{$dawah->posistion}}</div>

                                                        <span class="time">{{$dawah->from_date." - ". $dawah->to_date}}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Profile Info Tab -->



                <!-- Bank Statutory Tab -->



    </div>
@endsection
