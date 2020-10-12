@extends('layout.layout')
@section('content')
    <form  method="post" enctype="multipart/form-data" action="{{route('movies.save')}}">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Movie Title</label>
                <input type="name" class="form-control"  placeholder="Name" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Movie Year</label>
                <input type="name" class="form-control"  placeholder="Name" name="year">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Movie Description</label>
                <input type="name" class="form-control"  placeholder="Name" name="description">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Movie Image Url</label>
                <input type="name" class="form-control"  placeholder="Name" name="image">
            </div>
        </div>
        @csrf
{{--        <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">--}}
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
