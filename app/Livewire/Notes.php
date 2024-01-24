<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        return view('livewire.notes', [
            'colours' => Note::$noteColours,
            'userNotes' => $user->notes
        ]);
    }

    public function saveClicked() {
        $user = Auth::user();

        $note = new Note;
        $note->title = $this->newNoteTitle;
        $note->body = $this->newNoteBody;
        $note->colour = $this->selectedColour;

        $user->notes()->save($note);

        $this->newNoteTitle = '';
        $this->newNoteBody = '';
    }

    public function delete(Note $note) {
        $note->delete();
    }

    public function goToEdit($id) {
        return $this->redirect("/notes/$id", navigate: true);
    }

    public function changedColour($newColour) {
        $this->selectedColour = "$newColour";
    }
}
