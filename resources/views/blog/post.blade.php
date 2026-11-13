@extends('layouts.master')
@section('page_name', $post->title)
@section('page_description', $post->excerpt)
@section('title', $post->title)
@section('content')


    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>{{ $post->content }}</p>


                    <a href="{{ route('category.show', $post->category->slug) }}">{{$post->category->name}}</a>
                    &middot;
                    <a>{{ $post->created_at->format('d.m.Y') }} </a>

                </div>
            </div>
        </div>
    </article>
@endsection
