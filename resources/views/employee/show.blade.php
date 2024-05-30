@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employees') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                     Employee Table
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Zip</th>
                                        <th>Age</th>
                                        <th>Birthday</th>
                                        <th>Hired Date</th>
                                        <th>Department</th>
                                        <th>Division</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $st)
                                    <tr>
                                        <td>{{ $st->id }}</td>
                                        <td>{{ $st->fname}}</td>
                                        <td>{{ $st->mname}}</td>
                                        <td>{{ $st->lname}}</td>
                                        <td>{{ $st->address}}</td>
                                        <td>{{ $st->country}}</td>
                                        <td>{{ $st->state}}</td>
                                        <td>{{ $st->city}}</td>
                                        <td>{{ $st->zip}}</td>
                                        <td>{{ $st->age}}</td>
                                        <td>{{ $st->bdate}}</td>
                                        <td>{{ $st->dhired}}</td>
                                        <td>{{ $st->dept}}</td>
                                        <td>{{ $st->div}}</td>
                                       
                                        <td><a class="btn btn-info" href="{{ url('employee/'.$st->id.'/edit')}}">Edit</a></td>
                                        <td><a class="btn btn-success" href="{{ url('employee/'.$st->id.'/delete')}}">Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                   
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection