<?php

namespace App\Http\Controllers;

use App\Imports\FarmProfileImport;
use App\Imports\ImportAgricDistrict;
use App\Imports\ImportFarmProfile;
use App\Imports\ImportMachineriesUsed;
use App\Imports\ImportMachineriesUseds;
use App\Imports\ImportMultipleFile;
use App\Imports\ImportUser;
use App\Imports\PersonalInformationsImport;
use App\Models\FarmProfile;
use App\Models\MultipleFile;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
 
class FileController extends Controller
{
    public function MultiFiles(){
       
        return view('multifile.import');
    }
    public function saveUploadForm(Request $request){
        // dd($request->file('upload_file'));
        $uploadFile= $request-> file('upload_file');
        Excel::import(new ImportMultipleFile(),$uploadFile);
        return back()->withStatus('Excel File Imported Successfully');
    }
}
