@extends('Template.customerTemplate')

@section('contentCustomer')
    <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('customerAssets/images/bg_6.jpg') }}');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Profile</span>
                        <span>Product</span>
                    </p>
                    <h1 class="mb-0 bread">Create Product</h1>
                </div>
            </div>
        </div>
    </div>



    <form action="/user/product/create" method="POST" class="billing-form container" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $item)
                <label for="name" class="form-label">{{ $item }}</label>
            @endforeach
        @endif
        <h3 class="mb-4">Please fill detail below!</h3>
        <div class="row align-items-end">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" name="name" placeholder="" required>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Product Description</label>
                    <textarea class="form-control" name="description" placeholder="" required></textarea>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" name="stock" placeholder="" required>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" name="brand" placeholder=""
                        value="{{ auth()->user()->name }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" name="model" placeholder="" required>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" name="category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-primary w-100 p-3 mb-3">Create Product</button>
    </form>
@endsection
