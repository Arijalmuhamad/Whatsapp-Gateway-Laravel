@extends('layouts.master')
@section('content-header')

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Webhook</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Webhook</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    
@endsection


@section('container')
<div class="container">
  <div class="card">
    <h5 class="card-header">Webhook</h5>
    <div class="card-body">
      <form class="form-horizontal">
        <div class="card-body">
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">URL</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="" placeholder="" >
              
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
          
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
          
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
  </div>
</div>
@endsection