@extends('admin.layouts.app')

@section('content')

<div class="container">
	<!-- Horizontal Form -->
	<div class="card card-info">
		@include('includes.messages')
		<div class="card-header">
			<h3 class="m-auto" style="float: right">تعديل الفئه</h3>
		  </div>
		  <!-- /.card-header -->
		  <!-- form start -->
		  <form class="form-horizontal" action="{{ route('category.update' , $category->id)}}" method="POST">
				  @csrf
				  @method('PUT')
			<div class="card-body">
			  <div class="form-group row">
				  <div class="col-sm-11">
					  <input type="text"  value="{{ $category->name }}" name="name" class="form-control  @error('name') is-invalid @enderror" style="text-align: right" id="inputEmail3" placeholder="...أدخل اسم جديد">
				   </div>
				   <label for="inputEmail3 " class="col-sm-1 col-form-label">:أسم الفئه </label>
			  </div>
		  
			  
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<a href="{{ route('category.index') }}" class="btn btn-warning float-right">رجوع</a>
			  <button type="submit" class="btn btn-info">تأكيد</button>
			</div>
			<!-- /.card-footer -->
		  </form>
		</div>
		<!-- /.card -->
</div>
@endsection