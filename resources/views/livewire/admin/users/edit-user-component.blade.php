<div>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Edit User</h3>
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
                                                <span>Edit Owner</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" wire:ignore.self data-bs-toggle="tab"
                                                href="#tabItem2"><em class="icon ni ni-users-fill"></em>
                                                <span>Edit Personal</span></a>
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
                                                            <input type="email" wire:model="email_personel"
                                                                class="form-control" id="taskTitle">
                                                            @error('email_personel')
                                                                <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="row mb-3 ">
                                                            <div class="col-md-6">
                                                                <div class="form-group" >
                                                                    <label for="description">Phone</label><br />
                                                                    <input wire:ignore.self type="number" wire:model="phone_personel"
                                                                        class="form-control">
                                                                    @error('phone_personel')
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
                                                    <button wire:click="update"class="btn btn-primary">Edit
                                                        </button>
                                                
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
                                                                        <input type="number" wire:model="phone_personel"
                                                                            class="form-control">
                                                                        @error('phone_personel')
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
                                                                wire:click="update"class="btn btn-primary">Edit
                                                               
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block -->
                                            </div>
                                            <!--tab pane-->
                                         
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
