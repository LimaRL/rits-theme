@if($info_block_1)
<section class="home-block home-block-1">

  @if ( $info_block_1['image'] )
  <figure class="image-block-bg image-block-bg-right" style="background-image: url({{ $info_block_1['image']['url'] }})">
    <div class="poligono"><img class="icon" src="@asset('images/poligono-green.svg')"></div>
  </figure>
  @endif

  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="block-content">
          @if ( $info_block_1['text'] )
          {!! $info_block_1['text'] !!}
          @endif
          @if ( $info_block_1['button'] )
          <a
          href="{{ $info_block_1['button']["link"] }}"
          @if ($info_block_1['button']["target_blank"])
          target="_blank"
          @endif
          class="btn-custom"
          type="button"
          data-label="{{ $info_block_1['button']["label_hover"] }}"
          >{{ $info_block_1['button']["label"] }}</a>
          @endif
        </div>
      </div>
    </div>
  </div>

</section>
@endif
