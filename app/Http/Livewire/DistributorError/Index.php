<?php

namespace App\Http\Livewire\DistributorError;

use App\Models\DistributorError;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $searchTerm = '';

    public function render()
    {
        if(isset($this->searchTerm) && !empty($this->searchTerm)){
            //Suchbegriff wurde eingegeben.
            $content = DistributorError::select()->where('name','LIKE','%'.$this->searchTerm.'%')->orderBy('created_at', 'desc')->paginate(25);
        }else{
            $content = DistributorError::select()->orderBy('created_at', 'desc')->paginate(25);
        }

        return view('livewire.distributor-error.index',compact('content'));
    }

    public function delete(int $id){
        
        if(DistributorError::find($id)->delete()){
            session()->flash('flash.banner', 'Eintrag wurde Erfolgreich gelöscht.');
            session()->flash('flash.bannerStyle', 'success');
        }else{
            session()->flash('flash.banner', 'Fehler beim löschen des Eintrags.');
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('dashboard.distributorerror.index');
    }
}
