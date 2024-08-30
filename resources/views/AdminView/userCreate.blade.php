@extends('Template.adminTemplate')

@section('content')
    <div class="card card-primary card-outline m-3 mb-5"> <!--begin::Header-->
        <!--begin::Form-->
        <form action="/user/createUser" method="POST" class="m-3">
            @csrf
            <!--begin::Body-->
            @if ($errors->any())
                @foreach ($errors->all() as $item)
                    <label for="name" class="form-label">{{ $item }}</label>
                @endforeach
            @endif
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <select class="form-select" name="role">
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                </select>
                {{-- <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div> --}}
            </div> <!--end::Body--> <!--begin::Footer-->
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" />
            </div>
        </form> <!--end::Form-->

    </div>
@endsection
