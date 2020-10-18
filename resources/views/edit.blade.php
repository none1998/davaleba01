@extends('layout.layout')
@section('content')
    <div class="container" align="center" style="margin: 120px 0">
    <form  method="post" enctype="multipart/form-data" action="{{route('movies.update',$movie->id)}}">
        @method('PUT')
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Movie Title</label>
                <input type="name" class="form-control" name="title" value="{{old('title',$movie->title)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Movie Year</label>
                <input type="name" class="form-control" name="year" value="{{old('year',$movie->year)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Movie Description</label>
                <input type="name" class="form-control" name="description" value="{{old('description',$movie->description)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Movie Rating</label>
                <input type="name" class="form-control" name="rating" value="{{old('rating',$movie->rating)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Movie Image Url</label>
                <input type="name" class="form-control" name="image" value="{{old('image',$movie->image)}}">
            </div>
        </div>
        @csrf
{{--        <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">--}}
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
@endsection
