<div class="garage_ icon_text_wraper">
    <div class=" d-flex align-items-center gap-2 Garagepop" data-bs-toggle="modal"
        data-bs-target="#interestModal">
        <div class="rounded-circle site-action-icon align-items-center d-flex justify-content-center">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 21C11.7143 21 11.5238 20.9016 11.2381 20.7049C9.61905 19.918 8.19048 18.9344 6.85714 17.8525C4.47619 15.8852 2 12.8361 2 8.70492C2 5.55738 4.47619 3.09836 7.42857 3.09836C9.2381 3.09836 10.9524 4.08197 12 5.45902C13.0476 3.98361 14.6667 3 16.5714 3C19.619 3 22 5.55738 22 8.60656C22 12.7377 19.5238 15.8852 17.1429 17.7541C15.9048 18.8361 14.4762 19.7213 12.9524 20.5082H12.8571C12.2857 21 12.0952 21 12 21Z"
                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
        </div>
        <div class="text-start pointer">
            <small class="d-block xsmall">Send Us</small>
            <strong>Your Interest</strong>
        </div>

    </div>
</div>


<div class="modal fade" id="interestModal" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content garage-modal_ p-4">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0 pt-2">

                <h4 class="garage-title text-center">
                    Express Your Interest
                </h4>

                <p class="garage-desc text-center">
                    We specialize in providing premium automotive parts and accessories tailored to your vehicle's needs. Complete the form below to share your requirements, and our expert team will review your interests and provide personalized recommendations within 24 hours.
                </p>

                <form>
                    <div class="mb-3">
                        <label for="interestName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="interestName" placeholder="Your Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="interestEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="interestEmail" placeholder="your@email.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="interestPhone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="interestPhone" placeholder="+92 300 0000000" required>
                    </div>

                    <div class="mb-3">
                        <label for="interestVehicle" class="form-label">Vehicle</label>
                        <select class="form-select" id="interestVehicle" required>
                            <option value="">Select a vehicle from your garage</option>
                            <option value="vehicle1">Vehicle 1</option>
                            <option value="vehicle2">Vehicle 2</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="interestMessage" class="form-label">Your Interest</label>
                        <textarea class="form-control" id="interestMessage" rows="3" placeholder="Tell us what you're interested in..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Send Interest</button>
                </form>

            </div>

        </div>
    </div>
</div>