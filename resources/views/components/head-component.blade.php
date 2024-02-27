<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <title>{{ isset($seo_title) ? $seo_title->value() : $title }}</title> --}}
    {{-- <meta name="description" content="{{ $description ?? '' }}"> --}}
    {{-- <link rel="canonical" href="{{ $canonical_link ?? url()->current() }}"> --}}
    {{-- {!! html_entity_decode($meta_tags ?? '') !!} --}}
    <link rel="shortcut icon" href="{{ asset('images/icon-logo.png') }}" type="image/x-icon">
    {{-- <meta name="google-site-verification" content="R1LOVjSh5mEqZNI4_GdoUu8TcidGZjrA_KJUfZ_-GGY" /> --}}
    {{-- <meta name="facebook-domain-verification" content="fieo0ueleucvr4hnl8l11r8lghqdap" /> --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    {{-- <script src="https://checkout.tabby.ai/tabby-promo.js"></script> --}}
    {{-- {!! $custom_tag_seo->custom_head ?? '' !!} --}}
    @livewireStyles
    {{-- {!! $script_header['script'] !!} --}}
</head>

<body>
    <script>
    </script>
</body>

</html>
