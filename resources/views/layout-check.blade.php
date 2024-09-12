@extends('layouts.app')
@section('title', 'This is testing title section')
@section('content')
  <h2>This is content testing section</h2>
@endsection

@section('message')
  @parent
  <h3>Hello this is heading three</h3>
@endsection

@php
  $fruits = ['apple', 'jackfruits', 'pineapple', 'guava'];
@endphp

<script>
  var fruits = @json($fruits);
  fruits.forEach((fruit)=>{
    console.log(fruit);
  })
</script>

@push('scripts')
  <script src="bootstrap.js"></script>
  <script src="vue.js"></script>
  <script src="mongobd.js"></script>
@endpush

@push('styles')
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="vue.css">
@endpush