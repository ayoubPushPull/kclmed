<div>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Update Medication</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Reference No">Reference No</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="reference_no" >
                                        </div>
                                        @error('reference_no')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="name" >
                                        </div>
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="Description">Description</label>
                                        <div class="form-control-wrap">
                                            <textarea row="3" class="form-control" wire:model="description" ></textarea>
                                        </div>
                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                            
                                </div><!--col-->
                               
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Price">Price</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="price">
                                        </div>
                                        @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Producing Company">Producing Company</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="producing_company">
                                        </div>
                                        @error('producing_company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="Prescription">Prescription</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="prescription">
                                        </div>
                                        @error('prescription')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                               
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Type">Type</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="type">
                                        </div>
                                        @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="forme" >Forme</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="forme">
                                        </div>
                                        @error('forme')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                             <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Category Id" >Category Id</label>
                                        <div class="form-control-wrap">
                                        <select wire:model="categorie_id" class="form-control">
                                                                    @foreach ($categorie as $item )
                                                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                                                                     @endforeach
                                            </select>
                                        </div>
                                        @error('categorie_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                 <div class="col-xxl-4 col-md-6">
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
                                              
                                <div class="col-xxl-6 col-md-12" wire:ignore>
                                    <div class="form-group">
                                        <label class="form-label">Logo Medication</label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file"  class="form-file-input"  wire:model.lazy="photo_medicament">
                                                <label class="form-file-label" for="nid">Choose Logo </label>
                                             {{--     <p>{{ $logo_cabinet }}</p> --}}
                                            </div>
                                        </div>
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