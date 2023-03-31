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
                        <h4 class="mb-sm-0">Education and Training</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                <li class="breadcrumb-item registrarive">Education and Training</li>
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

                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_exam">
                                        <i class="ri-add-fill me-1 align-bottom"></i> Council Examination
                                    </button>

                                    <button class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#add_guidelines">
                                        <i class="ri-add-fill me-1 align-bottom"></i> Council Examination Guideline
                                    </button>

                                    <button class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#add_exam_dates">
                                        <i class="ri-add-fill me-1 align-bottom"></i> Council Examination Dates
                                    </button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div>
                            <div class="accordion" id="default-accordion-example">
                                @foreach($exams as $exam)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse{{$exam->id}}"
                                                    aria-expanded="true"
                                                    aria-controls="collapse{{$exam->id}}">
                                                {{$exam->title}}
                                            </button>
                                        </h2>
                                        <div id="collapse{{$exam->id}}"
                                             class="accordion-collapse collapse show"
                                             aria-labelledby="headingOne"
                                             data-bs-parent="#default-accordion-example">
                                            <div class="accordion-body">
                                                {!! $exam->description !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 {{--justify-content-end--}}">
                                            <a href="{{url('/admin/exam/'.$exam->id.'/edit')}}"
                                               class="btn btn-success" id="add-btn">Edit Exam</a>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                            <!--end row-->

                            <!-- Modal -->
                            <div class="modal fade" id="add_exam" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Add Examination</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{url('/admin/exam')}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">Exam
                                                                title</label>
                                                            <input type="text" class="form-control" name="title"
                                                                   placeholder="Enter exam title">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="companyname-field"
                                                                   class="form-label">Description</label>
                                                            <textarea name="description" class="form-control"
                                                                      id="editor"></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close
                                                            </button>
                                                            <button type="submit" class="btn btn-success">Add Exam
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

                            <div class="modal fade" id="add_guidelines" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Add Examination Guideline</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{url('/admin/exam_guideline')}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">
                                                                Guideline title</label>
                                                            <input type="text" class="form-control" name="title"
                                                                   placeholder="Enter exam title">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">Upload
                                                                Guideline File</label>
                                                            <input type="file" class="form-control" name="file"
                                                                   placeholder="Enter exam title">
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close
                                                            </button>
                                                            <button type="submit" class="btn btn-success">Add Exam
                                                                Guideline
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

                            <div class="modal fade" id="add_exam_dates" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Add Examination Dates</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{url('/admin/exam_date')}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">
                                                                Exam Date</label>
                                                            <input type="text" class="form-control datepicker" name="date"
                                                                   placeholder="Enter exam date">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">
                                                                Exam Time</label>
                                                            <input type="text" class="form-control" name="time"
                                                                   placeholder="Enter exam time">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">
                                                                Exam Venue</label>
                                                            <input type="text" class="form-control" name="venue"
                                                                   placeholder="Enter exam title">
                                                        </div>
                                                    </div>



                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close
                                                            </button>
                                                            <button type="submit" class="btn btn-success">Add Exam
                                                                Dates
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
                    </div><!-- end col -->
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h6 class="card-title mb-0">Examination guidelines</h6>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <ul class="list-inline card-toolbar-menu d-flex align-items-center mb-0">
                                            <li class="list-inline-item">
                                                <a class="align-middle" data-toggle="reload" href="javascript:void(0);">
                                                    <i class="mdi mdi-refresh align-middle"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="align-middle minimize-card" data-bs-toggle="collapse"
                                                   href="#collapseexample1" role="button" aria-expanded="false"
                                                   aria-controls="collapseExample2">
                                                    <i class="mdi mdi-plus align-middle plus"></i>
                                                    <i class="mdi mdi-minus align-middle minus"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" onclick="delthis('card-none1')"
                                                        class="btn-close fs-10 align-middle"></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body collapse show" id="collapseexample1">
                                @foreach($exam_guidelines as $exam_guideline)
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-2 text-muted">
                                            <a href="{{asset($exam_guideline->file)}}" target="_blank">View {{$exam_guideline->title}}</a> ||
                                            <a style="color: red;" href="{{url('/admin/exam_guideline/'.$exam_guideline->id.'/edit')}}" target="_blank">Edit Guideline</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h6 class="card-title mb-0">Examination Dates</h6>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <ul class="list-inline card-toolbar-menu d-flex align-items-center mb-0">
                                            <li class="list-inline-item">
                                                <a class="align-middle" data-toggle="reload" href="javascript:void(0);">
                                                    <i class="mdi mdi-refresh align-middle"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="align-middle minimize-card" data-bs-toggle="collapse"
                                                   href="#collapseexample1" role="button" aria-expanded="false"
                                                   aria-controls="collapseExample2">
                                                    <i class="mdi mdi-plus align-middle plus"></i>
                                                    <i class="mdi mdi-minus align-middle minus"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" onclick="delthis('card-none1')"
                                                        class="btn-close fs-10 align-middle"></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body collapse show" id="collapseexample1">
                                <table style="padding-top: 10px" class="table table-bordered">
                                    <tr>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Venue</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($exam_dates as $exam_date)
                                        <tr>
                                            <td>{{$exam_date->date}}</td>
                                            <td>{{$exam_date->time}}</td>
                                            <td>{{$exam_date->venue}}</td>
                                            <td><a href="{{url('/admin/exam_date/'.$exam_date->id.'/edit')}}">Edit</a></td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>

                    </div>
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
