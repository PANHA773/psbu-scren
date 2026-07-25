<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            [
                'name' => 'Ministry of Education, Youth and Sport (MoEYS)',
                'logo' => 'images/logo.png',
                'url' => 'https://moeys.gov.kh',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Royal Academy of Cambodia (RAC)',
                'logo' => 'images/logo.png',
                'url' => 'http://rac.gov.kh',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'UNESCO Cambodia',
                'logo' => 'images/logo.png',
                'url' => 'https://unesco.org',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'ASEAN University Network (AUN)',
                'logo' => 'images/logo.png',
                'url' => 'https://aunsec.org',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Cambodia Higher Education Association (CHEA)',
                'logo' => 'images/logo.png',
                'url' => '#',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'International Buddhist Studies Network',
                'logo' => 'images/logo.png',
                'url' => '#',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::updateOrCreate(['name' => $partner['name']], $partner);
        }
    }
}
