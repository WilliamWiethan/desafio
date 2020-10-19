<?php
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
