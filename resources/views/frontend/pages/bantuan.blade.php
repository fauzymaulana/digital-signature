@extends('frontend.index')

@section('content-wrapper')
    <section class="content pt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="text-success"><i class="nav-icon fas fa-question-circle mr-1"></i> Bantuan</h3>
                <hr>
                    <div class="alert alert-success" role="alert">
                        <ol>
                            <li>
                                Langkah pertama adalah mengarahkan kursor ke bagian menu <b>Verifikasi</b>,
                            </li>
                            <li>
                                Selanjutnya silahkan input nilai Indeks Komulatif Prestasi (IPK) dan Kode Digital Signature,
                            </li>
                            <b>Keterangan :</b>Kode Digital Signature didapat dari menscan QR Code yang tertera di Surat Pernyataan Keaslian.
                            <li>
                                Kemudian Klik tombol <b>Lanjutkan</b>, Maka hasil dari verifikasi tersebut akan muncul.
                            </li>
                            <b>Keterangan :</b>Jika nilai IPK dan Kode Digital Signature benar, maka hasil yang muncul akan valid, sedangkan jika nilai IPK dan Kode Digital Signature tidak benar, maka hasil yang muncul tidak valid.
                        </ol>
                    </div>
            </div>
        </div>
    </section>
@endsection
