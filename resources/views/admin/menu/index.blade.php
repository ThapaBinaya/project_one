@extends('admin.layout.frame')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>MenuTables</h1>
                        <a href="{{url('/menu/create')}}" class="btn btn-primary" role="button" aria-pressed="true">Create Menu </a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">MenuTables</li>
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
                                <h3 class="card-title">MenuTable with minimal features & hover style</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Menu 1</th>
                                        <th>Menu 2</th>
                                        <th>Menu 3</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($menus as $menu)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$menu->menu1}}</td>
                                        <td>{{$menu->menu2}}</td>
                                        <td>{{$menu->menu3}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('menu.edit', $menu->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                                <form action="{{ route('menu.destroy', $menu->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!! $menus->links() !!}
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
