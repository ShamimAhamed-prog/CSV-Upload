<?php

namespace App\Imports;

use App\Models\ImportUser;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ImportUser([
            'ticker'=>$row['ticker'],
            'date'=>$row['date'],
            'open'=>$row['open'],
            'high'=>$row['high'],
            'low'=>$row['low'],
            'close'=>$row['close'],
            'volume'=>$row['volume'],
            'open_interest'=>$row['open_interest'],
        ]);
    }
}
