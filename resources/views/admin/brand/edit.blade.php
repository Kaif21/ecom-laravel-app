@extends('master.admin')
@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Edit brand</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"></p>
                        <form class="form-horizontal" action="{{route('brand.update',['id'=>$brand->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p class="bg-success">{{session('message')}}</p>
                            <div class="row mb-4">
                                <label for="description" class="col-md-3 form-label">brand name</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="brand Name"
                                        type="text" name="name" value="{{$brand->name}}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="description" class="col-md-3 form-label" name="description">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="lastName" placeholder="Description"
                                        type="text"  name="description">{{$brand->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Image</label>
                                <div class="col-md-9">
                                    <input class="form-control dropify"
                                        type="file" name="image" value="{{$brand->image}}">
                                        <img src="{{asset($brand->image)}}" height="200">
                                </div>
                            </div>


                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">Checked everything?</label>
                                <div class="col-md-9"><button class="btn btn-primary w-100"
                                        type="submit">Yes & Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
