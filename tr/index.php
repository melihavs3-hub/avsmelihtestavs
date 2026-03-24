<?php
$title = "AVS Küresel Gemi Tedariği ve Yönetimi";
$description = "";
$preload_image = "/assets/images/banner/banner-13.webp";
$canonical = "https://www.avsglobalsupply.com/tr/";
$eng_link = "https://www.avsglobalsupply.com/";
$tr_link = "https://www.avsglobalsupply.com/tr/";
$sri_link = "https://www.avssrilanka.com/";
$gr_link = "https://www.avsgreece.gr/";
include 'header.php';

$query = [
    'pagination[page]' => 1,
    'pagination[pageSize]' => 3,
    'populate' => '*',
    'filters[webSites][$eq]' => 'TR',
    'sort' => 'createdAt:desc',
];

if (!empty($filters)) {
    $query['filters[category][name][$eq]'] = $filters;
}

$api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/articles?' . http_build_query($query);

try {
    $response = file_get_contents($api_url);
    if (!$response) throw new Exception('API yanıtı alınamadı');
    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) throw new Exception('JSON decode hatası');
} catch (Exception $e) {
    error_log($e->getMessage());
    $data = ['data' => [], 'meta' => ['pagination' => ['page' => 1, 'pageCount' => 1]]];
}
$query_news = [
    'pagination[page]' => 1,
    'pagination[pageSize]' => 3,
    'populate' => '*',
    'filters[webSites][$eq]' => 'TR',
    'sort' => 'createdAt:desc',
];

if (!empty($filters)) {
    $query_news['filters[category][name][$eq]'] = $filters;
}


$api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/news-pages?' . http_build_query($query_news);

try {
    $response_news = file_get_contents($api_url);
    if (!$response_news)
        throw new Exception('API yanıtı alınamadı');
    $data_news = json_decode($response_news, true);
    if (json_last_error() !== JSON_ERROR_NONE)
        throw new Exception('JSON decode hatası');
} catch (Exception $e) {
    error_log($e->getMessage());
    $data_news = ['data' => [], 'meta' => ['pagination' => ['page' => 1, 'pageCount' => 1]]];
}
?>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "AVS Global Supply",
        "url": "https://www.avsglobalsupply.com",
        "logo": "https://www.avsglobalsupply.com/assets/images/avs-logo-big.webp",
        "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+90-16-591-0849",
            "contactType": "customer service",
            "areaServed": "WW",
            "availableLanguage": ["English", "Turkish"]
        }],
        "sameAs": [
            "https://www.linkedin.com/company/avsglobalsupply/",
            "https://www.instagram.com/avsglobalsupply",
            "https://www.facebook.com/avsglobalshipsupply/",
            "https://twitter.com/AvsGlobalSupply",
            "https://www.youtube.com/channel/UC5RgbAXnzJWoLIN-oydGqQQ"
        ],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Soganlik Yeni Mah, Pamukkale Sk. No:2 Kartal",
            "addressLocality": "Istanbul",
            "addressRegion": "IST",
            "postalCode": "34880",
            "addressCountry": "TR"
        },
        "description": "AVS Global Supply provides a comprehensive range of maritime services including technical supplies, provision management, and ship chandling across 1500 ports worldwide.",
        "founder": {
            "@type": "Person",
            "name": "Abdülvahit Şimşek",
            "sameAs": "https://www.linkedin.com/in/abdülvahit-şimşek-123456789"
        }
    }
</script>
<style>
.banner-section .slide-item {
    height: 100vh !important;
    min-height: 500px !important;
    position: relative;
    overflow: hidden;
    display: flex !important;
    align-items: center !important;
}

.banner-section .image-layer {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
    background-size: cover !important;
    background-position: center center !important;
    background-repeat: no-repeat !important;
}

.banner-section .auto-container {
    width: 100%;
    position: relative;
    z-index: 2;
}
</style>
<style>
    .continuous-ticker {
        overflow: hidden;
        width: 100%;
        background: transparent;
        padding: 10px 0;
    }
    .ticker-track {
        display: inline-flex;
        align-items: center;
        width: max-content;

        animation: tickerAnimation 15s linear infinite; 
    }

    .ticker-track:hover {
        animation-play-state: paused; 
    }
    .ticker-item {
        margin: 0 40px;
        transition: transform 0.3s ease;
    }
    .ticker-item:hover {
        transform: scale(1.1);
    }
    .ticker-item img {
        height: 68px;
        width: auto !important;
        display: block;
    }
    @keyframes tickerAnimation {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    

    @media (max-width: 767px) {
        .ticker-item { margin: 0 20px; }
        .ticker-item img { height: 50px; }
    }
</style>
<!-- banner-section -->
<section class="banner-section">
    <div class="banner-carousel owl-theme owl-carousel">
        <div class="slide-item">
            <div class="image-layer" class="lazyload" style="background-image:url(/assets/images/banner/banner-13.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Küresel <span>Gemi</span> Tedariği</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">126'dan fazla ülkede gemi sahiplerine ve gemi yönetim şirketlerine hizmet sunuyoruz.</div>
                        <a href="https://www.avsglobalsupply.com/tr/hizmetler/kuresel-gemi-tedarigi" class="theme-btn btn-two">Küresel Gemi Tedariği</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" class="lazyload" style="background-image:url(/assets/images/banner/banner-15.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Catering <span>& Kumanya</span> Yönetimi</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">Anlaşılmış bütçe dahilinde gemi sahiplerine ve gemi yönetim şirketlerine kumanya hizmetleri sunuyoruz.</div>
                        <a href="https://www.avsglobalsupply.com/tr/hizmetler/kumanya" class="theme-btn btn-two">Catering & Kumanya Yönetimi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(/assets/images/banner/banner-16.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Teknik <span>Malzeme</span> Yönetimi</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">Genel tüketim malzemelerini, dünya çapında sorunsuz sipariş süreçlerini mümkün kılan yazılımımızı kullanarak yönetiyor ve gemilerin bütçelerini koruyoruz.</div>
                        <a href="https://www.avsglobalsupply.com/tr/hizmetler/teknik-malzeme" class="theme-btn btn-two">Teknik Malzeme Yönetimi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(/assets/images/banner/banner-17.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Teknik <span>Hizmetler</span> </h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">Küresel gemi operasyonları için ekipman verimliliğini artırmak ve kesinti sürelerini azaltmak amacıyla temel teknik hizmetler sunuyoruz.</div>
                        <a href="https://www.avsglobalsupply.com/tr/hizmetler/teknik-hizmetler" class="theme-btn btn-two">Teknik Hizmetler</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(/assets/images/banner/banner-18.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Kıyı/Açık Deniz <span>Catering</span>Hizmetleri</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">"Açık deniz ve kara ortamlarını, mürettebatın konforunu, sağlığını ve memnuniyetini artırmak amacıyla yüksek kaliteli, çeşitli mutfak seçenekleri ve kapsamlı destek sunan AVS Catering ve Tesis Hizmetleri ile iyileştiriyoruz.</div>
                        <a href="https://www.avsglobalsupply.com/tr/hizmetler/kiyi-acikdeniz" class="theme-btn btn-two">Kıyı/Açık Deniz Catering Hizmetleri</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(/assets/images/banner/banner-19.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Gıda <span>Tedariği</span></h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">Verimli lojistik ve uzman gıda ticareti danışmanlığı ile çeşitli, yüksek kaliteli ve sürdürülebilir küresel lezzetler sunarak mutfak tekliflerinizi zenginleştiriyoruz.</div>
                        <a href="https://www.avsglobalsupply.com/tr/hizmetler/gida" class="theme-btn btn-two">Gıda Tedariği</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(/assets/images/banner/banner-20.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Lojistik<span>& Gümrükleme</span>Hizmetleri</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">Lojistik ve gümrük süreçlerinizi basitleştiriyor, kapsamlı nakliye, depolama ve gümrükleme desteği ile sevkiyatlarınızın zamanında ve sorunsuz teslimatını sağlıyoruz.</div>
                        <a href="https://www.avsglobalsupply.com/tr/hizmetler/lojistik" class="theme-btn btn-two">Lojistik & Gümrükleme Hizmetleri</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(/assets/images/banner/banner-21.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Gemi<span> Adamı</span> Eğitimi</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">EKOL Gemi Adamı Eğitim Merkezimiz ile mürettebatınızın becerilerini geliştirin; 650'den fazla denizciye kapsamlı denizcilik eğitimi ve küresel uyum için 120 akredite kurs sunuyoruz.</div>
                        <a href="https://www.avsglobalsupply.com/tr/hizmetler/egitim" class="theme-btn btn-two">Gemi Adamı Eğitimi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->
            <!-- ISO Certifications Section -->
            <div class="iso-certifications py-4" style="border-top: 1px solid rgba(255, 255, 255, 0.1); margin-bottom: 30px;">
    <div class="auto-container">
        <div class="continuous-ticker">
            <div class="ticker-track">
                
                <a href="https://impa.net/" target="_blank" class="ticker-item"><img src="assets/images/iso/impa.png" alt="IMPA"></a>
                <a href="https://shipsupply.org/" target="_blank" class="ticker-item"><img src="assets/images/iso/issa.jpg" alt="ISSA"></a>
                <a href="https://www.bimco.org/" target="_blank" class="ticker-item"><img src="assets/images/iso/bimco.jpg" alt="BIMCO"></a>
                <a href="https://unglobalcompact.org/" target="_blank" class="ticker-item"><img src="assets/images/iso/un global.png" alt="UN Global Compact"></a>
                <a href="https://www.turssa.org/" target="_blank" class="ticker-item"><img src="assets/images/iso/turssa.jpg" alt="TURSSA"></a>
                
                <a href="https://impa.net/" target="_blank" class="ticker-item"><img src="assets/images/iso/impa.png" alt="IMPA"></a>
                <a href="https://shipsupply.org/" target="_blank" class="ticker-item"><img src="assets/images/iso/issa.jpg" alt="ISSA"></a>
                <a href="https://www.bimco.org/" target="_blank" class="ticker-item"><img src="assets/images/iso/bimco.jpg" alt="BIMCO"></a>
                <a href="https://unglobalcompact.org/" target="_blank" class="ticker-item"><img src="assets/images/iso/un global.png" alt="UN Global Compact"></a>
                <a href="https://www.turssa.org/" target="_blank" class="ticker-item"><img src="assets/images/iso/turssa.jpg" alt="TURSSA"></a>

            </div>
        </div>
    </div>
</div>
<!-- about-section -->
<section class="about-section sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <div class="image-shape">
                        <div class="shape-1" style="background-image: url(/assets/images/shape/shape-1.webp);"></div>
                        <div class="shape-2" style="background-image: url(/assets/images/shape/shape-2.webp);"></div>
                        <div class="shape-3" style="background-image: url(/assets/images/shape/shape-3.webp);"></div>
                    </div>
                    <figure class="image"><img width="450" height="450" src="/assets/images/resource/about-1.webp" alt=""></figure>
                    <div class="experience-box">
                        <h2>39</h2>
                        <h6>yıllık Deneyim</h6>
                    </div>
                    <div class="circle-box">
                        <span class="curved-circle">Denizcilik karmaşıklıklarını aşmak</span>
                        <span class="curved-circle-2">Küresel denizci yaşamını iyileştirmek</span>
                        <span class="curved-circle-3">Mükemmeliyete bağlılık</span>
                        <span class="curved-circle-4">Denizcilik yolculuklarını güçlendirmek</span>
                    </div>
                    <div class="dot-box">
                        <span class="dot dot-1"></span>
                        <span class="dot dot-2"></span>
                        <span class="dot dot-3"></span>
                        <span class="dot dot-4"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <span class="sub-title">Ağımız</span>
                        <h2>Eşsiz satın alma gücümüzün kaynağı</h2>
                    </div>
                    <ul class="list-item clearfix">
                        <li>Güçlü bir ağ</li>
                        <li>Kusursuz satın alma gücü</li>
                        <li>Tek bir irtibat noktasıyla her yere ulaşabilme kapasitesi</li>
                        <li>Gemi sahipleri ve yöneticileri için maliyet etkin çözümler</li>
                    </ul>
                    <div class="text-box">
                        <p>Tedarikçiler, distribütörler ve üreticilerle kurduğumuz ilişkiler, güven ve karşılıklı faydaya dayalı güçlü bir ağ oluşturmamıza yardımcı olmuştur.</p>
                    </div>
                    <div class="btn-box">
                        <a href="https://www.avsglobalsupply.com/tr/sirket" class="theme-btn btn-two">Daha Fazla Oku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- video-section -->
<section class="video-section">
    <div class="pattern-layer" style="background-image: url(/assets/images/shape/shape-4.webp);"></div>
    <div class="outer-container">
        <div class="auto-container">
            <div class="funfact-inner">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><img src="/assets/images/icons/icon-5.webp" alt=""></div>
                                <div class="light-icon"><img src="/assets/images/icons/icon-6.webp" alt=""></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="8700">0</span><span class="text">Günlük Yemek</span>
                                </div>
                                <p>Lezzet, Temizlik ve Güvenlik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 consultation-block">
                        <div class="consultation-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-searching"></i></div>
                                <h3><a href="https://www.avsglobalsupply.com/tr/hizmetler/kiyi-acikdeniz">Catering Hizmetleri</a></h3>
                                <p>Kıyı/Açık Deniz Catering & Hizmetleri</p>
                                <div class="link"><a href="https://www.avsglobalsupply.com/tr/hizmetler/kiyi-acikdeniz"><span>Detaylı Bilgi</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-inner">
            <div class="bg-layer" style="background-image: url(/assets/images/background/video-bg.webp);"></div>
            <div class="btn-box">
                <a href="https://youtu.be/MNta7NWHTpc&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i class="flaticon-play-button"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- video-section end -->

<!-- service-section -->
<section class="service-section">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(/assets/images/shape/shape-5.webp);"></div>
        <div class="pattern-2" style="background-image: url(/assets/images/shape/shape-6.webp);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="sub-title">Hizmetlerimiz</span>
            <h2>Hızlı, Verimli, Güvenilir, Sürdürülebilir</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
            <div class="service-block-one block-one">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-analytics"></i></div>
                        <span class="count-text">01</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/tr/hizmetler/kuresel-gemi-tedarigi">Küresel Gemi Tedariği</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/tr/hizmetler/kuresel-gemi-tedarigi"><span>Hizmeti Keşfedin</span></a></div>
                    <p>Müşterilerimize, birçok limanda tüm taleplerini tek bir irtibat noktası aracılığıyla karşılama kolaylığı sunuyoruz.</p>
                </div>
            </div>
            <div class="service-block-one block-two">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-office-building"></i></div>
                        <span class="count-text">02</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/tr/hizmetler/kumanya">Catering & Kumanya Yönetimi</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/tr/hizmetler/kumanya"><span>Hizmeti Keşfedin</span></a></div>
                    <p>Bütçe dahilinde kumanya hizmetleri sunuyor, gemideki stokları Kumanya Yönetimi yazılımımızla yönetiyoruz.</p>
                </div>
            </div>
            <div class="service-block-one block-three">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-retirement"></i></div>
                        <span class="count-text">03</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/tr/hizmetler/teknik-malzeme">Teknik Malzeme Tedariği & Yönetimi</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/tr/hizmetler/teknik-malzeme"><span>Hizmeti Keşfedin</span></a></div>
                    <p>Yazılımımız ile temel tüketim malzemelerinin küresel siparişlerini basitleştiriyor, gemilerin bütçe dahilinde kalmasını verimli bir şekilde sağlıyoruz.</p>
                </div>
            </div>
            <div class="service-block-one block-one">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-analytics"></i></div>
                        <span class="count-text">04</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/tr/hizmetler/teknik-hizmetler">Teknik Hizmetler</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/tr/hizmetler/teknik-hizmetler"><span>Hizmeti Keşfedin</span></a></div>
                    <p>Yedek parça, onarım ve yenileme ile sorunsuz operasyonları sağlıyor, denizcilik ihtiyaçlarına uygun makineleri optimize ediyoruz.</p>
                </div>
            </div>
            <div class="service-block-one block-two">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-office-building"></i></div>
                        <span class="count-text">05</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/tr/hizmetler/kiyi-acikdeniz">Kıyı/Açık Deniz Catering & Hizmetleri</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/tr/hizmetler/kiyi-acikdeniz"><span>Hizmeti Keşfedin</span></a></div>
                    <p>Üstün yemek hizmetleri ve tesislerle deniz ve kara ortamlarını iyileştirerek mürettebatın refahını ve verimliliğini sağlıyoruz.</p>
                </div>
            </div>
            <div class="service-block-one block-three">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-retirement"></i></div>
                        <span class="count-text">06</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/tr/hizmetler/gida">Gıda Tedariği</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/tr/hizmetler/gida"><span>Hizmeti Keşfedin</span></a></div>
                    <p>Yüksek kaliteli, çeşitli gıda ürünlerini doğrudan size ulaştırarak, sürdürülebilirlik ve güvenilirlik odaklı küresel lezzetler sunuyoruz.</p>
                </div>
            </div>
            <div class="service-block-one block-one">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-analytics"></i></div>
                        <span class="count-text">07</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/tr/hizmetler/lojistik">Lojistik & Gümrükleme Hizmetleri</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/tr/hizmetler/lojistik"><span>Hizmeti Keşfedin</span></a></div>
                    <p>Lojistik ve gümrük süreçlerinizi basitleştirerek, sorunsuz mal hareketini ve stratejik büyüme desteğini sağlıyoruz.</p>
                </div>
            </div>
            <div class="service-block-one block-two">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-office-building"></i></div>
                        <span class="count-text">08</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/tr/hizmetler/egitim">EKOL Gemi Adamı Eğitimi</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/tr/hizmetler/egitim"><span>Hizmeti Keşfedin</span></a></div>
                    <p>Gemi adamı eğitimi ile denizcilik kariyerlerini yükseltiyor, güvenlik, verimlilik ve profesyonel gelişimi artırıyoruz</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-section end -->


<!-- growth-section -->
<section class="growth-section">
    <div class="pattern-layer" style="background-image: url(/assets/images/shape/shape-7.webp);"></div>
    <div class="auto-container">
        <div class="growth-inner">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <figure class="image-box"><img data-src="/assets/images/resource/growth-1.webp" class="lazyload" alt=""></figure>
                        <div class="sec-title light">
                            <span class="sub-title">Catering Hizmetleri</span>
                            <h2>Lezzetin Ötesine Yelken Açmak, Mükemmeliyete Demir Atmak</h2>
                        </div>
                        <div class="text-box">
                            <p>Küresel lezzetlerle üstün yemek hizmeti,<br />her yerde benzersiz kalite.</p>
                            <a href="https://www.avsglobalsupply.com/tr/hizmetler/kiyi-acikdeniz" class="theme-btn btn-two"><span>Read More</span></a>
                        </div>
                        <div class="progress-box">
                            <h5>Günlük yemek tüketen kişi: 3422<br /><br /><br /></h5>
                            <div class="progress-inner">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="60%"></div>
                                    <div class="count-text">yükselme aşamasında</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                    <div class="growth-content">
                        <div class="growth-block-one">
                            <div class="inner-box">
                                <h3><a href="https://www.avsglobalsupply.com/tr/hizmetler/kiyi-acikdeniz">Kıyı/Açık Deniz Catering</a></h3>
                                <p>AVS Catering'in mutfağı, özenle seçilmiş taze malzemelerle doludur. </p>
                                <div class="icon-box"><i class="flaticon-development"></i></div>
                                <div class="link-box"><a href="https://www.avsglobalsupply.com/tr/hizmetler/kiyi-acikdeniz"><span>Devamını gör</span></a></div>
                            </div>
                        </div>
                        <div class="growth-block-one">
                            <div class="inner-box">
                                <h3><a href="https://www.avsglobalsupply.com/tr/kiyi-acikdeniz">Remote Camps</a></h3>
                                <p>Uzaktan Catering hizmetimiz, lezzetli yemekler sunarak ekiplerin kendilerini evlerinde hissetmelerini sağlar.</p>
                                <div class="icon-box"><i class="flaticon-strategy"></i></div>
                                <div class="link-box"><a href="https://www.avsglobalsupply.com/tr/hizmetler/kiyi-acikdeniz"><span>Devamını gör</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients-section">
            <ul class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <li>
                    <figure class="clients-logo"><a href="https://shipsupply.org/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/a1.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://impa.net/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/a2.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://www.bimco.org/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/a3.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://www.turssa.org/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/a4.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://www.seaproc.com/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/a5.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://shippalm.synergymarinegroup.com/shippalm/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/a6.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://www.shipserv.com/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/a7.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://mespas.com/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/a8.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://procureship.com/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/a9.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://econnect.mariapps.com/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/a10.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://unglobalcompact.org/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/a11.png" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://gen-pro.com/" target="_blank" rel="nofollow noopener"><img src="/assets/images/clients/genpro.png" alt=""></a></figure>
                </li>
            </ul>
            <div class="more-text centred">
                <h5>Ağımızı Keşfedin: Saygın endüstri kuruluşlarının gururlu üyeleri.<a href="https://www.avsglobalsupply.com/tr/sirket"><i class="flaticon-right-chevron"></i>Şirket</a></h5>
            </div>
        </div>
    </div>
</section>
<!-- growth-section end -->


<!-- chooseus-section -->
<section class="chooseus-section sec-pad">
    <span class="big-text">We <br />Are AVS</span>
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="sub-title">dünya çapında hizmetinizde.</span>
            <h2>126 Ülkede, 1500+ Limanda</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-12 left-column">
                <div class="inner-content">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-knowledge"></i></div>
                            <div class="static-content">
                                <h3>Şirket</h3>
                                <p>Küresel bir gemi tedarik lideri olarak, denizcilik ihtiyaçlarını derin uzmanlık ve müşteri memnuniyeti odaklı hızlı bir şekilde karşılıyoruz.</p>
                            </div>
                            <div class="overlay-content">
                                <a href="https://www.avsglobalsupply.com/tr/sirket">
                                    <p>Küresel bir gemi tedarik lideri olarak, denizcilik ihtiyaçlarını derin uzmanlık ve müşteri memnuniyeti odaklı hızlı bir şekilde karşılıyoruz.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-united"></i></div>
                            <div class="static-content">
                                <h3>Zaman Çizelgesi</h3>
                                <p>On yıllar boyunca denizcilikte mükemmeliyet ile büyüdük,</p>
                            </div>
                            <div class="overlay-content">
                                <p>On yıllar boyunca denizcilikte mükemmeliyet ile büyüdük, küresel endüstrinin ihtiyaçlarına sürekli uyum sağladık ve hizmet verdik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-clock"></i></div>
                            <div class="static-content">
                                <h3>Yönetim</h3>
                                <p>Vizyonumuz, yenilik ile küresel denizcilik hizmetini birleştirir,</p>
                            </div>
                            <div class="overlay-content">
                                <p>Vizyonumuz, yenilik ile küresel denizcilik hizmetini birleştirir, sınır tanımayan dünyada mükemmelliğe olan bağlılığımızı yansıtır.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image"><img data-src="/assets/images/resource/chooseus-1.webp" class="lazyload" alt="World Image from Space"></figure>
                    <div class="image-shape"><img src="/assets/images/shape/shape-8.webp" alt="AVS White Text"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 right-column">
                <div class="inner-content">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-risk-management"></i></div>
                            <div class="static-content">
                                <h3>Ekibimiz</h3>
                                <p>Ekibimiz, denizcilik mükemmeliyetini sağlamak için uzmanlık ve tutkuyu bir araya getirir</p>
                            </div>
                            <div class="overlay-content">
                                <p>Ekibimiz, denizcilik mükemmeliyetini sağlamak için uzmanlık ve tutkuyu bir araya getirir, küresel olarak sorunsuz hizmet sağlar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-monitor"></i></div>
                            <div class="static-content">
                                <h3>Ortaklar</h3>
                                <p>AVS'nin ortakları, hizmet çeşitliliği ve yetkinliği açısından büyük bir güç kaynağıdır</p>
                            </div>
                            <div class="overlay-content">
                                <p>AVS'nin ortakları, hizmet çeşitliliği ve yetkinliği açısından büyük bir güç kaynağıdır.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-advice"></i></div>
                            <div class="static-content">
                                <h3>Kariyer</h3>
                                <p>Güçlü, ilerici ekibimizin bir parçası olmak için AVS'ye katılın,</p>
                            </div>
                            <div class="overlay-content">
                                <p>Güçlü, ilerici ekibimizin bir parçası olmak için AVS'ye katılın ve denizcilik hizmetlerinin geleceğini şekillendirin.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-section end -->


<!-- industries-section -->
<section class="industries-section d-none d-md-block">
    <div class="outer-container">
        <div class="bg-layer" style="background-image: url(/assets/images/background/industries-bg.webp);"></div>
        <div class="auto-container">
            <div class="tabs-box">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title light">
                                <span class="sub-title">Green Today, Greener Tomorrow</span>
                                <h2>Sürdürülebilirlik</h2>
                            </div>
                            <div class="tab-btns tab-buttons clearfix">
                                <div class="tab-btn active-btn" data-tab="#tab-1">
                                    <span class="count-text">01</span>
                                    <h3>Çevre Dostu Operasyonlar</h3>
                                    <a href="https://www.avsglobalsupply.com/tr/surdurulebilirlik"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                                <div class="tab-btn" data-tab="#tab-2">
                                    <span class="count-text">02</span>
                                    <h3>Tedarik Zinciri Yönetimi</h3>
                                    <a href="https://www.avsglobalsupply.com/tr/surdurulebilirlik"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                                <div class="tab-btn" data-tab="#tab-3">
                                    <span class="count-text">03</span>
                                    <h3>Dijital Yenilik</h3>
                                    <a href="https://www.avsglobalsupply.com/tr/surdurulebilirlik"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                                <div class="tab-btn" data-tab="#tab-4">
                                    <span class="count-text">04</span>
                                    <h3>Eğitim ve Eğitim Programları</h3>
                                    <a href="https://www.avsglobalsupply.com/tr/surdurulebilirlik"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                                <div class="tab-btn" data-tab="#tab-5">
                                    <span class="count-text">05</span>
                                    <h3>Çevresel İnisiyatifler</h3>
                                    <a href="https://www.avsglobalsupply.com/tr/surdurulebilirlik"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <h3>Çevre Dostu Operasyonlar</h3>
                                    <p>Çevresel etkiyi azaltmak için daha akıllı operasyonlar, atık azaltma ve enerji tasarrufu uygulamaları ile küresel operasyonlarımızı yönetiyoruz.</p>
                                    <ul class="list-item clearfix">
                                        <li>Daha az etki için akıllı operasyonlar.</li>
                                        <li>Küresel atık azaltma ve enerji tasarrufu. </li>
                                    </ul>
                                    <a href="https://www.avsglobalsupply.com/tr/surdurulebilirlik" class="theme-btn btn-two">Daha Fazlasını Keşfet</a>
                                </div>
                            </div>
                            <div class="tab" id="tab-2">
                                <div class="inner-box">
                                    <h3>Tedarik Zinciri Yönetimi</h3>
                                    <p>Ortaklıklarımızı dikkatle seçiyor, sürdürülebilirlik yolculuğumuzda yanımızda duran tedarikçilere öncelik veriyoruz.</p>
                                    <ul class="list-item clearfix">
                                        <li>Sürdürülebilirlik hedefleriyle uyumlu ortaklıklar.</li>
                                        <li>Sürdürülebilirlik yolculuğumuzu destekleyen tedarikçiler.</li>
                                    </ul>
                                    <a href="https://www.avsglobalsupply.com/tr/surdurulebilirlik" class="theme-btn btn-two">Daha Fazlasını Keşfet</a>
                                </div>
                            </div>
                            <div class="tab" id="tab-3">
                                <div class="inner-box">
                                    <h3>Dijital Yenilik</h3>
                                    <p>Çevre dostu ve sürdürülebilirliği teşvik eden ileri teknolojileri ve çözümleri benimsemeye kararlıyız.</p>
                                    <ul class="list-item clearfix">
                                        <li>Sürdürülebilirlik için çevre dostu teknolojileri benimsemek.</li>
                                        <li>Daha yeşil bir gelecek için ilerlemek.</li>
                                    </ul>
                                    <a href="https://www.avsglobalsupply.com/tr/surdurulebilirlik" class="theme-btn btn-two">Daha Fazlasını Keşfet</a>
                                </div>
                            </div>
                            <div class="tab" id="tab-4">
                                <div class="inner-box">
                                    <h3>Eğitim Programları</h3>
                                    <p>Bilgiyle güçlenmek, daha yeşil bir geleceğe atılacak önemli bir adımdır. Eğitim programlarımız, iş gücümüzü ve müşterilerimizi aydınlatmak için burada.</p>
                                    <ul class="list-item clearfix">
                                        <li>Daha yeşil gelecekler için eğitimle güçlendirmek.</li>
                                        <li>İş gücü ve müşteriler için aydınlatıcı programlar.</li>
                                    </ul>
                                    <a href="https://www.avsglobalsupply.com/tr/surdurulebilirlik" class="theme-btn btn-two">Daha Fazlasını Keşfet</a>
                                </div>
                            </div>
                            <div class="tab" id="tab-5">
                                <div class="inner-box">
                                    <h3>Çevresel İnisiyatifler</h3>
                                    <p>Deniz ekosistemlerini koruyan ve sürdürülebilir kalkınmayı teşvik eden projelere aktif olarak katılıyoruz.</p>
                                    <ul class="list-item clearfix">
                                        <li>Deniz ekosistemlerinin korunması için projelerde aktif.</li>
                                        <li>Eylem yoluyla sürdürülebilir kalkınmayı teşvik etmek.</li>
                                    </ul>
                                    <a href="https://www.avsglobalsupply.com/tr/surdurulebilirlik" class="theme-btn btn-two">Daha Fazlasını Keşfet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- working-section -->
<section class="working-section centred d-none d-md-block">
    <div class="auto-container">
        <div class="sec-title">
            <span class="sub-title">AVS: Zaman İçinde Yelken Açmak</span>
            <h2>1985'ten Beri Mükemmelliği Yönlendirmek</h2>
        </div>
        <div class="inner-content">
            <div class="shape" style="background-image: url(/assets/images/shape/shape-9.webp);"></div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                    <div class="working-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/assets/images/resource/working-1.webp" alt=""></figure>
                                <div class="icon-box"><i class="flaticon-meeting"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3>Köken</h3>
                                <p>İzmir'de yerel bir tedarikçi olarak kuruldu.</p>
                                <h2>1985 <span>Yerel</span></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                    <div class="working-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/assets/images/resource/working-2.webp" alt="AVS Old Office Enterance"></figure>
                                <div class="icon-box"><i class="flaticon-paper"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3>Genişleme</h3>
                                <p>AVS Global Supply, dünya çapında müşterilere hizmet vermek için kuruldu.</p>
                                <h2>2001 <span>Küresel</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                    <div class="working-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/assets/images/resource/working-3.webp" alt="AVS and Nordic Hamburg Flags"></figure>
                                <div class="icon-box"><i class="flaticon-analysis"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3>Ortaklık</h3>
                                <p>Nordic Hamburg Shipmanagement GmbH & Co. KG, AVS'den hisse satın aldı.</p>
                                <h2>2022 <span>Sermaye</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-text centred">
            <h5>Yolculuğumuzu Keşfedin: Zaman İçinde AVS'i Keşfedin. <a href="https://www.avsglobalsupply.com/tr/tarihce"><i class="flaticon-right-chevron"></i>Zaman Çizelgesi</a></h5>

        </div>
    </div>
</section>
<!-- working-section end -->


<!-- project-section -->
<section class="project-section">
    <div class="auto-container" style="max-width:1600px!important">
        <div class="sec-title">
            <span class="sub-title">Görsel Macera</span>
            <h2>İşimizi Tanıyın</h2>

        </div>
        <div class="project-tab">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="p-tabs-content">
                        <div class="p-tab active-tab" id="tab-5">
                            <div class="four-item-carousel owl-carousel owl-theme">
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523" src="/assets/images/project/project-1.webp" class="lazyload" alt=""></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523" src="/assets/images/project/project-2.webp" class="lazyload" alt=""></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523" src="/assets/images/project/project-3.webp" class="lazyload" alt=""></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523" src="/assets/images/project/project-4.webp" class="lazyload" alt=""></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523" src="/assets/images/project/project-a5.webp" class="lazyload" alt=""></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523" src="/assets/images/project/project-a6.webp" class="lazyload" alt=""></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523" data-src="/assets/images/project/project-a7.webp" class="lazyload" alt=""></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523" src="/assets/images/project/project-a8.webp" class="lazyload" alt=""></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523" src="/assets/images/project/project-a9.webp" class="lazyload" alt=""></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523" src="/assets/images/project/project-a10.webp" class="lazyload" alt=""></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

</section>
<!-- project-section end -->


<!-- testimonial-section -->
<section class="testimonial-section sec-pad">
    <div class="pattern-layer" style="background-image: url(/assets/images/shape/shape-11.webp);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title light">
                        <span class="sub-title">Ağımız</span>
                        <h2>Alım Gücümüzün Kaynağı</h2>
                    </div>
                    <div class="inner-box">
                        <div class="single-item">
                            <div class="icon-box"><img src="/assets/images/icons/icon-7.webp" alt=""></div>
                            <h5>Tedarikçiler, distribütörler ve üreticilerle kurduğumuz ilişkiler, güven ve karşılıklı fayda temeline dayanan güçlü bir ağ oluşturmamıza yardımcı oldu.</h5>
                        </div>
                        <div class="etiket">Mükemmel Hizmet</div>
                    </div>
                    <div class="link">
                        <a href="https://www.avsglobalsupply.com/advantage"><span>Tüm Avantajları Okuyun</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                <div class="testimonial-content">
                    <div class="testimonial-slider">
                        <div class="bxslider">
                            <div class="slider-content">
                                <div class="testimonial-block-one">
                                    <figure class="thumb-box"><img src="/assets/images/resource/t01.webp" alt=""></figure>
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-quote"></i></div>
                                        <h4>AVS'nin Avantajları</h4>
                                        <p>Küresel ağımız, dünyanın en ücra köşelerinde bile kapsamlı bir şekilde hizmet sunarak 126 ülkede 1.500'den fazla limanı kapsar, tüm denizcilik operasyonları için sorunsuz bağlantı sağlar.</p>
                                        <h3>hizmetinizde, küresel olarak.</h3>
                                        <span class="designation">Güçlü Satın Alma Ortaklıkları</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-content">
                                <div class="testimonial-block-one">
                                    <figure class="thumb-box"><img src="/assets/images/resource/t02.webp" alt=""></figure>
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-quote"></i></div>
                                        <h4>AVS'nin Avantajları</h4>
                                        <p>Deneyimli profesyonellerden oluşan ekibimiz, haftanın yedi günü, günün her saati hizmetinizdedir ve her ihtiyacınıza hızlı ve verimli bir şekilde cevap vererek, gereksinimlerinize uygun hizmet teslimatını sağlar.</p>
                                        <h3>hizmetinizde, küresel olarak.</h3>
                                        <span class="designation">Güçlü Satın Alma Ortaklıkları</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-content">
                                <div class="testimonial-block-one">
                                    <figure class="thumb-box"><img src="/assets/images/resource/t03.webp" alt=""></figure>
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-quote"></i></div>
                                        <h4>AVS'nin Avantajları</h4>
                                        <p>Ekonomik alım gücümüzü kullanarak, her ay 800 ila 1200 teslimatı titizlikle yönetir, maliyetleri sürekli optimize ederek müşterilerimiz için maksimum değeri sağlarız.</p>
                                        <h3>hizmetinizde, küresel olarak.</h3>
                                        <span class="designation">Güçlü Satın Alma Ortaklıkları</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-content">
                                <div class="testimonial-block-one">
                                    <figure class="thumb-box"><img src="/assets/images/resource/t04.webp" alt=""></figure>
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-quote"></i></div>
                                        <h4>AVS'nin Avantajları</h4>
                                        <p>Her müşterinin özgün ihtiyaçlarını tam olarak karşılayacak özel çözümler sunarak, ekibimiz olağanüstü memnuniyet ve başarı sağlamak için gerekenin ötesine geçer.</p>
                                        <h3>hizmetinizde, küresel olarak.</h3>
                                        <span class="designation">Güçlü Satın Alma Ortaklıkları</span>
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
<!-- testimonial-section end -->


<!-- faq-section -->
<section class="faq-section sec-pad d-none d-md-block">
    <span class="big-text">Quality</span>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image"><img data-src="https://www.avsglobalsupply.com/assets/images/resource/vicky.jpg" class="lazyload" alt=""></figure>
                    <div class="btn-box">
                        <a href="https://www.linkedin.com/in/vasstamati/" class="theme-btn btn-one" target="_blank" rel="nofollow noopener">Vicky Stamati</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <span class="sub-title">Standartlarımız</span>
                        <h2>Ortaklarımız sıkı standartlara<br />uyar.</h2>
                    </div>
                    <ul class="accordion-box">
                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-box"><i class="flaticon-right-chevron"></i></div>
                                <h4>Gıda Kalitesi ve ISO Belgeleri</h4>
                            </div>
                            <div class="acc-content current">
                                <p>Gıda kalitesine öncelik veriyoruz, en yüksek güvenlik ve mükemmeliyet seviyelerini sağlamak için ISO standartlarına uyarız.
                                    ISO belgelerine olan bağlılığımız, dünya çapında müşterilerimize besleyici ve hijyenik yemekler sağlama konusundaki kararlılığımızı vurgular.</p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="flaticon-right-chevron"></i></div>
                                <h4>İşletme Lisansları</h4>
                            </div>
                            <div class="acc-content">
                                <p>AVS, tüm gerekli işletme lisanslarına sahiptir, endüstri düzenlemelerine ve standartlarına uygunluk sağlar.
                                    Geçerli işletme lisanslarımızla, müşterilerimiz hizmetlerimizin yasal gereksinimleri karşıladığına ve en iyi uygulamalara uygun olduğuna güvenebilirler.</p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="flaticon-right-chevron"></i></div>
                                <h4>ISSA, IMPA ve BIMCO Üyelikleri</h4>
                            </div>
                            <div class="acc-content">
                                <p>AVS, ISSA, IMPA ve BIMCO gibi saygın kuruluşlarda üyeliklerini gururla sürdürür, endüstri işbirliği ve mükemmeliyet konusundaki taahhüdümüzü yansıtır.
                                    ISSA, IMPA ve BIMCO üyeliklerimiz aracılığıyla, endüstri trendleri ve standartları hakkında güncel bilgilere sahip olarak müşterilerimize ve ortaklarımıza daha iyi hizmet etmek için çalışırız.</p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="flaticon-right-chevron"></i></div>
                                <h4>Performans Ölçütlerinin Değerlendirilmesi</h4>
                            </div>
                            <div class="acc-content">
                                <p>En yüksek hizmet kalitesi ve verimlilik standartlarını korumak için düzenli olarak performans ölçütlerini değerlendiriyoruz.
                                    Performans ölçütlerini değerlendirerek, işlerimizde sürekli olarak iyileşme ve mükemmeliyeti hedefler, müşteri memnuniyeti ve sadakatini sağlamak.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-section end -->

<!-- blog-section -->
<section class="news-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="sub-title">Blog</span>
            <h2>Son Blog ve Güncellemeler</h2>
        </div>
        <div class="row clearfix">
            <?php foreach ($data['data'] as $blog): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="upper-box">
                                <span class="category">Blog</span>
                                <ul class="post-info clearfix">
                                <?php
                                    $rawDate = !empty($blog['publish_date']) ? $blog['publish_date'] : $blog['createdAt'];
                                    $dateObj = new DateTime($rawDate, new DateTimeZone('UTC'));
                                    $dateObj->setTimezone(new DateTimeZone('Europe/Istanbul'));
                                    ?>
                                    <li><span>On</span> <?= $dateObj->format('M d, Y H:i') ?></li>
                                    <li><span>By</span> <?= htmlspecialchars($blog['author']['name'] ?? 'Yazar Bilinmiyor') ?></li>
                                </ul>
                            </div>
                            <div class="image-box">
                                <?php if (!empty($blog['cover']['url'])): ?>
                                    <figure class="image">
                                        <a href="blog-detay/<?= $blog['slug'] ?>">
                                            <img src="<?= $blog['cover']['url'] ?>" alt="<?= htmlspecialchars($blog['title']) ?>">
                                        </a>
                                    </figure>
                                    <div class="view-btn">
                                        <a href="<?= $blog['cover']['url'] ?>" class="lightbox-image" data-fancybox="gallery">
                                            <i class="flaticon-zoom-in"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="lower-box">
                                <h3><a href="blog-detay/<?= $blog['slug'] ?>"><?= htmlspecialchars($blog['title']) ?></a></h3>
                                <p><?= htmlspecialchars($blog['description'] ?? '') ?></p>
                                <div class="link">
                                    <a href="blog-detay/<?= $blog['slug'] ?>"><span>Explore More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- blog-section end -->

<!-- news-section -->
<section class="news-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="sub-title">Haberler</span>
            <h2>Son Haberler ve Güncellemeler</h2>
        </div>
        <div class="row clearfix">
            <?php foreach ($data_news['data'] as $blog): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="upper-box">
                                <span class="category">Haberler</span>
                                <ul class="post-info clearfix">
                                <?php
                                    $rawDate = !empty($blog['publish_date']) ? $blog['publish_date'] : $blog['createdAt'];
                                    $dateObj = new DateTime($rawDate, new DateTimeZone('UTC'));
                                    $dateObj->setTimezone(new DateTimeZone('Europe/Istanbul'));
                                    ?>
                                    <li><span>On</span> <?= $dateObj->format('M d, Y H:i') ?></li>
                                    <li><span>By</span> <?= htmlspecialchars($blog['author']['name'] ?? 'Yazar Bilinmiyor') ?></li>
                                </ul>
                            </div>
                            <div class="image-box">
                                <?php if (!empty($blog['cover']['url'])): ?>
                                    <figure class="image">
                                        <a href="haber-detay/<?= $blog['slug'] ?>">
                                            <img src="<?= $blog['cover']['url'] ?>" alt="<?= htmlspecialchars($blog['title']) ?>">
                                        </a>
                                    </figure>
                                    <div class="view-btn">
                                        <a href="<?= $blog['cover']['url'] ?>" class="lightbox-image" data-fancybox="gallery">
                                            <i class="flaticon-zoom-in"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="lower-box">
                                <h3><a href="haber-detay/<?= $blog['slug'] ?>"><?= htmlspecialchars($blog['title']) ?></a></h3>
                                <p><?= htmlspecialchars($blog['description'] ?? '') ?></p>
                                <div class="link">
                                    <a href="haber-detay/<?= $blog['slug'] ?>"><span>Explore More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- news-section end -->

<!-- appointment-section -->
<section class="appointment-section">
    <div class="outer-container sec-pad">
        <div class="image-layer"><img width="650" height="706" src="/assets/images/resource/cat-1.webp" alt=""></div>
        <div class="auto-container">
            <div class="sec-title light">
                <span class="sub-title">İletişime Geç</span>
                <h2>Bize mesaj gönderin</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="form-inner">
                            <form id="contact-form" class="default-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name *" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email *" required>
                                        </div>
                                        <div class="form-group" style="margin-bottom: 20px;">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="selectmenu" name="subject" required>
                                                    <option value="">Subject</option>
                                                    <option>Geleneksel Danışmanlık</option>
                                                    <option>Portföy Yönetimi</option>
                                                    <option>Varlık Dağılımı</option>
                                                    <option>Tedarik Talebi</option>
                                                    <option>Yemek Hizmeti Talebi</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" name="privacy-checkbox"> Gizlilik politikasını okudum*
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-two" id="sendMessage">Send Message</button>
                                        </div>
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="6LcEgg4rAAAAAGoVKdeSgPWfHwIhyAzj2RizOcK3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon-box"><i class="flaticon-customer-service"></i></div>
                        <ul class="info-list clearfix">
                            <li>
                                
                                <h4>7/24 Servis</h4>
                            </li>
                            <li>
                                <h6>Telefon</h6>
                                <h4><a href="tel:+902165910849">+90 (216) 591 0849</a></h4>
                            </li>
                            <li>
                                <h6>Email</h6>
                                <h4><a href="mailto:info@avsglobalsupply.com">info@avsglobalsupply.com</a></h4>
                            </li>
                        </ul>
                        <ul class="social-links clearfix">
                            <li><a href="https://www.linkedin.com/company/avsglobalsupply/" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/avsglobalsupply" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/avsglobalshipsupply/" target="_blank" rel="noopener"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/AvsGlobalSupply" target="_blank" rel="noopener"><i class="fa-brands fa-square-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC5RgbAXnzJWoLIN-oydGqQQ" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- appointment-section end -->
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const form = document.getElementById('contact-form');

        form.addEventListener('submit', function(e) {
            // sendMessage id li butonu disable et

            e.preventDefault();

            const formData = new FormData(form);

            if (!formData.get('privacy-checkbox')) {
                showToast('Lütfen gizlilik politikasını onaylayın.', 'error');

                return;
            }
            if (!formData.get('g-recaptcha-response')) {
                showToast('Lütfen reCAPTCHA doğrulamasını tamamlayın.', 'error');
                return;
            }
            const sendMessageButton = document.getElementById('sendMessage');
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
                    body: JSON.stringify({
                        data
                    })
                })
                .then(res => {
                    if (!res.ok) throw new Error('Gönderme başarısız');
                    sendMessageButton.disabled = false;
                    sendMessageButton.innerHTML = 'Send Message';
                    return res.json();
                })
                .then(resData => {
                    showToast('Mesajınız başarıyla gönderildi.', 'success');
                    sendMessageButton.disabled = false;
                    sendMessageButton.innerHTML = 'Send Message';
                    form.reset();
                })
                .catch(err => {
                    showToast('Mesaj gönderilemedi. Lütfen tekrar deneyin.', 'error');
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
<?php include 'footer.php'; ?>
