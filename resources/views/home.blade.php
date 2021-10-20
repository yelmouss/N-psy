@extends('layouts.app')


@section('style')


<style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 350px;
        ;
    }

    .carousel-item1:after {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.6);
    }
</style>

@endsection
@section('content')

<div class="container-fluid p-2">
    <h1 class="text-pink text-bold">Centre de formation marocain en relation d'aide !</h1>
</div>





<div id="demo" class="carousel slide" data-ride="carousel">



    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item carousel-item1 active">
            <img src="{{asset('fkg.png')}}" alt="" class="" width="1100" height="500">
            <div class="carousel-caption d-none d-md-block mb-5">
                <h1 class="text-xl text-light">Le monde a besoin de votre Aide</h1>
            </div>
        </div>

        <div class="carousel-item carousel-item1">
            <img src="{{asset('photo-2.png')}}" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption d-none d-md-block  mb-5 ">
                <h1 class="text-xl text-light"> Centre de Formations en Relation d'Aide</h1>
            </div>

        </div>
        <div class="carousel-item carousel-item1">
            <img src="https://images.unsplash.com/photo-1571844307880-751c6d86f3f3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8d29tYW4lMjBjb21wdXRlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80"
                alt="New York" width="1100" height="500">

            <div class="carousel-caption d-none d-md-block mb-5">
                <h1 class="text-xl text-light">Apprendre à son rythme</h1>
            </div>
        </div>

        <div id="particles-js" style="position: absolute;width : 100%"></div>


    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<hr>
<div class="container-fluid">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link text-bold text-pink text-md active" id="nav-Stress-tab" data-toggle="tab"
                href="#nav-Stress" role="tab" aria-controls="nav-Stress" aria-selected="true">Devenir , thérapeute</a>
            <a class="nav-item nav-link text-bold text-pink text-md" id="nav-Troubles-tab" data-toggle="tab"
                href="#nav-Troubles" role="tab" aria-controls="nav-Troubles" aria-selected="false"> Suivre des théparies
                collectives </a>
            <a class="nav-item nav-link text-bold text-pink text-md" id="nav-Maladies-tab" data-toggle="tab"
                href="#nav-Maladies" role="tab" aria-controls="nav-Maladies" aria-selected="false">Devenir
                coach-love</a>
            <!-- <a class="nav-item nav-link" id="nav-Relations-tab" data-toggle="tab" href="#nav-Relations" role="tab" aria-controls="nav-Relations" aria-selected="false">Relations familiales, couple</a>
     -->
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-Stress" role="tabpanel" aria-labelledby="nav-Stress-tab">
            <div class="card d-block w-100 col-12">
                <div class="card-header row border-0">
                    <img src="https://lnt.ma/wp-content/uploads/2021/03/anxiety.jpg" class="card-img-top col-3 h-100"
                        alt="">
                    <div class="col-9">
                        <div class="card-block px-2 img-overlay">
                            <h4 class="card-title  text-lg text-pink">Devenir thérapeute en relation d’aide !
                                <hr>
                            </h4>
                            <p class="card-text  text-lg">Voulez-vous devenir thérapeute ? Avez-vous le sens de
                                l'accompagnement <br> Rejoignez nous pour une formation complète !</p>
                        </div>
                        <hr>
                        <a class="btn bg-pink" href="{{ route('candidature') }}"> Candidature </a>
                        <hr>
                    </div>
                    <hr>
                    <div class="card-footer w-100 text-muted">
                        Le psychothérapeute soulage les personnes éprouvant des difficultés psychologiques,
                        comportementales, sexuelles ou d'origine psychosomatique. ... Il met en œuvre différentes
                        techniques de psychothérapies ( thérapie cognitive et comportementale, thérapie analytique,
                        psychanalyse…)</div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="nav-Troubles" role="tabpanel" aria-labelledby="nav-Troubles-tab">
            <div class="card d-block w-100 col-12">
                <div class="card-header row border-0">

                <div class="col-3 text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhdW2HSwbW-08uu0w5aawsQeiQTW-HjkD9Ubs70-gqDJNKCaTMgXGejfYS_3ZIzdxgRQ4&usqp=CAU"
                        class="card-img-top" alt="">
                        <hr>
                        <a class="btn bg-pink" href="stripe"> S'incrire </a>
                        <hr>

                        </div>
                    <div class="col-9">
                        <div class="card-block px-2 img-overlay">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn text-pink " data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Thérapie Groupe Item #1
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn text-pink  collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Thérapie Groupe Item #2
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn text-pink  collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Thérapie Groupe Item #3
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn text-pink  collapsed" data-toggle="collapse"
                                                data-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                Thérapie Groupe Item #4
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn text-pink collapsed" data-toggle="collapse"
                                                data-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                Thérapie Groupe Item #5
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <hr>
                    <!-- <div class="card-footer w-100 text-muted">
         Vous ressentez continuellement depuis plusieurs semaines une profonde tristesse ou une forte  perturbation de votre humeur ? <br>
         Vous  avez besoin de  comprendre les causes profondes de votre état, de donner du sens à ce que vous  vivez… ?</div> -->
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="nav-Maladies" role="tabpanel" aria-labelledby="nav-Maladies-tab">
            <div class="card d-block w-100 col-12">
                <div class="card-header row border-0">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm-TuUimMAV03hlZhrV1upsM_4RshQhTuhaaYt_ZA3AjNDHAZKxPZWy_r5bp6AdAZTh2M&usqp=CAU"
                        class="card-img-top col-3 h-100" alt="">
                    <div class="col-9">
                        <div class="card-block px-2 img-overlay">
                            <h4 class="card-title  text-lg text-pink">Maladies chroniques, Aidants
                                <hr>
                            </h4>
                            <p class="card-text  text-lg">Cancer, diabète, sclérose en plaques, maladie cardiaque, …</p>
                        </div>
                        <hr>
                    </div>
                    <hr>
                    <div class="card-footer w-100 text-muted">
                        Vous venez d'apprendre que vous ou l’un de vos proches est atteint d'une maladie chronique ?
                        <br>
                        Vous avez besoin d'en parler, d'être écouté, de trouver du soutien pour mieux vivre votre
                        maladie ?
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="nav-Relations" role="tabpanel" aria-labelledby="nav-Relations-tab">
            <div class="card d-block w-100 col-12">
                <div class="card-header row border-0">
                    <img src="https://test.psychologies.com/var/tests/storage/images/2/1/4/9/9412-1-fre-FR/3669.jpg"
                        class="card-img-top col-3 h-100" alt="">
                    <div class="col-9">
                        <div class="card-block px-2 img-overlay">
                            <h4 class="card-title  text-lg text-pink">Relations familiales, couple...
                                <hr>
                            </h4>
                            <p class="card-text  text-lg">Vivre ensemble au quotidien, faire des projets, dépasser les
                                moments de crise, faire face à une séparation…</p>
                        </div>
                        <hr>
                    </div>
                    <hr>
                    <div class="card-footer w-100 text-muted">
                        Vos relations avec votre partenaire, vos parents / beaux parents, ou vos enfants sont difficiles
                        ? <br>
                        Vous avez besoin d’aide pour y voir clair, prendre du recul, comprendre l’autre et améliorer vos
                        relations ?</div>
                </div>
            </div>
        </div>

    </div>
</div>

<hr>

<div class="container-fluid">
    <!-- <h1 class="text-pink text-bolder text-xl"></h1>
    <br> -->
    <h1 class="text-pink text-xl"> <i>Mot de la directrice : </i></h1>
</div>


<div class="card d-block w-100 col-12">
    <div class="card-header row border-0">
        <img src="{{asset('channels_profile.png')}}" class="card-img-top col-3" alt="">
        <div class="col-9">
            <div class="card-block px-2 img-overlay">
                <h4 class="card-title  text-lg text-pink">Mme Najoua Achour</h4>
                <p class="card-text  text-lg">Energy Healing</p>
                <a href="#" class="btn btn-dark">Contact</a>
            </div>
            <hr>
            <div class="card-footer w-100 text-muted">
                Je suis psychologue clinicienne formée initialement à la psychanalyse puis aux approches familiales
                systémiques et à l'approche centrée sur la personne. J'exerce depuis 1xxx auprès de patients atteints de
                maladies somatiques et de leurs proches.
            </div>
        </div>
    </div>
</div>




@endsection