@extends('layouts.master')
@section('content-header')

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Menu Whatsapp</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Menu Whatsapp</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    
@endsection


@section('container')


<div class="container">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Scan QRcode </h3>
    </div>
     <!-- /.card-header -->
     <div class="card-body">
      <div class="row">
        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset ('') }}assets/dist/img/qr.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text" style="text-align:center;"> Please Scan QR Code</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              
              <form>
                <img class="card-img-top" src="{{ asset ('') }}assets/dist/img/iconapi.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">URL API Gateway</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="URL API">
                  </div>
                  
                  <div class="form-group">
                    <label for="">Nomor</label>
                    <input type="text" class="form-control" id="" placeholder="Nomor">
                  </div>
                  
                  <div class="form-group">
                    <label for="">Batas Pengiriman Permenit</label>
                    <input type="text" class="form-control" id="" placeholder="Permenit">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>
          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">API Key</label>
                    <input type="input" class="form-control" id="" placeholder="URL API">
                  </div>

                <div class="footer">
                  <p>
                    <button type="submit" class="btn btn-dark">Generate New API</button>
                  </p>
                  <p>
                    <button type="submit" class="btn btn-info">Logout Whatsapp</button>
                  </p>
                </div>
              </form>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection