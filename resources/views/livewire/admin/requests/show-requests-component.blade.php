<div>

    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Doctor / <strong class="text-primary small">{{ $request->lname . ' ' . $request->fname }}</span>
                                    </strong></h3>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="card">
                            <div class="card-aside-wrap">
                                <div class="card-content">
                                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1"><em
                                                    class="icon ni ni-user-circle-fill"></em><span>Personal
                                                    information</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem2"><em class="icon ni ni-building-fill"></em><span>Cabinet
                                                    Information</span></a>
                                        </li>


                                    </ul>
                                    <div class="card-inner">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tabItem1">
                                                <div class="nk-block nk-block-between">
                                                    <div class="nk-block nk-block-between">
                                                        <div class="nk-block-head">
                                                            <h6 class="title">Personal Informations</h6>
                                                            
                                                        </div><!-- .nk-block-head -->
                                                      
                                                    </div> 
                                                    @if ($request->status == 1)

                                                    <div class="alert alert-success">
                                                        valider
                                                    </div>

                                                    @elseif ($request->status == 2)

                                                    <div class="alert alert-danger">
                                                        refuser
                                                    </div> 

                                                    @else

                                                    <div class="nk-block">
                                                        <a class="btn btn-white btn-icon btn-outline-light"
                                                             wire:click="valider()">
                                                            <em class="icon ni ni-check"></em>
                                                        </a>
                                                        <a class="btn btn-white btn-icon btn-outline-light"
                                                            data-bs-toggle="modal"  wire:click="refuser()">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                    </div>
                                                        
                                                    @endif
                                             
                                                </div><!-- .nk-block-between  -->
                                                <div class="nk-block">
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Name</span>
                                                                <span
                                                                    class="profile-ud-value">{{ $request->lname . ' ' . $request->fname }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Phone</span>
                                                                <span class="profile-ud-value">{{ $request->phone }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Email </span>
                                                                <span class="profile-ud-value">
                                                                    {{ $request->email }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Created Date</span>
                                                                <span
                                                                    class="profile-ud-value">{{ $request->created_at }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Cin</span>
                                                                <span class="profile-ud-value">{{ $request->cin }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">City</span>
                                                                <span class="profile-ud-value">{{ $request->city }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Docotr Code</span>
                                                                <span class="profile-ud-value">{{ $request->code_doctor }}
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Zip Code</span>
                                                                <span class="profile-ud-value">{{ $request->zipcode }}</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">Additional
                                                            Information</h6>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">State</span>
                                                                <span class="profile-ud-value">{{ $request->state }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Address</span>
                                                                <span class="profile-ud-value">{{ $request->address }}</span>
                                                            </div>
                                                        </div>
                                                       
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->


                                            </div><!-- tab pane -->
                                            <div class="tab-pane" id="tabItem2">
                                                <div class="nk-block nk-block-between">
                                                    <div class="nk-block-head">
                                                        <h6 class="title">Cabinet Informations</h6>
                                                        
                                                    </div><!-- .nk-block-head -->
                                                  
                                                </div><!-- .nk-block-between  -->
                                                <div class="nk-block">
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Cabinet Name</span>
                                                                <span
                                                                    class="profile-ud-value">{{ $request->name_cabinet }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Cabinet Phone</span>
                                                                <span class="profile-ud-value">{{ $request->phone_cabinet }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Cabinet Email</span>
                                                                <span class="profile-ud-value">
                                                                    {{ $request->email_cabinet }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Created Date</span>
                                                                <span
                                                                    class="profile-ud-value">{{ $request->created_at }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Type</span>
                                                                <span class="profile-ud-value">{{ $request->type_id }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Address</span>
                                                                <span class="profile-ud-value">{{ $request->address_cabinet }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Statue</span>
                                                                <span class="profile-ud-value">{{ $request->status }}
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                            </div>
                                            <!--tab pane-->
                                          
                                            <!--tab pane-->
                                        </div>
                                        <!--tab content-->
                                    </div>
                                    <!--card inner-->
                                </div><!-- .card-content -->
                                <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl"
                                    data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true"
                                    data-toggle-body="true">
                                    <div class="card-inner-group" data-simplebar>
                                        <div class="card-inner">
                                            <div class="user-card user-card-s2">
                                                <div class="user-avatar lg bg-primary">
                                                    <span>{{ substr($request->fname, 0, 1) .''. substr($request->lname, 0, 1) }}</span>
                                                </div>
                                                <div class="user-info">
                                                    <div class="badge bg-outline-light rounded-pill ucap">Doctor</div>
                                                    <h5><span>  {{ $request->lname . ' ' . $request->fname }} </span> </h5>
                                                    <span class="sub-text">info@softnio.com</span>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner card-inner-sm">
                                            <ul class="btn-toolbar justify-center gx-1">
                                                <li><a href="#" class="btn btn-trigger btn-icon"><em
                                                            class="icon ni ni-shield-off"></em></a></li>
                                                <li><a href="#" class="btn btn-trigger btn-icon"><em
                                                            class="icon ni ni-mail"></em></a></li>
                                                <li><a href="#" class="btn btn-trigger btn-icon"><em
                                                            class="icon ni ni-download-cloud"></em></a></li>
                                                <li><a href="#" class="btn btn-trigger btn-icon"><em
                                                            class="icon ni ni-bookmark"></em></a></li>
                                            </ul>
                                        </div><!-- .card-inner -->
                                      
                                        <div class="card-inner">
                                            <h6 class="overline-title-alt mb-2">Additional</h6>
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <span class="sub-text">Patient ID:</span>
                                                    <span>#P7085</span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="sub-text">Admit Date</span>
                                                    <span>15 Feb, 2019 01:02 PM</span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="sub-text">Condition</span>
                                                    <span class="lead-text text-success">Normal</span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="sub-text">Discharged Date</span>
                                                    <span>16 Feb, 2019</span>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <h6 class="overline-title-alt mb-3">Groups</h6>
                                            <ul class="g-1">
                                                <li class="btn-group">
                                                    <a class="btn btn-xs btn-light btn-dim" href="#">surgery</a>
                                                    <a class="btn btn-xs btn-icon btn-light btn-dim"
                                                        href="#"><em class="icon ni ni-cross"></em></a>
                                                </li>
                                                <li class="btn-group">
                                                    <a class="btn btn-xs btn-light btn-dim"
                                                        href="#">cardiology</a>
                                                    <a class="btn btn-xs btn-icon btn-light btn-dim"
                                                        href="#"><em class="icon ni ni-cross"></em></a>
                                                </li>
                                                <li class="btn-group">
                                                    <a class="btn btn-xs btn-light btn-dim" href="#">another
                                                        tag</a>
                                                    <a class="btn btn-xs btn-icon btn-light btn-dim"
                                                        href="#"><em class="icon ni ni-cross"></em></a>
                                                </li>
                                            </ul>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-aside -->
                            </div><!-- .card-aside-wrap -->
                        </div>
                        <!--card-->
                    </div>
                    <!--nk block lg-->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->

</div>