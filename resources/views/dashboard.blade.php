<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container mx-auto mt-4">
        <div class="grid grid-cols-2 gap-2 justify-items-center">
            <div>
                <a href="{{ route('wifi.index') }}" class="px-4 py-2 bg-green-600 text-white shadow hover:bg-green-700 transition ease-in-out duration-200">Lihat data WIFI</a>
            </div>
            <div>
                <a href="{{ route('location.index') }}" class="px-4 py-2 bg-green-600 text-white shadow hover:bg-green-700 transition ease-in-out duration-200">Lihat data lokasi</a>
            </div>
        </div>
    </div>
</x-app-layout>
