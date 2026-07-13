<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Announcement;
use App\Models\Slider;
use App\Models\Stat;
use App\Models\Skill;
use App\Models\Contact;
use App\Models\Leader;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Slider::create(['image' => 'images/slide1.jpg', 'order' => 1]);
        Slider::create(['image' => 'images/slide3.jpg', 'order' => 2]);
        Slider::create(['image' => 'images/slide2.jpg', 'order' => 3]);

        Stat::create([
            'label' => 'ដំណោះស្រាយអប់រំ',
            'number' => 900,
            'superscript' => '%',
            'description' => 'ថ្នាក់បរិញ្ញាបត្រ'
        ]);

        Stat::create([
            'label' => 'អ្នករៀននៅបរទេស',
            'number' => 50,
            'superscript' => '%',
            'description' => 'ថ្នាក់បរិញ្ញាបត្រជាន់ខ្ពស់'
        ]);

        Skill::create([
            'name' => 'Khmer Literature',
            'icon_svg' => '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/><path d="M12 2a10 10 0 100 20A10 10 0 0012 2zm-2 14V8l7 4-7 4z"/>'
        ]);
        Skill::create([
            'name' => 'Educational Science',
            'icon_svg' => '<path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>'
        ]);
        Skill::create([
            'name' => 'General Management',
            'icon_svg' => '<path d="M20 6h-2.18c.07-.44.18-.88.18-1.34C18 2.54 15.46 0 12.34 0c-1.7 0-3.21.8-4.22 2.05L7 3 5.88 2.05C4.87.8 3.36 0 1.66 0H1v2h.66c.9 0 1.72.39 2.28 1l1.5 1.67L4 6H2c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-8-4c1.54 0 2.84 1.14 2.97 2.62L13.2 6h-2.4l-1.77-1.38C9.16 3.14 10.46 2 12 2z"/>'
        ]);
        Skill::create([
            'name' => 'Philosophy & Religion',
            'icon_svg' => '<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>'
        ]);
        Skill::create([
            'name' => 'Law',
            'icon_svg' => '<path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/>'
        ]);
        Skill::create([
            'name' => 'English Literature',
            'icon_svg' => '<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>'
        ]);
        Skill::create([
            'name' => 'Information Technology',
            'icon_svg' => '<path d="M20 18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z"/>'
        ]);

        Contact::create([
            'type' => 'phone',
            'label' => '(855) 16 43 43 25',
            'link' => 'tel:+85516434325',
            'icon' => 'phone',
            'order' => 1
        ]);
        Contact::create([
            'type' => 'phone',
            'label' => '(855) 77 43 43 25',
            'link' => 'tel:+85577434325',
            'icon' => 'phone',
            'order' => 2
        ]);
        Contact::create([
            'type' => 'email',
            'label' => '(855) 86 402 402',
            'link' => 'mailto:info@psbu.edu.kh',
            'icon' => 'mail',
            'order' => 3
        ]);
        Contact::create([
            'type' => 'website',
            'label' => '(855) 70 211 422',
            'link' => '#',
            'icon' => 'globe',
            'order' => 4
        ]);

        $this->call(LeaderSeeder::class);

        $this->call(AnnouncementSeeder::class);
        $this->call(UserSeeder::class);
    }
}
