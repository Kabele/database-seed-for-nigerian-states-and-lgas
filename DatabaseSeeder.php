<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = factory(App\User::class)->create([
             'username' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('admin'),
             'lastname' => 'Mr',
             'firstname' => 'admin'
         ]);

         //creating seeds for countries

         $country = factory(App\Country::class)->create([
             'country_code' => 'NG',
             'name' => 'Nigeria'
         ]);

         //creating database seeds for states in Nigeria

         $state = factory(App\State::class)->create([
             'country_id' => '1',
             'name' => 'Abuja, FCT'
         ]);

         $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Lagos'
         ]);

         $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Kaduna'
         ]);

         $state = factory(App\State::class)->create([
             'country_id' => '1',
             'name' => 'Abia'
         ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Adamawa'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Akwa Ibom'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Anambra'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Bauchi'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Benue'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Borno'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Cross River'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Bayelsa'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Delta'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Ebonyi'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Edo'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Enugu'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Ekiti'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Gombe'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Imo'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Jigawa'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Kano'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Katsina'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Kebbi'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Kogi'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Kwara'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Nassarawa'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Niger'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Ogun'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Ondo'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Osun'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Oyo'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Plateau'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Rivers'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Sokoto'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Taraba'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Yobe'
        ]);

        $state = factory(App\State::class)->create([
            'country_id' => '1',
            'name' => 'Zamfara'
        ]);

        //creating database seed for LGAs

        $city = factory(App\City::class)->create([
            'state_id' => '1',
            'name' => 'AMAC'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '1',
            'name' => 'Abaji'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '1',
            'name' => 'Kwali'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '1',
            'name' => 'Kuje'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '1',
            'name' => 'Gwagwalada'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '1',
            'name' => 'Bwari'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Ikeja'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Agege'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Alimosho Ifelodun'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Alimosho'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Amuwo-Odofin'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Apapa'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Badagry'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Epe'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Eti-Osa'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Ibeju-Lekki'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Ifako/Ijaye'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Ikorodu'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Kosofe'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Lagos Island'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Lagos Mainland'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Mushin'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Ojo'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Oshodi-Isolo'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Shomolu'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '2',
            'name' => 'Surulere'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Brnin Gwari'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Chukun'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Giwa'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Kajuru'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Igabi'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Ikara'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Jaba'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Jema`a'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Kachia'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Kaduna North'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Kaduna South'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Kagarok'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Kauru'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Kabau'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Kudan'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Kere'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Makarfi'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Sabongari'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Sanga'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Soba'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Zangon-Kataf'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '3',
            'name' => 'Zaria'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Aba North'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Aba South'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Arochukwu'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Bende'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Isiala Ngwa South'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Ikwuano'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Isiala Ngwa North'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Isuikwuato'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Ukwa West'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Ukwa East'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Umuahia North'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Umuahia South'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Umunneochi'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Obi Ngwa'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Ohafia'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Osisioma Ngwa'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '4',
            'name' => 'Ugwunagbo'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Demsa'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Fufore'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Ganye'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Girei'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Gombi'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Jada'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Yola North'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Lamurde'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Madagali'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Maiha'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Mayo-Belwa'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Michika'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Mubi South'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Numna'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Shelleng'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Song'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Toungo'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Jimeta'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Yola South'
        ]);

        $city = factory(App\City::class)->create([
            'state_id' => '5',
            'name' => 'Hung'
        ]);

    }
}
