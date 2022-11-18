@extends('admin.layout.frame')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blog Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blog Form</li>
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
                            <form action="{{route('blog.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input type="text" name="author" class="form-control" placeholder="Author">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" name="date" class="form-control" placeholder="Date">
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Description</label>
                                        <textarea id="summernote" name="desc" class="form-control" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="main_image">Image</label>
                                        <input type="file" name="main_image" class="form-control" placeholder="Image">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status:</label>
                                        <select name="status" class="form-control">
                                            <option value=" ">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">InActive</option>
                                        </select>
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

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
