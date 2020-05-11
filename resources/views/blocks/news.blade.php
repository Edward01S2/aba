<section id="{!! $page_link !!}">
  <div class="container mx-auto px-6 sm:px-6 lg:px-8">
    <div class="py-4 lg:flex lg:pt-8">
      <div class="py-4 pb-8 lg:w-1/2 lg:p-0">
        <h2 class="text-3xl font-bold text-center text-c-blue-100 leading-none md:text-3xl lg:text-left xl:text-4xl">{!! $title !!}</h2>
      </div>
      <div class="lg:w-1/2">
        <div>
          {{-- @dump($posts) --}}
          @foreach($posts['posts'] as $post)
            <div class="news_block mb-8">
              <a class="pb-4 block hover:text-c-blue-100 transition duration-150" href="{!! $post['link'] !!}">
                <h3 class="text-xl leading-6 font-bold">{!! $post['title'] !!}</h3>
              </a>
              <p>{!! $post['excerpt'] !!}</p>
              <div class="text-c-blue-100 pb-8">
                <a class="inline-flex items-center hover:translate-x-1 transform transition duration-200" href="{!! $post['link'] !!}">
                  <span class="pr-2">{!! $link !!}</span>
                  <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>