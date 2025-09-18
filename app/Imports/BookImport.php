<?php
namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;

class BookImport implements ToModel
{
    public function model(array $row)
    {
        return new Book([
            'rak_id' => $row[0],
            'judul' => $row[1],
            'no_barcode' => $row[2],
            'pengarang' => $row[3],
            'penerbit' => $row[4],
            'thn_terbit' => $row[5],
            'eksemplar' => $row[6],
        ]);
    }
}
