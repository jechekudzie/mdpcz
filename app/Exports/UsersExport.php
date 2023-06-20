<?php

namespace App\Exports;

use App\Models\PractitionersSearch;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    private $practitioners;
    private $headers;

    public function __construct(Collection $practitioners, array $headers = [])
    {
        $this->practitioners = $practitioners;
        $this->headers = $headers;
    }

    public function collection()
    {
        return $this->practitioners->map(function($item) {
            return [
                $item->Title,
                $item->Fullname,
                $item->email_address,
                $item->business_telephone,
                $item->specialty,
            ];
        });
    }

    public function headings(): array
    {
        if (count($this->headers) > 0) {
            return $this->headers;
        }

        return ['Title', 'Name', 'Email', 'Phone', 'Specialty'];
    }
}
