<main class="w-full overflow-x-hidden bg-white dark:bg-zinc-900">
    <!-- Container que envolve Header e Hero (fundo preto fixo) -->
    <div class="w-full max-w-[1440px] mx-auto flex flex-col gap-[132px]
                pt-8 md:pt-[32px] md:pr-[100px] md:pb-[164px] md:pl-[100px]
                bg-zinc-900">
        <x-header />
        @include('blog._hero')
    </div>

    <!-- Conteúdo restante da página -->
    <div class="flex flex-col gap-8 px-4 md:px-[80px] bg-white dark:bg-zinc-900 transition-colors duration-300">
        {{ $slot }}
    </div>

    <x-footer />
</main>
