<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            'About Us',
            'Shipping & Delivery Policy',
            'Cancellation & Refund Policy',
            'Disclaimer Policy',
            'Privacy Policy',
            'Terms & Conditions',
            'Charges'
        ];

        foreach ($pages as $title) {
            Page::create([
                'title' => $title,
                'content' => "<p>This is the content for the <strong>$title</strong> page.</p>",
                'status' => true,
            ]);
        }
    }
}
