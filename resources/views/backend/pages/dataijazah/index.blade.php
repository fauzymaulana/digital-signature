@extends('backend.index')

@section('content-wrapper')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-success">
                        <i class="fas fa-file me-1"></i>
                        Data Ijazah
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <a href="{{ URL::to('dataijazah/create') }}" class="btn btn-success mb-3">
                        <i class="fas fa-plus me-1"></i>
                        Tambah Data Ijazah
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </symbol>
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </symbol>
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </symbol>
                    </svg>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible d-flex align-items-center fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                <use xlink:href="#check-circle-fill" />
                            </svg>
                            <div>
                                {{ session('success') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <table class="table table-bordered responsive-tables" style="width: 100%;">
                        <colgroup>
                            <col span="1" style="width: 5%;">
                            <col span="1" style="width: 20%;">
                            <col span="1" style="width: 15%;">
                            <col span="1" style="width: 10%;">
                            <col span="1" style="width: 15%;">
                            <col span="1" style="width: 5%;">
                            <col span="1" style="width: 25%;">
                            <col span="1" style="width: 5%;">
                        </colgroup>
                        <thead class="bg-success">
                            <tr class="text-center">
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>Program Studi</th>
                                <th>Tahun Angkatan</th>
                                <th>NPM</th>
                                <th>IPK</th>
                                <th>Digital Signature</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($dataIjazah as $ijazah)
                                <tr>
                                    <td class="text-center align-middle">{{ $i }}</td>
                                    <td class="align-middle">{{ $ijazah['nama_lengkap'] }}</td>
                                    <td class="align-middle">{{ $ijazah['program_studi'] }}</td>
                                    <td class="text-center align-middle">{{ $ijazah['tahun_angkatan'] }}</td>
                                    <td class="text-center align-middle">{{ $ijazah['npm'] }}</td>
                                    <td class="text-center align-middle">{{ $ijazah['ipk'] }}</td>
                                    <td class="align-middle">{{ $ijazah['digital_signature'] }}</td>
                                    <td class="text-center align-middle">
                                        <div>
                                            <a href="{{ URL::to('dataijazah/' . $ijazah['id_ijazah'] . '/cetak') }}"
                                                class="btn btn-warning text-white">
                                                <i class="fas fa-print me-1"></i>
                                                Cetak
                                            </a>
                                            <form action="{{ URL::to('dataijazah/' . $ijazah['id_ijazah']) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">
                                                    <i class="fas fa-trash me-1"></i>
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

<!--
<div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="lookup_length">
                                <label>
                                    Show 
                                    <select name="lookup_length" aria-controls="lookup" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    </select> 
                                    entries
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div id="lookup_filter" class="dataTables_filter">
                                <label>
                                    Search:
                                    <input type="search" class="form-control input-sm" placeholder="" aria-controls="lookup">
                                </label>
                            </div>
                        </div>
                    </div>
-->