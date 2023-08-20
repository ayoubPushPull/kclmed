<?php

namespace App\Http\Livewire\Admin\Blogs;

use App\Models\Appointment;
use App\Models\Blog;
use App\Models\DoctorOffice;
use App\Models\Request;
use App\Models\User;
use Livewire\Component;

class BlogsComponent extends Component
{
    public $uid ;
    public $searchTerm;
  
    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $blogs = Blog::find($this->uid);
        $blogs->delete = 1;
        $blogs->save();
        $this->emit('delete');
        $message = "Blog has been deleted successfully";
        session()->flash('danger_message', $message);
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $blogs = Blog::where('title', 'LIKE', $searchTerm)->where('delete', 0)->orderBy('id', 'ASC')->paginate(1000);
        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.admin.blogs.blogs-component',compact('blogs','users','doctoroffices','request','appointment'))->layout('layouts.dashboard_admin');
    }
}
