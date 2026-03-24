<?php
// SEO Meta Tags
$seo_title = "Offshore Support Vessel Supply | OSV Ship Supply Services | AVS Global Supply";
$seo_description = "Comprehensive ship supply services for offshore support vessels (OSV). Specialized provisions, technical equipment, and logistics solutions for offshore operations worldwide.";
$seo_keywords = "offshore support vessel supply, OSV ship supply, offshore vessel services, OSV provisions, offshore supply services";

// Open Graph Tags
$og_title = "Offshore Support Vessel Supply | AVS Global Supply";
$og_description = "Comprehensive ship supply services for offshore support vessels with specialized provisions and technical equipment.";
$og_image = "https://www.avsglobalsupply.com/assets/images/osv-og.jpg";
$og_type = "website";

// Canonical & Hreflang
$canonical = "https://www.avsglobalsupply.com/osv";
$eng_link = "https://www.avsglobalsupply.com/osv";
$tr_link = "https://www.avsglobalsupply.com/tr/osv";

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
      "telephone": "+90 216 591 0849",
      "email": "info@avsglobalsupply.com",
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
      "@id": "https://www.avsglobalsupply.com/osv#webpage",
      "url": "https://www.avsglobalsupply.com/osv",
      "name": "Offshore Support Vessel Supply | OSV Ship Supply Services | AVS Global Supply",
      "description": "Complete ship supply for Offshore Support Vessels (OSVs) with specialized provisioning and technical supplies for offshore operations. AVS Global Supply supports OSV fleets with certified provisions, OEM-compliant engine & technical stores, deck equipment, safety/PPE, bonded & controlled stores, and cabin/galley stores—delivered through a disciplined 24-hour quote workflow, certified sourcing, and on-time port delivery with full documentation. Global OSV supply base coverage includes major hubs in the North Sea, Gulf of Mexico, Middle East, Southeast Asia, West Africa and South America.",
      "inLanguage": "en",
      "isPartOf": { "@id": "https://www.avsglobalsupply.com/#website" },
      "about": { "@id": "https://www.avsglobalsupply.com/osv#service" },
      "keywords": [
        "osv supplier",
        "osv ship supply",
        "offshore support vessel supplier",
        "offshore support vessel ship supply",
        "osv ship chandler",
        "offshore vessel chandler",
        "offshore supply vessel provisions",
        "osv provisions supplier",
        "certified ship provisions",
        "engine and technical stores for osv",
        "oem compliant spares offshore",
        "deck stores offshore supply",
        "mooring supplies for osv",
        "lifting gear supply offshore",
        "safety equipment and ppe offshore",
        "life saving equipment supply",
        "fire fighting equipment supply",
        "bonded stores offshore",
        "controlled stores handling offshore",
        "cabin and galley stores osv",
        "24h quote ship supplier",
        "offshore supply base coverage",
        "imca compliant offshore supply",
        "ism code compliant ship supply",
        "iso 9001 ship supplier",
        "haccp food safety ship supply"
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.avsglobalsupply.com/osv#breadcrumbs",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.avsglobalsupply.com/" },
        { "@type": "ListItem", "position": 2, "name": "OSV", "item": "https://www.avsglobalsupply.com/osv" }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.avsglobalsupply.com/osv#service",
      "name": "Offshore Support Vessel (OSV) Ship Supply Services - AVS Global Supply",
      "description": "AVS Global Supply delivers complete ship supply solutions for Offshore Support Vessels (OSVs) serving offshore installations. Built for offshore operational requirements, the service provides certified provisions & consumables (fresh, frozen, dry, bonded and dietary accommodations), OEM-compliant engine & technical stores (engine spares, hydraulic systems, electrical supplies and emergency stocks), deck equipment & supplies (wire ropes, chains, mooring supplies and lifting gear), safety equipment & PPE (life-saving, fire fighting, workwear and safety certification), bonded & controlled stores with customs compliance and secure documentation, and cabin/galley stores for crew comfort. AVS follows a predictable workflow—submit requirements, receive a detailed quote within 24 hours, order processing via certified suppliers with documentation, and on-time port delivery with complete customs and port clearance—supported by global offshore base coverage and a compliance framework aligned with ISO 9001, IMCA, HACCP food safety and the ISM Code.",
      "inLanguage": "en",
      "provider": { "@id": "https://www.avsglobalsupply.com/#organization" },
      "areaServed": "Worldwide",
      "serviceType": [
        "OSV ship supply",
        "Offshore support vessel provisions supply",
        "Offshore technical stores supply",
        "Offshore deck stores supply",
        "Offshore safety equipment & PPE supply",
        "Bonded & controlled stores handling",
        "Cabin & galley stores supply"
      ],
      "category": [
        "Ship Supply",
        "Offshore Supply",
        "Marine Provisions",
        "Technical Stores",
        "Deck Stores",
        "Safety Equipment",
        "Bonded Stores",
        "Cabin Stores"
      ],
      "audience": {
        "@type": "BusinessAudience",
        "audienceType": [
          "Offshore operators",
          "OSV fleet managers",
          "Ship owners",
          "Ship management companies",
          "Marine procurement and purchasing teams"
        ]
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "OSV Supply Categories",
        "itemListElement": [
          { "@type": "Offer", "name": "Certified Provisions & Consumables (fresh, frozen, dry, bonded, dietary accommodations)" },
          { "@type": "Offer", "name": "Engine & Technical Stores (OEM-compliant spares, hydraulics, electrical, emergency stocks)" },
          { "@type": "Offer", "name": "Deck Equipment & Supplies (wire ropes, chains, mooring, lifting gear)" },
          { "@type": "Offer", "name": "Safety Equipment & PPE (LSA, FFA, workwear, safety certifications)" },
          { "@type": "Offer", "name": "Bonded & Controlled Stores (customs compliance, documentation, secure handling)" },
          { "@type": "Offer", "name": "Cabin & Galley Stores (linens, galley equipment, cleaning supplies, entertainment items)" }
        ]
      },
      "availableChannel": [
        {
          "@type": "ServiceChannel",
          "serviceUrl": "https://rfq.avsglobalsupply.com",
          "availableLanguage": ["en"]
        }
      ],
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
/* OSV Supply Services - Design System */
:root {
    --osv-primary: #2563eb;
    --osv-primary-dark: #1e40af;
    --osv-secondary: #64748b;
    --osv-accent: #0ea5e9;
    --osv-dark: #0f172a;
    --osv-darker: #020617;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Hero Section */
.osv-hero {
    position: relative;
    min-height: 90vh;
    background: linear-gradient(135deg, var(--osv-darker) 0%, var(--osv-dark) 100%);
    overflow: hidden;
    display: flex;
    align-items: center;
    padding: 100px 0 80px;
}

.osv-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        linear-gradient(to right, rgba(37, 99, 235, 0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(37, 99, 235, 0.03) 1px, transparent 1px);
    background-size: 80px 80px;
    pointer-events: none;
}

.hero-content-wrapper {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.hero-text-content {
    max-width: 600px;
}

.osv-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(37, 99, 235, 0.1);
    border: 1px solid rgba(37, 99, 235, 0.2);
    backdrop-filter: blur(10px);
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    color: var(--osv-primary);
    margin-bottom: 24px;
}

.badge-dot {
    width: 8px;
    height: 8px;
    background: var(--osv-primary);
    border-radius: 50%;
    animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(1.2); }
}

.hero-title {
    font-size: 56px;
    font-weight: 800;
    line-height: 1.1;
    color: #ffffff;
    margin-bottom: 24px;
}

.hero-title .highlight {
    color: var(--osv-primary);
}

.hero-description {
    font-size: 18px;
    line-height: 1.7;
    color: #94a3b8;
    margin-bottom: 32px;
}

.hero-actions {
    display: flex;
    gap: 16px;
    margin-bottom: 48px;
}

.btn-primary {
    background: var(--osv-primary);
    color: white;
    padding: 14px 32px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
}

.btn-primary:hover {
    background: var(--osv-primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
    color: white;
}

.btn-secondary {
    background: transparent;
    color: white;
    padding: 14px 32px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    border: 2px solid rgba(255, 255, 255, 0.2);
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.3);
    color: white;
}

.trust-indicators {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.trust-item {
    display: flex;
    align-items: center;
    gap: 12px;
}

.trust-icon {
    width: 48px;
    height: 48px;
    background: rgba(37, 99, 235, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--osv-primary);
    font-size: 24px;
}

.trust-text h4 {
    font-size: 20px;
    font-weight: 700;
    color: white;
    margin-bottom: 4px;
}

.trust-text p {
    font-size: 14px;
    color: #64748b;
}

.hero-image-container {
    position: relative;
    height: 500px;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
}

.hero-image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to top, rgba(15, 23, 42, 0.8), transparent);
}

/* Services Section */
.services-section {
    padding: 100px 0;
    background: #ffffff;
}

.section-header {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 60px;
}

.section-badge {
    display: inline-block;
    background: rgba(37, 99, 235, 0.1);
    color: var(--osv-primary);
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 16px;
}

.section-title {
    font-size: 42px;
    font-weight: 800;
    color: var(--osv-dark);
    margin-bottom: 16px;
}

.section-description {
    font-size: 18px;
    line-height: 1.7;
    color: #64748b;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.service-card {
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 32px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.service-card::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--osv-primary);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    border-color: var(--osv-primary);
}

.service-card:hover::before {
    transform: scaleX(1);
}

.service-icon {
    width: 64px;
    height: 64px;
    background: linear-gradient(135deg, var(--osv-primary), var(--osv-accent));
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    color: white;
    margin-bottom: 20px;
}

.service-card h3 {
    font-size: 22px;
    font-weight: 700;
    color: var(--osv-dark);
    margin-bottom: 12px;
}

.service-card p {
    font-size: 15px;
    line-height: 1.7;
    color: #64748b;
    margin-bottom: 20px;
}

.service-list {
    list-style: none;
}

.service-list li {
    font-size: 14px;
    color: #64748b;
    padding: 8px 0;
    padding-left: 24px;
    position: relative;
}

.service-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--osv-primary);
    font-weight: bold;
}

/* Workflow Section */
.workflow-section {
    padding: 100px 0;
    background: #f8fafc;
}

.workflow-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    margin-top: 60px;
    position: relative;
}

.workflow-steps::before {
    content: '';
    position: absolute;
    top: 40px;
    left: 10%;
    right: 10%;
    height: 2px;
    background: linear-gradient(to right, var(--osv-primary), var(--osv-accent));
    z-index: 0;
}

.workflow-step {
    position: relative;
    z-index: 1;
    text-align: center;
}

.step-number {
    width: 80px;
    height: 80px;
    background: white;
    border: 4px solid var(--osv-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    font-weight: 800;
    color: var(--osv-primary);
    margin: 0 auto 24px;
    box-shadow: 0 4px 20px rgba(37, 99, 235, 0.2);
}

.workflow-step h3 {
    font-size: 20px;
    font-weight: 700;
    color: var(--osv-dark);
    margin-bottom: 12px;
}

.workflow-step p {
    font-size: 15px;
    line-height: 1.6;
    color: #64748b;
}

/* Global Coverage Section */
.global-coverage-section {
    padding: 100px 0;
    background: var(--osv-darker);
    color: white;
}

.coverage-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-top: 60px;
}

.coverage-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 16px;
    padding: 32px;
    transition: all 0.3s ease;
}

.coverage-card:hover {
    background: rgba(255, 255, 255, 0.08);
    border-color: var(--osv-primary);
    transform: translateY(-4px);
}

.coverage-card h3 {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.coverage-card ul {
    list-style: none;
}

.coverage-card li {
    padding: 8px 0;
    color: #94a3b8;
    font-size: 15px;
}

/* Compliance Section */
.compliance-section {
    padding: 100px 0;
    background: white;
}

.compliance-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 60px;
}

.compliance-card {
    background: #f8fafc;
    border-radius: 16px;
    padding: 32px;
    text-align: center;
    transition: all 0.3s ease;
}

.compliance-card:hover {
    background: white;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transform: translateY(-4px);
}

.compliance-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--osv-primary), var(--osv-accent));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 40px;
    color: white;
    margin: 0 auto 20px;
}

.compliance-card h3 {
    font-size: 18px;
    font-weight: 700;
    color: var(--osv-dark);
    margin-bottom: 12px;
}

.compliance-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
}

/* CTA Section */
.cta-section {
    position: relative;
    padding: 120px 0;
    background: var(--osv-darker);
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(15, 23, 42, 0.95), rgba(37, 99, 235, 0.9));
}

.cta-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.cta-content .osv-badge {
    margin-bottom: 24px;
}

.cta-content h2 {
    font-size: 48px;
    font-weight: 800;
    color: white;
    margin-bottom: 24px;
    line-height: 1.2;
}

.cta-content p {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 40px;
    line-height: 1.7;
}

.cta-actions {
    display: flex;
    justify-content: center;
    gap: 16px;
    margin-bottom: 60px;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    max-width: 600px;
    margin: 0 auto;
}

.contact-item {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 12px;
    padding: 24px;
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all 0.3s ease;
    text-decoration: none;
    color: white;
}

.contact-item:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
    color: white;
}

.contact-icon {
    width: 48px;
    height: 48px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
}

.contact-text h4 {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 4px;
    opacity: 0.8;
}

.contact-text p {
    font-size: 16px;
    font-weight: 600;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .hero-content-wrapper {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .workflow-steps {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .workflow-steps::before {
        display: none;
    }
    
    .coverage-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 36px;
    }
    
    .services-grid,
    .workflow-steps,
    .coverage-grid,
    .compliance-grid {
        grid-template-columns: 1fr;
    }
    
    .section-title {
        font-size: 32px;
    }
    
    .trust-indicators {
        grid-template-columns: 1fr;
    }
    
    .contact-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- Hero Section -->
<section class="osv-hero">
    <div class="auto-container">
        <div class="hero-content-wrapper">
            <div class="hero-text-content">
                <div class="osv-badge">
                    <span class="badge-dot"></span>
                    AVS GLOBAL SUPPLY
                </div>
                
                <h1 class="hero-title">
                    Complete Ship Supply for<br>
                    <span class="highlight">Offshore Support Vessels</span>
                </h1>
                
                <p class="hero-description">
                    Specialized provisioning and technical supplies for OSVs serving offshore installations. 
                    From provisions to critical spares, we deliver reliability when you need it most.
                </p>
                
                <div class="hero-actions">
                    <a href="https://rfq.avsglobalsupply.com" target="_blank" class="btn-primary">
                        Request Quote →
                    </a>
                    <a href="https://www.avsglobalsupply.com/contact" class="btn-secondary">
                        ☎ Contact Operations
                    </a>
                </div>
                
                <div class="trust-indicators">
                    <div class="trust-item">
                        <div class="trust-icon">🚢</div>
                        <div class="trust-text">
                            <h4>300+</h4>
                            <p>OSV Supplies/Year</p>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">🌍</div>
                        <div class="trust-text">
                            <h4>270+</h4>
                            <p>Offshore Ports</p>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">⚡</div>
                        <div class="trust-text">
                            <h4>24h</h4>
                            <p>Quote Response</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="hero-image-container">
                <img src="assets/images/offshore-oil-and-gas-production-platform-heavy-du-2025-08-27-06-59-37-utc.JPG" alt="Offshore Support Vessel">
                <div class="hero-image-overlay"></div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">COMPREHENSIVE SOLUTIONS</span>
            <h2 class="section-title">Services Tailored for OSV Operations</h2>
            <p class="section-description">
                Specialized supply solutions designed for the unique requirements of offshore support vessels, 
                with complete control, traceability, and accuracy.
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">📦</div>
                <h3>Certified Provisions & Consumables</h3>
                <p>Full-spectrum provision supply with complete certification and traceability.</p>
                <ul class="service-list">
                    <li>Fresh, frozen & dry provisions</li>
                    <li>Bonded & duty-free items</li>
                    <li>Dietary accommodations</li>
                    <li>Quality certifications</li>
                </ul>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3>Engine & Technical Stores</h3>
                <p>Critical spare parts and technical consumables with full OEM compliance.</p>
                <ul class="service-list">
                    <li>Engine spares & components</li>
                    <li>Hydraulic systems</li>
                    <li>Electrical supplies</li>
                    <li>Emergency stocks</li>
                </ul>
            </div>
            
            <div class="service-card">
                <div class="service-icon">⚓</div>
                <h3>Deck Equipment & Supplies</h3>
                <p>Complete deck stores for offshore operations and maintenance.</p>
                <ul class="service-list">
                    <li>Wire ropes & chains</li>
                    <li>Deck equipment</li>
                    <li>Mooring supplies</li>
                    <li>Lifting gear</li>
                </ul>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🦺</div>
                <h3>Safety Equipment & PPE</h3>
                <p>Comprehensive safety equipment and personal protective gear.</p>
                <ul class="service-list">
                    <li>Life-saving equipment</li>
                    <li>Fire fighting systems</li>
                    <li>PPE & workwear</li>
                    <li>Safety certifications</li>
                </ul>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🔒</div>
                <h3>Bonded & Controlled Stores</h3>
                <p>Specialized handling of bonded, duty-free, and controlled materials.</p>
                <ul class="service-list">
                    <li>Bonded stores</li>
                    <li>Customs compliance</li>
                    <li>Documentation</li>
                    <li>Secure handling</li>
                </ul>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🛏️</div>
                <h3>Cabin & Galley Stores</h3>
                <p>Complete accommodation and galley supplies for crew comfort.</p>
                <ul class="service-list">
                    <li>Linens & bedding</li>
                    <li>Galley equipment</li>
                    <li>Cleaning supplies</li>
                    <li>Entertainment items</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Workflow Section -->
<section class="workflow-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">STREAMLINED PROCESS</span>
            <h2 class="section-title">How We Work</h2>
            <p class="section-description">
                A predictable, disciplined, and zero-error focused process designed for OSV operational requirements.
            </p>
        </div>
        
        <div class="workflow-steps">
            <div class="workflow-step">
                <div class="step-number">1</div>
                <h3>Submit Requirements</h3>
                <p>Send your requisition with vessel details and port information</p>
            </div>
            
            <div class="workflow-step">
                <div class="step-number">2</div>
                <h3>Receive Quote</h3>
                <p>Detailed quote within 24 hours with pricing and availability</p>
            </div>
            
            <div class="workflow-step">
                <div class="step-number">3</div>
                <h3>Order Processing</h3>
                <p>Quality sourcing from certified suppliers with documentation</p>
            </div>
            
            <div class="workflow-step">
                <div class="step-number">4</div>
                <h3>Port Delivery</h3>
                <p>On-time delivery with complete customs and port clearance</p>
            </div>
        </div>
    </div>
</section>

<!-- Global Coverage Section -->
<section class="global-coverage-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge" style="background: rgba(255, 255, 255, 0.1); color: var(--osv-accent);">GLOBAL NETWORK</span>
            <h2 class="section-title" style="color: white;">Offshore Supply Base Coverage</h2>
            <p class="section-description" style="color: #94a3b8;">
                Established presence at major offshore supply bases worldwide with local teams ready to support your operations.
            </p>
        </div>
        
        <div class="coverage-grid">
            <div class="coverage-card">
                <h3 style="color:white;">⚓ North Sea</h3>
                <ul>
                    <li>Aberdeen, UK</li>
                    <li>Stavanger, Norway</li>
                    <li>Bergen, Norway</li>
                    <li>Den Helder, Netherlands</li>
                </ul>
            </div>
            
            <div class="coverage-card">
                <h3 style="color:white;">🌊 Gulf of Mexico</h3>
                <ul>
                    <li>Houston, USA</li>
                    <li>New Orleans, USA</li>
                    <li>Galveston, USA</li>
                    <li>Fourchon, USA</li>
                </ul>
            </div>
            
            <div class="coverage-card">
                <h3 style="color:white;">🏜️ Middle East</h3>
                <ul>
                    <li>Abu Dhabi, UAE</li>
                    <li>Dubai, UAE</li>
                    <li>Doha, Qatar</li>
                    <li>Dammam, Saudi Arabia</li>
                </ul>
            </div>
            
            <div class="coverage-card">
                <h3 style="color:white;">🌏 Southeast Asia</h3>
                <ul>
                    <li>Singapore</li>
                    <li>Labuan, Malaysia</li>
                    <li>Batam, Indonesia</li>
                    <li>Brunei</li>
                </ul>
            </div>
            
            <div class="coverage-card">
                <h3 style="color:white;">🌍 West Africa</h3>
                <ul>
                    <li>Lagos, Nigeria</li>
                    <li>Luanda, Angola</li>
                    <li>Port Harcourt, Nigeria</li>
                    <li>Takoradi, Ghana</li>
                </ul>
            </div>
            
            <div class="coverage-card">
                <h3 style="color:white;">🌎 South America</h3>
                <ul>
                    <li>Rio de Janeiro, Brazil</li>
                    <li>Macaé, Brazil</li>
                    <li>Guyana</li>
                    <li>Trinidad</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Compliance Section -->
<section class="compliance-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">QUALITY ASSURANCE</span>
            <h2 class="section-title">Safety, Compliance & Standards</h2>
            <p class="section-description">
                Our compliance framework ensures your OSV operations meet the highest standards of safety, 
                regulatory adherence, and documentation integrity.
            </p>
        </div>
        
        <div class="compliance-grid">
            <div class="compliance-card">
                <div class="compliance-icon">✓</div>
                <h3>ISO 9001 Certified</h3>
                <p>Quality management systems ensuring consistent service delivery</p>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-icon">🛡️</div>
                <h3>IMCA Compliance</h3>
                <p>International Marine Contractors Association standards adherence</p>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-icon">🍴</div>
                <h3>HACCP Food Safety</h3>
                <p>Complete food safety management and certification</p>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-icon">📋</div>
                <h3>ISM Code</h3>
                <p>International Safety Management Code compliance</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="auto-container">
        <div class="cta-content">
            <div class="osv-badge">
                <span class="badge-dot"></span>
                GET STARTED TODAY
            </div>
            
            <h2>Ready to Supply Your OSV?</h2>
            <p>Get a detailed quote for your offshore support vessel within 24 hours. Our team is ready to support your operations worldwide.</p>
            
            <div class="cta-actions">
                <a href="https://rfq.avsglobalsupply.com" target="_blank" class="btn-primary">Get Quote Now</a>
            </div>
            
            <div class="contact-grid">
                <a href="mailto:rfq@avsglobalsupply.com" class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div class="contact-text">
                        <h4>Email</h4>
                        <p>rfq@avsglobalsupply.com</p>
                    </div>
                </a>
                
                <a href="https://wa.me/+905386849842" class="contact-item" target="_blank">
                    <div class="contact-icon">💬</div>
                    <div class="contact-text">
                        <h4>WhatsApp</h4>
                        <p>+90 538 684 98 42</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section sec-pad" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="auto-container">
        <div class="section-header text-center mb-5">
            <span class="badge-specialty" style="display: inline-block; padding: 0.5rem 1.5rem; background: rgba(59, 130, 246, 0.1); border-radius: 50px; color: #3b82f6; font-weight: 600; margin-bottom: 1rem;"><i class="fas fa-question-circle" style="margin-right: 0.5rem;"></i>FAQ</span>
            <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: #0c1e50; margin-bottom: 1rem;">Frequently Asked Questions</h2>
            <p class="section-description" style="font-size: 1.1rem; color: #64748b; max-width: 700px; margin: 0 auto;">Common questions about offshore support vessel (OSV) supply services</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="accordion" id="faqAccordion" style="background: white; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
                    
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                What makes OSV supply services different from other vessel types?
                            </button>
                        </h3>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                OSVs require specialized supplies for offshore operations including drilling equipment, ROV support gear, dynamic positioning systems maintenance, and provisions for extended offshore stays. We understand the unique operational requirements and provide tailored solutions for offshore support vessels.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                Can you supply to remote offshore locations?
                            </button>
                        </h3>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Yes, we have extensive experience delivering to remote offshore locations worldwide. Our logistics network includes partnerships with local suppliers and transport services to ensure timely delivery to offshore platforms and remote ports.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                Do you provide specialized equipment for offshore operations?
                            </button>
                        </h3>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Absolutely. We supply specialized offshore equipment including ROV tools, diving equipment, subsea systems components, dynamic positioning spares, and certified safety equipment compliant with international offshore standards.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                What certifications do your products have for offshore use?
                            </button>
                        </h3>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                All our products meet international maritime and offshore industry standards. We provide complete documentation and certificates of conformity with each delivery.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="accordion-item" style="border: none;">
                        <h3 class="accordion-header" id="faq5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                How do you handle emergency supply requests?
                            </button>
                        </h3>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Our 24/7 operations center is ready to handle emergency requests immediately. We maintain strategic stock locations and have rapid response protocols to deliver critical supplies to offshore vessels with minimal delay.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
