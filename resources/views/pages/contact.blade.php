<x-layouts.frontend>

    <div class="checkout-banner position-relative">
        <img src="{{asset('front/img/home-applainces.jpg')}}" class="img-fluid w-100" alt="offer">
    </div>

    <div class="main-page-banner py-5">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <h2 class="fw-semibold text-uppercase">Contact Us</h2>
                    <p>We will answer any questions you may have about our online sales, rights or partnership service right here.</p>
                </div>


            </div>
            <!-- Row End -->
            <div class="row justify-content-center mt-3 mb-4">
                <div class="col">
                    <h3 class=" fs-6 border-bottom pb-1 mb-2 fw-semibold"><i class="fa-solid fa-location-dot me-2"></i>Address</h3>
                    <p>169-C, Technohub, Dubai Silicon Oasis.</p>
                </div>
                <div class="col">
                    <h3 class=" fs-6 border-bottom pb-1 mb-2 fw-semibold"><i class="fa-solid fa-phone-volume me-2"></i>Phone</h3>
                    <p> (+800) 123 456 789</p>
                </div>
                <div class="col">
                    <h3 class=" fs-6 border-bottom pb-1 mb-2 fw-semibold"><i class="fa-solid fa-at me-2"></i>E-mail</h3>
                    <p>info@venta.pk</p>
                </div>
            </div>

            <div class="row contact-us py-5 px-4 shadow">
                <div class="col-lg-4 pe-4 border-end">
                    <h3 class="fs-5 fw-semibold ps-2  mb-4">Get answers to all your questions you might have.</h3>
                    <p>We will answer any questions you may have about our online sales right here.</p>
                    <p>Monday to Friday from <strong>09:00 to 21:00 UTC +2</strong></p>

                    <h3 class="fs-5 fw-semibold mt-4 ps-2 mb-4">Follow Us On</h3>
                    <ul class=" nav">
                        <li class="nav-item"><a href="https://www.facebook.com/" class="nav-link px-0 text-secondary"><i class="fa-brands fa-facebook-f fa-2x"></i></a></li>
                        <li class="nav-item"><a href="https://twitter.com/" class="nav-link px-2 text-secondary"><i class="fa-brands fa-x-twitter fa-2x"></i></a></li>
                        <li class="nav-item"><a href="https://instagram.com/" class="nav-link px-2 text-secondary"><i class="fa-brands fa-instagram fa-2x"></i></a></li>
                        <li class="nav-item"><a href="https://tiktok.com/" class="nav-link px-2 text-secondary"><i class="fa-brands fa-tiktok fa-2x"></i></a></li>
                    </ul>

                </div>
                <div class="col-lg-8 ps-5">
                    <h3 class="fs-5 fw-semibold ps-2 mb-4">CONTACT US FOR ANY QUESTIONS</h3>

                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputFname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="name" id="inputFname">
                        </div>
                        <div class="col-md-6">
                            <label for="inputLname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="name" id="inputLname">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPhone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="inputPhone">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Your Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail">
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="message" style="height: 100px"></textarea>
                                <label for="message">Your Message</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn bg-secondary text-white rounded-0 mt-3 px-4">ASK A QUESTION</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
        <!-- Container End -->
    </div>

    <x-news-letter-signup />

</x-layouts.frontend>