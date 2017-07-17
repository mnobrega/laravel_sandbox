<?php

use App\Accommodation;
use App\City;
use App\Country;
use App\Location;
use App\State;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\Hash;

class MyCompanyTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $user = new User();

        $user->name = "hotel";
        $user->email = "hotel@test.com";
        $user->password = Hash::make('password');
        $user->save();

        $country = new Country();
        $country->name = "United States";
        $country->id = 236;
        $country->save();

        $state = new State();
        $state->name = "Pennsylvania";
        $state->id = 1;
        $state->save();

        $city = new City() ;
        $city->name = "Pittsburgh";
        $city->id=1;
        $city->save();

        $location = new Location();
        $location->city_id = $city->id;
        $location->state_id = $state->id;
        $location->country_id = $country->id;
        $location->latitude = 40.44;
        $location->longitude = 80;
        $location->code = '15212';
        $location->address_1 = "100 Main Street";
        $location->save();

        $accommodation = new Accommodation();
        $accommodation->name = "Royal Plaza Hotel";
        $accommodation->location_id = $location->id;// $location->id;
        $accommodation->description = "A modern, 4-star hotel";
        $accommodation->save();

        $room1 = new App\Room();
        $room1->id=1;
        $room1->room_number= 'A01';
        $room1->accommodation_id = $accommodation->id;
        $room1->save();

        $room2 = new App\Room();
        $room2->id=2;
        $room2->room_number= 'A02';
        $room2->accommodation_id = $accommodation->id;
        $room2->save();
    }
}
