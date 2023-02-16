@extends('master')
@section('title','Post')
@section('content')
    <div class="row">
        <section class="featured-posts col-md-10">
            <div class="section-title">
                <h2><span>{{$blog->name}}</span></h2>
            </div>
            <div class="card mb-3">
                <img class="card-img-top" src="{{$blog->image}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mt-5">{{$blog->title}}</h5>
                    <p class="card-text">{{$blog->desc}}</p>
                    <p class="card-text"><small class="text-muted">{{$blog->writer}} / {{$blog->updated_at}}</small></p>
                </div>
            </div>
        </section>
        <div class="col-md-2">
            <ul class="list-group">
                @foreach($categories as $category)
                    <a href="{{route('category',$category->id)}}">
                        <li class=" list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            {{$category->name}}
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
