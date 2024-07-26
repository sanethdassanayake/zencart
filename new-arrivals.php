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

    <!-- Heading -->
    <!-- <div class="col-12 d-flex justify-content-center align-items-center bg-dark" style="height: 200px;">
        <h5 class="mt-2 fs-3 text-white" style="font-weight: 600;">New Arrivals</h5>
    </div> -->
    <!-- Heading -->

    <div class="container mt-4">
        <div class="row">

            <!-- Filters -->
            <div class="col-3 shadow-sm d-none d-lg-block bg-white rounded-2">
                <div class="row">

                    <h5 class="mt-2 fs-4 mb-3" style="font-weight: 600;">Filters</h5>

                    <hr class="border-secondary">

                    <div class="col-12">
                        <div class="row d-flex align-items-center">

                            <div class="col-12 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        In Stock
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Out of Stock
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <div class="row d-flex">
                                    <label class="form-label filter-heading" for="">Price (LKR)</label>
                                    <div class="col-6">
                                        <input class="form-control" type="text" placeholder="Minimum">
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="text" placeholder="High">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label filter-heading" for="">Category</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Jackets
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Footware
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Shirts
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Jeans
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Skirts
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Undergarments
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label filter-heading" for="">Brand</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Nike
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Louis Vuitton
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Chanel
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Gucci
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label filter-heading" for="">Type</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Men
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Women
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Kids
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label filter-heading" for="">Color</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Red
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Black
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Green
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Olive Green
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label filter-heading" for="">Sizes</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        XXL
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        XL
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        L
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        S
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mb-5">
                                <label class="form-label filter-heading" for="">Material</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Cotton
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Leather
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Polyester
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end mb-3 gap-2">
                                <button class="btn text-white bg-dark"><i class="bi bi-arrow-clockwise"></i></button>
                                <button class="btn text-white" style="background-color: #2C7596; width: 150px;">Apply</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- Filters -->

            <!-- Product List -->
            <div class="col">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex">
                        <button class="btn bg-white shadow-sm me-2 d-lg-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="bi bi-funnel"></i>
                        </button>
                        <h5 class="mt-2 fs-4" style="font-weight: 600;">New Arrivals</h5>
                    </div>

                    <!-- Filters Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="mt-2 fs-4 mb-3" style="font-weight: 600;">Filters</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-12">
                                        <div class="row d-flex align-items-center">

                                            <div class="col-12 mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        In Stock
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Out of Stock
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <div class="row d-flex">
                                                    <label class="form-label filter-heading" for="">Price (LKR)</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" placeholder="Minimum">
                                                    </div>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" placeholder="High">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label class="form-label filter-heading" for="">Category</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Jackets
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Footware
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Shirts
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Jeans
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Skirts
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Undergarments
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label class="form-label filter-heading" for="">Brand</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Nike
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Louis Vuitton
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Chanel
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Gucci
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label class="form-label filter-heading" for="">Type</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Men
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Women
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Kids
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label class="form-label filter-heading" for="">Color</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Red
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Black
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Green
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Olive Green
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label class="form-label filter-heading" for="">Sizes</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        XXL
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        XL
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        L
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        S
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label filter-heading" for="">Material</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Cotton
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Leather
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Polyester
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn text-white" style="background-color: #2C7596; width: 150px;">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Filters Modal -->

                    <div class="col-5 col-md-4 col-lg-3">
                        <select class="form-select border-0 shadow-sm" name="" id="">
                            <option value="" selected>Newest Items</option>
                            <option value="">Oldest Itmes</option>
                            <option value="">Rating: Hight to Low</option>
                            <option value="">Rating: Low to High</option>
                            <option value="">Price: High to Low</option>
                            <option value="">Price: Low to High</option>
                        </select>
                    </div>
                </div>

                <div class="p-2">
                    <div class="row d-flex justify-content-start">

                        <!-- Card 1 -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="row p-1">
                                <div class="card shadow-sm border-0 p-0 position-relative product" onclick="">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/black-t.png" alt="product-image" class="product-image">

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
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="row p-1">
                                <div class="card shadow-sm border-0 p-0 position-relative product" onclick="">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/black-t.png" alt="product-image" class="product-image">

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
                        <!-- Card 2 -->

                        <!-- Card 2 -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="row p-1">
                                <div class="card shadow-sm border-0 p-0 position-relative product" onclick="">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/black-t.png" alt="product-image" class="product-image">

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
                        <!-- Card 2 -->

                        <!-- Card 2 -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="row p-1">
                                <div class="card shadow-sm border-0 p-0 position-relative product" onclick="">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/black-t.png" alt="product-image" class="product-image">

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
                        <!-- Card 2 -->
                    </div>
                </div>

            </div>
            <!-- Products List -->

        </div>
    </div>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>