<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Role::create(['name' => 'guru','guard_name' => 'web',]);      
        $data = [
            [
                'nama' => 'Maya Fitriani',
                'nip' => '12345678',
                'mapel' => 'Bahasa Inggris',
                'jenis_kelamin' => 'Perempuan',
                'tgl_lahir' => '2002-05-30',
                'alamat' => 'Cianjur',
                'no_telp' => '081461625768',
                'email' => 'mayafitriani599@gmail.com',
            ],

            [
                'nama' => 'Lia Nurzakiyah S.Pd',
                'nip' => '197907032007012005',
                'mapel' => 'Kesenian',
                'jenis_kelamin' => 'Perempuan',
                'tgl_lahir' => '1979-07-03',
                'alamat' => 'Cianjur',
                'no_telp' => '081423456786',
                'email' => 'lianurzakiyah@gmail.com',
            ],

            [
                'nama' => 'Enden Sirojudin S.Pd',
                'nip' => '196404101984102001',
                'mapel' => 'Matematika',
                'jenis_kelamin' => 'Laki-laki',
                'tgl_lahir' => '1988-06-23',
                'alamat' => 'Cianjur',
                'no_telp' => '089167585432',
                'email' => 'enden@gmail.com',
            ],

            [
                'nama' => 'Erlin Ratnawati S.Pd SD',
                'nip' => '1033754658300003',
                'mapel' => 'B.Indonesia',
                'jenis_kelamin' => 'Perempuan',
                'tgl_lahir' => '1976-01-07',
                'alamat' => 'Cianjur',
                'no_telp' => '089754638273',
                'email' => 'erlin@gmail.com',
            ],

            [
                'nama' => 'Rini Nurhayati',
                'nip' => '0958765667300023',
                'mapel' => 'Pendidikan Agama Islam',
                'jenis_kelamin' => 'Perempuan',
                'tgl_lahir' => '1975-02-09',
                'alamat' => 'Cianjur',
                'no_telp' => '081461625467',
                'email' => 'rini@gmail.com',
            ],

            [
                'nama' => 'Rusmana Effendi S.Pd',
                'nip' => '095876566730234',
                'mapel' => 'Guru Olahraga',
                'jenis_kelamin' => 'Laki-laki',
                'tgl_lahir' => '1986-02-08',
                'alamat' => 'Cianjur',
                'no_telp' => '082341625467',
                'email' => 'rusmana@gmail.com',
            ],
       ];

       foreach ($data as $item) {
           $user = User::create([
               'name' => $item['nama'],
               'email' => $item['email'],
               'password' => Hash::make('Password123'),
           ]);

           DB::table('guru')->insert([
               [
                   'nama' => $item['nama'],
                   'nip' => $item['nip'],
                   'mapel' => $item['mapel'],
                   'jenis_kelamin' => $item['jenis_kelamin'],
                   'tgl_lahir' => $item['tgl_lahir'],
                   'alamat' => $item['alamat'],
                   'no_telp' => $item['no_telp'],
                   'email' => $item['email'],
               ],
           ]);

           $user->assignRole('guru');
       }
    }    
}
