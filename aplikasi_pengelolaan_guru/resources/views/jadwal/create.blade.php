<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center mx-auto">
            {{ __('Tambah Data Jadwal Mengajar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('jadwal.store') }}" method="POST">
                        @csrf

                        <div class="max-w-xl">

                            <x-input-label for="id_guru" value="Guru" />
                            <select id="id_guru" name="id_guru" class="mt-1 block w-full" required>
                                <option value="">Pilih Guru</option>
                                @foreach (App\Models\Guru::all() as $guru)
                                <option value="{{ $guru->id }}">{{$guru->nama}}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('id_guru')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="hari" value="Hari" />
                            <x-text-input id="hari" type="text" name="hari" class="mt-1 block w-full" value="{{ old('hari')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('hari')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="waktu" value="Waktu" />
                            <x-text-input id="waktu" type="time" name="waktu" class="mt-1 block w-full" value="{{ old('waktu')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('waktu')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="kelas" value="Kelas" />
                            <x-text-input id="kelas" type="text" name="kelas" class="mt-1 block w-full" value="{{ old('kelas')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('kelas')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="mata_pelajaran" value="Mata Pelajaran" />
                            <x-text-input id="mata_pelajaran" type="text" name="mata_pelajaran" class="mt-1 block w-full" value="{{ old('mata_pelajaran')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('mata_pelajaran')" />
                        </div>

                        <br>

                        <!-- Ubah route untuk Cancel -->
                        <x-secondary-button tag="a" href="{{ route('jadwal.index')}}">BATAL</x-secondary-button>

                        <x-primary-button name="save" value="true">SIMPAN</x-primary-button>
                        </br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>