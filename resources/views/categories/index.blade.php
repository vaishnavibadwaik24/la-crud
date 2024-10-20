      @extends('categories.layout')
      @section('content')
      <div class="row justify-content-between align-items-center mb-3 mt-4">
                <h1 class="text-center col-md-10">Category List</h1>
                <div class="col-md-2 text-md-end text-center">
                    <a href="{{ route('categories.create') }}" class="btn btn-success">Add Category</a>
                </div>
            </div>
            
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)                        
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->status }}</td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">Show</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @endsection