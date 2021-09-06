@extends('layouts.admin')

@section('title')
    Dashboard Detail Transaksi
@endsection

@section('content') 
<div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Daftar Transaksi</h2>
              <p class="dashboard-subtitle">
              </p>
            </div>
            <div class="dashboard-content">
            <div class="row">
            <div class="col-md-12">
            <div class="card">
            <div class="card-body">
            <div class="dashboard-content">
              <div class="row">
                <div class="col-12 mt2">
                  <!-- Pembukaan nav pills nya lung -->
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  </ul>
                  <!-- penutup nav pills -->

                  <!-- Isi dari nav pills -->
                 <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Transaksi ID</th>
                                            <th>Penyedia Jasa</th>
                                            <th>Tanggal Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; ?>
                                      @foreach ($trx as $item)
                                         <tr>
                            <td>{{ $no++ }}</td>
                            <td><a href="{{route('trx-details', $item->transactions_id)}}"> {{$item->code}}</a></td>
                                            <td>{{$item->store_name}}</td>
                                            <td>{{$item->created_at}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                  </div>
                  <!-- penutupan dari nav pills -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('addon-script')
<script>
    var datatable = $('#crudTable').DataTable({
        processing: true,
        serverSide: false,
        ordering: true,
    })
</script>
@endpush