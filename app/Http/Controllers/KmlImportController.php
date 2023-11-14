<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KmlImportController extends Controller
{





public function index() 
    
    {
        return view('kml.kml_import');
    }

    public function store(Request $request){
 
             $file = $request->file('location');

    if ($file->getClientOriginalExtension() === 'kmz') {
        $zip = new \ZipArchive;
        $res = $zip->open($file->path());

        if ($res === TRUE) {
            $zip->extractTo(public_path('location_temp')); // Change this line

            // Assuming you have code to parse the KML file here
            $parsedData = $this->parseKML(public_path('location_temp'));

            if (!empty($parsedData)) {
                $this->insertDataIntoDatabase($parsedData);
                return 'KML data imported successfully';
            } else {
                return 'Error parsing KML file';
            }
        } else {
            return 'Error extracting KMZ file';
        }
    } else {
        return 'Invalid file format. Please upload a KMZ file.';
    }
}

public function parseKML($path)
{
    $kmlData = [];

    $xml = simplexml_load_file($path);

    foreach ($xml->Document->Placemark as $placemark) {
        $name = (string) $placemark->name;
        $coordinates = (string) $placemark->Point->coordinates;

        list($longitude, $latitude, $altitude) = explode(',', $coordinates);

        $kmlData[] = [
            'name' => $name,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'altitude' => $altitude,
        ];
    }

    return $kmlData;

}
public function insertDataIntoDatabase($data)
{
    foreach ($data as $entry) {
        DB::table('location')->insert([
            'name' => $entry['name'],
            'latitude' => $entry['latitude'],
            'longitude' => $entry['longitude'],
            'altitude' => $entry['altitude'],
            // 'altitude' => $entry['altitude'],
            // Add other fields as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
    }
    // {  dd($request);
    //     $request->validate([
    //         'file' => 'required|mimes:kml'
    //     ]);

    //     $file = $request->file('file')->getRealPath();

    //     // Step 1: Read the KML file
    //     $kml = simplexml_load_file($file);
    //     $data = [];

    //     foreach ($kml->Document->Placemark as $placemark) {
    //         $name = (string) $placemark->name;
    //         $coordinates = (string) $placemark->Point->coordinates;
    //         [$lon, $lat] = explode(',', $coordinates);

    //         $data[] = [
    //             'name' => $name,
    //             'longitude' => $lon,
    //             'latitude' => $lat
    //         ];
    //     }

        // Step 2: Import data into the database
    //     DB::table('location')->insert($data);

    //     return redirect('/')->with('success', 'Data imported successfully');
    // }


// }