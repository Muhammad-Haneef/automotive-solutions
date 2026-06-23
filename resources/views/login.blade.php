<x-layouts.frontend>


    <div class="main-page-banner pb-4 off-white-bg pt-4">
        <div class="container py-5 loginRegister">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-11">
                    <div class="shadow p-4">
                        <div class="row">
                            <!-- Login Column -->
                            <div class="col-md-6 border-end px-3 px-md-4  px-lg-5 mb-4">
                                <h2 class="fw-bold mb-4">Login</h2>
                                <form>
                                    <div class="mb-3">
                                        <label class="text-capitalize mb-2">Email address</label>
                                        <input type="email" class="form-control rounded-0" placeholder="Enter email">
                                    </div>
                                    <div class="mb-4">
                                        <label class="text-capitalize mb-2">Password</label>
                                        <input type="password" class="form-control rounded-0" placeholder="Password">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-secondary w-100 rounded-0">Login</button>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1"> Remember me</label>
                                        </div>
                                        <a href="#" class="text-primary">Lost your password?</a>
                                    </div>
                                    <div class="position-relative pb-4 continue">
                                        <hr>
                                        <div class="text-capitalize text-center mb-2 continueText position-absolute bg-white  start-0 end-0">Or continue with</div>
                                    </div>

                                    <div class="social-btn d-flex g-2">
                                        <button type="button" class="btn social-google  rounded-0"><i class="fa-brands fa-google me-2"></i>Google</button>
                                        <button type="button" class="btn social-facebook  rounded-0"><i class="fa-brands fa-facebook-f me-2"></i>Facebook</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Register Column -->
                            <div class="col-md-6 px-3 px-md-4  px-lg-5 mb-4">
                                <h2 class="fw-bold mb-4">Register</h2>
                                <form>
                                    <div class="mb-3">
                                        <label class="text-capitalize mb-2">Full Name</label>
                                        <input type="text" class="form-control rounded-0" placeholder="Your name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-capitalize mb-2">Email address</label>
                                        <input type="email" class="form-control rounded-0" placeholder="Enter email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-capitalize mb-2">Password</label>
                                        <input type="password" class="form-control rounded-0" placeholder="Password">
                                    </div>
                                    <div class="mb-4">
                                        <label class="text-capitalize mb-2">Confirm Password</label>
                                        <input type="password" class="form-control rounded-0" placeholder="Confirm password">
                                    </div>
                                    <button type="submit" class="btn btn-secondary w-100  rounded-0">Create Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>



</x-layouts.frontend>