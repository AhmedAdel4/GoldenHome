@extends('admin.layouts.app')

@section('content')
	  <!-- Horizontal Form -->
	  <div class="container">
		  
		  <div class="card card-info">
			@include('includes.messages')
				<div class="card-header">
				  <h3 class="m-auto" style="float: right">منتج جديد</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form autocomplete="off" class="form-horizontal" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
						@csrf
				  <div class="card-body">
					<label for="inputEmail3" style="text-align: right" class="col-sm-12 col-form-label">أسم المنتج</label>
					<div class="form-group">
					<input type="text" value="{{ old('name')}}" style="text-align: right" name="name" class="form-control @error('name') is-invalid @enderror" id="inputEmail3" placeholder="أدخل أسم المنتج">
					  
					</div>

					
	
					<label  style="text-align: right" class="col-sm-12 col-form-label">أختر صوره رئيسيه</label>
					
					<div class="input-group col-sm-12">
					  <div class="custom-file">
						
						<label class="custom-file-label" style="text-align: center" for="exampleInputFile">تحميل صوره</label>
						<input type="file" name="image"  class="custom-file-input" id="exampleInputFile" lang="en">
					  </div>
					</div>
					<br>
	
					<label style="text-align: right" class="col-sm-12 col-form-label">أدخل الصور الفرعيه</label>
						<div class="input-group col-sm-12">
						  <div class="custom-file">
							
							<input type="file" name="files[]"  class="custom-file-input" id="exampleInputFile1" multiple>
							<label class="custom-file-label" style="text-align: center" for="exampleInputFile1">تحميل صوره</label>
						</div>
						</div>
						<br>
	
						<label style="text-align: right" class="col-sm-12 col-form-label">أدخل أبعاد المنتج</label>
					<div class="row" style="text-align: right;">
						<div class="col-sm-4">
							<input type="text" value="{{ old('hight-name')}}" class="ln form-control @error('hight-name') is-invalid @enderror" style="text-align: right" size="5" name="hight-name" placeholder="الأسم">  
							<input type="text" value="{{ old('hight-value')}}" class="ln form-control @error('hight-value') is-invalid @enderror" style="text-align: right" size="5" name="hight-value" placeholder="الرقم">
						</div>
						<div class="col-sm-4">
							<input type="text" value="{{ old('width-name')}}" class="ln form-control @error('width-name') is-invalid @enderror" style="text-align: right" size="5" name="width-name" placeholder="الأسم">
							<input type="text" value="{{ old('width-value')}}" class="ln form-control @error('width-value') is-invalid @enderror" style="text-align: right" size="5" name="width-value" placeholder="الرقم">
						</div>
						<div class="col-sm-4">
							<input type="text" value="{{ old('length-name')}}" class="ln form-control @error('length-name') is-invalid @enderror" style="text-align: right" size="5" name="length-name" placeholder="الأسم" > 
							<input type="text" value="{{ old('length-value')}}" class="ln form-control @error('length-value') is-invalid @enderror" style="text-align: right" size="5" name="length-value" placeholder="الرقم">
						</div>
					</div>
					<br>
					 
						<label for="inputStatus" style="text-align: right" class="col-sm-12 col-form-label">أختر فئة المنتج</label>
						<select dir="rtl" style="text-align: center !important; float: right !important" class="form-control custom-select align-content-end" name="category">
							@foreach ($categories as $category)
								<option style="text-align: center !important; float: right !important" value="{{ $category->id }}">{{ $category->name }}</option>
							@endforeach
						</select>
					  
					
				
					
				  </div>
				  <!-- /.card-body -->
				  <div class="card-footer">
					  <a href="{{ route('product.index') }}" class="btn btn-warning float-right">رجوع</a>
					<button type="submit" class="btn btn-info">حفظ</button>
				  </div>
				  <!-- /.card-footer -->
				</form>
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