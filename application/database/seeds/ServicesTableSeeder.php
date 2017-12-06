<?php

use Phinx\Seed\AbstractSeed;

class ServicesTableSeeder extends AbstractSeed
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
                'title' => 'Photo Entry',
                'description' => 'We directly provide the photo entry services and system to schools for self on hand operations for real time accomplishment and output accuracy and quality and cost saving.',
                'image' => 'http://via.placeholder.com/600x300',
                'published' => true,
            ],
            [
                'title' => 'ID Card Print and Design',
                'description' => 'High quality cards with medium and high security level upon clients requests for determining organizations/institution strength, ensuring cards long life span and makes cards unique with unique attractiveness Supply of all id cards printer consumables (ribbons, blank cards, contactless, rf-id and chip cards).',
                'image' => 'http://via.placeholder.com/600x300',
                'published' => true,
            ],
            [
                'title' => 'Laboratory Chemical Supply',
                'description' => 'At low and competitive friendly price, you get quality and durable laboratory apparatus, devices, pure fine reagents and chemicals for accurate scientific practical experiments.',
                'image' => 'http://via.placeholder.com/600x300',
                'published' => true,
            ],
        ];

        $services = $this->table('services');
        $services->insert($data)
              ->save(); 
    }
}
