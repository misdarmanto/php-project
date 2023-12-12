@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Kegiatan Alumni</h3>
									<div class="right">
										
									
									</div>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-8">
											<form action="{{route('kegiatans.create')}}" method="POST" enctype="multipart/form-data">
											{{csrf_field()}}

									  <div class="form-group">
									    <label for="exampleInputEmail1" class="form-label">title</label>
									    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title">
									    </div>
									    
									   <div class="form-group">
										  <label for="exampleFormControlTextarea1" class="form-label">content</label>
										  <textarea name="content" class="ckeditor form-control" id="kono" rows="3"></textarea>
										</div>

									</div>
										<div class="col-md-4">
											<div class="input-group">
											  
										 <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">Thumbnail picture</label>
							  <input type="file" name="thumbnail" class="form-control">
							</div>  


										</div>
									</div>																																																							</div>																									
									
									<div class="input-group">
										<input type="submit" class="btn btn-info pull-right" value="submit">
									</div>

								</div>
							</div>
				</div>
			</div>
		
		
	</div>

	</div>
</div>
<div class="col"-6>
	<!-- Button trigger modal -->
	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
		<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" align="right">
		  Tambah Anggota
		</button>
    </div>
</div>

@endsection

@push('after_scripts')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>



<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    $(document).ready(function(){
    	$('#lfm').filemanager('file');
    	});
   

   


</script>
			
<script type="text/javascript">
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endpush