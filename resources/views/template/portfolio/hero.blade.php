<!-- ====== Hero Section Start -->
<div class="relative pt-[120px] lg:pt-[150px] pb-[110px] bg-white" id="hero">
    <div class="container md:max-w-7xl">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-5/12 px-4" style="padding-top: 100px">
                @isset($profile->hero)
                    <div class="hero-content">
                        <h1 class=" text-dark font-bold text-6xl sm:text-[42px] lg:text-[40px] xl:text-[60px] leading-snug mb-3">
                            {{$profile->hero->title}}
                        </h1>
                        <p class="text-base mb-8 text-body-color max-w-[480px]">
                            {{$profile->hero->description}}
                        </p>
                        <ul class="flex flex-wrap items-center">
                            <li>
                                <a href="javascript:void(0)"
                                    class=" py-4 px-6 sm:px-10 lg:px-8 xl:px-10 inline-flex items-center justify-center text-center text-white text-base bg-primary hover:bg-opacity-90 font-normal rounded-lg">
                                    {{$profile->hero->button}}
                                </a>
                            </li>
                        </ul>
                    </div>
                @endisset

            </div>
            <div class="hidden lg:block lg:w-1/12 px-4"></div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="lg:text-right lg:ml-auto">
                    <div class="relative inline-block z-10 pt-11 lg:pt-0">
                        <img @if($profile->hero->image) src="{{url('storage/livewire-tmp')}}/{{$profile->hero->image}}" 
                            @else src="https://cdn.tailgrids.com/1.0/assets/images/hero/hero-image-01.png" 
                            @endif alt="hero"
                            class="max-w-full lg:ml-auto" />
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                            <svg width="93" height="93" viewBox="0 0 93 93" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                                <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                                <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                                <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                                <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                                <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                                <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                                <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                                <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                                <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                                <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                                <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                                <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                                <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                                <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                                <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                                <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                                <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                                <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                                <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                                <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                                <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                                <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                                <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                                <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
