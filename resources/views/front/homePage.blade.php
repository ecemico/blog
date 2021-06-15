@extends('front.layouts.master')
@section('title','Ana Sayfa')
@section('content')
<!-- Main Content-->
        <div class="col-md-9 mx-auto">
            @foreach($articles as $article)
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        {{$article->title}}
                    </h2>
                    <h3 class="post-subtitle">
                        {{$article->content}}
                    </h3>
                </a>
                <p class="post-meta">
                    Kategori :
                    <a href="#!">{{$article->getCategory->name}}</a>
                    <span class="float-end">{{$article->created_at->diffForHumans()}}</span></p>

            </div>
            @if($loop->last)
                <hr>
                @endif
            @endforeach
            <!-- Divider-->
            <hr class="my-4" />
        </div>
    @include('front/widgets/categoryWidget')
@endsection
