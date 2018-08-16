<?php

namespace App\Exports;

use App\Result;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ResultsExport implements FromCollection, WithHeadings, ShouldAutoSize
{

    public function headings(): array
    {
        return [
            'id',
            'Name',
            'Email',
            "Activist",
            "Alt",
            "Demystifier",
            "Motivator",
            "Professional",
            "Professor",
            "Spirit_guide",
            "Taste_maker",
            "Teacher",
            "Techie",
            "Trendsetter",
            "Watchdog",
            'Protect',
            'Empower',
            'created At',
            'Updated At'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Result::all();
    }
}
