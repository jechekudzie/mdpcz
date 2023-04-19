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
    public $orderBy = 'Title';
    public $orderAsc = true;
    public $specialty;

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        return view('livewire.public-register', [
            'practitioners' => PractitionersSearch::search($this->search)
                ->Register($this->specialty)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
            'specialities' => Speciality::all(),
        ]);
    }
}
