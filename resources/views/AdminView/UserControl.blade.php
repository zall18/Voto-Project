@extends('Template.adminTemplate')

@section('content')

    <div class="col m-3">
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title">User Control Table</h3>

            </div> <!-- /.card-header -->
            <div class="card-body">
                <a href="/user/createView"><button class="btn btn-primary w-100 my-4">Create Data</button></a>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $data)
                            <tr class="align-middle">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->role }}</td>
                                <td><a href="/user/{{ $data->id }}"><button type="button"
                                            class="btn btn-primary mb-2">View
                                            Detail</button></a></td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div> <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                </ul>
            </div>
        </div> <!-- /.card -->

    </div> <!-- /.col -->
@endsection
