<section id="{!! strtolower($title) !!}">
  <div class="container mx-auto px-6 pb-8 sm:px-6 lg:px-8 lg:pb-10">
    <div class="border-b border-gray-200">
      <div class="flex items-center justify-center pb-8">
        <h2 class="text-3xl font-bold md:text-3xl xl:text-4xl">{!! $title !!}</h2>
      </div>
      <div class="bg-white mb-12">
        <div class="grid grid-cols-2 gap-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
          @foreach($gallery as $i)
          <a data-aos="fade-up" class="group" href="{!! $i['Link']['url'] !!}">
            <div class="col-span-1 flex justify-center px-8 py-4 bg-gray-100 group-hover:bg-gray-200 transition duration-200">
              <img class="h-10 md:h-12" src="{!! $i['Image']['url'] !!}" alt="" />
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>