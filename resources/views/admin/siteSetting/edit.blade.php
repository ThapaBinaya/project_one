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
                            <form action="{{ route('siteSetting.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{$errors}}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Name</label>
                                        <input type="text" name="title" class="form-control" value="{{isset($data['row'])?$data['row']->title:''}}" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="alias">Alias</label>
                                        <input type="text" name="alias" class="form-control" value="{{isset($data['row'])?$data['row']->alias:''}}" placeholder="Alias">
                                    </div>
                                    <div class="form-group">
                                        <img width="100px" height="100px" src="{{asset('images/sitesetting/'.$data['row']->logo)}}">
                                        <label for="logo">Logo</label>
                                        <input type="file" name="main_logo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" name="facebook" class="form-control"  value="{{isset($data['row'])?$data['row']->facebook:''}}" placeholder="Facebook">
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="text" name="twitter" class="form-control"  value="{{isset($data['row'])?$data['row']->twitter:''}}" placeholder="Twitter">
                                    </div>
                                    <div class="form-group">
                                        <label for="tiktok">TikTok</label>
                                        <input type="text" name="tiktok" class="form-control"  value="{{isset($data['row'])?$data['row']->tiktok:''}}" placeholder="TikTok">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" name="address" class="form-control"  value="{{isset($data['row'])?$data['row']->address:''}}" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone.No</label>
                                        <input type="tel" name="phone" class="form-control"  value="{{isset($data['row'])?$data['row']->phone:''}}" placeholder="Phone.No">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control"  value="{{isset($data['row'])?$data['row']->email:''}}" placeholder="Enter email">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Edit</button>
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
