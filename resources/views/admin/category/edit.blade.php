<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Edit Categories
                        </div>
                        <div class="card-body">
                            <form action={{ route('update.category', ['id' => $categories->id]) }} method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="category_name" class="form-label">Update Category Name</label>
                                    <input type="text" class="form-control" name="category_name" value="{{$categories->category_name}}">
                                    @error('category_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>