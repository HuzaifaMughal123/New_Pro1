@extends('backendLayout.main')
@section('content')

<link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
<!-- main content start -->
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <!-- breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="/indexadmin">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Forms</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <!-- forms -->
        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Forms <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Enter Name</label>
                            <input type="text" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Email address</label>
                            <input  type="email" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Email" name="email" >
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                anyone else.</small>
                        </div>
                        <label for="exampleInputEmail1" class="input__label">Gender</label>
                        <select name="gnder" class="input__label form-control">
                            <option selected disable>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Enter Designation</label>
                            <input type="text" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="designation" placeholder="Enter Designation">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Contact</label>
                            <input type="number" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="contact" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Image</label>
                            <input type="file" class="form-control input-style" 
                                aria-describedby="emailHelp" name="contact" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="input__label">Password</label>
                            <input type="password" class="form-control input-style" id="exampleInputPassword1" 
                            name="Password" placeholder="Password">
                        </div>
                        <div class="form-check check-remember check-me-out">
                            <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1">
                            <label class="form-check-label checkmark" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" name="btn" class="btn btn-primary btn-style mt-4">Submit</button>
                    </form>
                </div>
            </div>
            <!-- //forms 1 -->

           
          
    </div>
    <!-- //content -->

</div>
<!-- main content end-->
</section>
@endsection