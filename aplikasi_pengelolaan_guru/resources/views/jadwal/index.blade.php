<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center mx-auto">
            {{ __('Jadwal Mengajar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden sahdow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @hasrole('admin')
                    <a href="{{ route('jadwal.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Tambah Jadwal
                    </a>
                    @endhasrole

                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>GURU</th>
                                <th>HARI</th>
                                <th>WAKTU</th>
                                <th>KELAS</th>
                                <th>MATA PELAJARAN</th>

                                @hasrole('admin')
                                <th>AKSI</th>
                                @endhasrole

                            </tr>
                        </thead>
                        <tbody>
                            @php $num=1; @endphp

                            @foreach($jadwal_mengajar as $jadwal)
                            <tr>
                                <td>{{ $num++ }}</td>
                                <td>{{ $jadwal->guru->nama }}</td>
                                <td>{{ $jadwal->hari }}</td>
                                <td>{{ $jadwal->waktu }}</td>
                                <td>{{ $jadwal->kelas }}</td>
                                <td>{{ $jadwal->mata_pelajaran }}</td>
                                <td>

                                    @hasrole('admin')
                                    <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="btn btn-primary">EDIT</a>
                                    <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">HAPUS</button>
                                    </form>
                                </td>
                                @endhasrole

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
</x-app-layout>