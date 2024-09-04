<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact = [
            [
                'name' => 'Test1 User',
                'company' => 'Test1 Company',
                'phone' => '09123456789',
                'email' => 'test1@samepl.com',
            ],
            [
                'name' => 'Test2 User',
                'company' => 'Test2 Company',
                'phone' => '09123456789',
                'email' => 'test2@samepl.com',
            ],
            [
                'name' => 'Test3 User',
                'company' => 'Test3 Company',
                'phone' => '09123456789',
                'email' => 'test3@samepl.com',
            ],
            [
                'name' => 'Test4 User',
                'company' => 'Test4 Company',
                'phone' => '09123456789',
                'email' => 'test4@samepl.com',
            ],
            [
                'name' => 'Test5 User',
                'company' => 'Test5 Company',
                'phone' => '09123456789',
                'email' => 'test5@samepl.com',
            ],
            [
                'name' => 'Test6 User',
                'company' => 'Test6 Company',
                'phone' => '09123456789',
                'email' => 'test6@samepl.com',
            ],
            [
                'name' => 'Test7 User',
                'company' => 'Test7 Company',
                'phone' => '09123456789',
                'email' => 'test7@samepl.com',
            ],
            [
                'name' => 'Test8 User',
                'company' => 'Test8 Company',
                'phone' => '09123456789',
                'email' => 'test8@samepl.com',
            ],
            [
                'name' => 'Test9 User',
                'company' => 'Test9 Company',
                'phone' => '09123456789',
                'email' => 'test9@samepl.com',
            ],
            [
                'name' => 'Test10 User',
                'company' => 'Test10 Company',
                'phone' => '09123456789',
                'email' => 'test10@samepl.com',
            ],
            [
                'name' => 'Test11 User',
                'company' => 'Test11 Company',
                'phone' => '09123456789',
                'email' => 'test11@samepl.com',
            ],
            [
                'name' => 'Test12 User',
                'company' => 'Test12 Company',
                'phone' => '09123456789',
                'email' => 'test12@samepl.com',
            ],
            [
                'name' => 'Test13 User',
                'company' => 'Test13 Company',
                'phone' => '09123456789',
                'email' => 'test13@samepl.com',
            ],
        ];

        foreach($contact as $contacts) {
            DB::table('contact')->insert($contact);
        }
    }
}
