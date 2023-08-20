<?php

namespace App\Http\Livewire\Admin\Blogs;
use App\Models\Blog as Blogs;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddBlogsComponent extends Component
{
    
    public $title,$subtitle,$content,$photo_blog;
 
  
    use WithFileUploads;

    public function submitForm()
    {

        $validatedData = $this->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'photo_blog' => 'required',
         

        ]);

        $imagename = Carbon::now()->timestamp . '.' . $this->photo_blog->extension();
        $this->photo_blog->storeAs('dashboard/assets/images/blog/',$imagename);

        

       Blogs::create([

           'slug' => Str::of($this->title)->slug(),
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content,
            'photo_blog' => $imagename,
      
        ]);

    
        session()->flash('success_message', 'Admin has been successfully Created');
        return redirect()->route('admin-Blogs');
      
    }
 
    public function render()
    {
        return view('livewire.admin.blogs.add-blogs-component')->layout('layouts.dashboard_admin');
    }
}
