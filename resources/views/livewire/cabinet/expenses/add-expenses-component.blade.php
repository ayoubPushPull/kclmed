<div>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Add Expense</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-xxl-6 col-md-12">
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
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Amount">Amount</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" wire:model="amount" >
                                        </div>
                                        @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                            
                                </div><!--col-->
                               
                                <div class="col-xxl-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="Note">Note</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  wire:model="note">
                                        </div>
                                        @error('note')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                  <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="forme" >Cabinet Id</label>
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
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="User Id">User Id</label>
                                        <div class="form-control-wrap">
                                           <select wire:model="user_id" class="form-control">
                                                    <option>--Choose Your User--</option>
                                                                    @foreach ($user as $item )
                                                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                                                                     @endforeach
                                            </select>
                                        </div>
                                        @error('user_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="Categorie Expense">Categorie Expense</label>
                                        <div class="form-control-wrap">
                                             <select wire:model="id_categorie_expenses" class="form-control">
                                                    <option>--Choose Your Categorie--</option>
                                                                    @foreach ($categorie as $item )
                                                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                                                                     @endforeach
                                            </select>
                                        </div>
                                        @error('id_categorie_expenses')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div><!--col-->
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