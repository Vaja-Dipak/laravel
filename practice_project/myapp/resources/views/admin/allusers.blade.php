@extends('layouts.adminapp')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">{{ __('All Users') }}</div>
                        <div class="col-3">
                            <a href="home">Home</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row my-2">
                        <div class="col" style="text-align: end;">
                            <a class="btn btn-md btn-primary" style="margin-top:25px;" href="adduser">Add New</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- dd($allusers) --}}
                                @foreach($allusers as $dt)
                                <tr>
                                    <td>{{ $dt->id }}</td>
                                    <td>{{ $dt->name }}</td>
                                    <td>{{ $dt->email }}</td>
                                    <td>{{ $dt->password }}</td>
                                    <td>{{ $dt->created_at }}</td>
                                    <!-- <td>
                                        <a href='updateprod/{{ $dt->id }}'
                                            class="btn ms-2 btn-sm btn-primary rounded-pill">Edit</a>
                                        <a href='deleteprod/{{ $dt->id }}'
                                            class="btn ms-2 btn-sm btn-danger rounded-pill">Delete</a>
                                    </td> -->
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