@extends('layouts.app')
@section('content')

<div class="col-md-12">
   <div class="panel panel-info">
        <div class="panel-heading">Penggajian</div>
        <div class="panel-body">
        <center><a class="btn btn-primary" href="{{url('penggajian/create')}}">Tambah Data</a></center><br><br>
            <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr bgcolor="pink">
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Nip Pegawai</th> 
                                <th>Photo</th>
                                <th>Status Pengambilan</th>
                                <th colspan="3"> <center>Opsi</center></th>
                            </tr>
                        </thead>

                        @php
                            $no=1 ;
                        @endphp

                        <tbody>
                        @foreach($penggajian as $data)

                        <td>{{$no++}}</td>                        
                        <td>{{$data->tunjangan_pegawai->pegawai->user->name}}</td>
                        <td>{{$data->tunjangan_pegawai->pegawai->nip}}</td>
                        <td><img src="assets/image/{{$data->tunjangan_pegawai->pegawai->photo}}" width="100" height="100">
                        </td>
                        <td><b>@if($data->tanggal_pengambilan == ""&&$data->status_pengambilan == "0")
                        Gaji Belum Diambil
                        <div >
                                    <a class="btn btn-primary" href="{{route('penggajian.edit',$data->id)}}">Ubah Pengambilan</a>
                        </div>
                              @elseif($data->tanggal_pengambilan == ""||$data->status_pengambilan == "0")
                            Gaji Belum Diambil
                        <div>
                            <a class="btn btn-primary" href="{{route('penggajian.edit',$data->id)}}">Ubah Pengambilan</a>
                        </div>

                        @else
                            Gaji Sudah Diambil Pada {{$data->tanggal_pengambilan}}
                        @endif</b></td>

                        </h5>
                                <td><a class="btn btn-warning form-control" href="{{route('penggajian.show',$data->id)}}">Lihat</a></td>
                                     <td>{!!Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$data->id]])!!}
                                    {!!Form::submit('Delete',['class'=>'btn btn-danger col-md-12'])!!}</td>
                                    {!!Form::close()!!}

                        </center>
                        </div> 
                        </tbody>

                        @endforeach

                    </table>
                </div>

@endsection