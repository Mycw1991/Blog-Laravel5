@extends('templates.default')

@section('title') 
Results
@stop 

@section('content')

    @if($post->count())
        @foreach($post as $post)
            <article>
                <h2>{{ $post->title }}</a></h2>
                <p>Published on {{$post->created_at->format('l jS \\of F Y')}}</p>
            {!! Markdown::parse($post->body) !!}
            
            </article>
        @endforeach
    @endif()

@stop