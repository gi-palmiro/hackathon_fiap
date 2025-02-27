{{--@extends('layouts.app')--}}


{{--@section('content')--}}
{{--    <x-container>--}}

{{--        @include('blog._hero', ['title' => $article->title])--}}

{{--        <article class="bg-white dark:bg-zinc-800 p-6 rounded-lg shadow-lg">--}}
{{--            @if(!empty($article->url_to_image))--}}
{{--                <img src="{{ $article->url_to_image }}" alt="{{ $article->title }}" class="w-full h-64 object-cover rounded-md mb-4">--}}
{{--            @endif--}}

{{--            <p class="text-gray-700 dark:text-gray-300 mb-6">--}}
{{--                {{ $article->description ?? 'Descrição não disponível.' }}--}}
{{--            </p>--}}

{{--            <div class="prose dark:prose-dark">--}}
{{--                {!! $article->content ?? '<p>Conteúdo não disponível.</p>' !!}--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    </x-container>--}}
{{--@endsection--}}

@php
    $title = $article->title;
@endphp

@extends('layouts.app')

@section('content')
    <x-container>
        <article class="bg-white dark:bg-zinc-800 p-6 rounded-lg shadow-lg">
            @if($article->url_to_image)
                <img src="{{ $article->url_to_image }}" alt="{{ $article->title }}" class="w-full h-64 object-cover rounded-md mb-4">
            @endif

            <p class="text-gray-700 dark:text-gray-300 mb-6">
                {{ $article->description }}
            </p>

            <div class="prose dark:prose-dark">
                {!! $article->content !!}
            </div>

            @auth
                <div class="mt-8 flex space-x-4">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        Curtir
                    </button>
                    <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600"
                            x-data
                            x-on:click.prevent="$clipboard('{{ url()->current() }}')">
                        Copiar Link
                    </button>
                </div>
            @endauth
        </article>
    </x-container>
@endsection



{{--@section('content')--}}

{{--    @include('blog._hero', ['title' => $article->title])--}}

{{--    <x-container>--}}
{{--        <article class="bg-white dark:bg-zinc-800 p-6 rounded-lg shadow-lg">--}}
{{--            @if($article->url_to_image)--}}
{{--                <img src="{{ $article->url_to_image }}" alt="{{ $article->title }}" class="w-full h-64 object-cover rounded-md mb-4">--}}
{{--            @endif--}}

{{--            <!-- Subtítulo -->--}}
{{--            <p class="text-gray-700 dark:text-gray-300 mb-6">--}}
{{--                {{ $article->description }}--}}
{{--            </p>--}}

{{--            <!-- Conteúdo Completo da Notícia -->--}}
{{--            <div class="prose dark:prose-dark">--}}
{{--                {!! $article->content !!}--}}
{{--            </div>--}}

{{--            @auth--}}
{{--                <div class="mt-8 flex space-x-4">--}}
{{--                    <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">--}}
{{--                        Curtir--}}
{{--                    </button>--}}
{{--                    <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600"--}}
{{--                            x-data--}}
{{--                            x-on:click.prevent="$clipboard('{{ url()->current() }}')">--}}
{{--                        Copiar Link--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            @endauth--}}
{{--        </article>--}}
{{--    </x-container>--}}
{{--@endsection--}}
