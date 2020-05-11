<div class="page-header bg-c-blue-100 text-white">
  <div class="container mx-auto px-6 sm:px-6 lg:px-8">
    <div class="text-center py-12 pb-20 md:py-24 md:pb-32 md:text-left md:px-12 lg:max-w-4xl lg:mx-auto lg:py-32 lg:pb-36 xl:max-w-4xl">
      <h1 class="font-bold text-3xl leading-8 tracking-wide md:leading-tight md:text-4xl lg:text-5xl">{!! $title !!}</h1>
      <div class="text-sm lg:pt-4">
        <span>Posted:</span>
        <time class="updated text-white" datetime="{{ get_post_time('c', true) }}">
          {{ get_the_date() }}
        </time>
      </div>
    </div>
  </div>
</div>

<article @php(post_class())>
  <div class="relative container mx-auto px-6 mb-12 sm:px-6 lg:px-8 lg:mb-16">
    <div class="flex flex-col">
      <div class="sticky_post order-1 pt-4 md:pt-8 lg:mx-auto lg:w-full lg:max-w-4xl xl:sticky xl:order-0 xl:max-w-none xl:top-0">
        <div class="flex justify-between items-center">
          <div>
            <a class="group" href="{{ home_url('/') }}">
              <div class="text-c-gray-100 text-sm">Back to Home</div>
              <svg class="h-8 w-8 text-c-blue-100 mx-auto group-hover:-translate-x-1 transform transition duration-200" fill="currentColor" viewBox="0 0 20 20"><path d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
            </a>
          </div>
          <div>
            <div class="a2a_kit a2a_default_style">
              {{-- @dump($icons) --}}
              <a class="a2a_button_facebook transform transition duration-200 hover:scale-105 hover:opacity-75">
                  <img class="h-8 w-8" src="{!! $icons[0]['icon']['url'] !!}" alt="">
                  {{-- <img src="https://static.addtoany.com/buttons/custom/facebook-icon-long-shadow.png" border="0" alt="Facebook" width="27" height="27"> --}}
              </a>
              <a class="a2a_button_twitter transform transition duration-200 hover:scale-105 hover:opacity-75">
                <img class="h-8 w-8 ml-4" src="{!! $icons[1]['icon']['url'] !!}" alt="">
              </a>
              {{-- <script async src="https://static.addtoany.com/menu/page.js"></script> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="order-0 -mt-12 shadow-post max-w-4xl mx-auto md:-mt-16 xl:order-1 xl:-mt-36">
        <div class="">
          <img src="{!! $image !!}" alt="">
        </div>
        <div class="">
          <div class="px-8 p-8 lg:p-12 xl:p-16">
            @php(the_content())
          </div>
          <div class="bg-c-blue-100 p-8 md:py-12 md:pb-16 text-white">
            <div class="max-w-md mx-auto lg:max-w-xl">
              <div class="text-center pb-2 md:text-left">
                <h3 class="text-lg lg:text-2xl">{!! $form !!}</h3>
              </div>
              <div class="post_form">
                @include('forms.form', ['form' => 1])
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>

@include('blocks.news', ['title' => 'More News', 'posts' => $posts, 'link' => 'Read Article'])
