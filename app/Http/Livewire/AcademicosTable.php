<?php

namespace App\Http\Livewire;

use App\Models\Academico;
use Livewire\Component;

class AcademicosTable extends Component
{
    public function render()
    {
        return view('livewire.academicos-table',[
            'academicos'=>Academico::paginate()
        ]);
    }
}
