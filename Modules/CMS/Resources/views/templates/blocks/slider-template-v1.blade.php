@php
    $slides = \Modules\CMS\Service\Homepage::getSlider($component->slider);
@endphp
<section class="{{ $component->full == 1 ? '' : 'mx-4 xl:mx-32 2xl:mx-64 3xl:mx-92' }} md:my-12 my-10"
    style="margin-top:{{ $component->mt }};margin-bottom:{{ $component->mb }};">
    @if (isset($slides) && $slides->count())
        <div class="{{ $component->full == 1 ? 'custom-swiper-full' : 'custom-swiper' }} swiper mySwiper">
            <div class="swiper-wrapper">
                @php
                    $buttonDirection = ['left' => 'justify-start', 'right' => 'justify-end', 'center' => 'justify-center'];
                @endphp
                @foreach ($slides as $slide)
                    <div class="swiper-slide">
                        <div class="relative z-0 flex align-items-center">
                            <div class="costume-title w-full">
                                <div
                                    class="{{ $component->full == 1 ? 'mx-4 xl:mx-32 2xl:mx-64 3xl:mx-92' : 'px-11' }}">
                                    <div class="text-{{ $slide->title_direction }}">
                                        <div class="sliders-animation inline-block anim text-x-title dm-regular animated small-title"
                                            data-animation="{{ $slide->title_animation }}"
                                            style="animation-delay: {{ $slide->title_delay }}s; color: {{ $slide->title_font_color }}; font-size: {{ $slide->title_font_size . 'px' }}">
                                            {!! $slide->title_text !!}
                                        </div>
                                    </div>

                                    <div class="text-{{ $slide->sub_title_direction }}">
                                        <div class="sliders-animation inline-block anim text-y-title dm-bold animated bold-title"
                                            data-animation="{{ $slide->sub_title_animation }}"
                                            style="animation-delay: {{ $slide->sub_title_delay }}s; color: {{ $slide->sub_title_font_color }}; font-size: {{ $slide->sub_title_font_size . 'px' }}">
                                            {!! $slide->sub_title_text !!}
                                        </div>
                                    </div>

                                    <div class="text-{{ $slide->description_title_direction }}">
                                        <div class="sliders-animation inline-block anim text-z-title dm-regular mt-3 animated bottom-title"
                                            data-animation="{{ $slide->description_title_animation }}"
                                            style="animation-delay: {{ $slide->description_title_delay }}s; color: {{ $slide->description_title_font_color }}; font-size: {{ $slide->description_title_font_size . 'px' }}">
                                            {!! $slide->description_title_text !!}
                                        </div>
                                    </div>

                                    @if (!empty($slide->button_title))
                                        <div class="flex {{ $buttonDirection[strtolower($slide->button_position)] }}">
                                            <a style="animation-delay: {{ $slide->button_delay }}s;" href="{{ $slide->button_link }}"
                                                {{ $slide->is_open_in_new_window == 'Yes' ? 'target=_blank' : '' }}
                                                class="inline-block sliders-animation anim animated"
                                                data-animation="{{ $slide->button_animation }}">
                                                <p class="shop-btn dm-bold inline-block"
                                                    style="color: {{ $slide->button_font_color }}; background: {{ $slide->button_bg_color . 'dd' }}; --hover-bg-color:{{ $slide->button_bg_color }}; --hover-color:{{ $slide->button_font_color }}">
                                                    {!! $slide->button_title !!}
                                                    <svg class="shop-direction w-9p md:h-2 md:w-13p" viewBox="0 0 13 8"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.87915 0L7.70313 1.20177L9.60983 3.15022H1.63861C1.17935 3.15022 0.80704 3.53068 0.80704 4C0.80704 4.46932 1.17935 4.84978 1.63861 4.84978H9.60983L7.70313 6.79823L8.87915 8L12.7934 4L8.87915 0Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </p>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <img class="hero-slide-img {{ $component->rounded == 1 ? 'rounded-lg' : '' }} object-cover w-full"
                                style="height: {{$component->height . 'px'}}" src="{{ $slide->fileUrl() }}">
                        </div>
                    </div>
                @endforeach

                <div>
                    <a class="md:flex hidden">
                        <span class="swiper-button-prev prev items-center justify-center">
                            <svg width="9" height="11" viewBox="0 0 9 13" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.32668 0.337159L8.66402 1.65614L3.65882 6.59262L8.66402 11.5291L7.32667 12.8481L0.98413 6.59262L7.32668 0.337159Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                    </a>
                    <a class="md:flex hidden">
                        <span class="swiper-button-next next items-center justify-center">
                            <svg width="9" height="11" viewBox="0 0 9 13" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.3231 0.337159L0.985761 1.65614L5.99096 6.59262L0.985762 11.5291L2.32311 12.8481L8.66565 6.59262L2.3231 0.337159Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                @foreach ($slides as $slide)
                    <div class="swiper-pagination"></div>
                @endforeach
            </div>
        </div>
    @endif
</section>
