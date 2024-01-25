@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">{{ __('All Cities') }}</div>
                        <div class="col-3">
                            <a href="home">Home</a>
                        </div>
                    </div>
                </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>City Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($citydata as $dt)
                                <tr>
                                    <td>{{ $dt->city_id }}</td>
                                    <td>{{ $dt->city_name }}</td>
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