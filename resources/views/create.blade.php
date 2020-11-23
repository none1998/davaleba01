@extends('layout.layout')
@section('content')

    <div class="container" align="center" style="margin: 120px 0">
{{--        @if($errors->any())--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <li>{{$error}}</li>--}}
{{--            @endforeach--}}
{{--        @endif--}}
    <form  method="post" enctype="multipart/form-data" action="{{route('movies.save')}}">

        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Movie Title</label>
                <input type="name" class="form-control @error('title') is-invalid @enderror"}}  placeholder="Name" name="title">
{{--                @if($errors->has('title'))--}}
{{--                    <p class="text-danger">{{$errors->first('title')}}</p>--}}
{{--                @endif--}}
                @error('title')
                    <p class="text-danger">{{$errors->first('title')}}</p>
                @enderror
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
                <label for="exampleInputEmail1">Movie Rating</label>
                <input type="name" class="form-control"  placeholder="Name" name="rating">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Movie Image Url</label>
                <input type="name" class="form-control"  placeholder="Name" name="image">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tags</label>
                <select name="tags[]" id="" multiple>
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @csrf
{{--        <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">--}}
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    </div>
@endsection
