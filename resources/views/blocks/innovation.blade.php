<section id="{!! strtolower($title) !!}">
  <div class="bg-c-blue-100 text-white lg:flex">
    <div class="lg:w-1/2 lg:order-1">
      <img class="w-full h-full object-cover object-center" src="{!! $image['url'] !!}" alt="">
    </div>
    <div class="container mx-auto pt-12 pb-8 text-center px-6 sm:px-6 md:pt-12 md:pb-8 lg:px-8 lg:w-1/2 lg:pt-16 lg:mr-0 lg:order-0 lg:text-left lg:max-w-640 lg:ml-auto xl:py-8 xl:pr-20">
      <div class="flex items-center justify-center pb-4 lg:justify-start xl:pt-8">
        <img class="h-8 mr-4 xl:h-10" src="{!! $icon['url'] !!}" alt="">
        <h2 class="text-3xl font-bold md:text-3xl xl:text-4xl">{!! $title !!}</h2>
      </div>
      <p class="text-xl leading-7 md:text-2xl lg:pr-16 lg:leading-8 xl:w-3/4 xl:pr-0">{!! $subtitle !!}</p>
      <div class="pt-4 md:pt-8 lg:pr-12 xl:pb-8 xl:pr-0">
        @foreach($features as $f)
          <div data-aos="fade-up" class="flex flex-col items-center md:flex-row md:items-start md:pb-8 xl:pb-8">
            <img class="h-16 w-16 md:h-10 md:w-10 md:mr-8 xl:h-12 xl:w-12 xl:mr-10" src="{!! $f['Icon']['url'] !!}" alt="">
            <p class="py-8 pt-4 md:py-0 md:text-left">{!! $f['Content'] !!}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>