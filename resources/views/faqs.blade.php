<x-layouts.frontend>



    <div class="checkout-banner position-relative">
        <img src="img/home-applainces.jpg" class="img-fluid w-100" alt="offer">
    </div>

    <div class="main-page-banner  py-5">
        <div class="container">
            <x-page-title title="FAQs" />
            <div class="row">
                @foreach ($records as $category)
                <div class="col-12 col-md-6 col-lg-6 pe-md-3 pe-lg-4">
                    <h5 class="mt-5">{{ $category['title'] }}</h5>
                    <div class="accordion" id="faqsaccordion-left">
                        @foreach ($category['faqs'] as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $category['id'] }}_{{ $faq['id'] }}" aria-expanded="true" aria-controls="faq1">
                                    {{ $faq['q'] }}
                                </button>
                            </h2>
                            <div id="faq{{ $category['id'] }}_{{ $faq['id'] }}" class="accordion-collapse collapse" data-bs-parent="#faqsaccordion-left">
                                <div class="accordion-body">
                                    {{ $faq['a'] }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>




    <div class="container">









    </div>

</x-layouts.frontend>