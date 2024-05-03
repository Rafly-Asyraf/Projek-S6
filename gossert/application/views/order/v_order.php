<!-- order starts  -->
<section class="order" id="order">

    <h3 class="sub-heading"> pesan sekarang </h3>
    <h1 class="heading"> free and fast </h1>

    <form method="post" action="<?php echo site_url('order/saveOrder'); ?>">

        <div class="inputBox">
            <div class="input">
                <span>Nama</span>
                <input type="text" placeholder="Masukan Nama" name="nama">
            </div>
            <div class="input">
                <span>No. Telepon</span>
                <input type="number" placeholder="Masukan nomor telepon" name="no_telepon">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Menu Yang Anda Pesanan</span>
                <input type="text" placeholder="Masukan nama menu" name="menu">
            </div>
            <div class="input">
                <span>Berapa Banyak Yang Anda Pesan</span>
                <input type="number" placeholder="Berapa banyak" name="banyak_pesanan">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Alamat</span>
                <textarea name="alamat" placeholder="Masukan Alamat " id="" cols="30" rows="10"></textarea>
            </div>
        </div>


        <!-- pop up message -->
        <script type="text/javascript">
            function message(txt) {
                alert(txt)
            }
        </script>
        <input type="submit" value="Pesan Sekarang" class="btn" onclick="message(' !! TERIMAKASIH SUDAH MEMESAN DI TOKO KAMI !!')">

    </form>

</section>
<!-- order section ends -->