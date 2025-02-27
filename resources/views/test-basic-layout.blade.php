@extends('layouts.app')

@section('content')
    <div class="p-8">
        <h1 class="text-2xl font-bold mb-4">Teste com Alpine.js e Flux UI</h1>
        <p class="mb-4">Esta é uma página de teste para validar o Alpine.js e a troca de tema.</p>

        <!-- Botão de Alternância de Tema -->
        <div x-data="{ dark: Alpine.store('flux').dark }" class="flex items-center gap-4">
            <button
                x-on:click="Alpine.store('flux').toggle()"
                class="px-4 py-2 bg-blue-500 text-white rounded"
            >
                Alternar Tema
            </button>
        </div>
    </div>
@endsection
