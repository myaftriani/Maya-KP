@include('guru.delete')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center mx-auto">
            {{ __('Data Guru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @hasrole('admin')
                    <a href="{{ route('guru.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Tambah Guru
                    </a>
                    @endhasrole
                </div>

                <x-table>
                    <x-slot name="header">
                        <tr>
                            <th class="px-4 py-2">NO</th>
                            <th class="px-4 py-2">NAMA</th>
                            <th class="px-4 py-2">NIP</th>
                            <th class="px-4 py-2">MATA PELAJARAN</th>
                            <th class="px-4 py-2">ALAMAT</th>
                            <th class="px-4 py-2">NO TELEPON</th>

                            @hasrole('admin')
                            <th class="px-4 py-2">AKSI</th>
                            @endhasrole
                        </tr>
                    </x-slot>

                    @php $num=1; @endphp
                    @foreach($guru as $data)

                    <tr>
                        <td class="px-4 py-2">{{ $num++ }}</td>
                        <td class="px-4 py-2">{{ $data->nama }}</td>
                        <td class="px-4 py-2">{{ $data->nip }}</td>
                        <td class="px-4 py-2">{{ $data->mapel }}</td>
                        <td class="px-4 py-2">{{ $data->alamat }}</td>
                        <td class="px-4 py-2">{{ $data->no_telp }}</td>

                        @hasrole('admin')
                        <td class="flex px-4 py-2">
                            <!-- Tombol Edit -->
                            <x-primary-button tag="a" href="{{ route('guru.edit', $data->id) }}" class="mr-2 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">
                                EDIT
                            </x-primary-button>

                            <!-- Tombol Hapus dengan data-bs-toggle dan data-bs-target -->
                            <button type="button" class="btn btn-danger bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded" data-bs-toggle="modal" data-bs-target="#hapusModal_{{ $data->id }}">
                                HAPUS
                            </button>
                        </td>
                        @endhasrole
                    </tr>
                    @endforeach
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>
