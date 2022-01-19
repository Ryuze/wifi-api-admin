@extends('layouts.dashboard')

@section('content')
    @if (session('status'))
        <div class="text-red-600">
            {{ session('status') }}
        </div>
    @endif

    <div>
        <div class="grid gap-4">
            <div class="mt-2">
                <a href="{{ route('wifi.create') }}"
                    class="px-4 py-2 bg-green-600 text-white hover:bg-green-700 transition ease-in-out duration-200 rounded shadow">Tambah
                    data</a>
            </div>
            <div>
                <livewire:wifi />
            </div>
        </div>
    </div>
@endsection
