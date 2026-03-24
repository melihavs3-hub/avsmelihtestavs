<?php 
$title = "Contact Us - AVS";
$description = "";
$canonical ="https://www.avsglobalsupply.com/contact";
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
                        'webSites' => 'TR',
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
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Soganlik Yeni Mah, Pamukkale Sk. No:2, Kartal",
      "addressLocality": "Istanbul",
      "addressRegion": "IST",
      "postalCode": "34880",
      "addressCountry": "TR"
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
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="https://www.avsglobalsupply.com/">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- contact-section -->
<section class="contact-section" style="padding: 1%;">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12056.659095484758!2d29.1391652!3d40.9340558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3967504e14dc80a7!2sAVS+Global+Ship+Supply+%26+Catering!5e0!3m2!1str!2str!4v1562569788977!5m2!1str!2str"
                width="100%" height="450" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen></iframe>
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
                                        <h3>Head Office</h3>
                                        <p>Istanbul - Türkiye</p>
                                    </div>
                                    <div class="lower-content">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-location-1"></i></div>
                                            <h6>Address</h6>
                                            <p>Soganlik Yeni Mah, Pamukkale Sk. No:2 <br />34880 Kartal/Istanbul/Turkiye</p>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-time-management"></i></div>
                                            <h6>Off. Hours</h6>
                                            <p>Mon - Fri: <br />9am to 6pm</p>
                                        </div>
                                        <div class="link">
                                            <a href="https://maps.app.goo.gl/4GqmdgfGbcPvxB8m8" target="_blank" rel="noopener"><span>View On Map</span></a>
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
                                        <h3>Domestic Office</h3>
                                        <p>Istanbul - Turkiye</p>
                                    </div>
                                    <div class="lower-content">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-location-1"></i></div>
                                            <h6>Address</h6>
                                            <p>Guzelyali Mah. Sahil Bulvari, Yakut Sok.No:3/1 <br />34903 Pendik/Istanbul/Turkiye</p>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-time-management"></i></div>
                                            <h6>Off. Hours</h6>
                                            <p>Mon - Fri: <br />9am to 6pm</p>
                                        </div>
                                        <div class="link">
                                            <a href="https://maps.app.goo.gl/qM9qfJS7ZgeFcxX1A" target="_blank" rel="noopener"><span>View On Map</span></a>
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
                                        <h3>Filyos Logistic & Supply Base</h3>
                                        <p>Zonguldak - Turkiye</p>
                                    </div>
                                    <div class="lower-content">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-location-1"></i></div>
                                            <h6>Address</h6>
                                            <p>Velioglu OSB 4 Nolu Sk. No.8<br />67900 <br/>Caycuma/Zonguldak</p>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-time-management"></i></div>
                                            <h6>Off. Hours</h6>
                                            <p>Mon - Fri:<br/> 9am to 6pm</p>
                                        </div>
                                        <div class="link">
                                            <a href="https://maps.app.goo.gl/5HXTPMF1UAzWepGp7" target="_blank" rel="noopener"><span>View On Map</span></a>
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
                                        <h3>Sri Lanka Office</h3>
                                        <p>Kolonnawa -  Sri Lanka</p>
                                    </div>
                                    <div class="lower-content">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-location-1"></i></div>
                                            <h6>Address</h6>
                                            <p>376/A Kalapaluwawa Rd, Kolonnawa 10100, <br />Sri Lanka</p>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-time-management"></i></div>
                                            <h6>Off. Hours</h6>
                                            <p>Mon - Fri: <br />9am to 6pm</p>
                                        </div>
                                        <div class="link">
                                            <a href="https://maps.app.goo.gl/i3N2YwgtqjH34mrT8" target="_blank" rel="noopener"><span>View On Map</span></a>
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
                            <span class="sub-title">Drop a Line</span>
                            <h2>Let's Talk!... <br />Send Your Message</h2>
                            <p>Fill in the form and let us know what you need. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="form-inner">
                                <form method="post" action="" id="contact-form" class="default-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>First Name</label>
                                            <input type="text" name="username" placeholder="Your first name" required value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="lname" placeholder="Your last name" required value="<?php echo isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : ''; ?>">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Company</label>
                                            <input type="text" name="subject" required placeholder="Company name" value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" required placeholder="Phone num" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Email Address</label>
                                            <input type="email" name="email" placeholder="Official email address" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Message</label>
                                            <textarea name="message" placeholder="Message goes here..."><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <div class="check-box">
                                                <input class="check" type="checkbox" id="checkbox1" name="privacy-checkbox" <?php echo isset($_POST['privacy-checkbox']) ? 'checked' : ''; ?>>
                                                <label for="checkbox1">Click here to confirm you have read our privacy policy*</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button class="theme-btn btn-two" type="submit" name="submit-form"><span>Send Message</span></button>
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

<!-- Toast container -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto" id="toast-title">Message</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body" id="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<script>
function showToast(message, type) {
    // Başlık belirle
    var toastTitle;
    if (type === 'success') {
        toastTitle = 'Başarılı';
    } else if (type === 'error') {
        toastTitle = 'Hata';
    } else if (type === 'info') {
        toastTitle = 'Bilgi';
    } else {
        toastTitle = 'Mesaj';
    }
    
    var toastBody = document.getElementById('toast-body');
    var toastHeader = document.getElementById('toast-title');
    
    // Başlık ve mesajı ayarla
    toastHeader.innerText = toastTitle;
    toastBody.innerText = message;
    
    // Duruma göre renk ayarla
    if (type === 'success') {
        toastBody.style.backgroundColor = '#d4edda';
        toastBody.style.color = '#155724';
    } else if (type === 'error') {
        toastBody.style.backgroundColor = '#f8d7da';
        toastBody.style.color = '#721c24';
    } else if (type === 'info') {
        toastBody.style.backgroundColor = '#d1ecf1';
        toastBody.style.color = '#0c5460';
    }
    
    // Toast'u göster
    var toastElement = document.getElementById('liveToast');
    var toast = new bootstrap.Toast(toastElement);
    toast.show();
}

// Sayfa yüklendiğinde toast gösterme
<?php if ($show_toast): ?>
    document.addEventListener('DOMContentLoaded', function() {
        showToast('<?php echo addslashes($toast_message); ?>', '<?php echo $toast_type; ?>');
        
        <?php if ($toast_type === 'success'): ?>
        // Form başarıyla gönderildiyse formu temizle
        document.getElementById('contact-form').reset();
        <?php endif; ?>
    });
<?php endif; ?>
</script>