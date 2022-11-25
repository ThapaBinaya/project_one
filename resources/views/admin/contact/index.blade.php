@extends('admin.layout.frame')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Contact Table</h1>

                        <h3><a href="{{url('/contact/create')}}" class="btn btn-primary" role="button" aria-pressed="true">Create Contact</a></h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Contact Table</li>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->subject}}</td>
                                        <td>{!! $contact->phone !!}</td>
                                        <td>{!! $contact->message !!}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('contact.edit', $contact->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                                <form action="{{ route('contact.destroy', $contact->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!! $contacts->links() !!}
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
