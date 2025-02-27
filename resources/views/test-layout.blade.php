@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-black dark:text-white">Teste com Flux e Alpine</h1>

    <!-- Teste do Botão Flux com Ícone -->
    <div class="flex justify-center my-8">
        <flux:button
            variant="subtle"
            aria-label="Alternar tema"
            class="transition-colors duration-300"
        >
            <flux:icon.sun class="text-yellow-500 size-6" />
        </flux:button>
    </div>
@endsection
