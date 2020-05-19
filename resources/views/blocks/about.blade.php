@if($show)
  <section id="{!! $title_link !!}">
    <div class="container mx-auto px-6 pt-4 pb-8 sm:px-6 lg:px-8 lg:pt-4 lg:pb-12">
      <div class="flex items-center justify-center pb-8">
        <h2 class="text-3xl font-bold text-c-blue-100 md:text-3xl xl:text-4xl">{!! $title !!}</h2>
      </div>
      <div data-aos="fade-up" class="pb-8 lg:pb-12">
        <img src="{!! $image['url'] !!}" alt="">
      </div>
      <div class="flex flex-col lg:flex-row lg:max-w-4xl lg:mx-auto xl:max-w-5xl">
        <div class="text-lg text-c-blue-100 lg:w-3/5 lg:pr-12">
          {!! $text_left !!}
        </div>
        <div class="text-c-gray-400 text-sm lg:w-2/5">
          {!! $text_right !!}
        </div>
      </div>
    </div>
  </section>
@endif