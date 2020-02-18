@extends('admin.layouts.app')

@section('content')
	  <!-- Horizontal Form -->
	  <div class="container">
		  
		  <div class="card card-info">
			@include('includes.messages')
				<div class="card-header">
				  <h3 class="m-auto" style="float:right" >تعديل موظف</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<div class="content">
				<form autocomplete="off" class="form-horizontal" action="{{ route('manager.update' , $manager->id) }}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PUT')
				  <div class="card-body">
					<div class="form-group row">
					  <label for="inputEmail3" style="text-align: right"  class="col-sm-12 col-form-label">الأسم</label>
					  <div class="col-sm-12">
						<input type="text" name="name" style="text-align: right" value="{{ $manager->name }}" class="form-control @error('name') is-invalid @enderror" id="inputEmail3" placeholder="أدخل أسم جديد">
					  </div>
	
					  <label for="inputEmail4" style="text-align: right" class="col-sm-12 col-form-label">الوظيفه</label>
					  <div class="col-sm-12">
						<input type="text" name="description" style="text-align: right" value="{{ $manager->description }}" class="form-control @error('description') is-invalid @enderror" id="inputEmail4" placeholder="أدخل الوظيفه">
					  </div>
	
					  
						<label for="exampleInputFile" style="text-align: right" class="col-sm-12 col-form-label">الصوره</label>
						<div class="input-group col-sm-12">
						  <div class="custom-file">
							
							<input type="file" name="image"  class="custom-file-input" id="exampleInputFile">
							<label class="custom-file-label"  for="exampleInputFile">أختر صوره</label>
						  </div>
						</div>
					
	
					</div>
				
					
				  </div>
				  <!-- /.card-body -->
				  <div class="card-footer">
					  <a href="{{ route('manager.index') }}" class="btn btn-warning float-right">رجوع</a>
					<button type="submit" class="btn btn-info">حفظ</button>
				  </div>
				  <!-- /.card-footer -->
				</form>
			</div>
			  </div>
			  <!-- /.card -->
	  </div>
@endsection

@section('footerSection')


<!-- bs-custom-file-input -->
<script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>



<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>


@endsection