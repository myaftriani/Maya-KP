<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center mx-auto">
            {{ __('Tambah Data Guru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
            <br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('guru.store') }}">

                    @csrf

                        <div class="max-w-xl">
                            <x-input-label for="nama" value="Nama" />
                            
                            <x-text-input id="nama" type="text" name="nama" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="nip" value="NIP" />
                            <x-text-input id="nip" type="text" name="nip" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nip')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="mapel" value="Mata Pelajaran" />
                            <x-text-input id="mapel" type="text" name="mapel" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('mapel')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="jenis_kelamin" value="Jenis Kelamin" />
                            
                            <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki" ></option>Laki-laki</option>
                                <option value="Perempuan" >Perempuan</option>
                            </select>
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="tgl_lahir" value="Tanggal Lahir" />
                            <x-text-input id="tgl_lahir" type="date" name="tgl_lahir" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('tgl_lahir')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="alamat" value="Alamat" />
                            <x-text-input id="alamat" type="text" name="alamat" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="no_telp" value="No Telepon" />
                            <x-text-input id="no_telp" type="text" name="no_telp" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('no_telp')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="email" value="Email" />
                            <x-text-input id="email" type="email" name="email" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
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