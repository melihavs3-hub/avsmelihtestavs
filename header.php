<?php
$custom_js = $custom_js ?? "";
$eng_link   = $eng_link   ?? "";
$tr_link= $tr_link?? "";
$sri_link   = $sri_link   ?? "";
$gr_link= $gr_link?? "";
$canonical  = $canonical  ?? "";
$title= $title ?? "AVS Global Ship Supply & Management Services";
$query_site_settings = [
'populate' => '*',
'filters[WebSites][$eq]' => 'EN',
];

$site_settings_api_url = "https://avs-cms-5fzbd.ondigitalocean.app/api/site-settings?" . http_build_query($query_site_settings);

try {
$site_response = file_get_contents($site_settings_api_url);
if (!$site_response) throw new Exception('Site ayarları alınamadı');

$site_settings_data = json_decode($site_response, true);
if (json_last_error() !== JSON_ERROR_NONE) throw new Exception('Site ayarları JSON hatası');
$site_settings = $site_settings_data['data'][0] ?? [];

$phone = $site_settings['Phone'] ?? '';
$address   = $site_settings['address'] ?? '';
$email = $site_settings['email'] ?? '';
$website_name  = $site_settings['WebSites'] ?? '';
$header_custom_js = $site_settings['custom_js'] ?? '';
$canonical_sitesettings = $site_settings['canonical'] ?? '';
$preload_image = $site_settings['logo']['url'] ?? '';

} catch (Exception $e) {
error_log('Site Ayarları Hatası: ' . $e->getMessage());
$phone = $address = $email = $website_name = $header_custom_js = $canonical = $preload_image = '';
}

$services_api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/pages?populate=*&filters[webSites][$eqi]=EN&sort=order:asc';
try {
$services_response = file_get_contents($services_api_url);
if (!$services_response) throw new Exception('Servisler alınamadı');
$services_data = json_decode($services_response, true);
if (json_last_error() !== JSON_ERROR_NONE) throw new Exception('Servisler JSON hatası');

$serviceSlugs = $services_data['data'] ?? [];
} catch (Exception $e) {
error_log('Servisler API Hatası: ' . $e->getMessage());
$serviceSlugs = [];
}

if (!empty($header_custom_js)) {
    $header_custom_js = preg_replace('/"(hasMap|isRelatedTo|availableLanguage|breadcrumb)"\s*:\s*(?:\[[^\]]*\]|\{[^\}]*\}|"[^"]*")\s*,?/', '', $header_custom_js);
    $header_custom_js = preg_replace('/,\s*}/', '}', $header_custom_js);
}

$host = $_SERVER['HTTP_HOST'] ?? 'www.avsglobalsupply.com';
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$actual_current_url = "https://" . $host . $request_uri;

function format_seo_url($url) {
    if (empty(trim($url))) return "";
    $url = trim($url);
    
    if (strpos($url, 'http') !== 0) {
        if (strpos($url, 'www.') === 0) {
            $url = "https://" . $url;
        } else {
            $url = "https://www.avsglobalsupply.com/" . ltrim($url, '/');
        }
    }
    
    $url = str_replace('http://', 'https://', $url);
    $url = str_replace('avsglobalsupply.com/www.avsglobalsupply.com', 'avsglobalsupply.com', $url);
    
    $url_parts = explode('?', $url, 2);
    $base_path = rtrim($url_parts[0], '/');
    $query_string = isset($url_parts[1]) ? '?' . $url_parts[1] : '';
    
    if ($base_path === "https://www.avsglobalsupply.com") {
        $base_path .= "/";
    }
    
    return $base_path . $query_string;
}

$raw_canonical = !empty($canonical) ? $canonical : (!empty($canonical_sitesettings) ? $canonical_sitesettings : $actual_current_url);
$final_canonical = format_seo_url($raw_canonical);

$final_eng_link   = format_seo_url(!empty($eng_link) ? $eng_link : $final_canonical);
$final_x_default  = $final_eng_link;
$final_tr_link    = format_seo_url($tr_link);
$final_sri_link   = format_seo_url($sri_link);
$final_gr_link    = format_seo_url($gr_link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<base href="/">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title><?php echo $seo_title ?? $title; ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://www.googletagmanager.com">
<link rel="preconnect" href="https://www.google-analytics.com">
<link rel="preconnect" href="https://appnhsm.com">

<link rel="canonical" href="<?php echo $final_canonical; ?>"/>
<link rel="alternate" hreflang="en" href="<?php echo $final_eng_link; ?>"/>
<?php if (!empty($final_tr_link)): ?>
<link rel="alternate" hreflang="tr-TR" href="<?php echo $final_tr_link; ?>"/>
<?php endif; ?>
<?php if (!empty($final_sri_link)): ?>
<link rel="alternate" hreflang="en-LK" href="<?php echo $final_sri_link; ?>"/>
<?php endif; ?>
<?php if (!empty($final_gr_link)): ?>
<link rel="alternate" hreflang="en-GR" href="<?php echo $final_gr_link; ?>"/>
<?php endif; ?>
<link rel="alternate" hreflang="x-default" href="<?php echo $final_x_default; ?>" />

<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;display=swap" rel="stylesheet">
<link rel="preload" href="assets/css/all-styles.min.css?v=1.0" as="style">
<link href="assets/css/all-styles.min.css?v=1.0" rel="stylesheet">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q229YB8DXK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-Q229YB8DXK');
</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKPNJ5DR');</script>

<?php if (!empty($header_custom_js)): echo "$header_custom_js"; endif; ?>
<?php if (!empty($custom_js)): echo "$custom_js"; endif; ?>

<style>
.main-header .header-upper { display: none !important; }

.top-whatsapp-btn {
    display: inline-flex;
    align-items: center;
    background-color: #25D366; 
    color: #ffffff !important;
    padding: 4px 12px;
    border-radius: 4px;
    font-weight: 600;
    font-size: 13px;
    text-decoration: none;
    transition: all 0.3s ease;
}
.top-whatsapp-btn:hover {
    background-color: #20b858;
    transform: translateY(-1px);
    color: #ffffff !important;
}
.top-whatsapp-btn i {
    font-size: 16px;
    margin-right: 5px;
}

.modern-main-bar {
    background: #ffffff;
    padding: 10px 0 !important; 
    box-shadow: 0 4px 15px rgba(0,0,0,0.04);
}
.modern-main-bar .outer-box {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

/* LOGO VE SLOGAN */
.modern-logo {
    display: flex;
    align-items: center;
}
.modern-logo img {
    height: 55px; 
    width: auto;
}
.modern-logo-text {
    margin-left: 15px;
    padding-left: 15px;
    border-left: 2px solid #eaeaea;
    font-size: 12px;
    line-height: 1.4;
    color: #666;
    font-family: 'Mulish', sans-serif;
}
.modern-logo-text span {
    display: block;
    white-space: nowrap;
}
.modern-logo-text span:first-child {
    font-weight: 800;
    color: #0b4a7d; 
}
.modern-logo-text span:last-child {
    font-weight: 500;
}

.modern-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}
.modern-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 10px 20px;
    border-radius: 6px;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 0.3px;
    text-decoration: none;
    transition: all 0.3s ease;
}
.btn-quote {
    background-color: #0b4a7d;
    color: #ffffff !important;
    border: 1px solid #0b4a7d;
}
.btn-quote:hover {
    background-color: #08375e;
    box-shadow: 0 4px 12px rgba(11, 74, 125, 0.3);
    transform: translateY(-2px);
}

.modern-lang-box {
    display: flex;
    align-items: center;
    gap: 5px;
    border-right: 1px solid #eee;
    padding-right: 15px;
}
.modern-lang-box select {
    border: none;
    background: transparent;
    font-weight: 600;
    color: #333;
    outline: none;
    cursor: pointer;
}

@media screen and (max-width: 1199px) and (min-width: 992px) {
    .modern-logo-text { display: none !important; }
}

@media screen and (max-width: 991px) {
    .modern-actions { display: none !important; }
    .modern-main-bar { padding: 12px 15px !important; }
    .boxed_wrapper { padding-top: 65px; }
    .main-header { position: fixed !important; top: 0; left: 0; width: 100%; z-index: 9999 !important; transition: transform 0.3s ease-in-out !important; }
    .main-header.nav-up { transform: translateY(-100%) !important; }
    .main-header .mobile-nav-toggler { margin: 0; padding: 5px; }
    
    /* MOBİL İÇİN YÖNETİCİNİN İSTEDİĞİ GÜÇLÜ BRANDING UYARLAMASI */
    .modern-logo img { height: 55px !important; } /* Logo mobilde çok daha belirgin */
    
    .modern-logo-text { 
        display: flex !important; 
        flex-direction: column;
        justify-content: center;
        margin-left: 10px !important; 
        padding-left: 10px !important;
        border-left: 1.5px solid #ccc !important;
    }
    
    /* Mobilde ilk satıra AVS markasını gömüyoruz! */
    .modern-logo-text span.brand-mobile {
        display: block !important;
        font-size: 13px !important;
        font-weight: 900 !important;
        color: #0b4a7d !important;
        letter-spacing: 0.2px;
        line-height: 1.2;
    }
    
    .modern-logo-text span.slogan-mobile {
        display: block !important;
        font-size: 9px !important;
        font-weight: 600 !important;
        color: #666 !important;
        line-height: 1.2;
    }

    /* Masaüstü slogan yapısını mobilde eziyoruz ki AVS yazısı çıksın */
    .desktop-slogan-line1, .desktop-slogan-line2 { display: none !important; }
}

@media screen and (min-width: 992px) {
    /* Mobilde gösterdiğimiz AVS yazısını masaüstünde gizliyoruz (çünkü logo zaten yeterli) */
    .brand-mobile, .slogan-mobile { display: none !important; }
}

@media screen and (max-width: 400px) {
    .modern-logo img { height: 45px !important; } 
    .modern-logo-text span.brand-mobile { font-size: 11px !important; }
    .modern-logo-text span.slogan-mobile { font-size: 8px !important; }
    .modern-logo-text { margin-left: 8px !important; padding-left: 8px !important; }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    if (window.innerWidth <= 991) {
        let lastScrollTop = 0;
        const header = document.querySelector('.main-header');
        const delta = 15;
        window.addEventListener("scroll", function() {
            let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
            if (currentScroll <= 60) {
                header.classList.remove('nav-up');
                return;
            }
            if (Math.abs(lastScrollTop - currentScroll) <= delta) return;
            if (currentScroll > lastScrollTop) {
                header.classList.add('nav-up');
            } else {
                header.classList.remove('nav-up');
            }
            lastScrollTop = currentScroll;
        });
    }
});
</script>
</head>
<body>

<style>
#avs-preloader {
    position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;
    background-color: #333c4a; z-index: 99999999; display: flex;
    justify-content: center; align-items: center;
    transition: background-color 0.8s ease-in-out, opacity 0.5s ease-in-out;
    pointer-events: none; 
}
#avs-preloader-logo {
    width: 130px; max-width: 80vw; height: auto; position: absolute;
    top: 50%; left: 50%; transform: translate(-50%, -50%);
    image-rendering: -webkit-optimize-contrast; image-rendering: high-quality;
    transition: transform 1s cubic-bezier(0.77, 0, 0.175, 1);
}
body.loading-active { overflow: hidden !important; }
</style>

<div id="avs-preloader">
    <img src="assets/images/logo.webp" alt="AVS Loading" id="avs-preloader-logo">
</div>

<script>
document.body.classList.add('loading-active');
window.addEventListener('load', function() {
    const preloader = document.getElementById('avs-preloader');
    const preloaderLogo = document.getElementById('avs-preloader-logo');
    let targetLogo = document.getElementById('header-main-logo'); 

    setTimeout(() => {
        if (targetLogo && preloaderLogo) {
            const targetRect = targetLogo.getBoundingClientRect();
            const startRect = preloaderLogo.getBoundingClientRect();
            const startCenterX = startRect.left + startRect.width / 2;
            const startCenterY = startRect.top + startRect.height / 2;
            const targetCenterX = targetRect.left + targetRect.width / 2;
            const targetCenterY = targetRect.top + targetRect.height / 2;
            const moveX = targetCenterX - startCenterX;
            const moveY = targetCenterY - startCenterY;
            const scale = targetRect.width / startRect.width;

            preloader.style.backgroundColor = 'transparent';
            preloaderLogo.style.transform = `translate(calc(-50% + ${moveX}px), calc(-50% + ${moveY}px)) scale(${scale})`;

            setTimeout(() => {
                preloader.style.opacity = '0';
                document.body.classList.remove('loading-active');
                setTimeout(() => preloader.remove(), 500);
            }, 1000); 
        } else {
            preloader.style.opacity = '0';
            document.body.classList.remove('loading-active');
            setTimeout(() => preloader.remove(), 500);
        }
    }, 400);
});
</script>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKPNJ5DR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="fb-root" hidden></div>
<div class="fb-customerchat" attribution=setup_tool page_id="675489079185157" greeting_dialog_display="hide"></div>

<div class="boxed_wrapper">

<header class="main-header">
    
    <div class="header-top d-none d-lg-block">
        <div class="outer-container">
            <div class="d-flex justify-content-between align-items-center w-100">
                <ul class="info-list clearfix d-flex align-items-center m-0 p-0" style="list-style:none; gap:15px;">
                    <li><a href="/nordic">Nordic Hamburg</a></li>
                    <li><a href="/areas">Service Areas</a></li>
                    <li><a href="/newvendors">New Vendors</a></li>
                    <li><a href="/blog">Blog</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <ul class="social-links clearfix d-flex align-items-center m-0 p-0" style="list-style:none; gap:10px;">
                        <li style="margin-right: 15px; border-right: 1px solid rgba(255,255,255,0.2); padding-right: 15px;">
                            <a href="tel:<?php echo $phone; ?>"><i class="fas fa-phone" style="margin-right: 5px;"></i><?php echo $phone; ?></a>
                        </li>
                        <li style="margin-right: 15px;">
                            <a href="https://wa.me/+905386849842" target="_blank" rel="noopener noreferrer" class="top-whatsapp-btn">
                                <i class="fa-brands fa-whatsapp"></i> WhatsApp
                            </a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/avsglobalsupply/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/avsglobalsupply" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/avsglobalshipsupply/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://www.x.com/AvsGlobalSupply" target="_blank"><i class="fa-brands fa-square-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/@avsglobalsupply" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  
    <div class="header-lower modern-main-bar">
        <div class="outer-container">
            <div class="outer-box">

                <!-- LOGO VE MOBİLE ÖZEL BRANDING METNİ -->
                <div class="logo-box modern-logo">
                    <a href="/"><img src="assets/images/logo.webp" alt="AVS Logo" id="header-main-logo"></a>
                    <div class="modern-logo-text">
                        <!-- Masaüstü Sloganı -->
                        <span class="desktop-slogan-line1">Your global ship supplier</span>
                        <span class="desktop-slogan-line2">operating worldwide.</span>
                        
                        <!-- Yöneticinin istediği "Mobilde AVS vurgusu" -->
                        <span class="brand-mobile">AVS GLOBAL</span>
                        <span class="slogan-mobile">Ship Supply & Management</span>
                    </div>
                </div>

                <div class="menu-area clearfix">
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="/">Home</a></li>  
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="/company">The Company</a></li>
                                        <li><a href="/timeline">Timeline</a></li>
                                        <li><a href="/management">Management</a></li>
                                        <li><a href="/advantage">The AVS Advantage</a></li>
                                        <li><a href="/partners">Partners</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <?php if (!empty($serviceSlugs) && is_array($serviceSlugs)): ?>
                                        <?php foreach ($serviceSlugs as $service): ?>
                                        <li><a href="/services/<?php echo $service['slug']; ?>"><?php echo $service['page_name']; ?></a></li>
                                        <?php endforeach; ?>
                                        <?php else: ?>
                                        <li><a href="#">No services available</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <li><a href="/career">Career</a></li>
                                <li><a href="/sustainability">Sustainability</a></li>
                                <li><a href="/news">News</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="modern-actions">
                    <div class="modern-lang-box">
                        <i class="fa-solid fa-globe" style="color:#0b4a7d;"></i>
                        <select class="selectmenu" onchange="window.location.href=this.value">
                            <option value="<?php echo $eng_link; ?>">EN</option>
                            <option value="<?php echo $tr_link; ?>">TR</option>
                            <option value="<?php echo $sri_link; ?>">LK</option>
                            <option value="<?php echo $gr_link; ?>">GR</option>
                        </select>
                    </div>
                    
                    <a href="https://rfq.avsglobalsupply.com" target="_blank" rel="noopener noreferrer" class="modern-btn btn-quote">
                        Quick Quote <i class="fa-solid fa-arrow-right" style="font-size: 12px; margin-left: 4px;"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="sticky-header modern-main-bar">
        <div class="outer-container">
            <div class="outer-box">
                <div class="logo-box modern-logo">
                    <a href="/"><img src="assets/images/logo.webp" alt="AVS Logo" style="height: 45px;"></a>
                    <div class="modern-logo-text" style="font-size: 11px; margin-left: 10px; padding-left: 10px;">
                        <span class="desktop-slogan-line1">Your global ship supplier</span>
                        <span class="desktop-slogan-line2">operating worldwide.</span>
                        
                        <span class="brand-mobile">AVS GLOBAL</span>
                        <span class="slogan-mobile">Ship Supply & Management</span>
                    </div>
                </div>

                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix"></nav>
                </div>

                <div class="modern-actions">
                    <div class="modern-lang-box">
                        <i class="fa-solid fa-globe" style="color:#0b4a7d;"></i>
                        <select class="selectmenu" onchange="window.location.href=this.value">
                            <option value="<?php echo $eng_link; ?>">EN</option>
                            <option value="<?php echo $tr_link; ?>">TR</option>
                            <option value="<?php echo $sri_link; ?>">LK</option>
                            <option value="<?php echo $gr_link; ?>">GR</option>
                        </select>
                    </div>
                    <a href="https://rfq.avsglobalsupply.com" target="_blank" rel="noopener noreferrer" class="modern-btn btn-quote" style="padding: 8px 16px;">
                        Quick Quote
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        
        <!-- MOBİL MENÜNÜN İÇİNE MARKA İSMİNİ KURUMSAL BİR BAŞLIKLA EKLİYORUZ -->
        <div class="nav-logo" style="text-align: center; border-bottom: 1px solid #eaeaea; padding-bottom: 15px; margin-bottom: 15px;">
            <a href="/"><img src="assets/images/logo.webp" alt="AVS Logo" style="max-height: 55px; margin: 0 auto 10px;"></a>
            <h5 style="color: #0b4a7d; font-weight: 800; font-size: 14px; margin: 0; line-height: 1.3;">AVS GLOBAL</h5>
            <span style="font-size: 12px; color: #666; font-weight: 500;">Ship Supply & Management Services</span>
        </div>

        <div class="mobile-quote-inside-menu" style="padding: 0 20px; margin-bottom: 15px; display: flex; gap: 10px;">
            <a href="https://wa.me/+905386849842" target="_blank" rel="noopener noreferrer" class="top-whatsapp-btn" style="flex: 1; text-align: center; justify-content: center; padding: 12px; font-size: 14px;">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp
            </a>
            <a href="https://rfq.avsglobalsupply.com" target="_blank" rel="noopener noreferrer" class="modern-btn btn-quote" style="flex: 1; text-align: center; justify-content: center; padding: 12px; font-size: 14px;">
                <i class="fas fa-file-invoice"></i> Quote
            </a>
        </div>

        <div class="menu-outer"></div> 
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
             <li><?php echo $address; ?></li>
             <li><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="https://www.linkedin.com/company/avsglobalsupply/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/avsglobalsupply" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/avsglobalshipsupply/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://x.com/AvsGlobalSupply" target="_blank"><i class="fa-brands fa-square-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UC5RgbAXnzJWoLIN-oydGqQQ" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </nav>
</div>
