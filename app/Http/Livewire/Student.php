<?php

namespace App\Http\Livewire;

use App\Models\Student as ModelsStudent;
use Livewire\Component;

class Student extends Component
{
    public $ids;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    

    public function resetInput()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';

    }

    public function store()
    {
        $validateData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        ModelsStudent::create($validateData);
        session()->flash('message','Student created successfully!');
        $this->resetInput();
        $this->emit('StudentAdded');
    }

    public function edit($id)
    {
        $student = ModelsStudent::where('id',$id)->first();
        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }

    public function update()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        if($this->ids)
        {
            $student = ModelsStudent::find($this->ids);
            $student->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->firstname

            ]);
            session()->flash('message','Student updated Successfully!');
            $this->resetInput();
            $this->emit('studentUpdated');
        }
    }
    
    public function delete($id)
    {
        if($id)
        {
            ModelsStudent::where('id',$id)->delete();
            session()->flash('message','student delete successfully!');
        }
    }
    public function render()
    {
        $student = ModelsStudent::orderBy('id','DESC')->get();
        return view('livewire.student',compact('student'));
    }
}
