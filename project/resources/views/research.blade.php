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
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Research</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- research -->
<section class="section">
  <div class="container">
    <div class="row">
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-1.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Geography</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-2.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Mathematical</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-3.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Humanities</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-4.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Physical & Sciences</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-5.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Biological Sciences</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <!-- recharch item -->
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-6.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Archaeology</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /research -->

@endsection