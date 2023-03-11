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
                        <h4 class="mb-sm-0">Council members</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                <li class="breadcrumb-item council_memberive">Council members</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

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

                <div class="card">
                    <div class="card-body">
                        <div class="row g-2">
                            <!--end col-->
                            <div class="col-sm-auto ms-auto">
                                <div class="list-grid-nav hstack gap-1">

                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addmembers">
                                        <i class="ri-add-fill me-1 align-bottom"></i> Add Members
                                    </button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <div class="team-list grid-view-filter row">
                                @foreach($council_members  as $council_member)
                                    <div class="col">
                                        <div class="card team-box">
                                            <div class="team-cover">
                                                <img src="{{asset($council_member->file)}}" alt="" class="img-fluid"/>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="row align-items-center team-row">
                                                    <div class="col team-settings">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="bookmark-icon flex-shrink-0 me-2">
                                                                    <input type="checkbox" id="favourite1"
                                                                           class="bookmark-input bookmark-hide">
                                                                    <label for="favourite1" class="btn-star">
                                                                        <svg width="20" height="20">
                                                                            <use xlink:href="#icon-star"/>
                                                                        </svg>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col">
                                                        <div class="team-profile-img">
                                                            <div
                                                                class="avatar-lg img-thumbnail rounded-circle flex-shrink-0">
                                                                <img src="{{asset($council_member->file)}}" alt=""
                                                                     class="img-fluid d-block rounded-circle"/>
                                                            </div>
                                                            <div class="team-content">
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                   aria-controls="offcanvasExample">
                                                                    <h5 class="fs-16 mb-1">{{$council_member->name}}</h5>
                                                                </a>
                                                                <p class="text-muted mb-0">{{$council_member->title}}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 col">
                                                        <div class="text-end">
                                                            <a href="{{url('/admin/council_member/'.$council_member->id)}}" class="btn btn-light view-btn">View
                                                                Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-->
                                    </div>
                                @endforeach
                            <!--end col-->
                                {{--<div class="col-lg-12">
                                    <div class="text-center mb-3">
                                        <a href="javascript:void(0);" class="text-success"><i
                                                class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More
                                        </a>
                                    </div>
                                </div>--}}
                            </div>
                            <!--end row-->

                            <!-- Modal -->
                            <div class="modal fade" id="addmembers" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Add New Members</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{url('/admin/council_member')}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                   placeholder="Enter name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="designation"
                                                                   class="form-label">Title</label>
                                                            <input type="text" class="form-control" name="title"
                                                                   placeholder="Enter title/designation">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="mb-4">
                                                            <label for="formFile" class="form-label">Profile
                                                                Image</label>
                                                            <input class="form-control" type="file" name="file">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="companyname-field"
                                                                   class="form-label">Member Bio</label>
                                                            <textarea name="bio" class="form-control"
                                                                      id="editor1"></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close
                                                            </button>
                                                            <button type="submit" class="btn btn-success">Add Member
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
                            <!--end modal-->

                        </div>
                    </div><!-- end col -->
                </div>
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
