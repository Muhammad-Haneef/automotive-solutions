        <div class="bg-light py-5 newsletter">
            <div class="container">
                <!-- Signup Newsletter Start -->
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-8  mx-auto ">
                        <div class=" text-center mb-4">
                            <h3 class="font-weight-bolder mb-2">Sign Up For
                                Newsletters</h3>
                            <p>Be the First to Know. Sign up for newsletter
                                today</p>
                        </div>
                        <div class="alert mb-3 d-none" role="alert" id="newsletterAlert"></div>
                        @if (session('message'))
                            @php
                                $alertType = session('alert-type', 'info');
                                $bootstrapType = match ($alertType) {
                                    'success' => 'success',
                                    'warning' => 'warning',
                                    'error' => 'danger',
                                    default => 'info',
                                };
                            @endphp
                            <div class="alert alert-{{ $bootstrapType }} mb-3" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="newsletter-box">
                            <form action="{{ route('save-subscriber') }}" method="POST" data-ajax="newsletter">
                                @csrf
                                <div class="input-group">
                                    <input type="email"
                                        class="form-control form-control-lg border-0 py-3 bg-white border"
                                        placeholder="your email address"
                                        name="email" id="subscribe" value="{{ old('email') }}"
                                        autocomplete="email" required>
                                    <span class="input-group-btn">
                                        <button
                                            class="btn bg-secondary text-white btn-lg px-5 text-uppercase font-weight-bold py-3"
                                            type="submit">
                                            subscribe!
                                        </button>
                                    </span>
                                </div>
                                @error('email')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                                <div class="text-danger mt-2 d-none" id="newsletterEmailError"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            (function() {
                function setAlert(type, message) {
                    var alertEl = document.getElementById('newsletterAlert');
                    if (!alertEl) return;

                    var bootstrapType = 'info';
                    if (type === 'success') bootstrapType = 'success';
                    if (type === 'warning') bootstrapType = 'warning';
                    if (type === 'error') bootstrapType = 'danger';

                    alertEl.className = 'alert mb-3 alert-' + bootstrapType;
                    alertEl.textContent = message || '';
                    alertEl.classList.toggle('d-none', !message);
                }

                function setEmailError(message) {
                    var errorEl = document.getElementById('newsletterEmailError');
                    if (!errorEl) return;
                    errorEl.textContent = message || '';
                    errorEl.classList.toggle('d-none', !message);
                }

                document.addEventListener('DOMContentLoaded', function() {
                    var form = document.querySelector('form[data-ajax="newsletter"]');
                    if (!form) return;

                    form.addEventListener('submit', async function(e) {
                        e.preventDefault();

                        setAlert(null, '');
                        setEmailError('');

                        var submitBtn = form.querySelector('button[type="submit"]');
                        if (submitBtn) submitBtn.disabled = true;

                        try {
                            var formData = new FormData(form);

                            var response = await fetch(form.action, {
                                method: 'POST',
                                body: formData,
                                credentials: 'same-origin',
                                headers: {
                                    'Accept': 'application/json',
                                    'X-Requested-With': 'XMLHttpRequest'
                                }
                            });

                            var payload = null;
                            try {
                                payload = await response.json();
                            } catch (err) {
                                payload = null;
                            }

                            if (!response.ok) {
                                if (response.status === 422 && payload && payload.errors) {
                                    if (payload.errors.email && payload.errors.email[0]) {
                                        setEmailError(payload.errors.email[0]);
                                    }
                                    setAlert('error', payload.message || 'Please fix the errors and try again.');
                                    return;
                                }

                                setAlert('error', (payload && payload.message) ? payload.message : 'Something went wrong. Please try again.');
                                return;
                            }

                            setAlert((payload && payload.type) ? payload.type : 'success', (payload && payload.message) ? payload.message : 'Subscribed.');
                            form.reset();
                        } catch (err) {
                            setAlert('error', 'Network error. Please try again.');
                        } finally {
                            if (submitBtn) submitBtn.disabled = false;
                        }
                    });
                });
            })();
        </script>
