@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">{{ __('All Product') }}</div>
                        <div class="col-2 text-end">
                            <a href="home">Home</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="des d-flex my-3">
                            <label style="width:25%" class="form-label my-1 fs-5 display-block">Id</label>
                            <input type="text" class="border-3 form-control" value="{{ $dt->id }}">
                        </div>
                        <div class="des d-flex my-3">
                            <label style="width:25%" class="form-label my-1 fs-5 display-block">Title</label>
                            <input type="text" class="border-3 form-control">
                        </div>
                        <div class="des d-flex my-3">
                            <label style="width:25%" class="form-label my-1 fs-5 display-block">Price</label>
                            <input type="text" class="border-3 form-control">
                        </div>
                        <div class="des d-flex my-3">
                            <label style="width:25%" class="form-label my-1 fs-5 display-block">Quantity</label>
                            <input type="text" class="border-3 form-control">
                        </div>
                        <div class="des d-flex my-3">
                            <label style="width:25%" class="form-label my-1 fs-5 display-block">Description</label>
                            <input type="text" class="border-3 form-control">
                        </div>
                        <div class="des d-flex my-3">
                            <label style="width:25%" class="form-label my-1 fs-5 display-block">Image</label>
                            <input type="text" class="border-3 form-control">
                        </div>
                        <div class="des text-center mt-3">
                            <input type="submit" class="btn mx-2 btn-primary" value="Update">
                            <a href="allprod" class="btn mx-2 btn-info">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection