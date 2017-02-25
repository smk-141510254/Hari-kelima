@extends('layouts.app')
@section('content')
<center><h1>Tunjangan Pegawai</h1></center>
	<center><a  href="{{url('tunjanganp/create')}}" class="btn btn-primary">Tambah</a></center>
<br>

	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>Kode Kategori Tunjangan</th>
				<th>Nama Pegawai</th>
			
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($tunjanganp as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_tunjangan_id}}</td>
				<td>{{$data->pegawai->user->name}}</td>
				
				<td>
					<center>{!! Form::open(['method'=>'DELETE','route'=>['tunjanganp.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection