<div class="bg-zinc-800 p-4 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
    @if(isset($image_url))
        <img src="{{ $image_url }}" alt="{{ $title }}" class="w-full h-48 object-cover rounded-md">
    @endif
    <h2 class="text-xl font-bold mt-4 text-white">{{ $title }}</h2>
    <p class="text-gray-300 mt-2">{{ $description }}</p>
    <a href="{{ $link }}" class="inline-block mt-4 text-primary font-medium hover:text-highlight transition-colors">
        Ler mais
    </a>
</div>
