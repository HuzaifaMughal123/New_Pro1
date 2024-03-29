@extends('layouts.main')
@section('content')
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Scholarship</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- scholarship -->
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6 mb-4 mb-md-0">
        <img class="img-fluid" src="images/scholarship/scholarship.jpg" alt="scholarship news">
      </div>
      <div class="col-md-6">
        <h2>SCHOLARSHIPS NEWS</h2>
        <strong class="mb-4 d-block"><i>Our campuses are living laboratories for sustainability.</i></strong>
        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore
          et.dolore magna aliquauis aute irure dolor.
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
          cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor, sit
          amet consectetur adipisicing elit. Quas cum ut ab nesciunt distinctio maxime expedita fugit laborum? Aliquid,
          quia.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <!-- scholarship item -->
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/scholarship/scholarship-item-1.jpg" alt="scholarship-thumb">
          <div class="card-body">
            <p class="mb-1">Engineering</p>
            <h4 class="card-title mb-3">CHEMICAL ENGINEERING</h4>
            <ul class="list-styled">
              <li>institutes</li>
              <li>Smart-affiliated research</li>
              <li>Digital Access to Scholarship</li>
              <li>Smart Catalyst</li>
              <li>Smart Library Portal</li>
              <li>Smart research programs</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- scholarship item -->
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/scholarship/scholarship-item-2.jpg" alt="scholarship-thumb">
          <div class="card-body">
            <p class="mb-1">Design & Arts</p>
            <h4 class="card-title mb-3">MUSIC & ARTS</h4>
            <ul class="list-styled">
              <li>institutes</li>
              <li>Smart-affiliated research</li>
              <li>Digital Access to Scholarship</li>
              <li>Smart Catalyst</li>
              <li>Smart Library Portal</li>
              <li>Smart research programs</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- scholarship item -->
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/scholarship/scholarship-item-3.jpg" alt="scholarship-thumb">
          <div class="card-body">
            <p class="mb-1">Design & Arts</p>
            <h4 class="card-title mb-3">GRAPHICS DESIGN</h4>
            <ul class="list-styled">
              <li>institutes</li>
              <li>Smart-affiliated research</li>
              <li>Digital Access to Scholarship</li>
              <li>Smart Catalyst</li>
              <li>Smart Library Portal</li>
              <li>Smart research programs</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /scholarship -->

@endsection