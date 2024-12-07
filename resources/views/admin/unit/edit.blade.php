@extends('master.admin')
@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Edit unit</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"></p>
                        <form class="form-horizontal" action="{{route('unit.update',['id'=>$unit->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p class="bg-success">{{session('message')}}</p>
                            <div class="row mb-4">
                                <label for="description" class="col-md-3 form-label">unit name</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="unit Name"
                                        type="text" name="name" value="{{$unit->name}}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3">Publication Status</label>
                                <div class="col-md-9">
                                    <label><input type="radio" {{$unit->status == 1 ? 'checked' : ''}} name="status" value="1"/> Published</label>
                                    <label><input type="radio" {{$unit->status == 0 ? 'checked' : ''}} name="status" value="0"/> Unpublished</label>
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
