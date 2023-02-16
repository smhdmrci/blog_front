@php use Illuminate\Support\Str; @endphp
@extends('master')
@section('title','Kategori')
@section('content')
    <div class="row">
        <section class="featured-posts col-md-10">
            <div class="section-title">
                <h2><span>{{$category->name}}</span></h2>
            </div>
            <div class=" listfeaturedtag">
                @foreach($blogs as $blog)
                        <div class="row">
                            <div class="col-md-5 wrapthumbnail">
                                <a href="{{route('blog',$blog->id)}}">
                                    <div class="thumbnail" style="background-image:url({{$blog->image}});">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-7">
                                <div class="card-block">
                                    <h2 class="card-title">
                                        <a href="{{route('blog',$blog->id)}}">{{$blog->title}}</a>
                                    </h2>
                                    <h4 class="card-text">{{Str::limit($blog->desc,150,'...')}}</h4>
                                    <div class="metafooter">
                                        <div class="wrapfooter">
                                            <span class="author-meta">
								                <span class="post-name">{{$blog->writer}}</span><br/>
								                <span class="post-date">{{$blog->updated_at}}</span>
								            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                @endforeach
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
