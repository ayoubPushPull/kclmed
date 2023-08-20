<div>

    <div class="modal fade" tabindex="-1" id="modalAlert2" wire:ignore.self>
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
                        <h3 class="nk-block-title page-title"> Medication Category List</h3>
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
                <a data-bs-toggle="modal" href="#addAppointment" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Payment</span></a>
               -->
                        <a href="{{ route('admin-medicategories-add') }}"
                            class="btn btn-primary d-none d-md-inline-flex"></em><span>Add
                                Medication Category</span></a>
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

                </div>
            </div>
            <div class="nk-block">
                <div class="card card-bordered card-stretch">
                    <div class="card-inner-group">
                        <div class="card-inner position-relative card-tools-toggle">
                            <div class="card-title-group">
                                <div class="card-tools">
                                    <div class="form-inline flex-nowrap gx-3">
                                        <div class="form-wrap w-150px">
                                            <select class="form-select js-select2" data-search="off"
                                                data-placeholder="Bulk Action">
                                                <option value="">Bulk Action</option>
                                                <option value="email">Send Email</option>
                                                <option value="change">Change Doctor</option>
                                                <option value="depart">Change Depart</option>
                                                <option value="delete">Delete</option>
                                            </select>
                                        </div>
                                        <div class="btn-wrap">
                                            <span class="d-none d-md-block"><button
                                                    class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                            <span class="d-md-none"><button
                                                    class="btn btn-dim btn-outline-light btn-icon disabled"><em
                                                        class="icon ni ni-arrow-right"></em></button></span>
                                        </div>
                                    </div><!-- .form-inline -->
                                </div><!-- .card-tools -->
                                <div class="card-tools me-n1">
                                    <ul class="btn-toolbar gx-1">
                                        <li class="header-dropdown">
                                            <form id="navbar-search" class="navbar-form search-form">
                                                <input wire:model="searchTerm" class="form-control" placeholder="Search here..."
                                                    type="text">
                                                <button type="button" class="btn btn-default"><i
                                                        class="icon-magnifier"></i></button>
                                            </form>
                                        </li>
                                        <li class="btn-toolbar-sep"></li><!-- li -->
                                        <li>
                                            <div class="toggle-wrap">
                                                <a href="#" class="btn btn-icon btn-trigger toggle"
                                                    data-target="cardTools"><em
                                                        class="icon ni ni-menu-right"></em></a>
                                                <div class="toggle-content" data-content="cardTools">
                                                    <ul class="btn-toolbar gx-1">
                                                        <li class="toggle-close">
                                                            <a href="#" class="btn btn-icon btn-trigger toggle"
                                                                data-target="cardTools"><em
                                                                    class="icon ni ni-arrow-left"></em></a>
                                                        </li><!-- li -->
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="#"
                                                                    class="btn btn-trigger btn-icon dropdown-toggle"
                                                                    data-bs-toggle="dropdown">
                                                                    <div class="dot dot-primary"></div>
                                                                    <em class="icon ni ni-filter-alt"></em>
                                                                </a>
                                                                <div
                                                                    class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                    <div class="dropdown-head">
                                                                        <span class="sub-title dropdown-title">Filter
                                                                            Appointment</span>
                                                                        <div class="dropdown">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon">
                                                                                <em class="icon ni ni-more-h"></em>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-body dropdown-body-rg">
                                                                        <div class="row gx-6 gy-3">
                                                                            <div class="col-6">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="overline-title overline-title-alt">Department</label>
                                                                                    <select
                                                                                        class="form-select js-select2">
                                                                                        <option value="any">
                                                                                            Any Type
                                                                                        </option>
                                                                                        <option value="medicine">
                                                                                            Medicine
                                                                                        </option>
                                                                                        <option
                                                                                            value="gastroenterology">
                                                                                            Gastroenterology
                                                                                        </option>
                                                                                        <option value="cardiology">
                                                                                            Cardiology
                                                                                        </option>
                                                                                        <option value="orthopaedics">
                                                                                            Orthopaedics
                                                                                        </option>
                                                                                        <option value="neurology">
                                                                                            Neurology
                                                                                        </option>
                                                                                        <option value="urology">
                                                                                            Urology
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div><!-- .col -->
                                                                            <div class="col-6">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="overline-title overline-title-alt">Status</label>
                                                                                    <select
                                                                                        class="form-select js-select2">
                                                                                        <option value="any">
                                                                                            Any Status
                                                                                        </option>
                                                                                        <option value="visited">
                                                                                            Visited
                                                                                        </option>
                                                                                        <option value="canceled">
                                                                                            Canceled
                                                                                        </option>
                                                                                        <option value="waiting">
                                                                                            Waiting
                                                                                        </option>
                                                                                        <option value="pending">
                                                                                            Pending
                                                                                        </option>
                                                                                        <option value="deleted">
                                                                                            Deleted
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div><!-- .col -->
                                                                            <div class="col-6">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="overline-title overline-title-alt">Doctor</label>

                                                                                </div>
                                                                            </div><!-- .col -->
                                                                            <div class="col-6">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="overline-title overline-title-alt">Date</label>
                                                                                    <div class="form-control-wrap">
                                                                                        <div
                                                                                            class="form-icon form-icon-right">
                                                                                            <em
                                                                                                class="icon ni ni-calendar"></em>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                            class="form-control date-picker"
                                                                                            data-date-format="dd-mm-yyyy"
                                                                                            placeholder="dd-mm-yyyy">
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- .col -->
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary">Filter</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-foot between">
                                                                        <a class="clickable" href="#">Reset
                                                                            Filter</a>
                                                                        <a href="#">Save
                                                                            Filter</a>
                                                                    </div>
                                                                </div><!-- .filter-wg -->
                                                            </div><!-- .dropdown -->
                                                        </li><!-- li -->
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="#"
                                                                    class="btn btn-trigger btn-icon dropdown-toggle"
                                                                    data-bs-toggle="dropdown">
                                                                    <em class="icon ni ni-setting"></em>
                                                                </a>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                    <ul class="link-check">
                                                                        <li><span>Show</span></li>
                                                                        <li class="active"><a href="#">10</a>
                                                                        </li>
                                                                        <li><a href="#">20</a>
                                                                        </li>
                                                                        <li><a href="#">50</a>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="link-check">
                                                                        <li><span>Order</span></li>
                                                                        <li class="active"><a href="#">DESC</a>
                                                                        </li>
                                                                        <li><a href="#">ASC</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .dropdown -->
                                                        </li><!-- li -->
                                                    </ul><!-- .btn-toolbar -->
                                                </div><!-- .toggle-content -->
                                            </div><!-- .toggle-wrap -->
                                        </li><!-- li -->
                                    </ul><!-- .btn-toolbar -->
                                </div><!-- .card-tools -->
                            </div><!-- .card-title-group -->
                            <div class="card-search search-wrap" data-search="search">
                                <div class="card-body">
                                    <div class="search-content">
                                        <a href="#" class="search-back btn btn-icon toggle-search"
                                            data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                        <input type="text" class="form-control border-transparent form-focus-none"
                                            placeholder="Search by patient name or id">
                                        <button class="search-submit btn btn-icon"><em
                                                class="icon ni ni-search"></em></button>
                                    </div>
                                </div>
                            </div><!-- .card-search -->
                        </div><!-- .card-inner -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"><span>Name</span></th>
                                    <th scope="col"><span>Description</span></th>
                                    <th scope="col"><span>Creation Date</span></th>
                                    <th scope="col"><span>Status</span></th>
                                    <th scope="col"><span>Activation</span></th>
                                    <th scope="col"><span></span></th>
                                </tr>
                            </thead><!-- .nk-tb-item -->
                            <tbody>
                                @foreach ($medcategorie as $item)
                                    <tr class="nk-tb-item">
                                        <td scope="row">
                                            <div>
                                                <a
                                                    href="{{ route('admin-medicategories-show', $item->slug) }}">
                                                    <div>
                                                        <span>{{ $item->name }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="nk-tb-col tb-col-mb">
                                            <span class="tb-lead-sub">
                                                {{ $item->description }}</span>
                                        </td>
                                        <td>
                                            <span class="tb-date">{{ $item->created_at }}</span>
                                        </td>
                                        @if( $item->active==0 )
                                        <td>
                                            <span class="tb-status text-info"><span
                                                    class="badge badge-dim bg-primary">Active</span></span>
                                        </td>
                                        @else
                                        <td>
                                            <span class="tb-status text-info"><span
                                                    class="badge badge-dim bg-danger">Inactive</span></span>
                                        </td>
                                        @endif
                                        <td wire:click.prevent="changeStatus({{ $item->id }})"
                                            title="{{ $item->active == 0 ? 'incative' : 'active' }}"><i
                                            class="{{ $item->active == 0 ? 'icon ni ni-toggle-off text-primary ' : 'icon ni ni-toggle-on text-danger' }}" style="font-size:30px" >
                                  </td> 
                                        <td>
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="{{ route('admin-medicategories-show', $item->slug) }} "
                                                        class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Quick View">
                                                        <em class="icon ni ni-eye-fill"></em>
                                                    </a>
                                                </li>
                                                <li class="nk-tb-action-hidden">
                                                    <a  href="{{ route('admin-medicategories-edit', $item->slug) }} "class="btn btn-trigger btn-icon"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit">
                                                        <em class="icon ni ni-edit"></em>
                                                    </a>
                                                </li>


                                                <li class="nk-tb-action-hidden">
                                                    <a class="btn btn-trigger btn-icon" data-bs-toggle="modal"
                                                        data-bs-target="#modalAlert2"
                                                        wire:click="confirmDelete({{ $item->id }})">
                                                        <em class="icon ni ni-cross-fill-c"></em>
                                                    </a>
                                                </li>


                                                <li>
                                                    <div class="drodown">
                                                        <a href="{{ route('admin-medicategories-edit', $item->slug) }}"
                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal"
                                                                        href="#editAppointment"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                @endforeach
                            </tbody><!-- .nk-tb-item -->
                            <br>
                            <br>


                    </div><!-- .nk-tb-item -->
                    </table>
                </div><!-- .card-inner -->
                <div class="card-inner">
                    <div class="nk-block-between-md g-3 justify-content-center">
                        <div class="g">
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
            </div><!-- .card-inner-group -->
        </div><!-- .card-inner-group -->
    </div><!-- .card -->
</div>

