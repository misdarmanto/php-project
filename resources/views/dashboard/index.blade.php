@extends('layouts.master')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Selamat Datang {{auth()->user()->name}}</h3>
									
										
									
									</div>
								</div>
								
							</div>
				</div>
			</div>
		
		
	</div>

@stop
