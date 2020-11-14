@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Masukkan Data Kelurahan</h1>
        </div>
        {{-- {{ dd($mentors) }} --}}
        <div class="row">
            <div class="col">
                <form action="{{ route('kelurahan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Kelurahan : </label>
                        <input type="text" class="form-control" name="NameKel" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Alamat Kantor Kelurahan : </label>
                        <input class="form-control" name="AddressKel" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Dikepalai Oleh Kecamatan :</label>
                        <select class="custom-select" name="head_by" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            @foreach ($kecamatans as $kecamatan)
                                <option value="{{ $kecamatan->id }}">{{$kecamatan->NameKec . ' (' . $kecamatan->NameOK .')'}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Lurah : </label>
                        <input class="form-control" name="NameOL" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
