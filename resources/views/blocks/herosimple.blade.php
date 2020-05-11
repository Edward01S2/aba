<div x-data="" class="relative overflow-hidden bg-cover bg-center bg-no-repeat" style="background-image:url(' {!! $image['url'] !!}')">
  <div class="relative container mx-auto z-30 flex bg-c-blue-100 flex-col sm:px-6 md:items-start md:bg-transparent lg:px-8">
      <div data-aos="fade-up" data-aos-delay="200" class="text-white bg-c-blue-100 relative z-30 p-6 py-16 md:my-16 md:w-3/5 md:p-12 md:py-16 lg:w-1/2 xl:p-20 xl:py-20 xl:my-32">
        <h1 class="text-2xl font-bold leading-tight md:text-3xl mb-8 xl:text-4xl">{!! $content !!}</h1>
        <a class="inline-block font-bold tracking-wider text-c-blue-600 bg-white rounded-full px-8 py-2 xl:text-lg hover:-translate-y-1 hover:shadow-md hover:text-white hover:bg-c-blue-300 transform transition duration-300 md:px-12 md:py-3 xl:px-16" href="{!! $link['url'] !!}">
          {!! $link['title'] !!}
        </a> 
      </div>
      <div class="md:hidden">
        <img src="{!! $image['url'] !!}" alt="">
      </div>
  </div>
</div>