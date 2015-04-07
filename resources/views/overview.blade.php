@extends('templates.default')

@section('title')Home @stop
@section('content')

    @if($posts->count())
        @foreach($posts as $post)
            <article>
                <h2><a href="{!! URL::route('post', $post->slug) !!}">{{ $post->title }}</a></h2>
                <p>Published on {{$post->created_at->format('l jS \\of F Y')}}</p>
                {!! Markdown::parse(str_limit($post->body, 300)) !!}
                <a href="{!! URL::route('post', $post->slug) !!}">Read More &rarr;</a>
            </article>
        @endforeach
    @endif()

@stop