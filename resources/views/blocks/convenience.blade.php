<section id="{!! strtolower($title) !!}">

  <div x-data="" class="relative overflow-hidden bg-cover bg-center bg-no-repeat" style="background-image:url(' {!! $image['url'] !!}')">
    <div class="relative container mx-auto bg-c-blue-100 z-30 flex flex-col sm:px-6 md:flex-row md:bg-transparent md:items-center lg:px-8">
        <div class="order-1 md:w-2/5 md:invisible md:order-0 lg:w-1/2">
          <img src="{!! $image['url'] !!}" alt="">
        </div>
        <div data-aos="fade-up" class="text-white bg-c-blue-100 relative z-30 px-6 py-12 order-0 md:mb-32 md:mt-16 md:w-3/5 md:order-1 md:p-12 lg:w-1/2 lg:p-16 xl:p-20 xl:mb-48">
          <div class="flex items-center pb-4">
            <img class="h-8 w-8 mr-4 xl:h-10" src="{!! $icon['url'] !!}" alt="">
            <h2 class="text-3xl font-bold md:text-3xl xl:text-4xl">{!! $title !!}</h2>
          </div>
          <p class="text-lg leading-7 m-0 md:text-xl xl:text-2xl xl:leading-8">{!! $content !!}</p>
        </div>
    </div>
  </div>

  <div class="bg-c-blue-500">
    <div class="container mx-auto px-6 sm:px-6 lg:px-8">
      <div class="py-8 pt-12 md:flex md:py-0">
        @foreach($features as $f)
          <div class="con_feat text-white pb-4 md:w-1/2 md:pb-0">
            <div class="flex flex-col md:py-8 md:pt-12 xl:flex-row">
              <div class="pb-8 xl:flex-shrink-0 xl:pr-12">
                <img class="h-16 w-auto mx-auto xl:w-16 xl:m-0" src="{!! $f['Image']['url'] !!}" alt="">
              </div>
              <div class="">{!! $f['Content'] !!}</div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

</section>