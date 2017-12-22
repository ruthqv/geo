<?php

namespace geo\geosystem;


use Session;
use geo\geosystem\Models\Country;
use geo\geosystem\Models\Region;
use geo\geosystem\Models\Subegion;
use geo\geosystem\Models\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ZonesController extends Controller {

    public function index()
    {
        $zones = Zone::all();

        return view('geo::admin.zones.index', compact('zones'));
    }

    public function create()
    {

        $zones = Zone::all();

        $countries = Country::all();

        $regions = Region::all();

        return view('geo::admin.zones.create', compact( 'zones', 'countries', 'regions'));
    }

    public function store(Request $request)
    {

        $array = $request->all();

        // Validation
        $this->validate($request, [
            'name' => 'required|min:2|max:45',
        ]);

        // Sanitize input array
        $array['active'] = isset($array['active']) && $array['active'] == 1;

        $created = Zone::create($array);

        if ($created) {
            // Remove Cache
            cache()->flush();

            return redirect(route('admin.zones.index'))->with('alert-success', 'The store has been add successfully.');
        } else {
            return back()->with('alert-danger', 'The store cannot be added, please try again or contact the administrator.');
        }

    }

    public function show($id)
    {
        $zone = Zone::find($id);

        $regions = Region::all();

        $countries = Country::all();

        return view('geo::admin.zones.show', compact('zone', 'regions', 'countries'));

    }

    public function update(Request $request, $id)
    {

        $zone = Zone::find($id);
        $array = $request->all();

        // Validation
        $this->validate($request, [
            'name' => 'required|min:2|max:45,' . $zone['id'],

        ]);

        // Sanitize input array
        $array['active'] = isset($array['active']) && $array['active'] == 1;

        $zone->update($array);

        return redirect(route('admin.zones.index'))->with('alert-success', 'The zone has been updated successfully.');

    }

    public function destroy($id)
    {
        $zone = Zone::find($id);
        $zone->delete();

        return redirect(route('admin.zones.index'))->with('alert-success', 'The zone has been removed successfully.');

    }

}
