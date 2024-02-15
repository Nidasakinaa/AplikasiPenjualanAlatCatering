<main role="main" class="container">

    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/_alert') ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    Keranjang Belanja
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-center">Subtotal</th>
                                <th></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($content as $row) : ?>
                                <tr>
                                    <td>
                                        <p><img src="<?= $row->image ? base_url("images/product/$row->image") : base_url('images/product/default.png') ?>" alt="" height="50"> <strong><?= $row->title ?></strong></p>
                                    </td>
                                    <td class="text-center">Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</td>
                                    <td>
                                        <form action="<?= base_url("cart/update/$row->id") ?>" method="POST">
                                            <input type="hidden" name="id" value="<?= $row->id ?>">
                                            <div class="input-group">
                                                <input type="number" name="qty" class="form-control text-center" value="<?= $row->qty ?>">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-info"><i class="fas fa-check"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="text-center">Rp.<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
                                    <td>
                                        <form action="<?= base_url("cart/delete/$row->id") ?>" method="POST">
                                            <input type="hidden" name="id" value="<?= $row->id ?>">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                             <form action="<?= base_url("checkout") ?>" method="POST">
     <tr>
                                <td colspan="3"><strong>Sub Total:</strong></td>
                                <td class="text-center"><strong>Rp.<?= number_format(array_sum(array_column($content, 'subtotal')), 0, ',', '.') ?>,-</strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3"><strong>Tanggal Awal Dan Akhir Penyewaan:</strong></td>
                                <td>
                                    <input id="dt_start" type="date" class="form-control" name="dt_start" value="<?php echo date('Y-m-d'); ?>" >
                                
                                </td>
                            <td><input id="dt_end" type="date" class="form-control" name="dt_end" value="<?php echo date('Y-m-d'); ?>" ></td>
                            <td></td>
                            </tr>

                                 <tr>
                                <td colspan="3"><strong>Lama Penyewaan:</strong></td>
                                <td class="text-center"><strong id="total_days">1 Hari</strong></td>
                                <td></td>
                            </tr>

            
                            <tr>
                                <td colspan="3"><strong>Total:</strong></td>
                                <td class="text-center"><strong id="total">Rp.<?= number_format(array_sum(array_column($content, 'subtotal')), 0, ',', '.') ?>,- </strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                    <a href="<?= base_url('home') ?>" class="btn btn-warning text-white"><i class="fas fa-angle-left"></i> Kembali belanja</a>
                     
                </td>
                <td>
                </td>
                <td>
                   
                                        <button type="submit" class="btn btn-success float-right" onclick="return confirm('Are you sure?')">Pembayaran <i class="fas fa-angle-right"></i></a>

              
            </td>
                            </tr>
                            </form>

                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>
</main>

<script>
  document.getElementById("dt_start").onchange = changeListener;
  document.getElementById("dt_end").onchange = changeListener;
  
  function changeListener(){

const date1 =  new Date(document.getElementById("dt_start").value);
const date2 = new Date(document.getElementById("dt_end").value);
const diffTime = Math.abs(date2 - date1);
const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)  ) +1; 
console.log(diffTime + " milliseconds");
console.log(diffDays + " days");



const rupiah = (number)=>{
    return new Intl.NumberFormat("id-ID", {
      style: "currency",
      currency: "IDR"
    }).format(number);
  }

document.getElementById("total_days").innerHTML  =diffDays + " Hari";

const total = <?php echo array_sum(array_column($content, 'subtotal'))  ?> *diffDays;  
document.getElementById("total").innerHTML  = rupiah(total);


  }
changeListener
</script>
