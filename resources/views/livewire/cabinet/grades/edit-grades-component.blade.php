<div>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Update Grade</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-xxl-4 col-md-6">
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
                                <div class="col-xxl-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="User Id">User Id </label>
                                        <div class="form-control-wrap">
                                            <select wire:model="user_id" class="form-control">
                                                                    @foreach ($user as $item )
                                                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                                                                     @endforeach
                                            </select>
                                        </div>
                                        @error('user_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div></div>
                                    <div class="col-xxl-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="Description">Description</label>
                                        <div class="form-control-wrap">
                                            <textarea row="6" class="form-control" wire:model="description" ></textarea>
                                        </div>
                                        @error('description')
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