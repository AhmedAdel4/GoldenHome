@extends('admin.layouts.app')

@section('content')
	  <!-- Horizontal Form -->
	  <div class="container">
		  
		  <div class="card card-info">
			@include('includes.messages')
				<div class="card-header">
				  <h3 class="m-auto" style="float: right">أدخل فئه جديده</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
	
				<form autocomplete="off" class="form-horizontal" action="{{ route('category.store') }}" method="post">
						{{ csrf_field() }}
				  <div class="card-body">
					<div class="form-group row">
						<div class="col-sm-11">
							<input type="text" name="name" value="{{ old('name') }}" style="text-align: right" class="form-control @error('name') is-invalid @enderror" id="inputEmail3" placeholder="...أدخل اسم جديد">
						</div>
						<label for="inputEmail3" class="col-sm-1 col-form-label">:أسم الفئه  </label>
						
					</div>
				
					
				  </div>
				  <!-- /.card-body -->
				  <div class="card-footer">
					  <a href="{{ route('category.index') }}" class="btn btn-warning float-right">رجوع</a>
					<button type="submit" class="btn btn-info">حفظ</button>
				  </div>
				  <!-- /.card-footer -->
				</form>
			  </div>
			  <!-- /.card -->
	  </div>
@endsection