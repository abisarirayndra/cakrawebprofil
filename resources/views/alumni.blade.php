@extends('master.master')

@section('content')
        <section class="page-section bg-dark" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-warning">Alumni - Alumni Berprestasi</h2>
                    <h3 class="section-subheading text-white">Lembaga terpercaya, terbukti dengan lulusan yang berprestasi</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/img/team/1.jpg')}}" alt="" />
                            <h4 class="text-warning">Kay Garland</h4>
                            <p class="text-white">Lead Designer</p>
                            <a class="btn btn-warning btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-warning btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-warning btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                            <p class="text-white mt-3">"Proses pembelajaran yang menyenangkan dan mudah dimengerti, mentor sangat profesional"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/img/team/2.jpg')}}" alt="" />
                            <h4 class="text-warning">Larry Parker</h4>
                            <p class="text-white">Lead Marketer</p>
                            <a class="btn btn-warning btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-warning btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-warning btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                            <p class="text-white mt-3">"Proses pembelajaran yang menyenangkan dan mudah dimengerti, mentor sangat profesional"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/img/team/3.jpg')}}" alt="" />
                            <h4 class="text-warning">Diana Petersen</h4>
                            <p class="text-white">Lead Developer</p>
                            <a class="btn btn-warning btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-warning btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-warning btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                            <p class="text-white mt-3">"Proses pembelajaran yang menyenangkan dan mudah dimengerti, mentor sangat profesional"</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        
   
@endsection