@extends('layouts.dashboard')

@section('title')
    Dashboard Pengaturan    
@endsection

@section('content')

        <!-- section content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Pengaturan Jasa</h2>
              <p class="dashboard-subtitle">
               
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-12">
                <form action="{{route('dashboard-settings-redirect', 'dashboard-settings-store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Nama</label>
                              <input type="text" name="store_name" class="form-control" value="{{$user->store_name}}" v-model="name" autofocus />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Kategori</label>
                              <select name="categories_id" class="form-control">
                                <option value="{{$user->categories_id}}">Tidak diganti</option>
                                    @foreach ( $categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Status Toko :
                                @if($user->store_status == 1)         
                                      Buka         
                                @else
                                     Tutup       
                                @endif
                              </label>
                              <p class="text-muted">Apakah anda juga ingin membuka toko?</p>
                              <select name="store_status" class="form-control">
                                    <option value="1">Buka</option>
                                    <option value="0">Tutup</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col text-right">
                            <button type="submit" class="btn btn-success px-5">Save Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection