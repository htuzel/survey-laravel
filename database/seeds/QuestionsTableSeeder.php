<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'id' => 1,
            'question' => 'People are passive when they don’t notice biases and points of view that are embedded in media messages.',
            'motivation_id' => '3',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 2,
            'question' => 'You can be misled by media when you don’t know where the information comes from.',
            'motivation_id' => '3',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 3,
            'question' => 'The real purpose of television is to sell audiences to advertisers ',
            'motivation_id' => '12',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 4,
            'question' => 'I’m worried about how few companies control the publishing, broadcasting, film and Internet business.',
            'motivation_id' => '12',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 5,
            'question' => 'Citizens have an obligation to express themselves about the causes they believe in.',
            'motivation_id' => '1',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 6,
            'question' => 'We risk losing our democracy if we don’t create a generation of activists who help preserve it. ',
            'motivation_id' => '1',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 7,
            'question' => 'Too often, media distracts students from the information and ideas that are really important. ',
            'motivation_id' => '6',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 8,
            'question' => 'I worry that students’ media use interferes with their concentration and motivation in school. ',
            'motivation_id' => '6',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 9,
            'question' => 'You won’t be able to compete in the workplace unless your emails, writing, videos and photos are polished and professional.',
            'motivation_id' => '5',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 10,
            'question' => 'When students make amateur-looking media productions, it’s hard to know whether they’ve learned anything.',
            'motivation_id' => '5',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 11,
            'question' => 'When it comes to digital media, if you don’t participate, you will be left behind. ',
            'motivation_id' => '9',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 12,
            'question' => 'Students who aren\'t active online are isolated from the rest of the world.',
            'motivation_id' => '9',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 13,
            'question' => 'The most competitive schools of the future will invest in the right technology tools and help students learn to use them well.',
            'motivation_id' => '10',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 14,
            'question' => 'If my school doesn’t keep up with technology trends, we will fall behind.',
            'motivation_id' => '10',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 15,
            'question' => ' I worry that some media and technology may promote antisocial behavior.',
            'motivation_id' => '7',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 16,
            'question' => 'If students don’t share how they feel about media and popular culture, they miss out on opportunities for emotional growth.',
            'motivation_id' => '7',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 17,
            'question' => 'If I don\'t give my students flexibility to be creative, they may not learn to speak for themselves.',
            'motivation_id' => '4',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 18,
            'question' => 'Too many people are disengaged from the process of learning and developing their own unique knowledge and skills ',
            'motivation_id' => '4',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 19,
            'question' => 'If I\'m not familiar with students\' popular culture, they will think that I\'m not really connected to their lives. ',
            'motivation_id' => '11',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 20,
            'question' => 'It\'s not easy to connect with young people if I don\'t share an interest in their movies, music, fashion, and celebrities. ',
            'motivation_id' => '11',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 21,
            'question' => 'Most of the messages on mainstream media like broadcast TV networks are a waste of time. ',
            'motivation_id' => '2',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 22,
            'question' => 'Too many people are ignorant about alternative media found in some magazines, music and movies ',
            'motivation_id' => '2',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 23,
            'question' => 'Students can be trapped by their own narrow interest in popular culture. ',
            'motivation_id' => '8',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 24,
            'question' => 'I worry about the lack of complexity in contemporary popular culture. ',
            'motivation_id' => '8',
            'style' => 'protect',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 25,
            'question' => 'When you know how a website, videogame or TV show is actually made, it changes the way you see media forever.',
            'motivation_id' => '3',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 26,
            'question' => 'Media producers make careful, conscious choices when they create movies, TV shows, and websites.',
            'motivation_id' => '3',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 27,
            'question' => 'Combating stereotypes in media is essential to improving people’s well-being.',
            'motivation_id' => '12',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 28,
            'question' => 'You can change someone’s life by teaching them how to resist media messages.',
            'motivation_id' => '12',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 29,
            'question' => 'It is essential for young people to use digital media in the classroom to advocate for social change.',
            'motivation_id' => '1',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 30,
            'question' => 'When young people take social action through digital media, they can change the world. ',
            'motivation_id' => '1',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 31,
            'question' => 'The best thing about the Internet is the access to rich content, ideas and information that I can use in the classroom.',
            'motivation_id' => '6',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 32,
            'question' => 'Digital media makes it easier for students to interact with subject matter some students find boring.',
            'motivation_id' => '6',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 33,
            'question' => 'When students use the same tools that professionals use, they know that their voices are more likely to be heard. ',
            'motivation_id' => '5',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 34,
            'question' => 'When students work hard, they can create productions that look and sound as good as what you see in mainstream media like Hollywood or broadcast news.',
            'motivation_id' => '5',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 35,
            'question' => 'When used to its fullest potential, social media can transform education.',
            'motivation_id' => '9',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 36,
            'question' => 'The more we share online, the more we contribute to society.',
            'motivation_id' => '9',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 37,
            'question' => 'When students learn to master a new technology tool, they gain special knowledge and status.',
            'motivation_id' => '10',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 38,
            'question' => 'Good educational technologies help teachers teach better.',
            'motivation_id' => '10',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 39,
            'question' => 'Media helps students activate their feelings and emotions in the classroom to promote learning',
            'motivation_id' => '7',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 40,
            'question' => 'Using media in the classroom promotes empathy and social understanding.',
            'motivation_id' => '7',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 41,
            'question' => 'When students really care about a topic, nothing can stop them from learning more.',
            'motivation_id' => '4',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 42,
            'question' => 'Students\' creativity is unleashed when they discover topics that compels their interests. ',
            'motivation_id' => '4',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 43,
            'question' => 'Keeping up with young people\'s popular culture puts me in touch with my students.',
            'motivation_id' => '11',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 44,
            'question' => 'Young people’s interest in popular culture can promote an interest in school subjects.',
            'motivation_id' => '11',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 45,
            'question' => 'Alternative films and documentaries are more interesting and useful for my students than Hollywood movies',
            'motivation_id' => '2',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 46,
            'question' => 'Students\' lives are enriched when they seek alternative media representations',
            'motivation_id' => '2',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 47,
            'question' => 'Students\' lives are enriched when they understand how and why the classics in various forms of media are relevant to present day issues. ',
            'motivation_id' => '8',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 48,
            'question' => 'Children should be given access to the rich cultural history provided by classics in film and literature.',
            'motivation_id' => '8',
            'style' => 'empower',
            'lang' => 'en',
            'quiz_id' => 1
        ]);


    }
}
