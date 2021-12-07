@extends('backend.layout.master')
@section('content')
    @toastr_css
<style>
    th{
        text-align: center;
        color: #28a745;
    }
    button{
        margin: 10px;
        border-radius: 5px;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Note Create</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Category</th>
                        <td>
                            <select name="category" id="category">
                                <option value="">Option</option>
                                <option value="Work">Work</option>
                                <option value="Learn">Learn</option>
                                <option value="Family">Family</option>
                                <option value="Friend">Friend</option>
                            </select>
{{--                            @error('category')--}}
{{--                            <p class="text text-danger">{{$message}}</p>--}}
{{--                            @enderror--}}
                        </td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>
                            <input style="width: 80%" type="text" name="title" value="{{old('title')}}">
                            @error('title')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Content</th>
                        <td>
                            <textarea style="width: 80%" type="text" name="content" id="" cols="30" rows="10"></textarea>
                            @error('content')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>

                    <tr>
                        <a href="{{route('notes.list')}}"><button style="background-color: red" type="button" class="text-white">Back</button></a>
                        <button class="text-dark" style="background-color: yellow" onclick="confirm('Are you sure ???')" type="reset">Reset</button>
                        <button class="text-white" style="background-color: mediumseagreen" type="submit">Add Note</button>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@jquery
@toastr_js
@toastr_render
@endsection
