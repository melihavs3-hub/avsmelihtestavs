<?php
$custom_js = $custom_js ?? "";
$eng_link   = $eng_link   ?? "";
$tr_link    = $tr_link    ?? "";
$sri_link   = $sri_link   ?? "";
$gr_link    = $gr_link    ?? "";
$canonical  = $canonical  ?? "";
$title      = $title ?? "AVS Global Gemi Tedarik & Yönetim Hizmetleri";
$query_site_settings = [
    'populate' => '*',
    'filters[WebSites][$eq]' => 'TR',
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

$services_api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/pages?populate=*&filters[webSites][$eqi]=TR&sort=order:asc';
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
?>
<!DOCTYPE html>
<html lang="tr">
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
<link rel="canonical" href="<?php echo  $canonical ?? $canonical_sitesettings ; ?>"/>
<?php if (!empty($eng_link)): ?>
<link rel="alternate" hreflang="en" href="<?php echo $eng_link; ?>"/>
<?php endif; ?>
<?php if (!empty($tr_link)): ?>
<link rel="alternate" hreflang="tr-TR" href="<?php echo $tr_link; ?>"/>
<?php endif; ?>
<?php if (!empty($sri_link)): ?>
<link rel="alternate" hreflang="en-LK" href="<?php echo $sri_link; ?>"/>
<?php endif; ?>
<?php if (!empty($gr_link)): ?>
<link rel="alternate" hreflang="en-GR" href="<?php echo $gr_link; ?>"/>
<?php endif; ?>
<link rel="alternate" hreflang="x-default" href="<?php echo $eng_link; ?>" />
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;display=swap" rel="stylesheet">
<link rel="preload" href="assets/css/all-styles.min.css?v=1.0" as="style">
<link rel="stylesheet" href="assets/css/all-styles.min.css?v=1.0" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/all-styles.min.css?v=1.0"></noscript>
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
@media screen and (max-width: 991px) {
    .main-header {
        position: fixed !important;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 9999 !important;
        transition: transform 0.3s ease-in-out !important;
    }

    .main-header.nav-up {
        transform: translateY(-100%) !important;
    }

    .boxed_wrapper {
        padding-top: 65px; 
    }
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
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: #333c4a; 
    z-index: 99999999; 
    display: flex;
    justify-content: center;
    align-items: center;
    transition: background-color 0.8s ease-in-out, opacity 0.5s ease-in-out;
    pointer-events: none; 
}

#avs-preloader-logo {
    width: 130px; 
    max-width: 80vw;
    height: auto;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    image-rendering: -webkit-optimize-contrast;
    image-rendering: high-quality;
    transition: transform 1s cubic-bezier(0.77, 0, 0.175, 1);
}

body.loading-active {
    overflow: hidden !important;
}
</style>

<div id="avs-preloader">
    <img src="assets/images/logo.webp" alt="AVS Yükleniyor" id="avs-preloader-logo">
</div>

<script>
document.body.classList.add('loading-active');

window.addEventListener('load', function() {
    const preloader = document.getElementById('avs-preloader');
    const preloaderLogo = document.getElementById('avs-preloader-logo');
    
    let targetLogo = document.querySelector('.main-header .header-upper .logo-box img'); 
    if (window.innerWidth <= 991) {
        targetLogo = document.querySelector('.main-header .mobile-logo img'); 
    }

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
            <ul class="info-list clearfix">
                <li><a href="/tr/nordic">Nordic Hamburg</a></li>
                <li><a href="/tr/hizmet-bolgeleri">Hizmet Bölgeleri</a></li>
                <li><a href="/tr/yeni-tedarikci">Tedarikçi Olun</a></li>
                <li><a href="/blog">Blog</a></li>
            </ul>
            <ul class="social-links clearfix">
                <li><a href="https://www.linkedin.com/company/avsglobalsupply/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/avsglobalsupply" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/avsglobalshipsupply/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://x.com/AvsGlobalSupply" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-square-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UC5RgbAXnzJWoLIN-oydGqQQ" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    
    <div class="header-upper">
        <div class="outer-container">
            <div class="left-column">
                <figure class="logo-box"><a href="/"><img src="assets/images/logo.webp" alt="AVS Logo"></a></figure>
                <div class="award-box">
                    <div class="award-image"><img src="assets/images/icons/award-1.webp" alt=""></div>
                    <h5>Dünya çapında faaliyet gösteren <br />küresel gemi tedarikçiniz.</h5>
                </div>
            </div>
            <div class="right-column">
                <div class="support-box">
                    <div class="icon-box">
                      <a href="https://wa.me/+905386849842" target="_blank" rel="noopener noreferrer" class="whatsapp-btn" style="color: white !important;">
                        <i class="flaticon-whatsapp" style="color: white !important;"></i>
                      </a>
                    </div>
                    <button id="chatButton"><h5><a href="#">Sorularınız <br />mı var?</a></h5></button>
                </div>
                <div class="phone"><h3><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></h3></div>
            </div>
        </div>
    </div>   
    <div class="header-lower">
        <div class="outer-container">
            <div class="outer-box">
                
                <div class="mobile-logo d-block d-lg-none">
                    <a href="/"><img src="assets/images/logo.webp" alt="AVS Logo" style="max-height: 40px; width: auto; transform: scale(1.4); transform-origin: left center;"></a>
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
                                <li><a href="/">Anasayfa</a></li>  
                                <li class="dropdown"><a href="#">Hakkımızda</a>
                                    <ul>
                                        <li><a href="/tr/sirket">Şirket</a></li>
                                        <li><a href="/tr/tarihce">Tarihçe</a></li>
                                        <li><a href="/tr/yonetim">Yönetim</a></li>
                                        <li><a href="/tr/avantaj">AVS Avantajları</a></li>
                                        <li><a href="/partners">Çözüm Ortakları</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Hizmetlerimiz</a>
                                    <ul>
                                        <?php if (!empty($serviceSlugs) && is_array($serviceSlugs)): ?>
                                        <?php foreach ($serviceSlugs as $service): ?>
                                        <li><a href="/services/<?php echo $service['slug']; ?>"><?php echo $service['page_name']; ?></a></li>
                                        <?php endforeach; ?>
                                        <?php else: ?>
                                        <li><a href="#">Hizmet bulunamadı</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <li><a href="/tr/kariyer">Kariyer</a></li>
                                <li><a href="/tr/surdurulebilirlik">Sürdürülebilirlik</a></li>
                                <li><a href="/tr/haberler">Haberler</a></li>
                                <li><a href="/tr/iletisim">İletişim</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                
                <div class="menu-right-content">
                    <div class="language-box">
                        <h5><img src="assets/images/icons/icon-3.webp" alt="">Dil:</h5>
                        <div class="select-box">
                            <select class="selectmenu" onchange="window.location.href=this.value">
                                <option value="<?php echo $eng_link; ?>">EN</option>
                                <option value="<?php echo $tr_link; ?>" selected>TR</option>
                                <option value="<?php echo $sri_link; ?>">LK</option>
                                <option value="<?php echo $gr_link; ?>">GR</option>
                            </select>
                        </div>
                    </div>
                    <div class="quote-box">
                        <a href="https://rfq.avsglobalsupply.com" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-file-invoice"></i>
                            <span>Hızlı Teklif</span>
                        </a>
                    </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="sticky-header">
        <div class="outer-container">
            <div class="outer-box">
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix"></nav>
                </div>
                <div class="menu-right-content">
                    <div class="language-box">
                        <h5><img src="assets/images/icons/icon-3.webp" alt="">Dil:</h5>
                        <select class="selectmenu" onchange="window.location.href=this.value">
                            <option value="<?php echo $eng_link; ?>">EN</option>
                            <option value="<?php echo $tr_link; ?>" selected>TR</option>
                            <option value="<?php echo $sri_link; ?>">LK</option>
                            <option value="<?php echo $gr_link; ?>">GR</option>
                        </select>
                    </div>
                    <div class="quote-box">
                        <a href="https://rfq.avsglobalsupply.com" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-file-invoice"></i>
                            <span>Hızlı Teklif</span>
                        </a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="/"><img src="assets/images/logo.webp" alt="AVS Logo"></a></div>
        
        <div class="mobile-quote-inside-menu" style="padding: 15px 20px 0; margin-bottom: 10px;">
            <a href="https://rfq.avsglobalsupply.com" target="_blank" rel="noopener noreferrer" style="background-color: #0b4a7d; color: #ffffff; padding: 12px 15px; border-radius: 4px; font-weight: 600; font-size: 14px; display: flex; align-items: center; justify-content: center; text-decoration: none; width: 100%;">
                <i class="fas fa-file-invoice" style="margin-right: 8px;"></i> Hızlı Teklif
            </a>
        </div>

        <div class="menu-outer"></div> 
        <div class="contact-info">
            <h4>İletişim Bilgileri</h4>
            <ul>
             <li><?php echo $address; ?></li>
             <li><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="https://www.linkedin.com/company/avsglobalsupply/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/avsglobalsupply" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/avsglobalshipsupply/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://x.com/AvsGlobalSupply" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-square-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UC5RgbAXnzJWoLIN-oydGqQQ" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </nav>
</div>

<style id="kesin-mobil-cozum">
@media screen and (max-width: 991px) {
    div.header-top, 
    header.main-header .header-top,
    div.header-upper,
    header.main-header .header-upper {
        display: none !important;
        height: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
        opacity: 0 !important;
        visibility: hidden !important;
        position: absolute !important;
        z-index: -9999 !important;
    }
    
    header.main-header .header-lower {
        padding: 12px 15px !important;
        background-color: #ffffff !important;
        position: relative !important;
        z-index: 99 !important;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05) !important;
    }
    
    header.main-header .header-lower .outer-box {
        display: flex !important;
        flex-direction: row !important;
        justify-content: space-between !important;
        align-items: center !important;
        width: 100% !important;
    }
    
    header.main-header .header-lower .menu-right-content {
        display: none !important;
    }

    header.main-header .menu-area {
        display: flex !important;
        align-items: center !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    
    header.main-header .mobile-nav-toggler {
        margin: 0 !important;
        padding: 5px !important;
    }
}
</style>
