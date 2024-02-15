<main role="main" class="container">

    <div class="row">
        <div class="col-md-8">
            <?php $this->load->view('layouts/_alert') ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Formulir Alamat pengiriman
                </div>
                <div class="card-body">
                    <form action="<?= base_url('checkout/create') ?>" method="POST">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukan nama penerima" value="<?= $input->name ?>">
                            <?= form_error('name') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="address" cols="30" rows="5" class="form-control"><?= $input->address ?></textarea>
                            <?= form_error('address') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" class="form-control" name="phone" placeholder="Masukan nomor telepon penerima" value="<?= $input->phone ?>">
                            <?= form_error('phone') ?>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Awal Penyewaan</label>
                            <input type="date" id="dt_start" class="form-control" name="dt_start" placeholder="Masukan Tanggal Awal Penyewaan"  value="<?php echo $input->dt_start;?>">
                            <?= form_error('dt_start') ?>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Akhir Penyewaan</label>
                            <input type="date" id="dt_end" class="form-control" name="dt_end" placeholder="Masukan Tanggal Akhir Penyewaan"  value="<?php echo $input->dt_end;?>">
                            <?= form_error('dt_end') ?>

                            <input type="hidden" id="dt_interval" name="dt_interval" value="<?php echo $input->dt_end;?>">
                        </div>

                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            Category
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Qty</th>
                                        <th>Harga</th>
                                    </tr>
                                    <tbody>
                                        <?php foreach ($cart as $row) : ?>
                                            <tr>
                                                <td><?= $row->title ?></td>
                                                <td><?= $row->qty ?></td>
                                                <td>Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Subtotal</td>
                                                <td>Rp.<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
                                            </tr>
                                        <?php endforeach ?>
                                            <tr>
                                                <td colspan="2">Lama Penyewaan</td>
                                                <td id="date-interval"></td>
                                            </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">SubTotal</th>
                                            <th>Rp.<?= number_format(array_sum(array_column($cart, 'subtotal')), 0, ',', '.') ?>,-</th>
                                        </tr>
                                        <tr>
                                                <td colspan="2">Lama Penyewaan</td>
                                                <td id="total_days"></td>
                                            </tr>
                                                                                    <tr>
                                            <th colspan="2">Total</th>
                                            <th id="total_price">Rp.<?= number_format(array_sum(array_column($cart, 'subtotal')), 0, ',', '.') ?>,-</th>
                                        </tr>


                                    </tfoot>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</main>

<script>

window.onload = function() {
changeListener();
}
 //fungsi kalkulasi brdrsarkan hari 
    document.getElementById("dt_start").onchange = changeListener;
    document.getElementById("dt_end").onchange = changeListener;

    function changeListener(){


const date1 =  new Date(document.getElementById("dt_start").value); // menyimpan input ke objek date
const date2 = new Date(document.getElementById("dt_end").value);
const diffTime = Math.abs(date2 - date1); //kalkulasi hari awal penyewaaan hingga hari akhir pengembalian
const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)  ) +1; 

//konversi format penulisan int ke format rupiah
const rupiah = (number)=>{
    return new Intl.NumberFormat("id-ID", {
      style: "currency",
      currency: "IDR"
    }).format(number);
  }

//tampilkan data tanggal yang sudah diinputkan di html  
document.getElementById("total_days").innerHTML  =diffDays + " Hari";
document.getElementById("dt_interval").value  =diffDays;

const total = <?php echo array_sum(array_column($cart, 'subtotal'))  ?> *diffDays;  
document.getElementById("total_price").innerHTML  = rupiah(total);

console.log(diffTime + " milliseconds");
console.log(diffDays + " days");

}
changeListener();
</script>
