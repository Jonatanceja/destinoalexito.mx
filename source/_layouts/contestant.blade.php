@extends('_layouts.main')
@section('body')

<main class="py-12 md:py-16 min-h-screen px-5 md:px-0 relative z-0">
    <div class="container max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-5 gap-12 md:gap-20 items-center z-20 relative">
        <div class="md:col-span-2 wow fadeIn">
            <img class="z-40" src="{{ $page->pic }}" alt="">
        </div>
        <div class="md:col-span-3 space-y-5 wow fadeInLeft">
            <x-h2>{{ $page->name }}</x-h2>
            <div class="space-y-2">
                <div class="flex space-x-5 text-xs text-amber-500">
                    <p>{{ $page->birthday }}</p>
                    <div>|</div>
                    <p>Genero: {{ $page->genre }}</p>
                </div>
                <div class="flex space-x-5 text-xl text-pink-500">
                    @if ($page->instagram)
                        <a class="hover:text-pink-400" href="{{ $page->instagram }}"><i class="lni lni-instagram-fill"></i></a>
                    @endif
                    @if ($page->youtube)
                        <a class="hover:text-pink-400" href="{{ $page->youtube }}"><i class="lni lni-youtube"></i></a>
                    @endif
                    @if ($page->tiktok)
                        <a class="hover:text-pink-400" href="{{ $page->tiktok }}"><i class="lni lni-tiktok"></i></a>
                    @endif
                </div>
            </div>
            <p>{!! $page->getContent() !!}</p>
        </div>
    </div>
    <div class="md:h-full h-1/4 w-full md:w-1/4 bg-amber-400 z-10 left-0 top-0 absolute"></div>
</main>

@endsection