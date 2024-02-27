<div>
    <nav class="flex align-middle px-[2%] z-[900] mb-2" id="myHeader">
        <div class="w-[240px] hidden lg:flex items-center align-middle mt-2">
            <a href="/">
                {{-- <img style="width: 138px;height: 51px;"
                    src="{{ getImage('images/' . Statamic\Facades\GlobalSet::find('logo')->inCurrentSite()->data()['logo']) }}"> --}}
            </a>
        </div>
        <div class="w-full flex justify-center mt-[10px] lg:mr-8 md:mr-2">

            <div class="lg:hidden flex w-full justify-between mx-2 mb-2.5">

                {{-- <x-sidebar-component /> --}}
                <div class="w-[6rem]">
                    {{-- <a href="/"><img
                            src="{{ getImage('images/' . Statamic\Facades\GlobalSet::find('logo')->inCurrentSite()->data()['logo']) }}"
                            style="max-width:120%;margin-top:-7px;"></a> --}}
                </div>
                {{-- @livewire('icon-shopping-cart-component') --}}
            </div>
            <div class="hidden lg:flex lg:items-center lg:w-auto w-full">
                <nav>
                    <ul
                        class="flex xl:gap-6 lg:gap-2 items-center justify-between text-[13px] xl:text-[16px] font-[Somar Sans] md:text-[#3f3f3f] text-black ">
                        {{-- @foreach (Statamic::tag('nav:header') as $navItem)
                            @if (empty($navItem['children']))
                                <li><a class="pr-1 no-underline hover:text-[#8b0303] {{ URL::to('/' . $navItem['url']) == Url::current() ? 'text-[#8b0303] font-black font-semibold' : '' }}"
                                        href="{{ URL::to('/' . $navItem['url']) }}">{{ __('messages.' . $navItem['title']) }}</a>
                                </li>
                            @else
                                <li>
                                    <div class="dropdown cursor-pointer inline-block relative">
                                        <div class="flex items-center justify-end">
                                            <span
                                                class=":text-[2rem] text-[13px] md:text-[13px] xl:text-[16px] font-[Somar Sans] md:text-[#3f3f3f] text-black  hover:text-black font-medium px-[6px]">{{ __('messages.' . $navItem['title']) }}</span>
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </div>
                                        <ul
                                            class="shadow-lg dropdown-menu cursor-pointer hidden md:text-[#3f3f3f] text-black  font-[Somar Sans] text-[13px] pt-1 absolute w-[205px] z-[999]">
                                            @foreach ($navItem['children'] as $navItemChildren)
                                                @if (empty($navItemChildren['children']))
                                                    <li><a class="bg-[#e5e5e5] hover:text-[#8b0303] hover:font-bold py-2 px-4 block {{ URL::to('/' . $navItemChildren['url']) == Url::current() ? 'text-[#8b0303] font-semibold' : '' }}"
                                                            href="{{ URL::to('/' . $navItemChildren['url']) }}">{{ __('messages.' . $navItemChildren['title']) }}</a>
                                                    </li>
                                                @else
                                                    <li><a
                                                            class="bg-[#e5e5e5] text-[#202020] font-bold py-2 px-4 block">{{ __('messages.' . $navItemChildren['title']) }}
                                                        </a>
                                                    </li>
                                                    @foreach ($navItemChildren['children'] as $child)
                                                        <ul>
                                                            <li><a
                                                                    class="bg-[#e5e5e5] hover:text-[#8b0303] hover:font-bold py-2 px-4 block {{ URL::to('/' . $child['url']) == Url::current() ? 'text-[#8b0303] font-semibold' : '' }}"href="{{ URL::to('/' . $child['url']) }}">{{ __('messages.' . $child['title']) }}
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            @endif
                        @endforeach --}}
                    </ul>
                </nav>
            </div>
        </div>
        <div class="hidden order-2 lg:order-3 lg:flex items-center justify-end mt-3" id="nav-content">
            {{-- @if (currentUser())
                <div class="flex items-center md:order-2">
                    <button type="button"
                        class="updatedProfilePicture flex mr-3 text-sm bg-[#e5e5e5] md:mr-0 p-1 rounded-lg border border-gray-400"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        @if (currentUser()->provider_id)
                            <img width="68px" id="profile_photo_path" src="{{ currentUser()->profile_photo_path }}">
                        @elseif (currentUser()->profile_photo_path)
                            <img width="68px" id="profile_photo_path"
                                src="{{ env('APP_URL_Call') . '/storage/' . currentUser()->profile_photo_path }}">
                        @else
                            <img id="profile_photo_student" width="68px"
                                src="{{ getImage('../assets/student.png') }}">
                        @endif
                    </button>

                    <!-- Dropdown menu -->
                    <div class="z-[500] text-center hidden my-4 text-base !ml-2 w-[150px] list-none bg-[#e5e5e5] divide-y divide-gray-400 shadow"
                        id="user-dropdown">
                        <div class="px-1 py-2">
                            <span class="block text-sm text-gray-900">{{ currentUser()->name }}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            @if (auth('instructor')->user())
                                <li>
                                    <a href="{{ route('instructor.profile') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400">{{ __('messages.profile') }}</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('profile') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400">{{ __('messages.profile') }}</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('settings') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400">{{ __('messages.settings') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400">{{ __('messages.logout') }}</a>
                            </li>
                        </ul>
                    </div>
                    <button type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @else
                <div class="auth flex items-center w-full md:w-full">
                    <button wire:loading.attr="disabled"
                        class="flex justify-center items-center w-[122px] h-[50px] text-[16px] font-[Somar Sans] font-semibold bg-[#8B0303] text-[#FFFFFF] rounded-[10px]"
                        type="button" data-modal-toggle="authentication-modal">
                        {{ __('messages.login') }}
                    </button>
                </div>
            @endif --}}
        </div>
        <div class="hidden lg:flex flex-center align-middle mr-8 mt-3">
            <div id="parentClassSearch" class="flex items-center justify-between gap-5">
                {{-- @livewire('sidebar-shopping-cart-component', ['slug' => $slug ?? '']) --}}
                {{-- @livewire('search-component') --}}
            </div>
        </div>
        <span
            class="hidden lg:flex justify-center items-center border-l border-[1.5px] border-[#797979] mt-3 mx-6 opacity-40"></span>
    </nav>
    <script>
        window.addEventListener('updatedProfilePicture', event => {
            $("#profile_photo_path").attr("src", '{{ env('APP_URL_Call') }}' + '/storage/' + event.detail
                .profilePicture);
        })
        window.addEventListener('deleteProfilePicture', event => {
            $("#profile_photo_path").attr("src", '../assets/student.png');
        })
    </script>
</div>
