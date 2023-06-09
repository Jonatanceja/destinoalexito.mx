@extends('_layouts.main')
@section('body')

<main class="py-24 md:py-16 min-h-screen px-5 md:px-0 relative z-0">
    <div class="container max-w-4xl mx-auto">
        <div class="space-y-5">
            <x-h2>{{ $page->title }}</x-h2>
            <p>{!! $page->getContent() !!}</p>
        </div>
    </div>
</main>

@endsection