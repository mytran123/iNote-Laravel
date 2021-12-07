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
        <h6 class="m-0 font-weight-bold text-primary">Update Note</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Category</th>
{{--                        <td><input style="width: 90%" type="text" name="category" value="{{$note->category}}"></td>--}}
                        <td>
{{--                            {{dd($note->category)}}--}}
                            <select name="category" id="category">
                                <option {{ ( $note->category == "Work") ? 'selected' : '' }} value="Work">Work</option>
                                <option {{ ( $note->category == "Learn") ? 'selected' : '' }} value="Learn">Learn</option>
                                <option {{ ( $note->category == "Family") ? 'selected' : '' }} value="Family">Family</option>
                                <option {{ ( $note->category == "Friend") ? 'selected' : '' }} value="Friend">Friend</option>
                            </select>
                            @error('category')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td><input style="width: 90%" type="text" name="title" value="{{$note->title}}"></td>
                    </tr>
                    <tr>
                        <th>Content</th>
                        <td><input style="width: 90%" type="text" name="content" value="{{$note->content}}"></td>
                    </tr>
                    <tr>
                        <a href="{{route('notes.list')}}"><button style="background-color: red" type="button" class="text-white">Back</button></a>
                        <button class="text-dark" style="background-color: yellow" onclick="confirm('Are you sure ???')" type="reset">Reset</button>
                        <button class="text-white" style="background-color: mediumseagreen" type="submit">Save Note</button>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
