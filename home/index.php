<?php
include('../library/header.php');

?>
<div class="Hero ">

    <body>
        <?php include('../library/nav_bar.php'); ?>
        <!-- nav bar section end  -->
        <div class="slider">
            <div id="carouselExampleCaptions" class="carousel  slide">
                <div class="carousel-indicators pb-4">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item c-item active">
                        <img src="../assets/image1.jpg" class="d-block w-100 c-image" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>World Famous Foods</h2>
                            <p>Take your Food form us.</p>
                            <button type="button" class="btn btn-danger text-dark">Place an Order</button>
                        </div>
                    </div>
                    <div class="carousel-item c-item">
                        <img src="../assets/image2.jpg" class="d-block w-100 c-image" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Get Your Foods Easy and Fase</h2>
                            <p>We will delevery your foods withing 20 min</p>
                            <button type="button" href="#food_oder" class=" btn btn-danger text-dark">Place an
                                Order</button>
                        </div>
                    </div>
                    <div class="carousel-item c-item">
                        <img src="../assets/image3.jpg" class="d-block w-100 c-image" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Place Your Oder via Our Website</h2>
                            <p>Get 10% Discount for all order place via our website</p>
                            <button type="button" href="#food_oder" class=" btn btn-danger text-dark">Place an
                                Order</button>
                        </div>
                    </div>
                    <div class="carousel-item c-item">
                        <img src="../assets/image4.jpg" class="d-block w-100 c-image" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Third slide label</h2>
                            <p>Some representative placeholder content for the third slide.</p>
                            <button type="button" href="#food_oder" class="btn btn-danger text-dark">Place an
                                Order</button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Registration modle start -->

        <div class="modal fade registration_modle " tabindex="-1" id="registration_modle">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header text-center">Register Here
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contect Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="+94 000 000 000">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword5" class="form-label">Password</label>
                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                            <div id="passwordHelpBlock" class="form-text">
                                Your password must be 8-20 characters long, contain letters and numbers, and
                                must
                                not
                                contain
                                spaces, special
                                characters, or emoji.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword5" class="form-label">Confirm Password</label>
                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                            <div id="passwordHelpBlock" class="form-text"></div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary">Register</button>
                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#login_modle">Alrady a User</button>
                        <button type=" button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registration modle end -->

        <!-- Login  modle start -->

        <div class="modal fade login_modle " tabindex="-1" id="login_modle">
            <div class="modal-dialog ">
                <form action="">
                    <div class="modal-content">
                        <div class="modal-header text-center">Login Here
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">loging</button>
                                <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#registration_modle">New Here ?</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Login modle end -->
        <!-- driver  modle strat -->
        <div class="modal fade Rider_modle " tabindex="-1" id="Rider_modle">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header text-center">Earn Extra Money With us
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <p>
                            You can earn extra money with us working as a food Delivery rider.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat deserunt aliquid a
                            fuga!
                            Laborum sapiente eveniet ipsam dolores, praesentium quod perferendis beatae amet odit
                            animi iure, iusto consectetur accusamus, vero doloremque veritatis. Ea magni ipsam ex
                            dignissimos repellat unde totam, iusto, ad debitis deserunt nemo saepe ut, adipisci
                            delectus. Voluptates recusandae officiis accusamus cumque sed cum est, non nostrum
                            deserunt animi, aut odit. Odio, quaerat voluptates? Porro pariatur sit dolorem! Minus et
                            quos ducimus rem, fugiat iusto beatae quas repellendus!
                        </p>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contect Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="+94 000 000 000">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword5" class="form-label">Password</label>
                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword5" class="form-label">Confirm Password</label>
                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                            <div id="passwordHelpBlock" class="form-text"></div>
                        </div>
                        <div>
                            <label for="formFileLg" class="form-label">Upload your Driving licens</label>
                            <input class="form-control form-control-lg" id="formFileLg" type="file">
                        </div>
                        <div class="form-check pt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Agreed Terms and Condition
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type=" button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- deriver modle end -->

        /


        <div class="oder_food pt-4" id="food_oder">
            <div class="container  main-Window bg-white pt-3">

                <h1 class='text-center title-class'>Place Your Oder</h1>
                <div class="row ">

                    <!-- filetr section  start-->
                    <div class="col-sm-4 col-lg-3 filter-section ">
                        <h2>Filter your result</h2>
                        <hr>
                        <p class pb-2>Sort By</p>
                        <select class="form-select form-select-sm" aria-label="Default select example">
                            <option selected>Food Type</option>
                            <option value="1">Salads</option>
                            <option value="2">Rice and Curry</option>
                            <option value="3">set Menus</option>
                            <option value="3">Shawarma</option>
                            <option value="3">Sabmareen</option>
                            <option value="3">Kottu</option>
                            <option value="3">Seefood</option>
                            <option value="3">Vegetarian</option>
                            <option value="3">Soup</option>
                            <option value="3">Noodles</option>
                        </select>
                        <hr>
                        <p class pt-2>Price Range</p>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Min Price" aria-label="Min Price">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Max Price" aria-label="Max Price">
                            </div>
                        </div>
                        <hr>
                        <select class="form-select form-select-sm" aria-label="Default select example">
                            <option selected>Delevery Type</option>
                            <option value="1">Pick From Shop</option>
                            <option value="2">Home Delevery</option>
                        </select>
                        <hr>
                        <button class="btn btn-warning btn-lg w-100 mb-5 " type=" submit">submit</button>
                    </div>
                    <!-- filetr section  end-->
                    <!-- Manin section start -->
                    <div class="col-sm-8 col-lg-9  main-section pb-5  ">
                        <h2>Yamiii</h2>
                        <hr>
                        <hr>
                        <!-- Image section start -->
                        <div class="container border border-warning  m-3 ">
                            <div class="row">
                                <div class="col-sm-4 mt-2">
                                    <img src="../assets/image8.jpg" class=" m-2 img-fluid image-section" alt="">
                                </div>
                                <!-- Image section end -->
                                <!-- details section start -->
                                <div class="col-sm-8 details_section mt-2">
                                    <h5>Bugger</h5>
                                    <hr>
                                    <div class="row">
                                        <p>Chicken Bugger | LKR 587/-</p>
                                        <hr>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem natus et
                                            veniam
                                            corporis
                                            optio, consequatur sequi libero fugiat hic vitae nulla repellendus dolor
                                            sapiente
                                            delectus
                                        </p>
                                        <p>Ratings :3.5</p>
                                    </div>
                                </div>
                                <!-- details section end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Manin section end -->


        <!-- Manin section end -->
        <?php include_once '../library/footer.php'; ?>
    </body>

    </html>