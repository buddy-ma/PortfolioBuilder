<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0" id="portfolio">
    <!-- ====== Portfolio Section Start -->
    <section x-data="{
        showCards: 'all',
        activeClasses: 'bg-indigo-600 text-white',
        inactiveClasses: 'text-body-color hover:bg-primary hover:text-gray'}" class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                        <span class="font-semibold text-lg text-primary mb-2 block">
                            Our Portfolio
                        </span>
                        <h2 class=" font-bold text-3xl sm:text-4xl md:text-[40px] text-dark mb-4">
                            My Recent Projects
                        </h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <ul class="flex flex-wrap justify-center mb-12 space-x-1">
                        <li class="mb-1">
                            <button @click="showCards = 'all' "
                                :class="showCards == 'all' ? activeClasses : inactiveClasses"
                                class=" inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">
                                All Projects
                            </button>
                        </li>
                        @isset($profile->projects_categories)
                            @foreach ($profile->projects_categories as $category)
                                <li class="mb-1">
                                    <button @click="showCards = '{{$category->title}}' "
                                        :class="showCards == '{{$category->title}}' ? activeClasses : inactiveClasses"
                                        class=" inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">
                                        {{$category->title}}
                                    </button>
                                </li>
                            @endforeach

                        @else
                            <p>Empty</p>
                        @endisset
                    </ul>
                </div>
            </div>
            @isset($profile->projects)
                <div class="flex flex-wrap -mx-4">
                    @foreach ($profile->projects as $project)
                        <div :class="showCards == 'all' || showCards == '{{ $project->projects_categories->title ?? '' }}' ? 'block' : 'hidden'"
                            class="w-full md:w-1/2 xl:w-1/3 px-4">
                            <div class="relative mb-12">
                                <div class="rounded-lg overflow-hidden">
                                    <img @if($template->image) 
                                            src="{{url('storage/livewire-tmp/projects')}}/{{$project->image}}"
                                        @else 
                                            src="{{asset('/img/default_projects.jpg')}}" 
                                        @endif alt="portfolio" class="w-full" />
                                </div>
                                <div
                                    class=" text-center bg-white relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-20">
                                    <span class="text-sm text-primary font-semibold block mb-2">
                                        {{ $project->projects_categories->title ?? "" }}
                                    </span>
                                    <h3 class="font-bold text-xl text-dark mb-4">
                                        {{ $project->title }}
                                    </h3>
                                    <a href="{{ $project->details ?? 'javascript:void(0)' }}" target="_blank"
                                        class=" text-body-color text-sm font-semibold py-3 px-7 inline-block border rounded-md hover:bg-primary hover:border-primary hover:text-white transition">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="flex flex-wrap -mx-4">
                    No Projects
                </div>
            @endisset
        </div>
    </section>
</div>