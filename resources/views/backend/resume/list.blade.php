@extends('backend.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Resume List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Resume Title</th>
                        <th>Resume Name</th>
                        <th>Resume Sub Name</th>
                        <th>Year</th>
                        <th>Institute Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($resumes as $resume)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$resume->title}}</td>
                    <td>{{$resume->resume_name}}</td>
                    <td>{{$resume->sub_resume_name}}</td>
                    <td>{{$resume->year}}</td>
                    <td>{{$resume->institute_name}}</td>
                    <td>{{$resume->description}}</td>
                    <td>
                      <a href="{{url('/admin/edit/resume/'.$resume->id)}}" class="btn btn-primary">Edit</a>
                      <a href="{{url('/admin/delete-resume/'.$resume->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@push('js')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
