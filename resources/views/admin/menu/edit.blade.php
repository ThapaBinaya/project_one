@extends('admin.layout.frame')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Menu Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Menu Form</li>
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
                            <form action="{{route('menu.update', $data['row']->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
                                        <label for="menu1">Menu 1</label>
                                        <input type="text" name="menu1" class="form-control" value="{{isset($data['row'])?$data['row']->menu1:''}}" placeholder="Menu 1">
                                    </div>
                                    <div class="form-group">
                                        <label for="menu2">Menu 2</label>
                                        <input type="text" name="menu2" class="form-control" value="{{isset($data['row'])?$data['row']->menu2:''}}" placeholder="Menu 2">
                                    </div>
                                    <div class="form-group">
                                        <label for="menu3">Menu 3</label>
                                        <input type="text" name="menu3" class="form-control"  value="{{isset($data['row'])?$data['row']->menu3:''}}" placeholder="Menu 3">
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
