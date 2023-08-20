<div>
    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section service-title style-1"
        style="background-image: url({{ asset('landing/assets/images/pageheader/pageheader.jpg') }})">
        <div class="page-header-content">
            <div class="container">
                <div class="page-header-content-inner">
                    <div class="page-title">
                        <h2>Contact Us</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="index.html">PAGES</a></li>
                        <li class="active">CONTACT</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->
 
    <!-- ==========Contact Section Start Here========== -->
    <section class="contact-us padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="row">
                    <div class="col-12">
                        @if (session()->has('success_message'))
                            <div class="alert alert-fill alert-primary alert-dismissible alert-icon">
                                <em class="icon ni ni-check-circle"></em>
                                {{ session('success_message') }}
                                <button class="close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="contact-info">
                            <h3>Contact Information</h3>
                            <ul>
                                <li>
                                    <h6>Office Address:</h6>
                                    <p>4992 Bryan Avenue, Prior Lake,Minnesota
                                    </p>
                                </li>
                                <li>
                                    <h6>Phone Number:</h6>
                                    <p>+44-20-7328-4499</p>
                                </li>
                                <li>
                                    <h6>Email Address:</h6>
                                    <a href="#">support@validtemplates.com</a>
                                </li>
                                <li>
                                    <h6>Website Address:</h6>
                                    <a href="http://LabArtisan/">http://LabArtisan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="here-form">
                            <h3>We Love To Hear From You</h3>
                            <form>
                                <input type="text" placeholder="Your Name" wire:model="nameContact">
                                @error('nameContact')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <input placeholder="Phone Number" wire:model="phoneContact">
                                @error('phoneContact')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <input type="email" placeholder="Email" wire:model="emailContact">
                                @error('emailContact')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <input type="text" placeholder="Subject Message" wire:model="subjectContact">
                                @error('subjectContact')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <textarea rows="6" placeholder="Message" wire:model="message"></textarea>
                                @error('nameContact')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <div class="row gy-4 mt-3">
                                    <div class="form-group" style="margin-left: 200px; ">
                                        <input class=" btn btn-light text-primary" type="button" value="Contact Now"
                                            wire:click="submitForm" style="cursor: pointer">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Contact Section Ends Here========== -->


    <!-- ==========Map Section Start Here========== -->
    <div class="map-section">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.227736753981!2d90.38698831452395!3d23.739256984594892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85c740f17d1%3A0xdd3daab8c90eb11f!2sLabArtisan!5e0!3m2!1sen!2sbd!4v1613220503501!5m2!1sen!2sbd"
                allowfullscreen="" aria-hidden="false" tabindex="0" id="g-map"></iframe>
        </div>
    </div>
    <!-- ==========Map Section Ends Here========== -->



    <!-- ==========Sponsor Section Start Here========== -->
    <div class="sponsor-section">
        <div class="container">
            <div class="sponsor-area">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="{{ asset('landing/assets/images/sponsor/1.png') }}" alt="sponso-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="{{ asset('landing/assets/images/sponsor/2.png') }}" alt="sponso-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="{{ asset('landing/assets/images/sponsor/3.png') }}" alt="sponso-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="{{ asset('landing/assets/images/sponsor/4.png') }}" alt="sponso-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="{{ asset('landing/assets/images/sponsor/5.png') }}" alt="sponso-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="{{ asset('landing/assets/images/sponsor/6.png') }}" alt="sponso-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Sponsor Section Ends Here========== -->
</div>
