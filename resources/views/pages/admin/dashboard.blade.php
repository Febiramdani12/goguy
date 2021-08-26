@extends('layouts.admin')

@section('title')
    Go-Guy | Admin Dashboard   
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Admin Dashboard</h2>
              <p class="dashboard-subtitle">
                Go-Guy Administrator Panel
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <div class="dashboard-card-title">
                        User
                      </div>
                      <div class="dashboard-card-subtitle">
                        {{$customer}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <div class="dashboard-card-title">
                        Total
                      </div>
                      <div class="dashboard-card-subtitle">
                        Rp. {{number_format($revenue)}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <div class="dashboard-card-title">
                        Transaksi
                      </div>
                      <div class="dashboard-card-subtitle">
                        {{$transaction}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Notifikasi</h2>
            </div>
            <div class="dashboard-content">
          @if(auth()->user()->is_admin)
    @forelse($notifications as $notification)
        <div class="alert alert-success" role="alert">
             Pengguna Baru {{ $notification->data['name'] }} [{{ $notification->created_at }}]
            <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}">
                Mark as read
            </a>
        </div>

        @if($loop->last)
            <a href="#" id="mark-all">
                Mark all as read
            </a>
        @endif
    @empty
        There are no new notifications
    @endforelse
@endif
</div>
</div>
</div>
@endsection