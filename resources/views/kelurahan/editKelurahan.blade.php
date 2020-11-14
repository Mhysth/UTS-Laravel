@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Edit Data Kelurahan</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('kelurahan.update', $kelurahan) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Nama Kelurahan : </label>
                        <input type="text" class="form-control" name="NameKel" value="{{ $kelurahan->NameKel }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Alamat Kantor Kelurahan : </label>
                        <input class="form-control" value="{{ $kelurahan->AddressKel }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Dikepalai Oleh Kecamatan : </label>
                        <select class="custom-select" name="head_by" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            @foreach ($kecamatans as $kecamatan)
                                @if ($kelurahan->head_by == $kecamatan->id) {
                                <option value="{{ $kecamatan->id }}" selected>{{$kecamatan->NameKec . ' (' . $kecamatan->AddressKec .')'}}</option>
                                }
                                @else{
                                <option value="{{ $kecamatan->id }}">{{$kecamatan->NameKec . ' (' . $kecamatan->AddressKec .')'}}</option>
                                }
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Lurah : </label>
                        <input class="form-control" name="NameOL" value="{{ $kelurahan->NameOL }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
