<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ./login.php");
} else if ($_SESSION['id_T'] == 2) {
    header('location: ../action/home.php');
}
?>
<html lang="">

<head>
    <style>
    .padding {
        padding: 20px;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.umd.min.js">
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Simple and easy to edit Bed and Breakfast site template" />
    <meta name="author" content="Ansonika" />
    <title>Bed and Breakfast Single page</title>

    <!-- Favicons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
        href="../img/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="../img/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="../img/apple-touch-icon-144x144-precomposed.png" />

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- BASE CSS -->
    <link href="../css/boot.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/stl.css" rel="stylesheet" type="text/css" />
    <link href="../css/vend.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- YOUR CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="../css/cus.css">
</head>

<body data-bs-spy="scroll" data-bs-offset="120" data-bs-target="#mainNav">
    <div id="preloader">
        <div data-loader="circle-side">
        </div>
    </div>
    <!-- /Page Preload -->

    <header class="fixed_header menu_v1">
        <!-- Opacity Mask -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-5">
                    <a href="../index.php" class="logo_normal">
                        <img src="../img/phoenix.png" width="50" alt="" class="img-fluid" />
                    </a>
                    <a href="../index.php" class="logo_sticky">
                        <img src="../img/phoenix.png" width="50" alt="" class="img-fluid" />
                    </a>
                </div>
                <div class="col-md-9 col-7">
                    <div class="main-menu">
                        <a href="#" class="closebt open_close_menu">
                            <i class="bi bi-x">
                            </i>
                        </a>
                        <div class="logo_panel">
                            <img src="../img/logo_sticky.svg" width="180" height="34" alt="" />
                        </div>
                        <nav id="mainNav">
                            <ul>
                                <li>
                                    <a href="../index.php" class="js-scroll-trigger animated_link">Home</a>
                                </li>
                                <li>
                                    <a href="../view/reservasi-list.php"
                                        class="js-scroll-trigger animated_link">Reservasion</a>
                                </li>
                                <li>
                                    <a id="Book" href="#booking_section" class="js-scroll-trigger btn_1">Book Now</a>
                                </li>
                                <img src="../img/images/user.png" class="user-pic" onclick="toggleMenu()" />
                                <div class="sub-menu-wrap" id="subMenu">
                                    <div class="sub-menu">
                                        <div class="user-info">
                                            <img src="../img/images/user.png" alt="" />
                                            <h2>
                                                <?php $name=$_SESSION["username"]; echo($name);?>
                                            </h2>
                                        </div>
                                        <hr />
                                        <a href="#" class="sub-menu-link">
                                            <img src="../img/images/profile.png" />
                                            <div class="flex justify-between w-full">
                                                <div class="m-0 hover">Edit Profil</div>
                                                <div class="transform-5">
                                                    <span class="material-icons">
                                                        keyboard_arrow_right
                                                    </span>
                                                </div>
                                            </div>

                                        </a>
                                        <a href="#" class="sub-menu-link">
                                            <img src="../img/images/setting.png">
                                            <div class="flex justify-between w-full">
                                                <div class="m-0 hover">Setting & Privacy</div>
                                                <div class="transform-5">
                                                    <span class="material-icons">
                                                        keyboard_arrow_right
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="sub-menu-link">
                                            <img src="../img/images/help.png" />
                                            <div class="flex justify-between w-full">
                                                <div class="m-0 hover">Help & Support</div>
                                                <div class="transform-5">
                                                    <span class="material-icons">
                                                        keyboard_arrow_right
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="../action/logout.php" class="sub-menu-link">
                                            <img src="../img/images/logout.png" />
                                            <div class="flex justify-between w-full">
                                                <div class="m-0 hover">Logout</div>
                                                <div class="transform-5">
                                                    <span class="material-icons">
                                                        keyboard_arrow_right
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </nav>
                    </div>
                    <div class="hamburger_2 open_close_menu float-end">
                        <div class="hamburger__box">
                            <div class="hamburger__inner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </header>
    <!-- End Header -->

    <main class="full">
        <!--/parallax_section_1-->
        <div class="container margin_120_95" id="reservasion">
            <div class="title mb-4">

                <h2 data-cue="slideInUp" data-delay="200">List Reservasi</h2>
            </div>
            <div class="container">
                <div class="row  ">
                    <?php 
                        include "../action/koneksi.php";
                        $id = $_SESSION['id'];
                        $data = mysqli_query($koneksi, "SELECT DISTINCT reserfasi.id_RS, history.id_H,checkout.id_C,reserfasi.id_bed, reserfasi.id, reserfasi.inap, reserfasi.checkin, reserfasi.checkout, reserfasi.hasil_H, bed.jenis, kamar.no_kamar, bed.img FROM reserfasi INNER JOIN bed ON reserfasi.id_bed = bed.id_bed INNER JOIN kamar ON reserfasi.id_k = kamar.id_k LEFT JOIN transaksi on transaksi.id_RS=reserfasi.id_RS LEFT JOIN checkout ON transaksi.id_transaksi=checkout.id_transaksi LEFT JOIN history ON checkout.id_C=history.id_C WHERE id='$id'");
                        while ($data1 = mysqli_fetch_array($data)) {
                            $id_bed=$data1['id_bed'];
                            $id_c = $data1["id_C"];
                            $id_H = $data1["id_H"];
                        ?>
                    <div class="col mb-2">
                        <div class="card" style="width: 20.2rem;">
                            <img src="../img/rooms/<?php echo $data1['img']; ?>" class="card-img-top" alt="Room Image">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                    if ($id_bed == 1) {
                                        echo "SINGLE ROOM";
                                    } elseif ($id_bed == 2) {
                                        echo "DOUBLE ROOM";
                                    }
                                    ?>
                                </h5>
                                <div class="card-text">
                                    <Strong class="mb-1">Jenis Bed: </Strong>
                                    <?php echo $data1['jenis']; ?>
                                    <br>
                                    <Strong class="mb-1">No Kamar: </Strong>
                                    <?php echo $data1['no_kamar']; ?>
                                    <br>
                                    <Strong class="mb-1">Lama Menginap: </Strong>
                                    <?php echo $data1['inap']; ?> Hari<br>
                                    <Strong class="mb-1">Harga: </Strong>Rp <?php echo $data1['hasil_H']; ?>
                                    <br>
                                    <Strong class="mb-1">Checkin: </Strong>
                                    <?php echo $data1['checkin']; ?>
                                    <br>
                                    <Strong class="mb-1">Checkout: </Strong>
                                    <?php echo $data1['checkout']; ?>
                                    <br>
                                    <?php
                                    if ($id_c !== null) {
                                        $keteranganIn = 'Sudah Checkin';
                                        ?>
                                    <Strong>keterangan Checkin : </Strong>
                                    <?php echo $keteranganIn ?>
                                    <?php if ($id_H !== null){
                                        $keteranganOut = 'Sudah Checkout';
                                    ?>
                                    <Strong>keterangan Checkout : </Strong>
                                    <?php echo $keteranganOut ?>
                                    <?php
                                    }
                                    else{
                                        $keteranganOut = 'Belum Checkout';?>
                                    <Strong>keterangan Checkout : </Strong>
                                    <?php echo $keteranganOut ?>
                                    <?php
                                    }
                                    } else {
                                        $keteranganIn = 'Belum Checkin';
                                        ?>
                                    <Strong>keterangan Checkin : </Strong>
                                    <?php echo $keteranganIn ?>
                                    <br><br>
                                    <center>
                                        <a href="../action/cancel.php?id_RS=<?php echo $data1['id_RS']; ?>"
                                            class="js-scroll-trigger btn_1">Cancel</a>
                                        <a href="./change-date.php?id_RS=<?php echo $data1['id_RS']; ?>"
                                            class="js-scroll-trigger btn_1">Ubah Tanggal</a>
                                    </center>
                                    <?php
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }?>
                </div>
            </div>

    </main>

    <!--/map_contact -->
    <div class="copy bottom">
        <div class="container">© PHOENIX - by <a href="#">Syahrul</a>
        </div>
    </div>
    <!--/copyright line -->

    <!-- COMMON SCRIPTS -->
    <script src="../js/scripts.js">
    </script>
    <script src="../js/function.js">
    </script>
    <script src="../js/dd.js">
    </script>
    <script src="../js/jq.easing.min.js">
    </script>
    <script src="../js/scroll.js">
    </script>
    <!-- SPECIFIC SCRIPTS -->
    <script src="../js/slider.js">
    </script>


    <!-- SPECIFIC SCRIPTS -->
    <script>
    $(document).ready(function() {
        $("#contact").click(function() {
            // Use jQuery to select and manipulate the elements
            var $secondTab = $("#second_tab");
            $secondTab.attr("tabindex", 1);
            $secondTab.attr("aria-selected", true);
            $secondTab.addClass("active");

            var $secondTabPane = $("#second_tab_pane");
            $secondTabPane.addClass("show");
            $secondTabPane.addClass("active");

            var $firstTab = $("#first_tab");
            $firstTab.attr("tabindex", 0);
            $firstTab.attr("aria-selected", false);
            $firstTab.removeClass("active");

            var $firstTabPane = $("#first_tab_pane");
            $firstTabPane.removeClass("show");
            $firstTabPane.removeClass("active");
        });
        $("#Book").click(function() {
            window.location.href = '../index.php#first_tab';
            // Use jQuery to select and manipulate the elements
            var $secondTab = $("#second_tab");
            $secondTab.attr("tabindex", 0);
            $secondTab.attr("aria-selected", false);
            $secondTab.removeClass("active");

            var $secondTabPane = $("#second_tab_pane");
            $secondTabPane.removeClass("show");
            $secondTabPane.removeClass("active");

            var $firstTab = $("#first_tab");
            $firstTab.attr("tabindex", 1);
            $firstTab.attr("aria-selected", true);
            $firstTab.addClass("active");

            var $firstTabPane = $("#first_tab_pane");
            $firstTabPane.addClass("show");
            $firstTabPane.addClass("active");
        });
    });
    </script>
    <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu() {
        subMenu.classList.toggle("open-menu");
    }
    </script>

</body>

</html>