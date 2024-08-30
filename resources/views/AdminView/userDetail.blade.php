@extends('Template.adminTemplate')

@section('content')
    <div class="card card-primary card-outline m-3 mb-5"> <!--begin::Header-->
        <!--begin::Form-->
        <form action="/user/updateUser/{{ $user->id }}" method="POST" class="m-3">
            @csrf
            <h1 class="pt-5 pb-4 border-bottom">{{ $user->name }} Detail</h1>
            <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                        value="{{ $user->email }}">
                    <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <select class="form-select" disabled>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="customer" {{ $user->role == 'customer' ? 'selected' : '' }}>Customer</option>
                </select>
                {{-- <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div> --}}
            </div> <!--end::Body--> <!--begin::Footer-->
            @if ($user->role == 'admin')
                <input type="submit" class="btn btn-primary w-100 mb-3" name="Save" value="Save" />
                <a href="/user/deleteUser/{{ $user->id }}" class="btn btn-danger w-100">
                    Delete
                </a>
            @endif
            <!--end::Footer-->
        </form> <!--end::Form-->

    </div>
    {{-- </div> <!--end::Quick Example--> <!--begin::Input Group--> --}}
@endsection
{{-- <form action="/user/updateUser/{{ $user->id }}" class="m-3">
    <h1 class="pt-5 pb-4 border-bottom">{{ $user->name }} Detail</h1>
    <!--begin::Body-->
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
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <select class="form-select" disabled>
            <option value="admin" selected>Admin</option>
        </select>
        {{-- <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div> --}}
{{-- </div> <!--end::Body--> <!--begin::Footer--> --}}
{{-- <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div> --}}
<!--end::Footer-->
{{-- </form> <!--end::Form--> --}}
