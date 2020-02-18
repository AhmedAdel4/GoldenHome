@extends('admin.layouts.app')
@section('headSection')
 <!-- Font Awesome -->
 <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="/dist/css/adminlte.min.css">
 <!-- summernote -->
 <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
@endsection
@section('content')
<div class="container">
  
  <div class="card card-info">
    @include('includes.messages')
    <div class="card-header">
      <h3 class=" m-auto" style="float: right"> نبذه عنا</h3>
    </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" method="POST" action="{{ route('about.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          @if ($about == NULL)
          <div class="form-group">
            <label for="" style="float: right">أدخل صوره</label>
              <div class="custom-file">
                
                <input type="file" name="image" style="cursor: pointer" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" style="text-align: center" for="exampleInputFile">تحميل صوره</label>
              </div>
            </div>
          </div>
          
          <!-- /.card-header -->
          <div class="mb-3">
              <textarea name="textarea" class="textarea  @error('textarea') is-invalid @enderror" placeholder="...أدخل المحتوى"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                
              </textarea>
          </div>
          @else
          <div class="form-group">
            <label for="" style="float: right">أدخل صوره</label>
            <div class="input-group">
              <div class="custom-file">
                
                <input type="file" name="image" style="cursor: pointer" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" style="text-align: center" for="exampleInputFile">تحميل صوره</label>
              </div>
            </div>
          </div>
          
          <!-- /.card-header -->
          <div class="mb-3">
              <textarea name="textarea"  class="textarea" placeholder="...أدخل المحتوى"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                  {{ $about->text }}
              </textarea>
          </div>
          @endif
         
              
            
        
        </div>
        <!-- /.card-body -->
  
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
      </form>
    </div>
</div>
@endsection

@section('footerSection')


<!-- bs-custom-file-input -->
<script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Summernote -->
<script src="https://cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>


<script>
  CKEDITOR.replace( 'textarea' );
</script>

<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>



@endsection