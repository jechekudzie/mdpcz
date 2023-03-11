@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Administration</h4>

                        {{--<div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">home</li>
                            </ol>
                        </div>--}}

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
                                    <button class="btn btn-info add-btn"><i
                                            class="ri-add-fill me-1 align-bottom"></i> Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-12">
                    <div class="card" id="companyList">
                        <div class="card-header">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="search-box">
                                        <input type="text" class="form-control search"
                                               placeholder="Search for company...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card mb-3">
                                    <table class="table align-middle table-nowrap mb-0" id="{{--customerTable--}}">
                                        <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                           value="option">
                                                </div>
                                            </th>
                                            <th class="sort" data-sort="name" scope="col">Company Name</th>
                                            <th class="sort" data-sort="owner" scope="col">Owner</th>
                                            <th class="sort" data-sort="industry_type" scope="col">Industry Type
                                            </th>
                                            <th class="sort" data-sort="star_value" scope="col">Rating</th>
                                            <th class="sort" data-sort="location" scope="col">Location</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                           value="option1">
                                                </div>
                                            </th>
                                            <td class="id" style="display:none;"><a href="javascript:void(0);"
                                                                                    class="fw-medium link-primary">#VZ001</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="admin/assets/images/brands/dribbble.png" alt=""
                                                             class="avatar-xxs rounded-circle image_src object-cover">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 name">Jeche Nesta Technologies
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="owner">Tonya Noble</td>
                                            <td class="industry_type">Computer Industry</td>
                                            <td><span class="star_value">4.5</span> <i
                                                    class="ri-star-fill text-warning align-bottom"></i></td>
                                            <td class="location">Los Angeles, USA</td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <div class="pagination-wrap hstack gap-2">
                                        <a class="page-item pagination-prev disabled" href="#">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="#">
                                            Next
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card-->
                </div>
            </div>
            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
@stop

