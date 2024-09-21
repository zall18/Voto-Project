@extends('Template.AdminTemplate')

@section('content')
<div class="col m-3">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Category Control Table</h3>

        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $index => $data)
                        <tr class="align-middle">
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->slug }}</td>
                            <td><a href="/category/delete/{{ $data->id }}" onclick="return confirm('are you sure to delete this category?')"><button type="button"
                                        class="btn btn-danger mb-2">Delete</button></a></td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div> <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-end">
                {{ $categories->render() }}
            </ul>
        </div>
    </div> <!-- /.card -->

</div> <!-- /.col -->
@endsection
