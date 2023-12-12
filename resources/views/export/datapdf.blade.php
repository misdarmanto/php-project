

<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>NAMA LENGKAP</th>
												
												<th>ALAMAT</th>
												<th>SSB PEMAIN SEKARANG</th>
												<th>JENIS KELAMMIN</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_anggota as $anggota)
									<tr>
										<td>{{$anggota->nama_lengkap}}</a></td>
										<td>{{$anggota->alamat}}</td>
										<td>{{$anggota->ssb_pemain}}</td>
										<td>{{$anggota->jenis_kelamin}}</td>
										
										
									</tr>
										@endforeach
										</tbody>