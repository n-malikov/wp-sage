{{--
  Template Name: Demo page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

    <div class="page-header">
      <h1>{!! the_title() !!}</h1>
    </div>

    @php(the_content())

    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

  @endwhile
@endsection
