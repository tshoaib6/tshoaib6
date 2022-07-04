
@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
<div style="margin-bottom: 20px">
 <img src="{{ URL::to('/assets/images/yclogo.png') }}" alt="" style="display: inline-block">
<h1 style="display: inline-block; margin-left:10px; color:	#800000;">YC DATA COLLECTION FORM </h1>
</div>

<div style=" background-color:	#800000;">
    <h1 style="color: white; font-size:30px;">Basic Info</h1>
</div>

<div class="d-flex justify-content-center row">
    

    <div class="col-md-4">
            <img src="/images/ycmimages/{{$employees[0]->avatar}}" width="120px" height="120px" alt="">
    </div>
     </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label ">First Name </label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="First Name" readonly value="{{$employees[0]->name}}">

                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Last Name</label>
                    <input class="form-control  " type="text" id="name" name="lname" placeholder="Last Name" readonly value="{{$employees[0]->lname}}">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Birth Date</label>
                    <div class="cal-icon">
                        <input class="form-control" type="text" id="birthDate" readonly name="birthDate" value="{{$employees[0]->birth_date}}">
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">

                    <label class="col-form-label">Address</label>
                    <input class="form-control  " type="text" id="address" name="address" placeholder="Address" value="{{$employees[0]->address}}" readonly>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">City </label>
                    <input class="form-control @error('city') is-invalid @enderror" type="text" id="city" name="city" placeholder="City" readonly value="{{$employees[0]->city}}">

                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Country</label>
                    <input class="form-control " type="text" id="country" name="country" placeholder="Country" readonly value="{{$employees[0]->country}}">

                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Phone No</label>
                    <input class="form-control " type="text" id="phno" name="phno" placeholder="Phone Number" readonly value="{{$employees[0]->phone_no}}">

                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Whatsapp No</label>
                    <input class="form-control"  type="text" id="whatsAppNo" name="whatsappNo" placeholder="WhatsApp Number" readonly value="{{$employees[0]->whatsapp_no}}">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Gender</label>
                    <input class="form-control"  type="text" style="width: 100%;" tabindex="-1" aria-hidden="true" id="gender" name="gender" readonly value="{{$employees[0]->gender}}" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Email <span class="text-danger"></span></label>
                    <input class="form-control  " type="email" id="name" name="email" placeholder="Email" readonly value="{{$employees[0]->email}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Martial Status</label>
                    <input class="form-control"  type="text" style="width: 100%;" tabindex="-1" aria-hidden="true" id="gender" name="gender" readonly value="{{$employees[0]->martial_status}}" >

                </div>
            </div>
            <div  class="col-sm-12" style=" margin-bottom:20px; background-color:	#800000;">
                <h1 style="color: white; font-size:30px; " >Qualifications </h1>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Qualifications</label>
                    <input class="form-control"  type="text" style="width: 100%;" tabindex="-1" aria-hidden="true" id="gender" name="gender" readonly value="{{$employees[0]->qualification}}" >

                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Institute </label>
                    <input class="form-control " type="text" id="qu_insitute" name="qu_insitute" placeholder="Educational Institute" readonly value="{{$employees[0]->institute}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Course </label>
                    <input class="form-control @error('qu_course') is-invalid @enderror" type="text" id="qu_course" name="qu_course" placeholder="Course" readonly value="{{$employees[0]->institute}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Year</label>
                    <input class="form-control @error('qu_year') is-invalid @enderror" type="text" id="qu_year" name="qu_year" placeholder="Year" readonly value="{{$employees[0]->institute}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Field Of Study</label>
                    <input class="form-control @error('qu_fod') is-invalid @enderror" type="text" id="qu_fod" name="qu_fod" placeholder="Field Of Study" readonly value="{{$employees[0]->institute}}">
                </div>
            </div>
            <div  class="col-sm-12" style=" margin-bottom:20px; background-color:	#800000;">
                <h1 style="color: white; font-size:30px; " >Isalmic Studies </h1>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Islamic Studies </label>
                    <input class="form-control"  type="text" style="width: 100%;" tabindex="-1" aria-hidden="true" id="gender" name="gender" readonly value="{{$employees[0]->islamic_education}}" >
                </div>
            </div>

        @if ($employees[0]->martial_status=='M')
            <div class="table-responsive" id="hidden_div">
                <table class="table table-bordered" id="dynamic_field">
                    <tr> <th>Course</th>  <th>Institute</th> <th>Year</th></tr>
                    @foreach ($islamic as $islamic)
                    <tr>
                        <td><input type="text" name="Islamic_course[]" placeholder="Course" class="form-control name_list" readonly value="{{$islamic->Course}}"/></td>
                        <td><input type="text" name="Islamic_institute[]" placeholder="Institute" class="form-control name_list" readonly value="{{$islamic->Institute}}"/></td>
                        <td><input type="date" name="Islamic_year[]" placeholder="Year" class="form-control name_list" readonly value="{{$islamic->year}}"/></td>

                    </tr>
                    @endforeach
                </table>
            </div>
        @endif
        <div  class="col-sm-12" style=" margin-bottom:20px; background-color:	#800000;">
            <h1 style="color: white; font-size:30px; " >Job Experience </h1>
        </div>
<div class="table-responsive">
    <table class="table table-bordered" id="dynamic_job_field">
        <tr> <th>Position</th>  <th>Institute</th> <th>From</th> <th>To</th> </tr>
    @foreach ($job as $job)
    <tr>
        <td><input type="text" name="job_position[]" placeholder="Position" class="form-control name_list" readonly value="{{$job->posistion}}"/></td>
        <td><input type="text" name="job_institute[]" placeholder="Institute" class="form-control name_list" readonly value="{{$job->Insitute}}" /></td>
        <td><input type="date" name="job_from[]" placeholder="From" class="form-control name_list" readonly value="{{$job->Join_date}}"/></td>
        <td><input type="date" name="job_to[]" placeholder="To" class="form-control name_list"  readonly value="{{$job->End_date}}"/></td >
    </tr>
    @endforeach
    </table>
</div>
<div  class="col-sm-12" style=" margin-bottom:20px; background-color:	#800000;">
    <h1 style="color: white; font-size:30px; " >Dawah Experience </h1>
</div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dynamic_dawah_field">
            <tr> <th>Position</th>  <th>Institute</th> <th>From</th> <th>To</th> </tr>
        @foreach ($dawah as  $dawah)
        <tr>
            <td><input type="text" name="dawah_position[]" placeholder="Position" class="form-control name_list" readonly value="{{$dawah->posistion}}" /></td>
            <td><input type="text" name="dawah_institute[]" placeholder="Institute" class="form-control name_list" readonly value="{{$dawah->Insitute}}" /></td>
            <td><input type="date" name="dawah_from[]" placeholder="From" class="form-control name_list"  readonly value="{{$dawah->from_date}}"/></td>
            <td><input type="date" name="dawah_to[]" placeholder="To" class="form-control name_list" readonly value="{{$dawah->to_date}}"/></td>

        </tr>

        @endforeach
        </table>
    </div>
<div class="col-sm-12 "style="margin-top: 40px"> </div>
    <div class="col-sm-6">
        <div class="form-group">

            <label class="col-form-label">Number of Months Served as YC Volunteer</label>
            <input class="form-control" type="text" id="volunteer" name="volunteer" placeholder="Volunteer" readonly value="{{$employees[0]->name}}">

        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">

            <label class="col-form-label">Designation</label>
            <input class="form-control" type="text" id="Desgination" name="Desgination" placeholder="Desgination" readonly value="{{$employees[0]->designation}}">

        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="col-form-label"> YC Chapter</label>
            <input class="form-control" type="text" id="Chapter" name="Chapter" placeholder="Chapter" readonly value="{{$employees[0]->name}}">

        </div>
    </div>

        </div>


        <div class="submit-section">
            <a href='' class="btn btn-primary submit-btn">Generate Pdf </a>
        </div>

        <div class="submit-section">
            <a href="{{ url('all/employee/contract/'.$employees[0]->id) }}" class="btn btn-primary submit-btn">Offer Contract</a>
        </div>



@endsection

