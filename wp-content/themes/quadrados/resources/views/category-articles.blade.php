@extends('layouts.app')

@section('content')

  <header class="section-header">
    <h1>articles</h1>
  </header>

  <div class="articles">

    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php(the_post())
      @include('partials.content-'.get_post_type())
    @endwhile

  </div>

@endsection