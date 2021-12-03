@extends('layouts.master')
@section('content-header')

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Replay</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Autoreplay</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    
@endsection


@section('container')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Autoreplay</h3>
      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

          <div class="input-group-append">
            <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    
     <!-- /.card-header -->
     <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            
            <th width="1%" class="text-center">No</th>
						<th width="5%" class="text-center">Keyword</th>
						<th width="5%" class="text-center">Response</th>
						<th width="1%" class="text-center">Case Sensitive</th>
            <th width="1%" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1.</td>
            <td class="text-center">Hallo</td>
            <td class="text-center">Hallo Juga</td>
            <td class="text-center"><button type="button" class="btn btn-block btn-primary btn-sm">Non-sensitive</button></td>
            <td class="text-center"><button type="button" class="btn btn-block btn-danger btn-sm">Hapus</button></td>
          </tr>
          <tr>
            <td class="text-center">2.</td>
            <td class="text-center">Selamat Pagi</td>
            <td class="text-center">Selamat Pagi Juga</td>
            <td class="text-center"><button type="button" class="btn btn-block btn-danger btn-sm">Sensitive</button></td>
            <td class="text-center"><button type="button" class="btn btn-block btn-danger btn-sm">Hapus</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </div>
    
  </div>
</div>
@endsection