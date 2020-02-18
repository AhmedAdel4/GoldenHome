@extends('admin.layouts.app')
@section('headSection')
   <!-- DataTables -->
   <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

@endsection
@section('content')
  <!-- Main content -->	   
  <div class="card">
    <div class="card-header">
      <h3 class="m-auto text-dark" style="float:right">جميع الموظفين</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
     @include('includes.messages')
        <p style="text-align: center"><a  class='col-lg-offset-5 btn btn-success' href="{{ route('manager.create') }}">موظف جديد</a></p>

      <table id="example2" class="table table-bordered table-hover">
        <thead style="text-align: center !important">
        <tr>
          <th>مسح</th>
          <th>تعديل</th>
          <th>الوظيفه</th>
          <th>الأسم</th>
          <th>التسلسل</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($managers as $manager)
            <tr style="text-align: center !important">
              <td>
                <form id="delete-form-{{ $manager->id }}" method="post" action="{{ route('manager.destroy',$manager->id) }}" >
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}	
                </form>
                <a href="" class="btn btn-danger" onclick="
                if(confirm('هل تريد الحذف ؟'))
                    {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $manager->id }}').submit();
                    }
                    else{
                      event.preventDefault();
                    }" ><span class="glyphicon glyphicon-trash"></span>مسح</a>
              </td>
              <td><a class="btn btn-info"  href="{{ route('manager.edit',$manager->id) }}">تعديل<span class="glyphicon glyphicon-edit"></span></a></td>
              <th>{{ $manager->description }}</th>
              <th>{{ $manager->name }}</th>
              <td>{{ $loop->index + 1 }}</td>
            </tr>
            @endforeach
         
        </tbody>
        <tfoot style="text-align: center !important">
        <tr>
          <th>مسح</th>
          <th>تعديل</th>
          <th>الوظيفه</th>
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
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection