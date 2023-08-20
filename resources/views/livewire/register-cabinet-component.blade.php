<div>
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content is-dark p-5 d-flex justify-between flex-column text-center w-50"
                            style="background-size: cover;background-image: url('{{ asset('dashboard/assets/images/bg-register.jpg') }}')">
                            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                                {{-- <img class="logo-light logo-img" src="{{ asset('dashboard/assets/images/logo.png') }}" srcset="{{ asset('dashboard/assets/images/logo.png') }}" alt="logo">
                                <img class="logo-dark logo-img" src="{{ asset('dashboard/assets/images/logo.png') }}" srcset="{{ asset('dashboard/assets/images/logo.png') }}" alt="logo-dark">
                             --}}</a>
                            {{--   <div class="text-block">
                                <img class="nk-survey-gfx mb-5 text-center" src="{{ asset('dashboard/assets/images/gfx/survey.svg') }}" alt="">
                                <h3 class="text-white">Satisfaction Survey</h3>
                                <p>Help us to improve our service and customer satisfaction.</p>
                            </div> --}}
                            <p class="text-light">&copy; 2022 DashLite. Template by Softnio</p>
                        </div><!-- .nk-split-content -->
                        <div
                            class="nk-split-content nk-split-stretch bg-white p-5 d-flex justify-center align-center flex-column">
                            <div class="w-80 justify-center align-center p-5 " style="background: #f5f5f5">
                                <div class="wide-xs-fix ">
                                    <div>
                                        @if (!empty($successMessage))
                                            <div class="alert alert-success">
                                                {{ $successMessage }}
                                            </div>
                                        @endif
                                        <div class="text-center">
                                            <!-- progressbar -->
                                            <ul class="progressbar">
                                                <li class="{{ $currentStep != 1 ? '' : 'active' }}"><a href="#step-1"
                                                        type="button"></a></li>
                                                <li class="{{ $currentStep != 2 ? '' : 'active' }}"><a href="#step-2"
                                                        type="button"></a></li>
                                                <li class="{{ $currentStep != 3 ? '' : 'active' }}"><a href="#step-3"
                                                        type="button" disabled="disabled"></a></li>
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
                                                                <input type="text" wire:model="fname" class="form-control">
                                                                @error('fname')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>  
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="description">Last Name</label><br />
                                                                <input type="text" wire:model="lname" class="form-control">
                                                                @error('lname')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Email:</label>
                                                        <input type="email" wire:model="email" class="form-control"
                                                            id="taskTitle">
                                                        @error('email')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="row mb-3 ">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="description">Phone</label><br />
                                                                <input type="number" wire:model="phone" class="form-control">
                                                                @error('phone')
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
                                                                <input name="name" type="text" wire:model="zipcode" class="form-control">
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
                                                    <button class="btn text-light" style="background: #0071ef"
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
                                                                <label for="description">Office medical name</label><br />
                                                                <input type="text" wire:model="name_cabinet" class="form-control">
                                                                @error('name_cabinet')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="description">Office phone number</label><br />
                                                                <input type="number" wire:model="phone_cabinet" class="form-control">
                                                                @error('phone_cabinet')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="description">Office email address</label><br />
                                                        <input type="email" wire:model="email_cabinet" class="form-control">
                                                        @error('email_cabinet')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="row mb-3 ">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="description">Type Cabinet</label><br />

                                                                <select wire:model="type_id" class="form-control">
                                                                    <option value=""></option>
                                                                    @foreach ($types as $item )
                                                                    <option value="0">select</option>
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
                                                            <textarea name="address_cabinet" rows="5" wire:model="address_cabinet" class="form-control"></textarea>
                                                        @error('address_cabinet')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <button class="btn text-light " style="background: #0071ef"
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
                                                            <em class="icon icon-circle icon-circle-xxl mb-4 ni ni-check bg-primary-dim"></em>
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
                                                    <button class="btn text-light " style="background: #0071ef"
                                                        wire:click="submitForm">Finish!</button>
                                                    <button class="btn btn-danger nextBtn pull-right"
                                                        wire:click="back(2)">Back</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
</div>
