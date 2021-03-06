@extends('layouts.app')

@section('content')

    <section class="main-bg">
        <main>
            <p class="mt-3 mb-3">Welkom bij Creative Media and Game Technologies. Op deze website vind je een selectie
                van de beste memes
                en grappen over het studeren bij CMGT in Rotterdam.</p>
            <h3>Top memes</h3>
            <p class="mt-3 mb-3">Memes in de spotlight</p>
            <section class="spotlight-bg">
                <div class="row">
                    @foreach($featured as $index => $post)
                        @if($index > 1) @continue @endif
                        @include('app.partials._singlecase')
                    @endforeach
                    <div class="col-12">{{ $featured }}</div>
                </div>
            </section>
            <p>Bekijk hier alle uigelichte memes</p>
            {{--{{ $posts->links() }}--}}
            <p>Of zoek in alle memes via tags:</p>
            @foreach($tags as $tag)
                <div class="tag overview">
                    <a href="{{ url('tag/' . $tag->name) }}">{{ $tag->name }}</a>
                </div>
            @endforeach
        </main>
        <svg width="1000px" height="70px" viewBox="0 0 1000 70" preserveAspectRatio="none" class="poly bg-red">
            <polygon points="0 0 {{ rand(200, 850) }} 30 1000 0 1000 70 0 70" class="light-fill"></polygon>
        </svg>
    </section>

    <section class="browser-bg">
        <div class="title">
            <h3>Recente memes</h3>
        </div>
        <div class="browser">
            <div class="row">
                @foreach($posts as $post)
                    @include('app.partials._singlecase')
                @endforeach
                <div class="col-12">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>

@endsection
