@extends('article._master')


@section('main')
<!-- Main Section -->
<main class="mx-2">
    @include('article.partials.editors_choice')

    <div class="mx-1 row">
        @include('article.partials.article_card')
        @include('article.partials.article_card')
        @include('article.partials.article_card')
        @include('article.partials.article_card')
    </div>

    <div class="mx-auto">
        <div>Pagination</div>
    </div>
</main>
<!-- ./Main Section -->
@endsection






