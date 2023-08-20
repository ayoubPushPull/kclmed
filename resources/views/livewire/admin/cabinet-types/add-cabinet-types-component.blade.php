<div>

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Add Type Office</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered col-md-6 col-lg-6 col-xl-6 col-sm-12">
                            <div class="card-inner">
                                <div class="row gy-4">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="first-name">Type Office</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" wire:model="name">
                                            </div>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div> 
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button wire:click="submitForm"class="btn btn-primary">Add
                                                Type Office</button>
                                        </div>
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                            </div><!-- .card-inner-group -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>

</div>
