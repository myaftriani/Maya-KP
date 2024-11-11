<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Jadwal Mengajar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Presensi Guru') }}
            </h2>
            <br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('presensi.update', $presensi->id) }}"> <br>
                    @csrf
                    @method('PATCH')

                        <!-- <x-primary-button type="submit" name="simpan" value="true">
                            Edit Data
                        </button> -->

                        <div class="max-w-xl">
                            <x-input-label for="guru" value="Guru" />
                            <!-- Check if there's an old value, otherwise use the value from the $guru object -->
                            <x-text-input id="guru" type="text" name="guru" class="mt-1 block w-full" value="{{ old('guru', $guru->nama) }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('guru')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="tgl_absen" value="Tanggal Absen" />
                            <x-text-input id="tgl_absen" type="text" name="tgl_absen" class="mt-1 block w-full" value="{{ old('tgl_absen', $guru->nip) }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('tgl_absen')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="status_kehadiran" value="Status" />
                            <x-text-input id="status_kehadiran" type="text" name="status_kehadiran" class="mt-1 block w-full" value="{{ old('status_kehadiran', $guru->mapel) }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('status_kehadiran')" />
                        </div>

                        <!-- <div class="max-w-xl">
                            <x-input-label for="jenis_kelamin" value="Jenis Kelamin" />
                            <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki" {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div> -->

                        <div class="max-w-xl">
                            <x-input-label for="keterangan" value="Keterangan" />
                            <x-text-input id="keterangan" type="text" name="keterangan" class="mt-1 block w-full" value="{{ old('keterangan', $guru->tgl_lahir) }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('keterangan')" />
                        </div>

                        <br>
                        <x-primary-button type="submit" name="simpan" value="true">
                            Simpan Data
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>