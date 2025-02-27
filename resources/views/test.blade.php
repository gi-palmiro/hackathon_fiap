@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-black dark:text-white">Página de Teste com Layout Completo</h1>
    <p class="text-gray-700 dark:text-gray-300">Se você está vendo esta página rapidamente, o layout base está funcionando corretamente.</p>

    <!-- Teste do Botão Flux -->
    <div class="flex justify-center my-8">
        <flux:button
            x-on:click="$store.flux.toggle()"
            variant="subtle"
            aria-label="Alternar tema"
            class="transition-colors duration-300"
        >
            <div x-show="!$store.flux.dark" class="flex items-center">
                <flux:icon.sun class="text-yellow-500 size-6" />
            </div>
            <div x-show="$store.flux.dark" class="flex items-center">
                <flux:icon.moon class="text-white size-6" />
            </div>
        </flux:button>
    </div>
@endsection
