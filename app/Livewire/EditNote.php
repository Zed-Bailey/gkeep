<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class EditNote extends Component
{
    public $id;
    public Note $note;

    public $title;
    public $body;

    public function mount() {
        $this->id = request()->route('id');
        $this->note = Note::find($this->id);
        $this->title = $this->note->title;
        $this->body = $this->note->body;
    }
    
    public function navigate() {
        return $this->redirect("/");
    }

    public function discard() {
        return $this->navigate();
    }

    public function delete() {
        $this->note->delete();
        return $this->navigate();
    }

    public function save() {
        $this->note->title = $this->title;
        $this->note->body = $this->body;
        $this->note->save();

        return $this->navigate();
    }

    public function changedColour($colour) {
        $this->note->colour = $colour;
        $this->note->save();
    }
    
    public function render()
    {
        return view('livewire.edit-note');
    }
}
