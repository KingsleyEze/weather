@extends('layouts._master')
@section('css')

    @endsection
@section('content')


    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
{{--                            <h3 class="">{{ $viewModel['blogCount'] }}</h3>--}}
                            <h6 class="card-subtitle">Blog Posts</h6></div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
{{--                            <h3 class="">{{ $viewModel['commentCount'] }}</h3>--}}
                            <h6 class="card-subtitle">Blog Comments</h6></div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
{{--                            <h3 class="">{{ $viewModel['categoryCount'] }}</h3>--}}
                            <h6 class="card-subtitle">Categories</h6></div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="m-b-0"><i class="mdi mdi-buffer text-warning"></i></h2>
{{--                            <h3 class="">{{ $viewModel['tagCount'] }}</h3>--}}
                            <h6 class="card-subtitle">Tags</h6></div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
                {{--<!-- Column -->--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<h4 class="card-title">Recent Comments</h4>--}}
                        {{--<h6 class="card-subtitle">Latest Comments from users on Travoola</h6> </div>--}}
                    {{--<!-- ============================================================== -->--}}
                    {{--<!-- Comment widgets -->--}}
                    {{--<!-- ============================================================== -->--}}
                    {{--<div class="comment-widgets m-b-20">--}}

                        {{--@foreach($viewModel['commentList'] as $comment)--}}
                        {{--<!-- Comment Row -->--}}
                        {{--<div class="d-flex flex-row comment-row">--}}
                            {{--<div class="p-2"><span class="round"><img src="/assets/master/images/users/3.jpg" alt="user" width="50"></span></div>--}}
                            {{--<div class="comment-text w-100">--}}
                                {{--<h5>{{ $comment->name }}</h5>--}}
                                {{--<div class="comment-footer">--}}
                                    {{--<span class="date">{{ $comment->created_at }}</span>--}}
                                    {{--<span class="label label-info">Pending</span> <span class="action-icons">--}}
                                                    {{--<a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>--}}
                                                    {{--<a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>--}}
                                                    {{--<a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>--}}
                                                {{--</span>--}}
                                {{--</div>--}}
                                {{--<p class="m-b-5 m-t-10">--}}
                                    {{--{{ $comment->comment }}--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Column -->--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/master/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/master/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/master/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/master/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/master/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/master/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/master/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="/assets/master/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>

@endsection
@section('scripts')
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    <script src="/assets/master/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--morris JavaScript -->
    <script src="/assets/master/plugins/raphael/raphael-min.js"></script>
    <script src="/assets/master/plugins/morrisjs/morris.min.js"></script>
    <!-- Chart JS -->
    <script src="/assets/master/js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="/assets/master/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    @endsection