<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentComponent extends Component
{
    protected $listeners = ['destroy'];

    public function destroy($id){
        Student::destroy($id);
    }
    public function render()
    {
        $students = Student::all();
        
        return view('livewire.student-component', compact('students'));
    }
}
