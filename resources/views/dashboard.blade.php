<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                     <a href="{{ route('class.index')}}" class="btn btn btn-info" style="padding: 10px 20px;background-color: green; border-radius: 15px; color: red; text-decoration: none;">Class</a>
                     <a href="" class="btn btn btn-info" style="padding: 10px 20px;background-color: red; border-radius: 15px; color: green; text-decoration: none;">Student</a>
                </div>
                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
