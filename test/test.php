<div class="col mb-2">
    <div class="card" style="width: 20rem;">
        <div class="card-header bg-primary text-white">
            Reservation Summary
        </div>
        <div class="card-body">
            <img src="./test/img/rooms/<?php echo $data1['img']; ?>" class="card-img-top" alt="Room Image">
            <h5 class="card-title">
                <?php
                        if ($id_bed == 1) {
                            echo "SINGLE ROOM";
                        } elseif ($id_bed == 2) {
                            echo "DOUBLE ROOM";
                        }
                        ?>
            </h5>
            <p class="card-text">
                <strong>Jenis Bed:</strong> <?php echo $data1['jenis']; ?><br>
                <strong>No Kamar:</strong> <?php echo $data1['no_kamar']; ?><br>
                <strong>Lama Menginap:</strong> <?php echo $data1['inap']; ?> Hari<br>
                <strong>Harga:</strong> Rp <?php echo $data1['hasil_H']; ?><br>
                <strong>Checkin:</strong> <?php echo $data1['checkin']; ?><br>
                <strong>Checkout:</strong> <?php echo $data1['checkout']; ?><br>
                <?php if ($id_c !== null) : ?>
                <?php $keteranganIn = 'Sudah Checkin'; ?>
            <p class="mb-1">Keterangan Checkin: <?php echo $keteranganIn; ?></p>
            <?php if ($id_H !== null) : ?>
            <?php $keteranganOut = 'Sudah Checkout'; ?>
            <p class="mb-1">Keterangan Checkout: <?php echo $keteranganOut; ?></p>
            <?php else : ?>
            <?php $keteranganOut = 'Belum Checkout'; ?>
            <p class="mb-1">Keterangan Checkout: <?php echo $keteranganOut; ?></p>
            <?php endif; ?>
            <?php else : ?>
            <?php $keteranganIn = 'Belum Checkin'; ?>
            <p class="mb-1">Keterangan Checkin: <?php echo $keteranganIn; ?></p>
            <?php endif; ?>
            </p>
        </div>
    </div>
</div>