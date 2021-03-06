<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Mark</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-editor.css">
    <link rel="stylesheet" href="fonts/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
    <style type="text/css">
        .slider {
            width: 90%;
            margin: 20px auto;
        }

        .slick-slide {
            margin: 0px 10px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: #888;
            border-radius: 50px;
            box-shadow: 0 0 15px 0 #999;
            padding: 5px;
        }

        .slick-next:before {
            background-color: #EE3926;
            color: #fff;
        }

        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }

        .slick-active {
            opacity: .5;
        }

        .slick-current {
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="AutoMark" width="150" height="90">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">????????????????</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ??????????????????
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">?????????? 1</a>
                                <a class="dropdown-item" href="#">?????????? 2</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">??????????????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">???? ??????</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">????????????????????</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ????????????????<img src="images/united-arab-emirates.png" alt="country" width="20" height="20">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">??????????<img src="images/united-arab-emirates.png"
                                        alt="country" width="20" height="20"></a>
                                <a class="dropdown-item" href="#">??????????<img src="images/united-arab-emirates.png"
                                        alt="country" width="20" height="20"></a>
                            </div>
                        </li>
                    </ul>
                    <button class="btn btn-danger my-2 my-sm-0 ml-2" type="button">?????? ????????????</button>
                    <button class="btn btn-danger my-2 my-sm-0" type="button" data-toggle="modal"
                        data-target="#exampleModalCenter">?????????? ????????????</button>
                </div>
            </nav>
            <div class="slid">
                <img src="images/big-mercedes.png" alt="car">
                <div class="intro">
                    <h5>???? ???????? ?????? ?????????????? ?????? ????????????</h5>
                    <p>???????? ???????? ?????????? ?????????????? ?????????????? ???? ????????????</p>
                    <button class="btn my-2 my-sm-0 ml-2" type="button">?????? ????????????</button>
                </div>
                <div class="search">
                    <form action="" class="form-inline">
                        <input type="text" class="form-control" name="car" placeholder="???????? ???? ???????? ???????????????? ...">
                        <span id="showFilter"><i class="fa fa-sliders-h"></i></span>
                        <button class="btn" type="submit">??????</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="sell-buy">
        <div class="container">
            {{-- <div class="row">
                <div class="col-md-6 col-sm-12">
                    <a href="#" class="btn first">?????????? ???????????? ????????</a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="#" class="btn second">?????? ???????????? ????????</a>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="browse">
        <div class="container">
            <div class="intro">
                <h5>???????? ???????????????? ?????? ??????????...</h5>
                <p>???????? ???? ???????? ???????????????? ?????????? ???????????????? ?? ??????????????</p>
            </div>
            <div class="categories">
                <div class="category">
                    <span><i class="fa fa-car-side"></i></span>
                    <b>????????????</b>
                </div>
                <div class="category">
                    <span><i class="fa fa-motorcycle"></i></span>
                    <b>???????????? ??????????</b>
                </div>
                <div class="category">
                    <span><i class="fa fa-ship"></i></span>
                    <b>??????????</b>
                </div>
                <div class="category">
                    <span><i class="fa fa-truck"></i></span>
                    <b>???????????? ??????????</b>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-ads">
        <div class="container">
            <h5>?????????????????? ??????????????</h5>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-ads-filter">
        <div class="container">
            <select class="form-control">
                <option value="" disabled selected hidden>????????...</option>
                <option value="">???????????? ??????????</option>
                <option value="">???????????? ????????????</option>
            </select>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>???????????? ?????? ???? ???? ????</h6>
                    </div>
                    <div class="price">
                        <b>234,500 ????????</b>
                    </div>
                </div>
                <div class="image">
                    <img src="images/small-mercedes.png" alt="car">
                </div>
                <div class="details">
                    <div class="location">
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <br>
                        <span>??????</span>
                    </div>
                    <div class="distance">
                        <span><i class="fa fa-tachometer-alt"></i></span>
                        <br>
                        <span>???? 2446</span>
                    </div>
                    <div class="year">
                        <span><i class="fa fa-cog"></i></span>
                        <br>
                        <span>2019</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5>???? ?????????? ?????????????? ?????? </h5>
                    <div class="slider slik-demo">
                        <div class="item">
                            <div class="person">
                                <div class="image">
                                    <img src="images/person.png" alt="person">
                                </div>
                                <div class="info">
                                    <span class="name">???????? ???? ????????</span>
                                    <span class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="comment">
                                <p>?????? ???????? ???? ???????? ?????? ???????? ???? ???????????? ???? ?????? ???????????????? ?????? ???? ?????????? ?????? ???????? ???? ????????
                                    ???????? ?????????????? ?????? ?????????? ???? ???????? ?????? ?????? ????????.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="person">
                                <div class="image">
                                    <img src="images/person.png" alt="person">
                                </div>
                                <div class="info">
                                    <span class="name">???????? ???? ????????</span>
                                    <span class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="comment">
                                <p>?????? ???????? ???? ???????? ?????? ???????? ???? ???????????? ???? ?????? ???????????????? ?????? ???? ?????????? ?????? ???????? ???? ????????
                                    ???????? ?????????????? ?????? ?????????? ???? ???????? ?????? ?????? ????????.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="person">
                                <div class="image">
                                    <img src="images/person.png" alt="person">
                                </div>
                                <div class="info">
                                    <span class="name">???????? ???? ????????</span>
                                    <span class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="comment">
                                <p>?????? ???????? ???? ???????? ?????? ???????? ???? ???????????? ???? ?????? ???????????????? ?????? ???? ?????????? ?????? ???????? ???? ????????
                                    ???????? ?????????????? ?????? ?????????? ???? ???????? ?????? ?????? ????????.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="person">
                                <div class="image">
                                    <img src="images/person.png" alt="person">
                                </div>
                                <div class="info">
                                    <span class="name">???????? ???? ????????</span>
                                    <span class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="comment">
                                <p>?????? ???????? ???? ???????? ?????? ???????? ???? ???????????? ???? ?????? ???????????????? ?????? ???? ?????????? ?????? ???????? ???? ????????
                                    ???????? ?????????????? ?????? ?????????? ???? ???????? ?????? ?????? ????????.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="person">
                                <div class="image">
                                    <img src="images/person.png" alt="person">
                                </div>
                                <div class="info">
                                    <span class="name">???????? ???? ????????</span>
                                    <span class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="comment">
                                <p>?????? ???????? ???? ???????? ?????? ???????? ???? ???????????? ???? ?????? ???????????????? ?????? ???? ?????????? ?????? ???????? ???? ????????
                                    ???????? ?????????????? ?????? ?????????? ???? ???????? ?????? ?????? ????????.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WhatsApp -->
    <div class="whatsapp">
        <a href="#"><img src="images/whatsapp.png" alt=""></a>
    </div>

    <footer class="footer">
        <div class="website-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about">
                            <img src="images/logo.png" alt="Auto Mark">
                            <p>?????? ???????? ???? ???????? ?????? ???????? ???? ???????????? ???? ?????? ???????????????? ?????? ???? ?????????? ?????? ???????? ???? ???????? ????????
                                ?????????????? ??????
                                ?????????? ???? ???????? ?????? ?????? ???????? ???? ???????????? ???? ???????????? ???????????? ?????????? ?????? ?????????? ?????? ???????????? ????????
                                ????????????
                                ??????????????.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="links">
                            <h5>?????????? ??????????</h5>
                            <ul>
                                <li>????????????????</li>
                                <li>???? ??????</li>
                                <li>??????????????</li>
                                <li>?????????????? ??????????????</li>
                                <li>???????????? ????????????????</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact">
                            <h5>???????? ??????</h5>
                            <div class="phone">
                                <p><span><i class="fa fa-phone-alt"></i></span>+971547970217</p>
                            </div>
                            <div class="email">
                                <p><span><i class="fa fa-envelope"></i></span>info.automark@gmail.com</p>
                            </div>
                            <div class="location">
                                <p><span><i class="fa fa-map-marker-alt"></i></span>???????????????? ?????????????? ??????????????-??????</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>&copy;2021 ???????? ???????????? ????????????</p>
            </div>
        </div>
    </footer>

    <!-- Search Box -->
    <div class="search-box">
        <div class="search-head">
            <span><i class="fa fa-search"></i> ?????? ??????????</span>
            <button class="btn close-search"><i class="fa fa-trash"></i></button>
        </div>
        <div class="search-form">
            <form action="">
                <select name="country" id="" class="form-control">
                    <option value="" disabled selected hidden>????????????</option>
                    <option value="">????????????????</option>
                    <option value="">????????????</option>
                    <option value="">??????</option>
                </select>
                <div class="car-type">
                    <p>???????? ?????? ??????????????</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cars" id="cars" value="" checked>
                        <label class="form-check-label" for="cars">
                            ????????????
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="motorcycles" id="motorcycles" value="">
                        <label class="form-check-label" for="motorcycles">
                            ???????????? ??????????
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="boats" id="boats" value="">
                        <label class="form-check-label" for="boats">
                            ??????????
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="heavy_vehicles" id="heavy-vehicles" value="">
                        <label class="form-check-label" for="heavy-vehicles">
                            ???????????? ??????????
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="all_categories" id="all-categories" value="">
                        <label class="form-check-label" for="all-categories">
                            ???????? ??????????????????
                        </label>
                    </div>
                </div>
                <select name="country" id="" class="form-control">
                    <option value="" disabled selected hidden>??????????????/??????????????</option>
                    <option value="">????????????</option>
                    <option value="">??????????</option>
                    <option value="">???? ????</option>
                </select>
                <input type="date" name="year" class="form-control" placeholder="?????? ??????????">
                <div class="form-group price">
                    <label for="price">?????????? (???????? )</label>
                    <input type="range" name="price" class="form-control" id="price" min="1">
                </div>
                <div class="form-group distance">
                    <label for="distance">??????????????????????</label>
                    <input type="range" name="distance" class="form-control" id="distance" min="1">
                </div>
                <div class="fuel-type">
                    <p>???????? ?????? ????????????</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petrol" id="petrol" value="">
                        <label class="form-check-label" for="petrol">
                            ??????????
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="diesel" id="diesel" value="">
                        <label class="form-check-label" for="diesel">
                            ????????
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hybrid" id="hybrid" value="">
                        <label class="form-check-label" for="hybrid">
                            ????????????/????????
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="electricity" id="electricity" value="">
                        <label class="form-check-label" for="electricity">
                            ????????????
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="all_fuel" id="all-fuel" value="" checked>
                        <label class="form-check-label" for="all-fuel">
                            ???????? ??????????????
                        </label>
                    </div>
                </div>
                <div class="transmission-type">
                    <p>???????? ?????? ???????? ????????????</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="normal" id="normal" value="">
                        <label class="form-check-label" for="normal">
                            ????????
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="automatic" id="automatic" value="">
                        <label class="form-check-label" for="automatic">
                            ??????????????????
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cvt" id="cvt" value="">
                        <label class="form-check-label" for="cvt">
                            CVT
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="all_transmission" id="all-transmission"
                            value="" checked>
                        <label class="form-check-label" for="all-transmission">
                            ???????? ??????????????
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn">?????????? ??????????????</button>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade base-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-general">
                    <h5 class="modal-title" id="exampleModalLongTitle">?????????? ????????????</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="facebook">
                        <div class="facebook-icon">
                            <img src="images/facebook.png" alt="Facebook">
                        </div>
                        <span>?????? ?????????? ???????????????? ?????? ??????</span>
                    </div>
                    <div class="google">
                        <div class="google-icon">
                            <img src="images/google.png" alt="Google">
                        </div>
                        <span>?????? ?????????? ???????????????? ????????</span>
                    </div>
                    <div class="email" data-toggle="modal" data-target="#exampleModalCenterEmail">
                        <div class="email-icon">
                            <img src="images/email.png" alt="Email">
                        </div>
                        <span>?????? ?????????? ???????????????? ????????????</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <p>???? ???? ???????????? ???????? ????????</p>
                    <button type="button" class="btn btn-danger new-account" data-toggle="modal"
                        data-target="#exampleModalCenterAccount">?????????? ???????????? ????????</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade modal-email" id="exampleModalCenterEmail" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-email">
                    <button type="button" class="left-arrow-email" data-dismiss="modal" aria-label="Close"
                        data-toggle="modal" data-target="#exampleModalCenter">
                        <span aria-hidden="true">&rightarrow;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLongTitle">?????? ?????????? ???????????????? ????????????</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="???????????? ???????????????????? ">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="???????? ????????">
                        </div>
                        <button type="submit" class="btn btn-danger">????????????</button>
                    </form>
                    <p>???? ???????? ???????? ?????????? <a href="#">?????????? ?????????? ???????? ????????</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade modal-account" id="exampleModalCenterAccount" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-account">
                    <button type="button" class="left-arrow-account" data-dismiss="modal" aria-label="Close"
                        data-toggle="modal" data-target="#exampleModalCenter">
                        <span aria-hidden="true">&rightarrow;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLongTitle">???????? ?????????? ????????????</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="??????????">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="???????????? ???????????????????? ">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="???????? ????????">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="?????? ????????????">
                        </div>
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option disabled selecte hidden>?????? ????????????????</option>
                                <option value="">?????? ????????????????1</option>
                                <option value="">?????? ????????????????2</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger">?????????? ????????</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="fonts/js/all.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/master.js"></script>
    <script type="text/javascript">
        let width = screen.width;
        if (width > 1080) {
            $(document).on('ready', function () {
                $('.slik-demo').slick({
                    accessibility: true,
                    adaptiveHeight: false,
                    arrows: true,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: false,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
                    nextArrow: '<button type="button" data-role="none" class="slick-next">Next</button>',
                    autoplay: false,
                    autoplaySpeed: 3000,
                    easing: 'linear',
                    draggable: false,
                    pauseOnHover: true,
                    pauseOnFocus: true,
                    touchMove: true,
                    centerMode: true,
                    rtl: true,
                });

                $('.base-modal .modal-body .email').on('click', function () {
                    $('.base-modal').modal("hide");
                });
                $('.modal-email .left-arrow-email').on('click', function () {
                    $('.modal-email').modal("hide");
                });
                $('.base-modal .modal-footer .new-account').on('click', function () {
                    $('.base-modal').modal("hide");
                });
                $('.modal-account .left-arrow-account').on('click', function () {
                    $('.modal-account').modal("hide");
                });

                $('#showFilter').on('click', function () {
                    $('.search-box').css('display', 'block')
                });
                $('.close-search').on('click', function () {
                    $('.search-box').css('display', 'none')
                });
            });
        } else {
            $(document).on('ready', function () {
                $('.slik-demo').slick({
                    accessibility: true,
                    adaptiveHeight: false,
                    arrows: true,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
                    nextArrow: '<button type="button" data-role="none" class="slick-next">Next</button>',
                    autoplay: false,
                    autoplaySpeed: 3000,
                    easing: 'linear',
                    draggable: false,
                    pauseOnHover: true,
                    pauseOnFocus: true,
                    touchMove: true,
                    centerMode: false,
                    rtl: true,
                });

                $('.base-modal .modal-body .email').on('click', function () {
                    $('.base-modal').modal("hide");
                });
                $('.modal-email .left-arrow-email').on('click', function () {
                    $('.modal-email').modal("hide");
                });
                $('.base-modal .modal-footer .new-account').on('click', function () {
                    $('.base-modal').modal("hide");
                });
                $('.modal-account .left-arrow-account').on('click', function () {
                    $('.modal-account').modal("hide");
                });

                $('#showFilter').on('click', function () {
                    $('.search-box').css('display', 'block')
                });
                $('.close-search').on('click', function () {
                    $('.search-box').css('display', 'none')
                });
            });
        }

    </script>
</body>

</html>
