<section id="{!! strtolower($title) !!}">
  <div class="container mx-auto px-6 py-8 sm:px-6 lg:px-8">
    <div class="flex items-center py-8 pt-4">
      <img class="h-8 w-8 mr-4" src="{!! $icon['url'] !!}" alt="">
      <h2 class="text-3xl font-bold md:text-3xl xl:text-4xl">{!! $title !!}</h2>
    </div>
    <div class="flex flex-col mb-8 md:flex-row md:items-center md:mb-0 lg:items-start">
      <div class="md:w-3/5 lg:w-1/2">
        @foreach($info as $i) 
          @if($i['Percent'])
            <div class="a-block pb-4 lg:pb-8">
              <div class="grid grid-cols-2 gap-4 xl:gap-8">
                <div class="text-c-blue-100">
                  <span class="text-7xl font-bold leading-none">{!! $i['Percentage'] !!}%</span>
                  <p class="text-sm font-bold m-0 leading-5 xl:text-base xl:w-2/3">{!! $i['Subtext'] !!}</p>
                </div>
                <div class="">
                  <p class="text-xs leading-5 xl:text-base">{!! $i['Text'] !!}</p>
                </div>
              </div>
            </div>
          @else
            <div class="a-block pb-4">
              <div>{!! $i['Content'] !!}</div>
            </div>
          @endif
        @endforeach
      </div>
      
      <div class="md:w-2/5 lg:w-1/2 xl:pb-24">
        <div data-aos="fade-up" class="md:pl-12 lg:pl-20 xl:w-full xl:-mr-24 xl:pl-0 xl:ml-auto">
          <img class="w-full mx-auto md:w-full"  src="{!! $image['url'] !!}" alt="">
          <div class="italic text-c-blue-500 md:text-xl xl:pr-32 xl:-mt-12">{!! $caption !!}</div>
        </div>
      </div>

    </div>
  </div>
</section>