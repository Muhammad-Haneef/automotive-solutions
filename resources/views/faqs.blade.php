<x-layouts.frontend>


  <section class="py-4 border-bottom">
    <div class="container">
      <h1 class="h2 product_title display-5 mt-3 text-center">FAQ</h1>
    </div>
  </section>

  <x-product-values />

  <section class="box3 py-4 border-top border-bottom">
    <div class="container">



      <div class="row">
        <div class="col-12">

          @foreach ($records as $index => $category)
          <div class="mb-5">
            <h2>{{ $category['title'] }}</h2>

            @foreach ($category['faqs'] as $faq)
            <div class="accordion mb-2" id="section{{ $index }}">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $category['id'] }}_{{ $faq['id'] }}" aria-expanded="true" aria-controls="faq1">
                    {{ $faq['q'] }}
                  </button>
                </h2>
                <div id="faq{{ $category['id'] }}_{{ $faq['id'] }}" class="accordion-collapse collapse" data-bs-parent="#section{{ $index }}">
                  <div class="accordion-body">
                    {{ $faq['a'] }}
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          @endforeach

        </div>
      </div>


    </div>
  </section>


</x-layouts.frontend>