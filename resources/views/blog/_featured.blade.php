<section class="w-full max-w-[1440px] mx-auto bg-white dark:bg-bg-dark transition-colors duration-300">
    @if(isset($news[0]))
        @php $article = $news[0]; @endphp
            <!-- Card Principal com Efeito Hover e Margem Inferior -->
        <div class="flex flex-row gap-[24px] w-full h-[331px] items-center pl-[20px]
                    bg-white dark:bg-zinc-900 p-4 rounded-lg shadow-lg hover:shadow-2xl transition duration-300
                    mb-8"
             x-data="{ hover: false }" x-on:mouseenter="hover = true" x-on:mouseleave="hover = false">

            <!-- Container da Imagem da Notícia (alinhado à esquerda) -->
            <div class="flex-shrink-0">
                <img src="{{ $article->url_to_image }}" alt="{{ $article->title }}"
                     class="w-[350px] h-[220px] object-cover rounded-[12px]">
            </div>

            <!-- Container com Título e Descrição (alinhado à direita) -->
            <div class="flex flex-col gap-2 justify-center flex-grow">
                <!-- Título da Notícia -->
                <h2 class="w-full font-switzer font-bold text-[28px] md:text-[36px] leading-[36px] md:leading-[48px] tracking-[0] text-left text-black dark:text-white">
                    {{ $article->title }}
                </h2>
                <!-- Descrição da Notícia -->
                <p class="w-full font-switzer font-normal text-[14px] md:text-[16px] leading-[20px] md:leading-[24px] text-zinc-500 dark:text-zinc-400">
                    {{ $article->description }}
                </p>
                <!-- Link para Leitura Completa -->
                <a href="{{ route('news.show', $article->id) }}" class="text-primary dark:text-highlight font-medium hover:underline">
                    Read More →
                </a>
            </div>

        </div>
    @endif

    <!-- Grid de Cards Menores (Abaixo do Card Principal) -->
        <section class="w-full max-w-[1600px] mx-auto bg-white dark:bg-bg-dark transition-colors duration-300">
            <!-- Grid de Cards Menores (Abaixo do Card Principal) -->
            <section class="py-8 bg-white dark:bg-bg-dark transition-colors duration-300">
                <div class="container mx-auto px-[20px] md:px-[20px]">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($news->skip(1)->take(6) as $item)
                            <!-- Componente ou bloco para cada notícia menor -->
                            <div class="flex flex-row gap-[16px] w-full h-auto min-h-[160px] items-stretch
                                bg-white dark:bg-zinc-900 p-4 rounded-lg shadow-lg hover:shadow-2xl transition duration-300
                                overflow-hidden">

                                <!-- Imagem da Notícia -->
                                <div class="flex-shrink-0">
                                    <img src="{{ $item->url_to_image }}" alt="{{ $item->title }}"
                                         class="w-[140px] h-[140px] object-cover rounded-[8px]">
                                </div>

                                <!-- Texto da Notícia -->
                                <div class="flex flex-col flex-grow">
                                    <div class="flex flex-col flex-grow">
                                        <!-- Título da Notícia -->
                                        <h2 class="w-full font-switzer font-bold text-[14px] md:text-[16px] leading-[18px] md:leading-[20px] tracking-[0] text-left text-black dark:text-white">
                                            {{ $item->title }}
                                        </h2>
                                        <!-- Descrição da Notícia -->
                                        <p class="w-full font-switzer font-normal text-[12px] md:text-[14px] leading-[16px] md:leading-[18px] text-zinc-500 dark:text-zinc-400">
                                            {{ Str::limit($item->description, 80) }}
                                        </p>
                                    </div>
                                    <!-- Link para Leitura Completa (Alinhado ao fundo do card) -->
                                    <a href="{{ route('news.show', $item->id) }}"
                                       class="text-primary dark:text-highlight font-medium hover:underline mt-auto">
                                        Read More →
                                    </a>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
</section>
