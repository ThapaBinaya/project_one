@extends('admin.layout.frame')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('about.update', $data['row']->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                {{ $errors }}
                                <div class="card-body">
                                    <div class="form-group">
{{--                                        {{ $errors }}--}}
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" value="{{isset($data['row'])?$data['row']->title:''}}" id="title" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="excerpt">Excerpt</label>
                                        {{--                                        <input type="text" name="excerpt" class="form-control" value="{{isset($data['row'])?$data['row']->excerpt:''}}" id="excerpt" placeholder="Enter Alt Text">--}}
                                        <textarea name="excerpt" cols="117" rows="5">{{isset($data['row'])?$data['row']->excerpt:''}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
{{--                                        <input type="text" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Subject">--}}
                                        <input type="checkbox" name="status" id="status">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
