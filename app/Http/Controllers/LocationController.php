<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Coomute\SimpleKML\Parser;
class LocationController extends Controller
{
    public function index()
    {
        return view('kml.kml_import');
    }

   
    // public function import(Request $request)
    // {
    //     // Get uploaded file
    //     $file = $request->file('kml_file');

    //     if ($file->getClientOriginalExtension() === 'kml') {
    //         $kml = new Parser();
    //         $kml->fromFile($file->getPathName());

    //         foreach ($kml->getDocument()->getPlacemarks() as $placemark) {
    //             // Assuming you have a 'places' table
    //             // You might need to adjust this based on your actual database schema
    //            Location::create([
    //                 'name' => $placemark->getName(),
    //                 'latitude' => $placemark->getGeometry()->getLatitude(),
    //                 'longitude' => $placemark->getGeometry()->getLongitude(),
    //             ]);
    //         }

    //         return response()->json(['message' => 'KML data imported successfully']);
    //     } else {
    //         return response()->json(['message' => 'Invalid file type'], 400);
    //     }
    // }
}
