<?php
include '../action/koneksi.php';
session_start();
// date_default_timezone_set('Asia/Jakarta');

// Retrieve reservation details from the database based on the reservation ID
if(isset($_GET['id'])) {
    $id_RS = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT transaksi.*,reserfasi.*,bed.*,kamar.* FROM transaksi left join reserfasi on transaksi.id_RS=reserfasi.id_RS left join bed on bed.id_bed=reserfasi.id_bed left join kamar on kamar.id_k=reserfasi.id_k WHERE id_transaksi='$id_RS'");
   
    // $reservation = mysqli_fetch_assoc($result);
    while ($reservation = mysqli_fetch_assoc($result)) {
        $name = $_SESSION['username'];
    $currentDateTime = date('Y-m-d H:i:s');
    $date1 = strtotime($reservation['checkin']);
    $date2 = strtotime($reservation['checkout']);

    // Calculate the difference in days
    $days = $reservation['inap'];

    $unit = $reservation['id_bed'];
    $price = 0; // default price

    // Check the unit and set the price accordingly
    if ($unit == '1') {
        $price = 100000;
    } elseif ($unit == '2') {
        $price = 300000;
    }

    if ($price == 100000) {
        $pricef = 'Rp100.000';
    } elseif ($price == 300000) {
        $pricef = 'Rp300.000';
    }

    $totalprice = $price * $days ;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Your Receipt</title>
    <!-- <link rel="icon" href="\hotel\rsv2\img\logo.svg"> -->
    <style>
    body {
        /* background-color: #978667; */
    }

    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #978667;

    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /* RTL */
    .invoice-box.rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .invoice-box.rtl table {
        text-align: right;
    }

    .invoice-box.rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>

</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="../img/phoenix.png"
                                    style="display: block; margin: auto; max-width: 350px; width: 100%;" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Phoenix Hotel<br />
                                Sawit Panggungharjo Sewon Bantul<br />
                                Yogyakarta - Indonesia
                            </td>


                            <td>
                                Invoice #<?php echo $reservation['id_RS'] ?><br />
                                Created: <?php echo $currentDateTime ?><br />
                                Western Indonesia Time (GMT+7)
                            </td>
                        </tr>

                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Order detail:</td>

                <td></td>
            </tr>

            <tr class="item">
                <td>TYPE Room: <?php echo $reservation['jenis'] ?></td>

                <td><?php echo $pricef ?>/night</td>
            </tr>

            <tr class="item last">
                <td>
                    Check-in: <br>
                </td>

                <td><?php echo $reservation['checkin'] ?></td>
            </tr>
            <tr class="item last">
                <td>
                    Check-out:
                </td>

                <td><?php echo $reservation['checkout'] ?></td>
            </tr>

            <tr class="item last">
                <td>No Room(s) Booked:</td>

                <td><?php echo $reservation['no_kamar'] ?></td>
            </tr>
            <tr class="item last">
                <td>Stay: </td>
                <td><?php echo $days ?> night(s)</td>
            </tr>
            <tr>
                <td>Employee Name: </td>
                <td><?php echo $name ?></td>
            </tr>
            <tr class="total">
                <td></td>

                <td>Total: Rp<?php echo $totalprice ?></td>
            </tr>


        </table>
        <button onclick="printFunction()">Print or save it to PDF</button>
        <a href="../action/home.php"><button>Back to Previous Page</button></a>
        <!-- <a href="../index.php"><button>Log-out</button></a> -->
        <script>
        window.onload = function() {
            window.print();
        }

        function printFunction() {
            window.print();
        }
        </script>
    </div>
</body>

</html>
<?php
    // Add other details as needed
}
} else {
    echo "Invalid reservation ID.";
}
?>