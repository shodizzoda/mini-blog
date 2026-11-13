@extends('layouts.master')
@section('page_name', 'Блог программиста')
@section('page_description', 'Программирование. Практика. Технологии')
@section('title', 'Главная')
@section('content')

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->

                @foreach ($posts as $post)
                    @include('layouts.post-card', compact('post'))
                @endforeach
                {{ $posts->links() }}

                {{-- <hr class="my-4" /> --}}

                {{-- <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older
                        Posts →</a></div>
            </div> --}}
        </div>
    </div>

@endsection
