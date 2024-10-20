@extends('categories.layout')
@section('content')

<h1 class="mt-4">Category Form</h1>  
        <div class="container shadow rounded mt-4">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-4 pt-4">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                </div>
                <div class="mb-4">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="status">Status</label><br>
                    <input type="radio" id="active" name="status" value="Active" {{ old('status') == 'Active' ? 'checked' : '' }}>
                    <label for="active">Active</label><br>
                    <input type="radio" id="inactive" name="status" value="Inactive" {{ old('status') == 'Inactive' ? 'checked' : '' }}>
                    <label for="inactive">Inactive</label><br>
                </div>
                <div class="text-center pb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                    <a href="{{ route('categories.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
@endsection