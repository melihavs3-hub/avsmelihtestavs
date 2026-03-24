<!-- appointment-section -->
<section class="appointment-section">
    <div class="outer-container sec-pad">
        <div class="image-layer"><img width="650" height="706" src="assets/images/resource/cat-1.webp"
                alt="An AVS employee managing ship supply by radio"></div>
        <div class="auto-container">
            <div class="sec-title light">
                <span class="sub-title">Contact Us</span>
                <h2>Send us your message</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="form-inner">
                            <!-- generalform.php -->
                            <form id="contact-form" class="default-form">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name *" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email *" required>
                                </div>
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <div class="select-box">
                                        <select class="selectmenu" name="subject" required>
                                            <option value="">Subject</option>
                                            <option>Traditional Consulting</option>
                                            <option>Portfolio Management</option>
                                            <option>Asset Allocation</option>
                                            <option>Supply Request</option>
                                            <option>Catering Request</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="privacy-checkbox"><a href="/kvkk"> I have read the privacy policy*</a>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-two" id="sendMessage">Send Message</button>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LcEgg4rAAAAAGoVKdeSgPWfHwIhyAzj2RizOcK3">
                                    </div>
                                </div>
                            </form>

                            <!-- Toast UI -->
                            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999;">
                                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <strong class="me-auto" id="toast-title"></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body" id="toast-body"></div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contact-form');
        const sendMessageButton = document.getElementById('sendMessage');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Button kontrolü için null check eklendi
            if (!sendMessageButton) {
                console.error('Send message button not found');
                return;
            }

            const formData = new FormData(form);

            if (!formData.get('privacy-checkbox')) {
                showToast('Please read the privacy policy', 'error');
                return;
            }

            if (!formData.get('g-recaptcha-response')) {
                showToast('Please complete the reCAPTCHA operation.', 'error');
                return;
            }

            sendMessageButton.disabled = true;
            sendMessageButton.innerHTML = 'Sending...';

            const data = {
                name: formData.get('name'),
                phone: formData.get('phone'),
                email: formData.get('email'),
                subject: formData.get('subject'),
                message: formData.get('message'),
                webSites: 'Avs Global',
                url: window.location.href,
                recaptchaToken: formData.get('g-recaptcha-response')
            };
            fetch('https://avs-cms-5fzbd.ondigitalocean.app/api/general-forms', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ data })
            })
                .then(res => {
                    if (!res.ok) throw new Error('Send failed');
                    sendMessageButton.disabled = false;
                    sendMessageButton.innerHTML = 'Send Message';
                    return res.json();
                })
                .then(resData => {
					showToast('Your message has been sent successfully.', 'success');
					sendMessageButton.disabled = false;
					sendMessageButton.innerHTML = 'Send Message';
					form.reset();

					// ✅ GTM ile LinkedIn dönüşüm takibi
					dataLayer.push({
						event: 'linkedinFormSuccess'
					});
				})
                .catch(err => {
                    showToast('Message could not be sent. Please try again.', 'error');
                    sendMessageButton.disabled = false;
                    sendMessageButton.innerHTML = 'Send Message';
                });
        });

        function showToast(message, type) {
            const toastTitle = document.getElementById('toast-title');
            const toastBody = document.getElementById('toast-body');

            toastTitle.textContent = type === 'success' ? 'Başarılı' : 'Hata';
            toastBody.textContent = message;

            toastBody.style.backgroundColor = type === 'success' ? '#d4edda' : '#f8d7da';
            toastBody.style.color = type === 'success' ? '#155724' : '#721c24';

            new bootstrap.Toast(document.getElementById('liveToast')).show();
        }
    });
</script>