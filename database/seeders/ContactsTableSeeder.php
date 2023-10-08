<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'message' => 'Hello, this is a sample message from John Doe.',
                'subject' => 'Sample Subject 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'message' => 'Hi there, this is a sample message from Jane Smith.',
                'subject' => 'Sample Subject 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alicejohnson@example.com',
                'message' => 'Greetings! This is a sample message from Alice Johnson.',
                'subject' => 'Sample Subject 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert the data into the "contacts" table
        DB::table('contacts')->insert($contacts);
    }
}
