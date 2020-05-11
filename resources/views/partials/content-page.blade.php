@if(is_front_page())
  @php(the_content())
@else
  <div class="container mx-auto px-6 sm:px-6 lg:px-8">
    <div class="py-8 pb-16 md:py-12 md:pb-20 lg:max-w-3xl lg:mx-auto xl:max-w-4xl"> 
      @php(the_content())
    </div>
  </div>
@endif

