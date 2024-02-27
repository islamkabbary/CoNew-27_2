<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
    x-data="{
        lang: localStorage.getItem('lang') || 'en',
        dir: localStorage.getItem('dir') || 'rtl',
        toggleDirLang() {
            this.lang = this.lang === 'en' ? 'ar' : 'en';
            this.dir = this.dir === 'ltr' ? 'rtl' : 'ltr';
            this.updateAttributes();
            window.location.reload();
        },
        setToLTR() {
            this.lang = 'en';
            this.dir = 'ltr';
            this.updateAttributes();
            window.location.reload();
        },
        setToRTL() {
            this.lang = 'ar';
            this.dir = 'rtl';
            this.updateAttributes();
            window.location.reload();
        },
        updateAttributes() {
            localStorage.setItem('dir', this.dir);
            localStorage.setItem('lang', this.lang);
            document.documentElement.dir = this.dir;
            document.documentElement.lang = this.lang;
        }
    }">
@php
    $title = 'home';
    $title_ar = 'الرئيسية';
@endphp
@if (App::getLocale() == 'ar')
    <x-head-component :title=$title_ar></x-head-component>
@else
    <x-head-component :title=$title></x-head-component>
@endif

<body class="overflow-x-hidden relative font-somar" x-data="{ toggelMenu: false }">
    {!! $custom_tag_seo->custom_body ?? '' !!}
    <div class="relative rtl:right-10 left-10 cursor-pointer" onclick="scrollToTop()">
        <div
            class="cent bg-white z-50 w-12 h-12 shadow-xl border border-zinc-100 rounded-full drop-shadow-sm md:bottom-20 bottom-8 fixed">
            <svg class="flex justify-center items-center rotate-180" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="none">
                <path
                    d="M12 12.9462L7.92689 8.87309C7.78844 8.73462 7.6144 8.66379 7.40479 8.66059C7.19519 8.65737 7.01795 8.7282 6.87309 8.87309C6.7282 9.01795 6.65576 9.19359 6.65576 9.39999C6.65576 9.60639 6.7282 9.78202 6.87309 9.92689L11.3673 14.4211C11.4609 14.5147 11.5596 14.5807 11.6635 14.6192C11.7673 14.6577 11.8795 14.6769 12 14.6769C12.1205 14.6769 12.2327 14.6577 12.3365 14.6192C12.4404 14.5807 12.5391 14.5147 12.6327 14.4211L17.1269 9.92689C17.2654 9.78844 17.3362 9.6144 17.3394 9.40479C17.3426 9.19519 17.2718 9.01795 17.1269 8.87309C16.982 8.7282 16.8064 8.65576 16.6 8.65576C16.3936 8.65576 16.218 8.7282 16.0731 8.87309L12 12.9462Z"
                    fill="#8b0303" />
            </svg>
        </div>
    </div>
    <main class="bg-main bg-cover bg-right bg-no-repeat relative overflow-hidden {{ $classMain ?? '' }}">
        @php $pass_slug = isset($slug)? $slug->value() : '' ; @endphp
        <x-navbar-component :slug="$pass_slug" />
        {{-- {!! \App\Models\ShortCode::compile($main) !!} --}}
        @if (isset($errors))
            @if ($errors->has('error'))
                <div class="alert alert-danger fixed top-5 right-5 z-100 p-3 text-white bg-red-700 rounded"
                    id="alertHide">
                    {{ $errors->first('error') }}
                </div>
            @endif
        @endif
        @if (isset($errors))
            @if ($errors->has('status'))
                <div class="alert alert-danger fixed top-5 right-5 z-100 p-3 text-white bg-green-400 rounded"
                    id="alertHideStatus">
                    {{ $errors->first('status') }}
                </div>
            @endif
        @endif
    </main>
    {{-- {!! \App\Models\ShortCode::compile($content ?? '') !!} --}}
    {{-- @livewire('login-and-register-component', key('login-and-register-component' . mt_rand(1, 1000))) --}}
    {{-- @livewire('footer-shopping-cart-component', key('footer-shopping-cart-component' . mt_rand(1, 1000))) --}}
</body>

</html>
