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
                <div class="card-header bg-success">
                    <h6 class="p-0 m-0 fw-bold">Tambah Data Ijazah</h6>
                </div>
                <div class="card-body">
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
                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show mb-3"
                            role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <div>
                                <div>
                                    {{ session('error') }}
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                    @endif
                    <form action="{{ URL::to('dataijazah') }}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                                    id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                                @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="program_studi" class="col-sm-2 col-form-label">Program Studi</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control @error('program_studi') is-invalid @enderror"
                                    id="program_studi" name="program_studi" value="{{ old('program_studi') }}">
                                @error('program_studi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tahun_angkatan" class="col-sm-2 col-form-label">Tahun Angkatan</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control @error('tahun_angkatan') is-invalid @enderror"
                                    id="tahun_angkatan" name="tahun_angkatan" autofocus value="{{ old('tahun_angkatan') }}">
                                @error('tahun_angkatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control @error('npm') is-invalid @enderror"
                                    id="npm" name="npm" autofocus value="{{ old('npm') }}">
                                @error('npm')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="ipk" class="col-sm-2 col-form-label">IPK</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control @error('ipk') is-invalid @enderror"
                                    id="ipk" name="ipk" autofocus value="{{ old('ipk') }}">
                                @error('ipk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="digital_signature" class="col-sm-2 col-form-label">Digital Signature</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control mb-4 @error('digital_signature') is-invalid @enderror" id="digital_signature"
                                    name="digital_signature">{{ old('digital_signature') }}</textarea>
                                @error('digital_signature')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-success me-md-2" type="submit">
                                        <i class="fas  fa-check me-1"></i>
                                        Tanda Tangani
                                    </button>
                                    <button class="btn btn-success me-md-2" type="submit">
                                        <i class="fas fa-save me-1"></i>
                                        Simpan Data
                                    </button>
                                    <button class="btn btn-secondary" type="reset">
                                        <i class="fas fa-ban me-1"></i>
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
