@extends('master.admin')
@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Edit Product</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"></p>
                        <form class="form-horizontal" action="{{ route('product.update', ['id' => $product->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <p class="bg-success">{{ session('message') }}</p>
                            <div class="row mb-4">
                                <label for="categoryName" class="col-md-3 form-label">Category name</label>
                                <div class="col-md-9 form-group">
                                    <select class="form-control select2 form-select" name="category_id"
                                        data-placeholder="Choose one">
                                        <option>Choose Category Name</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected($category->id == $product->category_id)>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="subcategoryName" class="col-md-3 form-label">Sub Category name</label>
                                <div class="col-md-9 form-group">
                                    <select class="form-control select2 form-select" name="subcategory_id"
                                        data-placeholder="Choose one">
                                        <option>Choose Sub Category Name</option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" @selected($subcategory->id == $product->subcategory_id)>
                                                {{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="brandName" class="col-md-3 form-label">Brand name</label>
                                <div class="col-md-9 form-group">
                                    <select class="form-control select2 form-select" name="brand_id"
                                        data-placeholder="Choose one">
                                        <option>Brand Name</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}" @selected($brand->id == $product->brand_id)>
                                                {{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="unitName" class="col-md-3 form-label">Unit name</label>
                                <div class="col-md-9 form-group">
                                    <select class="form-control select2 form-select" name="unit_id"
                                        data-placeholder="Choose one">
                                        <option>Unit Name</option>
                                        @foreach ($units as $unit)
                                            <option value="{{ $unit->id }}" @selected($unit->id == $product->unit_id)>
                                                {{ $unit->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="description" class="col-md-3 form-label">Product name</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="Product Name" type="text"
                                        name="name" value="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="product code" class="col-md-3 form-label">Product code</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="Product code" type="number"
                                        name="code" value="{{ $product->code }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="short_description" class="col-md-3 form-label">Short description</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="Short description"
                                        type="text" name="short_description" value="{{ $product->short_description }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="long_description" class="col-md-3 form-label" name="long_description">Long
                                    Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="lastName" placeholder="Description" type="text" name="long_description">{{ $product->long_description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="selling_price" class="col-md-3 form-label">Product price</label>
                                <div class="col-md-9 input-group gap-3">
                                    <input class="form-control" id="firstName" placeholder="Regular Price" type="number"
                                        name="regular_price" value="{{ $product->regular_price }}">
                                    <input class="form-control" id="firstName" placeholder="Discounted Price" type="number"
                                        name="selling_price" value="{{ $product->selling_price }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="stock_amount" class="col-md-3 form-label">Stock Amount</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="" type="number"
                                        name="stock_amount" value="{{ $product->stock_amount }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Image</label>
                                <div class="col-md-9">
                                    <input class="form-control dropify" type="file" name="image">
                                    <img src="{{ asset($product->image) }}" alt="">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Other Image <br> (Select multiple
                                    images)</label>
                                <div class="col-md-9">
                                    <input class="form-control dropify" type="file" name="other_image[]" multiple
                                        placeholder="You Can select multiplen image">
                                    @foreach ($product->otherImages as $otherImage)
                                        <img src="{{ asset($otherImage->image)}}" alt="" class="img-thumbnail">
                                    @endforeach
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3">Publication Status</label>
                                <div class="col-md-9">
                                    <label><input type="radio" {{ $product->status == 1 ? 'checked' : '' }}
                                            name="status" value="1" /> Published</label>
                                    <label><input type="radio" {{ $product->status == 0 ? 'checked' : '' }}
                                            name="status" value="0" /> Unpublished</label>
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
