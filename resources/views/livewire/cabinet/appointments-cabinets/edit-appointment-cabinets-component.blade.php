<div>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Update Appointment</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
               <div class="row gy-4">
                                <div class="col-xxl-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="Title">Title</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="title" >
                                        </div>
                                        @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="DateTime">DateTime</label>
                                        <div class="form-control-wrap">
                                            <input type="datetime-local" class="form-control" wire:model="datetime" >
                                        </div>
                                        @error('datetime')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="Date">Date</label>
                                        <div class="form-control-wrap">
                                            <input type="date" class="form-control" wire:model="date" >
                                        </div>
                                        @error('date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div></div>
                                 <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="Time">Time</label>
                                        <div class="form-control-wrap">
                                            <input type="time" class="form-control" wire:model="time" >
                                        </div>
                                        @error('time')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Patient Cin">Patient Cin</label>
                                        <div class="form-control-wrap">
                                             <select wire:model="patient_cin" class="form-control">
                                                                    @foreach ($patient as $item )
                                                    <option value="{{ $item->id }}">{{ $item->cin}}</option>
                                                                     @endforeach
                                            </select>
                                        </div>
                                        @error('patient_cin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                  <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Patient Id">Patient Id</label>
                                        <div class="form-control-wrap">
                                           <select wire:model="patient_id" class="form-control">
                                                                    @foreach ($patient as $item )
                                                    <option value="{{ $item->id }}">{{ $item->lname}} {{$item->fname}}</option>
                                                                     @endforeach
                                            </select>
                                        </div>
                                        @error('patient_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="Cabinet Id">Cabinet Id</label>
                                        <div class="form-control-wrap">
                                            <select wire:model="cabinet_id" class="form-control">
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
                                        <button wire:click="update"class="btn btn-primary">Update</button>
                                    </div>
                                </div><!--col-->

                            </div><!--row-->
        </div>
    </div>
</div>

@push('scripts')

<link rel="stylesheet" href="{{ asset('dashboard/assets/css/editors/quill.css?ver=3.1.2') }}">
<script src="{{ asset('dashboard/assets/js/libs/editors/quill.js?ver=3.1.2') }}"></script>
<script src="{{ asset('dashboard/assets/js/editors.js?ver=3.1.2') }}"></script>
    
@endpush

</div>
