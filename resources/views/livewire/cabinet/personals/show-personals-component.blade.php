
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Personal Details</h3>
                                        </div>
                                    </div>
                                </div><!--.nk-block-head-->
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
                                                <h5 class="title">Personal Information</h5>
                                            </div><!-- .nk-block-head -->
                                            <div class="row gy-5">
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Full Name</span>
                                                        <span>{{ $personal->fname }} {{ $personal->lname }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4  col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Gender</span>
                                                        <span>{{ $personal->gender }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4  col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Date Brith</span>
                                                        <span>{{ $personal->date_birth }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4  col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Cin</span>
                                                        <span>{{ $personal->cin }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Phone Personel</span>
                                                        <span>{{ $personal->phone_personel }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Email Personal</span>
                                                        <span>{{ $personal->email_personel }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">State</span>
                                                        <span>{{ $personal->state }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">City</span>
                                                        <span>{{ $personal->city }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Code Doctor</span>
                                                        <span>{{ $personal->code_doctor }}</span>
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
                                                        <span class="profile-ud-label">ZipCode</span>
                                                        <span>{{ $personal->zipcode }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Adress</span>
                                                        <span>{{ $personal->address }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Profession</span>
                                                        <span>{{ $personal->profession }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Salaire</span>
                                                        <span>{{ $personal->salaire }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Date Embauche</span>
                                                        <span>{{ $personal->date_embauche }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-9">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Cabinet Id</span>
                                                        <span>{{ $personal->cabinet_id }}</span>
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
                                        <div class="nk-divider divider md"></div>
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                <h5 class="title">Professional Information</h5>
                                            </div><!-- .nk-block-head -->
                                            <div class="row gy-5">
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Facebook</span>
                                                        <span>{{ $personal->facebook }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Insagram</span>
                                                        <span>{{ $personal->instagram }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Twitter</span>
                                                        <span>{{ $personal->twitter }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Linkedin</span>
                                                        <span>{{ $personal->linkedin }}</span>
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

</div>
