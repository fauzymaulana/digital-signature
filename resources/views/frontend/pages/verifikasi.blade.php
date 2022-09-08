@extends('frontend.index')

@section('content-wrapper')
<section class="content pt-4">
    <div class="card">
        <div class="card-body">
            <h3 class="text-success"><i class="nav-icon fas fa-check-square mr-1"></i> Verifikasi</h3>
            <hr>
            <p>Silahkan gunakan sistem verifikasi keaslian ijazah untuk pengecekan.</p>
            <form action="verifikasi/cek" Method="POST">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukan Nilai Indeks Komulatif Prestasi (IPK)</label>
                        <input type="varchar" class="form-control" name="ipk" id="exampleInputipk" placeholder="Indeks Komulatif Prestasi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Masukan Kode Digital Signature</label>
                        <input type="varchar" class="form-control" name="digital_signature" id="exampleInputdigitalsignature" placeholder="Kode Digital Signature">
                    </div>
                    <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="lanjut">Lanjutkan</button>    
                    <!-- <button type="button" class="btn btn-primary" name="lanjut" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Lanjutkan
                        </button> -->
                    </div>
                </div>
            </form>

            <!-- Modal -->
            
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Keterangan Ijazah</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        tes
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
   
  

</section>
<?php
    if (isset($_POST['btn_cek'])) {

        // menangkap data yang dikirim dari form
        $ipk              = $_POST['ipk'];
        $kode_signature   = $_POST['kode_signature'];

        // menyeleksi data yang sesuai
        $data = mysqli_query($conn, "SELECT * FROM ijazah WHERE ipk='$ipk' AND digital_signature='$kode_signaure'");
       
        // menghitung jumlah data yang ditemukan
        $cek =  $data->num_rows;

        if ($cek == 1) {

            // $keterangan="Ijazah Valid";
            echo "<script>alert('Ijazah Valid');</script>";
          } else {
        
            // $keterangan="Ijazah tidak Valid";
            echo "<script>alert('Ijazah Tidak Valid');</script>";


          }
    }
    ?>

@endsection