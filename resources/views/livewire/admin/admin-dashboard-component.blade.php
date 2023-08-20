<div>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Dashboard </h3>
                        <div class="nk-block-des text-soft">
                            <p>Welcome to DashLite Hospital Dashboard Template.</p>
                        </div>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">

                                    <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em
                                                class="icon ni ni-reports"></em><span>Reports</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="row g-gs">
                    <!-- .col -->
                    <div class="col-3">
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
                                        <span class="amount">{{ $users->count() }}</span>
                                        <span class="sub-title"><span class="change up text-success"><em
                                                    class="icon ni ni-arrow-long-up"></em>2.45%</span>since last
                                            week</span>
                                    </div>
                                    <div class="nk-sales-ck">
                                        <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div>
                    <div class="col-3">
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
                                        <span class="amount">{{ $doctoroffices->count() }}</span>
                                        <span class="sub-title"><span class="change up text-success"><em
                                                    class="icon ni ni-arrow-long-up"></em>2.45%</span>since last
                                            week</span>
                                    </div>
                                    <div class="nk-sales-ck">
                                        <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div>
                    <div class="col-3">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-2">
                                    <div class="card-title">
                                        <h6 class="title">Requests</h6>
                                    </div>
                                    <div class="card-tools">
                                        <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="Daily Avg. subscription"></em>
                                    </div>
                                </div>
                                <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                    <div class="nk-sale-data">
                                        <span class="amount">{{ $request->count() }}</span>
                                        <span class="sub-title"><span class="change up text-success"><em
                                                    class="icon ni ni-arrow-long-up"></em>2.45%</span>since last
                                            week</span>
                                    </div>
                                    <div class="nk-sales-ck">
                                        <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div>
                    <div class="col-3">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-2">
                                    <div class="card-title">
                                        <h6 class="title">Appointment</h6>
                                    </div>
                                    <div class="card-tools">
                                        <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="Daily Avg. subscription"></em>
                                    </div>
                                </div>
                                <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                    <div class="nk-sale-data">
                                        <span class="amount">{{ $appointment->count() }}</span>
                                        <span class="sub-title"><span class="change up text-success"><em
                                                    class="icon ni ni-arrow-long-up"></em>2.45%</span>since last
                                            week</span>
                                    </div>
                                    <div class="nk-sales-ck">
                                        <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div>

                    <div class="col-3 ">
                        <div class="card h-100">
                            <div class="card-inner">
                                <div class="card-title-group mb-2">
                                    <div class="card-title">
                                        <h6 class="title">Hospital Statistics</h6>
                                    </div>
                                </div>
                                <ul class="nk-store-statistics">
                                    <li class="item">
                                        <div class="info">
                                            <div class="title">Users</div>
                                            <div class="count">{{ $users->count() }}</div>
                                        </div>
                                        <em class="icon bg-info-dim ni ni-users"></em>
                                    </li>
                                    <li class="item">
                                        <div class="info">
                                            <div class="title">Appointments</div>
                                            <div class="count">{{ $appointment->count() }}</div>
                                        </div>
                                        <em class="icon ni bg-pink-dim ni-calender-date-fill"></em>
                                    </li>
                                    <li class="item">
                                        <div class="info">
                                            <div class="title">Doctors Offices</div>
                                            <div class="count">{{ $doctoroffices->count() }}</div>
                                        </div>
                                        <em class="icon bg-primary-dim ni ni-building-fill"></em>
                                    </li>
                                 
                                    <li class="item">
                                        <div class="info">
                                            <div class="title">Requests</div>
                                            <div class="count">{{ $request->count() }}</div>
                                        </div>
                                        <em class="icon ni bg-blue-dim ni-file-text-fill "></em>
                                    </li> 
                                </ul>
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .col -->

                    <div class="col-9">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <div class="card-title-group pb-3 g-2">
                                    <div class="card-title">
                                        <h6 class="title">Doctors Office</h6>
                                        <p>Last 30 days Income vs Expenses Statistics.</p>
                                    </div>
                                    <div class="card-tools shrink-0 d-none d-sm-block">
                                        <ul class="nav nav-switch-s2 nav-tabs bg-white">
                                            <li class="nav-item"><a href="#" class="nav-link">7 D</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link active">1 M</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link">3 M</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="analytic-ov">
                                    <div class="analytic-data-group analytic-ov-group g-3">
                                        <div class="analytic-data analytic-ov-data">
                                            <div class="title">Month</div>
                                            <div class="amount">12.57K</div>
                                            <div class="change up"><em class="icon ni ni-arrow-long-up"></em>12.37%
                                            </div>
                                        </div>
                                        <div class="analytic-data analytic-ov-data">
                                            <div class="title">Week</div>
                                            <div class="amount">3.98K</div>
                                            <div class="change up"><em class="icon ni ni-arrow-long-up"></em>47.74%
                                            </div>
                                        </div>
                                        <div class="analytic-data analytic-ov-data">
                                            <div class="title">Month</div>
                                            <div class="amount">4.49K</div>
                                            <div class="change up"><em class="icon ni ni-arrow-long-up"></em>12.37%
                                            </div>
                                        </div>
                                        <div class="analytic-data analytic-ov-data">
                                            <div class="title">Week</div>
                                            <div class="amount">1.15K</div>
                                            <div class="change down"><em class="icon ni ni-arrow-long-down"></em>0.35%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="analytic-ov-ck">
                                        <canvas class="analytics-line-large" id="analyticOvData"></canvas>
                                    </div>
                                    <div class="chart-label-group ms-5">
                                        <div class="chart-label">01 Jan, 2020</div>
                                        <div class="chart-label d-none d-sm-block">15 Jan, 2020
                                        </div>
                                        <div class="chart-label">30 Jan, 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->
                    <div class="col-6">
                        <div class="card card-bordered card-full">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title"> New Message</h6>
                                        </div>
                                        <div class="card-tools">
                                            <a href="{{ route('admin-Contacts') }}" class="link">View All</a>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($contacts as $item)
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary-dim">
                                                <span> {{ substr($item->nameContact, 0, 1) }}</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text"> {{ $item->nameContact }}</span>
                                                <span class="sub-text">{{ $item->emailContact }}</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><em
                                                            class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">

                                                            <li><a
                                                                    href="{{ route('admin-Contacts-show', $item->slug) }}"><em
                                                                        class="icon ni ni-eye-fill"></em><span>View
                                                                    </span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->
                    <div class="col-6">
                        <div class="card card-bordered h-100">
                            <div class="card-inner border-bottom">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Requests</h6>
                                    </div>
                                    <div class="card-tools">
                                        <a href="{{ route('admin-Requests') }}" class="link">View All</a>
                                    </div>
                                </div>
                            </div>
                            @foreach ($request as $item)
                                <div class="card-inner card-inner-md">
                                    <div class="user-card">
                                        <div class="user-avatar bg-primary-dim">
                                            <span> {{ substr($item->lname, 0, 1) }}</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text"> {{ $item->lname }} {{ $item->fname }} </span>
                                            <span class="sub-text">{{ $item->email }}</span>
                                        </div>
                                        <div class="user-action">
                                            <div class="drodown">
                                                <a href="#"
                                                    class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><em
                                                        class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">

                                                        <li><a href="{{ route('admin-Requests-show', $item->slug) }}"><em
                                                                    class="icon ni ni-eye-fill"></em><span>View
                                                                </span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- .card -->
                    </div><!-- .col -->

                </div><!-- .row -->
            </div><!-- .nk-block -->
        </div>
    </div>


</div>
