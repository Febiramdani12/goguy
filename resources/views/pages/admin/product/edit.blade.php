@extends('layouts.admin')

@section('title')
    Jasa  
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Jasa</h2>
              <p class="dashboard-subtitle">
                Edit Jasa
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                        <form action="{{route('product.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Nama Jasa</label>
                                    <input type="text" name="name" value="{{$item->name}}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Pemilik Jasa</label>
                                        <select name="users_id" class="form-control">
                                        <option value="{{$item->users_id}}" selected>{{$item->user->name}}</option>
                                            @foreach ($users as $user)
                                            
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Pemilik Jasa</label>
                                        <select name="categories_id" class="form-control">
                                        <option value="{{$item->categories_id}}" selected>{{$item->category->name}}</option>
                                            @foreach ( $categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                    <input type="number" value="{{$item->price}}" name="price" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <textarea name="description" id="editor">{!! $item->description !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success px-5">
                                        Save
                                    </button>
                                </div>
                            </>
                        </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection


@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace( 'editor' );
                </script>
@endpush