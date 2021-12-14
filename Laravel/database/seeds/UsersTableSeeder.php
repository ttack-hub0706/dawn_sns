<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'username' => '藤平拓海',
                'mail' => 'fujiji@icloud.com',
                'password' => Hash::make('tako'),
            ],
            [
                'username' => '堀越こしし',
                'mail' => 'kosisi@icloud.com',
                'password' => Hash::make('koshi'),
            ],
            [
                'username' => '佐々木翔平',
                'mail' => 'geiji@icloud.com',
                'password' => Hash::make('geiji'),
            ],
            [
                'username' => '西館にしし',
                'mail' => 'nisisi@icloud.com',
                'password' => Hash::make('nishi'),
            ],
            [
                'username' => '長谷川創',
                'mail' => 'sou@icloud.com',
                'password' => Hash::make('souu'),
            ],
        ]);
    }
}
