<div id="banner">
  <section>
    <div id="subheader">
      <div id="sub_content" class="animated zoomIn">
        <h1>Pesan Makananmu Sekarang!</h1>
        <div class="container-4">
          {!! Form::open(array('url' => 'restaurants/search','class'=>'','id'=>'search','role'=>'form')) !!}
          <input type="search" placeholder="Cari Menu Makanan Kesukaanmu ..." name="search_keyword" id="search">
          <button class="icon" type="submit"><i class="fa fa-search"></i></button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <div class="hidden-xs" id="count">
      <ul>
        <li><span class="number">{{getcong('total_restaurant')}}</span> Menu Makanan</li>
        <li><span class="number">{{getcong('total_people_served')}}</span> Pesanan</li>
        <li><span class="number">{{getcong('total_registered_users')}}</span> Pelanggan</li>
      </ul>
    </div>
  </section>
  <div class="flex-banner">
    <ul class="slides">
      <li><img src="{{ URL::asset('upload/'.getcong('home_slide_image1'))}}" alt=""></li>
      <li><img src="{{ URL::asset('upload/'.getcong('home_slide_image2'))}}" alt=""></li>
      <li><img src="{{ URL::asset('upload/'.getcong('home_slide_image3'))}}" alt=""></li>
    </ul>
  </div>
</div>