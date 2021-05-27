<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <!-- - var description  = ""-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard -> <?= $this->session->userdata('nama') ?></title>
    <link rel="apple-touch-icon" href="<?= base_url() ?>template/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/css/pages/users.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/app-assets/css/plugins/extensions/toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="<?= base_url() ?>Dashboard">
                        <div class="brand-logo"></div>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>
                        </ul>

                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?= $this->session->userdata('nama') ?></span><span class="user-status"><?= $this->session->userdata('email') ?></span></div><span><img class="round" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?= base_url() ?>Auth/logout"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Content-->
    <div class="app-content content" style="padding-top: 4.75rem;">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-header mb-2">
                                <div class="relative">
                                    <div class="cover-container">
                                        <img class="img-fluid bg-cover rounded-0 w-100" src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/cover.jpg" alt="User Profile Image">
                                    </div>
                                    <div class="profile-img-container d-flex align-items-center justify-content-between">
                                        <img src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/user-13.jpg" class="rounded-circle img-border box-shadow-1" alt="Card image">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
                                                <i class="feather icon-edit-2"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
                                                <i class="feather icon-settings"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end align-items-center profile-header-nav">
                                    <nav class="navbar navbar-expand-sm w-100 pr-0">
                                        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"><i class="feather icon-align-justify"></i></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav justify-content-around w-75 ml-sm-auto">
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Timeline</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">About</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Photos</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Friends</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Videos</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Events</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="profile-info">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>About</h4>
                                        <i class="feather icon-more-horizontal cursor-pointer"></i>
                                    </div>
                                    <div class="card-body">
                                        <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes.
                                            Topping cake wafer.</p>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Joined:</h6>
                                            <p>November 15, 2015</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Lives:</h6>
                                            <p>New York, USA</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Email:</h6>
                                            <p>bucketful@fiendhead.org</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Website:</h6>
                                            <p>www.pixinvent.com</p>
                                        </div>
                                        <div class="mt-1">
                                            <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-facebook"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-twitter"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i class="feather icon-instagram"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Suggested Pages</h4>
                                    </div>
                                    <div class="card-body suggested-block">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/pages/page-09.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>Rockose</p>
                                                <span class="font-small-2">Company</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/pages/page-08.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>The Devil's</p>
                                                <span class="font-small-2">Clothing Store</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-1">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/pages/page-03.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>The Magician</p>
                                                <span class="font-small-2">Public Figure</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/pages/page-02.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>AC/DC</p>
                                                <span class="font-small-2">Music</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/pages/page-07.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>Eat Hard</p>
                                                <span class="font-small-2">Restaurant / Bar</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/pages/page-04.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>B4B</p>
                                                <span class="font-small-2">Beauty Store</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/pages/page-05.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>Kylie Jenner</p>
                                                <span class="font-small-2">Public Figure</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/pages/page-01.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>RDJ</p>
                                                <span class="font-small-2">Actor</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/pages/page-06.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <p>Taylor Swift</p>
                                                <span class="font-small-2">Music</span>
                                            </div>
                                            <div class="ml-auto"><i class="feather icon-star"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Twitter Feeds</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="twitter-feed">
                                            <div class="d-flex justify-content-start align-items-center mb-1">
                                                <div class="avatar mr-50">
                                                    <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-12.jpg" alt="avtar img holder" height="35" width="35">
                                                </div>
                                                <div class="user-page-info">
                                                    <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                                                    <small>@tiana59</small>
                                                    <div class="badge badge-primary badge-pill badge-sm p-0">
                                                        <i class="feather icon-check font-small-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">I love cookie chupa chups sweet tart apple pie chocolate
                                                bar. Jelly-o oat cake chupa chups.</p>
                                            <p class="text-primary">#js #vuejs</p>
                                            <small>12 Dec 2018</small>
                                        </div>
                                        <div class="twitter-feed mt-2">
                                            <div class="d-flex justify-content-start align-items-center mb-1">
                                                <div class="avatar mr-50">
                                                    <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-12.jpg" alt="avtar img holder" height="35" width="35">
                                                </div>
                                                <div class="user-page-info">
                                                    <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                                                    <small>@tiana59</small>
                                                    <div class="badge badge-primary badge-pill badge-sm p-0">
                                                        <i class="feather icon-check font-small-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">Carrot cake cake gummies I love I love tiramisu. Biscuit
                                                marzipan cookie lemon drops.</p>
                                            <p class="text-primary">#python</p>
                                            <small>11 Dec 2018</small>
                                        </div>
                                        <div class="twitter-feed mt-2">
                                            <div class="d-flex justify-content-start align-items-center mb-1">
                                                <div class="avatar mr-50">
                                                    <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-12.jpg" alt="avtar img holder" height="35" width="35">
                                                </div>
                                                <div class="user-page-info">
                                                    <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                                                    <small>@tiana59</small>
                                                    <div class="badge badge-primary badge-pill badge-sm p-0">
                                                        <i class="feather icon-check font-small-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">I love cookie chupa chups sweet tart apple pie chocolate
                                                bar. Jelly-o oat cake chupa chups.</p>
                                            <small>10 Dec 2018</small>
                                        </div>
                                        <div class="twitter-feed mt-2">
                                            <div class="d-flex justify-content-start align-items-center mb-1">
                                                <div class="avatar mr-50">
                                                    <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-12.jpg" alt="avtar img holder" height="35" width="35">
                                                </div>
                                                <div class="user-page-info">
                                                    <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                                                    <small>@tiana59</small>
                                                    <div class="badge badge-primary badge-pill badge-sm p-0">
                                                        <i class="feather icon-check font-small-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">Muffin candy caramels. I love caramels tiramisu jelly. Pie I
                                                love wafer. Chocolate cake lollipop tootsie roll cake.</p>
                                            <p class="text-primary">#django #vuejs</p>
                                            <small>9 Dec 018</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Main Board -->
                            <div class="col-lg-6 col-12">
                                <!-- Form Posting -->
                                <div class="card">
                                    <div class="card-body">
                                        <form action="<?= base_url() ?>Posting" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <textarea class="form-control" id="caption" rows="3" name="caption" placeholder="Apa yang kamu pikirkan hari ini, <?= $this->session->userdata('nama'); ?> ?" required></textarea>
                                            </div>
                                            <div id="show_img"></div>
                                            <div class="form-group">
                                                <img id="blah" src="" alt="Img" width="100" class="img-fluid card-img-top rounded-sm mb-2" style="display: none;margin-bottom:6px;" />
                                                <input type="file" class="form-control" name="img" id="img" required>
                                            </div>
                                            <input type="hidden" name="user_id" value="<?= $this->session->userdata('id') ?>">

                                            <button type="submit" class="btn btn-primary float-right btn-inline">Kirim</button>
                                        </form>
                                    </div>
                                </div>

                                <?php
                                $count = 0;
                                $user_idnew = $this->session->userdata('id');
                                foreach ($data as $i) :
                                    $post_id = $i['post_id'];
                                    $user_id = $i['user_id'];
                                    $post_caption = $i['post_caption'];
                                    $post_image = $i['post_image'];
                                    $post_tanggal = $i['tanggal'];
                                    $user_nama = $i['user_nama'];

                                    $count++;
                                ?>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-start align-items-center mb-1">
                                                <div class="avatar mr-1">
                                                    <img src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/user-01.jpg" alt="avtar img holder" height="45" width="45">
                                                </div>
                                                <div class="user-page-info">
                                                    <p class="mb-0"><?= $user_nama ?></p>
                                                    <span class="font-small-2"><?= $post_tanggal ?></span>
                                                </div>
                                                <div class="ml-auto user-like text-danger"><i class="fa fa-heart"></i></div>
                                            </div>
                                            <p><?= $post_caption ?></p>
                                            <img class="img-fluid card-img-top rounded-sm mb-2" src="<?= base_url() ?>template/uploads/<?= $post_image ?>" alt="avtar img holder">

                                            <div class="d-flex justify-content-start align-items-center mb-1">
                                                <?php
                                                $data = $this->db->query("SELECT * FROM likey WHERE post_id='$post_id' AND user_id='$user_idnew'")->num_rows();
                                                $likeyjumlah = $this->db->query("SELECT * FROM likey WHERE post_id='$post_id'")->num_rows();

                                                if ($data > 0) :
                                                ?>
                                                    <div class="d-flex align-items-center">
                                                        <a href="<?= base_url() ?>Dashboard/likeunlike/<?= $post_id ?>/<?= $user_idnew ?>"><i id="like<?= $post_id ?>" class="fa fa-heart font-medium-2 mr-50 text-danger"></i></a>
                                                        <span id="likeyjumlah<?= $post_id ?>"><?= $likeyjumlah ?></span>
                                                    </div>
                                                <?php elseif ($data == 0) : ?>
                                                    <div class="d-flex align-items-center">
                                                        <a href="<?= base_url() ?>Dashboard/likeunlike/<?= $post_id ?>/<?= $user_idnew ?>"><i id="like<?= $post_id ?>" class="feather icon-heart font-medium-2 mr-50"></i></a>
                                                        <span id="likeyjumlah<?= $post_id ?>"><?= $likeyjumlah ?></span>
                                                    </div>
                                                <?php endif; ?>


                                                <?php
                                                $komen =  $this->db->query("SELECT * FROM komentar JOIN users ON users.user_id = komentar.user_id WHERE komentar.post_id = '$post_id'")->result_array();
                                                $jumlahkomen =  $this->db->query("SELECT * FROM komentar JOIN users ON users.user_id = komentar.user_id WHERE komentar.post_id = '$post_id'")->num_rows();
                                                ?>
                                                <p class="ml-auto d-flex align-items-center">
                                                    <?php if ($jumlahkomen > 0) : ?>
                                                        <i class="feather icon-message-square font-medium-2 mr-50"></i><?= $jumlahkomen ?>
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                            <!-- Comment -->
                                            <?php


                                            foreach ($komen as $i) :
                                            ?>
                                                <div class="d-flex justify-content-start align-items-center mb-1">
                                                    <div class="avatar mr-50">
                                                        <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="30" width="30">
                                                    </div>
                                                    <div class="user-page-info">
                                                        <h6 class="mb-0"><?= $i['user_nama'] ?></h6>
                                                        <span class="font-small-2"><?= $i['komentar'] ?></span>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                            <form action="<?= base_url() ?>Dashboard/komentar" method="POST">
                                                <fieldset class="form-label-group mb-50">
                                                    <input type="hidden" name="post_id" value="<?= $post_id ?>">
                                                    <input type="hidden" name="user_id" value="<?= $this->session->userdata('id') ?>">
                                                    <textarea class=" form-control" id="label-textarea" rows="3" name="komentar" placeholder="Add Comment" required></textarea>
                                                </fieldset>
                                                <button type="submit" class="btn btn-sm btn-primary">Post Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Photos</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/user-01.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/user-02.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/user-03.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/user-04.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/user-05.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/user-06.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/user-07.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/user-08.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="<?= base_url() ?>template/app-assets/images/profile/user-uploads/user-09.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <h4>Suggestions</h4>
                                        <i class="feather icon-more-horizontal cursor-pointer"></i>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-5.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Carissa Dolle</h6>
                                                <span class="font-small-2">6 Mutual Friends</span>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-6.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Liliana Pecor</h6>
                                                <span class="font-small-2">3 Mutual Friends</span>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-7.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Isidra Strunk</h6>
                                                <span class="font-small-2">2 Mutual Friends</span>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-8.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Gerald Licea</h6>
                                                <span class="font-small-2">1 Mutual Friends</span>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-9.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Kelle Herrick</h6>
                                                <span class="font-small-2">1 Mutual Friends</span>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-10.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Cesar Lee</h6>
                                                <span class="font-small-2">1 Mutual Friends</span>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">John Doe</h6>
                                                <span class="font-small-2">1 Mutual Friends</span>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-2">
                                            <div class="avatar mr-50">
                                                <img src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-12.jpg" alt="avtar img holder" height="35" width="35">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Tonia Seabold</h6>
                                                <span class="font-small-2">1 Mutual Friends</span>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
                                        </div>
                                        <button type="button" class="btn btn-primary w-100 mt-1"><i class="feather icon-plus mr-25"></i>Load More</button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Polls</h4>
                                    </div>
                                    <div class="card-body">
                                        <h6>Who is the best actor in Marvel Cinematic Universe?</h6>
                                        <div class="polls-info mt-1">
                                            <div class="d-flex justify-content-between">
                                                <div class="vs-radio-con vs-radio-primary">
                                                    <input type="radio" name="vueradio" value="false">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">RDJ</span>
                                                </div>
                                                <div class="text-right">58%</div>
                                            </div>
                                            <div class="progress progress-bar-primary my-50">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="58" aria-valuemin="58" aria-valuemax="100" style="width:58%"></div>
                                            </div>
                                            <ul class="list-unstyled users-list d-flex">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Tonia Seabold" class="avatar pull-up ml-0">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-12.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Carissa Dolle" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Kelle Herrick" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Len Bregantini" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-10.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="John Doe" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-11.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Tonia Seabold" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-12.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Dirk Fornili" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-2.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="polls-info mt-1">
                                            <div class="d-flex justify-content-between">
                                                <div class="vs-radio-con vs-radio-primary">
                                                    <input type="radio" name="vueradio" value="false">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">Chris Hemswort</span>
                                                </div>
                                                <div class="text-right">16%</div>
                                            </div>
                                            <div class="progress progress-bar-primary my-50">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="16" aria-valuemin="16" aria-valuemax="100" style="width:16%"></div>
                                            </div>
                                            <ul class="list-unstyled users-list d-flex">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Liliana Pecor" class="avatar pull-up ml-0">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Kasandra NaleVanko" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="polls-info mt-1">
                                            <div class="d-flex justify-content-between">
                                                <div class="vs-radio-con vs-radio-primary">
                                                    <input type="radio" name="vueradio" value="false">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">Mark Ruffalo</span>
                                                </div>
                                                <div class="text-right">8%</div>
                                            </div>
                                            <div class="progress progress-bar-primary my-50">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="8" aria-valuemin="8" aria-valuemax="100" style="width:8%"></div>
                                            </div>
                                            <ul class="list-unstyled users-list d-flex">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Lorelei Lacsamana" class="avatar pull-up ml-0">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-4.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="polls-info mt-1">
                                            <div class="d-flex justify-content-between">
                                                <div class="vs-radio-con vs-radio-primary">
                                                    <input type="radio" name="vueradio" value="false">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">Chris Evans</span>
                                                </div>
                                                <div class="text-right">16%</div>
                                            </div>
                                            <div class="progress progress-bar-primary my-50">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="16" aria-valuemin="16" aria-valuemax="100" style="width:16%"></div>
                                            </div>
                                            <ul class="list-unstyled users-list d-flex">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="JeanieBulgrin" class="avatar pull-up ml-0">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Graig Muckey" class="avatar pull-up">
                                                    <img class="media-object rounded-circle" src="<?= base_url() ?>template/app-assets/images/portrait/small/avatar-s-3.jpg" alt="Avatar" height="30" width="30">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-primary block-element mb-1">Load More</button>
                            </div>
                        </div> -->
                    </section>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-shadow">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url() ?>template/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url() ?>template/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url() ?>template/app-assets/js/core/app-menu.js"></script>
    <script src="<?= base_url() ?>template/app-assets/js/core/app.js"></script>
    <script src="<?= base_url() ?>template/app-assets/js/scripts/components.js"></script>
    <script src="<?= base_url() ?>template/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url() ?>template/app-assets/js/scripts/pages/user-profile.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>

<script>
    //Get base_url
    const str = window.location.pathname;
    const url = str.split("/");
    const first_url = "/" + url[1] + "/";
    const base_url = window.location.origin + first_url;

    $(document).ready(function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#img").change(function() {
            readURL(this);
            $('#blah').show();
        });


        // Proses like
        // $('#likey').click(function() {
        //     var status = $('#likey').attr('data');
        //     var post_id = $('#likey').attr('data-post');
        //     var user_id = $('#likey').attr('data-user');

        //     console.log();
        // data = {
        //     post_id: post_id,
        //     user_id: user_id,
        //     status: status,
        // };

        // var html = '';
        // var jumlahlike = <?= $likeyjumlah ?>;

        // $.ajax({
        //     type: "POST",
        //     url: base_url + "Dashboard/likeunlike",
        //     dataType: "JSON",
        //     data: data,
        //     success: function(data) {
        //         if (data == 0) {
        //             $('#likey').attr('data', '0');
        //             $('#like' + post_id).addClass('feather icon-heart');
        //             $('#like' + post_id).removeClass('fa fa-heart text-danger');
        //             $('#likeyjumlah' + post_id).text(jumlahlike);
        //         } else {
        //             $('#likey').attr('data', '1');
        //             $('#like' + post_id).removeClass('feather icon-heart');
        //             $('#like' + post_id).addClass('fa fa-heart text-danger');
        //             newLike = jumlahlike + 1;
        //             $('#likeyjumlah' + post_id).text(newLike);
        //         }
        //     }
        // });
        // })

    });
</script>

<?php if ($this->session->flashdata('msg') == 'Posting success') : ?>
    <script>
        toastr.success('Posting telah berhasil diupload', 'Post', {
            "progressBar": true
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'logout') : ?>
    <script>
        toastr.success('Logout berhasil', 'Logout', {
            "progressBar": true
        });
    </script>
<?php endif; ?>

<script>

</script>