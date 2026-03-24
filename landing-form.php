<!-- Landing Page Contact Form -->
<section class="landing-contact-section" style="padding: 4rem 0; background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
    <div style="max-width: 800px; margin: 0 auto; padding: 0 1.5rem;">
        <div style="text-align: center; margin-bottom: 3rem;">
            <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Send us your message</h2>
            <p style="font-size: 1.125rem; color: #6b7280; line-height: 1.6;">
                Get in touch with our team for personalized assistance
            </p>
        </div>
        
        <div style="background: white; border-radius: 1rem; padding: 3rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);">
            <form id="landing-contact-form" class="landing-form">
                <div style="margin-bottom: 1.5rem;">
                    <input type="text" name="name" placeholder="Name *" required 
                           style="width: 100%; padding: 0.875rem 1rem; border: 1px solid #e5e7eb; border-radius: 0.5rem; font-size: 1rem; background: #f9fafb; transition: all 0.3s; box-sizing: border-box;">
                </div>
                
                <div style="margin-bottom: 1.5rem;">
                    <input type="email" name="email" placeholder="Email *" required 
                           style="width: 100%; padding: 0.875rem 1rem; border: 1px solid #e5e7eb; border-radius: 0.5rem; font-size: 1rem; background: #f9fafb; transition: all 0.3s; box-sizing: border-box;">
                </div>
                
                <div style="margin-bottom: 1.5rem;">
                    <input type="text" name="phone" placeholder="Phone" 
                           style="width: 100%; padding: 0.875rem 1rem; border: 1px solid #e5e7eb; border-radius: 0.5rem; font-size: 1rem; background: #f9fafb; transition: all 0.3s; box-sizing: border-box;">
                </div>
                
                <div style="margin-bottom: 1.5rem;">
                    <input type="text" name="subject" placeholder="Subject" 
                           style="width: 100%; padding: 0.875rem 1rem; border: 1px solid #e5e7eb; border-radius: 0.5rem; font-size: 1rem; background: #f9fafb; transition: all 0.3s; box-sizing: border-box;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <textarea name="message" placeholder="Message" rows="5" 
                              style="width: 100%; padding: 0.875rem 1rem; border: 1px solid #e5e7eb; border-radius: 0.5rem; font-size: 1rem; background: #f9fafb; transition: all 0.3s; resize: vertical; box-sizing: border-box;"></textarea>
                </div>
                
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: flex; align-items: center; cursor: pointer; color: #374151;">
                        <input type="checkbox" name="privacy-checkbox" required 
                               style="margin-right: 0.5rem; width: 18px; height: 18px; cursor: pointer;">
                        <span style="font-size: 0.875rem;">I have read the <a href="/kvkk" style="color: #2563eb; text-decoration: none; font-weight: 500;">privacy policy</a> *</span>
                    </label>
                </div>
                
                <div style="margin-bottom: 1.5rem;">
                    <button type="submit" class="landing-submit-btn" id="landing-sendMessage" 
                            style="width: 100%; background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); color: white; font-weight: 600; padding: 1rem 2rem; border-radius: 0.5rem; border: none; cursor: pointer; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.3);">
                        Send Message
                    </button>
                </div>
                
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LcEgg4rAAAAAGoVKdeSgPWfHwIhyAzj2RizOcK3"></div>
                </div>
            </form>

            <!-- Toast UI -->
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999;">
                <div id="landing-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="display: none;">
                    <div class="toast-header" style="background: #f3f4f6; padding: 0.75rem 1rem; border-bottom: 1px solid #e5e7eb; border-radius: 0.5rem 0.5rem 0 0;">
                        <strong class="me-auto" id="landing-toast-title" style="color: #111827;"></strong>
                        <button type="button" class="btn-close" onclick="document.getElementById('landing-toast').style.display='none'" 
                                style="border: none; background: transparent; font-size: 1.5rem; cursor: pointer; color: #6b7280;"></button>
                    </div>
                    <div class="toast-body" id="landing-toast-body" style="padding: 1rem; border-radius: 0 0 0.5rem 0.5rem;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .landing-form input:focus,
    .landing-form textarea:focus {
        outline: none;
        border-color: #2563eb;
        background: white;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }
    
    .landing-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.4);
    }
    
    .landing-submit-btn:active {
        transform: translateY(0);
    }
    
    .landing-submit-btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }
    
    .toast {
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        min-width: 300px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('landing-contact-form');
        const sendMessageButton = document.getElementById('landing-sendMessage');

        if (!form || !sendMessageButton) return;

        form.addEventListener('submit', function (e) {
            e.preventDefault();

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
            sendMessageButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';

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
                    return res.json();
                })
                .then(resData => {
                    showToast('Your message has been sent successfully.', 'success');
                    sendMessageButton.disabled = false;
                    sendMessageButton.innerHTML = 'Send Message';
                    form.reset();

                    // GTM LinkedIn conversion tracking
                    if (typeof dataLayer !== 'undefined') {
                        dataLayer.push({
                            event: 'linkedinFormSuccess'
                        });
                    }

                    // Reset reCAPTCHA
                    if (typeof grecaptcha !== 'undefined') {
                        grecaptcha.reset();
                    }
                })
                .catch(err => {
                    showToast('Message could not be sent. Please try again.', 'error');
                    sendMessageButton.disabled = false;
                    sendMessageButton.innerHTML = 'Send Message';
                });
        });

        function showToast(message, type) {
            const toast = document.getElementById('landing-toast');
            const toastTitle = document.getElementById('landing-toast-title');
            const toastBody = document.getElementById('landing-toast-body');

            toastTitle.textContent = type === 'success' ? 'Success' : 'Error';
            toastBody.textContent = message;

            toastBody.style.backgroundColor = type === 'success' ? '#d4edda' : '#f8d7da';
            toastBody.style.color = type === 'success' ? '#155724' : '#721c24';

            toast.style.display = 'block';

            setTimeout(() => {
                toast.style.display = 'none';
            }, 5000);
        }
    });
</script>
