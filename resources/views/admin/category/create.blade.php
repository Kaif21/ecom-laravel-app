@extends('master.admin')
@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Add New Category</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"></p>
                        <form class="form-horizontal" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p class="bg-success">{{session('message')}}</p>
                            <div class="row mb-4">
                                <label for="description" class="col-md-3 form-label">Category name</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="Category Name"
                                        type="text" name="name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="description" class="col-md-3 form-label" name="description">Description</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="lastName" placeholder="Description"
                                        type="text"  name="description">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Image</label>
                                <div class="col-md-9">
                                    <input class="form-control dropify"
                                        type="file" name="image">
                                </div>
                            </div>


                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">Checked everything?</label>
                                <div class="col-md-9"><button class="btn btn-primary w-100"
                                        type="submit">Yes & Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
