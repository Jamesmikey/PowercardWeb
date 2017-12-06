<?php

use Phinx\Seed\AbstractSeed;

class UsersTableSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'first_name' => 'Jonathan',
                'last_name' => 'Robert',
                'email' => 'jonathan@powercard.co.tz',
                'phone' => '0719000001',
                'position' => 'Managing Director',
                'password' => md5('1234'),
            ],
            [
                'first_name' => 'Frank Michael',
                'last_name' => 'Mshana',
                'email' => 'frank@powercard.co.tz',
                'phone' => '0719000002',
                'position' => 'Managing Director',
                'password' => md5('1234'),
            ],
            [
                'first_name' => 'James',
                'last_name' => 'Michael',
                'email' => 'james@powercard.co.tz',
                'phone' => '0719000003',
                'position' => 'ICT Director And Consultant',
                'password' => md5('1234'),
            ],
            [
                'first_name' => 'Kelvin',
                'last_name' => 'Bina',
                'email' => 'kelvin@powercard.co.tz',
                'phone' => '0719000004',
                'position' => 'Financial Management Advisor',
                'password' => md5('1234'),
            ],
            [
                'first_name' => 'Godfrey',
                'last_name' => 'Kimambo',
                'email' => 'godfrey@powercard.co.tz',
                'phone' => '0719000005',
                'position' => 'Body Member,Marketing And Logistic Manager',
                'password' => md5('1234'),
            ],
            [
                'first_name' => 'Vivian',
                'last_name' => 'Kimambo',
                'email' => 'vivian@powercard.co.tz',
                'phone' => '0719000006',
                'position' => 'Body Member',
                'password' => md5('1234'),
            ],
            [
                'first_name' => 'Samwel',
                'last_name' => 'Chacha',
                'email' => 'samwel@powercard.co.tz',
                'phone' => '0719000007',
                'position' => 'Body Member',
                'password' => md5('1234'),
            ],
            [
                'first_name' => 'Mwita Joseph',
                'last_name' => 'Bina',
                'email' => 'mwita@powercard.co.tz',
                'phone' => '0719000008',
                'position' => 'Body Member',
                'password' => md5('1234'),
            ],         
        ];

        $users = $this->table('users');
        $users->insert($data)
              ->save();        
    }
}
