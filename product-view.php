<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ZenCart</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body style="background-color: #F1F5F9;">

    <!-- Header -->
    <?php include "includes/header.php"; ?>
    <!-- Header -->

    <div class="container my-lg-4">
        <div class="row">

            <div class="col-12 col-lg-5 p-1">
                <div class="d-flex align-items-start bg-white shadow-sm rounded-2 p-2">
                    <div class="nav d-grid flex-column nav-pills me-3 overflow-y-scroll overflow-x-hidden gap-2" style="height: 500px; width: 140px;" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link p-0 shadow-none bg-white active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><img class="single-product-img-sm" src="assets/images/product-img/black-t.png" alt="product-img"></button>
                        <button class="nav-link p-0 shadow-none bg-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img class="single-product-img-sm m-0" src="assets/images/product-img/green-t.png" alt="product-img"></button>
                        <button class="nav-link p-0 shadow-none bg-white" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><img class="single-product-img-sm" src="assets/images/product-img/olive-t.png" alt="product-img"></button>
                        <button class="nav-link p-0 shadow-none bg-white" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><img class="single-product-img-sm" src="assets/images/product-img/red-t.png" alt="product-img"></button>
                    </div>
                    <div class="tab-content w-100" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="single-product-img-container">
                                <img class="single-product-img-lg" src="assets/images/product-img/black-t.png" alt="product-img">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <div class="single-product-img-container">
                                <img class="single-product-img-lg" src="assets/images/product-img/green-t.png" alt="product-img">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <div class="single-product-img-container">
                                <img class="single-product-img-lg" src="assets/images/product-img/olive-t.png" alt="product-img">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                            <div class="single-product-img-container">
                                <img class="single-product-img-lg" src="assets/images/product-img/red-t.png" alt="product-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 p-1">
                <div class="bg-white shadow-sm rounded-2 p-2">
                    <h5 class="" style="font-weight: 600; font-size: 22px;">Nike men t-shirt original black color limited edition black button and poop guy</h5>
                    <div class="d-flex my-2 gap-2">
                        <div class="d-flex gap-1">
                            <i class="bi bi-star-fill rating-star"></i>
                            <i class="bi bi-star-fill rating-star"></i>
                            <i class="bi bi-star-fill rating-star"></i>
                            <i class="bi bi-star-half rating-star"></i>
                            <i class="bi bi-star rating-star"></i>
                            <a href="#" class="ms-2 text-decoration-none text-dark">44 Reviews</a>
                        </div>
                        <div class="vr"></div>
                        <span>109 sold</span>
                    </div>
                    <div>
                        <h5 class="m-0" style="font-weight: 600; font-size: 36px;">LKR3870.20</h5>
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="text-secondary m-0" style="font-weight: 500; font-size: 22px;"><s>LKR5650.40</s></h5>
                            <h5 class="text-danger m-0" style="font-weight: 500; font-size: 22px;">10% off</h5>
                        </div>
                    </div>
                    <hr class="border-secondary">
                    <div class="mb-2">
                        <label class="form-label fw-bold" for="sizeGroup">Select Size:</label>
                        <div class="btn-group gap-2 d-block" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="sizeGroup" id="btnradio1" autocomplete="off" checked>
                            <label class="btn btn-outline-dark rounded-2 px-4" for="btnradio1">S</label>

                            <input type="radio" class="btn-check" name="sizeGroup" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-dark rounded-2 px-4" for="btnradio2">M</label>

                            <input type="radio" class="btn-check" name="sizeGroup" id="btnradio3" autocomplete="off">
                            <label class="btn btn-outline-dark rounded-2 px-4" for="btnradio3">L</label>

                            <input type="radio" class="btn-check" name="sizeGroup" id="btnradio4" autocomplete="off">
                            <label class="btn btn-outline-dark rounded-2 px-4" for="btnradio4">XL</label>

                            <input type="radio" class="btn-check" name="sizeGroup" id="btnradio5" autocomplete="off">
                            <label class="btn btn-outline-dark rounded-2 px-4" for="btnradio5">XXL</label>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="form-label fw-bold" for="colorGroup">Select Color:</label>
                        <div class="btn-group gap-2 d-block" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="colorGroup" id="colorRadio1" autocomplete="off" checked>
                            <label class="btn btn-outline-dark rounded-2 px-4" for="colorRadio1">Red</label>

                            <input type="radio" class="btn-check" name="colorGroup" id="colorRadio2" autocomplete="off">
                            <label class="btn btn-outline-dark rounded-2 px-4" for="colorRadio2">Blue</label>

                            <input type="radio" class="btn-check" name="colorGroup" id="colorRadio3" autocomplete="off">
                            <label class="btn btn-outline-dark rounded-2 px-4" for="colorRadio3">Green</label>

                            <input type="radio" class="btn-check" name="colorGroup" id="colorRadio4" autocomplete="off">
                            <label class="btn btn-outline-dark rounded-2 px-4" for="colorRadio4">Yellow</label>

                            <input type="radio" class="btn-check" name="colorGroup" id="colorRadio5" autocomplete="off">
                            <label class="btn btn-outline-dark rounded-2 px-4" for="colorRadio5">Black</label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-3 p-1">
                <div class="bg-white shadow-sm rounded-2 p-2">
                    <div class="d-flex justify-content-between">
                        <label class="form-label fw-bold" for="">Ship to</label>
                        <a href="#" class="form-label text-dark" for="">Change address</a>
                    </div>

                    <div class="d-grid border border-warning rounded-2 shadow-sm bg-warning-subtle gap-2 mb-2 p-2">
                        <div class="d-flex gap-2">
                            <i class="bi bi-person"></i>
                            <span class="text-wrap text-start">Saneth Dassanayake</span>
                        </div>
                        <div class="d-flex gap-2">
                            <i class="bi bi-telephone"></i>
                            <span class="text-wrap text-start">0767356796</span>
                        </div>
                        <div class="d-flex gap-2">
                            <i class="bi bi-geo-alt"></i>
                            <span class="text-wrap text-start"> 9 Canal Road, Vijayapura, Anuradhapura, North Central, Sri Lanka, 50000</span>
                        </div>
                    </div>

                    <div class="d-grid">
                        <label class="form-label fw-bold" for="qty">Quantity</label>
                        <input type="number" id="qty" class="form-control w-50" min="1" value="1">
                        <div class="d-flex justify-content-between mt-2 gap-4">
                            <button class="btn btn-outline-dark rounded-5 w-100"><i class="bi bi-heart"></i></button>
                            <button class="btn btn-outline-dark rounded-5 w-100"><i class="bi bi-share"></i></button>
                            <button class="btn btn-outline-dark rounded-5 w-100"><i class="bi bi-bag"></i></button>
                        </div>
                        <button class="btn btn-dark mt-2 w-100 rounded-5">Buy now</button>
                    </div>
                </div>
            </div>

            <hr class="border-secondary my-4">

            <!-- Product Cards -->
            <div class="col-12 mb-2">
                <h5 class="mt-2" style="font-weight: 600; font-size: 22px;">You may also like</h5>
                <div class="row d-flex justify-content-center p-2">

                    <!-- Card 1 -->
                    <div class="col-6 col-lg-3 col-xl-2">
                        <div class="row p-1">

                            <div class="card shadow-sm product border-0 p-0 position-relative">
                                <div class="row card-body p-2">
                                    <div class="position-absolute d-flex justify-content-end">
                                        <a href="#" class="text-decoration-none text-dark fs-4">
                                            <i class="bi bi-heart"></i>
                                        </a>
                                    </div>

                                    <img src="assets/images/product-img/black-t.png" alt="product-image" class="product-image">

                                    <div class="text-center justify-content-center mt-2">
                                        <h2 class="product-category">Man Shoes</h2>
                                        <h2 class="product-name">Blue Nike Shoe</h2>
                                        <div class="d-flex justify-content-center mb-2 gap-1">
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-half rating-star"></i>
                                            <i class="bi bi-star rating-star"></i>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <h2 class="after-price">$32.99</h2>
                                            <h2 class="real-price"><s>$38.99</s></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card 1 -->

                    <!-- Card 2 -->
                    <div class="col-6 col-lg-3 col-xl-2">
                        <div class="row p-1">

                            <a href="#" class="p-0 text-decoration-none">
                                <div class="card shadow-sm border-0 p-0 position-relative">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/product-img/red-t.png" alt="product-image" class="product-image">

                                        <div class="text-center justify-content-center mt-2">
                                            <h2 class="product-category">Man Shoes</h2>
                                            <h2 class="product-name">Blue Nike Shoe</h2>
                                            <div class="d-flex justify-content-center mb-2 gap-1">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-half rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <h2 class="after-price">$32.99</h2>
                                                <h2 class="real-price"><s>$38.99</s></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card 2 -->

                    <!-- Card 3 -->
                    <div class="col-6 col-lg-3 col-xl-2">
                        <div class="row p-1">

                            <a href="#" class="p-0 text-decoration-none">
                                <div class="card shadow-sm border-0 p-0 position-relative">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/product-img/green-t.png" alt="product-image" class="product-image">

                                        <div class="text-center justify-content-center mt-2">
                                            <h2 class="product-category">Man Shoes</h2>
                                            <h2 class="product-name">Blue Nike Shoe</h2>
                                            <div class="d-flex justify-content-center mb-2 gap-1">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-half rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <h2 class="after-price">$32.99</h2>
                                                <h2 class="real-price"><s>$38.99</s></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card 3 -->

                    <!-- Card 4 -->
                    <div class="col-6 col-lg-3 col-xl-2">
                        <div class="row p-1">

                            <a href="#" class="p-0 text-decoration-none">
                                <div class="card shadow-sm border-0 p-0 position-relative">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/product-img/olive-t.png" alt="product-image" class="product-image">

                                        <div class="text-center justify-content-center mt-2">
                                            <h2 class="product-category">Man Shoes</h2>
                                            <h2 class="product-name">Blue Nike Shoe</h2>
                                            <div class="d-flex justify-content-center mb-2 gap-1">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-half rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <h2 class="after-price">$32.99</h2>
                                                <h2 class="real-price"><s>$38.99</s></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card 4 -->

                    <!-- Card 4 -->
                    <div class="col-6 col-lg-3 col-xl-2">
                        <div class="row p-1">

                            <a href="#" class="p-0 text-decoration-none">
                                <div class="card shadow-sm border-0 p-0 position-relative">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/product-img/olive-t.png" alt="product-image" class="product-image">

                                        <div class="text-center justify-content-center mt-2">
                                            <h2 class="product-category">Man Shoes</h2>
                                            <h2 class="product-name">Blue Nike Shoe</h2>
                                            <div class="d-flex justify-content-center mb-2 gap-1">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-half rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <h2 class="after-price">$32.99</h2>
                                                <h2 class="real-price"><s>$38.99</s></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card 4 -->

                    <!-- Card 4 -->
                    <div class="col-6 col-lg-3 col-xl-2">
                        <div class="row p-1">

                            <a href="#" class="p-0 text-decoration-none">
                                <div class="card shadow-sm border-0 p-0 position-relative">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/product-img/olive-t.png" alt="product-image" class="product-image">

                                        <div class="text-center justify-content-center mt-2">
                                            <h2 class="product-category">Man Shoes</h2>
                                            <h2 class="product-name">Blue Nike Shoe</h2>
                                            <div class="d-flex justify-content-center mb-2 gap-1">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-half rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <h2 class="after-price">$32.99</h2>
                                                <h2 class="real-price"><s>$38.99</s></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card 4 -->

                </div>
            </div>
            <!-- Product Cards -->

            <div class="col-12 mb-2">
                <div class="bg-white shadow-sm rounded-2 p-2">
                    <h5 class="mt-2" style="font-weight: 600; font-size: 22px;">Product description</h5>
                    <textarea class="form-control bg-white" rows="10" name="" id="" disabled>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi incidunt doloribus perspiciatis cum voluptates voluptatum quidem, nemo corporis id libero, eligendi laborum. Vitae, ea magni! Voluptas fugiat repudiandae necessitatibus vel.</textarea>
                </div>
            </div>

            <!-- Product Ratings -->
            <div class="col-12">
                <div class="row p-1">

                    <div class="col-12 col-lg-6 order-2 order-lg-1 p-2">
                        <div class="bg-white rounded-2 shadow-sm p-2">
                            <div class="text-center">
                                <h5 class="mb-4" style="font-weight: 600; font-size: 22px;">Ratings & Reviews</h5>

                                <div class="d-flex mb-2">
                                    <div class="w-100 border-end text-end p-2 pe-4">
                                        <h5 style="font-weight: 600; font-size: 32px;">4.8</h5>
                                        <div class="d-flex justify-content-end gap-1 mb-2">
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-half rating-star"></i>
                                            <i class="bi bi-star rating-star"></i>
                                        </div>
                                        <p>23 ratings</span>
                                        <p class="badge bg-success" style="font-size: 18px; font-weight: 400;"><i class="bi bi-star-fill"></i> Excellent</p>
                                    </div>
                                    <div class="w-100 p-2 ps-4">
                                        <div class="d-flex gap-3">
                                            <div class="d-flex gap-1 mb-2">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                            </div>
                                            <span>34</span>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="d-flex gap-1 mb-2">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <span>23</span>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="d-flex gap-1 mb-2">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <span>2</span>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="d-flex gap-1 mb-2">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <span>1</span>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="d-flex gap-1 mb-2">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="rounded-2 border-top p-2">
                                    <div class="d-flex gap-2">
                                        <i class="bi bi-person-circle fs-3"></i>
                                        <div class="mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex gap-3">
                                                    <span class="fw-bold">Saneth Dassanayake</span>
                                                    <div class="d-flex gap-1 mb-2">
                                                        <i class="bi bi-star-fill rating-star"></i>
                                                        <i class="bi bi-star-fill rating-star"></i>
                                                        <i class="bi bi-star-fill rating-star"></i>
                                                        <i class="bi bi-star rating-star"></i>
                                                        <i class="bi bi-star rating-star"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span style="font-size: 14px;">22/06/2024</span>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit fugiat vel eaque voluptatem laborum perspiciatis.</p>
                                            </div>
                                            <div class="d-flex flex-wrap gap-2">
                                                <img class="rating-product-img border shadow-sm rounded-2" src="assets/images/product-img/olive-t.png" alt="product-img">
                                                <img class="rating-product-img border shadow-sm rounded-2" src="assets/images/product-img/green-t.png" alt="product-img">
                                                <img class="rating-product-img border shadow-sm rounded-2" src="assets/images/product-img/black-t.png" alt="product-img">
                                                <img class="rating-product-img border shadow-sm rounded-2" src="assets/images/product-img/red-t.png" alt="product-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-2 border-top p-2">
                                    <div class="d-flex gap-2">
                                        <i class="bi bi-person-circle fs-3"></i>
                                        <div class="mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex gap-3">
                                                    <span class="fw-bold">Saneth Dassanayake</span>
                                                    <div class="d-flex gap-1 mb-2">
                                                        <i class="bi bi-star-fill rating-star"></i>
                                                        <i class="bi bi-star-fill rating-star"></i>
                                                        <i class="bi bi-star-fill rating-star"></i>
                                                        <i class="bi bi-star rating-star"></i>
                                                        <i class="bi bi-star rating-star"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span style="font-size: 14px;">22/06/2024</span>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit fugiat vel eaque voluptatem laborum perspiciatis.</p>
                                            </div>
                                            <div class="d-flex flex-wrap gap-2">
                                                <img class="rating-product-img border shadow-sm rounded-2" src="assets/images/product-img/olive-t.png" alt="product-img">
                                                <img class="rating-product-img border shadow-sm rounded-2" src="assets/images/product-img/green-t.png" alt="product-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2 p-2">
                        <div class="bg-white rounded-2 shadow-sm p-2">
                            <div class="text-center mb-4">
                                <h5 style="font-weight: 600; font-size: 22px;">Write your review</h5>
                            </div>
                            <div class="d-flex gap-3 mb-2">
                                <div class="col-3 text-end">
                                    <span>Overall rating*</span>
                                </div>
                                <div class="btn-group gap-2 d-block" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="radtingbtn" id="rating1" autocomplete="off" checked>
                                    <label class="btn btn-outline-dark rounded-2 px-3" for="rating1"><i class="bi bi-star-fill text-warning"></i>&nbsp;1</label>

                                    <input type="radio" class="btn-check" name="radtingbtn" id="rating2" autocomplete="off">
                                    <label class="btn btn-outline-dark rounded-2 px-3" for="rating2"><i class="bi bi-star-fill text-warning"></i>&nbsp;2</label>

                                    <input type="radio" class="btn-check" name="radtingbtn" id="rating3" autocomplete="off">
                                    <label class="btn btn-outline-dark rounded-2 px-3" for="rating3"><i class="bi bi-star-fill text-warning"></i>&nbsp;3</label>

                                    <input type="radio" class="btn-check" name="radtingbtn" id="rating4" autocomplete="off">
                                    <label class="btn btn-outline-dark rounded-2 px-3" for="rating4"><i class="bi bi-star-fill text-warning"></i>&nbsp;4</label>

                                    <input type="radio" class="btn-check" name="radtingbtn" id="rating5" autocomplete="off">
                                    <label class="btn btn-outline-dark rounded-2 px-3" for="rating5"><i class="bi bi-star-fill text-warning"></i>&nbsp;5</label>
                                </div>
                            </div>
                            <div class="d-flex gap-3 mb-2">
                                <div class="col-3 text-end">
                                    <span>Review*</span>
                                </div>
                                <textarea class="form-control" name="" id="" rows="5"></textarea>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="col-3 text-end">
                                    <span>Images*</span>
                                </div>
                                <input id="images" max="4" multiple type="file">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Product Ratings -->
        </div>

        <script src="assets/js/script.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>