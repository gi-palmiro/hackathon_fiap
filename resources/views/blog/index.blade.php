@extends('layouts.app')

@section('content')
    <x-container>
        @php $title = 'Welcome to Shift.io Blog'; @endphp
        @include('blog._featured', ['news' => $techNews])
    </x-container>
@endsection
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <x-container>--}}
{{--        <h1 class="text-2xl font-bold text-black dark:text-white">Página de Teste do Blog</h1>--}}
{{--        <p class="text-gray-700 dark:text-gray-300">Esta é uma página de teste com o layout completo do blog.</p>--}}
{{--    </x-container>--}}
{{--@endsection--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <h1 class="text-2xl font-bold text-black dark:text-white">Lista de Notícias</h1>--}}
{{--    <ul>--}}
{{--        @foreach($techNews as $article)--}}
{{--            <li>{{ $article->title }}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}


{{--@endsection--}}
