@if($info_block_2)
<section class="home-block home-block-2">
  <div class="color-block-bg color-block-bg-green"></div>

  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="block-content">
          <div class="block-content-text">
            <div class="content-text">
              @if ( $info_block_2['text'] )
              {!! $info_block_2['text'] !!}
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="block-content">
          <div class="block-content-video">
            @if ( $info_block_2['text'] )
              <div class="thumbnail">
                <img src="{{ $info_block_2['video']['thumbnail']['url'] }}" alt="" srcset="">
                <button id="btn-video"><img src="@asset('images/play.svg')"></button>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
