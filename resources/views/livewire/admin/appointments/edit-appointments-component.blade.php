<div>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Edit Appointment</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Input new Patient information carefully.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="title nk-block-title">Personal Info</h5>

                                        </div>


                                    </div>
                                    <div class="nk-block">
                                        <div class="row gy-4">
                                            <div class="col-xl-4 col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" wire:model="name">
                                                    </div>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--col-->
                                            <!--col-->

                                            <div class="col-xl-4 col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone-no">Phone</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" class="form-control" wire:model="phone">
                                                    </div>
                                                    @error('phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--col-->

                                            <div class="col-xl-4 col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone-no">Email</label>
                                                    <div class="form-control-wrap">
                                                        <input type="email" class="form-control" wire:model="email">
                                                    </div>
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!--row-->
                                        <div>
                                            <div class="row gy-4  mt-2">
                                                <div class="col-xl-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Date </label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-calendar"></em>
                                                            </div>
                                                            <input type="date" class="form-control date-picker"
                                                                wire:model="date" data-date-format="dd-mm-yyyy"
                                                                placeholder="dd-mm-yyyy">
                                                        </div>
                                                        @error('lname')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="phone-no">Time of
                                                            Appointment</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control"
                                                                wire:model="time">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gy-4 mt-3">

                                                <!--col-->
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <button wire:click="update"class="btn btn-primary">Edit
                                                           </button>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- .card-inner -->


                                    <!--row-->
                                </div>
                            </div><!-- .card-inner -->
                        </div>

                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>

</div>
