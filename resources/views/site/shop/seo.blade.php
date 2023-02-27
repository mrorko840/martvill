@php
    $seoTitle = isset($vendor->name) && strlen($vendor->name) > 0 ? $vendor->name : '';
    $seoDescription = isset($vendor->description) && strlen($vendor->description) > 0 ? $vendor->description : '';
    $seoImage = optional($vendor->logo)->fileUrl() ? optional($vendor->logo)->fileUrl() : '';
    $seoKeywords = preference('company_name').', '.__('eCommerce').', '.__('Multivendor').', '.__('Multivendor eCommerce');
@endphp

    <meta name="robots" content="index, follow">
    <meta name="title" content="{{ $vendor->name }}">
    <meta name="description" content="{{ $seoDescription }}" />
    <meta name="keywords" content="{{ $seoKeywords }}">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $seoTitle }}">
    <meta itemprop="description" content="{{ $seoDescription }}">
    <meta itemprop="image" content="{{ $seoImage }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDescription }}">
    <meta property="og:image" content="{{ $seoImage }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $seoTitle }}">
    <meta property="twitter:description" content="{{ $seoDescription }}">
    <meta property="twitter:image" content="{{ $seoImage }}">