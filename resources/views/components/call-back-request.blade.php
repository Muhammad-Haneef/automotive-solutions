<div class="garage_ icon_text_wraper">
    <div class=" d-flex align-items-center gap-2 Garagepop" data-bs-toggle="modal"
        data-bs-target="#callBackModal">
        <div class="rounded-circle site-action-icon align-items-center d-flex justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                <path fill="currentColor" fill-rule="evenodd"
                    d="M28,2.25 C29.4625318,2.25 30.6584043,3.3917046 30.7449812,4.83247767 L30.75,5 L30.75,29 C30.75,29.4142136 30.4142136,29.75 30,29.75 C29.6203042,29.75 29.306509,29.4678461 29.2568466,29.1017706 L29.25,29 L29.25,5 C29.25,4.35279131 28.7581253,3.8204661 28.1278052,3.75645361 L28,3.75 L4,3.75 C3.35279131,3.75 2.8204661,4.24187466 2.75645361,4.87219476 L2.75,5 L2.75,29 C2.75,29.4142136 2.41421356,29.75 2,29.75 C1.62030423,29.75 1.30650904,29.4678461 1.25684662,29.1017706 L1.25,29 L1.25,5 C1.25,3.53746816 2.3917046,2.34159572 3.83247767,2.25501879 L4,2.25 L28,2.25 Z M18,27.25 C18.4142136,27.25 18.75,27.5857864 18.75,28 C18.75,28.3796958 18.4678461,28.693491 18.1017706,28.7431534 L18,28.75 L14,28.75 C13.5857864,28.75 13.25,28.4142136 13.25,28 C13.25,27.6203042 13.5321539,27.306509 13.8982294,27.2568466 L14,27.25 L18,27.25 Z M26,22.25 C26.4142136,22.25 26.75,22.5857864 26.75,23 C26.75,23.3796958 26.4678461,23.693491 26.1017706,23.7431534 L26,23.75 L6,23.75 C5.58578644,23.75 5.25,23.4142136 5.25,23 C5.25,22.6203042 5.53215388,22.306509 5.89822944,22.2568466 L6,22.25 L26,22.25 Z M26,17.25 C26.4142136,17.25 26.75,17.5857864 26.75,18 C26.75,18.3796958 26.4678461,18.693491 26.1017706,18.7431534 L26,18.75 L6,18.75 C5.58578644,18.75 5.25,18.4142136 5.25,18 C5.25,17.6203042 5.53215388,17.306509 5.89822944,17.2568466 L6,17.25 L26,17.25 Z M26,12.25 C26.4142136,12.25 26.75,12.5857864 26.75,13 C26.75,13.3796958 26.4678461,13.693491 26.1017706,13.7431534 L26,13.75 L6,13.75 C5.58578644,13.75 5.25,13.4142136 5.25,13 C5.25,12.6203042 5.53215388,12.306509 5.89822944,12.2568466 L6,12.25 L26,12.25 Z M26,7.25 C26.4142136,7.25 26.75,7.58578644 26.75,8 C26.75,8.37969577 26.4678461,8.69349096 26.1017706,8.74315338 L26,8.75 L6,8.75 C5.58578644,8.75 5.25,8.41421356 5.25,8 C5.25,7.62030423 5.53215388,7.30650904 5.89822944,7.25684662 L6,7.25 L26,7.25 Z">
                </path>
            </svg>
        </div>
        <div class="text-start pointer">
            <small class="d-block xsmall">Send Us a </small>
            <strong>Call Back Request</strong>
        </div>

    </div>
</div>

<div class="modal fade" id="callBackModal" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content garage-modal_ p-4">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0 pt-2">

                <h4 class="garage-title text-center">
                    Request a Callback
                </h4>

                <p class="garage-desc text-center">
                    Our automotive specialists are ready to assist you. Provide your contact information below, and we'll call you back at your preferred time to discuss your vehicle needs and recommend the best solutions.
                </p>

                <form>
                    <div class="mb-3">
                        <label for="callbackName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="callbackName" placeholder="Your Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="callbackEmail" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="callbackEmail" placeholder="your@email.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="callbackPhone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="callbackPhone" placeholder="+92 300 0000000" required>
                    </div>

                    <div class="mb-3">
                        <label for="callbackTime" class="form-label">Preferred Callback Time</label>
                        <select class="form-select" id="callbackTime" required>
                            <option value="">Select a time slot</option>
                            <option value="morning">Morning (9 AM - 12 PM)</option>
                            <option value="afternoon">Afternoon (12 PM - 3 PM)</option>
                            <option value="evening">Evening (3 PM - 6 PM)</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="callbackMessage" class="form-label">Brief Message (Optional)</label>
                        <textarea class="form-control" id="callbackMessage" rows="2" placeholder="Tell us briefly what you need help with..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Request Callback</button>
                </form>

            </div>

        </div>
    </div>
</div>