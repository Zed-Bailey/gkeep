<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class Notes extends Component
{
    public $selectedColour = '';
    public $newNoteTitle = '';
    public $newNoteBody = '';


    public function mount() {
        $this->selectedColour =  Note::$noteColours[0];
    }



    public function render()
    {
        return view('livewire.notes', [
            'colours' => Note::$noteColours,
            'userNotes' => Note::all()
        ]);
    }

    public function saveClicked() {
        $note = new Note;
        $note->title = $this->newNoteTitle;
        $note->body = $this->newNoteBody;
        $note->colour = $this->selectedColour;
        
        $note->save();

        $this->newNoteTitle = '';
        $this->newNoteBody = '';
    }

    public function changedColour($newColour) {
        $this->selectedColour = "$newColour";
    }
}
