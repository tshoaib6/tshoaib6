@extends('layouts.master')
<!-- @section('content') -->
<!-- @include('form.ycmcontractserach') -->

<!-- <div class="page-wrapper">
    <div class="content container-fluid">
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped custom-table datatable">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Position</th>
                        <th>Action</th>

                       </tr>
                </thead>
                <tbody>


                    @foreach ($contractYcm as $items )
                    {{$items->contractedYcm->id}}
             <tr>
                      <td>
                            <h2 class="table-avatar">
                                {{-- <a href="{{ url('employee/profile/'.$items->id) }}" class="avatar"><img alt="" src="{{ URL::to('/assets/images/photo_defaults.jpg') }}"></a> --}}
                                 <a href="/employee/profile/{{$items->contractedYcm->id}}"> {{ $items->contractedYcm->name .' '. $items->contractedYcm->lname}} </a>
                            </h2>
                        </td>

                        <td>{{ $items->contractedYcm->email }}</td>
                        <td>{{ $items->contractedYcm->phone_no }}</td>
                        <td>{{ $items->position }}</td>

                        <td class="text-right">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="" onclick="return confirm('Are you sure to want to delete it?')"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div> -->
<!-- @endsection  -->
