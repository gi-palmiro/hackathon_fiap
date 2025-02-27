{{--<main class="w-full overflow-x-hidden bg-white dark:bg-zinc-900">--}}
{{--    <div class="w-full max-w-full mx-auto flex flex-col gap-[132px]--}}
{{--                pt-8 md:pt-[32px] md:pr-[100px] md:pb-[164px] md:pl-[100px]--}}
{{--                bg-zinc-900">--}}
{{--        <x-header />--}}

{{--        @isset($title)--}}
{{--            @include('blog._hero', ['title' => $title])--}}
{{--        @else--}}
{{--            @include('blog._hero', ['title' => 'Welcome to Shift.io Blog'])--}}
{{--        @endisset--}}
{{--    </div>--}}

{{--    <div class="flex flex-col gap-8 px-4 md:px-[80px] bg-white dark:bg-zinc-900 transition-colors duration-300">--}}
{{--        {{ $slot }}--}}
{{--    </div>--}}

{{--    <x-footer />--}}
{{--</main>--}}


{{--<main class="w-full overflow-x-hidden bg-white dark:bg-zinc-900">--}}
{{--    <div class="w-full max-w-full mx-auto flex flex-col gap-[132px]--}}
{{--                pt-8 md:pt-[32px] md:pr-[100px] md:pb-[164px] md:pl-[100px]--}}
{{--                bg-zinc-900">--}}
{{--        <x-header />--}}

{{--        @isset($title)--}}
{{--            @include('blog._hero', ['title' => $title])--}}
{{--        @else--}}
{{--            @include('blog._hero', ['title' => 'Welcome to Shift.io Blog'])--}}
{{--        @endisset--}}
{{--    </div>--}}

{{--    <div class="flex flex-col gap-8 px-4 md:px-[80px] bg-white dark:bg-zinc-900 transition-colors duration-300">--}}
{{--        {{ $slot }}--}}
{{--    </div>--}}

{{--    <x-footer />--}}
{{--</main>--}}


<main class="w-full overflow-x-hidden bg-white dark:bg-zinc-900">
    <div class="w-full max-w-full mx-auto flex flex-col gap-[132px]
                pt-8 md:pt-[32px] md:pr-[100px] md:pb-[164px] md:pl-[100px]
                bg-zinc-900">
        <x-header />

        @isset($title)
            @include('blog._hero', ['title' => $title])
        @else
            @include('blog._hero', ['title' => 'Welcome to Shift.io Blog'])
        @endisset
    </div>

    <div class="flex flex-col gap-8 px-4 md:px-[80px] bg-white dark:bg-zinc-900 transition-colors duration-300">
        {{ $slot }}
    </div>

    <x-footer />
</main>
