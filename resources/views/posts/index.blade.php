@extends('layouts.app')


@section('featured-post')

    @include('partials.featured-post')
@endsection


@section('content')

    @foreach ($posts as  $post)
         @include('partials.post-item')
    @endforeach
  
  
   
@endsection