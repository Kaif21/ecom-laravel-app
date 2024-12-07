@extends('master.admin')
@section('body')
<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Manage Sub category</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Sub category</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="container">
    <div class="row">
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Changed table ID to match the one in table-editable.js -->
                            <table id="editable-responsive-table" class="table table-bordered text-nowrap border-bottom">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Sub category</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcategories as $sub_category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$sub_category->category->name}}</td>
                                        <td>{{$sub_category->name}}</td>
                                        <td>{{$sub_category->description}}</td>
                                        <td><img src="{{asset($sub_category->image)}}" width="200px" alt=""></td>
                                        <td>
                                            <a class="btn btn-primary fs-14 text-white edit-icn" title="Edit" href="{{ route('subcategory.edit', $sub_category->id) }}">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                            <a class="btn btn-danger fs-14 text-white edit-icn" title="delete" href="{{ route('subcategory.delete', $sub_category->id) }}">
                                                <i class="fe fe-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
