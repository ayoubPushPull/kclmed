<div>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Add User</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="card">
                            <div class="card-aside-wrap">
                                <div class="card-content">
                                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                        <li class="nav-item">
                                            <a class="nav-link active" wire:ignore.self data-bs-toggle="tab"
                                                href="#tabItem1"><em class="icon ni ni-user-add-fill"></em>
                                                <span>Add Owner</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" wire:ignore.self data-bs-toggle="tab"
                                                href="#tabItem2"><em class="icon ni ni-users-fill"></em>
                                                <span>Add Personal</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem3"><em
                                                    class="icon ni ni-user-circle-fill"></em>
                                                <span>Add Admin</span></a>
                                        </li>

                                    </ul>
                                    <div class="card-inner">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tabItem1" wire:ignore.self>
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
                                                            <input type="email" wire:model="email"
                                                                class="form-control" id="taskTitle">
                                                            @error('email')
                                                                <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="row mb-3 ">
                                                            <div class="col-md-6">
                                                                <div class="form-group" wire:ignore.self>
                                                                    <label for="description">Phone</label><br />
                                                                    <input type="number" wire:model="phone"
                                                                        class="form-control">
                                                                    @error('phone')
                                                                        <span class="error">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="description">Cin</label><br />
                                                                    <input type="text" wire:model="cin"
                                                                        class="form-control">
                                                                    @error('cin')
                                                                        <span class="error">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="title">Doctor Code:</label>
                                                            <input type="text" wire:model="code_doctor"
                                                                class="form-control" id="taskTitle">
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
                                                                    <input type="text" wire:model="city"
                                                                        class="form-control">
                                                                    @error('city')
                                                                        <span class="error">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="description">Zip code</label><br />
                                                                    <input name="name" type="text"
                                                                        wire:model="zipcode" class="form-control">
                                                                    @error('zipcode')
                                                                        <span class="error">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="title">Address:</label>
                                                            <input name="text" wire:model="address"
                                                                class="form-control">
                                                            @error('address')
                                                                <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-xs-12">
                                                    <div class="col-md-12">
                                                        <h2 class="mb-3 fw-bold fs-5">Office information</h2>
                                                        <div class="row mb-3 ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="description">Office medical
                                                                        name</label><br />
                                                                    <input type="text" wire:model="name_cabinet"
                                                                        class="form-control">
                                                                    @error('name_cabinet')
                                                                        <span class="error">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="description">Office phone
                                                                        number</label><br />
                                                                    <input type="number" wire:model="phone_cabinet"
                                                                        class="form-control">
                                                                    @error('phone_cabinet')
                                                                        <span class="error">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="description">Office email address</label><br />
                                                            <input type="email" wire:model="email_cabinet"
                                                                class="form-control">
                                                            @error('email_cabinet')
                                                                <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="row mb-3 ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="description">Type Cabinet</label><br />

                                                                    <select wire:model="type_id" class="form-control">
                                                                        <option value="" selected> Selectted
                                                                        </option>
                                                                        @foreach ($types as $item)
                                                                            <option value="{{ $item->id }}">

                                                                                {{ $item->name }}

                                                                            </option>
                                                                        @endforeach

                                                                    </select>

                                                                    @error('type_id')
                                                                        <span class="error">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="description">Plan Cabinet</label><br />

                                                                    <select wire:model="plan_id" class="form-control">
                                                                        <option value="" selected> Selectted
                                                                        </option>
                                                                        @foreach ($plans as $item)
                                                                            <option value="{{ $item->id }}">

                                                                                {{ $item->name }}

                                                                            </option>
                                                                        @endforeach

                                                                    </select>
                                                                    @error('plan_id')
                                                                        <span class="error">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="title">Address:</label>
                                                            <input name="address_cabinet" wire:model="address_cabinet"
                                                                class="form-control">
                                                            @error('address_cabinet')
                                                                <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <button wire:click="submitForm1"class="btn btn-primary">Add
                                                            Owner</button>
                                                    </div>
                                                </div>
                                            </div><!-- tab pane -->
                                            <div class="tab-pane" id="tabItem2" wire:ignore.self>
                                                <div class="nk-block">
                                                    <div class="col-xs-12">
                                                        <div class="col-md-12">
                                                            <h3 class="mb-3 fw-bold fs-5"> Personal information</h3>

                                                            <div class="row mb-3 ">

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="description">Office
                                                                            Name</label><br />
                                                                        <select wire:model="cabinet"
                                                                            class="form-control">
                                                                            <option value="" selected> Selectted
                                                                            </option>
                                                                            @foreach ($doctorOffice as $item)
                                                                                <option value="{{ $item->id }}">
                                                                                    {{ $item->name_cabinet }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                        @error('cabinet')
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="description">
                                                                            Role</label><br />
                                                                        <select wire:model="role"
                                                                            class="form-control">
                                                                            <option value="" selected> Selectted
                                                                            </option>
                                                                            @foreach ($roles as $item)
                                                                                <option value="{{ $item->id }}">
                                                                                    {{ $item->name }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                        @error('role')
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3 ">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="description">First
                                                                            Name</label><br />
                                                                        <input type="text" wire:model="fname"
                                                                            class="form-control">
                                                                        @error('fname')
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="description">Last
                                                                            Name</label><br />
                                                                        <input type="text" wire:model="lname"
                                                                            class="form-control">
                                                                        @error('lname')
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="title">Email:</label>
                                                                <input type="email" wire:model="email"
                                                                    class="form-control" id="taskTitle">
                                                                @error('email')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="row mb-3 ">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="description">Phone</label><br />
                                                                        <input type="number" wire:model="phone"
                                                                            class="form-control">
                                                                        @error('phone')
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="description">Cin</label><br />
                                                                        <input type="text" wire:model="cin"
                                                                            class="form-control">
                                                                        @error('cin')
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                            </div>



                                                            <div class="row mb-3 ">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="description">State</label><br />


                                                                        <select class="form-control"
                                                                            wire:model="state">
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
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="description">City</label><br />
                                                                        <input type="text" wire:model="city"
                                                                            class="form-control">
                                                                        @error('city')
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="description">Zip code</label><br />
                                                                        <input name="name" type="text"
                                                                            wire:model="zipcode" class="form-control">
                                                                        @error('zipcode')
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="title">Address:</label>
                                                                <input name="text" wire:model="address"
                                                                    class="form-control">
                                                                @error('address')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <button
                                                                wire:click="submitForm2"class="btn btn-primary">Add
                                                                Personal
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block -->
                                            </div>
                                            <!--tab pane-->
                                            <div class="tab-pane" id="tabItem3" wire:ignore.self>
                                                <div class="nk-block nk-block-between">
                                                    <div class="nk-block-head">
                                                        <h6 class="title">Admin Information</h6>
                                                    </div><!-- .nk-block-head -->
                                                </div><!-- .nk-block-between  -->
                                                <div class="nk-block">
                                                    <div class="col-xs-12">
                                                        <div class="col-md-12">
                                                            <div class="row mb-3 ">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="description">Name</label><br />
                                                                        <input type="text" wire:model="name"
                                                                            class="form-control">
                                                                        @error('name')
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="title">Email:</label>
                                                                        <input type="email" wire:model="email"
                                                                            class="form-control" id="taskTitle">
                                                                        @error('email')
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Profile Photo</label><br />
                                                                    <input type="file"
                                                                        wire:model="profile_photo_path"
                                                                        class="form-control">
                                                                    @error('profile_photo_path')
                                                                        <span class="error">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div> --}}
                                                            <div class="row gy-4 mt-3">
                                                                <div class="form-group">
                                                                    <button
                                                                        wire:click="submitForm3"class="btn btn-primary">Add
                                                                        Admin
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--card inner-->
                                </div><!-- .card-content -->
                            </div><!-- .card-aside-wrap -->
                        </div>
                        <!--card-->
                    </div>
                    <!--nk block lg-->
                    <!--card-->
                </div>
                <!--nk block lg-->
            </div>
        </div>
    </div>

</div>
