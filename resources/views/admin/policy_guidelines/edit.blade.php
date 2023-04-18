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
                        <h4 class="mb-sm-0">INTERNAL & EXTERNAL POLICIES</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
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
                                    <a href="{{url('/admin/policy_guideline')}}" class="btn btn-info add-btn"><i
                                            class="ri-arrow-left-line align-bottom"></i> Back
                                    </a>
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
                            Edit: {{$policy_guideline->title}}
                        </div>


                        <div class="card-body">
                            <!--end add modal-->

                            <div class="col-xxl-9">
                                <div class="card" id="companyList">

                                    <div class="card-body">

                                        <form method="post"
                                              action="{{url('/admin/policy_guideline/'.$policy_guideline->id)}}"
                                              enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" id="id-field"/>
                                                <div class="row g-3">

                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="companyname-field"
                                                                   class="form-label">Choose Category</label>
                                                            <select name="policy_category_id" class="form-select mb-3"
                                                                    aria-label="Default select example">
                                                                <option selected>Choose Category</option>
                                                                @foreach($policy_categories as $policy_category)
                                                                    <option value="{{$policy_category->id}}"
                                                                    @if($policy_category->id == $policy_guideline->policy_category_id){{'selected'}}@endif
                                                                    >{{$policy_category->name}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="companyname-field"
                                                                   class="form-label">Select Document Type</label>
                                                            <select name="committee_id" class="form-select mb-3"
                                                                    aria-label="Default select example">
                                                                <option selected>Select Document Type</option>
                                                                @foreach($committees as $committee)
                                                                    <option
                                                                        value="{{$committee->id}}"
                                                                    @if($committee->id == $policy_guideline->committee_id){{'selected'}}@endif
                                                                    >{{$committee->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="companyname-field"
                                                                   class="form-label">Policy and Guideline</label>
                                                            <input type="text" name="title" class="form-control"
                                                                   value="{{$policy_guideline->title}}" required/>
                                                        </div>
                                                    </div>

                                                    <a href="{{url($policy_guideline->file)}}" target="_blank">View
                                                        current file</a>

                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="companyname-field"
                                                                   class="form-label">Upload new file</label>
                                                            <input type="file" name="file" class="form-control"/>
                                                        </div>
                                                    </div>

                                                    {{--<div class="col-lg-12">
                                                        <div>
                                                            <label for="companyname-field"
                                                                   class="form-label">Description</label>
                                                            <textarea name="description" class="form-control" id="editor1"
                                                                      required></textarea>
                                                        </div>
                                                    </div>--}}

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-success" id="add-btn">Update
                                                        Policy & Guideline
                                                    </button>

                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
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
