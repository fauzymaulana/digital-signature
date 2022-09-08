@extends('frontend.index')
@section('content-wrapper')
    <section class="content pt-4">
        <!-- Default box -->
        <div class="card">
            <img src="{{ URL::to('assets/img/Logo.jpg') }}" class="card-img-top mb-3" alt="...">
            <div class="card-body text-center">
            </div>
        </div>
        <!-- /.card -->

    </section>
    <footer class="main-footer">
    <div class="pull-right hidden-sm">
      <!-- <b>(021)</b>7398615 -->
    </div>
        <strong>Copyright © 2022 <a target="_blank" href="https://univamedan.ac.id/"> Universitas Al Washliyah Medan</a>.</strong> All rights reserved. <br>
      <!--IT Support - <a target="_blank" href="https://api.whatsapp.com/send?phone=+6285270554715"> 085270554715 </a>
      <p class="pull-right">Template By AdminLTE V.2</p>
  </footer>
 
  <!-- Control Sidebar -->
        <div class="control-sidebar-bg text-center"></div>
    </div>
@endsection
