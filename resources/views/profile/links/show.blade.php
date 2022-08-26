<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mon profil') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="flex flex-wrap mt-10">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        Choose what you like
                    </span>
                    <h2 class=" font-bold text-3xl sm:text-4xl md:text-[40px] text-dark mb-4">
                        All the templates
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="py-10 max-w-7xl mx-auto">        
        <div class="grid grid-cols-4">
            @foreach ($templates as $template)
                <div class="p-6 text-6xl">
                    <div class="w- p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all transform duration-500">
                        <img class="w-64 object-cover rounded-t-md" 
                            @if($template->image) 
                                src="{{url('storage/livewire-tmp/')}}/{{$template->image}}"
                            @else 
                                src="{{asset('/img/default.png')}}" 
                            @endif alt="template image" />
                        <div class="mt-4">
                            
                            <h1 class="text-2xl font-bold text-gray-700">{{ $template->title }}</h1>
                            <div class="mt-4 mb-2 flex justify-between pl-4 pr-2">
                                @isset($template->profile) 
                                    <button type="button" class="mt-5 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Default
                                    </button>
                                @else
                                    <a href="{{ route('profile.templates.try', $template->id) }}" target="_blank">
                                        <button type="button" class="mt-5 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                            Try
                                        </button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <a href="{{ route('profile.templates.add') }}">
                <div class="p-6 text-6xl">
                    <img class="w-64 object-cover rounded-t-md" src="{{ asset('/img/add.png') }}" alt="" />
                </div>
            </a>
        </div>
    </div>
    {{-- <div class="py-12 max-w-7xl mx-auto">
        <ul
            class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">
                        Partager ce template : {{ $link->token }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div> --}}
</x-app-layout>
