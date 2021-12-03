@extends('layouts.master')
@section('content-header')

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    
@endsection


@section('container')
    <!-- Small boxes (Stat box) -->
  <div class="container">
    
      <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
    
                <p>Total Nomor</p>
              </div>
              <div class="icon">
                <i class="ion ion-ipad"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px"></sup></h3>
    
                <p>Whatsapp Terkirim</p>
              </div>
              <div class="icon">
                <i class="ion ion-paper-airplane"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
    
                <p>Delay Pengiriman</p>
              </div>
              <div class="icon">
                <i class="ion ion-load-d"></i>
              </div>
            
            </div>
          </div>
        </div>
     
   </div>
    

      @endsection

 
    