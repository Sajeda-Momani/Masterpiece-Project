@extends('Layout.master')


{{-- @section('title', '404') --}}
@section('content')
    <br>
    {{-- @include('sweetalert::alert') --}}

    <!-- Contact Area Start -->
    <div class="contact-area">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form">
                            <div class="contact-title mb-30">
                                <h2 class="title">Send A Quest</h2>
                            </div>
                            <form class="contact-form-style" id="contact-form" action="{{ route('contact.store') }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input name="name" placeholder="Name*" type="text" value="{{ old('name') }}"
                                            required />
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="email" placeholder="Email*" type="email"
                                            value="{{ old('email') }}" required />
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <input name="subject" placeholder="Subject*" type="text"
                                            value="{{ old('subject') }}" required />
                                        @error('subject')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <textarea name="message" placeholder="Your Message*" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <button class="btn btn-primary" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-info">
                            <div class="single-contact">
                                <div class="icon-box">
                                    <img src="assets/images/icons/contact-1.png" alt="">
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Address</h5>
                                    <p>Amman, Jordan <br>
                                        123 Al Tla'a Al Shamali
                                    </p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="icon-box">
                                    <img src="assets/images/icons/contact-2.png" alt="">
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Phone No</h5>
                                    <p><a href="tel:0123456789">+962 775 606 712</a></p>
                                    <p><a href="tel:0123456789">+962 775 606 713</a></p>
                                </div>
                            </div>
                            <div class="single-contact m-0">
                                <div class="icon-box">
                                    <img src="assets/images/icons/contact-3.png" alt="">
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Email/Web</h5>
                                    <p><a href="mailto:demo@example.com">Info@Smartify.com</a></p>
                                    <p><a href="https://www.example.com">www.Smartify.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->
    <!-- Map Area Start -->
    <div class="contact-map">
        <div id="mapid" class="mapouter">
            <div class="gmap_canvas">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25253.501264494214!2d35.87892311009981!3d32.008235183778744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sjo!4v1701270420007!5m2!1sen!2sjo"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- Map Area End -->
@endsection
