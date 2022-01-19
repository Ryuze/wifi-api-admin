@extends('layouts.dashboard')

@section('content')
    <div class="grid gap-4">
        <form action="{{ route('wifi.store') }}" method="post">
            @csrf

            @error('name')
                <p class="validation-invalid-label">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
            <div>
                <label for="name">Nama WIFI</label>
                <input type="text" name="name" id="name">
            </div>

            @error('location')
                <p class="validation-invalid-label">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
            <div>
                <label for="location">Lokasi</label>
                <select name="location" id="location">
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>

            @error('status')
                <p class="validation-invalid-label">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
            <div>
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="true">Aktif</option>
                    <option value="false">Tidak Aktif</option>
                </select>
            </div>

            <button type="submit" class="px-4 py-2 bg-green-600 shadow text-white hover:bg-green-700 transition ease-in-out duration-200 mt-2 rounded">Simpan</button>
        </form>
    </div>
@endsection
