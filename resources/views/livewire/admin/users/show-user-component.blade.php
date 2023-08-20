<div>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">User Details</h3>
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
                                                <h5 class="title">User Information</h5>
                                            </div><!-- .nk-block-head -->
                                            <div class="row gy-5">
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Full Name</span>
                                                        <span>{{ $users->personal->fname }} {{ $users->personal->lname }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Role</span>
                                                        <span>{{ $users->role->name }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6  col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Email</span>
                                                        <span>{{ $users->email }}</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Phone</span>
                                                        <span>{{ $users->personal->phone_personel }}</span>
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
                                                        <span class="profile-ud-label">Cin </span>
                                                        <span>{{ $users->personal->cin }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">State </span>
                                                        <span>{{ $users->personal->state }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">City </span>
                                                        <span>{{ $users->personal->city }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Zipe Code </span>
                                                        <span>{{ $users->personal->zipcode }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="profile-ud-label">Address </span>
                                                        <span>{{ $users->personal->address }}</span>
                                                    </div>
                                                </div>
                                                @if( $users->personal->has_account==1)
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="tb-status text-info"><span
                                                            class="badge badge-dim bg-primary">Has Account</span></span>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="profile-stats">
                                                        <span class="tb-status text-info"><span
                                                            class="badge badge-dim bg-danger">Hasn't Account</span></span>
                                                    </div>
                                                </div>
                                                @endif

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
