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
            'description' => 'You have an enduring passion for fostering democratic participation through political action, whether your end goal is social justice, environmentalism, public health, or any number of specific social and political issues. You see your role in the classroom as a catalyst for students to begin to understand how they might have a voice in improving the quality of life in their communities and in the world. You want your students to understand that they have the power, even at a young age, to change the world as engaged participants in the democratic process. ',
            'protect1' => 'Teaching students how to guard themselves from harmful and oppressive media messages and how to “talk back” to negative and stereotypical media images.',
            'protect2' => 'Preparing students for democratic participation with robust knowledge of the civic process.',
            'protect3' => 'Sharing a particular vision for civic engagement based on views or media with which students may be unfamiliar.',
            'empower1' => 'Helping students to feel comfortable voicing their own opinions and ideas in political action.',
            'empower2' => 'Providing opportunities for students to create media that expresses their original ideas within an existing political or social landscape.',
            'empower3' => 'Encouraging students to question and challenge assumed beliefs and opinions about the world to foster civic engagement.',
            'strenghts' => 'Activists are often natural leaders who raise students’ consciousness about their role in a healthy democratic environment. They often have extensive knowledge of global and local issues around which students can become passionate and engaged directly in a political process, whether they advocate for a new recycling program in their school or write letters to local news stations.',
            'challenges' => 'Activists sometimes over- or underestimate the extent to which students have truly developed their own sets concrete values and beliefs—in some cases, students’ “home” beliefs are contrary to the vision of the instructor, while in others students simply do not know yet what they believe. This makes the Activist teacher vulnerable to imposing a specific set of beliefs on students who are either opposed to or unsure of their instructor’s opinions or values.',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 2,
            'name' => 'Alt',
            'description' => 'You are an inventive, perhaps “DIY,” teacher. You’re always ready to challenge students with alternative ways of finding, using, thinking about, and making media in the classroom. Whether you use open source programs on school computers, encourage students to start alternative clubs or magazines, or introduce students to media that’s “off the beaten path” of mainstream and mass media, you are likely a key proponent of broadening students’ understanding of the many different ways that people can communicate in the world. ',
            'protect1' => 'Teaching students to question the authority of professional, mainstream, and mass media points of view on the world.',
            'protect2' => 'Sharing alternative cultural touchstones with students that have been transformative in your own life or in other cultures.',
            'protect3' => 'Helping students to better understand alternative histories and points of view that they may not learn in textbooks or other authoritative classroom media.',
            'empower1' => 'Encouraging students to imagine multiple ways of communicating a message or idea.',
            'empower2' => 'Giving students an “inside look” at, and the skills to make, work that is less “glossy” and difficult to produce than most professionally-produced media.',
            'empower3' => 'Providing students opportunities to make media that engages with formats, modes of construction, and points of view with which they are unfamiliar.',
            'strenghts' => 'Alts are, as their name implies, adept at creating a classroom environment that is curious, creative, and engaging in the way that it breaks from students’ expectations. Alts are often students’ first points of entry to worlds of art, current events, popular culture, and literature that offers more diverse points of view than traditional classroom media.',
            'challenges' => 'Alts can sometimes, in teaching alternatives to the traditional canon of the classroom canons, create new sacred cows that are not subject to the scrutiny and critical questioning of mainstream or traditional media. Alts sometimes alienate students who identify with popular culture in strong and complex ways; they present alternatives without equally respecting what their students love the most.',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 3,
            'name' => 'Demystifier',
            'description' => 'Did you know that crime shows on television are filmed almost entirely in front of green screens? That when fast food companies advertise their products, they hire artists and sculptors to make the ingredients look more palatable? That magazine pictures are digitally manipulated? If any of these questions pique your curiosity, you might be a Demystifier. As a teacher, you are intent on “pulling back the curtain” of media production in all of its forms, from writing a book to editing a Hollywood film. When you teach students, you pull them into what at first seems like a secret conspiracy, but eventually becomes part of the foundation of their critical thinking—that is, asking good “how” and “why” questions—and classroom learning. ',
            'protect1' => 'Helping students identify how manipulation of images distorts our perceptions of reality.',
            'protect2' => 'Defending students from negative messages from mass media and popular culture that have an impact on their self-esteem or self-image.',
            'protect3' => 'Questioning students uncritical pleasure in the problematic media they use.',
            'empower1' => 'Using demystification of media production processes to encourage students to make their own work.',
            'empower2' => 'Asking students to make connections between the processes of media production and the media they use in their everyday lives.',
            'empower3' => 'Encouraging students to ask their own questions about how and why media is constructed.',
            'strenghts' => 'Demystifiers are good at identifying teachable moments when students struggle to understand how and why media is constructed. Their students make meaningful connections to their home uses of media; often leave their classes saying that they will “never watch a movie,” “never read a book,” or “never use a website” the same way again.',
            'challenges' => 'Demystifiers need to be on the lookout for confusion as they pull back the various curtains that conceal the constructedness of media—it is better for curtains to be opened (so to speak) in the service of a particular, meaningful lesson, and not simply to foster student engagement. Demystifiers also need to combat students’ cynicism as they learn about media’s constructedness; when students make their own work using their knowledge of constructedness, they understand that whether constructedness is “good” or “bad” depends on point of view and also the context in which it was produced.',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 4,
            'name' => 'Motivator',
            'description' => 'You are an inspiration, a catalyst for your students’ creative energy. Students who have never felt comfortable speaking up in class, participating in activities, or contributing to class dialogue find it easier to speak their mind when you’re leading the classroom. But you don’t necessarily see yourself as a leader, even if you are one—you see yourself as more of a springboard or facilitator. What’s important is what the students want to say and to do; your role is to help them to be the best “them” they can be. ',
            'protect1' => 'Teaching students how to guarding themselves media that may be harmful to their self-esteem or sense of self-worth.',
            'protect2' => 'Requiring students to provide positive feedback to their peers that affirms the strongest qualities of student participation and classroom work.',
            'protect3' => 'Carefully selecting classroom materials that will not challenge students’ sense of power in their own creative expression.',
            'empower1' => 'Fostering an environment in which students feel comfortable sharing their ideas, opinions, and unique creative talents to express themselves.',
            'empower2' => 'Encouraging students to pursue subjects that they find interesting or engaging as the basis for classroom activities and projects.',
            'empower3' => 'Providing opportunities for students to spark and sustain their own dialogue in the classroom, with only occasional scaffolding and direction from the teacher.',
            'strenghts' => 'Motivators are the teachers students remember fondly for their commitment to collaboration and student voice—students feel that their own ideas and creative spirit are respected and developed. Motivators are also sensitive to bringing every student along for the creative journey; their charisma make it difficult for students to opt out.',
            'challenges' => 'Motivators can sometimes err on the side of too little structure or too much chaos in the classroom, which can impede student clarity and direction—though students’ voices are powerful, they are also in a state of development, which means that students may not know yet exactly what they have to say. Motivators also need to ensure that students feel comfortable not only expressing themselves, but questioning each other’s work respectfully and challenging each other to do better and more thoughtful work.',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 5,
            'name' => 'Professional',
            'description' => 'You have high standards for your students’ work, and you may be seen as the go-to media professional in your school. You’re the kind of teacher who knows how to push your students to understand and emulate the professional conventions that you know is important to being taken seriously in the world of media creation. You may also be interested in getting your students into the real world of media creation, thinking about ways to bring other authors, professionals, and media-makers into your classroom to enrich the learning experience. ',
            'protect1' => 'Protect students from technical failure in their media productions and projects.',
            'protect2' => 'Equip students to recognize how professional production carries specific messages that may be negative or harmful.',
            'protect3' => 'Prevent organizational chaos with a hierarchal production model (with explicit roles) that limit students’ tendency to go off-task or be unproductive.',
            'empower1' => 'Instill a sense of professionalism and promote concentrated effort on media production projects.',
            'empower2' => 'Help students think of themselves as “real” authors speaking to real audiences in a professional language that users of mass media understand.',
            'empower3' => 'Provide an academic or career path for students through media production and media industries by modeling professional skills, behaviors, and standards.',
            'strenghts' => 'Professionalism looks good. Professionals are usually good at holding students to a higher set of aesthetic standards than typical youth media projects. Professionals are often in charge of professional technology and equipment available at school. They also inspire students to look into continuing opportunities to create media in after-school and academic programs.',
            'challenges' => 'Professionalism in and of itself can suffer from the “style over substance” problem. Students emulate professional models in news, film production, or graphic design, but do not necessarily bring the same rigor to academic or content aspects of the work. When professional values are only aesthetic, they may discourage students from thinking about the processes of research, analysis, and evaluation crucial to high-quality media projects.',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 6,
            'name' => 'Professor',
            'description' => 'You are always careful to balance your enthusiasm for media and technology with a clear connection to your academic standards. You want to be sure that media and technology are not used in the classroom for their own sake, but to advance your lessons, goals, and learning target. Multimedia presentations, engaging websites, and educational technology serve the purpose of helping you deliver the core content that students need to master. ',
            'protect1' => 'Keep students on-task with current assignments and less prone to diversions or chaotic, unstructured media activities.',
            'protect2' => 'Heavily scaffold and structure classroom conversations to help students master content and better understand lesson goals.',
            'protect3' => 'Use educational technologies as “safe spaces” where students can explore within well-defined content boundaries.',
            'empower1' => 'Help students understand how engaging media connects to the content lessons that are crucial to their academic development.',
            'empower2' => 'Expand students’ conception of what kinds of composition practices are acceptable in academic environments by encouraging them to make presentations, videos, and other media products.',
            'empower3' => 'Provide a vision of educational success that includes mastery of media materials relevant to their academic success, including word processing, multimedia presentation creation, video production, and other skills.',
            'strenghts' => 'Professors have a keen understanding of their goals in teaching, and so do their students. Professors are less likely to experience the kind of messiness that can be inherent in large, collaborative media projects. Their students always have a clear sense of the relevance of integrating technology and media to immediate needs of a lesson and subject.',
            'challenges' => 'By hewing to curriculum needs, sometimes Professors miss opportunities to go “off-script” to exciting and important teachable moments. Using technology and media in the classroom provides lots of opportunities for creativity, improvisation, and exploration that may or may not be easily integrated into a strict lesson template. These kinds of spontaneous and semi-structured explorations can help deepen students’ understanding of some of the issues that are most important to them in their everyday lives—issues that involve their families, communities, current events, and important but unpredictable life lessons.',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 7,
            'name' => 'Spirit Guide',
            'description' => 'You are a listener. You have a dedication to the social and emotional well-being of your students, and want to make sure that everything you do in the classroom connects to their immediate needs to understand themselves and their lives. Students likely find you trustworthy, and may even confide in you in ways that they do not for other teachers. You know media is just one facet of student life, and you want to engage with it to help them through the highs and lows of life in all of its challenges and opportunities. ',
            'protect1' => 'Help students understand and guard themselves against media representations that hurt their self-esteem.',
            'protect2' => 'Counteract stereotypes and misrepresentations that students identify with or recognize.',
            'protect3' => 'Create a safe, private space in the classroom for students to feel honored, respected, and listened to when they talk about their personal relationships.',
            'empower1' => 'Encourage students to express their feelings and emotions through media production.',
            'empower2' => 'Spark conversations about students’ personal experiences with digital media and popular culture and the way it affects their lives.',
            'empower3' => 'Integrate reflective practice into students’ writing and media production activities.',
            'strenghts' => 'Spirit Guides tend to be highly trustworthy. Students confide in Spirit Guides, telling them things about their lives, thoughts, and feelings that they may not share with other teachers. Spirit Guides are receptive to students’ emotional well-being and sense of self-esteem.',
            'challenges' => 'Many students have private media lives that they may feel ambivalent about sharing in classroom environments. Spirit Guides need to be particularly careful when it is OK for students not to share, especially when students have concerns about appropriateness, privacy, or peer judgment of their media lives.',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 8,
            'name' => 'Taste-Maker',
            'description' => 'Kids these days! They can recite rap lyrics and pop songs, but what about the verses of Shakespeare? They’ve memorized every plot point in the hottest Hollywood blockbuster, but what about seminal American or foreign films? You want to broaden your students’ horizons. You want them to have exposure to the kinds of media experiences that put them in touch with historical, aesthetic, and critical appreciation. You know that a key component of students’ future interactions will require them to draw from a variety of cultural sources both classical and popular. At worst, students’ tendencies to pop culture trivia will be useless to them in the future. At best, they will use their understanding of contemporary culture along with their understanding of other forms of classic literature, art, and media to connect pop culture to its cultural heritage. ',
            'protect1' => 'Challenging students’ limited perceptions of culture with widely-recognized cultural touchstones.',
            'protect2' => 'Asking students to distinguish between superficial and complex media messages.',
            'protect3' => 'Developing inventive strategies to steer student engagement toward the “classics” in art, literature, and other media.',
            'empower1' => 'Helping students to use reasoning and discrimination to distinguish between positive and negative messages.',
            'empower2' => 'Making connections between the popular culture that students love and its cultural heritage.',
            'empower3' => 'Encouraging students to ask critical questions about the aesthetics and historical context of all media used in the classroom.',
            'strenghts' => 'Taste-makers often bring a wealth of knowledge of the arts to bear on the choices they make in the classroom, helping their students to understand and care more deeply about classic literature, art, and other media. Taste-makers also tend to take a “long view” of culture, making important historical and aesthetic connections between contemporary culture and its forbears.',
            'challenges' => 'Taste-makers sometimes inflect their own taste in “classic” media in their approach to popular media, which can be disengaging for students who identify themselves by so-called “shallow” media. Taste-makers can also be reluctant to use the same level of critical questioning and skepticism when dealing with the “classics” that they use to deconstruct contemporary culture.',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 9,
            'name' => 'Teacher 2.0',
            'description' => 'You are an educator who understands that participation in digital media and learning cultures requires flexibility to new formats, modes of expression, and participation in and out of school. You might read Shakespeare plays along with Hollywood adaptations. You might use online or interactive versions of classic literature to explore meaning behind texts. Or you might use online discussion boards and courseware to activate students’ enthusiasm for connecting to one another. Teacher 2.0 teachers are “anything goes”—they are restless and innovative, always trying new things in the classroom and finding new ways to connect learning to children’s culture.',
            'protect1' => 'Help students understand respectful interpersonal relationships on- and off-line through structured activities.',
            'protect2' => 'Create a safe classroom space for students to try new forms of analysis and communication without exposing them to some of the harsher realities of public and online life. ',
            'protect3' => 'Find ways to make traditional subject matter engaging, helping students focus on multiple forms of core content. ',
            'empower1' => 'Spark classroom conversations about a variety of media and students’ relationships to it, creating text-to-text and text-to-self connections. ',
            'empower2' => 'Give students confidence to evaluate, analyze, and create media in multiple forms even if they have challenges with their print literacy skills.',
            'empower3' => 'Honor students’ participation in fan culture and engagement in media as a key component of their in-class learning. ',
            'strenghts' => 'Teacher 2.0’s are endlessly inventive and find lots of new ways to engage students in a variety of subjects. They explore opportunities for students to interact with one another online and in class through new media and technology, and connect to students emotionally by taking their pleasure in both engaging digital media and classroom learning seriously.',
            'challenges' => 'Because of the divergent nature of the Teacher 2.0 teaching style, lessons are often vulnerable to hiccups, unforeseen challenges, and remaining unfinished, as when students don’t have time to watch a whole film, don’t adequately engage with one another on online platforms, or don’t complete a media production. Teacher 2.0’s also occasionally miss the ways in which students choose not to participate with one another, or their desire to sometimes leave their enthusiasm for media “at home.” ',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 10,
            'name' => 'Techie',
            'description' => 'You are up to date with the all of the latest, flashiest, and coolest of the “cool tools” – gadgets, devices, apps, programs, plug-ins, widgets, websites, and educational technology. When other teachers are having problems with their technology or looking for new ideas for websites, they might turn to you first. The potential to engage students with the technology tools they love and use in their everyday lives—cell phones, tablets, and iPods—excites you, but you also love the tools yourself. You’re a tester and a fiddler. You love to geek out, learning new skills and new technologies with a passionate sense of discovery. ',
            'protect1' => 'Teaching students to use technology tools safely and responsibly.',
            'protect2' => 'Gatekeeping or providing "quality control" to students\' access of websites and other digital resources.',
            'protect3' => 'Using educational technology tools in the classroom yourself to both streamline and spice up your lesson plans.',
            'empower1' => 'Giving students the power of using new technologies firsthand to make their own work.',
            'empower2' => 'Engaging in students\' interests of new technologies like smart phones and mobile devices.',
            'empower3' => 'Acting as an advocate in your school for the use of educational technology in other classrooms and for other students.',
            'strenghts' => 'Techies have a "finger on the pulse" of rapid technological change. They engage student interests around new and emerging platforms, programs, and technologies that they also love to use in their own teaching of classroom content.',
            'challenges' => 'Techies sometimes find it difficult to engage teachers and students who do not share their enthusiasm for or confidence in using new technology. Techies need to make sure that they think beyond simple engagement in flashy technology and ask key questions about why and how technology functions, for better and for worse, in our everyday lives.',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 11,
            'name' => 'Trendsetter',
            'description' => 'You’re one of the hippest teachers in school, sharing with your students and a few teachers your own pop culture knowledge and your drive to learn more about kid culture. You might be a parent who has as many pop songs on your iPod as your children do, if not more. Or maybe your own most-loved popular culture isn’t too far removed from that of your students. You are inquisitive about the trends and hot topics that make up a crucial component of the fabric of your students’ everyday lives. You want school culture to meet kids where they live with the popular culture they know and love—and that you occasionally love just as much yourself, whether it’s pop and hip-hop music, blockbuster films, reality TV, or any number of other shared cultural reference points.',
            'protect1' => 'Nurturing a safe environment for appropriate popular culture in the classroom.',
            'protect2' => 'Using a variety of popular culture texts to have students ask questions about its authors, target audiences, messages, meanings, and representations of reality.',
            'protect3' => 'Asking students to reflect on their use of popular culture, particularly when its effects may be harmful to their well-being or self-image. ',
            'empower1' => 'Opening inquiry about popular culture as an important component of classroom discussion.',
            'empower2' => 'Engaging in students\' interests of new technologies like smart phones and mobile devices.',
            'empower3' => 'Encouraging students to make connections between popular culture and more traditional curriculum material. ',
            'strenghts' => 'Trendsetters acknowledge the wide variety of popular culture texts that students often feel passionately about as a way to engage them in formal learning. They also make strong connections between students’ areas of expertise and specialized knowledge (popular culture) and new knowledge (curriculum content). ',
            'challenges' => 'Trendsetters can have difficulty addressing students who feel culturally “disconnected” or actively define themselves against the popular culture that the majority of their peers love. Trendsetters also need to carefully ensure that conversations about popular culture don’t begin and end merely with “love it or hate it,” but instead explore how and why popular culture does what it does.  ',
            'image' => NULL,
            'count' => 0
        ]);

        DB::table('motivations')->insert([
            'id' => 12,
            'name' => 'Watchdog',
            'description' => 'You are suspicious and concerned about the way that economic systems and institutions influence our everyday lives, particularly through the media we use. You want your students and your peers to be more mindful of the ways that things are bought and sold. Who owns and controls the media content that we see, hear, read, and play with? How do advertising, public policy, and media ownership affect our relationship to consumerism? Why is it often so difficult for students to ask critical questions of powerful children’s media industry leaders like Disney or Nickelodeon? You sometimes feel solely responsible for giving your students a “wake-up call” about the economic and institutional inner-workings of the media, and the world, that surrounds them.  ',
            'protect1' => 'Debunking myths and “tricks” in advertisements, popular culture, and mass media.',
            'protect2' => 'Fostering students’ skepticism about the motivations of media institutions.',
            'protect3' => 'Helping students guard against pervasive messages that glorify consumerism.',
            'empower1' => 'Helping students to ask critical questions about the systems through which media is created, distributed, and used.',
            'empower2' => 'Developing students’ concrete understanding about media’s relationship to economics and politics.',
            'empower3' => 'Encouraging students to create their own work that challenges the dominance of consumerist messages, such as public service announcements or parodies of mass media and popular culture.',
            'strenghts' => 'Watchdog teachers are often the first, and sometimes only, catalysts for students’ major “aha moments” as they start to make connections between institutions and systems of power and the media they use. Watchdogs capitalize on children’s sense of power in debunking “trickery” or identifying manipulation in order to help students understand complicated political systems and other issues in democracy and civics.',
            'challenges' => 'Watchdogs’ focus on systems of power can sometimes lead students to adopt a cynical view of media ownership—and fostering students’ cynicism at a young age can be “fuel for the fire” for students who are already skeptical of the systems of power (in their schools and communities) in their everyday lives. The Watchdog approach to media ownership can also lead to parroting of teacher values, as savvy students who regularly take pleasure in mass media and popular culture figure out the “correct” answers in lessons without taking them to heart.',
            'image' => NULL,
            'count' => 0
        ]);

    }
}
