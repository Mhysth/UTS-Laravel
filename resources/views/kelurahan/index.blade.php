@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Daftar Kelurahan</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('kelurahan.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Tambah Kelurahan</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr style="background-color: rgba(255, 255, 255, 0.8)">
                    <th scope="col">Nama Kelurahan</th>
                    <th scope="col">Alamat Kantor</th>
                    <th scope="col">Nama Lurah</th>
                    <th scope="col">Dikepalai Oleh Kecamatan</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($kelurahans as $kelurahan)
                    <tr style="background-color: rgba(255, 255, 255, 0.5)">
                        <td><a href="{{ route('kelurahan.edit', $kelurahan) }}" onmouseover="this.style.textShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.textShadow='0px 0px 0px LightSkyBlue'">{{ $kelurahan->NameKel }}</a></td>
                        <td>{{ $kelurahan->AddressKel }}</td>
                        <td>{{ $kelurahan->NameOL }}</td>
                        @foreach ($kecamatans as $kecamatan)
                            @if ($kelurahan->head_by == $kecamatan->id)
                                <td>{{ $kecamatan->NameKec }} ({{$kecamatan->NameOK}})</td>
                            @endif
                        @endforeach
                        <td>{{ $kelurahan->updated_at}}</td>
                        <td>{{ $kelurahan->created_at}}</td>
                        <td>
                            <form action="{{ route('kelurahan.destroy', $kelurahan) }}" method="post" onsubmit="return confirm('Are you sure? This action cannot be undone!')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onmouseover="this.style.boxShadow='0px 0px 15px HotPink'" onmouseout="this.style.boxShadow='0px 0px 0px HotPink'">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
