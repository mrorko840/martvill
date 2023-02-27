@extends('site.layouts.app')
@section('page_title', $vendor->name)
@section('seo')
    @include('site.shop.seo')
@endsection
@section('content')
    <section class="mx-0 lg:mx-4 xl:mx-32 2xl:mx-64 3xl:mx-92 ">
        {{-- profile and top benner --}}
        @include('site.shop.top_banner')

        {{-- menu items and search --}}
        @include('site.shop.menu')

        <!-- All product section start -->
        @include('site.layouts.section.shop.all-product')
        <!-- All product section end -->
    </section>
@endsection
@section('js')
    <script src="{{ asset('public/dist/js/custom/site/wishlist.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/site/compare.min.js') }}"></script>
@endsection
