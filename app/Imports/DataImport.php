<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'dni' => $row[0],
            'nombres'  => $row[1],
            'a_paterno' => $row[2],
            'a_materno' => $row[3],
            'fecha_emision' => $this->formatDate(trim($row[5])),
            'codigo_verificador' => $row[6],
            'estado'=>1
        ]);
    }
    private function formatDate($date)
    {
        try {
            if (is_numeric($date)) {
                return \Carbon\Carbon::instance(
                    \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($date)
                )->format('Y-m-d');
            }
            return \Carbon\Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
        } catch (\Exception $e) {
            return null;
        }
    }

}
