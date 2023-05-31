@extends("app")

@section('head_title', 'Register' .' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")

<div class="white_for_login">
  <div class="container margin_60">

    <div class="row">

      <div class="col-md-3">

      </div>
      <div class="col-md-6">
        <div class="box_style_2" id="order_process">
          <h2 class="inner">Daftar</h2>
          {!! Form::open(array('url' => 'register','class'=>'','id'=>'myProfile','role'=>'form')) !!}

          <div class="message">
            <!--{!! Html::ul($errors->all(), array('class'=>'alert alert-danger errors')) !!}-->
            @if (count($errors) > 0)
            <div class="alert alert-danger">

              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

          </div>
          @if(Session::has('flash_message'))
          <div class="alert alert-success fade in">

            {{ Session::get('flash_message') }}
          </div>
          @endif

          <div class="form-group">
            <label>Nama Depan</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="" placeholder="Nama Depan">
          </div>
          <div class="form-group">
            <label>Nama Belakang</label>
            <input type="text" class="form-control" id="last_name" value="" name="last_name" placeholder="Nama Belakang">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" id="email" name="email" value="" class="form-control" placeholder="Email">
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>Kata Sandi</label>
                <input type="password" id="password" name="password" value="" class="form-control" placeholder="Kata Sandi">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>Konfirmasi Kata Sandi</label>
                <input type="password" id="password_confirmation" name="password_confirmation" value="" class="form-control" placeholder="Konfirmasi Kata Sandi">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Tipe Pengguna</label>
            <select class="form-control" name="usertype" id="usertype">
              <option value="User">User</option>
              <option value="Owner">Owner</option>
            </select>

          </div>
          <hr>

          <button type="submit" class="btn btn-submit">Daftar</button>
          {!! Form::close() !!}
        </div>
        <!-- End box_style_1 -->
      </div>
      <!-- End col-md-6 -->


    </div>

  </div>
</div>


@endsection