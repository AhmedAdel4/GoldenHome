@extends('admin.layouts.app')
@section('headSection')
   <!-- DataTables -->
   <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

@endsection
@section('content')
  <!-- Main content -->	   
  <div class="card" >
    <div class="card-header">
      <h3 class="m-auto text-dark" style="float: right !important">جميع الفئات</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @include('includes.messages')

        <p style="text-align: center"><a  class='col-lg-offset-5 btn btn-success' href="{{ route('category.create') }}">فئه جديده</a></p>

      <table id="example2" class="table table-bordered table-hover">
        <thead  style="text-align: center !important">
        <tr>
          <th>مسح</th>
          <th>تعديل</th>
          <th>الأسم</th>
          <th>التسلسل</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr  style="text-align: center !important">
              <td>
                <form id="delete-form-{{ $category->id }}" method="post" action="{{ route('category.destroy',$category->id) }}" >
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}	
                </form>
                <a href="" class="btn btn-danger" onclick="
                if(confirm('هل تريد حذف العنصر ؟'))
                    {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $category->id }}').submit();
                    }
                    else{
                      event.preventDefault();
                    }" ><span class="glyphicon glyphicon-trash"></span>حذف</a>
              </td>
              <td><a class="btn btn-info"  href="{{ route('category.edit',$category->id) }}">تعديل<span class="glyphicon glyphicon-edit"></span></a></td>
              <th>{{ $category->name }}</th>
              <td>{{ $loop->index + 1 }}</td>
            </tr>
          @endforeach
         
        </tbody>
        <tfoot  style="text-align: center !important">
        <tr>
          <th>مسح</th>
          <th>تعديل</th>
          <th>الأسم</th>
          <th>التسلسل</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  <!-- /.box -->

	        







@endsection

@section('footerSection')


<!-- DataTables -->
<script src="/plugins/datatables/jquery.dataTables.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": true,
    });
  });
</script>
@endsection