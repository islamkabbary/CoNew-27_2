<x-main-layout-component>
@dd($title)
    <x-slot name="title">{{ $seo_title ?? $title }}</x-slot>
    <x-slot name="description">{{ $description ?? '' }}</x-slot>
    <x-slot name="meta_tags">{{ $meta_tags ?? '' }}</x-slot>
    <x-slot name="main">
        <div class="grid grid-cols-12 lg:pl-16 md:pl-10 pl-5 w-full mr-[15px]">
            <div class="col-span-1">
                <div class="flex-col w-5 lg:w-8 mt-28 lg:mt-32">
                    @foreach ($soichal['main'] as $item)
                        @if ($item['is_header'])
                            <div>
                                <a href="{{ $item['url'] }}" target="_blank">
                                    <i class="{{ $item['icon_fontawesome'] }} block text-[25px] h-[100px] pb-20"></i>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="relative col-span-11 text-center lg:mt-16 !h-fit">
                <div class="owl-carousel" id="owlHeader">
                    @foreach ($page->slids as $slid)
                        <div>
                            <div class="md:grid md:grid-cols-2 ml-[30px] md:mt-0 mt-[25px]">
                                <div class="md:mt-20 lg:mt-20 xl:mt-40">
                                    <p
                                        class="font-[Somar Sans] text-[22px] ml-[3px] lg:text-[2.25rem] md:font-bold font-bold text-[#8b0303]">
                                        {{ $slid->text_arabic }}
                                    </p>
                                    @if ($slid->sub_title)
                                        <p
                                            class="font-[Somar Sans] text-[16px] md:text-[15px] lg:text-[20px] md:text-[#3f3f3f] text-black  text-center mt-6">
                                            {{ $slid->sub_title }}
                                        </p>
                                    @endif
                                    <div style="height: 20px !important;"></div>
                                    <a type="button"
                                        href="{{ $slid->url ? URL::to('/') . "$slid->url" : URL::to('/form') }}"
                                        class="inquiriesGoogle bg-[#8b0303] mr-[50px] hover:bg-[#b00000] rounded-lg text-white font-[Somar Sans] px-5 py-1 lg:px-8 lg:py-2 xl:px-10 xl:py-3 ml-14">
                                        {{ $slid->button ? $slid->button : __('messages.For inquiries') }}
                                    </a>
                                </div>
                                <div class="relative z-30 mt-10 md:mt-0 mx-auto">
                                    <img src="{{ getImage($slid->bg_image) }}" width="100%" height="100%"
                                        alt="{{ $slid->bg_image->alt ?? 'slid image' }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="content">
        <div class="flex flex-col items-center mt-8 w-full text-left">
            <p
                class="font-[Somar Sans] text-[24px] z-50 md:text-[32px] :text-[70px] lg:text-[42px] font-semibold text-[#8b0303]">
                {{ __('messages.Why choose Proleaders?') }}
            </p>
            <p
                class="font-[Somar Sans] text-[17px] lg:text-[18px] md:text-[#3f3f3f] text-black  text-center mt-6 mb-10 mx-5 md:mx-0">
                إذا كنت تبحث عن معهد انجليزي بجدة أو معهد انجليزي بالرياض أوأفضل برامج الدراسة عن بُعد<br>
                فمرحباً بك في أفضل معهد انجليزي في المملكة السعودية، وذلك لأننا نوفر دورات لغة انجليزية<br>
                احترافية من خلال:
            </p>
            <div
                class="flex flex-wrap sm:flex-nowrap justify-center font-[Somar Sans] md:text-[#3f3f3f] text-black  gap-3 md:gap-5">
                @foreach ($page->why_choose_proleaders as $key => $item)
                    <div class="flex flex-col items-center">
                        <img width="100%"
                            class="drop-shadow-[2px_0px_10px_rgba(108,255,183,0.20)] xs:xl:w-[333px] sm:w-[200px] md:w-[230px] lg:w-[300px] xl:xl:w-[333px] w-[280px] :w-[500px] h-[170px] xs:h-[210px] sm:h-[120px] md:h-[140px] lg:h-[190px] xl:h-[210px] :h-[300px] rounded-xl"
                            src="{{ getImage($item['image']) }}" alt="{{ $item['image']->alt ?? 'item image' }}">
                        <p class="text-[16px] xl:text-[18px] md:mt-5 xl:mt-7 md:my-0 my-6">
                            {{ $item['title'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
        <!--green section-->
        @php
            $bg_green_web = $page->green_section[0]['bg_green_web'];
            $bg_green_phone = $page->green_section[0]['bg_green_phone'];
        @endphp

        <style>
            @media(min-width: 768px) {
                .green_phone {
                    background-image: url({{ $bg_green_web }});
                }
            }

            @media(max-width: 425px) {
                .green_phone {
                    min-height: 490px !important;
                    background-image: url({{ $bg_green_phone }});
                }
            }

            @media(max-width: 320px) {
                .green_phone {
                    min-height: 370px !important;
                    background-image: url({{ $bg_green_phone }});
                }
            }
        </style>
        <div
            class="green_phone flex 2xl:min-h-[695px] xl:min-h-[390px] lg:min-h-[275px] lg:mt-0 md:mt-1 md:min-h-[210px] bg-no-repeat bg-cover">
            <div class="flex flex-col justify-center items-center text-center">
                <p class="text-white mx-auto md:w-[65%] w-[93%] md:mt-0 md:mb-0 mt-[60px] mb-2">
                    {{ $page->green_section[0]['content'] }}
                </p>
                <a href="/about-us">
                    <button
                        class="flex justify-center items-center lg:mt-[26px] mt-3 lg:text-[20px] lg:w-[243px] w-[200px] lg:h-[50px] h-[40px] mx-auto bg-[#fff] text-[#8B0303] text-[16px] font-semibold rounded-[10px]">
                        {{ __('messages.view more') }}
                    </button>
                </a>
            </div>
        </div>
        <!--speacial courses-->
        <div class="flex flex-col justify-center items-center md:mx-10 mx-3">
            <p
                class="font-[Somar Sans] text-[24px] md:text-[32px] lg:text-[42px] font-semibold text-[#8b0303] text-center">
                {{ __('messages.Featured courses') }}
            </p>
            <p
                class="font-[Somar Sans] text-[15px] lg:text-[20px] md:text-[#3f3f3f] text-black  text-center md:mt-6 md:mb-10 my-5 mx-5">
                نقدم لك دورات انجليزي مع أفضل المدربين الأجانب حتي تتعلم اللغة<br>
                الصحيحة من الناطقين الأصليين وتتحدث الانجليزية بثقة
            </p>
            <div class="md:w-[80%] w-[90%] mx-auto">
                <div class="owl-carousel owl-theme z-0 owlAllOffer">
                    @php
                        $products = Statamic\Entries\Entry::query()
                            ->where('collection', 'products')
                            ->where('special', true)
                            ->where('status', 'Published')
                            ->get(['title', 'content_arabic', 'content_english', 'slug', 'small_image', 'product_system_field', 'is_installment_package']);
                    @endphp
                    @foreach ($products as $product)
                        @livewire('single-loop-course-component', ['product' => $product->toArray()])
                    @endforeach
                </div>
            </div>
            <a href="/all-courses">
                <button
                    class="flex justify-center items-center mt-[26px] w-[243px] h-[50px] mx-auto bg-transparent text-[#8b0303] border border-[#8B0303] text-[16px] font-semibold rounded-[10px]">
                    {{ __('messages.view more') }}
                </button>
            </a>
        </div>
        <div class=" w-full mt-[60px] h-[200px] xs:h-[240px] sm:h-[280px] md:h-[350px] lg:h-[400px] bg-center bg-cover bg-no-repeat align-middle relative flex flex-col justify-center items-center before:content-[''] before:block before:absolute before:top-0 before:right-0 before:left-0 before:bottom-0 before:w-full before:h-full before:bg-[rgba(139,_3,_3,_0.35)] bg-fixed"
            style="background-image: url({{ getImage($page->women_image) }})">
            <div class="flex flex-col justify-center items-center align-middle">
                <p
                    class="font-[Somar Sans] text-white text-[20px] xs:text-[20px] sm:text-[24px] md:text-[36px] lg:text-[42px] font-medium text-center z-10 md:max-w-[80%] max-w-[85%]">
                    {{ __('messages.women_text') }}
                </p>
                <a href="/form"
                    class="inquiriesGoogle flex justify-center items-center w-[100px] h-[30px] sm:w-[120px] sm:h-[40px] lg:w-[170px] lg:h-[50px] bg-[#8b0303] hover:bg-[#b00000]       rounded text-white font-[Somar Sans] text-[15px] sm:text-[14px] lg:text-[16px] mt-8 z-10">
                    <button>{{ __('messages.For inquiries') }}</button>
                </a>
            </div>
        </div>
        <div
            class="flex flex-col justify-center items-center md:px-10 px-3 bg-no-repeat bg-contain bg-[url('{{ getImage('images/vector.png') }}')]">
            <p
                class="font-[Somar Sans] text-[16px] md:text-[22px] lg:text-[28px] font-semibold text-black text-center mt-20 mb-8">
                {{ __('messages.latest offers') }}
            </p>
            <div class="md:w-[80%] w-[90%] mx-auto">
                <div class="owl-carousel owl-theme z-0 owlAllOffer">
                    @php
                        $offers = Statamic\Entries\Entry::query()
                            ->whereIn('collection', ['offers', 'packages'])
                            ->where('new_offers', true)
                            ->where('status', 'Published')
                            ->get();
                    @endphp
                    @foreach ($offers as $offer)
                        @livewire('single-loop-offers-component', ['offer' => $offer->toArray()])
                    @endforeach
                </div>
            </div>
            <a href="/all-offers">
                <button
                    class="flex justify-center items-center mt-[26px] w-[243px] h-[50px] text-[#8b0303] mx-auto bg-transparent border border-[#8B0303] text-[16px] font-semibold rounded-[10px]">
                    {{ __('messages.view more') }}
                </button>
            </a>
        </div>
        <div class=" w-full mt-[60px] h-[140px] sm:h-[180px] md:h-[250px] lg:h-[300px] bg-center bg-cover bg-no-repeat align-middle relative flex flex-col justify-center items-center before:content-[''] before:block before:absolute before:top-0 before:right-0 before:left-0 before:bottom-0 before:w-full before:h-full before:bg-[rgba(139,_3,_3,_0.35)] bg-fixed"
        style="background-image: url({{ getImage($page->test_image) }})">
            <div class="flex flex-col justify-center items-center align-middle">
                <p
                    class="font-[Somar Sans] text-white text-[26px] xs:text-[20px]  sm:text-[24px] md:text-[36px] lg:text-[42px] font-medium text-center z-10 ">
                    {{ __('messages.Select your level now for free') }}
                </p>
                <a href="/placement-test"
                    class="testGoogle flex justify-center items-center w-[100px] h-[30px] sm:w-[120px] sm:h-[40px] lg:w-[170px] lg:h-[50px] bg-[#8b0303] hover:bg-[#b00000]       rounded text-white font-[Somar Sans] text-[15px] sm:text-[14px] lg:text-[16px] mt-8 z-10">
                    <button>{{ __('messages.Test now') }}</button>
                </a>
            </div>
        </div>
        <div class="flex flex-col items-start self-start mx-2 sm:mx-4 md:mx-6 lg:mx-10">
            <div class="flex justify-between w-full md:px-10 px-2 mt-16">
                <p
                    class="font-[Somar Sans] text-[18px] md:text-[24px] lg:text-[28px] font-semibold text-black text-center">
                    {{ __('messages.Read in the blog') }}
                </p>
                <div class="flex gap-3">
                    <a href="/blogs"
                        class="items-end text-[#8b0303] font-[Somar Sans] text-[12px] md:text-[14px] font-medium">
                        {{ __('messages.view all') }}
                    </a>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 11.9835C8 11.8661 8.02062 11.7585 8.06185 11.6606C8.10308 11.5628 8.17524 11.4649 8.27832 11.3671L14.4013 5.555C14.5663 5.39845 14.7879 5.32506 15.0662 5.33485C15.3445 5.34463 15.5662 5.4278 15.7311 5.58436C15.9373 5.78005 16.0249 5.99042 15.9939 6.21547C15.963 6.44052 15.8651 6.6411 15.7002 6.81723L10.2575 11.9835L15.7002 17.1498C15.8651 17.3064 15.9579 17.5168 15.9785 17.781C15.9991 18.0451 15.9063 18.2555 15.7002 18.4121C15.5352 18.6078 15.3188 18.6909 15.0508 18.6616C14.7827 18.6322 14.556 18.5393 14.3704 18.3827L8.27832 12.6C8.17524 12.5021 8.10308 12.4043 8.06185 12.3064C8.02062 12.2086 8 12.101 8 11.9835Z"
                            fill="#8B0303" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:w-full md:mx-0 mx-auto gap-10 justify-center mt-5 mb-12">
                @if ($page->last_blogs)
                    @foreach ($page->last_blogs as $blog)
                        <a href="{{ URL::to('/blogs/' . $blog->slug) }}" class="overflow-hidden rounded-xl">
                            <div id="smallBlog" style="background-image: url('{{ getImage($blog->main_image) }}')"
                                class=" bg-no-repeat border border-[#8080801c] duration-[1000ms] hover:scale-125 bg-cover xl:w-[380px] lg:w-[300px] md:w-[215px] xl:h-[175px] lg:h-[140px] md:h-[100px] w-[280px] h-[130px] bg-white drop-shadow-[1px_4px_5px_rgba(108,255,183,0.40)] rounded-sm xs:rounded-md md:rounded-xl flex flex-col items-center">
                                <div id="bgBlack"
                                    class="hidden bg-black opacity-[0.6] h-full w-full rounded-sm xs:rounded-md md:rounded-xl">
                                    <p
                                        class="z-[800] text-white text-center text-[17px] flex w-full absolute top-[50%] -translate-y-6 justify-center">
                                        {{ $blog->title }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </x-slot>
{{-- </x-main-layout-component> --}}
