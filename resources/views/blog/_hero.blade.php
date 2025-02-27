{{--<section class="h-[439.33px] flex flex-col items-center justify-start bg-zinc-900 px-[100px] pt-8 pb-16">
    <div class="w-full max-w-[1240px] flex flex-col items-center">
        <h1 class="text-7xl font-bold font-['Switzer'] leading-[79.20px] mt-10 text-center text-white">
            Welcome to Shift.io Blog
        </h1>
    </div>
</section>

<div class="w-full flex flex-col items-center">

    <h1 class="w-[982px] h-[79px] font-switzer font-bold text-[72px] leading-[79.2px] tracking-[0] text-center text-white">
        Welcome to Shift.io Blog
    </h1>
    <h2 class="mt-4 text-white text-xl md:text-2xl text-center">
        Seu espaço tech de inovação
    </h2>
</div>

--}}
{{--<section class="h-full flex flex-col items-center justify-start bg-zinc-900 px-[100px] pt-8 pb-16">--}}
{{--    <div class="w-full max-w-[1240px] flex flex-col items-center">--}}
{{--    <h1 class="text-7xl font-bold font-['Switzer'] leading-[79.20px] mt-10 text-center text-white">--}}
{{--        {{ $title ?? 'Welcome to Shift.io Blog' }}--}}
{{--    </h1>--}}
{{--    </div>--}}
{{--</section>--}}
<section class="h-full flex flex-col items-center justify-start bg-zinc-900 px-[100px] pt-8 pb-16">
    <div class="w-full max-w-[1240px] flex flex-col items-center">
        <h1 class="text-7xl font-bold font-['Switzer'] leading-[79.20px] mt-10 text-center text-white">
            {{ $title ?? 'Welcome to Shift.io Blog' }}
        </h1>
        <h2 class="mt-4 text-white text-xl md:text-2xl text-center">
            Seu espaço tech de inovação
        </h2>
    </div>
</section>

{{--
<main class="w-full overflow-x-hidden bg-white dark:bg-zinc-900">

    <div class="w-full max-w-[1440px] mx-auto flex flex-col gap-[132px]
                pt-8 md:pt-[32px] md:pr-[100px] md:pb-[164px] md:pl-[100px]
                bg-zinc-900">
        <x-header />


        @include('blog._hero', ['title' => $title ?? 'Welcome to Shift.io Blog'])
    </div>


    <div class="flex flex-col gap-8 px-4 md:px-[80px] bg-white dark:bg-zinc-900 transition-colors duration-300">
        {{ $slot }}
    </div>

    <x-footer />
</main>
--}}
