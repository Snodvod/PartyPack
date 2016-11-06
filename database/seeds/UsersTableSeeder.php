<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('nl_BE');

        User::truncate();
        DB::table('tblUserParty')->truncate();
        DB::table('tblUserOccupation')->truncate();

        User::create([
            'name' => "Ino Van Winckel",
            'email' => "inovanwinckel@hotmail.com",
            'password' => bcrypt('secret'),
            'type_id' => 1
        ]);

        User::create([
            'name' => "Jonas Van Eeckhout",
            'email' => "ulti40@hotmail.com",
            'password' => bcrypt('secret'),
            'type_id' => 1
        ]);

        $user = User::create([
            'name' => "Eek-a-mouse",
            'email' => $faker->email(),
            'password' => bcrypt('secret'),
            'type_id' => 2,
            'bio' => 'Ludicrous, bizarre, and uniquely original, few DJs have made such a splash in the dancehall scene than Eek-A-Mouse. An artist who in any other country would have been a one-hit wonder, in Jamaica became a household name having invented a whole new vocal style, sing-jay, flooding the airwaves with his catch phrases and going on to become a respected toaster. Eek-A-Mouse didn\'t start out as a novelty act. He was born Ripton Hilton in 1957 in Kingston, Jamaica, and his first foray into the music world was as a cultural roots singer.'
        ]);
        $user->parties()->attach(1);


        $user = User::create([
        	'name' => 'Dynamo',
            'email' => $faker->email(),
            'password' => bcrypt('secret'),
            'type_id' => 2,
            'bio' => 'Growing up on the rundown Delph Hill housing estate in Bradford, with a father who spent large periods of time away in prison, Dynamo suffered with a debilitating form of Crohn?s disease as a youngster. Having been introduced to magic by his Grandad, the young Steven Frayne developed his skills as a means to fend off the bullies who teased him about his disease, quickly gaining a reputation as a unique talent within his local community with his incredible sleight of hand.'
        ]);

        $user->parties()->attach(3);

        // Peruvian
        User::create([
            'name' => 'Ozomatli',
            'email' => $faker->email(),
            'password' => bcrypt('secret'),
            'type_id' => 2,
            'bio' => 'Ozomatli is a six-piece band playing primarily Latin, hip hop, and rock music, formed in 1995 in Los Angeles. They are known both for their vocal activist viewpoints and their wide array of musical styles - including salsa, jazz, funk, reggae, rap, and others.[1] The group formed in 1995 and has since released seven studio albums. The group is also known for advocating for farm-workers\' rights and immigration reform. The band has performed in various countries all over the world, including China, Tunisia, Jordan, and Burma.'
        ]);
        User::create([
            'name' => 'Gastón Acurio',
            'email' => $faker->email(),
            'password' => bcrypt('secret'),
            'type_id' => 2,
            'bio' => 'In the kitchens and cafes of the food-crazed Peruvian capital, history is divided into two epochs: Before Gastón and After Gastón. The BG era was a time of darkness, confusion and ketchup. Then Gastón Acurio opened his first restaurant in 1994, and began remaking gritty Lima into the culinary capital of South America.Calling Acurio a celebrity chef today is like saying Oprah is a talkshow host. He is more of a modern food shaman: artist, interpreter, healer, impresario and national pitchman. A series of unpopular presidents has even left some Peruvians urging him to run for president. He shudders at the thought.'
        ]);

        User::create([
            'name' => 'Netwerk',
            'email' => $faker->email(),
            'password' => bcrypt('secret'),
            'type_id' => 2,
            'bio' => 'NETWERK is een Antwerps hiphop collectief dat creatieve jonge mensen samenbrengt onder het medium: muziek. De creatieve disciplines die de groep bevat gaan van schrijven, beats maken tot visuele kunst en DJ’ing. Wat ooit begon als af en toe eens een beat maken voor de fun is uitgegroeid tot volledige nummers maken onder een duidelijke visie. Dit met teksten die over iets gaan en beats die je muzikale ziel nog nooit gehoord heeft. Zo wordt het mogelijk om met hiphop mensen tot in hun diepste kern te raken en boven alles: mensen te laten genieten.'
        ]);
        $user = User::create([
            'name' => "Coke Weed",
            'email' => $faker->email(),
            'password' => bcrypt('secret'),
            'type_id' => 2,
            'bio' => 'Biography'
        ]);
        $user->parties()->attach(2);
    }
}
