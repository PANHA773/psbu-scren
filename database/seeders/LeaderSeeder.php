<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leader;

class LeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing leaders to avoid duplicates
        Leader::truncate();

        Leader::create([
            'name_kh' => 'ព្រះតេជគុណ ប្រាជ្ញ វិជ្ជា',
            'name_en' => 'Ven. Pranh Vichhea',
            'role_kh' => 'នាយក',
            'role_en' => 'Rector',
            'years_experience' => 10,
            'publications' => 24,
            'awards' => 8,
            'message_kh' => 'ការអប់រំគឺជាគ្រឹះនៃប្រាជ្ញា។ នៅពុទ្ធិកសាកលវិទ្យាល័យព្រះសីហមុនីរាជា យើងប្ដេជ្ញាចិត្តក្នុងការចិញ្ចឹមបីបាច់មនុស្សសម្រាប់ជំនាន់ក្រោយ ដែលមានចំណេះដឹង មានក្តីមេត្តា និងមានសីលធម៌ខ្ពស់ តាមរយៈការបញ្ចូលគ្នារវាងតម្លៃព្រះពុទ្ធសាសនា និងការអប់រំទំនើប។',
            'message_en' => 'Education is the foundation of wisdom. At Preah Sihamoniraja Buddhist University, we are dedicated to nurturing the next generation of compassionate, knowledgeable, and virtuous leaders through the harmonious integration of Buddhist values and modern academic excellence.',
            'email' => 'info@psbu.edu.kh',
            'phone' => '+85516434325',
            'facebook' => 'https://facebook.com/psbu.edu.kh',
            'tiktok' => 'https://tiktok.com/@psbu.edu.kh',
            'is_active' => true,
            'order' => 1,
        ]);
    }
}
