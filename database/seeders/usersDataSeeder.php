<?php

namespace Database\Seeders;

use App\Models\userData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usersDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersdata =  [
            [
                'fullname'=>'Gene Sigua',
                'Age'=>21,
                'Email'=>'Genecarlosigua@gmail.com'
            ],
        ];

        foreach($usersdata as $keys => $value){
            userData::create($value);
        }
    }
}
