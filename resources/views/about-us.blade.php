<x-layouts.frontend>


    <section class="py-4 inner-section position-relative">
      <div class="container d-flex justify-content-center align-items-center">
        <div class="w-50 mx-auto  text-center text-white">
          <h1 class="h2 product_title display-5 fw-bold mt-3 text-center">About Us</h1>
          <p>To build a framework that makes auto repairs predictable. To make aftermarket auto parts an after thought.</p>
        </div>
      </div>
    </section>

    <x-product-values />


    <section class="pt-5 pb-4">
      <div class="container">
        <p>Vivamus sed metus sit amet dui scelerisque mattis. Donec id imperdiet nulla. Maecenas malesuada justo ac blandit maximus. Curabitur aliquam justo vitae felis pellentesque, a semper orci sollicitudin. Donec hendrerit nisl at neque dapibus dapibus. Morbi dignissim, ligula ut luctus dapibus, enim eros bibendum risus, in blandit quam augue a neque. Donec rhoncus ligula ut dapibus suscipit.</p>

        <h2>Praesent dictum felis eget velit malesuada hendrerit.</h2>
        <p>Aliquam erat volutpat. Maecenas imperdiet metus quis diam posuere gravida. Nullam nec sodales risus, sed condimentum odio. Etiam facilisis suscipit arcu, sit amet rhoncus nulla volutpat eu. Donec turpis diam, feugiat vitae rutrum lacinia, sodales non turpis.</p>

        <p>Curabitur at nisl in magna feugiat finibus. Aenean ac turpis quis tortor lacinia bibendum. Aliquam sed nisi arcu. Sed efficitur placerat nunc, vel eleifend augue rhoncus ac. Nulla ut sagittis tellus. Donec nec vulputate ligula. Etiam non sapien nec arcu ullamcorper pellentesque at non neque. Proin at hendrerit nibh. Fusce metus enim, euismod bibendum feugiat in, blandit convallis felis.<p>
        <div class="row ">
          <div class="col-lg-5 my-2">
            <img src="{{asset('front/images/about-image-01.jpg')}}" class="img-fluid rounded" alt="">
          </div>
          <div class="col-lg-7 my-2">
            <h2>Vivamus vel feugiat dui, vel gravida nisl.</h2>
            <p>Maecenas id est nunc. Sed at fringilla nisl. Praesent venenatis efficitur quam in posuere. Duis rhoncus consequat odio, vel tristique leo aliquam nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae diam non augue dictum ullamcorper. Integer aliquet velit non libero consectetur, nec viverra ex viverra. Sed mattis dolor enim, eu laoreet nisl pulvinar at.</p>

            <p>Maecenas eleifend commodo sem, in euismod ex suscipit id. Phasellus varius pellentesque augue. Cras nec nulla egestas, sagittis sem at, elementum nunc.</p>

            <p>Suspendisse quis odio ut diam consequat tempus vitae in neque. Mauris efficitur, justo a vehicula volutpat, erat mauris lacinia quam, in interdum nulla risus quis lorem. Proin dui odio, varius vel metus nec, mollis luctus nisl. Morbi tempus orci sed blandit sagittis. Cras viverra congue metus, a tincidunt risus pulvinar eget.</p>

            <h2>Suspendisse potenti. Donec id accumsan justo.</h2>
            <p>Praesent urna elit, pulvinar non nisl et, tincidunt sagittis tellus. Maecenas luctus sed sapien eu tempor. Aenean elementum est ac justo luctus sodales. Vestibulum tellus leo, consectetur ut scelerisque nec, sagittis non leo. Nunc vestibulum massa aliquet vestibulum mattis. Suspendisse ornare, ante non fringilla interdum, ligula nulla lobortis metus, a semper est arcu eu enim. Aenean a blandit sapien. Cras scelerisque blandit urna in congue.<p>
          </div>

        </div>
        <h3 class="mt-4">Ut auctor nisi a risus ornare, sed efficitur ipsum sagittis.</h3>
        <p>Nunc imperdiet rutrum eleifend. Sed accumsan aliquet dolor eget aliquam. Morbi ac nulla at tellus luctus luctus. Suspendisse feugiat eleifend viverra. Quisque aliquam eros ac sem aliquam, sed interdum dolor sagittis. Aliquam vel commodo lacus, eget rutrum ipsum. Sed feugiat nisi est, et ultricies purus laoreet vitae.<p>

        <p>Aenean semper suscipit placerat. Praesent sagittis leo nunc, eu pharetra sapien finibus sed. Vivamus odio mauris, euismod vulputate tortor a, sodales auctor nisi. Morbi turpis erat, aliquet sit amet consequat et, gravida sit amet nibh. Mauris tempus auctor elit id tempor. In maximus pulvinar sem vel interdum. Curabitur accumsan dolor eget augue varius lobortis.<p>
      </div>
    </section>

    <section class="py-4 faqs">
      <div class="container">
        <div class="row g-5 align-items-start">
          <!-- LEFT: Banner -->
          <div class="col-lg-5">
            <div class="card bg-light rounded-4  h-100 position-relative overflow-hidden">
              <!-- Optional image -->
              <img src="{{asset('front/images/banner-03.png')}}" class="img-fluidcard-img" alt="...">
              <div class="card-img-overlay">
                <h2 class=" mb-3">
                  Questions you may be curious about.
                </h2>
                <p class="text-muted mb-3">
                  Item currently in stock. Items with this status are shipped within 4–5
                  days of payment.
                </p>
                <p class="text-muted mb-4">
                  Do you need more information?
                </p>
                <a href="#" class="btn btn-primary rounded-pill px-4 small text-white">
                  More Information
                </a>
              </div>
            </div>
          </div>
          <!-- RIGHT: Accordion -->
          <div class="col-lg-7">
            <div class="accordion" id="faqAccordion">
              <!-- Item 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    How Do I Know If a Part Fits My Vehicle?
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted">
                    <strong>
                      This is the third item’s accordion body.
                    </strong>
                    It is hidden by default, until the collapse plugin adds the appropriate
                    classes that we use to style each element. These classes control the overall
                    appearance, as well as the showing and hiding via CSS transitions. You
                    can modify any of this with custom CSS or overriding our default variables.
                    It’s also worth noting that just about any HTML can go within the
                    <code>
                      .accordion-body
                    </code>
                    , though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <!-- Item 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Can I Save Multiple Vehicles in My Garage?
                  </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted">
                    This is the accordion body content.
                  </div>
                </div>
              </div>
              <!-- Item 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    What Does "Automotive Solutions" Mean in Auto Parts?
                  </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted">
                    This is the accordion body content.
                  </div>
                </div>
              </div>
              <!-- Item 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                    Are Aftermarket Parts Reliable?
                  </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted">
                    This is the accordion body content.
                  </div>
                </div>
              </div>
              <!-- Item 5 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                    Can I Return a Part If It Doesn’t Fit?
                  </button>
                </h2>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted">
                    This is the accordion body content.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


</x-layouts.frontend>