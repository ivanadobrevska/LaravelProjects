<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name=['Matilda','Tobby','Sam','John','Buddy','Joe','Boo','Missy'];
        $race=['Domestic Short Hair Mix','Poodle','Boxer','American Buldog','Yorkshire Terrier','Shih Tzu','Boo','Domestic Short Hair'];
        $city=['Veles','Skopje','Bitola','Prilep','Skopje','Pehchevo','Berovo','Kumanovo'];
        $gender=['Female','Male','Male','Male','Male','Female','Female','Female'];
        $size=['Small','Small','Medium','Big','Small','Small','Small','Medium'];
        $coat_length=['Medium','Medium','Small','Small','Medium','Medium','Medium','Long'];
        $house_trained=['Yes','No','Yes','No','Yes','No','Yes','No'];
        $health=['Vaccinations up to date, spayed / neutered.','Spayed / neutered.','Spayed / neutered.','Vaccinations up to date, spayed / neutered.','Vaccinations up to date, spayed / neutered.','Vaccinations up to date, spayed / neutered.','Vaccinations up to date, spayed / neutered.','Vaccinations up to date, spayed / neutered.'];
        $good_with=['Dogs','People and cats','Kids','Other dogs,cats','People','Cats','Other dogs','Other cats'];
        $description=["Matilda is a spunky young girl who loves to run and play! When she is not running and having fun, she can be found lounging on the nearest soft surface or snuggled up to another sleepy kitty. Matilda is sweet but timid and enjoys people watching from afar. She also loves playing with feathers and cat nip stuffed toys. Matilda doesn't enjoy being held and will usually shy away from new people, but once she gets to know you, she will be itching to play and may even greet you on the bed when you wake up in the morning! Matilda is an inquisitive lady, nothing gets past her! Matilda is loving, sweet and smart enough to keep you entertained- guessing what she'll do next! You will not be disappointed if you adopt this sweet girl into your forever family!",
        "Toby is looking for a quiet, loving home, with no children. Please give this sweet boy a chance!",
        "Sam is a mixed breed boy who is ready for his forever home. He is friendly with other dogs of all sizes, cats, and kids",
        "Johnny is a hound, meaning he will follow his nose wherever it might take him and he has shown himself to be a bit of an escape artist, so he'll need an owner who is diligent about doors being closed securely and keeping Johnny on a leash.",
        "He is friendly, loves everybody. He also gets along with other dogs. Lots of energy and needs an active lifestyle to be happy. He’s great on a leash and would be a wonderful jogging or hiking partner.",
        "This sweet girl is just two yrs old. She would love to find a gentle hand to help her trust people.",
        "she is a frightened girl which is why we named her Boo. She will jump at the slightest new sound and is scared of new people. Once she knows you she will be in your lap.",
        "Meet Missy. This pretty girl came to the shelter in February. She was initially very scared and confused as to why she ended up at the shelter. She is now very affectionate and can hardly wait for a furever home. "
    ];
        $image=['/css/Images/1card.jpeg','/css/Images/2card.jpeg','/css/Images/4card.jpeg','/css/Images/4card.jpeg','/css/Images/2card.jpeg',
        '/css/Images/3card.jpeg','/css/Images/2card.jpeg','/css/Images/1card.jpeg'];
        $user_id=[1,2,1,2,1,2,1,2];
        for($i=0;$i<8;$i++){
            DB::table('pets')->insert([
                'name'=>$name[$i],
                'race'=>$race[$i],
                'city'=>$city[$i],
                'gender'=>$gender[$i],
                'size'=>$size[$i],
                'coat_length'=>$coat_length[$i],
                'house_trained'=>$house_trained[$i],
                'health'=>$health[$i],
                'good_with'=>$good_with[$i],
                'description'=>$description[$i],
                'image'=>$image[$i],
                'user_id'=>$user_id[$i]
            ]);
        }
          
}
}
