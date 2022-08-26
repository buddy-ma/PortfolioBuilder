<section class="relative py-16 bg-primary-200">
    <div class="container mx-auto">
        <div class="flex flex-wrap items-center">
            <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-78">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-primary-500">
                    <img alt="..."
                        @if($profile->image) src="{{url('storage/livewire-tmp')}}/{{$profile->image}}" 
                        @else src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=700&amp;q=80"
                        @endif    
                        class="w-full align-middle rounded-t-lg">
                    <blockquote class="relative p-8 mb-4">
                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                            class="absolute left-0 w-full block h-95-px -top-94-px">
                            <polygon points="-30,95 583,95 583,65" class="text-primary-500 fill-current"></polygon>
                        </svg>
                        <h4 class="text-xl font-bold text-white">
                            {{$profile->title}}
                        </h4>
                        <p class="text-md font-light mt-2 text-white">
                            {{$profile->bio}}
                        </p>
                    </blockquote>
                </div>
            </div>
            @php
                $numbers = json_decode($profile->numbers);
            @endphp

            <div class="w-full md:w-6/12 px-4">
                <div class="flex flex-wrap">
                    @foreach ($numbers as $data)
                    @if ($loop->odd)
                        <div class="w-full md:w-6/12 px-4">
                    @endif
                        @php
                            $number = json_decode($data);
                        @endphp
                        <div class="relative flex flex-col mt-4">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                    {{-- <i class="fas fa-sitemap"></i> --}}
                                    <i class="fas fa-solid {{$number->icon ?? 'fa-bolt'}}"></i>
                                </div>
                                <h6 class="text-xl mb-1 font-semibold">{{$number->number}}</h6>
                                <p class="mb-4 text-blueGray-500">
                                    {{$number->text}}
                                </p>
                            </div>
                        </div>
                        @if ($loop->odd)
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>
