@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">

			<h1 class="panel-title"><center>Data Repositori</h1></center>
			<br>
			

			<div class="row">


				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Repository</h3>


									
								</div>
								
								<div class="panel-body">
									<table class="table table-hover">
										<tbody>
											<tr>
												
												
											</td>
											
											</tr>

										<tr>

											
											<td><b>Judul Dokumen </b></td>
											<td>{{$data_repo->title}}</td>
											<td>&nbsp</td>
											<td><b>Author</b> </td>
											<td>{{$data_repo->author->author}}</td>

										</tr>
										<tr>
											
											<td><b>Program Studi </b></td>
											<td>{{$data_repo->prodi->program_studi}}</td>
											<td>&nbsp</td>
											<td><b>Tipe Dokumen</b> </td>
											<td>{{$data_repo->type->type}}</td>
										</tr>
										<tr>											
											<td >Abstract </td>
											<td  colspan="4" >{{$data_repo->description}}</td>
											
										</tr>
										<tr>											
											<td>Nama Dokumen </td>
											<td>{{$data_repo->file_repo}}</td>
											<td>&nbsp</td>
											<td><b>Pengusul Dokumen</b></td>
											<td>&{{$data_repo->user->name}}</td>
										</tr>
										
										<tr>
											
											<td><b>Pengusul Dokumen</b></td>
											<td>{{$data_repo->user->name}}</td>
											<td>&nbsp</td>
											<td><b>Status Dokumen</b> </td>
											<td>{{$data_repo->status}}</td>
										</tr>
										<tr>
											
											<td >Download File Dokumen </td>
											<td  colspan="4" ><a href="{{url('/images/repo', $data_repo->file_repo)}}" class="btn btn-primary btn-sm">DOWNLOAD FILE</a></td>
											
										
										</tr>
									
									
									
			

			</tbody>
		</table>
	<a href="/repo"><button type="button" class="btn btn-primary"><i class="fa fa-refresh"></i> Kembali</button></a>
									
	</div>
</div>
</div>




</div>



							


							
								</div>
						</div>
							





						


		

			  </div>


@stop
