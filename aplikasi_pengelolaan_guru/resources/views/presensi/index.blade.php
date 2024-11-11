<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center mx-auto">
            {{ __('Presensi Guru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('presensi.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Tambah Presensi
                    </a>
                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>GURU</th>
                                <th>TANGGAL</th>
                                <th>STATUS</th>
                                <th>KETERANGAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $num = 1;
                            @endphp
                            @foreach($presensi as $data)
                            <tr>
                                <td>{{ $num++ }} </td>
                                <td>{{ $data->guru->nama }}</td>
                                <td>{{ $data->tgl_absen }}</td>
                                <td>{{ $data->status_kehadiran }}</td>
                                <td>{{ $data->keterangan }}</td>
                                <td>
                                    
                                    <!-- Button Delete -->
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded"
                                            onclick="openDeleteModal('{{ route('presensi.destroy', $data->id) }}')">
                                        HAPUS
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Delete -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-lg font-semibold">Hapus Data Presensi</h2>
            <p class="my-4">Apakah Anda yakin ingin menghapus data ini?</p>
            <form id="deleteForm" method="POST" action="">
                @csrf
                @method('DELETE')
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-3 rounded mr-2" onclick="closeDeleteModal()">
                        Batal
                    </button>
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">
                        Hapus
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script untuk mengelola Modal Delete -->
    <script>
        function openDeleteModal(actionUrl) {
            // Set action form untuk delete
            document.getElementById('deleteForm').action = actionUrl;
            // Tampilkan modal
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeDeleteModal() {
            // Sembunyikan modal
            document.getElementById('deleteModal').classList.add('hidden');
        }
    </script>
</x-app-layout>
