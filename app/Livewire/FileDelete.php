<?php

namespace App\Livewire;

use App\Models\FileUpload;
use Livewire\Component;

class FileDelete extends Component
{

    public $file;

    public function mount($id){
        $this->file = FileUpload::find($id);
    }

    public function delete(){
        $this->file->delete();
        return redirect('admin/files');
    }

    public function render()
    {
        return view('livewire.file-delete');
    }
}
