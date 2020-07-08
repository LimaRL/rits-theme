<section class="home-block home-block-7">
  <div class="color-block-bg color-block-bg-black"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="block-content">
          <h2>{{ $info_block_7->text }}</h2>
          <div class="block-services">

            <div class="block-services-categories-list">
              @php $categories = $info_block_7->categories; @endphp
              @if($categories)
              <ul class="block-services-categories">
                @foreach($categories as $key => $category)
                <li class="btn-filter {{ $key === 0 ? 'active' : '' }}" data-value="{{ $category->slug }}">
                  <h4>{{ $category->name }}</h4> <span class="arrow"></span>
                </li>
                @endforeach
              </ul>
              @endif
            </div>
            @php $services = $info_block_7->services; @endphp
            @if($services)
            <ul class="block-services-list">
              @foreach($services as $service)
              <li class="service-item animate-fadeIn" data-value="{{ $service->post_categories }}">
                <h5>{{ $service->post_title }}</h5>
                <p>Euismood</p>
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
