<div>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Update Patient</h3>
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
                                        <label class="form-label" for="Code Assurance">Code Assurance</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="code_assur">
                                        </div>
                                        @error('code_assur')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                      <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Phone Personel">Phone Personel</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="phone" >
                                        </div>
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                
                                        <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Age" >Age</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" wire:model="age" >
                                        </div>
                                        @error('age')
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
                                <div class="col-xxl-3 col-md-4">
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
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="Type Assurance">Type Assurance</label>
                                        <div class="form-control-wrap">
                                            <select wire:model="type_assur_id" class="form-control">
                                                    <option>--Choose Your Type Assurance--</option>
                                                                    @foreach ($assurance as $item )
                                                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                                                                     @endforeach
                                            </select>
                                        </div>
                                        @error('type_assur_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col--> 
                                       <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="Cabinet Id">Cabinet Id</label>
                                        <div class="form-control-wrap">
                                              <select wire:model="cabinet_id" class="form-control">
                                                    <option>--Choose Your Cabinet--</option>
                                                                    @foreach ($cabinet as $item )
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
                                      
                                        <button wire:click="update" class="btn btn-primary">Update</button>
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