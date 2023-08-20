<?php

namespace App\Http\Livewire\Admin\Blogs;
use App\Models\Blog;
use Livewire\Component;

class ShowBlogsComponent extends Component
{
    
    public $Blog;

    public function mount($slug)
    {
        $this->Blog = Blog::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.admin.blogs.show-blogs-component')->layout('layouts.dashboard_admin');
    }
}
