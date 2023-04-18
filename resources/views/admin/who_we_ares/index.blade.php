@extends('layouts.admin')
@push('head')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
@endpush
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Who We Are</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                <li class="breadcrumb-item who_we_areive">Who We Are</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <div class="flex-grow-1">
                                    <a href="{{url('/admin/who_we_are/create')}}" class="btn btn-info add-btn"><i
                                            class="ri-add-fill me-1 align-bottom"></i> Add Who We Are
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if($errors->any())
                    @include('errors')
                @endif
                @if (session('message'))
                    <div class="col-lg-6">
                        <!-- Primary Alert -->
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong> Hi! </strong> <b>{{session('message')}} </b> !
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
            @endif
            <!--end col-->
                <div class="col-xxl-9">
                    <div class="card" id="companyList">
                        <div class="card-header">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="search-box">
                                        <input type="text" class="form-control search"
                                               placeholder="search...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>

                                <div class="accordion" id="default-accordion-example">
                                    @foreach($who_we_ares as $who_we_are)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse_vision"
                                                        aria-expanded="true"
                                                        aria-controls="collapse{{$who_we_are->id}}">
                                                    Vision
                                                </button>
                                            </h2>
                                            <div id="collapse_vision"
                                                 class="accordion-collapse collapse show"
                                                 aria-labelledby="headingOne"
                                                 data-bs-parent="#default-accordion-example">
                                                <div class="accordion-body">
                                                    {!! $who_we_are->vision !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse_mission"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                    Mission
                                                </button>
                                            </h2>
                                            <div id="collapse_mission" class="accordion-collapse collapse"
                                                 aria-labelledby="headingTwo"
                                                 data-bs-parent="#default-accordion-example">
                                                <div class="accordion-body">
                                                    {!! $who_we_are->mission !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse_core_values"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                    Core Functions
                                                </button>
                                            </h2>
                                            <div id="collapse_core_values" class="accordion-collapse collapse"
                                                 aria-labelledby="headingTwo"
                                                 data-bs-parent="#default-accordion-example">
                                                <div class="accordion-body">
                                                    {!! $who_we_are->core_values !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse_strategic_goals"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                   Strategic Goals
                                                </button>
                                            </h2>
                                            <div id="collapse_strategic_goals" class="accordion-collapse collapse"
                                                 aria-labelledby="headingTwo"
                                                 data-bs-parent="#default-accordion-example">
                                                <div class="accordion-body">
                                                    {!! $who_we_are->strategic_goals !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <div class="hstack gap-2 justify-content-end">

                                                <a href="{{url('/admin/who_we_are/'.$who_we_are->id.'/edit')}}"
                                                   class="btn btn-success" id="add-btn">Edit Section</a>

                                            </div>
                                        </div>

                                    @endforeach
                                </div>

                            </div>

                        </div>
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-xxl-3">
                    <div class="card" id="company-view-detail">

                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
@stop
@push('scripts')
    <!-- ckeditor -->

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script type="text/javascript">
        ClassicEditor
            .create(document.querySelector('.editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function () {
            $(".datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>

@endpush
