@extends('layout')
hello
@foreach($wpposts as $post)
<div class="post">
    {{$post->post_author}}, {{$post->post_content}}
    <!--a href="{{URL::to('posts/'.$post->id)}}">
        <strong> {{{$post->post_title}}} </strong> - {{$post->post_content}}
    </a-->
</div>
@endforeach
