<div>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Update Payment</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Prix Payé">Prix Payé</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" wire:model="prix_payé" >
                                        </div>
                                        @error('prix_payé')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Prix Reste">Prix Reste</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" wire:model="prix_reste" >
                                        </div>
                                        @error('prix_reste')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="Session Id">Session Id</label>
                                        <div class="form-control-wrap">
                                             <select wire:model="seance_id" class="form-control">
                                                                    @foreach ($seance as $item )
                                                    <option value="{{ $item->id }}">{{ $item->seance_id}}</option>
                                                                     @endforeach
                                            </select>
                                        </div>
                                        @error('seance_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                            
                                </div><!--col-->
                               
                                <div class="col-xxl-3 col-md-4">
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
                                  <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="forme" >Cabinet Id</label>
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
                                    </div>
                                </div><!--col-->
                            
                                <div class="col-12">
                                    <div class="form-group">
                                      
                                        <button wire:click="update"class="btn btn-primary">Update</button>
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