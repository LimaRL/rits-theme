@if($info_block_3)
<section class="home-block home-block-3">
  <div class="color-block-bg color-block-bg-green"></div>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="block-content">
          <figure class="home-block-3-image" style="background-image: url( {{ $info_block_3['image']['url'] }})"></figure>
          <div class="block-content-text">
            <div class="content-text">
              @if ( $info_block_3['text'] )
              {!! $info_block_3['text'] !!}
              @endif
            </div>
            @if ( $info_block_3['button'] )
            <div class="content-btn-custom">
              <a
                href="{{ $info_block_3['button']["link"] }}"
                @if ($info_block_3['button']["target_blank"])
                target="_blank"
                @endif
                class="btn-custom"
                type="button"
                data-label="{{ $info_block_3['button']["label_hover"] }}"
                >{{ $info_block_3['button']["label"] }}</a>
            </div>
            @endif
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="block-content">
          <div class="block-content-list">
            @if ( $info_block_3['list'] )
              <ul>
              @foreach ($info_block_3['list'] as $item)
                <li class="list-item">
                  <span class="list-item-icon" style="background-image: url( {{ $item['icon'] }})"></span>
                  {!! $item["text"] !!}
                </li>
              @endforeach
              </ul>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
