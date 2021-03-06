@extends('layouts.dashboard')

@section('title')
    Dashboard Transaksi
@endsection

@section('content') 
        <!-- section content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Daftar Transaksi</h2>
              <p class="dashboard-subtitle">
              
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-12 mt2">
                  <!-- Pembukaan nav pills nya lung -->
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">Menjual</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Membeli</a>
                    </li>
                  </ul>
                  <!-- penutup nav pills -->

                  <!-- Isi dari nav pills -->
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                      aria-labelledby="pills-home-tab">
                    @foreach ($sellTransactions as $transaction)
                      <a href="{{route('dashboard-transaction-details', $transaction->id)}}" class="card card-list d-block">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-1">
                             
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-3">
                              {{$transaction->created_at}}
                            </div>
                            <div class="col-md-1 d-none d-md-block">
                              <img src="/images/dashboard-arrow-right.svg" alt="">
                            </div>
                          </div>
                        </div>
                      </a> 
                    @endforeach
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    @foreach ($buyTransactions as $transaction)
                      <a href="{{route('dashboard-transaction-details', $transaction->id)}}" class="card card-list d-block">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-1">
                            
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-3">
                              {{$transaction->created_at}}
                            </div>
                            <div class="col-md-1 d-none d-md-block">
                              <img src="/images/dashboard-arrow-right.svg" alt="">
                            </div>
                          </div>
                        </div>
                      </a> 
                    @endforeach
                    </div>
                  </div>
                  <!-- penutupan dari nav pills -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection