@extends('layouts._master')
@section('css')

    <!-- summernotes CSS -->
    <link href="/assets/master/plugins/summernote/dist/summernote.css" rel="stylesheet"/>
    <link href="/assets/master/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="/assets/master/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/master/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-10">

                              @include('layouts._partials.web._errors')

                                <form action="/admin/locations/save" method="post" class="form-horizontal m-t-40" enctype="multipart/form-data">

                                    @csrf

                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <label>Select State</label>

                                            <select name="state_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option>Choose</option>
                                                @foreach($viewModel['stateList'] as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <a href="/admin/locations" class="btn btn-warning waves-effect waves-light">Cancel</a>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Create Location</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')



    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="/assets/master/plugins/switchery/dist/switchery.min.js"></script>
    <script src="/assets/master/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="/assets/master/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="/assets/master/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    {{--<script src="/assets/master/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>--}}
    <script type="text/javascript" src="/assets/master/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script>
        jQuery(document).ready(function() {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();

            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function() {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function() {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function() {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function() {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
        });
    </script>
@endsection