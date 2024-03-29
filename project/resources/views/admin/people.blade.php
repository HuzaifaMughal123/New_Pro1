@extends('backendLayout.main')
@section('content')
<!-- main content start -->
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <!-- breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Elements</a></li>
                <li class="breadcrumb-item active" aria-current="page">People Cards</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->

        <!-- people -->
        <section class="people">
            <section class="w3l-team-block">
                <!-- //people cards style 1 -->
                <div class="card card_border mb-5">
                    <div class="cards__heading">
                        <h3>People Cards -<span> Version 1</span></h3>
                    </div>
                    <div class="card-body">
                        <div class="teams mb-4">
                            <div class="row px-2">
                                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 px-2">
                                    <div class="item">
                                        <div class="d-team-grid team-info">
                                            <div class="column">
                                                <a href="team-single.html"><img src="assets/images/team.jpg" alt="" /></a>
                                            </div>
                                            <div class="team-member">
                                                <h3 class="name-pos mb-0"><a href="team-single.html">Anthony</a></h3>
                                                <p>Project Manager</p>
                                                <div class="social">
                                                    <a href="#facebook" class="team-facebook"><span class="fa fa-facebook"
                                                            aria-hidden="true"></span></a>
                                                    <a href="#twitter" class="team-twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                                    <a href="#instagram" class="team-instagram"><span class="fa fa-instagram"
                                                            aria-hidden="true"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 px-2">
                                    <div class="item">
                                        <div class="d-team-grid team-info">
                                            <div class="column">
                                                <a href="team-single.html"><img src="assets/images/team2.jpg" alt="" /></a>
                                            </div>
                                            <div class="team-member">
                                                <h3 class="name-pos mb-0"><a href="team-single.html">Dennis Jack</a>
                                                </h3>
                                                <p>Team Lead</p>
                                                <div class="social">
                                                    <a href="#facebook" class="team-facebook"><span class="fa fa-facebook"
                                                            aria-hidden="true"></span></a>
                                                    <a href="#twitter" class="team-twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                                    <a href="#instagram" class="team-instagram"><span class="fa fa-instagram"
                                                            aria-hidden="true"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 px-2">
                                    <div class="item">
                                        <div class="d-team-grid team-info">
                                            <div class="column">
                                                <a href="team-single.html"><img src="assets/images/team3.jpg" alt="" /></a>
                                            </div>
                                            <div class="team-member">
                                                <h3 class="name-pos mb-0"><a href="team-single.html">Harold</a></h3>
                                                <p>Developer</p>
                                                <div class="social">
                                                    <a href="#facebook" class="team-facebook"><span class="fa fa-facebook"
                                                            aria-hidden="true"></span></a>
                                                    <a href="#twitter" class="team-twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                                    <a href="#instagram" class="team-instagram"><span class="fa fa-instagram"
                                                            aria-hidden="true"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-0 px-2">
                                    <div class="item">
                                        <div class="d-team-grid team-info">
                                            <div class="column">
                                                <a href="team-single.html"><img src="assets/images/team4.jpg" alt="" /></a>
                                            </div>
                                            <div class="team-member">
                                                <h3 class="name-pos mb-0"><a href="team-single.html">Lawrence</a></h3>
                                                <p>Designer</p>
                                                <div class="social">
                                                    <a href="#facebook" class="team-facebook"><span class="fa fa-facebook"
                                                            aria-hidden="true"></span></a>
                                                    <a href="#twitter" class="team-twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                                    <a href="#instagram" class="team-instagram"><span class="fa fa-instagram"
                                                            aria-hidden="true"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //teams1 -->
            <!-- //people cards style 2 -->
            <div class="card card_border mb-5">
                <div class="cards__heading">
                    <h3>People Cards -<span> Version 2</span></h3>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-lg-3 col-md-6 mb-4 px-2">
                            <div class="card text-center card_border py-2">
                                <div class="card-body">
                                    <div class="team-main-19">
                                        <a href="#url"><img class="rounded-circle" src="assets/images/people1.jpg" alt=" "></a>
                                        <div class="right-team-9">
                                            <div>
                                                <h5><a href="#url" class="card__title mb-2 mt-3">Alexander smith</a>
                                                </h5>
                                                <p class="">Web designer</p>
                                            </div>
                                            <div class="people-social mt-3">
                                                <a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
                                                <a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
                                                <a href="#team" class="linkedin"><span class="fa fa-linkedin"></span></a>
                                            </div>
                                            <a href="#url" class="btn mt-4 profile-btn text-primary">View profile </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 px-2">
                            <div class="card text-center card_border py-2">
                                <div class="card-body">
                                    <div class="team-main-19">
                                        <a href="#url"><img class="rounded-circle" src="assets/images/people2.jpg" alt=" "></a>
                                        <div class="right-team-9">
                                            <div>
                                                <h5><a href="#url" class="card__title mb-2 mt-3">Elizabeth lisa</a>
                                                </h5>
                                                <p class="">Web designer</p>
                                            </div>
                                            <div class="people-social mt-3">
                                                <a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
                                                <a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
                                                <a href="#team" class="linkedin"><span class="fa fa-linkedin"></span></a>
                                            </div>
                                            <a href="#url" class="btn mt-4 profile-btn text-primary">View profile </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 px-2">
                            <div class="card text-center card_border py-2">
                                <div class="card-body">
                                    <div class="team-main-19">
                                        <a href="#url"><img class="rounded-circle" src="assets/images/people3.jpg" alt=" "></a>
                                        <div class="right-team-9">
                                            <div>
                                                <h5><a href="#url" class="card__title mb-2 mt-3">Michael watson</a>
                                                </h5>
                                                <p class="">Web designer</p>
                                            </div>
                                            <div class="people-social mt-3">
                                                <a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
                                                <a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
                                                <a href="#team" class="linkedin"><span class="fa fa-linkedin"></span></a>
                                            </div>
                                            <a href="#url" class="btn mt-4 profile-btn text-primary">View profile </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 px-2">
                            <div class="card text-center card_border py-2">
                                <div class="card-body">
                                    <div class="team-main-19">
                                        <a href="#url"><img class="rounded-circle" src="assets/images/people4.jpg" alt=" "></a>
                                        <div class="right-team-9">
                                            <div>
                                                <h5><a href="#url" class="card__title mb-2 mt-3">Johnson Ker</a>
                                                </h5>
                                                <p class="">Web designer</p>
                                            </div>
                                            <div class="people-social mt-3">
                                                <a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
                                                <a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
                                                <a href="#team" class="linkedin"><span class="fa fa-linkedin"></span></a>
                                            </div>
                                            <a href="#url" class="btn mt-4 profile-btn text-primary">View profile </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //people cards style 2 -->
        </section>
        <!-- //people -->

    </div>
    <!-- //content -->
</div>
<!-- main content end-->
</section>
@endsection