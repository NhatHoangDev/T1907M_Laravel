@extends("layout")
@section("title", "New Category Listing")
@section("contentHeader", "New Category")
@section("content")
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("admin/update-category/{$category->__get("id")}")}}" method="post" enctype="multipart/form-data">
            @method("PUT")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text"  value="{{$category->__get("category_name")}}" name="category_name" class="form-control @error("category_name")  is-invalid @enderror" placeholder="New Category">
                    @error("category_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Category Image</label>
                    <p>Old Image</p><img src="{{$category->getImage()}}" width="60px"/>
                    <input type="file" name="category_image" class="form-control" placeholder="New Category Name"/>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection