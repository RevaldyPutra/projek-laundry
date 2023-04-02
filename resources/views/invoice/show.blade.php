@extends('template.master')

@section('content')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Laundry|Cuciin
          
            <small class="float-right"></small>
       
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
      <b>Invoice :</b><br>
        <br>
        <b> Kepada :</b><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
      <table class="table table-striped">
  <thead>
    <tr>
      <td class="td1">No</td>
      <td class="td3">Barang</td>
      <td class="td3">harga</td>
      <td class="td4">Jumlah</td> 
      <td class="td4">Total</td>   
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="th1"></td>
      <td class="th3"></td>
      <td class="th2"></td>
      <td class="th2"></td>
      <td class="th2"></td> <!-- hasil perkalian -->
    </tr>
    
    <tr>
      <td colspan="4" class="text-right"><b>Total</b></td>
      <td class="th2 text-left"><b></b></td> <!-- menampilkan nilai total -->
    </tr>
  </tbody>
</table>

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Payment</p>
        <img src="{{ asset('adminlte/dist/img/credit/visa.png')}}" alt="Visa">
        <img src="{{ asset('adminlte/dist/img/credit/mastercard.png')}}" alt="Mastercard">
        <img src="{{ asset('adminlte/dist/img/credit/american-express.png')}}" alt="American Express">
        <img src="{{ asset('adminlte/dist/img/credit/paypal2.png')}}" alt="Paypal">

        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
          
        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Jenis Paket</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Kaos</th>
            </tr>
            <tr>
              <th>Bed Cover</th>
            </tr>
            <tr>
              <th>Kiloan:</th>
            </tr>
            <tr>
              <th>Selimut:</th>
            </tr>
          </table>
        </div>
      </div>
      <div class="row no-print">
                <div class="col-12">
                  <a href="{{route('cetakinvoice')}}" rel="noopener" target="_blank" class="btn btn-default">
                    <i class="fas fa-print"></i> Print</a>
</div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
</body>
</html>
@endsection
