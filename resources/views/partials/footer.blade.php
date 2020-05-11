<footer>
  <div class="bg-c-blue-500 text-white">
    <div class="container mx-auto px-6 pt-8 sm:px-6 md:pt-12 md:pb-8 lg:px-8 lg:py-12">
      <div class="md:flex md:flex-wrap">
        <div class="md:w-1/2 md:order-0 lg:w-1/3 lg:flex-col lg:flex lg:justify-between xl:w-3/12">
          <div>
            <a class="hover:opacity-75 transform transition duration-150 block" href="{{ home_url('/') }}">
              <img class="h-16 mx-auto md:h-20 md:m-0" src="{!! $logo['url'] !!}" alt="">
            </a>
          </div>
          <div class="hidden text-c-gray-200 text-sm lg:block">
            <span>&copy; <?php echo esc_attr( date( 'Y' ) ); ?></span>
            {!! $copyright !!}
          </div>
        </div>
        <div class="pt-8 pb-4 md:w-full mb-4 md:py-0 md:order-2 md:pt-4 lg:w-1/3 lg:py-0 lg:order-1 xl:px-8 xl:w-5/12">
          <h3 class="font-bold pb-2 text-base">About</h3>
          <div class="footer_about">{!! $about !!}</div>
        </div>
        <div class="md:w-1/2 md:order-1 lg:w-1/3 lg:order-2 xl:flex xl:flex-col xl:justify-center xl:w-4/12">
          <div class="footer_form pb-4 xl:pb-12">
            @include('forms.form', ['form' => 1])
          </div>
          <div class="flex items-center">
            <h3 class="w-20 font-bold text-base">Social</h3>
            <div class="flex">
              @foreach($icons as $icon)

                <a class="inline-flex items-center mr-4 hover:opacity-50 transition duration-150 xl:mr-6" href="{!! $icon['Link']['url'] !!}">
                  <img class="h-8 w-8" src="{!! $icon['Icon']['url'] !!}" alt="">
                  <span class="hidden text-sm pl-2 xl:block">{!! $icon['Link']['title'] !!}</span>
                </a>

              @endforeach
            </div>
          </div>
        </div>
        <div class="text-c-gray-200 text-sm text-center py-8 md:order-4 md:w-full md:pb-0 lg:hidden">
          <span>&copy; <?php echo esc_attr( date( 'Y' ) ); ?></span>
          {!! $copyright !!}
        </div>
      </div>
    </div>
  </div>
</footer>
