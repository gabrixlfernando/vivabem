@extends('layout.layout')

@section('title', 'Home')

@section('conteudo')

    <!--********************************
           Code Start From Here
         ******************************** -->


    <!--==============================
            Hero Area
            ==============================-->
    <div class="hero-wrapper hero-2" id="hero">
        <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
            data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true"
            data-ml-arrows="true">
            <div class="hero-slider" data-bg-src="assets/img/hero/hero_bg_2_15.png">
                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="assets/img/hero/hero_shape_2-12.png" alt="img">
                </div>
                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src="assets/img/hero/hero_shape_2-22.png" alt="img">
                </div>
                <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                    <img src="assets/img/hero/hero_shape_2-32.png" alt="img">
                </div>
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Aumente
                                    Sua</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Força</h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">E
                                    Viva Bem</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Agende uma Consulta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider" data-bg-src="assets/img/hero/hero_bg_2_25.png">
                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="assets/img/hero/hero_shape_2-12.png" alt="img">
                </div>
                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src="assets/img/hero/hero_shape_2-22.png" alt="img">
                </div>
                <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                    <img src="assets/img/hero/hero_shape_2-32.png" alt="img">
                </div>
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Aumente
                                    Sua</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Força</h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">E
                                    Viva Bem</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Agende uma Consulta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-arrow">
            <button data-slick-prev="#heroSlider2" class="slick-arrow slick-prev">ANT</button>
            <button data-slick-next="#heroSlider2" class="slick-arrow slick-next">PRÓX</button>
        </div>
    </div>
    <!--======== / Hero Section ========-->

    <!--==============================
            Service Area
            ==============================-->
    <div class="service-bg2-area" data-bg-src="assets/img/bg/service-bg2.png">
        <!--==============================
                BMI Area
                ==============================-->
        <div class="bmi-area-1 space">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="title-area mb-30">
                            <span class="sub-title">TESTE SEU IMC</span>
                            <h2 class="sec-title text-white fw-semibold">ÍNDICE DE MASSA CORPORAL</h2>
                            <p class="sec-text">O IMC é uma ferramenta amplamente utilizada para avaliar o peso corporal em
                                relação à altura. Ele pode fornecer uma indicação geral de se um indivíduo está dentro de
                                uma faixa de peso saudável.</p>
                        </div>
                        <div class="bmi-table mb-lg-0 mb-40">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">IMC</th>
                                        <th scope="col">STATUS DE PESO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Abaixo de 18.5</th>
                                        <td>Abaixo do Peso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18.5 - 24.9</th>
                                        <td>Saudável</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">25.0 - 29.9</th>
                                        <td>Acima do Peso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">30.0 - Acima</th>
                                        <td>Obeso</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="bmi-calculator-form">
                            <h4 class="form-title">Reserve seu Assento:</h4>
                            <form class="bmi-form" id="form" name="bmiCalc">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="weight" class="form-control style-border"
                                                placeholder="Peso / KG" type="text" name="weight">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="height" class="form-control style-border"
                                                placeholder="Altura / CM" type="text" name="height">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control style-border" name="age"
                                                id="age" placeholder="Idade">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="sex"
                                                id="sex" placeholder="Sexo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input for="bmi_result" class="form-control style-border" placeholder="Seu IMC"
                                        type="text" name="bmi">
                                </div>
                                <div class="form-group">
                                    <input for="bmi_message" placeholder="Isso Significa"
                                        class="form-control style-border" type="text" name="meaning">
                                </div>
                                <div class="btn style3">
                                    <input type="button" value="Calcular IMC" onClick="calculateBMI()">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
                Service Area 01
                ==============================-->
        <div class="service-area-1 space-bottom overflow-hidden">
            <div class="container">
                <div class="title-area">
                    <span class="sub-title">Nossos Recursos</span>
                    <h2 class="sec-title text-white fw-semibold">SERVIÇOS QUE ESTAMOS OFERECENDO</h2>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row global-carousel service-slider-1 style2" data-slide-show="4" data-ml-slide-show="3"
                    data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                    data-dots="false">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Toneladas de
                                        Equipamentos</a>
                                </h4>
                                <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque
                                    sagittis
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Fileiras de Cardio</a>
                                </h4>
                                <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque
                                    sagittis
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-3.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Pumping Cardíaco</a></h4>
                                <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque
                                    sagittis
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-4.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Treinamento de Força</a>
                                </h4>
                                <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque
                                    sagittis
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Toneladas de
                                        Equipamentos</a>
                                </h4>
                                <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque
                                    sagittis
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Fileiras de Cardio</a>
                                </h4>
                                <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque
                                    sagittis
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-3.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Pumping Cardíaco</a></h4>
                                <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque
                                    sagittis
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-4.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Treinamento de Força</a>
                                </h4>
                                <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque
                                    sagittis
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <div class="sec-shape2-bottom">
        <img src="assets/img/bg/sec-shape2-top.png" alt="img">
    </div>
    </div>

    <!--==============================
            schedule Area
            ==============================-->
    <div class="schedule-area-1 space">
        <div class="container container2">
            <div class="title-area text-center">
                <span class="sub-title">Our Classes</span>
                <h2 class="sec-title fw-semibold">OUR TRAINING SCHEDULE</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab-1">
                        <div class="filter-menu-active mb-50 text-center">
                            <button data-filter=".cat1" class="active btn style4 style-r0" type="button">ALL
                                EVENTS</button>
                            <button class="btn style4 style-r0" data-filter=".cat2" type="button">CARDIO</button>
                            <button class="btn style4 style-r0" data-filter=".cat3" type="button">OPEN GYM</button>
                            <button class="btn style4 style-r0" data-filter=".cat4" type="button">TOTAL BODY</button>
                            <button class="btn style4 style-r0" data-filter=".cat5" type="button">CROSSFIT</button>
                        </div>
                        <div class="filter-active-cat1">
                            <div class="filter-item cat1">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat2">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense <br>
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat3">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat4">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat5">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
            Video Area
            ==============================-->
    <div class="video-area-1">
        <div class="container">
            <div class="video-wrap">
                <a data-bg-src="assets/img/normal/video-bg1.png" href="https://www.youtube.com/watch?v=P7fi4hP_y80"
                    class="play-btn popup-video">
                    <i class="fa-sharp fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </div>

    <!--==============================
            Portfolio Area
            ==============================-->
    <div class="portfolio-area-1" data-bg-src="assets/img/bg/portfolio-bg-1.png">

        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Nosso Portfólio</span>
                <h2 class="sec-title text-white fw-semibold">NOSSO PORTFÓLIO DE TRABALHOS</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flip-gallery-area">
                <div class="flip-gallery">
                    <ul class="flip-items">
                        <li>
                            <div class="gallery-card gallery-flip">
                                <div class="gallery-img">
                                    <img src="assets/img/project/project1_12.png" alt="imagem do portfólio">
                                </div>
                                <div class="gallery-content">
                                    <div class="media-left">
                                        <h6 class="gallery-content_subtitle">Premier Logística</h6>
                                        <h4 class="gallery-content_title">Treinamento de Fitness Cockfights Rumble</h4>
                                    </div>
                                    <a href="assets/img/project/project1_12.png" class="icon-btn popup-image">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="gallery-card gallery-flip">
                                <div class="gallery-img">
                                    <img src="assets/img/project/project1_22.png" alt="imagem do portfólio">
                                </div>
                                <div class="gallery-content">
                                    <div class="media-left">
                                        <h6 class="gallery-content_subtitle">Premier Logística</h6>
                                        <h4 class="gallery-content_title">Treinamento de Fitness Cockfights Rumble</h4>
                                    </div>
                                    <a href="assets/img/project/project1_22.png" class="icon-btn popup-image">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="gallery-card gallery-flip">
                                <div class="gallery-img">
                                    <img src="assets/img/project/project1_32.png" alt="imagem do portfólio">
                                </div>
                                <div class="gallery-content">
                                    <div class="media-left">
                                        <h6 class="gallery-content_subtitle">Premier Logística</h6>
                                        <h4 class="gallery-content_title">Treinamento de Fitness Cockfights Rumble</h4>
                                    </div>
                                    <a href="assets/img/project/project1_32.png" class="icon-btn popup-image">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
            wcu area
            ==============================-->
    <div class="wcu-area-2 space">
        <div class="container container2">
            <div class="row justify-content-between">
                <div class="col-xl-6 align-self-center order-xl-2">
                    <div class="wcu-thumb-wrap ms-xl-5 mb-xl-0 mb-40">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="wcu-thumb2">
                                    <img src="assets/img/normal/wcu_2-1.png" alt="img">
                                </div>
                                <div class="wcu-grid2 mt-4" data-bg-src="assets/img/bg/wcu_box-bg.png">
                                    <div class="details">
                                        <span class="wcu-grid_text"> <span class="counter-number">15000</span>+ Estudantes
                                            Felizes e Bem-sucedidos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="wcu-grid2 mb-4 mt-sm-0 mt-4 bg-theme">
                                    <div class="details">
                                        <span class="wcu-grid_text"> <span class="counter-number">25</span>+ Anos de
                                            Experiência</span>
                                    </div>
                                </div>
                                <div class="wcu-thumb2">
                                    <img src="assets/img/normal/wcu_2-2.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-xl-1">
                    <div class="title-area">
                        <span class="sub-title">POR QUE NOS ESCOLHER</span>
                        <h2 class="sec-title fw-semibold">OFERECEMOS NOSSO <br> SUPORTE DE FITNESS 100% CONFIÁVEL</h2>
                        <p class="sec-text">Defina seus objetivos específicos de musculação. Determine o que você deseja
                            alcançar em termos de tamanho muscular, força e físico geral. Estabeleça metas realistas e
                            mensuráveis que orientarão seu plano de treinamento e nutrição.</p>
                        <div class="about-grid-wrap mt-40">
                            <div class="about-grid style2">
                                <div class="about-grid_icon">
                                    <img src="assets/img/icon/wcu-icon_2-1.svg" alt="img">
                                </div>
                                <div class="about-grid_content">
                                    <h4 class="about-grid_title">Instrutor Especializado</h4>
                                    <p class="about-grid_text">Envio regular em 30 dias</p>
                                </div>
                            </div>
                            <div class="about-grid style2">
                                <div class="about-grid_icon">
                                    <img src="assets/img/icon/wcu-icon_2-2.svg" alt="img">
                                </div>
                                <div class="about-grid_content">
                                    <h4 class="about-grid_title">Equipamento Moderno</h4>
                                    <p class="about-grid_text">Envio rápido em 24 horas</p>
                                </div>
                            </div>
                        </div>
                        <p class="sec-text">Implemente os princípios de sobrecarga progressiva em seu treinamento. Aumente
                            gradualmente o peso, as repetições ou a intensidade de seus exercícios ao longo do tempo...</p>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="btn style-r0">Agende uma Consulta</a>
                        <div class="about-info-wrap style2">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="details">
                                <p class="about-info-title">Ligue para Nós 24/7</p>
                                <a class="about-info-link" href="tel:+25825692582">+236-3256.21456</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
                wcu area 02 end
            ==============================-->

    <div class="bg-img-sec" data-bg-src="assets/img/bg/team-bg-2.png">
        <!--==============================
                team area 02
                ==============================-->
        <div class="team-area-2 space overflow-hidden">
            <div class="container container2">
                <div class="title-area text-center text-sm-start">
                    <span class="sub-title">Nossos Membros</span>
                    <h2 class="sec-title text-white fw-semibold">CONHEÇA SEU INSTRUTOR</h2>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row global-carousel team-slider-2" data-slide-show="4" data-ml-slide-show="3"
                    data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                    data-dots="false">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-1.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-2.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-3.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-4.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-1.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-2.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-3.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-4.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!--==============================
                Counter Area
                ==============================-->
        <div class="counter-area-2 overflow-hidden">
            <div class="container container2">
                <div class="row justify-content-between">
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="assets/img/icon/counter-icon_2-1.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">3658</span>+</h2>
                                <p class="counter-card_text">Satisfied Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="assets/img/icon/counter-icon_2-2.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">658</span>+</h2>
                                <p class="counter-card_text">Expert Members</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="assets/img/icon/counter-icon_2-3.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">368</span>+</h2>
                                <p class="counter-card_text">Modern Equipment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="assets/img/icon/counter-icon_2-4.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">153</span>+</h2>
                                <p class="counter-card_text"> Tons Of Harvest</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ad-slider">
            <div class="global-carousel" data-autoplay-speed="1" data-speed="10000">
                <h2 class="ad-slider_title">Fitmas <span>FITNESS</span> CENTER </h2>
                <h2 class="ad-slider_title">Fitmas <span>FITNESS</span> CENTER </h2>
            </div>
        </div>
    </div>

    <!--==============================
            Goal Area
            ==============================-->
    <!-- Área de Metas -->
    <section class="goal-area space">
        <div class="container container2">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="goal-thumb-2 mb-40 mb-lg-0">
                        <div class="img-1">
                            <img src="assets/img/normal/goal_2-2.png" alt="img">
                        </div>
                        <div class="img-2 jump">
                            <img src="assets/img/normal/goal_2-1.png" alt="img">
                        </div>
                        <div class="wcu-grid movingX">
                            <div class="icon">
                                <img src="assets/img/icon/wcu-icon_1-1.svg" alt="img">
                            </div>
                            <div class="details">
                                <h3 class="wcu-grid_year"><span class="counter-number">25</span>+</h3>
                                <span class="wcu-grid_text">Anos de Experiência</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="title-area">
                        <span class="sub-title">Meta da Fitmas</span>
                        <h2 class="sec-title fw-semibold">LIBERE SEU PLENO POTENCIAL, ALCANCE SEUS OBJETIVOS DE FITNESS.
                        </h2>
                    </div>
                    <div class="goal-grid-wrap">
                        <div class="about-grid style3">
                            <div class="about-grid_icon">
                                <img src="assets/img/icon/goal-icon_1-1.svg" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Treinamento de Fitness Gratuito</h4>
                                <p class="about-grid_text">Pedale em direção à forma física em nosso estúdio especializado
                                    em ciclismo indoor. Equipado com bicicletas estacionárias...</p>
                            </div>
                        </div>
                        <div class="about-grid style3">
                            <div class="about-grid_icon">
                                <img src="assets/img/icon/goal-icon_1-2.svg" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Cardio e Força</h4>
                                <p class="about-grid_text">Pedale em direção à forma física em nosso estúdio especializado
                                    em ciclismo indoor. Equipado com bicicletas estacionárias...</p>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a class="btn style-r0" href="service-details.html">Saiba Mais</a>
                            <a class="btn btn-border style-r0" href="service-details.html">Ver Todos os Serviços</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
            Cta Area
            ==============================-->
    <!-- Área de Chamada para Ação (CTA) -->
    <section class="cta-area space" data-bg-src="assets/img/bg/cta-bg1.png">
        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">Agende uma Consulta</span>
                            <h2 class="sec-title text-white fw-semibold">TENHA UMA CONSULTA GRATUITA AGORA MESMO AQUI!</h2>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn style2 style-r0">Agende uma Consulta</a>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title text-white">Precisa de Ajuda?</p>
                                    <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
        Pricing plan Area
        ==============================-->
    <div class="pricing-area">
        <div class="container">
            <div class="title-area text-center">
                <h3 class="sub-title">Preços Planos</h3>
                <h2 class="sec-title">Nossos Planos</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_bg">
                            <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="assets/img/icon/picing-icon_1-1.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano Básico</h3>
                        <h4 class="pricing-card_price"><span class="currency">R$</span>49.99<span
                                class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e
                            equipamentos da academia. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinamentos</li>
                                <li><i class="far fa-check-circle"></i>Chuveiro e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="#">Escolha Este Plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card pricing-card_active">
                        <div class="pricing-card_bg">
                            <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="assets/img/icon/picing-icon_1-2.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano Padrão</h3>
                        <h4 class="pricing-card_price"><span class="currency">R$</span>99.99<span
                                class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e
                            equipamentos da academia. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinamentos</li>
                                <li><i class="far fa-check-circle"></i>Chuveiro e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="#">Escolha Este Plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_bg">
                            <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="assets/img/icon/picing-icon_1-3.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano Gold</h3>
                        <h4 class="pricing-card_price"><span class="currency">R$</span>149.99<span
                                class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e
                            equipamentos da academia. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinamentos</li>
                                <li><i class="far fa-check-circle"></i>Chuveiro e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="#">Escolha Este Plano</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
        Blog Area
        ==============================-->
    <section class="blog-area space bg-smoke3">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Postsagem no Blog
                </span>
                <h2 class="sec-title">Leia Nossos Últimos Artigos</h2>
            </div>
            <div class="row global-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false"
                data-md-dots="true">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_1.png" alt="imagem do blog">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dicas e Conselhos de Nutrição
                                    para Praticantes de Academia</a></h3>
                            <p class="blog-text">Essas associações especializadas são projetadas para tornar o fitness
                                acessível e acessível para esse grupo específico...</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_2.png" alt="imagem do blog">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Descubra Seu Verdadeiro Potencial
                                    no Fitmas</a></h3>
                            <p class="blog-text">Se você está visitando a área ou deseja trazer um amigo para um treino,
                                oferecemos passes diários e passes de convidados...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_3.png" alt="imagem do blog">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Ofereça opções com desconto para
                                    estudantes e idosos</a></h3>
                            <p class="blog-text">Entendemos a importância da aptidão para toda a família. Nossa opção
                                familiar permite a participação de várias famílias...</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_1.png" alt="imagem do blog">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dicas de Nutrição e Conselhos
                                    para Praticantes de Academia</a></h3>
                            <p class="blog-text">Essas associações especializadas são projetadas para tornar o fitness
                                acessível e acessível para esse grupo específico...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_2.png" alt="imagem do blog">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Descubra Seu Verdadeiro Potencial
                                    no Fitmas</a></h3>
                            <p class="blog-text">Se você está visitando a área ou deseja trazer um amigo para um treino,
                                oferecemos passes diários e passes de convidados...</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_3.png" alt="imagem do blog">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Ofereça opções com desconto para
                                    estudantes e idosos</a></h3>
                            <p class="blog-text">Entendemos a importância da aptidão para toda a família. Nossa opção
                                familiar permite a participação de várias famílias...</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>









@endsection
