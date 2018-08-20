<?php

use Illuminate\Database\Seeder;

class MotivationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motivations')->insert([
            'id' => 1,
            'name' => 'Activist',
            'slug' => 'activist',
            'description' =>    'activist_description',
            'protect1' =>       'activist_protect1',
            'protect2' =>       'activist_protect2',
            'protect3' =>       'activist_protect3',
            'empower1' =>       'activist_empower1',
            'empower2' =>       'activist_empower2',
            'empower3' =>       'activist_empower3',
            'strenghts' =>      'activist_strenghts',
            'challenges' =>     'activist_challenges',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 2,
            'name' => 'Alt',
            'slug' => 'alt',
            'description' =>    'alt_description',
            'protect1' =>       'alt_protect1',
            'protect2' =>       'alt_protect2',
            'protect3' =>       'alt_protect3',
            'empower1' =>       'alt_empower1',
            'empower2' =>       'alt_empower2',
            'empower3' =>       'alt_empower3',
            'strenghts' =>      'alt_strenghts',
            'challenges' =>     'alt_challenges',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 3,
            'name' => 'Demystifier',
            'slug' => 'demystifier',
            'description' =>    'demystifier_description',
            'protect1' =>       'demystifier_protect1',
            'protect2' =>       'demystifier_protect2',
            'protect3' =>       'demystifier_protect3',
            'empower1' =>       'demystifier_empower1',
            'empower2' =>       'demystifier_empower2',
            'empower3' =>       'demystifier_empower3',
            'strenghts' =>      'demystifier_strenghts',
            'challenges' =>     'demystifier_challenges',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 4,
            'name' => 'Motivator',
            'slug' => 'motivator',
            'description' =>    'motivator_description',
            'protect1' =>       'motivator_protect1',
            'protect2' =>       'motivator_protect2',
            'protect3' =>       'motivator_protect3',
            'empower1' =>       'motivator_empower1',
            'empower2' =>       'motivator_empower2',
            'empower3' =>       'motivator_empower3',
            'strenghts' =>      'motivator_strenghts',
            'challenges' =>     'motivator_challenges',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 5,
            'name' => 'Professional',
            'slug' => 'professional',
            'description' =>    'professional_description',
            'protect1' =>       'professional_protect1',
            'protect2' =>       'professional_protect2',
            'protect3' =>       'professional_protect3',
            'empower1' =>       'professional_empower1',
            'empower2' =>       'professional_empower2',
            'empower3' =>       'professional_empower3',
            'strenghts' =>      'professional_strenghts',
            'challenges' =>     'professional_challenges',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 6,
            'name' => 'Professor',
            'slug' => 'professor',
            'description' =>    'professor_description',
            'protect1' =>       'professor_protect1',
            'protect2' =>       'professor_protect2',
            'protect3' =>       'professor_protect3',
            'empower1' =>       'professor_empower1',
            'empower2' =>       'professor_empower2',
            'empower3' =>       'professor_empower3',
            'strenghts' =>      'professor_strenghts',
            'challenges' =>     'professor_challenges',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 7,
            'name' => 'Spirit Guide',
            'slug' => 'spirit_guide',
            'description' =>    'spirit-guide_description',
            'protect1' =>       'spirit-guide_protect1',
            'protect2' =>       'spirit-guide_protect2',
            'protect3' =>       'spirit-guide_protect3',
            'empower1' =>       'spirit-guide_empower1',
            'empower2' =>       'spirit-guide_empower2',
            'empower3' =>       'spirit-guide_empower3',
            'strenghts' =>      'spirit-guide_strenghts',
            'challenges' =>     'spirit-guide_challenges',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 8,
            'name' => 'Taste-Maker',
            'slug' => 'taste_maker',
            'description' =>    'taste-maker_description',
            'protect1' =>       'taste-maker_protect1',
            'protect2' =>       'taste-maker_protect2',
            'protect3' =>       'taste-maker_protect3',
            'empower1' =>       'taste-maker_empower1',
            'empower2' =>       'taste-maker_empower2',
            'empower3' =>       'taste-maker_empower3',
            'strenghts' =>      'taste-maker_strenghts',
            'challenges' =>     'taste-maker_challenges',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 9,
            'name' => 'Teacher 2.0',
            'slug' => 'teacher',
            'description' =>    'teacher_description',
            'protect1' =>       'teacher_protect1',
            'protect2' =>       'teacher_protect2',
            'protect3' =>       'teacher_protect3',
            'empower1' =>       'teacher_empower1',
            'empower2' =>       'teacher_empower2',
            'empower3' =>       'teacher_empower3',
            'strenghts' =>      'teacher_strenghts',
            'challenges' =>     'teacher_challenges',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 10,
            'name' => 'Techie',
            'slug' => 'techie',
            'description' =>    'techie_description',
            'protect1' =>       'techie_protect1',
            'protect2' =>       'techie_protect2',
            'protect3' =>       'techie_protect3',
            'empower1' =>       'techie_empower1',
            'empower2' =>       'techie_empower2',
            'empower3' =>       'techie_empower3',
            'strenghts' =>      'techie_strenghts',
            'challenges' =>     'techie_challenges',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 11,
            'name' => 'Trendsetter',
            'slug' => 'trendsetter',
            'description' =>    'trendsetter_description',
            'protect1' =>       'trendsetter_protect1',
            'protect2' =>       'trendsetter_protect2',
            'protect3' =>       'trendsetter_protect3',
            'empower1' =>       'trendsetter_empower1',
            'empower2' =>       'trendsetter_empower2',
            'empower3' =>       'trendsetter_empower3',
            'strenghts' =>      'trendsetter_strenghts',
            'challenges' =>     'trendsetter_challenges',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 12,
            'name' => 'Watchdog',
            'slug' => 'watchdog',
            'description' =>    'watchdog_description',
            'protect1' =>       'watchdog_protect1',
            'protect2' =>       'watchdog_protect2',
            'protect3' =>       'watchdog_protect3',
            'empower1' =>       'watchdog_empower1',
            'empower2' =>       'watchdog_empower2',
            'empower3' =>       'watchdog_empower3',
            'strenghts' =>      'watchdog_strenghts',
            'challenges' =>     'watchdog_challenges',
            'image' => NULL,
            'count' => 0
        ]);

    }
}
