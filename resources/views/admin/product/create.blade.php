@extends('master.admin')
@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Add New Product</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"></p>
                        <form class="form-horizontal" action="{{ route('product.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <p class="bg-success">{{ session('message') }}</p>
                            <div class="row mb-4">
                                <label for="categoryName" class="col-md-3 form-label">Category name</label>
                                <div class="col-md-9 form-group">
                                    <select class="form-control select2 form-select" name="category_id" data-placeholder="Choose one" onchange="getSubCategoryByCategory(this.value)">
                                        <option>Choose Category Name</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="subcategoryName" class="col-md-3 form-label">Sub Category name</label>
                                <div class="col-md-9 form-group">
                                    <select class="form-control select2 form-select" name="subcategory_id" id="subcategoryid" data-placeholder="Choose one">
                                        <option>Choose Sub Category Name</option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="brandName" class="col-md-3 form-label">Brand name</label>
                                <div class="col-md-9 form-group">
                                    <select class="form-control select2 form-select" name="brand_id" data-placeholder="Choose one">
                                        <option>Brand Name</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="unitName" class="col-md-3 form-label">Unit name</label>
                                <div class="col-md-9 form-group">
                                    <select class="form-control select2 form-select" name="unit_id" data-placeholder="Choose one">
                                        <option>Unit Name</option>
                                        @foreach ($units as $unit)
                                            <option value="{{$unit->id}}">{{$unit->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="description" class="col-md-3 form-label">Product name</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="Product Name"
                                        type="text" name="name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="product code" class="col-md-3 form-label">Product code</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="Product code"
                                        type="number" name="code">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="short_description" class="col-md-3 form-label">Short description</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="Short description"
                                        type="text" name="short_description">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="long_description" class="col-md-3 form-label" name="long_description">Long Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="summernote" placeholder="Description" type="text" name="long_description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="selling_price" class="col-md-3 form-label">Product price</label>
                                <div class="col-md-9 input-group gap-3">
                                    <input class="form-control" id="firstName" placeholder="Regular Price"
                                        type="number" name="regular_price">
                                    <input class="form-control" id="firstName" placeholder="Discounted Price"
                                        type="number" name="selling_price" value="">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="stock_amount" class="col-md-3 form-label">Stock Amount</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder=""
                                        type="number" name="stock_amount">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Thumbnail Image</label>
                                <div class="col-md-9">
                                    <input class="form-control dropify" type="file" name="image">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Other Image <br> (Select multiple images)</label>
                                <div class="col-md-9">
                                    <input class="form-control dropify" type="file" name="other_image[]" multiple placeholder="You Can select multiplen image">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Status</label>
                                <div class="col-md-9 input-group gap-3">
                                    <label><input type="radio" name="status" value="1" /> Published</label>
                                    <br>
                                    <label><input type="radio" name="status" value="0" /> Unpublished</label>
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
