@extends('backend.layout.master')
@section('content')
    <style>
        th{
            text-align: center;
            color: #28a745;
        }
        button{
            margin: 10px;
            border-radius: 5px;
            background-color: #28a745;
        }
    </style>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user["name"]}}</td>
                            <td>{{$user["email"]}}</td>
                            <td>{{$user["password"]}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$users->links()}}
            </div>
        </div>
    </div>

@endsection




