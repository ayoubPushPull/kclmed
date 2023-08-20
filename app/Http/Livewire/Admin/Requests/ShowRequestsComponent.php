<?php

namespace App\Http\Livewire\Admin\Requests;

use Illuminate\Support\Str;
use App\Models\DoctorOffice;
use App\Models\Personal;
use App\Models\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ShowRequestsComponent extends Component
{

    public $request;

    public function mount($slug)
    {
        $this->request = Request::where('slug', $slug)->first();
    }


    public function valider() 
    {
        dd($this->request->id);

        $request = Request::find($this->request->id);
        $request->status = 1;
        $request->save();

        $doctoroffice = DoctorOffice::create([
            'slug' => Str::of($this->request->name_cabinet)->slug(),
            'name_cabinet' => $this->request->name_cabinet,
            'email_cabinet' => $this->request->email_cabinet,
            'phone_cabinet' => $this->request->phone_cabinet,
            'address_cabinet' => $this->request->address_cabinet,
            'theme_cabinet' => "rouge",
            'type_id' => $this->request->type_id,
            'plan_id' => $this->request->plan_id,
        ]);

        $personal = Personal::create([
            'slug' => Str::of($this->request->lname .' '. $this->request->fname)->slug(),
            'lname' => $this->request->lname,
            'fname' => $this->request->fname,
            'email_personel' =>$this->request->email,
            'cin' => $this->request->cin,
            'phone_personel' => $this->request->phone,
            'code_doctor' =>$this->request->code_doctor,
            'state' =>$this->request->state,
            'zipcode' =>$this->request->zipcode,
            'address' =>$this->request->address,
            'cabinet_id' =>$doctoroffice->id,
            'has_account' => 1,
        ]);

        $user= User::create([
            'slug' => Str::of($this->request->lname .' '. $this->request->fname)->slug(),
            'name' => $this->request->lname .' '. $this->request->fname,
            'email' => $this->request->email,
            'password' =>Hash::make(123456789),
            'utype' => "USR",
            'personal_id' => $personal->id,
            'role_id' =>1,
        ]);

        session()->flash('success_message', 'Request has been successfully Accepted');
        return redirect()->route('admin-Requests');
    }


    public function refuser()
    {
        $request = Request::find($this->request->id);
        $request->status = 2;
        $request->save();
        session()->flash('danger_message', 'Request has been Refused');
        return redirect()->route('admin-Requests');
    }
    public function render()
    {
        return view('livewire.admin.requests.show-requests-component')->layout('layouts.dashboard_admin');
    }
}
