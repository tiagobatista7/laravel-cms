@extends('site.layout')

@section('title', 'Laravel - CMS')

@section('content')


<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-6">
                    <div class="slider_text ">
                    <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s" >{{$front_config['banner_title']}}</h3>
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">{{$front_config['banner_subtitle']}}</p>
                        <div class="video_service_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                            <a href="#" class="boxed-btn2">Criar o meu site</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="phone_thumb wow fadeInDown" data-wow-duration="1.1s" data-wow-delay=".2s">
                        <img src="{{asset('assets/img/ilstrator/phone.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- slider_area_end -->

<!-- service_area  -->
<div class="service_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                    <h3>Chegue na frente <br>
                            e alcance mais clientes.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single_service text-center wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
                    <div class="thumb">
                            <img src="img/icon/2.svg" alt="">
                    </div>
                    <h5>Dashboard <br>
                            intuitivo</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                            <div class="thumb">
                                    <img src="img/icon/1.svg" alt="">
                            </div>
                            <h5>Administre suas páginas <br>
                                    com muita facilidade</h5>
                        </div>
            </div>
            <div class="col-lg-4 col-md-4">

                        <div class="single_service text-center wow fadeInUp " data-wow-duration=".8s" data-wow-delay=".6s">
                            <div class="thumb">
                                    <img src="img/icon/3.svg" alt="">
                            </div>
                            <h5>Servidor estável e seguro <br/>
                                    para os seus clientes</h5>
                        </div>
            </div>
        </div>
    </div>
</div>
<!--/ service_area  -->


@endsection
