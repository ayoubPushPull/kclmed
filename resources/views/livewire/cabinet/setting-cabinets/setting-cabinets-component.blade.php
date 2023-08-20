<div>

    <!-- @@ Profile Edit Modal @e -->
    <div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" id="user-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Update Profile</h5>

                    <div class="row gy-4 mt-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="full-name">Full name</label>
                                <div class="form-control-wrap">
                                    <input wire:model="name" type="text" class="form-control" id="full-name"
                                        value="Abu Bin Ishtiyak" placeholder="Enter Full name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="display-name">Email</label>
                                <div class="form-control-wrap">
                                    <input disabled wire:model="email" type="text" class="form-control"
                                        id="display-name" value="Ishtiyak" placeholder="Enter display name">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4 mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <button wire:click="update"class="btn btn-primary"><i class="icon ni ni-edit "></i>
                                    &nbsp Update
                                </button>
                            </div>
                        </div>
                    </div>

                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="personal-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Update Profile</h5>


                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name">Full name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="full-name" value="Abu Bin Ishtiyak"
                                        placeholder="Enter Full name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="display-name">Email</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="display-name" value="Ishtiyak"
                                        placeholder="Enter display name">
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" id="password-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Update Password</h5>

                    <div class="row gy-4 mt-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="full-name">Old Password</label>
                                <div class="form-control-wrap">
                                    <input wire:model="old_password" type="password" class="form-control" 
                                         placeholder="Old Password">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="display-name">New Password</label>
                                <div class="form-control-wrap">
                                    <input wire:model="new_password" type="password" class="form-control"
                                        placeholder="New Password">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="display-name">Confirm Password</label>
                                <div class="form-control-wrap">
                                    <input wire:model="confirme_password" type="password" class="form-control"
                                         placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4 mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <button wire:click="change_password" class="btn btn-primary"><i
                                        class="icon ni ni-edit "></i>
                                    &nbsp Update
                                </button>
                            </div>
                        </div>
                    </div>

                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->



    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title page-title">My Profile</h2>
                    <div class="nk-block-des">
                        <p>You have full control to manage your own account setting. <span class="text-primary"><em
                                    class="icon ni ni-info"></em></span></p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->

     

            @if (session()->has('warning_message'))
                <div class="alert alert-fill alert-danger alert-dismissible alert-icon">
                    <em class="icon ni ni-check-circle"></em>
                    {{ session('warning_message') }}
                    <button class="close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if (session()->has('success_message'))
                <div class="alert alert-fill alert-primary alert-dismissible alert-icon">
                    <em class="icon ni ni-check-circle"></em>
                    {{ session('success_message') }}
                    <button class="close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            <div class="nk-block nk-block-lg">
                <div class="card">
                    <div class="card-content">
                        <ul class="nav nav-tabs nav-tabs-card">
                            <li class="nav-item">
                                <a wire:ignore class="nav-link active" data-bs-toggle="tab"
                                    href="#tabItem1"><span>User</span></a>
                            </li>
                            @if ($user->utype == 'USR')
                                <li class="nav-item">
                                    <a wire:ignore class="nav-link" data-bs-toggle="tab"
                                        href="#tabItem2"><span>Personnel</span></a>
                                </li>
                            @else
                            @endif

                            <li class="nav-item">
                                <a wire:ignore class="nav-link" data-bs-toggle="tab"
                                    href="#tabItem3"><span>Security</span></a>
                            </li>

                        </ul>
                        <div class="card-inner">
                            <div class="tab-content">
                                <div class="tab-pane active" wire:ignore id="tabItem1">
                                    <div class="nk-block">

                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="nk-block-title">User Information</h5>
                                            </div>
                                        </div><!-- .nk-block-head -->
                                        <div class="card">
                                            <div class="nk-data data-list">
                                                <div class="data-item" data-bs-toggle="modal"
                                                    data-bs-target="#user-edit">
                                                    <div class="data-col">
                                                        <span class="data-label">Full Name</span>
                                                        <span class="data-value">{{ $user->name }}</span>
                                                    </div>
                                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                                class="icon ni ni-forward-ios"></em></span></div>
                                                </div><!-- .data-item -->
                                                <div class="data-item">
                                                    <div class="data-col">
                                                        <span class="data-label">Email</span>
                                                        <span class="data-value">{{ $user->email }}</span>
                                                    </div>
                                                    <div class="data-col data-col-end"><span
                                                            class="data-more disable"><em
                                                                class="icon ni ni-lock-alt"></em></span></div>
                                                </div><!-- .data-item -->
                                                <!-- .data-item -->
                                            </div><!-- .nk-data -->
                                        </div>


                                    </div><!-- .nk-block -->
                                </div><!-- tab pane -->
                                <div wire:ignore.self class="tab-pane" id="tabItem2">
                                    <div class="col-xs-12">
                                        <div class="col-md-12">
                                            <h3 class="mb-3 fw-bold fs-5"> Personal information</h3>
                                            <div class="row mb-3 ">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="description">First Name</label><br />
                                                        <input type="text" wire:model="fname"
                                                            class="form-control">
                                                        @error('fname')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="description">Last Name</label><br />
                                                        <input type="text" wire:model="lname"
                                                            class="form-control">
                                                        @error('lname')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Email:</label>
                                                <input type="email" wire:model="email_personel"
                                                    class="form-control" id="taskTitle">
                                                @error('email_personel')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="row mb-3 ">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="description">Phone</label><br />
                                                        <input wire:ignore.self type="number"
                                                            wire:model="phone_personel" class="form-control">
                                                        @error('phone_personel')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="description">Cin</label><br />
                                                        <input type="text" wire:model="cin" class="form-control">
                                                        @error('cin')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="title">Doctor Code:</label>
                                                <input type="text" wire:model="code_doctor" class="form-control"
                                                    id="taskTitle">
                                                @error('code_doctor')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="row mb-3 ">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="description">State</label><br />
                                                        <select class="form-control" wire:model="state">
                                                            <option>Tanger-Tétouan-Al Hoceima</option>
                                                            <option>L'Oriental</option>
                                                            <option>Fès-Meknès</option>
                                                            <option>Beni Mellal-Khénifra</option>
                                                            <option>Rabat-Salé-Kénitra</option>
                                                            <option>Casablanca-Settat</option>
                                                            <option>Marrakech-Safi</option>
                                                            <option>Drâa-Tafilalet</option>
                                                            <option>Souss-Massa</option>
                                                            <option>Guelmim-Oued Noun</option>
                                                            <option>Laâyoune-Sakia El Hamra</option>
                                                            <option>Dakhla-Oued Ed Dahab</option>
                                                        </select>
                                                        @error('state')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="description">City</label><br />
                                                        <input type="text" wire:model="city" class="form-control">
                                                        @error('city')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="description">Zip code</label><br />
                                                        <input name="name" type="text" wire:model="zipcode"
                                                            class="form-control">
                                                        @error('zipcode')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="title">Address:</label>
                                                <input name="text" wire:model="address" class="form-control">
                                                @error('address')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button wire:click="update"class="btn btn-primary">Edit
                                    </button>

                                </div><!-- tab pane -->
                                <!--tab pane-->
                                <div wire:ignore class="tab-pane" id="tabItem3">
                                    <div class="nk-block-head nk-block-head-lg">
                                          <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="nk-block-title">Change password</h5>
                                            </div>
                                        </div><!-- .nk-block-head -->
                                        <div class="nk-block">

                                            <div class="card card-bordered">
                                                <div class="card-inner-group">

                                                    <div class="card-inner">
                                                        <div class="between-center flex-wrap g-3">
                                                            <div class="nk-block-text">
                                                                <h6>Change Password</h6>
                                                                <p>Set a unique password to protect your account.</p>
                                                            </div>
                                                            <div class="nk-block-actions flex-shrink-sm-0">
                                                                <ul
                                                                    class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                                    <li class="order-md-last">
                                                                        <a href="#" class="btn btn-primary"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#password-edit">Change
                                                                            Password</a>
                                                                    </li>
                                                                    <li>
                                                                        <em class="text-soft text-date fs-12px">Last
                                                                            changed: <span>Oct 2, 2019</span></em>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->

                                                </div><!-- .card-inner-group -->
                                            </div><!-- .card -->
                                        </div><!-- .nk-block -->
                                    </div>

                                </div>
                                <!--tab content-->
                            </div>
                            <!--card inner-->
                        </div><!-- .card-content -->
                    </div>
                    <!--card-->
                </div>
                <!--nk block lg-->
            </div>
        </div>
    </div>
