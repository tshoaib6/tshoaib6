<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel\Concerns\WithHeadings;


class EmployeeContactExport implements FromCollection
{

    public function headings():array{
        return[
            'name',
            'lname',
            'phone_no',
            'email',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()

    {
        $foo = new Employee();
 $foo->getContacts();
        return collect($foo);
    }
}
