<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">
		table tr td,
		table tr th{
			font-size: 8pt;
		}
</style>
<center><h3>Laporan Peminjaman dan Pengembalian </h3></center>
<table class='table table-condensed'>
			<tr>
				<th width="80px">No Anggota</th>
        <th>Anggota</th>
        <th>Buku</th>
        <th width="120px">Nomer Peminjaman</th>
				<th width="115px">Tanggal Peminjaman</th>
				<th>Tanggal Harus Kembali </th>
				<th>Tanggal kembali</th>
        <th>Denda</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($loan as $loans)
        <tr>
          <td>{{ $loans->members->no_member }}</td>
          <td>{{$loans->members->name}}</td>
          <td>{{$loans->books->title}}</td>
          <td>{{$loans->no_loan}}</td>
          <td>{{date('d-m-Y',strtotime($loans->start_date)) }}</td>
          <td>{{date('d-m-Y',strtotime($loans->end_date)) }}</td>
          <td>{{date('d-m-Y',strtotime($loans->return_date)) }}</td>
          <td>{{$loans->punishment}}</td>
        </tr>
			@endforeach
		</tbody>
	</table>
 <center><p class="text-muted"> Total Peminjaman dan Kembali {{count($loan)}}</p><center>
 