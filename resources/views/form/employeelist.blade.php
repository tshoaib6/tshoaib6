@extends('layouts.master')
@section('content')
@include('form.ycmadd')

            {{-- message --}}
            {!! Toastr::message() !!}

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Role</th>
                                    <th class="text-right no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($ycm as $items )
                                <tr>


                                    <td>
                                        <h2 class="table-avatar">
                                            {{-- <a href="{{ url('employee/profile/'.$items->id) }}" class="avatar"><img alt="" src="{{ URL::to('/assets/images/photo_defaults.jpg') }}"></a> --}}
                                            <a href="{{ url('employee/profile/'.$items->id) }}">{{ $items->name .' '. $items->lname}}</a>
                                        </h2>
                                    </td>
                                    <td>{{ $items->email }}</td>
                                    <td>{{ $items->phone_no }}</td>
                                    <td><span class="badge badge-info mr-1">{{ $items->status }}</span></td>
                                    <td>{{ $items->designation }}</td>

                                    <td class="text-right">
                                        {{-- @if (Auth::user()->can('user.edit')) --}}
                                        <a class="btn btn-success text-white" href="/edit/ycm/{{$items->id}}">Edit</a>
                                        {{-- @endif --}
                                        {{-- @if (Auth::user()->can('user.delete')) --}}
                                        <a class="btn btn-danger text-white" href=""
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $items->id }}').submit();">
                                            Delete
                                        </a>
                                        {{-- @endif --}}

                                        <form id="delete-form-{{ $items->id }}" action="/ycm/destroy/{{$items->id}}" method="POST" style="display: none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

        <a href="{{ route('exportContacts') }}" class="btn add-btn" > Download Contact List </a>

            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Employee Modal -->


        <!-- /Add Employee Modal -->
    </div>
    <!-- /Page Wrapper -->
    @section('script')
    <script>
        $("input:checkbox").on('click', function()
        {
            var $box = $(this);
            if ($box.is(":checked"))
            {
                var group = "input:checkbox[class='" + $box.attr("class") + "']";
                $(group).prop("checked", false);
                $box.prop("checked", true);
            }
            else
            {
                $box.prop("checked", false);
            }
        });
    </script>
    <script>
        // select auto id and email
        $('#name').on('change',function()
        {
            $('#employee_id').val($(this).find(':selected').data('employee_id'));
            $('#email').val($(this).find(':selected').data('email'));
        });
    </script>
    @endsection
@endsection
