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
                        <h4 class="mb-sm-0">Committee</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                <li class="breadcrumb-item committeeive">Committee</li>
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
                                    <a href="{{url('/admin/committee')}}" class="btn btn-info add-btn"><i
                                            class="ri-arrow-left-line align-bottom"></i> Back
                                    </a>
                                    <button class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#delete">
                                        <i class="ri-add-fill me-1 align-bottom"></i> Delete this item?
                                    </button>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="hstack text-nowrap gap-2">
                                        <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown"
                                                aria-expanded="false" class="btn btn-soft-info"><i
                                                class="ri-more-2-fill"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
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

                <div class="col-xxl-9">
                    <div class="card" id="companyList">
                        <div style="color: black;font-size: 18px;font-weight: bolder;" class="card-header">
                            Edit: {{$committee->name}}
                        </div>


                        <div class="card-body">
                            <!--end add modal-->

                            <div class="col-xxl-9">
                                <div class="card" id="companyList">

                                    <div class="card-body">

                                        <form method="post" action="{{url('/admin/committee/'.$committee->id)}}"
                                              enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" id="id-field"/>
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="companyname-field"
                                                                   class="form-label">Committee</label>
                                                            <input type="text" name="name" class="form-control"
                                                                   value="{{$committee->name}}" required/>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="companyname-field"
                                                                   class="form-label">Section</label>
                                                            <input type="text" name="section" class="form-control"
                                                                   value="{{$committee->section}}"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="companyname-field"
                                                                   class="form-label">Description</label>
                                                            <textarea name="description" class="form-control" id="editor">{!! $committee->description !!}</textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-success" id="add-btn">Update committee
                                                    </button>

                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Confirm delete</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{url('/admin/committee/'.$committee->id)}}"
                                              enctype="multipart/form-data">
                                            @method('DELETE')
                                            @csrf
                                            <div class="row">
                                                <p>Are you sure you want to delete</p>

                                                <div class="col-lg-12">
                                                    <div class="hstack gap-2">
                                                        <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">No, Cancel
                                                        </button>
                                                        <button type="submit" class="btn btn-success">Yes, Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--end modal-content-->
                            </div>
                            <!--end modal-dialog-->
                        </div>
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

    <script src="{{asset('/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('/editor/ckeditor/ckeditor.custom.js')}}"></script>

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
