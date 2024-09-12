@extends('include-directive.layouts.app')

@section('section')
  @include('include-directive.header')
    <!-- includeIf directive check -->
    @includeIf('include-directive.bodies')

    <!-- includeWhen directive check -->
    @includeWhen(true, 'include-directive.includeWhen')

    <!-- includeUnless directive check -->
    @includeUnless(false, 'include-directive.includeUnless')
  @include('include-directive.footer')
@endsection