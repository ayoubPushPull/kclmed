<div>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Doctor Office Details</h3>
                            </div>
                        </div>
                    </div>
                    <!--.nk-block-head-->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-aside-wrap">
                                <div class="card-content">
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                <h5 class="title">Doctor Office Information</h5>
                                            </div><!-- .nk-block-head -->
                                            <div class="row gy-5">
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Name Cabinet</span>
                                                        <span>{{ $DoctorOffice->name_cabinet }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6  col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Phone Cabinet</span>
                                                        <span>{{ $DoctorOffice->phone_cabinet }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6  col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Email Cabinet</span>
                                                        <span>{{ $DoctorOffice->email_cabinet }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Address Cabinet</span>
                                                        <span>{{ $DoctorOffice->address_cabinet }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block -->
                                        <div class="nk-divider divider md"></div>
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                <h5 class="title">Additional Information</h5>
                                            </div><!-- .nk-block-head -->
                                            <div class="row gy-4">

                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Rdv Min</span>
                                                        <span>{{ $DoctorOffice->rdv_min }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Type Cabinet</span>
                                                        <span>{{ $DoctorOffice->typeCabinet->name }}</span>
                                                    </div>
                                                </div>
                                                 <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Plan Cabinet</span>
                                                        <span>{{ $DoctorOffice->plan->name }}</span>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Status</span>
                                                        <span class="badge bg-primary">Active</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-content -->
                            </div><!-- .card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>

    </div>
