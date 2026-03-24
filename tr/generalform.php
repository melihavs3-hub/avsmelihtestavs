<!-- appointment-section -->
<section class="appointment-section">
    <div class="outer-container sec-pad">
        <div class="image-layer"><img width="650" height="706" src="/assets/images/resource/cat-1.webp"
                alt="An AVS employee managing ship supply by radio"></div>
        <div class="auto-container">
            <div class="sec-title light">
                <span class="sub-title">İletişime Geç</span>
                <h2>Mesajını gönder</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="form-inner">
                            <!-- generalform.php -->
                            <form id="contact-form" class="default-form">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Ad *" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email *" required>
                                </div>
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <input type="text" name="phone" placeholder="Telefon *" required>
                                </div>
                                <div class="form-group">
                                    <div class="select-box">
                                        <select class="selectmenu" name="subject" required>
                                            <option value="">Konu</option>
                                            <option>Geleneksel Danışmanlık</option>
<option>Portföy Yönetimi</option>
<option>Varlık Dağılımı</option>
<option>Tedarik Talebi</option>
<option>Yiyecek-İçecek Talebi</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" placeholder="Mesaj"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="privacy-checkbox"><a href="/tr/kvkk"> Gizlilik politikasını okudum* </a>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-two" id="sendMessage">Gönder</button>
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
        const gonderButonu = document.getElementById('sendMessage');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            if (!gonderButonu) {
                console.error('Gönder butonu bulunamadı');
                return;
            }

            const formVerisi = new FormData(form);

            if (!formVerisi.get('privacy-checkbox')) {
                bildirimGoster('Lütfen gizlilik politikasını onaylayın.', 'hata');
                return;
            }

            if (!formVerisi.get('g-recaptcha-response')) {
                bildirimGoster('Lütfen reCAPTCHA doğrulamasını tamamlayın.', 'hata');
                return;
            }

            gonderButonu.disabled = true;
            gonderButonu.innerHTML = 'Gönderiliyor...';

            const veri = {
                name: formVerisi.get('name'),
                phone: formVerisi.get('phone'),
                email: formVerisi.get('email'),
                subject: formVerisi.get('subject'),
                message: formVerisi.get('message'),
                webSites: 'Avs Global',
                url: window.location.href,
                recaptchaToken: formVerisi.get('g-recaptcha-response')
            };

            fetch('https://avs-cms-5fzbd.ondigitalocean.app/api/general-forms', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ data: veri })
            })
                .then(yanit => {
                    if (!yanit.ok) throw new Error('Gönderme başarısız');
                    return yanit.json();
                })
                .then(yanitVerisi => {
                    bildirimGoster('Mesajınız başarıyla gönderildi.', 'basarili');
                    gonderButonu.disabled = false;
                    gonderButonu.innerHTML = 'Gönder';
                    form.reset();
                })
                .catch(hata => {
                    bildirimGoster('Mesaj gönderilemedi. Lütfen tekrar deneyin.', 'hata');
                    gonderButonu.disabled = false;
                    gonderButonu.innerHTML = 'Gönder';
                });
        });

        function bildirimGoster(mesaj, tip) {
            const bildirimBaslik = document.getElementById('toast-title');
            const bildirimIcerik = document.getElementById('toast-body');

            bildirimBaslik.textContent = tip === 'basarili' ? 'Başarılı' : 'Hata';
            bildirimIcerik.textContent = mesaj;

            bildirimIcerik.style.backgroundColor = tip === 'basarili' ? '#d4edda' : '#f8d7da';
            bildirimIcerik.style.color = tip === 'basarili' ? '#155724' : '#721c24';

            new bootstrap.Toast(document.getElementById('liveToast')).show();
        }
    });
</script>