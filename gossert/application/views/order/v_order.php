<!-- order starts  -->
<section class="order" id="order">

    <h3 class="sub-heading"> pesan sekarang </h3>
    <h1 class="heading"> free and fast </h1>

    <form method="post" action="<?php echo site_url('order/saveOrder'); ?>">

        <div class="inputBox">
            <div class="input">
                <span>Nama</span>
                <input type="text" placeholder="Masukan Nama" name="nama" id="nama" value="<?php echo set_value('nama'); ?>">
                <?php echo form_error('nama', '<div class="error">', '</div>'); ?>
            </div>
            <div class="input">
                <span>No. Telepon</span>
                <input type="text" placeholder="Masukan nomor telepon" name="no_telepon" id="no_telepon" value="<?php echo set_value('no_telepon'); ?>">
                <?php echo form_error('no_telepon', '<div class="error">', '</div>'); ?>
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
            <select value="<?php echo set_value('menu'); ?>" name="menu" id="menu">
                    <option value="">Pilih Menu</option>
                    <option value="tiramisu">tiramisu</option>
                    <option value="ice brownies">Ice Brownies</option>
                    <option value="Blood Orange Mascarpone">Blood Orange Mascarpone</option>
                    <option value="Red Velvet Cake">Red Velvet Cake</option>
                    <option value="Cupcake Cream">Cupcake Cream</option>
                    <option value="Oreo Pancakes">Oreo Pancakes</option>
                    <option value="Crepes">Crepes</option>
                    <option value="Ice Cream Roll">Ice Cream Roll</option>
                </select>
                <?php echo form_error('menu', '<div class="error">', '</div>'); ?> 
            </div>
            <div class="input">
                <span>Berapa Banyak Yang Anda Pesan</span>
                <input type="number" placeholder="Berapa banyak" name="banyak_pesanan" value="<?php echo set_value('alamat'); ?>">
                <?php echo form_error('banyak_pesanan', '<div class="error">', '</div>'); ?>
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Alamat</span>
                <textarea name="alamat" placeholder="Masukan Alamat " id="alamat" cols="30" rows="10" value="<?php echo set_value('alamat'); ?>"></textarea>
                <?php echo form_error('alamat', '<div class="error">', '</div>'); ?>
            </div>
        </div>

        <td></td>
        <input type="submit" value="Pesan Sekarang" class="btn" onclick="message(' !! TERIMAKASIH SUDAH MEMESAN DI TOKO KAMI !!')">

      
    </form>

</section>
<!-- order section ends -->