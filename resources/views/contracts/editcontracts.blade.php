
@extends('layouts.master');
@section('content')

<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <div class="shadow-lg p-3">
           <!-- Page Header -->
            <div class="page-header-contracts">
                    <h3>Website : <span style="color:#e9ab2e"> YouthClub.pk </span> </h3>
                    <h4 class="YouthClub">Youth Club <BR> Trust </h4>
                    <img class="YouthClub"src="{{ URL::to('/assets/images/yclogo.png') }}">

            </div>

            <div class="letter-header">
                <p>  Ref:YC-HQ-HR-APP/xx </p>
                <p class="date"> Date :
                {{$contractYcm[0]->created_at}}
                </p>
            </div>
          @include('errors.messages')

          <form action="/contracts/edit/update/{{$contractYcm[0]->ycm_id}}" method="post">
          @method('PUT')
                @csrf
            
                <div class="subject form-group form-inline">
                    <label >Subject : </label>
                    <input type="text" class="form-control @error('subject') is-invalid @enderror"  id="exampleInputEmail1" name="subject" style="margin-left:5px;"  value="{{$contractYcm[0]->subject}}">

                </div>

                <div class="subject">
                    <p> Assalaam o’Alaykum wa rahmatullahi wa barakatuhu</p>

                </div>

                <div class="subject form-group form-inline">
                    <label for="exampleInputEmail1">Mr./Ms   </label>
                    <input type="text" class="form-control" readonly name="name" style="margin-left:5px;"placeholder="Name"  value="{{$contractYcm[0]->name}}
">

                </div>

                <div class="subject">
                    <p>We are pleased in conveying to you that approval is granted for your appointment at Youth Club Trust, at the position <input type="text" class="input-style" value="{{$contractYcm[0]->position}}
" name="position" id="position" size="10" > period of <span form-group form-inline> <input value="{{$contractYcm[0]->period}}
" type="text" class="input-style @error('period') is-invalid @enderror" name="period" id="position" size="10"> </span> years from <span form-group form-inline>
                        <input  value="{{$contractYcm[0]->started}}
" class="input-style"type="text" id="datefrom" name="from" id="position" size="10"> </span> until <span form-group form-inline> <input value="{{$contractYcm[0]->until}}
" class="input-style" id="dateto" type="text" name="until" id="position" size="10"> </span>. As per your job description, you will be based at the Youth Club Trust  Office in <span form-group form-inline> <input value="Islamabad
"type="text" class="input-style @error('city') is-invalid @enderror" name="city" id="position" size="10"> </span>. <br> <br>
                        Please note that there is a 3-month probation period, from <span form-group form-inline> <input  value="{{$contractYcm[0]->probabtion_start}}
" class='input-style 'id="pdatefrom"  type="text" name="probabtion_from"  size="10"> </span> to <span form-group form-inline> <input  class="input-style"   value="{{$contractYcm[0]->probabtion_end}}
" id="pdateto" type="text" name="probabtion_until"  size="10"> </span>. Your contract will officially start after the probation period subject to approval. You will be eligible to apply for
                        renewal of contract a month before your contract expires. You can choose to apply for one/three/five years or permanent according to your preference. Please note that approval of
                        contract will be subject to your previous performance, evaluation and as approved by the authorities.<br> <br>
                        Your salary for this post will be Rs. <span form-group form-inline> <input  value="{{$contractYcm[0]->salary }}
"class="input-style @error('salary') is-invalid @enderror" type="text" name="salary" id="position" size="5"> </span> per month. There are no other entitlements with this appointment. You will report to and take your instructions from Head of Department and Country Manager from time to time.<br> <br>
                        Management has the right to expel immediately any employee without giving any reason or any prior notice in the lager interest of the Youth Club Trust and YCM. Therefore this contract can be discontinue at any time without any prior notice.<br> <br>

                        We would be pleased if you could agree to accept thi s appointment and indicate your acceptance by signing and returning one copy of this letter. Also please read and sign the attached the undertaking document and fill in the attached YC data form. We wish you all the best for the future.
                        <br> <br>
                        Regards,
                        <br><br>
                        {{Auth::user()->name}}
                        <br> <br>
                        HR Manager, Youth Club Trust
                    </p>
                    <button type='submit' class="btn add-btn" >Update Contract</button>

                </div>

</form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet"type="text/css"/>
<script>

    $(function () {
        
        $("#datefrom").datepicker({
            onSelect: function (selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() + 1);
                $("#dateto").datepicker("option", "minDate", dt);
            }
        });
        $("#dateto").datepicker({
            onSelect: function (selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() - 1);
                $("#datefrom").datepicker("option", "maxDate", dt);
            }
        });
        console.log($("#datefrom").val());
    });
    </script>
    <script>

        $(function () {
            $("#pdatefrom").datepicker({
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    $("#pdateto").datepicker("option", "minDate", dt);
                }
            });
            $("#pdateto").datepicker({
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    $("#pdatefrom").datepicker("option", "maxDate", dt);
                }
            });
        });
        </script>
@endsection