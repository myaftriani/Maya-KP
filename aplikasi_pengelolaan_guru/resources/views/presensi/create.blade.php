<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center mx-auto">
            {{ __('Tambah Presensi Guru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('presensi.store') }}" method="POST">
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
                            <x-input-label for="tgl_absen" value="Tanggal Absen" />
                            <x-text-input id="tgl_absen" type="date" name="tgl_absen" class="mt-1 block w-full" value="{{ old('tgl_absen') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('tgl_absen')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="status_kehadiran" value="Status Kehadiran" />
                            <select id="status_kehadiran" name="status_kehadiran" class="mt-1 block w-full" required>
                                <option value="" disabled {{ old('status_kehadiran') ? '' : 'selected' }}>Pilih Status</option>
                                <option value="Hadir" {{ old('status_kehadiran') == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                                <option value="Tidak Hadir" {{ old('status_kehadiran') == 'Tidak Hadir' ? 'selected' : '' }}>Tidak Hadir</option>
                                <option value="Izin" {{ old('status_kehadiran') == 'Izin' ? 'selected' : '' }}>Izin</option>
                                <option value="Sakit" {{ old('status_kehadiran') == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('status_kehadiran')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="keterangan" value="Keterangan" />
                            <x-text-input id="keterangan" type="text" name="keterangan" class="mt-1 block w-full" value="{{ old('keterangan') }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('keterangan')" />
                        </div>

                        <br>

                        <x-secondary-button tag="a" href="{{ route('presensi.index')}}">BATAL</x-secondary-button>

                        <x-primary-button name="save" value="true">SIMPAN</x-primary-button>
                        </br>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>