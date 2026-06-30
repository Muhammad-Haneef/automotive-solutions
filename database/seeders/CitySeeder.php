<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            /*
            // UAE Cities (country_id = 1)
            ['country_id' => 1, 'title' => 'Abu Dhabi'],
            ['country_id' => 1, 'title' => 'Ajman'],
            ['country_id' => 1, 'title' => 'Al Ain'],
            ['country_id' => 1, 'title' => 'Al Dhafra'],
            ['country_id' => 1, 'title' => 'Al Dhaid'],
            ['country_id' => 1, 'title' => 'Al Jazirah Al Hamra'],
            ['country_id' => 1, 'title' => 'Al Rams'],
            ['country_id' => 1, 'title' => 'Baniyas'],
            ['country_id' => 1, 'title' => 'Dibba Al Fujairah'],
            ['country_id' => 1, 'title' => 'Dibba Al Hisn'],
            ['country_id' => 1, 'title' => 'Dubai'],
            ['country_id' => 1, 'title' => 'Falaj Al Mualla'],
            ['country_id' => 1, 'title' => 'Fujairah'],
            ['country_id' => 1, 'title' => 'Hatta'],
            ['country_id' => 1, 'title' => 'Jebel Ali'],
            ['country_id' => 1, 'title' => 'Kalba'],
            ['country_id' => 1, 'title' => 'Khor Fakkan'],
            ['country_id' => 1, 'title' => 'Liwa'],
            ['country_id' => 1, 'title' => 'Madinat Zayed'],
            ['country_id' => 1, 'title' => 'Manama'],
            ['country_id' => 1, 'title' => 'Masafi'],
            ['country_id' => 1, 'title' => 'Masfout'],
            ['country_id' => 1, 'title' => 'Mussafah'],
            ['country_id' => 1, 'title' => 'Ras Al Khaimah'],
            ['country_id' => 1, 'title' => 'Ruwais'],
            ['country_id' => 1, 'title' => 'Sharjah'],
            ['country_id' => 1, 'title' => 'Umm Al Quwain'],
*/
            // Pakistan Cities (country_id = 2)
            ['country_id' => 1, 'title' => 'Karachi'],
            ['country_id' => 1, 'title' => 'Lahore'],
            ['country_id' => 1, 'title' => 'Islamabad'],
            ['country_id' => 1, 'title' => 'Rawalpindi'],
            ['country_id' => 1, 'title' => 'Faisalabad'],
            ['country_id' => 1, 'title' => 'Multan'],
            ['country_id' => 1, 'title' => 'Peshawar'],
            ['country_id' => 1, 'title' => 'Quetta'],
            ['country_id' => 1, 'title' => 'Sialkot'],
            ['country_id' => 1, 'title' => 'Gujranwala'],
            ['country_id' => 1, 'title' => 'Hyderabad'],
            ['country_id' => 1, 'title' => 'Sukkur'],
            ['country_id' => 1, 'title' => 'Bahawalpur'],
            ['country_id' => 1, 'title' => 'Abbottabad'],
            ['country_id' => 1, 'title' => 'Mardan'],
            ['country_id' => 1, 'title' => 'Sargodha'],
            ['country_id' => 1, 'title' => 'Rahim Yar Khan'],
            ['country_id' => 1, 'title' => 'Dera Ghazi Khan'],
            ['country_id' => 1, 'title' => 'Okara'],
            ['country_id' => 1, 'title' => 'Kasur'],
        ]);
    }
}
