<section class="home-block home-block-6">
  <div class="color-block-bg color-block-bg-gray"></div>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="block-content">
          {!! $info_block_6->text !!}
        </div>
      </div>
      <div class="col-6">
        <div class="block-content">
          <div class="poligono"><img class="icon" src="@asset('images/poligono-gray.svg')"></div>
          <div class="block-content-image" style="background-image: url({{ $info_block_6->image['url'] }})"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="block-partners">
          @php $posts = $info_block_6->partners; @endphp
            @if($posts)
            @foreach($posts as $post)
              <div class="card {{ $post->color }}">
                <div class="card-content">
                  <h4>{{ $post->post_title }}</h4>
                  <div class="card-text">{!! $post->post_content !!}</div>
                  <img src="{{ $post->image_url }}" alt="{{ $post->post_title }}" />
                </div>
              </div>
              @endforeach
            @endif
        </div>
      </div>
    </div>
  </div>
</section>
