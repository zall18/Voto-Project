@extends('Template.adminTemplate')

@section('content')
    <div class="card card-primary card-outline m-3 mb-5"> 
        
        <form action="" method="POST" class="m-3">
            @csrf
            <h1 class="pt-5 pb-4 border-bottom">{{ $product->name }} Detail</h1>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="description" cols="30" rows="10"  disabled value = "{{ $product->description }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}"  disabled>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}"  disabled>
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}"  disabled>
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model" value="{{ $product->model }}"  disabled>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" disabled>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="category" name="category" value="{{ $product->category->id }}"  disabled>
                </div>
                <div class="mb-3">
                    <label for="user" class="form-label">User</label>
                    <input type="text" class="form-control" id="user" name="user" value="{{ $product->user->name }}"  disabled>
                </div>
                <input type="submit" class="btn btn-danger w-100 mb-3" name="Save" value="Suspend product" />


        </form>

    </div>
@endsection
