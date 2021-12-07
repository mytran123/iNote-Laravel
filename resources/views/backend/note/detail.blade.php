@extends('backend.layout.master')
@section('content')

<style>
    th{
        text-align: center;
        color: #28a745;
    }
    button{
        margin: 1px;
        height: 100%;
        width: 100px;
        border-radius: 5px;
    }
</style>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Note Detail</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <a href="{{route('notes.list')}}"><button style="background-color: #BDBDBD" type="button" class="text-dark">Back</button></a>
                    <td>{{$note["category"]}}</td>
                    <td>{{$note["title"]}}</td>
                    <td>{{$note["content"]}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
