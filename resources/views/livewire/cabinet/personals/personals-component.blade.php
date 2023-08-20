<div>
    <div class="modal fade" tabindex="-1" id="modalAlert2" wire:ignore.self >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Unable to Process!</h4>
                        <div class="nk-modal-text">
                            <p class="lead">We are sorry, we were unable to process your payment. Please try
                                after sometimes.</p>
                        </div>
                        <div class="nk-modal-action mt-5">
                            <a href="#" class="btn btn-lg btn-mw btn-light" data-bs-dismiss="modal">No</a>
                            <a wire:click.prevent="delete()" class="btn btn-lg btn-mw btn-danger"
                                data-bs-dismiss="modal">Yes</a>

                        </div>
                    </div>
                </div><!-- .modal-body -->
            </div>
        </div>
    </div>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Personals List</h3>
                        <div class="nk-block-des text-soft d-none d-md-inline-flex">
                            <ul class="breadcrumb breadcrumb-pipe">
                                <li class="breadcrumb-item active"><a href="#">Today's Total
                                        (150)</a>
                                </li>
                                <li class="breadcrumb-item "><a href="#">Visited (47)</a></li>
                                <li class="breadcrumb-item"><a href="#">Waiting (12)</a></li>
                                <li class="breadcrumb-item "><a href="#">Canceled (1)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <!--- <a data-bs-toggle="modal" href="#addAppointment" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                <a data-bs-toggle="modal" href="#addAppointment" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Personal</span></a>
               -->
                        <a href="{{ route('cabinet-personals-add') }}"
                            class="btn btn-primary d-none d-md-inline-flex"></em><span>Add
                                Personal</span></a>
                    </div><!-- .nk-block-head-content -->
                </div>
            </div><!-- .nk-block-head -->
              <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-12">
                        @if (session()->has('success_message'))
                            <div class="alert alert-fill alert-primary alert-dismissible alert-icon">
                                <em class="icon ni ni-check-circle"></em>
                                {{ session('success_message') }}
                                <button class="close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        @if (session()->has('danger_message'))
                            <div class="alert alert-fill alert-danger alert-dismissible alert-icon">
                                <em class="icon ni ni-cross-circle"></em>
                                {{ session('danger_message') }}
                                <button class="close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                    </div> 
                    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-2">
                                    <div class="card-title">
                                        <h6 class="title">Users</h6>
                                    </div>
                                    <div class="card-tools">
                                        <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="Daily Avg. subscription"></em>
                                    </div>
                                </div>
                                <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                    <div class="nk-sale-data">
                                        <span class="amount">0</span>
                                        <span class="sub-title"><span class="change up text-success"><em
                                                    class="icon ni ni-arrow-long-up"></em>2.45%</span>since last
                                            week</span>
                                    </div>
                                    <div class="nk-sales-ck">
                                        <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-2">
                                    <div class="card-title">
                                        <h6 class="title">Doctors Office</h6>
                                    </div>
                                    <div class="card-tools">
                                        <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="Daily Avg. subscription"></em>
                                    </div>
                                </div>
                                <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                    <div class="nk-sale-data">
                                        <span class="amount">0</span>
                                        <span class="sub-title"><span class="change up text-success"><em
                                                    class="icon ni ni-arrow-long-up"></em>2.45%</span>since last
                                            week</span>
                                    </div>
                                    <div class="nk-sales-ck">
                                        <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-2">
                                    <div class="card-title">
                                        <h6 class="title"> Doctor Office</h6>
                                    </div>
                                    <div class="card-tools">
                                        <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="Daily Avg. subscription"></em>
                                    </div>
                                </div>
                                <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                    <div class="nk-sale-data">
                                        <span class="amount">0</span>
                                        <span class="sub-title"><span class="change up text-success"><em
                                                    class="icon ni ni-arrow-long-up"></em>2.45%</span>since last
                                            week</span>
                                    </div>
                                    <div class="nk-sales-ck">
                                        <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-2">
                                    <div class="card-title">
                                        <h6 class="title">Blog</h6>
                                    </div>
                                    <div class="card-tools">
                                        <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="Daily Avg. subscription"></em>
                                    </div>
                                </div>
                                <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                    <div class="nk-sale-data">
                                        <span class="amount">0</span>
                                        <span class="sub-title"><span class="change up text-success"><em
                                                    class="icon ni ni-arrow-long-up"></em>2.45%</span>since last
                                            week</span>
                                    </div>
                                    <div class="nk-sales-ck">
                                        <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
              <div class="nk-block">
                <div>
                    <div>
                      <div class="row g-gs">
                       @foreach ($personal as $item)
                                    <div class="col-sm-12 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="team">
                                                    <div class="team-options">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                             <ul class="nk-tb-actions gx-4">
                                                                    <li><a href="{{ route('cabinet-personals-show', $item->slug) }} "
                                                                            class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                                                            data-bs-placement="center" title="Quick View">
                                                                            <em class="icon ni ni-eye-fill"></em>
                                                                            </a></li>
                                                                     <li><a href="{{ route('cabinet-personals-edit', $item->slug)  }}" class="btn btn-trigger btn-icon"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="edit">
                                                                            <em class="icon ni ni-edit"></em>
                                                                            </a> </li>        
                                                                    <li> <a class="btn btn-trigger btn-icon" data-bs-toggle="modal"
                                                                            data-bs-target="#modalAlert2"
                                                                            wire:click="confirmDelete({{ $item->id }})">
                                                                            <em class="icon ni ni-cross-fill-c"></em>
                                                                            </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-card user-card-s2">
                                              <div>
                                            <a href="{{ route('cabinet-personals-show', $item->slug) }}">
                                                <div class="user-avatar lg bg-primary">
                                                    <span>{{ substr($item->fname, 0, 1) }}</span>
                                                </div>
                                            </a></div>
                                                        <div class="user-info">
                                                            <h6><a href="{{ route('cabinet-personals-show', $item->slug) }}">
                                                               <span class="tb-lead-sub">
                                                              {{ $item->fname }} {{ $item->lname }}</span>
                                        </a></h6>
                                                                       @if($item->status==0)
                                                             <span class="tb-status text-info"><span
                                                     class="badge badge-dim bg-primary">Active</span></span>
                                                               @else
                                             <span class="tb-status text-info"><span
                                                     class="badge badge-dim bg-danger">Inactive</span></span>
                                         @endif
                                                    
                                                    
                                                        </div>
                                                    </div>
                                                    <ul class="team-info">
                                                        <li><span>CIN</span><span>{{ $item->cin}}</li>
                                                        <li><span>Profession</span><span>{{ $item->profession }}</span></li>
                                                        <li><span>Phone</span><span>{{ $item->phone_personel }}</li>
                                                        <li><span>Date Embauche</span><span>{{ $item->date_embauche}}</span></li>
                                                    </ul>
                                                    <div class="team-view">
                                                        <a href="{{ route('cabinet-personals-show', $item->slug) }}" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                    </div>
                                                </div><!-- .team -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                     @endforeach  
                     </div>
                </div><!-- .card-inner -->
                  
                <div class="card-inner">
                    <div class="nk-block-between-md g-3 justify-content-center">
                        <div class="g" >
                            <ul class="pagination justify-item-center ">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><span class="page-link"><em
                                            class="icon ni ni-more-h"></em></span></li>
                                <li class="page-item"><a class="page-link" href="#">6</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">7</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul><!-- .pagination -->
                        </div>
                      
                    </div><!-- .nk-block-between -->
                </div><!-- .card-inner -->
            </div>
        </div><!-- .card -->
    </div>
</div>






