<div>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Add Doctor Office</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner ">
                                <div class="row justify-content-center">

                                    <div class="col-9">
                                        <div>
                                            @if (!empty($successMessage))
                                                <div class="alert alert-success">
                                                    {{ $successMessage }}
                                                </div>
                                            @endif
                                            <div class="text-center">
                                                <!-- progressbar -->
                                                <ul class="progressbar bg-green">
                                                    <li class="{{ $currentStep != 1 ? '' : 'active' }}"><a
                                                            href="#step-1" type="button"></a></li>
                                                    <li class="{{ $currentStep != 2 ? '' : 'active' }}"><a
                                                            href="#step-2" type="button"></a></li>
                                                    <li class="{{ $currentStep != 3 ? '' : 'active' }}"><a
                                                            href="#step-3" type="button" disabled="disabled"></a></li>
                                                </ul>
                                            </div>
                                            <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}"
                                                id="step-1">
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
                                                                <div class="form-group">
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
                                                            <textarea name="name" rows="5" wire:model="address" class="form-control"></textarea>
                                                            @error('address')
                                                                <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <button class="btn text-light" style="background: #3fbd9a"
                                                            wire:click="firstStepSubmit">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}"
                                                id="step-2">
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
                                                                        <label for="description">Plan
                                                                            Cabinet</label><br />

                                                                        <select wire:model="plan_id"
                                                                            class="form-control">
                                                                            <option value="" selected> Selectted
                                                                            </option>
                                                                            @foreach ($plans as $item)
                                                                                <option value="{{ $item->id }}">

                                                                                    {{ $item->name }}

                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                        @error('plan_id')
                                                                            <span
                                                                                class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="title">Address:</label>
                                                                <textarea name="address_cabinet" rows="5" wire:model="address_cabinet" class="form-control"></textarea>
                                                                @error('address_cabinet')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <button class="btn text-light "
                                                                style="background: #3fbd9a"
                                                                wire:click="secondStepSubmit">Next</button>
                                                            <button class="btn btn-danger nextBtn  pull-right"
                                                                wire:click="back(1)">Back</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}"
                                                    id="step-3">
                                                    <div class="col-xs-12">
                                                        <div class="col-md-12 text-center">
                                                            <h1 class="mb-3 fw-bold fs-5"> Survey Completed</h1>
                                                            <div class="pt-4 pb-2 ">
                                                                <em
                                                                    class="icon icon-circle icon-circle-xxl mb-4 ni ni-check bg-primary-dim"></em>
                                                                <p>Thank you very much for your time</p>
                                                            </div>
                                                            {{--  <table class="table">
                                                            <tr>
                                                                <td>Name:</td>
                                                                <td><strong>{{ $name }}</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email:</td>
                                                                <td><strong>{{ $email }}</strong></td>
                                                            </tr>
                                                        </table> --}}
                                                            <button class="btn text-light "
                                                                style="background: #0071ef"
                                                                wire:click="submitForm">Finish!</button>
                                                            <button class="btn btn-danger nextBtn pull-right"
                                                                wire:click="back(2)">Back</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






                                    </div>
                                </div><!-- .card-inner-group -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    @push('styles')
        <link href="{{ asset('dashboard/assets/css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">
    @endpush
