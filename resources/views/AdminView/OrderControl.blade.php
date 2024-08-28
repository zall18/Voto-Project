@extends('Template.adminTemplate')

@section('content')

    <div class="col m-3">
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title">Order Control Table</h3>
            </div> <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>User</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $index => $data)
                            <tr class="align-middle">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->total_price }}</td>
                                <td>{{ $data->status }}</td>
                                <td><a href="/order/{{ $data->id }}"><button type="button"
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
