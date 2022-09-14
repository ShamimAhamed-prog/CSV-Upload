<?php

namespace App\Imports;

use App\Models\ImportUser;
use Illuminate\Bus\Batch;
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
            'market_id'=>NULL,
            'instrument_id'=>$row['instrument_id'],
            'date'=>Null,
            'open'=>$row['open'],
            'high'=>$row['high'],
            'low'=>$row['low'],
            'close'=>$row['close'],
            'volume'=>$row['volume'],
            'trade'=>NULL,
            'tradevalues'=>NULL,
            'updated'=>NULL,
            'market_instrument'=>$row['ticker'],
            'batch'=>NULL,
        ]);
    }
}
