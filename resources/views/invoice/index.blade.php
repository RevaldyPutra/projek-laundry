@extends('template.master')

@section('content')
<div class="card">
  <div class="card-header">
  <div class="card-tools">
  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
    <h3 class="card-title">Data Member</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
  <tr>
      <td class="td1">No</td>
      <td class="td5">nama</td>
      <td class="td3">harga</td>
      <td class="td4">Action</td>
  </tr>
      </thead>
      <tbody>
          <tr>
        @forelse($details as $detail)
        <th class="th1">{{ $loop->iteration}}</th>
          <td class="th2">{{ $detail->paket->nama_paket }}</td>
          <td class="th3">{{ $detail->paket->harga }}</td>
          
          <td class="th4">
          <form action="" method="POST">
            <a class="btn btn-info mr-3" href="invoice/{{$detail->id}}">
              <i class="fas fa-info-circle"></i>
              CETAK
            </a>
      </form>
       </td>
      </tr>
      @endforeach
                </tr>
                </thead>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
@endsection
