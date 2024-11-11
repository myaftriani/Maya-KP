<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center mx-auto">
            {{ __('Dashboard') }}
        </h2>
</x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 shadow-2xl rounded-lg overflow-hidden mb-10">
                <div class="p-8 text-white">
                    <h1 class="text-3xl font-extrabold mb-3">Selamat Datang di Aplikasi Pengelolaan Data Guru SD Negeri Nyalindung 2!</h1>
                    
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-indigo-600 rounded-lg opacity-75 blur-lg group-hover:blur-none transition duration-500"></div>
                    <a href="{{ route('guru.index') }}" class="relative block w-full h-56 bg-white dark:bg-gray-800 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="flex flex-col justify-center items-center h-full p-4">
                            <div class="mb-4 text-blue-500">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path d="M12 12c3.86 0 7-3.14 7-7s-3.14-7-7-7-7 3.14-7 7 3.14 7 7 7z"></path>
                                    <path d="M4 22v-1c0-2.5 5-4 8-4s8 1.5 8 4v1"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-blue-600 dark:text-blue-400">Data Guru</h3>
                            <p class="text-gray-700 dark:text-gray-300">Kelola data guru sekolah.</p>
                        </div>
                    </a>
                </div>

               
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-teal-500 rounded-lg opacity-75 blur-lg group-hover:blur-none transition duration-500"></div>
                    <a href="{{ route('jadwal.index') }}" class="relative block w-full h-56 bg-white dark:bg-gray-800 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="flex flex-col justify-center items-center h-full p-4">
                            <div class="mb-4 text-green-500">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path d="M8 7h8M8 12h8m-4 5h4m-5-6h2v5H9a3 3 0 1 1 0-6zm8-4v14"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-green-600 dark:text-green-400">Jadwal Mengajar</h3>
                            <p class="text-gray-700 dark:text-gray-300">Atur jadwal mengajar guru.</p>
                        </div>
                    </a>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-400 to-pink-500 rounded-lg opacity-75 blur-lg group-hover:blur-none transition duration-500"></div>
                    <a href="{{ route('presensi.index') }}" class="relative block w-full h-56 bg-white dark:bg-gray-800 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="flex flex-col justify-center items-center h-full p-4">
                            <div class="mb-4 text-red-500">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-red-600 dark:text-red-400">Presensi Guru</h3>
                            <p class="text-gray-700 dark:text-gray-300">Pantau presensi harian guru.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
