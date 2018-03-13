@extends('layouts._master')
@section('content')

    <div class="container-fluid">
        <div class="row">


            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Location List</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="/admin/locations/create" class="btn btn-success pull-right">CREATE</a>
                            </div>
                        </div>
                        <br class="clear-fix"/>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date Created</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--@foreach($blogList as $blog)--}}
                                    {{--<tr>--}}
                                        {{--<td>{{ $blog->title }}</td>--}}
                                        {{--<td>{{ $blog->created_at }}</td>--}}
                                        {{--<td class="text-nowrap">--}}
                                            {{--<a href="/admin/blog/edit/{{ $blog->id }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>--}}
                                            {{--<a href="/admin/blog/delete/{{ $blog->id }}" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
    </div>

@endsection