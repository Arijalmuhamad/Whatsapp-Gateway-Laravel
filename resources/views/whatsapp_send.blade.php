@extends('layouts.master')
@section('content-header')

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Send Message</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Message</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    
@endsection


@section('container')
  
<div class="container">
    <div class="card">
      <h5 class="card-header">Form Pesan</h5>
      <div class="card-body">
        <form class="form-horizontal">
          <div class="card-body">
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Whatsapp Number</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Message</label>
              <div class="col-sm-10">
                <textarea name="" id="" cols="52" rows="5"></textarea>
              </div>
            </div>
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Refresh</button>
            
            <button type="submit" class="btn btn-warning">Reset</button>
            
            <button type="submit" class="btn btn-success">Kirim Pesan</button>
            
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>
</div>
@endsection