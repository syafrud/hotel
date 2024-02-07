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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        <div class="tab-content p-50">
            <div class="tab-pane fade show active" id="first_tab_pane" role="tabpanel" aria-labelledby="first_tab"
                tabindex="0">
                <div class="booking_wrapper">
                    <div id="message-booking">
                    </div>
                    <form method="post" id="bookingform" class="padding">

                        <?php                            
                        include "../action/koneksi.php";
                        if (isset($_GET['id_RS'])) {
                            $id_RS = $_GET['id_RS'];
                            // echo($id_RS);
                            $result = mysqli_query($koneksi,"SELECT * FROM reserfasi where id_RS='$id_RS'");
                            // echo("SELECT * FROM reserfasi where id_RS='$id_RS'");
                            $test = mysqli_fetch_assoc($result);
                            $dateToSet = $test['checkin'];
                                    ?>
                        <input type="hidden" name="" id="id_RS" value="<?php echo $test['id_RS']; ?>" />
                        <input type="hidden" name="tgl" id="date_booking" value="<?php echo $dateToSet; ?>" />
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="custom_select" onchange="hitungHasil()">
                                    <select class="wide" id="rooms_booking" name="kasur">
                                        <option value="" disabled>Select Room</option>
                                        <?php
                                // Koneksi ke database
                                include "../action/koneksi.php";
                                $id_bed= $test['id_bed'];
                                // Query untuk mengambil data id_bed, jenis, dan harga dari bed
                                $query = "SELECT id_bed, jenis, harga FROM bed ";
                                $result = mysqli_query($koneksi, $query);
                                $jenisSelec = "";
                                if (!empty($test['id_bed'])) {
                                $jenisSelec = $test['id_bed'];
                                }
                                // Loop untuk membuat opsi dropdown
                                while ($row = mysqli_fetch_assoc($result)) {
                                        $id_bed = $row['id_bed'];
                                        $jenis = $row['jenis'];
                                        $harga = $row['harga'];
                                        $selected = " ";
                                        if ($id_bed == $jenisSelec)
                                        $selected = "selected";
                                        // Masukkan nilai harga ke dalam atribut data-harga
                                        echo "<option value='$id_bed' data-harga='$harga' " . $selected . ">$jenis</option>";
                                }
                                ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="custom_select">
                                    <select class="wide" id="kamarDropdown">
                                        <option value="" disabled>Pilih Kamar</option>
                                        <?php
                                        $id_bed = $test['id_k'];

                                        $query = "SELECT DISTINCT bed.id_bed,bed.harga, kamar.id_k, kamar.no_kamar
                                        FROM kamar
                                        left JOIN bed ON bed.id_bed = kamar.id_bed
                                        LEFT JOIN reserfasi ON kamar.id_k = reserfasi.id_k
                                        LEFT JOIN transaksi ON transaksi.id_RS = reserfasi.id_RS
                                        LEFT JOIN checkout ON checkout.id_transaksi=transaksi.id_transaksi
                                        LEFT JOIN history ON checkout.id_C = history.id_C
                                        WHERE reserfasi.id_RS IS NULL AND bed.id_bed=".$test['id_bed']." OR history.id_C IS NOT NULL AND bed.id_bed=".$test['id_bed']. " OR reserfasi.id_k=kamar.id_k AND reserfasi.id_RS=".$id_RS;
                                        $result = mysqli_query($koneksi, $query);
                                        if (!empty($test['id_k'])) {   


                                        while ($row = mysqli_fetch_assoc($result)) {
                                        $id_k = $test['id_k'];
                                        $nama = $row['no_kamar'];
                                        $selected = " ";
                                        
                                        if ($test['id_k'] == $row['id_k']) {
                                                $selected = "selected";
                                        }

                                        // Masukkan nilai harga ke dalam atribut data-harga
                                        echo "<option value='$id_k'  " . $selected . ">$nama</option>";
                                        }
                                        } 
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" id="lama" oninput="hitungHasil()" class="form-control"
                                        placeholder="Stay" value="<?php echo $test['inap']; ?>" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" id="harga" class="form-control"
                                        placeholder="<?php echo $test['hasil_H']; ?>" disabled />
                                </div>
                            </div>
                        </div>

                        <br />
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="row align-items-center">
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="text-end">
                                    <input class="btn_1 outline" type="submit" value="Book Now" id="submit-booking" />
                                </p>
                            </div>
                        </div>
                        <?php
                        }
                        
        ?>

                    </form>
                </div>
                <!-- / booking_wrapper -->
            </div>
            <!-- /tab_booking-->
            <div class="tab-pane fade" id="second_tab_pane" role="tabpanel" aria-labelledby="second_tab" tabindex="0">
                <div class="contacts_wrapper">
                    <div id="message-contact">
                    </div>
                    <form method="post" action="" id="contactform" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="name_contact" name="name_contact"
                                        placeholder="Name" />
                                    <label for="name_contact">Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="lastname_contact"
                                        name="lastname_contact" placeholder="Last Name" />
                                    <label for="lastname_contact">Last name</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="email" id="email_contact" name="email_contact"
                                        placeholder="Email" />
                                    <label for="email_contact">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="phone_contact" name="phone_contact"
                                        placeholder="Telephone" />
                                    <label for="phone_contact">Telephone</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Message" id="message_contact"
                                name="message_contact">
                                                    </textarea>
                            <label for="message_contact">Message</label>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="row align-items-center">
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="text-end">
                                    <input class="btn_1 outline" type="submit" value="Contact" id="submit-contact" />
                                </p>
                            </div>
                        </div>
                        <!--  -->
                    </form>
                </div>
                <!-- /tab_contacts-->
            </div>
            <!-- /contacts_wrapper-->
        </div>
        <!-- /tab_content-->
        </div>
        </div>
        <!-- /row -->
        </div>
        <!-- /container -->
    </main>

    <!--/map_contact -->
    <div class="copy">
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
    <script>
    // Menambahkan event listener untuk perubahan pada dropdown NIS
    $("#rooms_booking").change(function() {
        var selectedNIS = this.value;
        <?php
        include "../action/koneksi.php";
        if (isset($_GET['id_RS'])) {
            $id = $_GET['id_RS'];
        }
        $data = "var guruData = [";
        $query = "SELECT DISTINCT bed.id_bed, bed.harga, kamar.id_k, kamar.no_kamar
        FROM kamar
        LEFT JOIN bed ON bed.id_bed = kamar.id_bed
        LEFT JOIN reserfasi ON kamar.id_k = reserfasi.id_k
        LEFT JOIN transaksi ON transaksi.id_RS = reserfasi.id_RS
        LEFT JOIN checkout ON checkout.id_transaksi = transaksi.id_transaksi
        LEFT JOIN history ON checkout.id_C = history.id_C
        WHERE reserfasi.id_k IS NULL AND history.id_C IS NULL OR history.id_C IS NOT null
         OR reserfasi.id_RS='$id';";
        $result = mysqli_query($koneksi, $query);
        $first = true;
        $jenisSelec = "";
        if (!empty($_GET['id_1'])) {
            $jenisSelec = $_GET['id_1'];
        }
        while ($row = mysqli_fetch_assoc($result)) {
            if (!$first) {
                $data .= ",";
            }
            $data .= "{ id_bed: '" . $row['id_bed'] . "', harga: '" . $row['harga'] . "', id_k: '" . $row['id_k'] . "', no_kamar: '" . $row['no_kamar'] . "', selected:'" . $jenisSelec . "' }";
            $first = false;
        }
        $data .= "];";
        echo $data;
        ?>

        var select = $('<select  class="wide" id="kamarDropdown"  >');
        select.append(
            $("<option>", {
                value: "",
                text: "Pilih Kamar",
                selected: true,
                disabled: true,
            })
        );
        $.each(guruData, function(index, option) {
            if (option.id_bed === selectedNIS) {
                select.append(
                    $("<option>", {
                        value: option.id_k,
                        text: option.no_kamar,
                    })
                );
            }
        });
        $("#kamarDropdown").empty();
        // // Append the select element to the target element with ID "kamarDropdown"
        $("#kamarDropdown").append(select);
        $("select").niceSelect();

        $("select").niceSelect("destroy"); //destroy the plugin
        $("select").niceSelect(); //apply again
    });
    $("#submit-booking").click(function(e) {
        e.preventDefault();
        var id_RS = $("#id_RS").val();
        var kasur = $("#rooms_booking").val();
        var kamar = $("#kamarDropdown").val();
        var lama = $("#lama").val();
        var tgl = $("#date_booking").val();
        var tglCheckout = new Date(tgl);
        tglCheckout.setDate(tglCheckout.getDate() + parseInt(lama)); // Pastikan 'lama' diubah menjadi integer

        var tahun = tglCheckout.getFullYear();
        var bulan = (tglCheckout.getMonth() + 1).toString().padStart(2,
            '0'); // Tambah 1 karena indeks bulan dimulai dari 0, pad dengan '0' jika perlu
        var tanggal = tglCheckout.getDate().toString().padStart(2, '0');

        var tanggalFormat = tahun + '-' + bulan + '-' + tanggal;

        console.log(id_RS);
        console.log(tanggalFormat);
        console.log(kasur);
        console.log(kamar);
        console.log(lama);
        console.log(tgl);
        $.ajax({
            type: "POST",
            url: "../action/update.php", // Adjust the path
            data: {
                id_RS: id_RS,
                kasur: kasur,
                kamar: kamar,
                lama: lama,
                tgl: tgl,
                tanggalFormat: tanggalFormat,
            },
            success: function(response) {
                alert(response.message);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("AJAX Error: " + errorThrown);
            },
        });
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
    </script>
    <script>
    // Fungsi untuk menghitung dan menampilkan hasil perkalian
    function hitungHasil() {
        // Mengambil nilai NIS dari input
        var nis = document.getElementById("lama").value;
        // Mengambil nilai jenis kasur dari input
        var kasur = document.getElementById("rooms_booking");
        var harga = kasur.options[kasur.selectedIndex].getAttribute(
            "data-harga"
        );

        // Menghitung hasil perkalian dengan harga (yang telah diambil dari PHP)
        var hasil = nis * harga;

        // Mengatur nilai input tersembunyi "hasil_kali"
        var inputElement = document.getElementById("harga");
        inputElement.placeholder = hasil;

        var id_RS = $("#id_RS").val();
        var kasur = $("#rooms_booking").val();
        var kamar = $("#kamarDropdown").val();
        var lama = $("#lama").val();
        var tgl = $("#date_booking").val();
        var tglCheckout = new Date(tgl);
        tglCheckout.setDate(tglCheckout.getDate() + parseInt(lama)); // Pastikan 'lama' diubah menjadi integer

        var tahun = tglCheckout.getFullYear();
        var bulan = (tglCheckout.getMonth() + 1).toString().padStart(2,
            '0'); // Tambah 1 karena indeks bulan dimulai dari 0, pad dengan '0' jika perlu
        var tanggal = tglCheckout.getDate().toString().padStart(2, '0');

        var tanggalFormat = tahun + '-' + bulan + '-' + tanggal;

        console.log(id_RS);
        console.log(tanggalFormat);
        console.log(kasur);
        console.log(kamar);
        console.log(lama);
        console.log(tgl);
    }
    </script>
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