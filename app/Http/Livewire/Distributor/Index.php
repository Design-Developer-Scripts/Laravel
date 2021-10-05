<?php

namespace App\Http\Livewire\Distributor;

use App\Models\Distributor;
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
            $content = Distributor::select()->where('name','LIKE','%'.$this->searchTerm.'%')->orderBy('created_at', 'desc')->paginate(25);
        }else{
            $content = Distributor::select()->orderBy('created_at', 'desc')->paginate(25);
        }

        return view('livewire.distributor.index',compact('content'));
    }

    public function delete(int $id){
        
        if(Distributor::find($id)->delete()){
            session()->flash('flash.banner', 'Eintrag wurde Erfolgreich gelöscht.');
            session()->flash('flash.bannerStyle', 'success');
        }else{
            session()->flash('flash.banner', 'Fehler beim löschen des Eintrags.');
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('dashboard.distributor.index');
    }
}
