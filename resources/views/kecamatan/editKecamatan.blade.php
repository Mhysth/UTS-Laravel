@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Edit Data Kecamatan</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('kecamatan.update', $kecamatan) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Nama Kecamatan : </label>
                        <input type="text" class="form-control" name="NameKec" value="{{ $kecamatan->NameKec }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Alamat Kantor Kecamatan : </label>
                        <input class="form-control" value="{{ $kecamatan->AddressKec }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nama Camat : </label>
                        <input class="form-control" name="NameOK" value="{{ $kecamatan->NameOK }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
