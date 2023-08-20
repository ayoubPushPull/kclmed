<div>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Medication Details</h3>
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
                                                <h5 class="title">Medication Information</h5>
                                            </div><!-- .nk-block-head -->
                                            <div class="row gy-5">
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Reference</span>
                                                        <span>{{ $Medication->reference_no }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4  col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Name</span>
                                                        <span>{{ $Medication->name }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4  col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Description</span>
                                                        <span>{{ $Medication->description }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4  col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Price</span>
                                                        <span>{{ $Medication->price }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Prescription</span>
                                                        <span>{{ $Medication->prescription }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Producing Company</span>
                                                        <span>{{ $Medication->producing_company }}</span>
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
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Type</span>
                                                        <span>{{ $Medication->type }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Forme</span>
                                                        <span>{{ $Medication->forme }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Category Name</span>
                                                        <span>{{ $Medication->medicationcat->name }}</span>
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
