<div>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Add Personal</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="First Name">First Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="fname" >
                                        </div>
                                        @error('fname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Last Name">Last Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="lname" >
                                        </div>
                                        @error('lname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                  <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                 <label class="form-label" for="Gender">Gender</label>  
                                    <div class="form-control-wrap">
                                           <select wire:model="gender" class="form-control">
                                                <option>--Choose Your Gender--</option>
                                                <option>Female</option>                     
                                                <option>Male</option>                           
                                            </select>
                                        </div>
                                        @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror    
                                    </div></div>
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="Date Birth">Date Birth </label>
                                        <div class="form-control-wrap">
                                            <input type="date" class="form-control" wire:model="date_birth" >
                                        </div>
                                        @error('date_birth')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div></div>
                                    <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="CIN">CIN</label>
                                        <div class="form-control-wrap">
                                            <input type="email" class="form-control" wire:model="cin" >
                                        </div>
                                        @error('cin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div></div>
                                        <div class="col-xxl-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="Email Personel">Email Personel</label>
                                        <div class="form-control-wrap">
                                            <input type="email" class="form-control" wire:model="email_personel" >
                                        </div>
                                        @error('email_personel')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col--> 
                                   <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="Phone Personel">Phone Personel</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="phone_personel" >
                                        </div>
                                        @error('phone_personel')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="State">State</label>
                                        <div class="form-control-wrap">
                                        <select wire:model="state" class="form-control">
                                                <option>--Choose Your State--</option>
                                                <option>Tanger-Tétouan-Al Hoceïma</option>                     
                                                <option>L'Oriental</option>
                                                <option>Fès-Meknès</option>
                                                <option>Rabat-Salé-Kénitra</option>
                                                <option>Béni Mellal-Khénifra</option> 
                                                 <option>Casablanca-Settat</option>                     
                                                <option>Marrakech-Safi</option>
                                                <option>Drâa-Tafilalet</option>
                                                <option>Souss-Massa</option>
                                                <option>Guelmim-Oued Noun</option>
                                                <option>Laâyoune-Sakia El Hamra</option>
                                                <option>Dakhla-Oued Ed-Dahab</option>                          
                                            </select>
                                        </div>
                                        @error('state')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->

                                 <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="City">City</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="city">
                                        </div>
                                        @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                 <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Code Doctor</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="code_doctor">
                                        </div>
                                        @error('code_doctor')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                 <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Zip Code">Zip Code</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="zipcode">
                                        </div>
                                        @error('zipcode')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                 <div class="col-xxl-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="Address">Address</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="address">
                                        </div>
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="Profession">Profession</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="profession">
                                        </div>
                                        @error('profession')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Facebook">Facebook</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="facebook">
                                        </div>
                                        @error('facebook')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                   <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Instagram">Instagram</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="instagram">
                                        </div>
                                        @error('instagram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                   <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Linkedin">Linkedin</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="linkedin">
                                        </div>
                                        @error('linkedin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                   <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Twitter">Twitter</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="twitter">
                                        </div>
                                        @error('twitter')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                               
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="Date Embauche">Date Embauche</label>
                                        <div class="form-control-wrap">
                                            <input type="date" class="form-control"  wire:model="date_embauche">
                                        </div>
                                        @error('date_embauche')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div></div>

                                      <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="Salaire">Salaire</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control"  wire:model="salaire">
                                        </div>
                                        @error('salaire')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div></div>   
                                       <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="Cabinet Id">Cabinet Id</label>
                                        <div class="form-control-wrap">
                                            <select wire:model="cabinet_id" class="form-control">
                                                    <option>--Choose Your Cabinet--</option>
                                                                    @foreach ($doctorOffice as $item )
                                                    <option value="{{ $item->id }}">{{ $item->name_cabinet}}</option>
                                                                     @endforeach
                                            </select>
                                        </div>
                                        @error('cabinet_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div></div>   
             <div class="col-12">
                                    <div class="form-group">
                                      
                                        <button wire:click="submitForm"class="btn btn-primary">Add</button>
                                    </div>
                                </div><!--col-->
                           

                            </div><!--row-->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@push('scripts')

<link rel="stylesheet" href="{{ asset('dashboard/assets/css/editors/quill.css?ver=3.1.2') }}">
<script src="{{ asset('dashboard/assets/js/libs/editors/quill.js?ver=3.1.2') }}"></script>
<script src="{{ asset('dashboard/assets/js/editors.js?ver=3.1.2') }}"></script>
    
@endpush
</div>