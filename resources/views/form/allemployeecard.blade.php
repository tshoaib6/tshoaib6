
@extends('layouts.master')
@section('content')
@include('form.ycmadd')

            <div class="row staff-grid-row">
                @foreach ($ycm as $lists )
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <a href="{{ url('employee/profile/'.$lists->id) }}" class="avatar"><img src="/images/ycmimages/{{$lists->avatar}}" alt="Image"></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ url('all/employee/view/edit/'.$lists->id) }}"><i class="fa fa-pencil m-r-5"></i> View</a>
                                <a class="dropdown-item" href="/edit/ycm/{{$lists->id}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                <a class="dropdown-item" href="/ycmtasks/assignform/{{$lists->id}}"><i class="fa fa-pencil m-r-5"></i> Assign Task </a>
                              <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $lists->id }}').submit()"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                              <form id="delete-form-{{ $lists->id }}" action="/ycm/destroy/{{$lists->id}}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                              </form>
                            </div>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">{{ $lists->name  }}</a></h4>
                        <div class="small text-muted">{{$lists->designation}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- /Page Content -->



@endsection
