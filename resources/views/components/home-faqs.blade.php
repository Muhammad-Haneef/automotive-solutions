
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
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    How Do I Know If a Part Fits My Vehicle?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show"
                                data-bs-parent="#faqAccordion">
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
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Can I Save Multiple Vehicles in My Garage?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    This is the accordion body content.
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What Does "Automotive Solutions" Mean in Auto Parts?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    This is the accordion body content.
                                </div>
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Are Aftermarket Parts Reliable?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    This is the accordion body content.
                                </div>
                            </div>
                        </div>
                        <!-- Item 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Can I Return a Part If It Doesn’t Fit?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
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