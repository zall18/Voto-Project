@extends('Template.adminTemplate')

@section('admin')
    <div class="row">
        <div class="col-12 d-flex justify-content-between pt-5 pb-4 border-bottom">
            <h1 class="">Product Management</h1>
            @if (Session::has('pesan'))
                <div class="bg bg-success" id="notif">
                    {{ Session::get('pesan') }}
                </div>
            @endif
        </div>
    </div>
    <a href="/insert"><button class="ps-4 pe-4 pt-2 pb-2 border-0">Insert Post</button></a>
    <table class="table table-striped table-bordered" id="myTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Category</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $data)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $data->name }}</td>
                    <td>-</td>
                    <td>{{ $data->description }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->stock }}</td>
                    <td>{{ $data->brand }}</td>
                    <td>{{ $data->model }}</td>
                    <td>{{ $data->category->name }}</td>
                    <td>
                        <a href="/postManage/editPost/{{ $data->slug }}"><button
                                class="ps-2 pe-2 pt-1 pb-1 bg-white">Detail</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        setTimeout(() => {
            console.log("tes");
            document.getElementById('notif').style.display = "none";
        }, 5000);
    </script>
@endsection
