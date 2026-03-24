<?php
// SEO Meta Tags
$seo_title = "Ship Supply for Cruise Ships | Premium Cruise Operations | AVS Global Supply";
$seo_description = "Premium ship supply services for cruise ships and passenger vessels. High-quality provisions, catering management, and specialized services for cruise operations worldwide.";
$seo_keywords = "cruise ship supply, cruise vessel provisions, cruise ship catering, passenger ship supply, cruise operations";

// Open Graph Tags
$og_title = "Ship Supply for Cruise Ships | AVS Global Supply";
$og_description = "Premium ship supply services for cruise ships with high-quality provisions and specialized catering management.";
$og_image = "https://www.avsglobalsupply.com/assets/images/cruise-ships-og.jpg";
$og_type = "website";

// Canonical & Hreflang
$canonical = "https://www.avsglobalsupply.com/cruise-ships";
$eng_link = "https://www.avsglobalsupply.com/cruise-ships";
$tr_link = "https://www.avsglobalsupply.com/tr/cruise-ships";

// Custom JS for SEO
$custom_js = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://www.avsglobalsupply.com/#organization",
      "name": "AVS Global Supply",
      "url": "https://www.avsglobalsupply.com",
      "email": "info@avsglobalsupply.com",
      "telephone": "+90 216 591 0849",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Soganlik Yeni Mah, Pamukkale Sk. No:2",
        "postalCode": "34880",
        "addressLocality": "Kartal",
        "addressRegion": "Istanbul",
        "addressCountry": "TR"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://www.avsglobalsupply.com/#website",
      "url": "https://www.avsglobalsupply.com",
      "name": "AVS Global Supply",
      "inLanguage": "en"
    },
    {
      "@type": "WebPage",
      "@id": "https://www.avsglobalsupply.com/cruise-ships#webpage",
      "url": "https://www.avsglobalsupply.com/cruise-ships",
      "name": "Ship Supply for Cruise Ships | Premium Cruise Operations | AVS Global Supply",
      "inLanguage": "en",
      "isPartOf": { "@id": "https://www.avsglobalsupply.com/#website" },
      "about": { "@id": "https://www.avsglobalsupply.com/cruise-ships#service" },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "https://www.avsglobalsupply.com/assets/img/cruise-ship.jpg"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.avsglobalsupply.com/cruise-ships#breadcrumbs",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.avsglobalsupply.com/" },
        { "@type": "ListItem", "position": 2, "name": "Cruise Ships", "item": "https://www.avsglobalsupply.com/cruise-ships" }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.avsglobalsupply.com/cruise-ships#service",
      "name": "Ship Supply for Cruise Ships (Cruise Ship Supplier & Chandler) - AVS Global Supply",
      "description": "AVS Global Supply provides premium ship supply services for cruise ships worldwide—supporting luxury cruise operations with high-quality provisions, guest amenities, housekeeping and sanitation supplies, technical stores, spare parts, deck & engine essentials, entertainment items, and retail/duty-free goods. Designed for fast port turnarounds and high hospitality standards, our cruise ship supply process covers detailed requirements intake, premium sourcing, rigorous quality control, and professional delivery to meet the expectations of modern cruise guests and crew. With global coverage across 1,500+ ports in 126 countries and a 24-hour quote turnaround, AVS helps cruise operators protect guest satisfaction, compliance, and operational continuity.",
      "inLanguage": "en",
      "provider": { "@id": "https://www.avsglobalsupply.com/#organization" },
      "serviceType": [
        "Cruise ship supplier",
        "Cruise ship supply",
        "Cruise ship chandler",
        "Cruise ship stores supplier",
        "Guest experience supply partner",
        "Premium provisions supply for cruise ships",
        "Technical stores supply for cruise ships"
      ],
      "category": [
        "Ship Supply",
        "Marine Provisions",
        "Marine Chandlery",
        "Technical Stores",
        "Cruise Operations Support"
      ],
      "areaServed": "Worldwide",
      "audience": {
        "@type": "BusinessAudience",
        "audienceType": [
          "Cruise ship owners",
          "Cruise ship operators",
          "Fleet managers",
          "Marine procurement & purchasing teams",
          "Hotel operations & hospitality teams"
        ]
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Cruise Ship Supply Categories",
        "itemListElement": [
          { "@type": "OfferCatalog", "name": "Food & Beverage (Premium meats, seafood, produce, dairy, gourmet, bakery)" },
          { "@type": "OfferCatalog", "name": "Guest Amenities (Toiletries, linens, bathrobes, slippers, welcome packs)" },
          { "@type": "OfferCatalog", "name": "Housekeeping (Cleaning, laundry, disinfectants, paper products, eco options)" },
          { "@type": "OfferCatalog", "name": "Deck & Engine (Technical stores, spare parts, lubricants, safety, navigation)" },
          { "@type": "OfferCatalog", "name": "Entertainment (Events, decorations, sports/pool supplies, activity materials)" },
          { "@type": "OfferCatalog", "name": "Retail & Duty-Free (Branded goods, souvenirs, jewelry, cosmetics, liquor)" }
        ]
      },
      "termsOfService": "Documentation and product traceability available for cruise operations; quality and safety standards aligned with HACCP, ISO quality standards, SOLAS compliance, and MLC 2006 expectations.",
      "potentialAction": {
        "@type": "QuoteAction",
        "name": "Request a Quick Quote",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://rfq.avsglobalsupply.com",
          "inLanguage": "en",
          "actionPlatform": [
            "http://schema.org/DesktopWebPlatform",
            "http://schema.org/MobileWebPlatform"
          ]
        }
      }
    }
  ]
}
</script>
';


require_once 'header.php';
?>

<style>
/* Custom styles for Cruise Ships page */
.cruise-hero {
    position: relative;
    min-height: 90vh;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.cruise-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(12, 30, 80, 0.95), rgba(12, 50, 120, 0.90), rgba(12, 30, 80, 0.80));
    z-index: 1;
}

.cruise-hero-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}

.cruise-hero-content {
    position: relative;
    z-index: 2;
}

.badge-premium {
    display: inline-block;
    padding: 0.5rem 1.5rem;
    background: rgba(59, 130, 246, 0.2);
    backdrop-filter: blur(8px);
    border-radius: 9999px;
    border: 1px solid rgba(96, 165, 250, 0.3);
    margin-bottom: 1.5rem;
}

.hero-title {
    font-size: 4rem;
    font-weight: 700;
    color: white;
    margin-bottom: 1.5rem;
    line-height: 1.1;
}

.hero-description {
    font-size: 1.5rem;
    color: #dbeafe;
    margin-bottom: 2.5rem;
    max-width: 42rem;
}

.btn-group {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.btn-primary-hero {
    padding: 1rem 2rem;
    background: #2563eb;
    color: white;
    border: none;
    border-radius: 0.5rem;
    font-size: 1.125rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
}

.btn-primary-hero:hover {
    background: #1d4ed8;
    transform: translateY(-2px);
    color: white;
}

.btn-secondary-hero {
    padding: 1rem 2rem;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(8px);
    color: white;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 0.5rem;
    font-size: 1.125rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    text-decoration: none;
    display: inline-block;
}

.btn-secondary-hero:hover {
    background: rgba(255, 255, 255, 0.2);
    color: white;
}

.hero-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 3rem;
    margin-top: 4rem;
    padding-top: 4rem;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.stat-item {
    text-align: center;
}

.stat-value {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 0.875rem;
    color: #bfdbfe;
}

/* Vessel Overview Section */
.vessel-overview-section {
    padding: 5rem 0;
    background: linear-gradient(to bottom, white, #f8fafc);
}

.section-header {
    max-width: 48rem;
    margin: 0 auto 4rem;
    text-align: center;
}

.section-title {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: #1e293b;
}

.section-description {
    font-size: 1.125rem;
    color: #64748b;
}

.specs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 4rem;
}

.spec-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    border: 1px solid #e2e8f0;
    transition: all 0.3s;
    height: 100%;
}

.spec-card:hover {
    border-color: #93c5fd;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
}

.spec-icon {
    width: 3.5rem;
    height: 3.5rem;
    background: linear-gradient(to bottom right, #dbeafe, #eff6ff);
    border-radius: 0.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    transition: transform 0.3s;
}

.spec-card:hover .spec-icon {
    transform: scale(1.1);
}

.spec-icon i {
    font-size: 1.75rem;
    color: #1e3a8a;
}

.spec-label {
    font-weight: 600;
    margin-bottom: 0.5rem;
    font-size: 1.125rem;
}

.spec-value {
    color: #1e3a8a;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.spec-description {
    font-size: 0.875rem;
    color: #64748b;
}

/* Service Categories Section */
.service-categories-section {
    padding: 6rem 0;
    background: white;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
}

.category-card {
    background: linear-gradient(to bottom right, #f8fafc, #eff6ff);
    padding: 2rem;
    border-radius: 1rem;
    transition: all 0.3s;
}

.category-card:hover {
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
}

.category-icon {
    width: 4rem;
    height: 4rem;
    background: #2563eb;
    border-radius: 0.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.category-icon i {
    font-size: 2rem;
    color: white;
}

.category-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 1rem;
}

.category-items {
    list-style: none;
    padding: 0;
    margin: 0;
}

.category-items li {
    display: flex;
    align-items: flex-start;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
    color: #475569;
}

.category-items li i {
    color: #2563eb;
    margin-top: 0.25rem;
    flex-shrink: 0;
}

/* Guest Experience Section */
.guest-experience-section {
    padding: 6rem 0;
    background: linear-gradient(to bottom right, #1e3a8a, #1e40af);
    color: white;
}

.experience-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
}

.experience-content {
    display: flex;
    flex-direction: column;
}

.experience-icon {
    font-size: 3rem;
    color: #fbbf24;
    margin-bottom: 1.5rem;
}

.experience-title {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.experience-description {
    font-size: 1.25rem;
    color: #dbeafe;
    margin-bottom: 2rem;
}

.experience-features {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.experience-feature {
    border-left: 4px solid #60a5fa;
    padding-left: 1.5rem;
}

.experience-feature h3 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.experience-feature p {
    color: #bfdbfe;
}

.experience-image-wrapper {
    position: relative;
}

.experience-image {
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
}

.experience-image img {
    width: 100%;
    height: 500px;
    object-fit: cover;
}

.experience-stat-box {
    position: absolute;
    bottom: -2rem;
    right: -2rem;
    background: #2563eb;
    padding: 2rem;
    border-radius: 0.75rem;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
    max-width: 18rem;
}

.experience-stat-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 0.75rem;
}

.experience-stat-header i {
    font-size: 2rem;
    color: white;
}

.experience-stat-value {
    font-size: 2rem;
    font-weight: 700;
    color: white;
}

.experience-stat-label {
    color: #dbeafe;
}

/* Port Coverage Section */
.port-coverage-section {
    padding: 6rem 0;
    background: #f8fafc;
}

.port-coverage-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.port-card {
    background: white;
    padding: 1.5rem;
    border-radius: 0.75rem;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    transition: all 0.3s;
}

.port-card:hover {
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    transform: scale(1.05);
}

.port-card-icon {
    color: #2563eb;
    font-size: 2rem;
    margin-bottom: 1rem;
}

.port-card-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 0.5rem;
}

.port-card-count {
    color: #2563eb;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.port-card-description {
    font-size: 0.875rem;
    color: #64748b;
}

/* Workflow Section */
.workflow-section {
    padding: 6rem 0;
    background: white;
}

.workflow-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
}

.workflow-step {
    position: relative;
}

.workflow-number {
    font-size: 4rem;
    font-weight: 700;
    color: #dbeafe;
    margin-bottom: 1rem;
}

.workflow-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 0.75rem;
}

.workflow-description {
    color: #64748b;
}

.workflow-connector {
    position: absolute;
    top: 2rem;
    right: -1rem;
    width: 2rem;
    height: 2px;
    background: #bfdbfe;
}

/* Compliance Section */
.compliance-section {
    padding: 6rem 0;
    background: #1e293b;
    color: white;
}

.compliance-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
}

.compliance-content h2 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
}

.compliance-content > p {
    font-size: 1.25rem;
    color: #cbd5e1;
    margin-bottom: 2rem;
}

.compliance-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.compliance-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.compliance-item i {
    color: #60a5fa;
    font-size: 1.5rem;
    flex-shrink: 0;
}

.compliance-item span {
    font-size: 1.125rem;
}

.compliance-box {
    background: #334155;
    padding: 2rem;
    border-radius: 0.75rem;
}

.compliance-box-icon {
    font-size: 3rem;
    color: #60a5fa;
    margin-bottom: 1.5rem;
}

.compliance-box h3 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.compliance-box p {
    color: #cbd5e1;
    margin-bottom: 1.5rem;
}

.compliance-box ul {
    list-style: none;
    padding: 0;
    margin: 0;
    color: #cbd5e1;
}

.compliance-box ul li {
    margin-bottom: 0.5rem;
}

/* CTA Section */
.cta-section-cruise {
    padding: 6rem 0;
    background: linear-gradient(to right, #2563eb, #1d4ed8);
    text-align: center;
    color: white;
}

.cta-section-cruise h2 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
}

.cta-section-cruise p {
    font-size: 1.25rem;
    color: #dbeafe;
    margin-bottom: 2.5rem;
    max-width: 42rem;
    margin-left: auto;
    margin-right: auto;
}

.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.btn-cta-white {
    padding: 1rem 2rem;
    background: white;
    color: #2563eb;
    border: none;
    border-radius: 0.5rem;
    font-size: 1.125rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    text-decoration: none;
    display: inline-block;
}

.btn-cta-white:hover {
    background: #eff6ff;
    color: #2563eb;
    transform: translateY(-2px);
}

.btn-cta-outline {
    padding: 1rem 2rem;
    background: transparent;
    color: white;
    border: 2px solid white;
    border-radius: 0.5rem;
    font-size: 1.125rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    text-decoration: none;
    display: inline-block;
}

.btn-cta-outline:hover {
    background: rgba(255, 255, 255, 0.1);
    color: white;
}

/* Responsive Styles */
@media (max-width: 1024px) {
    .hero-title {
        font-size: 3rem;
    }
    
    .hero-stats {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .experience-grid,
    .compliance-grid {
        grid-template-columns: 1fr;
    }
    
    .workflow-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .workflow-connector {
        display: none;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-description {
        font-size: 1.125rem;
    }
    
    .hero-stats {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .btn-group {
        flex-direction: column;
        width: 100%;
    }
    
    .btn-primary-hero,
    .btn-secondary-hero {
        width: 100%;
        justify-content: center;
    }
    
    .workflow-grid {
        grid-template-columns: 1fr;
    }
    
    .experience-stat-box {
        position: relative;
        bottom: 0;
        right: 0;
        margin-top: 1rem;
    }
}

@media (max-width: 480px) {
    .categories-grid,
    .port-coverage-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- Hero Section -->
<section class="cruise-hero">
    <img src="https://images.unsplash.com/photo-1571406252428-20eb1e975d6a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1920" alt="Cruise ship" class="cruise-hero-bg">
    <div class="auto-container">
        <div class="cruise-hero-content">
            <div class="badge-premium">
                <span style="color: #dbeafe; font-size: 0.875rem;">Premium Cruise Solutions</span>
            </div>
            
            <h1 class="hero-title">
                Ship Supply for<br>Cruise Ships
            </h1>
            
            <p class="hero-description">
                Premium provisions, guest supplies, and comprehensive technical support for cruise operations worldwide.
            </p>
            
            <div class="btn-group">
                <a href="https://rfq.avsglobalsupply.com" target="_blank" class="btn-primary-hero">
                    Quick Quote
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="/contact" class="btn-secondary-hero">
                    Contact Us
                </a>
            </div>
            
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-value">1500+</div>
                    <div class="stat-label">Ports Worldwide</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">10+</div>
                    <div class="stat-label">Cruise Companies</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">24h</div>
                    <div class="stat-label">Quote Turnaround</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">40</div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vessel Overview Section -->
<section class="vessel-overview-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Understanding Cruise Ship Operations</h2>
            <p class="section-description">
                Modern cruise ships are floating luxury resorts serving thousands of guests with diverse dining venues, entertainment options, and amenities. Our supply solutions support every aspect of the guest experience while ensuring operational excellence.
            </p>
        </div>
        
        <div class="specs-grid">
            <div class="spec-card">
                <div class="spec-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="spec-label">Guest Capacity</h3>
                <div class="spec-value">2,000-6,000</div>
                <p class="spec-description">Passengers plus 1,000+ crew</p>
            </div>
            
            <div class="spec-card">
                <div class="spec-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3 class="spec-label">Dining Venues</h3>
                <div class="spec-value">8-15 Restaurants</div>
                <p class="spec-description">Multiple specialty dining options</p>
            </div>
            
            <div class="spec-card">
                <div class="spec-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="spec-label">Port Calls</h3>
                <div class="spec-value">Frequent</div>
                <p class="spec-description">24-48 hour turnarounds</p>
            </div>
            
            <div class="spec-card">
                <div class="spec-icon">
                    <i class="fas fa-anchor"></i>
                </div>
                <h3 class="spec-label">Service Level</h3>
                <div class="spec-value">5-Star Luxury</div>
                <p class="spec-description">Premium hospitality standards</p>
            </div>
        </div>
        
        <div style="margin-top: 4rem; position: relative; border-radius: 1.5rem; overflow: hidden; box-shadow: 0 25px 50px rgba(0,0,0,0.15);">
            <img src="https://images.unsplash.com/photo-1667604987970-4bbd6ed51d0d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1920" alt="Cruise ship interior" style="width: 100%; height: 400px; object-fit: cover;">
            <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(12, 30, 80, 0.6), transparent);"></div>
        </div>
    </div>
</section>

<!-- Comprehensive Service Categories -->
<section class="service-categories-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Comprehensive Supply Categories</h2>
            <p class="section-description" style="font-size: 1.25rem;">
                From galley to guest cabins, we supply everything for exceptional cruise operations
            </p>
        </div>
        
        <div class="categories-grid">
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3 class="category-title">Food & Beverage</h3>
                <ul class="category-items">
                    <li><i class="fas fa-check-circle"></i> <span>Premium meats & seafood</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Fresh produce & dairy</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Gourmet ingredients</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>International cuisine items</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Bakery supplies</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Fine wines & spirits</span></li>
                </ul>
            </div>
            
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-tshirt"></i>
                </div>
                <h3 class="category-title">Guest Amenities</h3>
                <ul class="category-items">
                    <li><i class="fas fa-check-circle"></i> <span>Luxury toiletries</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Premium linens</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Bathrobes & slippers</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>In-cabin supplies</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Welcome packages</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Premium bedding</span></li>
                </ul>
            </div>
            
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-sparkles"></i>
                </div>
                <h3 class="category-title">Housekeeping</h3>
                <ul class="category-items">
                    <li><i class="fas fa-check-circle"></i> <span>Cleaning supplies</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Laundry products</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Disinfectants</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Air fresheners</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Paper products</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Eco-friendly options</span></li>
                </ul>
            </div>
            
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-box"></i>
                </div>
                <h3 class="category-title">Deck & Engine</h3>
                <ul class="category-items">
                    <li><i class="fas fa-check-circle"></i> <span>Technical stores</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Spare parts</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Lubricants & oils</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Safety equipment</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Maintenance supplies</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Navigation items</span></li>
                </ul>
            </div>
            
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="category-title">Entertainment</h3>
                <ul class="category-items">
                    <li><i class="fas fa-check-circle"></i> <span>Event supplies</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Decorations</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Party essentials</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Sports equipment</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Pool supplies</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Activity materials</span></li>
                </ul>
            </div>
            
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <h3 class="category-title">Retail & Duty-Free</h3>
                <ul class="category-items">
                    <li><i class="fas fa-check-circle"></i> <span>Branded goods</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Souvenirs</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Jewelry & watches</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Perfumes & cosmetics</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Liquor selection</span></li>
                    <li><i class="fas fa-check-circle"></i> <span>Luxury items</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Guest Experience Focus -->
<section class="guest-experience-section">
    <div class="auto-container">
        <div class="experience-grid">
            <div class="experience-content">
                <i class="fas fa-star experience-icon"></i>
                <h2 class="experience-title" style="color: white;">Guest Experience is Everything</h2>
                <p class="experience-description">
                    We understand that every supply item contributes to guest satisfaction. From the freshness of ingredients to the softness of linens, quality matters at every touchpoint.
                </p>
                <div class="experience-features">
                    <div class="experience-feature">
                        <h3 style="color: white;" >Quality Assurance</h3>
                        <p>Every item inspected to meet luxury hospitality standards</p>
                    </div>
                    <div class="experience-feature">
                        <h3 style="color: white;">Specialized Sourcing</h3>
                        <p>Access to premium brands and exclusive suppliers worldwide</p>
                    </div>
                    <div class="experience-feature">
                        <h3 style="color: white;" >Dietary Accommodations</h3>
                        <p>Specialty items for all dietary requirements and preferences</p>
                    </div>
                    <div class="experience-feature">
                        <h3 style="color: white;" >Cultural Sensitivity</h3>
                        <p>International product selection for diverse passenger demographics</p>
                    </div>
                </div>
            </div>
            <div class="experience-image-wrapper">
                <div class="experience-image">
                    <img src="https://images.unsplash.com/photo-1674168461837-9e2be6a263da?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1920" alt="Cruise ship dining">
                </div>
                <div class="experience-stat-box">
                    <div class="experience-stat-header">
                        <i class="fas fa-chart-line"></i>
                        <div class="experience-stat-value">98%</div>
                    </div>
                    <p class="experience-stat-label">Customer satisfaction with our cruise supplies</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Port Coverage Highlight -->
<section class="port-coverage-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Global Cruise Port Coverage</h2>
            <p class="section-description" style="font-size: 1.25rem;">
                We're positioned at every major cruise destination worldwide
            </p>
        </div>
        
        <div class="port-coverage-grid">
            <div class="port-card">
                <i class="fas fa-globe port-card-icon"></i>
                <h3 class="port-card-title">Caribbean</h3>
                <div class="port-card-count">35+ Ports</div>
                <p class="port-card-description">Miami, San Juan, Cozumel</p>
            </div>
            
            <div class="port-card">
                <i class="fas fa-globe port-card-icon"></i>
                <h3 class="port-card-title">Mediterranean</h3>
                <div class="port-card-count">40+ Ports</div>
                <p class="port-card-description">Barcelona, Venice, Santorini</p>
            </div>
            
            <div class="port-card">
                <i class="fas fa-globe port-card-icon"></i>
                <h3 class="port-card-title">Alaska</h3>
                <div class="port-card-count">12+ Ports</div>
                <p class="port-card-description">Juneau, Ketchikan, Skagway</p>
            </div>
            
            <div class="port-card">
                <i class="fas fa-globe port-card-icon"></i>
                <h3 class="port-card-title">Asia-Pacific</h3>
                <div class="port-card-count">25+ Ports</div>
                <p class="port-card-description">Singapore, Sydney, Hong Kong</p>
            </div>
            
            <div class="port-card">
                <i class="fas fa-globe port-card-icon"></i>
                <h3 class="port-card-title">Northern Europe</h3>
                <div class="port-card-count">30+ Ports</div>
                <p class="port-card-description">Copenhagen, Stockholm, Amsterdam</p>
            </div>
            
            <div class="port-card">
                <i class="fas fa-globe port-card-icon"></i>
                <h3 class="port-card-title">South America</h3>
                <div class="port-card-count">15+ Ports</div>
                <p class="port-card-description">Buenos Aires, Rio, Lima</p>
            </div>
            
            <div class="port-card">
                <i class="fas fa-globe port-card-icon"></i>
                <h3 class="port-card-title">Middle East</h3>
                <div class="port-card-count">10+ Ports</div>
                <p class="port-card-description">Dubai, Abu Dhabi, Muscat</p>
            </div>
            
            <div class="port-card">
                <i class="fas fa-globe port-card-icon"></i>
                <h3 class="port-card-title">Transatlantic</h3>
                <div class="port-card-count">20+ Ports</div>
                <p class="port-card-description">Southampton, New York, Lisbon</p>
            </div>
        </div>
    </div>
</section>

<!-- Workflow Section -->
<section class="workflow-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Our Process</h2>
            <p class="section-description" style="font-size: 1.25rem;">
                Meticulous attention to every detail
            </p>
        </div>
        
        <div class="workflow-grid">
            <div class="workflow-step">
                <div class="workflow-number">01</div>
                <h3 class="workflow-title">Detailed Requirements</h3>
                <p class="workflow-description">Submit comprehensive supply list</p>
                <div class="workflow-connector"></div>
            </div>
            
            <div class="workflow-step">
                <div class="workflow-number">02</div>
                <h3 class="workflow-title">Premium Sourcing</h3>
                <p class="workflow-description">Selection from luxury suppliers</p>
                <div class="workflow-connector"></div>
            </div>
            
            <div class="workflow-step">
                <div class="workflow-number">03</div>
                <h3 class="workflow-title">Quality Control</h3>
                <p class="workflow-description">Rigorous inspection process</p>
                <div class="workflow-connector"></div>
            </div>
            
            <div class="workflow-step">
                <div class="workflow-number">04</div>
                <h3 class="workflow-title">White Glove Delivery</h3>
                <p class="workflow-description">Professional delivery service</p>
            </div>
        </div>
    </div>
</section>

<!-- Compliance Section -->
<section class="compliance-section">
    <div class="auto-container">
        <div class="compliance-grid">
            <div class="compliance-content">
                <h2 style="color: white;">Safety & Quality Standards</h2>
                <p>Exceeding international maritime and hospitality standards</p>
                <div class="compliance-list">
                    <div class="compliance-item">
                        <i class="fas fa-check-circle"></i>
                        <span>HACCP Certified Food Safety</span>
                    </div>
                    <div class="compliance-item">
                        <i class="fas fa-check-circle"></i>
                        <span>ISO Quality Standards</span>
                    </div>
                    <div class="compliance-item">
                        <i class="fas fa-check-circle"></i>
                        <span>SOLAS Compliance</span>
                    </div>
                    <div class="compliance-item">
                        <i class="fas fa-check-circle"></i>
                        <span>MLC 2006 Standards</span>
                    </div>
                </div>
            </div>
            <div class="compliance-box">
                <i class="fas fa-file-check compliance-box-icon"></i>
                <h3 style="color: white;">Complete Compliance</h3>
                <p>Full documentation for all regulatory requirements</p>
                <ul>
                    <li style="color: white;">• Health Certificates</li>
                    <li style="color: white;">• Food Safety Documentation</li>
                    <li style="color: white;">• Quality Assurance Reports</li>
                    <li style="color: white;">• Customs & Port Clearances</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section-cruise">
    <div class="auto-container">
        <h2 style="color: white;">Elevate Your Cruise Experience</h2>
        <p>Premium supplies for exceptional guest satisfaction. Contact us today.</p>
        <div class="cta-buttons">
            <a href="https://rfq.avsglobalsupply.com" target="_blank" class="btn-cta-white">
                Get Quote Now
            </a>
            <a href="mailto:rfq@avsglobalsupply.com" class="btn-cta-outline">
                Email: rfq@avsglobalsupply.com
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section sec-pad" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="auto-container">
        <div class="section-header text-center mb-5">
            <span class="badge-specialty" style="display: inline-block; padding: 0.5rem 1.5rem; background: rgba(59, 130, 246, 0.1); border-radius: 50px; color: #3b82f6; font-weight: 600; margin-bottom: 1rem;"><i class="fas fa-question-circle" style="margin-right: 0.5rem;"></i>FAQ</span>
            <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: #0c1e50; margin-bottom: 1rem;">Frequently Asked Questions</h2>
            <p class="section-description" style="font-size: 1.1rem; color: #64748b; max-width: 700px; margin: 0 auto;">Common questions about cruise ship supply services</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="accordion" id="faqAccordion" style="background: white; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
                    
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                What makes cruise ship provisioning different from other vessels?
                            </button>
                        </h3>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Cruise ships require premium quality provisions, diverse menu options for thousands of guests, specialty items for fine dining, entertainment supplies, spa products, and strict hygiene standards. We understand the hospitality focus and provide tailored solutions for exceptional guest experiences.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                Can you accommodate special dietary requirements and allergen-free products?
                            </button>
                        </h3>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Yes, we supply a wide range of specialty dietary products including gluten-free, kosher, halal, vegan, vegetarian, and allergen-free items. We work closely with your culinary team to ensure all dietary requirements are met with premium quality products.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                How do you ensure freshness for perishable items?
                            </button>
                        </h3>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                We maintain cold chain integrity throughout the supply process with temperature-controlled storage and refrigerated transport. All perishables are sourced fresh, quality-checked, and delivered with proper documentation including temperature logs and shelf-life guarantees.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                Do you supply luxury brands and premium products?
                            </button>
                        </h3>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Yes, we supply premium brands and luxury products from certified suppliers worldwide. From gourmet ingredients to fine wines, champagnes, and high-end hospitality supplies, we cater to the elevated standards expected on cruise ships.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="accordion-item" style="border: none;">
                        <h3 class="accordion-header" id="faq5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                What health and safety certifications do you maintain?
                            </button>
                        </h3>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                We maintain HACCP, ISO 22000, and other relevant food safety certifications. All products come with health certificates, food safety documentation, and comply with international maritime health standards and port health authority requirements worldwide.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
