<div>
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Arrangement Details</h3>
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
                                                            <h5 class="title">Arrangement Information</h5>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="row gy-5">
                                                            <div class="col-md-4 col-lg-4 col-9">
                                                                <div class="profile-stats">
                                                                    <span class="profile-ud-label">Id</span>
                                                                    <span>{{ $arrangement->id }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4  col-9">
                                                                <div class="profile-stats">
                                                                    <span class="profile-ud-label">Patient Name</span>
                                                                    <span>{{$arrangement->patient->fname}}{{$arrangement->patient->lname}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4  col-9">
                                                                <div class="profile-stats">
                                                                    <span class="profile-ud-label">created Date</span>
                                                                    <span>{{$arrangement->created_at}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-block -->
                                                   
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
