<?php 
$title = "İletişim - AVS";
$description = "";
$canonical ="https://www.avsglobalsupply.com/tr/iletisim";
$eng_link="https://www.avsglobalsupply.com/contact";
$tr_link="https://www.avsglobalsupply.com/tr/iletisim";
$sri_link="https://www.avssrilanka.com/contact";
$gr_link="https://www.avsgreece.gr/contact";
// Toast mesajı için değişkenler
$show_toast = false;
$toast_message = '';
$toast_type = '';

// Form gönderildi mi kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit-form'])) {

    // Checkbox kontrolü
    if (!isset($_POST['privacy-checkbox'])) {
        $show_toast = true;
        $toast_message = 'Lütfen gizlilik politikasını okuduğunuzu onaylayın.';
        $toast_type = 'error';
    } else {
        // Form verilerini al
        $first_name = $_POST['username'] ?? '';
        $last_name = $_POST['lname'] ?? '';
        $company = $_POST['subject'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $email = $_POST['email'] ?? '';
        $message = $_POST['message'] ?? '';
        
        // Basit doğrulama
        if (empty($email) || empty($first_name)) {
            $show_toast = true;
            $toast_message = 'Ad ve email alanları zorunludur.';
            $toast_type = 'error';
        } else {
            try {
                // API endpoint
                $api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/contact-forms';
                
                // POST verisini hazırla
                $post_data = json_encode([
                    'data' => [
                        'name' => $first_name,
                        'surname' => $last_name,
                        'companyName' => $company,
                        'phone' => $phone,
                        'email' => $email,
                        'message' => $message,
                        'webSites' => 'Avs Global',
                        'recaptchaToken' => $_POST['g-recaptcha-response'],
                    ]
                ]);
                // cURL ayarları
                $ch = curl_init($api_url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($post_data)
                ]);

                // API isteğini gönder
                $response = curl_exec($ch);
                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);
                // Yanıtı kontrol et
                if ($http_code == 200) {
                    $show_toast = true;
                    $toast_message = 'Mesajınız başarıyla iletildi.';
                    $toast_type = 'success';
                    
                    // Form başarıyla gönderildi, POST verilerini temizleyelim
                    $_POST = array();
                } else {
                    // DEBUG
echo '<pre>';
echo 'HTTP STATUS: ' . $http_code . "\n";
echo 'RESPONSE: ' . $response;
echo '</pre>';
                    $show_toast = true;
                    $toast_message = 'Mesajınız gönderilirken bir hata oluştu.';
                    $toast_type = 'error';
                }
                
            } catch (Exception $e) {
                $show_toast = true;
                $toast_message = 'API hatası: ' . $e->getMessage();
                $toast_type = 'error';
            }
        }
    }
}


include 'header.php';
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "ContactPage",
  "name": "Contact AVS Global Supply",
  "description": "Get in touch with AVS Global Supply for maritime services, technical support, or any other inquiries.",
  "url": "http://www.avsglobalsupply.com/contact",
  "mainEntity": {
    "@type": "Organization",
    "name": "AVS Global Supply",
    "url": "http://www.avsglobalsupply.com",
    "logo": "https://www.avsglobalsupply.com/assets/images/avs-logo-big.webp",
    "Address": {
      "@type": "PostalAddress",
      "streetAdres": "Soganlik Yeni Mah, Pamukkale Sk. No:2, Kartal",
      "AdresLocality": "İstanbul",
      "AdresRegion": "IST",
      "postalCode": "34880",
      "AdresCountry": "TR"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+90-216-591-0849",
      "contactType": "customer service",
      "areaServed": "WW",
      "availableLanguage": ["English", "Turkish"]
    }
  }
}
</script>

<!-- page-title -->
        <section class="page-title">
            <div class="bg-layer" style="background-image: url(/assets/images/background/21.webp);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>İletişim</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="https://www.avsglobalsupply.com/">Anasayfa</a></li>
                        <li>İletişim</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-section -->
        <section class="contact-section" style="padding: 1%;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <iframe
src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12056.659095484758!2d29.1391652!3d40.9340558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3967504e14dc80a7!2sAVS+Global+Ship+Supply+%26+Catering!5e0!3m2!1str!2str!4v1562569788977!5m2!1str!2str"
width="100%" height="450" frameborder="0" style="border:0; border-radius: 10px;"  allowfullscreen></iframe>
            </div>
            <br>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="row clearfix">
                             
                                <div class="col-lg-3 col-md-3 col-sm-12 info-column">
                                    <div class="info-block-one">
                                        <div class="inner-box">
                                            <div class="upper-box">
                                                <div class="light-icon"><i class="flaticon-cityscape"></i></div>
                                                <h3>Merkez Ofis</h3>
                                                <p>İstanbul - Türkiye</p>
                                            </div>
                                            <div class="lower-content">
                                                <div class="single-item">
                                                    <div class="icon-box"><i class="flaticon-location-1"></i></div>
                                                    <h6>Adres</h6>
                                                    <p>Soğanlık Yeni Mah, Pamukkale Sk. No:2 <br />34880 Kartal/İstanbul/Türkiye</p>
                                                </div>
                                                <div class="single-item">
                                                    <div class="icon-box"><i class="flaticon-time-management"></i></div>
                                                    <h6>Çalışma Saatleri</h6>
                                                    <p>Pzt - Cum: <br />9:00 - 18:00</p>
                                                </div>
                                                <div class="link">
                                                    <a href="https://maps.app.goo.gl/4GqmdgfGbcPvxB8m8" target="_blank" rel="noopener"><span>Haritayı Görüntüle</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 info-column">
                                    <div class="info-block-one">
                                        <div class="inner-box">
                                            <div class="upper-box">
                                                <div class="light-icon"><i class="flaticon-cityscape"></i></div>
                                                <h3>Türkiye Ofisi</h3>
                                                <p>İstanbul - Türkiye</p>
                                            </div>
                                            <div class="lower-content">
                                                <div class="single-item">
                                                    <div class="icon-box"><i class="flaticon-location-1"></i></div>
                                                    <h6>Adres</h6>
                                                    <p>Güzelyalı Mah. Sahil Bulvarı, Yakut Sok.No:3/1 <br />34903 Pendik/İstanbul/Türkiye</p>
                                                </div>
                                                <div class="single-item">
                                                    <div class="icon-box"><i class="flaticon-time-management"></i></div>
                                                    <h6>Çalışma Saatleri</h6>
                                                    <p>Pzt - Cum: <br />9:00 - 18:00</p>
                                                </div>
                                                <div class="link">
                                                    <a href="https://maps.app.goo.gl/qM9qfJS7ZgeFcxX1A" target="_blank" rel="noopener"><span>Haritayı Görüntüle</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 info-column">
                                    <div class="info-block-one">
                                        <div class="inner-box">
                                            <div class="upper-box">
                                                <div class="light-icon"><i class="flaticon-cityscape"></i></div>
                                                <h3>Filyos Lojistik & Tedarik Üssü</h3>
                                                <p>Zonguldak - Türkiye</p>
                                            </div>
                                            <div class="lower-content">
                                                <div class="single-item">
                                                    <div class="icon-box"><i class="flaticon-location-1"></i></div>
                                                    <h6>Adres</h6>
                                                    <p>Velioğlu OSB 4 Nolu Sk. No.8<br />67900 <br />Çaycuma/Zonguldak</p>
                                                </div>
                                                <div class="single-item">
                                                    <div class="icon-box"><i class="flaticon-time-management"></i></div>
                                                    <h6>Çalışma Saatleri</h6>
                                                    <p>Pzt - Cum: <br />9:00 - 18:00</p>
                                                </div>
                                                <div class="link">
                                                    <a href="https://maps.app.goo.gl/5HXTPMF1UAzWepGp7" target="_blank" rel="noopener"><span>Haritayı Görüntüle</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="col-lg-3 col-md-3 col-sm-12 info-column">
                                    <div class="info-block-one">
                                        <div class="inner-box">
                                            <div class="upper-box">
                                                <div class="light-icon"><i class="flaticon-cityscape"></i></div>
                                                <h3>Sri Lanka Ofisi</h3>
                                                <p>Kolonnawa - Sri Lanka</p>
                                            </div>
                                            <div class="lower-content">
                                                <div class="single-item">
                                                    <div class="icon-box"><i class="flaticon-location-1"></i></div>
                                                    <h6>Adres</h6>
                                                    <p>376/A Kalapaluwawa Rd, Kolonnawa 10100, <br />Sri Lanka</p>
                                                </div>
                                                <div class="single-item">
                                                    <div class="icon-box"><i class="flaticon-time-management"></i></div>
                                                    <h6>Çalışma Saatleri</h6>
                                                    <p>Pzt - Cum: <br />9:00 - 18:00</p>
                                                </div>
                                                <div class="link">
                                                    <a href="https://maps.app.goo.gl/i3N2YwgtqjH34mrT8" target="_blank" rel="noopener"><span>Haritayı Görüntüle</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- contact-style-two -->
        <section class="contact-style-two">
            <div class="outer-container sec-pad">
                <div class="pattern-layer">
                    <div class="pattern-1"></div>
                    <div class="pattern-2"></div>
                </div>
                <figure class="image-layer"><img src="/assets/images/resource/contact-1.webp" alt=""></figure>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title light">
                                <span class="sub-title">İletişim Formu</span>
                                <h2>Bize <br />Yazın</h2>
                                <p>Formu doldurun ve neye ihtiyacınız olduğunu bize bildirin. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="form-inner">
                                    <form method="post" action="#" id="contact-form" class="default-form"> 
                                        <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Ad</label>
                                            <input type="text" name="username" placeholder="Adınız" required value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Soyad</label>
                                            <input type="text" name="lname" placeholder="Soyadınız" required value="<?php echo isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : ''; ?>">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Şirket</label>
                                            <input type="text" name="subject" required placeholder="Şirket adı" value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Telefon</label>
                                            <input type="text" name="phone" required placeholder="Telefon numarası" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>E-posta Adresi</label>
                                            <input type="email" name="email" placeholder="Kurumsal e-posta adresi" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Mesaj</label>
                                            <textarea name="message" placeholder="Mesajınızı buraya yazın..."><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <div class="check-box">
                                                <input class="check" type="checkbox" id="checkbox1" name="privacy-checkbox" <?php echo isset($_POST['privacy-checkbox']) ? 'checked' : ''; ?>>
                                                <label for="checkbox1">Gizlilik politikamızı okuduğunuzu onaylamak için burayı tıklayın*</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button class="theme-btn btn-two" type="submit" name="submit-form"><span>Mesaj Gönder</span></button>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="g-recaptcha" data-sitekey="6LcEgg4rAAAAAGoVKdeSgPWfHwIhyAzj2RizOcK3"></div>
                                        </div>
                                    </div>
                                   
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->

<?php include 'footer.php'; ?>

