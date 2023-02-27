@extends('../site/layouts.user_panel.app')
@section('page_title', __('x', ['x' => __('Address')]))
@section('content')
    <div class="dark:bg-red-1 h-full xl:px-74p px-5 pt-30p xl:pt-14">
        <div>
            <div class="flex items-center">
                <span class="mr-4 lg:mt-0 mt-1">
                    <svg class="h-30p w-10 lg:w-53p lg:h-11" xmlns="http://www.w3.org/2000/svg" width="53" height="44" viewBox="0 0 53 44" fill="none">
                        <rect x="36.1779" y="27.377" width="16.6222" height="16.6222" rx="2" fill="#FCCA19" />
                        <rect width="32.2667" height="32.2667" rx="2" fill="#FCCA19" />
                    </svg>
                </span>
                <h1 class="dark:text-gray-2 dm-sans font-medium lg:pt-0 text-2xl lg:text-4xl text-gray-12 mb-1 dark:text-gray-2">
                    {{ __('Notifications') }}
                </h1>
            </div>
            <p class="dark:text-gray-2 lg:mt-1.5 roboto-medium font-medium text-base lg:text-xl mt-4 text-20 text-gray-10 leading-6">
                {{ __('All the notifications you received from us..') }}</p>
            <p class="lg:mt-90p mt-10 dm-bold lg:hidden block font-bold text-gray-12 lg:text-2xl text-lg uppercase">{{ __('Notifications') }}</p>
        </div>
        <div>
            <div class="lg:flex lg:justify-between lg:mt-7 mt-15p">
                <div class="mt-14 lg:block hidden dm-bold font-bold text-gray-12 lg:text-2xl text-lg uppercase">
                    <p>{{ __('notifications') }}</p>
                </div>
                <div class="flex justify-between lg:mt-10 mt-15p">
                    <h1 class="dm-sans font-medium mt-2 lg:text-lg text-sm whitespace-nowrap lg:mr-15p mr-0 text-gray-12 ">
                        {{ __('Filter By') }}
                    </h1>
                    <div class="flex">
                        <div x-data="{ dropdownOpen: false }">
                            <div>
                                <button @click="dropdownOpen = !dropdownOpen" class="inline-flex justify-between lg:w-168p w-24 border border-gray-2 px-2 lg:py-2.5 py-1 bg-white text-sm font-medium text-gray-10 hover:bg-gray-11 ">
                                    <div class="roboto-medium font-medium text-gray-10 lg:text-base text-xss whitespace-nowrap dark:text-gray-2 ">
                                        @php
                                            $filterDay = [
                                                'today' => __('Today'),
                                                'last_week' => __('Last 7 Days'),
                                                'last_month' => __('Last 30 Days'),
                                                'last_year' => __('Last 12 Months'),
                                                'all_time' => __('All Time'),
                                            ];
                                        @endphp
                                        @foreach ($filterDay as $key => $value)
                                            @if (request('filter_day') == $key)
                                                <span>{{ $value }}</span>
                                            @elseif(request('filter_day') == null && $key === 'all_time')
                                                <span>{{ __('All Time') }}</span>
                                            @endif
                                        @endforeach
                                        @if (request('filter_day') && !in_array(request('filter_day'), array_flip($filterDay)))
                                            <span>{{ __('All Time') }}</span>
                                        @endif
                                    </div>
                                    <span class="mt-2 hidden lg:block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7" viewBox="0 0 13 7" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89383e-08 1.21895L1.37054 1.63436e-08L6.5 4.5621L11.6295 1.3868e-07L13 1.21895L6.5 7L6.89383e-08 1.21895Z"
                                                fill="#898989" />
                                        </svg>
                                    </span>
                                    <span class=" mt-2 lg:hidden block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="4" viewBox="0 0 8 4" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93933e-08 0.696543L0.843412 1.00576e-08L4 2.60691L7.15659 8.53415e-08L8 0.696543L4 4L3.93933e-08 0.696543Z" fill="#898989" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full z-10">
                            </div>
                            <div x-show="dropdownOpen" class="absolute lg:w-168p w-24 border-t-0 border-gray-2 border bg-white z-20">
                                @foreach ($filterDay as $key => $value)
                                    <a href="{{ request()->fullUrlWithQuery(['filter_day' => $key]) }}" class="block whitespace-nowrap pt-3.5 lg:w-168p w-24 lg:text-sm text-xss roboto-medium text-gray-10 font-medium border-t-0 capitalize lg:h-47p hover:bg-gray-11 hover:text-gray-12">
                                        @if (request('filter_day') == $key)
                                            <span class="text-green-1 ml-1">✓</span>
                                            <span class="inline-block ml-1.5 lg:ml-3 text-green-1">{{ $value }}</span>
                                        @elseif(request('filter_day') == null && $key === 'all_time')
                                            <span class="text-green-1 ml-1.5 lg:ml-1">✓</span>
                                            <span class="inline-block lg:ml-1 pb-2 text-green-1">{{ __('All Time') }}</span>
                                        @else
                                            <span class="inline-block ml-1.5 lg:ml-2">{{ $value }}</span>
                                        @endif
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div x-data="{ dropdownOpen: false }">
                            <div class="flex items-center ml-3">
                                <button @click="dropdownOpen = !dropdownOpen" class="inline-flex justify-between lg:w-168p w-24 rounded-sm border border-gray-2 px-2 lg:py-2.5 py-1 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none dark:bg-gray-2">
                                    <div class="roboto-medium font-medium text-gray-10 lg:text-base text-xss whitespace-nowrap dark:text-gray-2"> <span>{{ __('All') }}</span>
                                    </div>
                                    <span class="mt-2 hidden lg:block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7" viewBox="0 0 13 7" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89383e-08 1.21895L1.37054 1.63436e-08L6.5 4.5621L11.6295 1.3868e-07L13 1.21895L6.5 7L6.89383e-08 1.21895Z" fill="#898989" />
                                        </svg>
                                    </span>
                                    <span class=" mt-2 lg:hidden block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="4" viewBox="0 0 8 4" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93933e-08 0.696543L0.843412 1.00576e-08L4 2.60691L7.15659 8.53415e-08L8 0.696543L4 4L3.93933e-08 0.696543Z" fill="#898989" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full z-10">
                            </div>
                            <div x-show="dropdownOpen" class="absolute lg:w-168p w-24 border-t-0 border-gray-2 border bg-white z-20 ml-3">
                                <a href="javascript:void(0)" class=" block whitespace-nowrap py-2.5 lg:w-168p w-24 lg:text-sm text-xss roboto-medium text-gray-10 font-medium border-t-0 capitalize lg:h-47p hover:bg-gray-11 hover:text-gray-12">
                                    <span class="ml-2">{{ __('All') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:mt-30p mt-15p lg:mb-30p mb-6">
            <div class=" cursor-pointer transition delay-150 bg-white hover:bg-gray-11 border border-gray-2 rounded lg:px-30p px-3 lg:flex items-center justify-between">
                <div class="flex ">
                    <div class="rounded-full lg:block hidden bg-gray-15 p-2 h-10 w-10 my-30p ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M6.50248 6.97519C6.78492 4.15083 9.16156 2 12 2C14.8384 2 17.2151 4.15083 17.4975 6.97519L17.7841 9.84133C17.8016 10.0156 17.8103 10.1028 17.8207 10.1885C17.9649 11.3717 18.3717 12.5077 19.0113 13.5135C19.0576 13.5865 19.1062 13.6593 19.2034 13.8051L20.0645 15.0968C20.8508 16.2763 21.244 16.866 21.0715 17.3412C21.0388 17.4311 20.9935 17.5158 20.9368 17.5928C20.6371 18 19.9283 18 18.5108 18H5.48923C4.07168 18 3.36291 18 3.06318 17.5928C3.00651 17.5158 2.96117 17.4311 2.92854 17.3412C2.75601 16.866 3.14916 16.2763 3.93548 15.0968L4.79661 13.8051C4.89378 13.6593 4.94236 13.5865 4.98873 13.5135C5.62832 12.5077 6.03508 11.3717 6.17927 10.1885C6.18972 10.1028 6.19844 10.0156 6.21587 9.84133L6.50248 6.97519Z" fill="#2C2C2C" />
                            <path d="M10.0681 20.6294C10.1821 20.7357 10.4332 20.8297 10.7825 20.8967C11.1318 20.9637 11.5597 21 12 21C12.4403 21 12.8682 20.9637 13.2175 20.8967C13.5668 20.8297 13.8179 20.7357 13.9319 20.6294" stroke="#2C2C2C" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="rounded-full lg:hidden block bg-gray-15 p-2 h-7 w-7 my-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 24 24" fill="none">
                            <path d="M6.50248 6.97519C6.78492 4.15083 9.16156 2 12 2C14.8384 2 17.2151 4.15083 17.4975 6.97519L17.7841 9.84133C17.8016 10.0156 17.8103 10.1028 17.8207 10.1885C17.9649 11.3717 18.3717 12.5077 19.0113 13.5135C19.0576 13.5865 19.1062 13.6593 19.2034 13.8051L20.0645 15.0968C20.8508 16.2763 21.244 16.866 21.0715 17.3412C21.0388 17.4311 20.9935 17.5158 20.9368 17.5928C20.6371 18 19.9283 18 18.5108 18H5.48923C4.07168 18 3.36291 18 3.06318 17.5928C3.00651 17.5158 2.96117 17.4311 2.92854 17.3412C2.75601 16.866 3.14916 16.2763 3.93548 15.0968L4.79661 13.8051C4.89378 13.6593 4.94236 13.5865 4.98873 13.5135C5.62832 12.5077 6.03508 11.3717 6.17927 10.1885C6.18972 10.1028 6.19844 10.0156 6.21587 9.84133L6.50248 6.97519Z" fill="#2C2C2C" />
                            <path d="M10.0681 20.6294C10.1821 20.7357 10.4332 20.8297 10.7825 20.8967C11.1318 20.9637 11.5597 21 12 21C12.4403 21 12.8682 20.9637 13.2175 20.8967C13.5668 20.8297 13.8179 20.7357 13.9319 20.6294" stroke="#2C2C2C" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div>
                    </div>
                    <p class="roboto-medium font-medium lg:text-base text-11 lg:py-10 py-4 lg:ml-5 ml-2.5 text-gray-10 hover:text-gray-12 "> {{ __("GREAT NEWS! We are really excited to announce that our app version of multi-vendor will be launched on 1 Feb, 2022. Stay tuned.") }}</p>
                </div>
                <p class="roboto-medium font-medium lg:text-sm text-xss text-gray-10 -mt-3 lg:mt-0 lg:text-right text-left ml-38p lg:mb-0 mb-3.5"> {{ __("2 hours ago") }}</p>
            </div>
            <div class=" lg:mt-15p mt-2 cursor-pointer transition delay-150 text-gray-10 hover:text-gray-12 bg-white hover:bg-gray-11 border border-gray-2 rounded lg:px-30p px-3 lg:flex items-center justify-between ">
                <div class="flex">
                    <img class="lg:h-10 h-7 lg:w-10 w-7 lg:my-30p my-4" src="{{ asset('public/frontend/assets/img/notification/Group 601.png') }}" alt="{{ __('Image') }}" />
                    <p class="roboto-medium font-medium lg:text-base text-11 lg:py-10 py-4 lg:ml-5 ml-2.5 text-gray-10 hover:text-gray-12 "> {{ __("NEW UPDATE! Bookie’s Cookie House has opened their shop here and offering 50% discount for first 100 customers. What are you waiting for? Click here to visit.") }}</p>
                </div>
                <p class="roboto-medium font-medium lg:text-sm text-xss -mt-3 lg:mt-0 text-gray-10 lg:text-right text-left ml-38p lg:mb-0 mb-3.5"> {{ __("2 hours ago") }}</p>
            </div>
            <div class="mt-15p cursor-pointer transition delay-150 text-gray-10 hover:text-gray-12 bg-white hover:bg-gray-11 border border-gray-2 rounded lg:px-30p px-3 lg:flex items-center justify-between">
                <div class="flex">
                    <img class="lg:h-10 h-7 lg:w-10 w-7 lg:my-30p my-4" src="{{ asset('public/frontend/assets/img/notification/Group 606.png') }}" alt="{{ __('Image') }}" />
                    <p class="roboto-medium font-medium lg:text-base text-11 lg:py-10 py-4 lg:ml-5 ml-2.5 text-gray-10 hover:text-gray-12 "> {{ __("Gamik Wireless Gaming Headphone is now available in stock. Hurry up now!") }}</p>
                </div>
                <p class="roboto-medium font-medium text-gray-10 lg:text-sm text-xss -mt-3 lg:mt-0 lg:text-right text-left ml-38p lg:mb-0 mb-3.5"> 3:47 pm<br> 17 Feb, 2022
                </p>
            </div>
            <div class="mt-15p cursor-pointer transition delay-150 text-gray-10 hover:text-gray-12 bg-white hover:bg-gray-11 border border-gray-2 rounded lg:px-30p px-3 lg:flex items-center justify-between">
                <div class="flex">
                    <img class="lg:h-10 h-7 lg:w-10 w-7 lg:my-30p my-4" src="{{ asset('public/frontend/assets/img/notification/unsplash_9xnnEpX6HAA.png') }}" alt="{{ __('Image') }}" />
                    <p class="roboto-medium font-medium lg:text-base text-11 lg:py-10 py-4 lg:ml-5 ml-2.5 text-gray-10 hover:text-gray-12">{{ __("Kyle Harass Furnitures has replied to your message. Give a response.") }}</p>
                </div>
                <p class="roboto-medium font-medium text-gray-10 lg:text-sm text-xss -mt-3 lg:mt-0 lg:text-right text-left ml-38p lg:mb-0 mb-3.5 "> 17 Feb, 2022 8:01 am</p>
            </div>
            <div class="mt-15p cursor-pointer transition delay-150 text-gray-10 hover:text-gray-12 bg-white hover:bg-gray-11 border border-gray-2 rounded lg:px-30p px-3 lg:flex items-center justify-between">
                <div class="flex">
                    <div class="rounded-full hidden lg:block bg-pinks-2 p-3 h-10 w-10 my-30p">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none">
                            <path d="M2.20266 8.38364L8.0021 13.8316C8.20187 14.0193 8.30175 14.1131 8.41952 14.1362C8.47256 14.1466 8.52711 14.1466 8.58015 14.1362C8.69792 14.1131 8.79781 14.0193 8.99758 13.8316L14.797 8.38364C16.4287 6.85082 16.6269 4.32839 15.2545 2.55958L14.9965 2.22699C13.3547 0.110979 10.0594 0.465849 8.90578 2.88288C8.74283 3.2243 8.25684 3.2243 8.09389 2.88288C6.94031 0.465849 3.64492 0.110982 2.00319 2.22699L1.74515 2.55958C0.372794 4.32839 0.570944 6.85082 2.20266 8.38364Z" fill="#C8191C" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.3376 2.73855C13.0764 1.11304 10.5449 1.38565 9.65874 3.2424C9.19362 4.21695 7.80639 4.21696 7.34126 3.2424C6.45508 1.38565 3.92357 1.11304 2.6624 2.73855L2.40435 3.07114C1.29574 4.50002 1.45581 6.53768 2.77394 7.77592L8.5 13.1549L14.2261 7.77592C15.5442 6.53768 15.7043 4.50002 14.5956 3.07114L14.3376 2.73855ZM8.5 1.9195C10.149 -0.500689 13.7792 -0.702625 15.6557 1.7159L15.9137 2.04849C17.5498 4.15724 17.3136 7.16443 15.3683 8.99184L9.56886 14.4398C9.56338 14.4449 9.55783 14.4502 9.55219 14.4555C9.46748 14.5351 9.36536 14.6311 9.26727 14.7067C9.15148 14.7959 8.97762 14.9085 8.74095 14.955L8.58032 14.1364L8.74095 14.955C8.58183 14.9862 8.41817 14.9862 8.25906 14.955L8.41969 14.1364L8.25905 14.955C8.02238 14.9085 7.84852 14.7959 7.73273 14.7067C7.63467 14.6312 7.53257 14.5352 7.44787 14.4555C7.44222 14.4502 7.43664 14.445 7.43115 14.4398L1.63171 8.99184C-0.313593 7.16443 -0.549823 4.15724 1.08628 2.0485L1.34432 1.7159C3.22076 -0.702621 6.85097 -0.50069 8.5 1.9195Z" fill="#C8191C" />
                        </svg>
                    </div>
                    <div class="rounded-full lg:hidden block my-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                            <circle cx="14" cy="14" r="14" fill="#F9E8E8"/>
                            <path d="M9.94196 14.9693L14.0016 18.7829C14.1414 18.9143 14.2113 18.9799 14.2938 18.9961C14.3309 19.0034 14.3691 19.0034 14.4062 18.9961C14.4886 18.9799 14.5586 18.9143 14.6984 18.7829L18.758 14.9693C19.9002 13.8964 20.0389 12.1307 19.0783 10.8925L18.8976 10.6597C17.7484 9.17847 15.4417 9.42688 14.6341 11.1188C14.5201 11.3578 14.1799 11.3578 14.0658 11.1188C13.2583 9.42688 10.9515 9.17847 9.80233 10.6597L9.6217 10.8925C8.66105 12.1307 8.79976 13.8964 9.94196 14.9693Z" fill="#C8191C"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.4362 11.0176C17.5534 9.87971 15.7813 10.0705 15.161 11.3703C14.8354 12.0525 13.8644 12.0525 13.5388 11.3703C12.9185 10.0705 11.1464 9.87971 10.2636 11.0176L10.083 11.2504C9.30692 12.2506 9.41897 13.677 10.3417 14.5437L14.3499 18.309L18.3581 14.5437C19.2808 13.677 19.3929 12.2506 18.6169 11.2504L18.4362 11.0176ZM14.3499 10.4442C15.5042 8.7501 18.0454 8.60875 19.3589 10.3017L19.5395 10.5345C20.6848 12.0107 20.5194 14.1157 19.1577 15.3949L15.0981 19.2084C15.0943 19.212 15.0904 19.2157 15.0864 19.2194C15.0271 19.2752 14.9557 19.3424 14.887 19.3953C14.8059 19.4577 14.6842 19.5365 14.5186 19.5691L14.4061 18.9961L14.5186 19.5691C14.4072 19.5909 14.2926 19.5909 14.1812 19.5691L14.2937 18.9961L14.1812 19.5691C14.0156 19.5365 13.8939 19.4577 13.8128 19.3953C13.7442 19.3424 13.6727 19.2752 13.6134 19.2194C13.6095 19.2157 13.6056 19.2121 13.6017 19.2084L9.5421 15.3949C8.18039 14.1157 8.01503 12.0107 9.1603 10.5345L9.34093 10.3017C10.6544 8.60875 13.1956 8.7501 14.3499 10.4442Z" fill="#C8191C"/>
                            </svg>
                    </div>
                    <p class="roboto-medium font-medium lg:text-base text-11 lg:py-10 py-4 lg:ml-5 ml-2.5 text-gray-10 hover:text-gray-12">{{ __("Zen V Polo T-Shirt has been added to your wishlist.") }}</p>
                </div>
                <p class="roboto-medium font-medium text-gray-10 lg:text-sm text-xss -mt-3 lg:mt-0 lg:text-right text-left ml-38p lg:mb-0 mb-3.5 "> 17 Feb, 2022 3:47 pm</p>
            </div>
            <div class=" mt-15p cursor-pointer transition delay-150 text-gray-10 hover:text-gray-12 bg-white hover:bg-gray-11 border border-gray-2 rounded lg:px-30p px-3 lg:flex items-center justify-between">
                <div class="flex">
                    <div class="rounded-full hidden lg:block bg-green-2 py-2.5 px-3 h-10 w-10 my-30p">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.55566 4.44444C3.55566 1.98985 5.54551 0 8.00011 0C10.4547 0 12.4446 1.98985 12.4446 4.44444V5.33333C12.4446 5.82425 12.0466 6.22222 11.5557 6.22222C11.0647 6.22222 10.6668 5.82425 10.6668 5.33333V4.44444C10.6668 2.97169 9.47287 1.77778 8.00011 1.77778C6.52735 1.77778 5.33344 2.97169 5.33344 4.44444V5.33333C5.33344 5.82425 4.93547 6.22222 4.44455 6.22222C3.95363 6.22222 3.55566 5.82425 3.55566 5.33333V4.44444Z" fill="#009651" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.781049 5.22538C0 6.00643 0 7.26351 0 9.77767V10.6666C0 14.0188 0 15.6949 1.0414 16.7363C2.0828 17.7777 3.7589 17.7777 7.11111 17.7777H8.88889C12.2411 17.7777 13.9172 17.7777 14.9586 16.7363C16 15.6949 16 14.0188 16 10.6666V9.77767C16 7.26351 16 6.00643 15.219 5.22538C14.4379 4.44434 13.1808 4.44434 10.6667 4.44434H5.33333C2.81918 4.44434 1.5621 4.44434 0.781049 5.22538ZM8 11.5554C8.49092 11.5554 8.88889 11.1575 8.88889 10.6666C8.88889 10.1756 8.49092 9.77767 8 9.77767C7.50908 9.77767 7.11111 10.1756 7.11111 10.6666C7.11111 11.1575 7.50908 11.5554 8 11.5554ZM10.6667 10.6666C10.6667 11.8276 9.92461 12.8154 8.88889 13.1815V15.111H7.11111V13.1815C6.07538 12.8154 5.33333 11.8276 5.33333 10.6666C5.33333 9.1938 6.52724 7.99989 8 7.99989C9.47276 7.99989 10.6667 9.1938 10.6667 10.6666Z" fill="#009651" />
                        </svg>
                    </div>
                    <div class="rounded-full lg:hidden block my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <circle cx="14" cy="14" r="14" fill="#EBF9F1"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8887 10.8113C10.8887 9.09309 12.2816 7.7002 13.9998 7.7002C15.718 7.7002 17.1109 9.09309 17.1109 10.8113V11.4335C17.1109 11.7772 16.8323 12.0558 16.4887 12.0558C16.145 12.0558 15.8664 11.7772 15.8664 11.4335V10.8113C15.8664 9.78038 15.0307 8.94464 13.9998 8.94464C12.9689 8.94464 12.1331 9.78038 12.1331 10.8113V11.4335C12.1331 11.7772 11.8545 12.0558 11.5109 12.0558C11.1673 12.0558 10.8887 11.7772 10.8887 11.4335V10.8113Z" fill="#009651"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.94664 11.3583C8.3999 11.905 8.3999 12.7849 8.3999 14.5449V15.1671C8.3999 17.5136 8.3999 18.6869 9.12888 19.4159C9.85786 20.1449 11.0311 20.1449 13.3777 20.1449H14.6221C16.9687 20.1449 18.1419 20.1449 18.8709 19.4159C19.5999 18.6869 19.5999 17.5136 19.5999 15.1671V14.5449C19.5999 12.7849 19.5999 11.905 19.0532 11.3583C18.5064 10.8115 17.6265 10.8115 15.8666 10.8115H12.1332C10.3733 10.8115 9.49337 10.8115 8.94664 11.3583ZM13.9999 15.7893C14.3435 15.7893 14.6221 15.5107 14.6221 15.1671C14.6221 14.8234 14.3435 14.5449 13.9999 14.5449C13.6563 14.5449 13.3777 14.8234 13.3777 15.1671C13.3777 15.5107 13.6563 15.7893 13.9999 15.7893ZM15.8666 15.1671C15.8666 15.9798 15.3471 16.6713 14.6221 16.9275V18.2782H13.3777V16.9275C12.6527 16.6713 12.1332 15.9798 12.1332 15.1671C12.1332 14.1361 12.969 13.3004 13.9999 13.3004C15.0308 13.3004 15.8666 14.1361 15.8666 15.1671Z" fill="#009651"/>
                        </svg>
                    </div>
                    <p class="roboto-medium font-medium lg:text-base text-11 lg:py-10 py-4 lg:ml-5 ml-2.5 text-gray-10 hover:text-gray-12">{{ __("Your password has been successfully changed.") }}</p>
                </div>
                <p class="roboto-medium font-medium text-gray-10 lg:text-sm text-xss -mt-3 lg:mt-0 lg:text-right text-left ml-38p lg:mb-0 mb-3.5 "> 2 Feb, 2022 5:40 pm</p>
            </div>
        </div>
        <div class="flex lg:justify-between justify-center">
            <div class="lg:block hidden">
                <a class="roboto-medium text-left font-medium text-base mt-30p text-gray-10">{{ __("Showing") }}
                    <span class="text-gray-12">6</span> out of <span class="text-gray-12">38</span></a>
            </div>
            <a class="flex cursor-pointer lg:justify-between justify-center">
                <span class="dm-sans font-medium lg:text-base text-xs text-gray-12">{{ __("See More") }}</span>
                <svg class="mt-7p hidden lg:block ml-2.5" xmlns="http://www.w3.org/2000/svg" width="13" height="7" viewBox="0 0 13 7"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89383e-08 1.21895L1.37054 1.63436e-08L6.5 4.5621L11.6295 1.3868e-07L13 1.21895L6.5 7L6.89383e-08 1.21895Z" fill="#2C2C2C" />
                </svg>
                <svg class="mt-7p lg:hidden block ml-2.5" xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 13 7"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89383e-08 1.21895L1.37054 1.63436e-08L6.5 4.5621L11.6295 1.3868e-07L13 1.21895L6.5 7L6.89383e-08 1.21895Z" fill="#2C2C2C" />
                </svg>
            </a>
        </div>
    </div>
@endsection
@section('js')
 <script src="{{ asset('/public/dist/js/custom/validation.min.js') }}"></script>
@endsection
