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
                        <h4 class="mb-sm-0">Designated Institutions</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                <li class="breadcrumb-item registrarive">Designated Institutions</li>
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
                            <div class="col-sm-auto {{--ms-auto--}}">
                                <div class="list-grid-nav hstack gap-1">

                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addmembers">
                                        <i class="ri-add-fill me-1 align-bottom"></i> Add Designated Institution
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
                            <div class="table-responsive table-card mb-3">
                                <table id="example" class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll"
                                                       value="option">
                                            </div>
                                        </th>
                                        <th class="sort" data-sort="name" scope="col">Category</th>
                                        <th class="sort" data-sort="name" scope="col">Name</th>
                                        <th class="sort" data-sort="name" scope="col">Address</th>
                                        <th class="sort" data-sort="owner" scope="col">Website Link</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                    @foreach($designated_institutions as $designated_institution)
                                        <tr>
                                            <td scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                           value="option1">
                                                </div>
                                            </td>
                                            <td class="owner">{{$designated_institution->category}}</td>
                                            <td class="owner">{{$designated_institution->name}}</td>
                                            <td class="owner">{{$designated_institution->address}}</td>
                                            <td class="owner">Website Link: <a href="{{$designated_institution->website_link}}" target="_blank"> {{$designated_institution->website_link}}</a></td>
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top"
                                                        title="Edit">
                                                        <a class="edit-item-btn"
                                                           href="{{url('/admin/designated_institution/'.$designated_institution->id.'/edit')}}">Edit</a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!--end row-->

                            <!-- Modal -->
                            <div class="modal fade" id="addmembers" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Add Designated Institution</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{url('/admin/designated_institution')}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">Category</label>
                                                            <select  class="form-control" name="category">
                                                                <option value="">Choose category</option>
                                                                <option value="central">Central Hospital</option>
                                                                <option value="province">Provincial Hospital</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                   placeholder="Enter name">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">Address</label>
                                                            <textarea type="text" class="form-control" name="address"
                                                                      placeholder="Enter address"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">Website Link</label>
                                                            <input type="text" class="form-control" name="website_link"
                                                                   placeholder="Enter website link">
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close
                                                            </button>
                                                            <button type="submit" class="btn btn-success">Add Designated Institution
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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


    <script>
        $(function () {
            $(".datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });

        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

@endpush
