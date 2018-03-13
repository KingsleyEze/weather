<?php

namespace App\Http\Controllers;

use App\Location;
use App\State;
use App\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class LocationController extends Controller
{

    /**
     * Lists all the locations existing on the system
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        $section = ['Location Manager', 'Location List'];

        return view('admin.locations.index', compact('section'));
    }

    /**
     * Present a view for creating new location
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createLocation(){

        $section = ['Location Manager', 'Create'];

        $viewModel = [];

        $viewModel['stateList'] = State::all();

        return view('admin.locations.create', compact('section', 'viewModel'));
    }


    /**
     * Persist new locations into the database and caches for 2 hours
     * @param Request $request
     */
    public function saveLocation(Request $request){

        $request->validate([
            'state_id' => 'required|unique:locations,state_id',
        ]);

        $stateDb = State::where('id', $request->get('state_id'))->first();

        $stateNameArray = explode(' ', $stateDb['name']);

        $tmp = $stateNameArray[1] == 'State'?'':' '.$stateNameArray[1];

        $state = $stateNameArray[0].$tmp;

        $country = 'Nigeria';

        $json = Utility::getWeatherState($state);


        $location =  new Location();
        $location->state_id = $request->get('state_id');
        $location->country = $country;
        $location->city = $state;
        $location->latitude = $json->current_observation->observation_location->latitude;
        $location->longitude = $json->current_observation->observation_location->longitude;
        $location->elevation = $json->current_observation->observation_location->elevation;
        $location->observation_time = $json->current_observation->observation_time;
        $location->weather = $json->current_observation->weather;
        $location->temperature_string = $json->current_observation->temperature_string;
        $location->temp_f = $json->current_observation->temp_f;
        $location->temp_c = $json->current_observation->temp_c;
        $location->save();


        return redirect('admin/locations');
    }


    public function storeCache($key, $value){

        $expiresAt = now()->addHours(2);

        $status = Cache::put($key, $value, $expiresAt);

        return $status;

    }

    public function getCache($key){

        $value = Cache::pull($key);

        return $value;
    }

}
