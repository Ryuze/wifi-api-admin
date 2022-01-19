<div class="grid gap-4">
    <div>
        <input type="text" name="search" id="search" class="mt-4 w-48 text-gray-800 placeholder:text-gray-400 rounded"
            placeholder="Cari disini" wire:model="search">
    </div>
    
    <div class="mt-2">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama WIFI</th>
                    <th>Lokasi</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wifis as $wifi)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $wifi->name }}</td>
                        <td class="text-center">{{ $wifi->location }}</td>
                        <td class="text-center">{{ $wifi->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                        <td class="text-center">
                            <div class="flex justify-center">
                                <a href="{{ route('wifi.edit', $wifi->id) }}" class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-700 transition ease-in-out duration-200 rounded shadow">Ubah</a>
                                <form action="{{ route('wifi.destroy', $wifi->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-4 py-2 bg-red-600 text-white hover:bg-red-700 transition ease-in-out duration-200 rounded shadow">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
