<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cards=[
            [
                'company_name' => 'Samsung',
                'discount' => '10% на телефони',
                'category_id' => 1,
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/1280px-Samsung_Logo.svg.png',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                 aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                  non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. At vero eos et accusamus et iusto odio dignissimos 
                  ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati 
                  cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum 
                  quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit 
                  quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem 
                  quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non 
                  recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut
                   perferendis doloribus asperiores repellat.',
                'link'=>'https://www.samsung.com/us/',
                'facebook'=>'https://www.facebook.com/SamsungGlobal/',
                'phone_number'=>'+38978145145',
                'email'=>'info@samsung.com',
                'google_maps'=>'https://www.google.com/maps/place/Samsung+Electronics/@37.4968687,127.0244282,17z/data=!4m8!1m2!2m1!1sSamsung+headquarters+!3m4!1s0x357ca15a36f93c23:0x6f9b641b98c82ee7!8m2!3d37.4967901!4d127.0270925',
                'address'=>'1320-26 Seocho 2(i), Seocho-gu, Seoul, South Korea',
                'price'=>500,
                'is_approved'=>1
            ],
            [
                'company_name'=>'Languages School',
                'discount'=>'15% на курс по Германски јазик',
                'category_id'=>4,
                'thumbnail'=>'https://image.shutterstock.com/image-photo/language-school-concept-young-woman-260nw-351275894.jpg',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                 aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                  non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. At vero eos et accusamus et iusto odio dignissimos 
                  ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati 
                  cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum 
                  quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit 
                  quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem 
                  quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non 
                  recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut
                   perferendis doloribus asperiores repellat.',
                'link'=>'https://www.sprachcaffe.com/english/main.htm',
                'facebook'=>'https://www.facebook.com',
                'phone_number'=>'+38971123123',
                'email'=>'language_school@gmail.com',
                'google_maps'=>'https://www.google.com/search?client=ubuntu&hs=06y&sa=X&channel=fs&biw=1853&bih=951&q=language+school&npsic=0&rflfq=1&rlha=0&rllag=41997348,21469394,2883&tbm=lcl&ved=2ahUKEwiZ1_HJ86rjAhVJUZoKHZVMDbgQtgN6BAgKEAQ&tbs=lrf:!2m1!1e2!2m1!1e16!3sIAE,lf:1,lf_ui:2&rldoc=1#rlfi=hd:;si:15610098437107389853;mv:!1m2!1d42.0359288594626!2d21.51967671967782!2m2!1d41.98452671459058!2d21.396681343090904!4m2!1d42.010232979129064!2d21.45817903138436!5i14',
                'address'=>'Skopje 1000',
                'price'=>200,
                'is_approved'=>1
            ],
            [
                'company_name'=>'Marriott',
                'discount'=>'10% на фитнес за двајца',
                'category_id'=>3,
                'thumbnail'=>'https://cached.imagescaler.hbpl.co.uk/resize/scaleWidth/743/cached.offlinehbpl.hbpl.co.uk/news/OMC/570D103A-A86F-C30C-D38BB0F1F5F6477D.jpg',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                 aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                  non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. At vero eos et accusamus et iusto odio dignissimos 
                  ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati 
                  cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum 
                  quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit 
                  quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem 
                  quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non 
                  recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut
                   perferendis doloribus asperiores repellat.',
                'link'=>'https://www.marriott.com/default.mi',
                'facebook'=>'https://www.facebook.com/skopjemarriott/',
                'phone_number'=>'38972444555',
                'email'=>'info@marriott.com',
                'google_maps'=>'https://www.google.com/maps/place/Skopje+Marriott+Hotel/@41.994366,21.430006,17z/data=!3m1!4b1!4m8!3m7!1s0x135415b48799d051:0xdccbcdecbab81840!5m2!4m1!1i2!8m2!3d41.994362!4d21.4322',
                'address'=>'Skopje 1000',
                'price'=>300,
                'is_approved'=>1
            ]
            ];
      DB::table('cards')->insert($cards);
    }
}
