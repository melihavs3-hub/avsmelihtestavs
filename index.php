<?php
$title = "AVS Global Ship Supply & Management Services";
$description = "";
$preload_image = "assets/images/banner/banner-13.webp";
$canonical = "https://www.avsglobalsupply.com/";
$eng_link = "https://www.avsglobalsupply.com/";
$tr_link = "https://www.avsglobalsupply.com/tr/";
$sri_link ="https://www.avssrilanka.com/";
$gr_link ="https://www.avsgreece.gr/";
include 'header.php';

$query = [
    'pagination[page]' => 1,
    'pagination[pageSize]' => 3,
    'populate' => '*',
    'filters[webSites][$eq]' => 'EN',
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
    'filters[webSites][$eq]' => 'EN',
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
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "AVS Global Ship Supply",
  "alternateName": "AVS Global",
  "url": "https://www.avsglobalsupply.com",
  "logo": "https://www.avsglobalsupply.com/assets/images/avs-logo.png",
  "description": "AVS Global Ship Supply has been a global leader in marine chandlery, bonded stores, technical logistics, and maritime catering for over 39 years—serving over 1,500 ports worldwide with ISO-certified efficiency and full MLC 2006, IMO, SOLAS, IMPA, and MARPOL compliance.",
  "foundingDate": "1985",
  "founder": {
    "@type": "Person",
    "name": "Abdülvahit Şimşek"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Global"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Soganlik Yeni Mah., Pamukkale Sk. No:2, Kartal",
    "addressLocality": "Istanbul",
    "addressRegion": "TR",
    "postalCode": "34880",
    "addressCountry": "Turkey"
  },
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "contactType": "Customer Support",
      "telephone": "+90-216-591-0849",
      "email": "info@avsglobalsupply.com",
      "areaServed": "Worldwide",
      "availableLanguage": ["English", "Turkish", "Spanish", "Portuguese"]
    }
  ],
  "sameAs": [
    "https://www.linkedin.com/company/avsglobalsupply/",
    "https://www.instagram.com/avsglobalsupply",
    "https://www.facebook.com/avsglobalshipsupply/",
    "https://www.youtube.com/@avsglobalsupply"
  ],
  "hasMap": "https://maps.app.goo.gl/DkZx8AJNrkzD3kF2A",
  "knowsAbout": [
  {
    "@type": "Thing",
    "name": "Ship chandlery",
    "sameAs": "https://en.wikipedia.org/wiki/Ship_chandler"
  },
  {
    "@type": "Thing",
    "name": "Bonded warehouse",
    "sameAs": "https://en.wikipedia.org/wiki/Bonded_warehouse"
  },
  {
    "@type": "Thing",
    "name": "Marine provisions"
  },
  {
    "@type": "Thing",
    "name": "Logistics",
    "sameAs": "https://en.wikipedia.org/wiki/Logistics"
  },
  {
    "@type": "Thing",
    "name": "Safety equipment",
    "sameAs": "https://en.wikipedia.org/wiki/Personal_protective_equipment"
  },
  {
    "@type": "Thing",
    "name": "Maritime transport",
    "sameAs": "https://en.wikipedia.org/wiki/Maritime_transport"
  }
]
}
</script>

<style>
@media (max-width: 767px) {
    .banner-section .slide-item {
        min-height: 85vh !important; 
        display: flex;
        align-items: center;
        padding-top: 80px; 
    }
    .banner-section .content-box {
        padding: 0 15px !important;
        text-align: center !important; 
        width: 100% !important;
    }
    .banner-section .content-box h2 {
        font-size: 36px !important; 
        line-height: 1.2 !important;
        margin-bottom: 20px !important;
    }
    .banner-section .content-box h2 span {
        display: block; 
    }
    .banner-section .lower-box {
        margin-top: 15px !important;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .banner-section .lower-box .icon-box {
        margin-bottom: 15px !important;
        position: static !important; 
    }
    .banner-section .lower-box .text {
        font-size: 16px !important; 
        padding-left: 0 !important;
        margin-bottom: 25px !important;
    }
    .banner-section .theme-btn {
        width: 100%;
        max-width: 300px;
    }
}
</style>
<style>

.banner-section, 
.banner-section .banner-carousel, 
.banner-section .owl-stage-outer, 
.banner-section .owl-stage, 
.banner-section .slide-item {
    height: 100vh !important;
    min-height: 500px !important;
    position: relative;
    overflow: hidden;
}

.banner-section .slide-item {
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

<section class="banner-section">
    <div class="banner-carousel owl-theme owl-carousel">
        <div class="slide-item">
            <div class="image-layer lazyload" style="background-image:url(assets/images/banner/banner-13.webp)">
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Global <span>Ship</span> Supply</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">We provide ship owners and ship management companies in more than 126
                            countries.</div>
                        <a href="https://www.avsglobalsupply.com/services/globalsupply" class="theme-btn btn-two">Global Ship
                            Supply</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer lazyload" style="background-image:url(assets/images/banner/banner-15.webp)">
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Catering <span>& Provision</span> Management</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">We carry out provision services for ship owners and ship management companies
                            within an agreed budget.</div>
                        <a href="https://www.avsglobalsupply.com/services/provision" class="theme-btn btn-two">Catering &
                            Provision Management</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(assets/images/banner/banner-16.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Technical <span>Stores</span> Management</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">We manage general consumables using our software, which enables for smooth
                            ordering processes around the world to keep vessels on budget.</div>
                        <a href="tsm" class="theme-btn btn-two">Technical Stores Management</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(assets/images/banner/banner-17.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Technical <span>Services</span> </h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">We provide essential technical services to enhance equipment efficiency and
                            reduce downtime for global ship operations.</div>
                        <a href="https://www.avsglobalsupply.com/services/technical" class="theme-btn btn-two">Technical
                            Services</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(assets/images/banner/banner-18.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>On/Offshore <span>Catering</span>Services</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">"We enhance offshore and onshore environments with AVS Catering and Facilities
                            Services, providing high-quality, diverse cuisine and comprehensive support to boost crew
                            comfort, health, and satisfaction.</div>
                        <a href="https://www.avsglobalsupply.com/services/onoffshore" class="theme-btn btn-two">On/Offshore
                            Catering Services</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(assets/images/banner/banner-19.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Food <span>Trading</span></h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">We enrich your culinary offerings by delivering diverse, high-quality,
                            sustainable global flavors with efficient logistics and expert food trade consulting.</div>
                        <a href="https://www.avsglobalsupply.com/services/food-trading" class="theme-btn btn-two">Food Trading</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(assets/images/banner/banner-20.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Logistics<span>& Customs</span>Services</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">We streamline your logistics and customs, ensuring timely and hassle-free
                            delivery of your shipments with comprehensive freight, warehousing, and clearance support.
                        </div>
                        <a href="https://www.avsglobalsupply.com/services/logistics" class="theme-btn btn-two">Logistics &
                            Customs Services</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url(assets/images/banner/banner-21.webp)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>EKOL<span>Seafarer</span>Education</h2>
                    <div class="lower-box">
                        <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                        <div class="text">Enhance your crew's skills with EKOL Maritime Training Centre, offering over
                            650 seafarers access to 120 accredited courses for comprehensive maritime training and
                            global compliance.</div>
                        <a href="https://www.avsglobalsupply.com/services/education" class="theme-btn btn-two">Seafarer
                            Education</a>
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
<!-- End ISO Certifications Section -->

<!-- about-section -->
<section class="about-section sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <div class="image-shape">
                        <div class="shape-1" style="background-image: url(assets/images/shape/shape-1.webp);"></div>
                        <div class="shape-2" style="background-image: url(assets/images/shape/shape-2.webp);"></div>
                        <div class="shape-3" style="background-image: url(assets/images/shape/shape-3.webp);"></div>
                    </div>
                    <figure class="image"><img width="450" height="450" src="assets/images/resource/about-1.webp"
                            alt="AVS Flag"></figure>
                    <div class="experience-box">
                        <h2>39</h2>
                        <h6>years Experience</h6>
                    </div>
                    <div class="circle-box">
                        <span class="curved-circle">Navigating maritime complexities</span>
                        <span class="curved-circle-2">Boosting global seafarer life</span>
                        <span class="curved-circle-3">Commitment to excellence</span>
                        <span class="curved-circle-4">Empower maritime journeys</span>
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
                        <span class="sub-title">Our network</span>
                        <h2>Source of our unmatched purchasing power</h2>
                    </div>
                    <ul class="list-item clearfix">
                        <li>A strong network</li>
                        <li>Impeccable purchasing power</li>
                        <li>The capacity to reach anywhere with one single contact point</li>
                        <li>Cost-effective solutions for ship owners and ship managers</li>
                    </ul>
                    <div class="text-box">
                        <p>The relationships we have established with suppliers, distributors and manufacturers have
                            helped us create a powerful network based on trust and mutual benefit.</p>
                    </div>
                    <div class="btn-box">
                        <a href="https://www.avsglobalsupply.com/company" class="theme-btn btn-two">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- video-section -->
<section class="video-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.webp);"></div>
    <div class="outer-container">
        <div class="auto-container">
            <div class="funfact-inner">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-5.webp" alt=""></div>
                                <div class="light-icon"><img src="assets/images/icons/icon-6.webp" alt=""></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="8700">0</span><span
                                        class="text">Daily Meal</span>
                                </div>
                                <p>Taste, Cleanliness and Safety.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 consultation-block">
                        <div class="consultation-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-searching"></i></div>
                                <h3><a href="https://www.avsglobalsupply.com/services/onoffshore">Catering Services</a></h3>
                                <p>On/Offshore Catering & Services</p>
                                <div class="link"><a href="https://www.avsglobalsupply.com/services/onoffshore"><span>More
                                            Details</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-inner">
            <div class="bg-layer" style="background-image: url(assets/images/background/video-bg.webp);"></div>
            <div class="btn-box">
                <a href="https://youtu.be/MNta7NWHTpc&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i
                        class="flaticon-play-button"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- video-section end -->

<!-- service-section -->
<section class="service-section">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-5.webp);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-6.webp);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="sub-title">Our Services</span>
            <h2>Fast, Efficient, Reliable, Sustainable</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
            <div class="service-block-one block-one">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-analytics"></i></div>
                        <span class="count-text">01</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/services/globalsupply">Global<br />Ship Supply</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/services/globalsupply"><span>Explore
                                Service</span></a></div>
                    <p>We offer our clients the convenience of a single contact point for handling all their requests,
                        at numerous ports</p>
                </div>
            </div>
            <div class="service-block-one block-two">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-office-building"></i></div>
                        <span class="count-text">02</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/services/provision">Catering<br />& Provision Management</a>
                    </h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/services/provision"><span>Explore
                                Service</span></a></div>
                    <p>We offer provision services within budget, managing onboard stock with our Provision Management
                        software.</p>
                </div>
            </div>
            <div class="service-block-one block-three">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-retirement"></i></div>
                        <span class="count-text">03</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/services/tsm">Technical<br />Stores Management</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/services/tsm"><span>Explore Service</span></a>
                    </div>
                    <p>We streamline global ordering of essential consumables with our software, efficiently keeping
                        vessels on budget.</p>
                </div>
            </div>
            <div class="service-block-one block-one">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-analytics"></i></div>
                        <span class="count-text">04</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/services/technical">Technical<br />Services</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/services/technical"><span>Explore
                                Service</span></a></div>
                    <p>We ensure seamless operations with spare parts, repair, and reconditioning, optimizing machinery
                        for maritime needs.</p>
                </div>
            </div>
            <div class="service-block-one block-two">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-office-building"></i></div>
                        <span class="count-text">05</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/services/onoffshore">On/Offshore Catering<br />& Services</a>
                    </h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/services/onoffshore"><span>Explore
                                Service</span></a></div>
                    <p>We elevate offshore and onshore environments with superior catering and facilities, ensuring crew
                        well-being and productivity.</p>
                </div>
            </div>
            <div class="service-block-one block-three">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-retirement"></i></div>
                        <span class="count-text">06</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/services/food-trading">Food<br />Trading</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/services/food-trading"><span>Explore Service</span></a>
                    </div>
                    <p>We deliver global flavors directly to you, ensuring high-quality, diverse food products with a
                        focus on sustainability and reliability.</p>
                </div>
            </div>
            <div class="service-block-one block-one">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-analytics"></i></div>
                        <span class="count-text">07</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/services/logistics">Logistics<br />& Customs Services</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/services/logistics"><span>Explore
                                Service</span></a></div>
                    <p>We streamline your logistics and customs, ensuring seamless goods movement and strategic growth
                        support.</p>
                </div>
            </div>
            <div class="service-block-one block-two">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-office-building"></i></div>
                        <span class="count-text">08</span>
                    </div>
                    <h3><a href="https://www.avsglobalsupply.com/services/education">EKOL<br />Seafarer Education</a></h3>
                    <div class="link"><a href="https://www.avsglobalsupply.com/services/education"><span>Explore
                                Service</span></a></div>
                    <p>We elevate maritime careers with our seafarer education, enhancing safety, efficiency, and
                        professional growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-section end -->


<!-- growth-section -->
<section class="growth-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-7.webp);"></div>
    <div class="auto-container">
        <div class="growth-inner">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <figure class="image-box"><img data-src="assets/images/resource/growth-1.webp" class="lazyload"
                                alt="a Chef at AVS Catering"></figure>
                        <div class="sec-title light">
                            <span class="sub-title">Catering Services</span>
                            <h2>Sailing Beyond Taste,<br />Docking <br />at Excellence</h2>
                        </div>
                        <div class="text-box">
                            <p>Superior catering with global flavors, <br />unmatched quality everywhere.</p>
                            <a href="https://www.avsglobalsupply.com/services/onoffshore" class="theme-btn btn-two"><span>Read
                                    More</span></a>
                        </div>
                        <div class="progress-box">
                            <h5>Person who consumes daily food</h5>
                            <div class="progress-inner">
                                <h5>3422</h5>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="60%"></div>
                                    <div class="count-text">on the upgrade</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                    <div class="growth-content">
                        <div class="growth-block-one">
                            <div class="inner-box">
                                <h3><a href="https://www.avsglobalsupply.com/services/onoffshore">On/Offshore Catering</a></h3>
                                <p>AVS Catering's kitchen is filled with fresh ingredients, each carefully selected.
                                </p>
                                <div class="icon-box"><i class="flaticon-development"></i></div>
                                <div class="link-box"><a href="https://www.avsglobalsupply.com/services/onoffshore"><span>Read
                                            More</span></a></div>
                            </div>
                        </div>
                        <div class="growth-block-one">
                            <div class="inner-box">
                                <h3><a href="https://www.avsglobalsupply.com/services/onoffshore">Remote Camps</a></h3>
                                <p>Our Remote Catering delivers tasty meals, making teams feel home.</p>
                                <div class="icon-box"><i class="flaticon-strategy"></i></div>
                                <div class="link-box"><a href="https://www.avsglobalsupply.com/services/onoffshore"><span>Read
                                            More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients-section">
            <ul class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <li>
                    <figure class="clients-logo"><a href="https://shipsupply.org/" target="_blank"
                            rel="nofollow noopener"><img src="assets/images/clients/a1.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://impa.net/" target="_blank"
                            rel="nofollow noopener"><img src="assets/images/clients/a2.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://www.bimco.org/" target="_blank"
                            rel="nofollow noopener"><img src="assets/images/clients/a3.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://www.turssa.org/" target="_blank"
                            rel="nofollow noopener"><img src="assets/images/clients/a4.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://www.seaproc.com/" target="_blank"
                            rel="nofollow noopener"><img src="assets/images/clients/a5.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://shippalm.synergymarinegroup.com/shippalm/"
                            target="_blank" rel="nofollow noopener"><img src="assets/images/clients/a6.webp" alt=""></a>
                    </figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://www.shipserv.com/" target="_blank"
                            rel="nofollow noopener"><img src="assets/images/clients/a7.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://mespas.com/" target="_blank"
                            rel="nofollow noopener"><img src="assets/images/clients/a8.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://procureship.com/" target="_blank"
                            rel="nofollow noopener"><img src="assets/images/clients/a9.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://econnect.mariapps.com/" target="_blank"
                            rel="nofollow noopener"><img src="assets/images/clients/a10.webp" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://unglobalcompact.org/" target="_blank"
                            rel="nofollow noopener"><img src="assets/images/clients/a11.png" alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="https://gen-pro.com/" target="_blank"
                            rel="nofollow noopener"><img src="assets/images/clients/genpro.png" alt=""></a></figure>
                </li>
            </ul>
            <div class="more-text centred">
                <h5>Explore our network: Proud members of esteemed industry organizations.<a
                        href="https://www.avsglobalsupply.com/company"><i class="flaticon-right-chevron"></i>The
                        Company</a></h5>
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
            <span class="sub-title">at your service, globally</span>
            <h2>1500+ Ports in 126 Countries</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-12 left-column">
                <div class="inner-content">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-knowledge"></i></div>
                            <div class="static-content">
                                <h3>The Company</h3>
                                <p>As a global ship supply leader, we address maritime</p>
                            </div>
                            <div class="overlay-content">
                                <a href="https://www.avsglobalsupply.com/company">
                                    <p>As a global ship supply leader, we address maritime needs swiftly with deep
                                        expertise and a focus on client satisfaction.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-united"></i></div>
                            <div class="static-content">
                                <h3>Timeline</h3>
                                <p>We've grown through decades of maritime excellence,</p>
                            </div>
                            <div class="overlay-content">
                                <p>We've grown through decades of maritime excellence, continuously adapting to and
                                    serving the global industry's needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-clock"></i></div>
                            <div class="static-content">
                                <h3>Management</h3>
                                <p>Our vision unites global maritime service with innovation,</p>
                            </div>
                            <div class="overlay-content">
                                <p>Our vision unites global maritime service with innovation, reflecting our commitment
                                    to excellence in a borderless world.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image"><img data-src="assets/images/resource/chooseus-1.webp" class="lazyload"
                            alt="the World Photo from the Space"></figure>
                    <div class="image-shape"><img src="assets/images/shape/shape-8.webp" alt=""></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 right-column">
                <div class="inner-content">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-risk-management"></i></div>
                            <div class="static-content">
                                <h3>Our Team</h3>
                                <p>Our team combines expertise and passion</p>
                            </div>
                            <div class="overlay-content">
                                <p>Our team combines expertise and passion to drive maritime excellence, ensuring
                                    seamless service globally.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-monitor"></i></div>
                            <div class="static-content">
                                <h3>Partners</h3>
                                <p>The partners of AVS are a big source of strength,</p>
                            </div>
                            <div class="overlay-content">
                                <p>The partners of AVS are a big source of strength, when it comes to variety and
                                    proficiency of service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-advice"></i></div>
                            <div class="static-content">
                                <h3>Career</h3>
                                <p>Join us at AVS to become part of our powerful,</p>
                            </div>
                            <div class="overlay-content">
                                <p>Join us at AVS to become part of our powerful, progressive team, shaping the future
                                    of maritime services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-section end -->


<section class="industries-section d-none d-md-block">
    <div class="outer-container">
        <div class="bg-layer" style="background-image: url(assets/images/background/industries-bg.webp);"></div>
        <div class="auto-container">
            <div class="tabs-box">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title light">
                                <span class="sub-title">Green Today, Greener Tomorrow</span>
                                <h2>Sustainability</h2>
                            </div>
                            <div class="tab-btns tab-buttons clearfix">
                                <div class="tab-btn active-btn" data-tab="#tab-1">
                                    <span class="count-text">01</span>
                                    <h3>Eco-friendly Operations</h3>
                                    <a href="sustainability"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                                <div class="tab-btn" data-tab="#tab-2">
                                    <span class="count-text">02</span>
                                    <h3>Supply Chain Management</h3>
                                    <a href="sustainability"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                                <div class="tab-btn" data-tab="#tab-3">
                                    <span class="count-text">03</span>
                                    <h3>Digital Innovation</h3>
                                    <a href="sustainability"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                                <div class="tab-btn" data-tab="#tab-4">
                                    <span class="count-text">04</span>
                                    <h3>Education and Training</h3>
                                    <a href="sustainability"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                                <div class="tab-btn" data-tab="#tab-5">
                                    <span class="count-text">05</span>
                                    <h3>Environmental Initiatives</h3>
                                    <a href="sustainability"><i class="flaticon-diagonal-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <h3>Eco-friendly Operations</h3>
                                    <p>We minimize environmental impact through smarter operations, waste reduction, and
                                        energy-saving practices across our global operations.</p>
                                    <ul class="list-item clearfix">
                                        <li>Smart operations for less impact.</li>
                                        <li>Global waste reduction and energy savings. </li>
                                    </ul>
                                    <a href="sustainability" class="theme-btn btn-two">Explore More</a>
                                </div>
                            </div>
                            <div class="tab" id="tab-2">
                                <div class="inner-box">
                                    <h3>Supply Chain Management</h3>
                                    <p>Our partnerships are chosen with care, prioritizing suppliers who stand with us
                                        in our sustainability journey.</p>
                                    <ul class="list-item clearfix">
                                        <li>Partnerships aligned with sustainability goals.</li>
                                        <li>Suppliers supporting our sustainability journey.</li>
                                    </ul>
                                    <a href="sustainability" class="theme-btn btn-two">Explore More</a>
                                </div>
                            </div>
                            <div class="tab" id="tab-3">
                                <div class="inner-box">
                                    <h3>Digital Innovation</h3>
                                    <p>We are committed to adopting advanced technologies and solutions that promote
                                        eco-friendliness and sustainability.</p>
                                    <ul class="list-item clearfix">
                                        <li>Embracing eco-tech for sustainability.</li>
                                        <li>Advancing for a greener future.</li>
                                    </ul>
                                    <a href="sustainability" class="theme-btn btn-two">Explore More</a>
                                </div>
                            </div>
                            <div class="tab" id="tab-4">
                                <div class="inner-box">
                                    <h3>Education and Training</h3>
                                    <p>Empowerment through knowledge is a key step towards a greener future. Our
                                        educational programs are here to enlighten our workforce and clients.</p>
                                    <ul class="list-item clearfix">
                                        <li>Empowering with education for greener futures.</li>
                                        <li>Enlightening programs for workforce and clients.</li>
                                    </ul>
                                    <a href="sustainability" class="theme-btn btn-two">Explore More</a>
                                </div>
                            </div>
                            <div class="tab" id="tab-5">
                                <div class="inner-box">
                                    <h3>Environmental Initiatives</h3>
                                    <p>We are an active participant in projects that protect and preserve marine
                                        ecosystems and promote sustainable development.</p>
                                    <ul class="list-item clearfix">
                                        <li>Active in projects for marine ecosystem protection.</li>
                                        <li>Promoting sustainable development through action.</li>
                                    </ul>
                                    <a href="sustainability" class="theme-btn btn-two">Explore More</a>
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
            <span class="sub-title">AVS: Sailing Through Time</span>
            <h2>Navigating Excellence Since 1985</h2>
        </div>
        <div class="inner-content">
            <div class="shape" style="background-image: url(assets/images/shape/shape-9.webp);"></div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                    <div class="working-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/working-1.webp" alt=""></figure>
                                <div class="icon-box"><i class="flaticon-meeting"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3>Origin</h3>
                                <p>Established as a local supplier in Izmir.</p>
                                <h2>1985 <span>Local</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                    <div class="working-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/working-2.webp" alt=""></figure>
                                <div class="icon-box"><i class="flaticon-paper"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3>Expansion</h3>
                                <p>AVS Global Supply established to serve clients all over the world.</p>
                                <h2>2001 <span>Global</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                    <div class="working-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/working-3.webp" alt=""></figure>
                                <div class="icon-box"><i class="flaticon-analysis"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3>Partnership</h3>
                                <p>Nordic Hamburg Shipmanagement GmbH & Co. KG acquired a stake in AVS. </p>
                                <h2>2022 <span>Equity</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-text centred">
            <h5>Explore Our Journey: Discover AVS Through Time. <a href="https://www.avsglobalsupply.com/timeline"><i
                        class="flaticon-right-chevron"></i>The Timeline</a></h5>
        </div>
    </div>
</section>
<!-- working-section end -->


<!-- project-section -->
<section class="project-section">
    <div class="auto-container" style="max-width:1600px!important">
        <div class="sec-title">
            <span class="sub-title">Visual Adventure</span>
            <h2>Get to Know Our Business</h2>
        </div>
        <div class="project-tab">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="p-tabs-content">
                        <div class="p-tab active-tab" id="tab-5">
                            <div class="four-item-carousel owl-carousel owl-theme">
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523"
                                                src="assets/images/project/project-1.webp" class="lazyload"
                                                alt="a woman with AVS chef apron"></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523"
                                                src="assets/images/project/project-2.webp" class="lazyload"
                                                alt="a technician who performs technical repairs outside a ship">
                                        </figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523"
                                                src="assets/images/project/project-3.webp" class="lazyload"
                                                alt="a technician who performs technical repairs inside a ship">
                                        </figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523"
                                                src="assets/images/project/project-4.webp" class="lazyload"
                                                alt="an employee ready for ship supply supply"></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523"
                                                src="assets/images/project/project-a5.webp" class="lazyload"
                                                alt="an AVS chef preparing food on board"></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523"
                                                src="assets/images/project/project-a6.webp" class="lazyload"
                                                alt="AVS chef serving his wonderful meat dish"></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523"
                                                data-src="assets/images/project/project-a7.webp" class="lazyload"
                                                alt="An AVS chef who prepares meals for the ship's crew"></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523"
                                                src="assets/images/project/project-a8.webp" class="lazyload"
                                                alt="AVS helmet behind a great looking dessert"></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523"
                                                src="assets/images/project/project-a9.webp" class="lazyload"
                                                alt="An AVS chef who puts the sauce on his wonderful meal"></figure>
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img width="412" height="523"
                                                src="assets/images/project/project-a10.webp" class="lazyload"
                                                alt="An AVS chef decorating his wonderful dessert"></figure>
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
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-11.webp);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title light">
                        <span class="sub-title">Our Network</span>
                        <h2>Source of Our Purchasing Power</h2>
                    </div>
                    <div class="inner-box">
                        <div class="single-item">
                            <div class="icon-box"><img src="assets/images/icons/icon-7.webp" alt=""></div>
                            <h5>The relationships we have established with suppliers, distributors and manufacturers
                                have helped us create a powerful network based on trust and mutual benefit.</h5>
                        </div>
                        <div class="tag">Excellent Service</div>
                    </div>
                    <div class="link">
                        <a href="https://www.avsglobalsupply.com/advantage"><span>Read All Advantages</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                <div class="testimonial-content">
                    <div class="testimonial-slider">
                        <div class="bxslider">
                            <div class="slider-content">
                                <div class="testimonial-block-one">
                                    <figure class="thumb-box"><img src="assets/images/resource/t01.webp" alt="">
                                    </figure>
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-quote"></i></div>
                                        <h4>Benefits of AVS</h4>
                                        <p>Global network spans 1,500+ ports across 126 countries, ensuring
                                            comprehensive coverage even in the most remote corners of the world,
                                            facilitating seamless connectivity for all maritime operations.</p>
                                        <h3>at your service, globally.</h3>
                                        <span class="designation">Powerful Procurement Partnerships</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-content">
                                <div class="testimonial-block-one">
                                    <figure class="thumb-box"><img src="assets/images/resource/t02.webp" alt="">
                                    </figure>
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-quote"></i></div>
                                        <h4>Benefits of AVS</h4>
                                        <p>Our team of seasoned professionals, dedicated and available round-the-clock,
                                            stands ready to cater to your every need, ensuring prompt and efficient
                                            service delivery tailored to your requirements.</p>
                                        <h3>at your service, globally.</h3>
                                        <span class="designation">Powerful Procurement Partnerships</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-content">
                                <div class="testimonial-block-one">
                                    <figure class="thumb-box"><img src="assets/images/resource/t03.webp" alt="">
                                    </figure>
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-quote"></i></div>
                                        <h4>Benefits of AVS</h4>
                                        <p>Leveraging our economical purchasing power, we meticulously manage 800 to
                                            1200 deliveries each month, continuously optimizing costs to maximize value
                                            for our clients.</p>
                                        <h3>at your service, globally.</h3>
                                        <span class="designation">Powerful Procurement Partnerships</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-content">
                                <div class="testimonial-block-one">
                                    <figure class="thumb-box"><img src="assets/images/resource/t04.webp" alt="">
                                    </figure>
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-quote"></i></div>
                                        <h4>Benefits of AVS</h4>
                                        <p>Tailoring bespoke solutions to precisely match the distinct needs of every
                                            client, our team goes above and beyond to ensure unparalleled satisfaction
                                            and success.</p>
                                        <h3>at your service, globally.</h3>
                                        <span class="designation">Powerful Procurement Partnerships</span>
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
<section class="faq-section sec-pad">
    <span class="big-text">Quality</span>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column d-none d-md-block" style="margin-top: 100px;">
    <div class="image-box">
        <figure class="image">
            <img style="width: 75%;" data-src="assets/images/resource/vicky.jpg" class="lazyload" alt="">
        </figure>
        <div class="btn-box">
            <a href="https://www.linkedin.com/in/vasstamati/" class="theme-btn btn-one" target="_blank" rel="nofollow noopener">Vicky Stamati</a>
        </div>
    </div>
</div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <span class="sub-title">Our Standards </span>
                        <h2>Committed to Excellence<br /> and Compliance.</h2>
                    </div>
                    <ul class="accordion-box">
                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-box"><i class="flaticon-right-chevron"></i></div>
                                <h4>Food Quality and ISO Certifications</h4>
                            </div>
                            <div class="acc-content current">
                                <p>We prioritize food quality, adhering to ISO standards to ensure the highest levels of
                                    safety and excellence in our culinary offerings.
                                    Our commitment to ISO certifications underscores our dedication to providing
                                    nutritious and hygienic meals to our clients worldwide.</p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="flaticon-right-chevron"></i></div>
                                <h4>Operating Licenses</h4>
                            </div>
                            <div class="acc-content">
                                <p>AVS holds all necessary operating licenses, ensuring compliance with industry
                                    regulations and standards.
                                    With our valid operating licenses, clients can trust that our services meet legal
                                    requirements and adhere to best practices.</p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="flaticon-right-chevron"></i></div>
                                <h4>Memberships in ISSA, IMPA, and BIMCO</h4>
                            </div>
                            <div class="acc-content">
                                <p>AVS proudly maintains memberships in esteemed organizations like ISSA, IMPA, and
                                    BIMCO, reflecting our commitment to industry collaboration and excellence.
                                    Through our memberships in ISSA, IMPA, and BIMCO, we stay updated on industry trends
                                    and standards to better serve our clients and partners.</p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="flaticon-right-chevron"></i></div>
                                <h4>Evaluation of Performance Metrics</h4>
                            </div>
                            <div class="acc-content">
                                <p>We regularly assess performance metrics to maintain the highest standards of service
                                    quality and efficiency.
                                    By evaluating performance metrics, we continuously strive for improvement and
                                    excellence in our operations, ensuring client satisfaction and loyalty.</p>
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
            <h2>Latest Blog and Updates</h2>
        </div>
        <div class="row clearfix">
            <?php  foreach ($data['data'] as $blog): ?>
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
                                        <a href="blog-detail/<?= $blog['slug'] ?>">
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
                                <h3><a href="blog-detail/<?= $blog['slug'] ?>"><?= htmlspecialchars($blog['title']) ?></a></h3>
                                <p><?= htmlspecialchars($blog['description'] ?? '') ?></p>
                                <div class="link">
                                    <a href="blog-detail/<?= $blog['slug'] ?>"><span>Explore More</span></a>
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
            <span class="sub-title">News</span>
            <h2>Latest News and Updates</h2>
        </div>
        <div class="row clearfix">
            <?php  foreach ($data_news['data'] as $blog): ?>
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
                                        <a href="news-detail/<?= $blog['slug'] ?>">
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
                                <h3><a href="news-detail/<?= $blog['slug'] ?>"><?= htmlspecialchars($blog['title']) ?></a></h3>
                                <p><?= htmlspecialchars($blog['description'] ?? '') ?></p>
                                <div class="link">
                                    <a href="news-detail/<?= $blog['slug'] ?>"><span>Explore More</span></a>
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
<!-- appointment-section -->
<section class="appointment-section">
    <div class="outer-container sec-pad">
        <div class="auto-container">
            <div class="sec-title light">
                <span class="sub-title">Contact Us</span>
                <h2>Send us your message</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="form-inner">
                            <!-- generalform.php -->
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
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="privacy-checkbox"> <a href="/kvkk"> I have read the privacy policy*</a>
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
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                            <div class="inner-box">
                                <div class="shape"></div>
                                <div class="icon-box"><i class="flaticon-customer-service"></i></div>
                                <ul class="info-list clearfix">
                                    <li>
                                        <h4>24/7 Service</h4>
                                    </li>
                                    <li>
                                        <h6>Phone</h6>
                                        <h4><a href="tel:+902165910849">+90 (216) 591 0849</a></h4>
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

<script>
 document.addEventListener('DOMContentLoaded', function () {
        
        const form = document.getElementById('contact-form');

        form.addEventListener('submit', function (e) {
            // sendMessage id li butonu disable et
          
            e.preventDefault();

            const formData = new FormData(form);

            if (!formData.get('privacy-checkbox')) {
                showToast('Pleas ead the privacy policy', 'error');
                
                return;
            }
            if (!formData.get('g-recaptcha-response')) {
                showToast('Please complete the reCAPTCHA operation.', 'error');
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
<!-- appointment-section end -->

<?php include 'footer.php'; ?>
