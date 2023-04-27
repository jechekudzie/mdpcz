<?php

namespace App\Http\Livewire;


use App\Models\PractitionersSearch;
use App\Models\Speciality;
use Livewire\Component;
use Livewire\WithPagination;

class PublicRegister extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    public $search;
    public $orderBy = 'Fullname';
    public $orderAsc = true;
    public $specialty;

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $practitioners = collect([]);

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
