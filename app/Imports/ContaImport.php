<?php

// namespace App\Imports;

// use Illuminate\Database\QueryException;
// use App\Models\Conta;
// use PDOException;
// use Exception;
// use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

// class ContaImport implements ToModel, WithCustomCsvSettings, WithHeadingRow
// {
//     /**
//      * @param array $row
//      *
//      * @return \Illuminate\Database\Eloquent\Model|null
//      */
//     public function model(array $row)
//     {



//         // try {
//         //     return new Conta([
//         //         'cpf' => $row['cpf'],
//         //         'conta' => $row['conta'],
//         //         'tipo' => $row['tipo'],
//         //         'agencia' => $row['agencia']
//         //     ]);
//         // } catch (QueryException $e) {

//         // } catch (Exception $e) {

//         // } catch (PDOException $e){

//         // }
//     }

//     public function getCsvSettings(): array
//     {
//         return ['delimiter' => ";"];
//     }
// }

namespace App\Imports;

use Exception;
use App\Models\Conta;
use Illuminate\Support\Collection;
use Illuminate\Database\QueryException;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;


class ContaImport implements ToCollection, WithCustomCsvSettings, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            //dd($row);
            try {
                Conta::insertOrIgnore([
                    'cpf' => $row['cpf'],
                    'conta' => $row['conta'],
                    'tipo' => $row['tipo'],
                    'agencia' => $row['agencia']
                ]);
            } catch (QueryException $e) {
                throw new Exception($e->getMessage());
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        }
    }

    public function getCsvSettings(): array
    {
        return ['delimiter' => ";"];
    }
}
