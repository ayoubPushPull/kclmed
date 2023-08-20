<div>
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Session Details</h3>
                                        </div>
                                    </div>
                                </div><!--.nk-block-head-->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-content">
                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                            <h5 class="title">Session Information</h5>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="row gy-5">
                                                            <div class="col-md-4 col-lg-4 col-9">
                                                                <div class="profile-stats">
                                                                    <span class="profile-ud-label">Acte Seance</span>
                                                                    <span>{{$seance->acte_seance}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4  col-9">
                                                                <div class="profile-stats">
                                                                    <span class="profile-ud-label">Numero Seance</span>
                                                                    <span>{{$seance->num_seance}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4  col-9">
                                                                <div class="profile-stats">
                                                                    <span class="profile-ud-label">Prix totale</span>
                                                                    <span>{{$seance->prix_total}}</span>
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
                                                                    <span class="profile-ud-label">Patient Name</span>
                                                                    <span>{{$seance->patient->fname}}{{$seance->patient->lname}}</span>
                                                                </div>
                                                            </div>
                                                             <div class="col-md-4 col-lg-4 col-9">
                                                                <div class="profile-stats">
                                                                    <span class="profile-ud-label">Cabinet Name</span>
                                                                    <span>{{$seance->doctorOffice->name_cabinet}}</span>
                                                                </div>
                                                                </div>
                                                            <div class="col-md-4 col-lg-4 col-9">
                                                                <div class="profile-stats">
                                                                    <span class="profile-ud-label">Status</span>
                                                                    <span class="badge bg-primary">Primary</span>
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
