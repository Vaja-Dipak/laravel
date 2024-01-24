@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">{{ __('Dashboard') }}</div>
                        <div class="col text-end">
                            <a href="home">Home</a>
                            <a href="allprod">Products</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="saveprod" method="post">
                        @csrf
                        {{--csrf_token()--}}
                        <div class="row my-2">
                            <div class="col">
                                <input placeholder="Enter Product Title" type="text" class="form-control" name="title" id="">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input placeholder="Enter Product Price" type="text" class="form-control" name="price" id="">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input placeholder="Enter Product Quantity" type="text" class="form-control" name="quantity" id="">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <textarea placeholder="Enter Product Description" name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="submit" class="btn btn-info" name="save" id="save">
                                <input type="reset" class="btn btn-danger" name="cancel" id="cancel">
                            </div>
                        </div>

                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection