
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Edit Plan</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner"> 
                            <div class="row gy-4">
                                <div class="col-xxl-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="first-name">Name Plan</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="name">
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-xxl-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="last-name">Subtitle</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="subtitle">
                                        </div>
                                        @error('subtitle')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-xxl-12 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="last-name">Description</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control" wire:model="description" rows="6"></textarea>

                                        </div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <!--col-->


                                <div class="col-xxl-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Color</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" wire:model="color">
                                        </div>
                                        @error('color')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-xxl-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="password">Price</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" wire:model="price">
                                        </div>
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                        
                                <div class="row gy-4 mt-3">

                                    <div class="col-12">
                                        <div class="form-group">

                                            <button wire:click="update"class="btn btn-primary">Edit
                                                </button>
                                        </div>
                                    </div>
                                    <!--col-->
                                </div>

                            </div>
                            <!--row-->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>