
@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="container">
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
    <div class="col-sm-12">
    <div class="submit-section">
        <a href='' class="btn btn-primary submit-btn">Generate Pdf </a>
    </div>

    <div class="submit-section">
        <a  href="#" data-toggle="modal" data-target="#contract_type" class="btn btn-primary submit-btn">Offer Contract</a>
        {{-- href="{{ url('all/employee/contract/'.$employees[0]->id) }}" --}}
    </div>
</div>
        </div>


    </div>


    
    <!-- Add Salary Modal -->
    <div id="contract_type" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select Contract Type </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column">
                        <a data-dismiss="modal" data-toggle="modal" data-target="#paid_ycm" class="btn btn-primary submit-btn mt-2">Unpaid YCM</a>
                        <a  href="{{ url('all/employee/contract/'.$employees[0]->id) }}" class="btn btn-primary submit-btn mt-2 ">Paid YCM</a>
                        <a  href="{{ url('all/employee/contract/'.$employees[0]->id) }}"  class="btn btn-primary submit-btn mt-2">Unpaid YCE</a>
                        <a  href="{{ url('all/employee/contract/'.$employees[0]->id) }}"  class="btn btn-primary submit-btn mt-2 ">Paid YCE </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Salary Modal -->

  <!-- Add Salary Modal -->
  <div id="paid_ycm" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Staff Salary</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    <div class="row"> 
                        
                        <input class="form-control" type="hidden" name="rec_id" id="employee_id" readonly>
                        <div class="col-sm-6"> 
                            <label>Net Salary</label>
                            <input class="form-control @error('salary') is-invalid @enderror" type="number" name="salary" id="salary" value="{{ old('salary') }}" placeholder="Enter net salary">
                            @error('salary')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-sm-6"> 
                            <h4 class="text-primary">Earnings</h4>
                            <div class="form-group">
                                <label>Basic</label>
                                <input class="form-control @error('basic') is-invalid @enderror" type="number" name="basic" id="basic" value="{{ old('basic') }}" placeholder="Enter basic">
                                @error('basic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>DA(40%)</label>
                                <input class="form-control @error('da') is-invalid @enderror" type="number"  name="da" id="da" value="{{ old('da') }}" placeholder="Enter DA(40%)">
                                @error('da')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>HRA(15%)</label>
                                <input class="form-control @error('hra') is-invalid @enderror" type="number"  name="hra" id="hra" value="{{ old('hra') }}" placeholder="Enter HRA(15%)">
                                @error('hra')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Conveyance</label>
                                <input class="form-control @error('conveyance') is-invalid @enderror" type="number"  name="conveyance" id="conveyance" value="{{ old('conveyance') }}" placeholder="Enter conveyance">
                                @error('conveyance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Allowance</label>
                                <input class="form-control @error('allowance') is-invalid @enderror" type="number"  name="allowance" id="allowance" value="{{ old('allowance') }}" placeholder="Enter allowance">
                                @error('allowance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Medical  Allowance</label>
                                <input class="form-control @error('medical_allowance') is-invalid @enderror" type="number" name="medical_allowance" id="medical_allowance" value="{{ old('medical_allowance') }}" placeholder="Enter medical  allowance">
                                @error('medical_allowance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">  
                            <h4 class="text-primary">Deductions</h4>
                            <div class="form-group">
                                <label>TDS</label>
                                <input class="form-control @error('tds') is-invalid @enderror" type="number" name="tds" id="tds" value="{{ old('tds') }}" placeholder="Enter TDS">
                                @error('tds')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label>ESI</label>
                                <input class="form-control @error('esi') is-invalid @enderror" type="number" name="esi" id="esi" value="{{ old('esi') }}" placeholder="Enter ESI">
                                @error('esi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>PF</label>
                                <input class="form-control @error('pf') is-invalid @enderror" type="number" name="pf" id="pf" value="{{ old('pf') }}" placeholder="Enter PF">
                                @error('pf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Leave</label>
                                <input class="form-control @error('leave') is-invalid @enderror" type="text" name="leave" id="leave" value="{{ old('leave') }}" placeholder="Enter leave">
                                @error('leave')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Prof. Tax</label>
                                <input class="form-control @error('prof_tax') is-invalid @enderror" type="number" name="prof_tax" id="prof_tax" value="{{ old('prof_tax') }}" placeholder="Enter Prof. Tax">
                                @error('prof_tax')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Loan</label>
                                <input class="form-control @error('labour_welfare') is-invalid @enderror" type="number" name="labour_welfare" id="labour_welfare" value="{{ old('labour_welfare') }}" placeholder="Enter Loan">
                                @error('labour_welfare')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

