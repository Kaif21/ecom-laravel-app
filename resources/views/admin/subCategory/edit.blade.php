@extends('master.admin')
@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Edit Sub Category</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"></p>
                        <form class="form-horizontal" action="{{ route('subcategory.update',['id'=>$subcategory->id] )}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <p class="bg-success">{{ session('message') }}</p>
                            <div class="row mb-4">
                                <label for="categoryName" class="col-md-3 form-label">Category name</label>
                                <div class="col-md-9 form-group">
                                    <select class="form-control select2 form-select" name="category_id" data-placeholder="Choose one">
                                        <option>Category Name</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}" @selected($category->id == $subcategory->category_id)>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="description" class="col-md-3 form-label">Sub Category name</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="Sub Category Name"
                                        type="text" name="name" value="{{$subcategory->name}}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="description" class="col-md-3 form-label" name="description">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="lastName" placeholder="Description" type="text" name="description">{{$subcategory->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Image</label>
                                <div class="col-md-9">
                                    <input class="form-control dropify" type="file" name="image">
                                    <img src="{{asset($subcategory->image)}}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3">Publication Status</label>
                                <div class="col-md-9">
                                    <label><input type="radio" {{$subcategory->status == 1 ? 'checked' : ''}} name="status" value="1"/> Published</label>
                                    <label><input type="radio" {{$subcategory->status == 0 ? 'checked' : ''}} name="status" value="0"/> Unpublished</label>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">Checked everything?</label>
                                <div class="col-md-9"><button class="btn btn-primary w-100" type="submit">Yes &
                                        Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
