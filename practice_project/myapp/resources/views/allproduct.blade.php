@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">{{ __('All Product') }}</div>
                        <div class="col-3">
                            <a href="home">Home</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row my-2">
                        <div class="col text-end">
                            <a class="btn btn-sm me-3 btn-primary" href="addnewprod">Add New</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- dd($productdata) --}}
                                @foreach($productdata as $dt)
                                <tr>
                                    <td>{{ $dt->id }}</td>
                                    <td>{{ $dt->title }}</td>
                                    <td>{{ $dt->price }}</td>
                                    <td>{{ $dt->quantity }}</td>
                                    <td>{{ $dt->description }}</td>
                                    <td>{{ $dt->image }}</td>
                                    <td>
                                        <a href='updateprod/{{ $dt->id }}'
                                            class="btn ms-2 btn-sm btn-primary rounded-pill">Edit</a>
                                        <a href='deleteprod/{{ $dt->id }}'
                                            class="btn ms-2 btn-sm btn-danger rounded-pill">Delete</a>
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
    @endsection