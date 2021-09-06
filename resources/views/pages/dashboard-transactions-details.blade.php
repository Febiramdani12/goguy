@extends('layouts.dashboard')

@section('title')
    Dashboard Detail Transaksi
@endsection

@section('content') 
        <!-- section content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">#{{$transaction->code}}</h2>
              <p class="dashboard-subtitle">
                Detail Transaksi
              </p>
            </div>
            <div class="dashboard-content" id="transactionDetails">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-md-4">
                          <img src="{{Storage::url($transaction->product->galleries->first()->photos ?? '')}}" class="w-100 mb-3" alt="">
                        </div>
                        <div class="col-12 col-md-8">
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Pemesan Jasa</div>
                              <div class="product-subtitle">{{$transaction->transaction->user->name}}</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Jenis Jasa</div>
                              <div class="product-subtitle">{{$transaction->product->name}}</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Tanggal Transaksi</div>
                              <div class="product-subtitle">{{$transaction->created_at}}</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Status Pengerjaan</div>
                              <div class="product-subtitle text-danger">{{$transaction->shipping_status->status}}</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Total Pembayaran</div>
                              <div class="product-subtitle">Rp{{number_format($transaction->transaction->total_price)}}</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">No HP</div>
                              <div class="product-subtitle">{{$transaction->transaction->user->phone_number}}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <form action="{{route('dashboard-transaction-update', $transaction->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="col-12 mt-4">
                          <h5>Informasi Pengerjaan</h5>
                        </div>
                        <div class="col-12">
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Alamat</div>
                              <div class="product-subtitle">{{$transaction->transaction->user->address_one}}</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Kecamatan</div>
                              <div class="product-subtitle">{{App\Models\Province::find($transaction->transaction->user->provinces_id)->name}}</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Desa</div>
                              <div class="product-subtitle">{{App\Models\Regency::find($transaction->transaction->user->regencies_id)->name}}</div>
                            </div>
                            <!--<div class="col-12 col-md-6">
                              <div class="product-title">Kode Pos</div>
                              <div class="product-subtitle">{{$transaction->transaction->user->zip_code}}</div>
                            </div>-->
                            <div class="col-12 col-md-3">
                              <div class="product-title">Status Pengerjaan</div>
                              <select name="shipping_status" id="status" class="form-control" v-model="status">
                                <option value="Pending">Dibatalkan</option>
                                <option value="Dikerjakan">Dikerjakan</option>
                                <option value="Selesai">Selesai</option>
                              </select>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col-12 text-right">
                          <button type="submit" class="btn btn-success btn-lg mt-4">Save</button>
                        </div>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('addon-script')
  <script src="/vendor/vue/vue.js"></script>
  <script>
    var transactionDetails = new Vue({
      el: "#transactionDetails",
      data: {
        status: "{{ $transaction->shipping_status }}",
        resi: "{{ $transaction->resi }}",
      },
    });
  </script>
@endpush