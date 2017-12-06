<?php

use Phinx\Seed\AbstractSeed;

class SiteSettingsTableSeeder extends AbstractSeed
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
                'name' => 'Powercard Group Company Ltd',
                'tag_line' => 'Real for you not just for you',
                'about' => 'Established for providing id card services and laboratory apparatus, reagents and fine chemicals for schools and organizations/institutions in advanced technology and competitive business platform.',
            ]
        ];

        $site_settings = $this->table('site_settings');
        $site_settings->insert($data)
              ->save();
    }
}
