<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportUserController extends Controller
{
    public function importForm(){

        return View('import-form');
    }
    public function Import( Request $request){
        Excel::import(new UsersImport, $request->file('file'));
        return "User Imported Successfully";
    }
}
