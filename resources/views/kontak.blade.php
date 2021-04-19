@extends('master.master')

@section('content')
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger" href="{{route('welcome')}}"><h6>Cakra Krisna Manggala</h6></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://cat.cakrakrisnamanggala.com/public/login">CAT</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">E-Learning</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('kontak')}}">Hubungi Kami</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="#team">Team</a></li> --}}
                        {{-- <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                    <h3 class="section-subheading text-white">Untuk informasi lebih lanjut</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-12 text-center">
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                        </span>
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fab fa-telegram-plane fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                </div>
                {{-- <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form> --}}
            </div>
        </section>
        
   
@endsection
