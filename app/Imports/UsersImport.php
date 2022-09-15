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
            'market_id'=>$row['market_id'],
            'instrument_id'=>$row['instrument_id'],
            'date'=>$row['date'],
            'open'=>$row['open'],
            'high'=>$row['high'],
            'low'=>$row['low'],
            'close'=>$row['close'],
            'volume'=>$row['volume'],
            'trade'=>$row['trade'],
            'tradevalues'=>$row['tradevalues'],
            'updated'=>$row['updated'],
            'market_instrument'=>$row['market_instrument'],
            'batch'=>$row['batch'],
        ]);
    }
}
