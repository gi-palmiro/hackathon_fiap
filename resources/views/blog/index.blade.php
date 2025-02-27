@extends('layouts.app')

@section('content')
    <x-container>
        @include('blog._featured', ['news' => $techNews])

    </x-container>
@endsection
