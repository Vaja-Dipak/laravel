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
                            <a class="btn btn-sm btn-primary" href="home">Home</a>&nbsp
                            <a class="btn btn-sm btn-primary" href="alluser">Users</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="saveuser" method="post">
                        @csrf
                        {{--csrf_token()--}}
                        <div class="row my-2">
                            <div class="col">
                                <input placeholder="Enter Name" type="text" class="form-control" name="name" id="">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input placeholder="Enter Email" type="text" class="form-control" name="email" id="">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input placeholder="Enter Password" type="text" class="form-control" name="password" id="">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="submit" class="btn btn-info" name="Add User" id="save">
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