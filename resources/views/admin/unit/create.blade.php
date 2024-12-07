@extends('master.admin')
@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Add New unit</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"></p>
                        <form class="form-horizontal" action="{{route('unit.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p class="bg-success">{{session('message')}}</p>
                            <div class="row mb-4">
                                <label for="description" class="col-md-3 form-label">unit name</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="unit Name"
                                        type="text" name="name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="description" class="col-md-3 form-label">unit code </label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" placeholder="unit code "
                                        type="text" name="code">
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
