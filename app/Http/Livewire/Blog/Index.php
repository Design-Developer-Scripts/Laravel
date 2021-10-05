<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;

    public $searchTerm = '';

    public function render()
    {
        if(isset($this->searchTerm) && !empty($this->searchTerm)){
            //Suchbegriff wurde eingegeben.
            $content = Blog::select()->where('title','LIKE','%'.$this->searchTerm.'%')->orderBy('created_at', 'desc')->paginate(25);
        }else{
            $content = Blog::select()->orderBy('created_at', 'desc')->paginate(25);
        }
        return view('livewire.blog.index',compact('content'));
    }

    public function delete(int $id){
        
        if(Blog::find($id)->delete()){
            session()->flash('flash.banner', 'Eintrag wurde Erfolgreich gelöscht.');
            session()->flash('flash.bannerStyle', 'success');
        }else{
            session()->flash('flash.banner', 'Fehler beim löschen des Eintrags.');
            session()->flash('flash.bannerStyle', 'danger');
        }
        #('dashboard.blog.index');
    }

    public function statusFalse($id){
        Blog::where('id',$id)->update([
            'status' => false,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function statusTrue($id){
        Blog::where('id',$id)->update([
            'status' => true,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
