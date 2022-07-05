
@extends('layouts.master');
@section('content')
<style>
    .headercontract{
	height: 200px;
	background-image: url('/assets/images/back.jpg')
	
}
    </style>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="container">
            <div class="shadow-lg">
                <div class="d-flex headercontract p-5">
                    <div class="d-flex align-items-center col-md-6">
                        <p> <b> Website </b> : www.youthclub.pk </p>
                    </div>
                    <div class="d-flex col-md-6 justify-content-end align-items-center">
                    <img src="{{ URL::to('assets/images/yclogo.png') }}" height=50px; width=50px; alt="">

                    <h4 style="margin-left:5px "> <b>Youth Club <br> Trust </b> </h4>
                    
                    </div>
                
                </div>

                <div class="contract-body p-5">

                    <div class="letter-header">
                        <p>  Ref:YC-HQ-HR-APP/xx </p>
                        <p class="date"> Date :
                        <script> document.write(new Date().toLocaleDateString()); </script>
                        </p>
                    </div>
        
                    <form action="" method="POST">
                        @csrf
                        <div class="subject form-group form-inline">
                            <label >Subject : </label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror"  id="exampleInputEmail1" name="subject" style="margin-left:5px;" placeholder="Subject ">
        
                        </div>
        
                        <div class="subject">
                            <p> Assalaam o’Alaykum wa rahmatullahi wa barakatuhu</p>
        
                        </div>
        
                        <div class="subject form-group form-inline">
                            <label for="exampleInputEmail1">Mr./Ms   </label>
                            <input type="text" class="form-control" readonly name="name" style="margin-left:5px;"placeholder="Name">
        
                        </div>
        
                        <div class="subject">
                            <p>We are pleased in conveying to you that approval is granted for your appointment at Youth Club Trust as <b> YCM </b>, at the position <input type="text" class="input-style @error('position') is-invalid @enderror" name="position" id="position" size="10" > period of <span form-group form-inline> <input type="text" class="input-style @error('period') is-invalid @enderror" name="period" id="position" size="10" placeholder="1/3/5"> </span> years from <span form-group form-inline>
                                <input class="input-style"type="text" id="datefrom" name="from" id="position" size="10"> </span> until <span form-group form-inline> <input class="input-style" id="dateto" type="text" name="until" id="position" size="10"> </span>. As per your job description, you will be based at the <b>Youth Club Trust </b>  Office in <span form-group form-inline> <input type="text" class="input-style @error('city') is-invalid @enderror" name="city" id="position" size="10"> </span>. <br> <br>
                                During this time you are allowed leave as per Youth Club policies subject to the approval and proper
                                notification through your immediate head. Kindly refer to YC leave policies for further information.
                                
                                <br> <br> 
                                Please note that there is a <b>3-month probation period </b>, from <span form-group form-inline> <input  class='input-style 'id="pdatefrom"  type="text" name="probabtion_from"  size="10"> </span> to <span form-group form-inline> <input  class="input-style" id="pdateto" type="text" name="probabtion_until"  size="10"> </span>. Your contract will officially start after the probation period subject to approval. You will be eligible to apply for
                                renewal of contract a month before your contract expires. Please note that approval of
                                contract will be subject to your previous performance, evaluation and as approved by the authorities. Your job description is as
                                follows:
                                <br> <br>
                                 You will report to and take your instructions from <b> Head of Department </b> and <b> Regional Director/Country Manager </b> from time to time.
                                Management has the right to expel immediately any employee without giving any reason or any prior notice in the lager interest of the Youth Club Trust and YCM. Therefore this contract can be <b>discontinued</b> at any time <b>without any prior notice </b> .<br> <br>
                                As a Youth Club Trust employee we expect that you will do your utmost to safeguard the interests of the
                                organization and diligently maintain excellence in moral and ethical standards, as outlined in our
                                <b> Constitution</b> and <b> Code of Conduct </b> documents.
                                <br> <br>
                                We would be pleased if you could agree to accept thi s appointment and indicate your acceptance by signing and returning one copy of this letter. Also please read and sign the attached the undertaking document and fill in the attached YC data form. We wish you all the best for the future.
                                <br> <br>
                                Regards,
                                <br><br>
                                {{Auth::user()->name}}
                                <br> <br>
                                HR Manager, Youth Club Trust
        
        
                            </p>
                            <button type='submit' class="btn add-btn"> Offer </button>
        
                        </div>
                    </form>  
              </div>

          </div>
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