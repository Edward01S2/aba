<section id="{!! strtolower($title) !!}">
  <div class="container mx-auto px-6 py-12 sm:px-6 lg:px-8 lg:py-16">
    <div class="text-center">
      <div class="flex items-center justify-center pb-4 lg:pb-8">
        <img class="h-8 mr-4 xl:h-10" src="{!! $icon['url'] !!}" alt="">
        <h2 class="text-3xl font-bold md:text-3xl xl:text-4xl">{!! $title !!}</h2>
      </div>
      <p class="text-lg leading-7 m-0 md:text-xl lg:max-w-4xl lg:mx-auto xl:text-2xl xl:leading-8 xl:max-w-5xl">{!! $content !!}</p>
    </div>
    <div data-aos="fade-up" class="py-4 md:w-3/4 md:mx-auto md:py-8 lg:max-w-3xl xl:max-w-4xl">
      <img src="{!! $image['url'] !!}" alt="">
    </div>
    <div class="lg:grid lg:grid-cols-3 lg:gap-8 xl:gap-16">
      @foreach($features as $f)
      <div data-aos="fade-up" class="pt-4">
        <h3 class="text-c-blue-100 font-bold text-3xl w-1/2 leading-8 pb-4 md:w-1/4 md:text-4xl md:leading-10 lg:w-2/3 xl:w-1/2">{!! $f['Title'] !!}</h3>
        <p>{!! $f['Content'] !!}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>