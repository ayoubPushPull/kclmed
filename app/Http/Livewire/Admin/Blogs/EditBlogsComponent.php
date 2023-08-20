<?php

namespace App\Http\Livewire\Admin\Blogs;
use Livewire\WithFileUploads;
use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;

class EditBlogsComponent extends Component
{
    use WithFileUploads;

/*****************  Imaaaage ******************* */
    public $slug,$blog,$title,$subtitle,$content,$photo_blog;
 
    public function mount($slug)
    {
        
        $this->blog = Blog::where('slug', $slug)->first();
        $this->title = $this->blog->title;
        $this->subtitle = $this->blog->subtitle;
        $this->content = $this->blog->content;
        $this->photo_blog = $this->blog->photo_blog;
        
    }

    public function update()
    {
        $imagename = Carbon::now()->timestamp . '.' . $this->photo_blog->extension();
        $this->photo_blog->storeAs('dashboard/assets/images/blog/',$imagename);


        $blog = Blog::find($this->appointment->id);
        $blog->title = $this->title;
        $blog->subtitle = $this->subtitle;
        $blog->content = $this->content;
        $blog->photo_blog = $imagename;
        $blog->save();

        $this->emit('update');
        session()->flash('success_message', 'Blog has been successfully Created');
        return redirect()->route('admin-Blogs');
      

    }

    public function render()
    {
        return view('livewire.admin.blogs.edit-blogs-component')->layout('layouts.dashboard_admin');
    }
}
