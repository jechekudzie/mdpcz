<?php

namespace App\Http\Livewire;


use App\Models\PractitionersSearch;
use App\Models\Speciality;
use Livewire\Component;

use Livewire\WithPagination;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class PublicRegister extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    public $search;
   public $orderBy = 'Fullname';
    public $orderAsc = true;
    public $specialty;

    public $exporting = false; // Define the $exporting property

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function exportToExcel()
    {
        $practitioners = PractitionersSearch::search($this->search)
            ->Register($this->specialty)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            ->get();

        return Excel::download(new UsersExport($practitioners), 'practitioners.xlsx');
    }

    public function render()
    {
        $practitioners = collect([]);
        $fileName = 'practitioners.xlsx';

            // Render the page
            if (!empty($this->search)) {
                $practitioners = PractitionersSearch::search($this->search)
                    ->Register($this->specialty)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);
            }

            return view('livewire.public-register', [
                'practitioners' => $practitioners,
                'specialities' => Speciality::all(),
            ]);
        }

}
