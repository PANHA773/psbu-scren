<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    public function run(): void
    {
        Announcement::create([
            'title'        => 'Welcome to Preah Sihamoniraja Buddhist University',
            'content'      => '<p>We are pleased to welcome all new and returning students to the new academic year. Our university continues to uphold the highest standards of Buddhist education and academic excellence.</p><p>Please check the academic calendar for important dates and upcoming events.</p>',
            'image'        => null,
            'is_active'    => true,
            'order'        => 1,
            'published_at' => now(),
        ]);

        Announcement::create([
            'title'        => 'Registration for Academic Year 2026–2027 Now Open',
            'content'      => '<p>Student registration for the upcoming academic year is now officially open. All interested students are encouraged to visit the admissions office or apply online through our official website.</p><ul><li>Registration Period: July 1 – August 31, 2026</li><li>Required documents: National ID, high school diploma, and 2 passport photos</li></ul>',
            'image'        => null,
            'is_active'    => true,
            'order'        => 2,
            'published_at' => now()->addDays(1),
        ]);

        Announcement::create([
            'title'        => 'Annual Buddhist Studies Conference 2026',
            'content'      => '<p>PSBU is proud to host the Annual Buddhist Studies Conference on <strong>August 15, 2026</strong>. Scholars, monks, and students from across the country are invited to participate in panels and discussions on contemporary Buddhist philosophy and education.</p><p>Registration is free for all enrolled students.</p>',
            'image'        => null,
            'is_active'    => true,
            'order'        => 3,
            'published_at' => now()->addDays(2),
        ]);

        Announcement::create([
            'title'        => 'Scholarship Opportunities for Outstanding Students',
            'content'      => '<p>The university is offering a number of merit-based scholarships for outstanding students in the fields of Buddhist Studies, Khmer Literature, and Information Technology.</p><p>Apply before <strong>July 15, 2026</strong>. Contact the scholarship office for more information.</p>',
            'image'        => null,
            'is_active'    => true,
            'order'        => 4,
            'published_at' => now()->addDays(3),
        ]);

        Announcement::create([
            'title'        => 'Library Hours Extended for Exam Season',
            'content'      => '<p>Starting from July 1, 2026, the university library will extend its operating hours to support students during the examination period.</p><ul><li>Monday – Friday: 7:00 AM – 9:00 PM</li><li>Saturday: 8:00 AM – 6:00 PM</li><li>Sunday: Closed</li></ul>',
            'image'        => null,
            'is_active'    => false,
            'order'        => 5,
            'published_at' => now()->addDays(5),
        ]);
    }
}
