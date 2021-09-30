<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $searchTerm = '';

    public function render(){

        if(isset($this->searchTerm) && !empty($this->searchTerm)){
            //Suchbegriff wurde eingegeben.
            $content = User::select()->where('name','LIKE','%'.$this->searchTerm.'%')->orderBy('created_at', 'desc')->paginate(25);
        }else{
            $content = User::select()->orderBy('created_at', 'desc')->paginate(25);
        }

        return view('livewire.user.index',compact('content'));
    }

    public function delete(int $id){
        
        if(User::find($id)->delete()){
            session()->flash('flash.banner', 'Eintrag wurde Erfolgreich gelöscht.');
            session()->flash('flash.bannerStyle', 'success');
        }else{
            session()->flash('flash.banner', 'Fehler beim löschen des Eintrags.');
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('user.index');
    }

    public function statusFalse($id){
        User::where('id',$id)->update([
            'status' => false,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function statusTrue($id){
        User::where('id',$id)->update([
            'status' => true,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
