@extends('admin.layout.frame')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blog Table</h1>

                        <h3><a href="{{url('/blog/create')}}" class="btn btn-primary" role="button" aria-pressed="true">Create Blog</a></h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Blog Table</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features & hover style</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->author}}</td>
                                        <td>{{$blog->date}}</td>
                                        <td>{!! $blog->desc !!}</td>
                                        <td>
                                            <img height="100px" width="100px" src="{{asset('images/blog/'.$blog->image)}}">
                                        </td>
                                        <td>{!!$blog->status ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">InActive</span>' !!}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('blog.edit', $blog->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                                <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!! $blogs->links() !!}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
