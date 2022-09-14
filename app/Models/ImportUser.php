<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ImportUser extends Model
{
    use HasFactory;
    
    protected $table="users";
    
    protected $fillable=['ticker','date','open','high','low','close','volume','open_interest'];
    
    public static function getUser()
    {
            $records=DB::table('users')->select('id','ticker','date','open','high','low','close','volume','open_interest');
            return $records;
    }
}
