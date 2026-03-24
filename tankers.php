<?php
// SEO Meta Tags
$seo_title = "Ship Supply for Tankers | Crude Oil, Chemical & LNG Tankers | AVS Global Supply";
$seo_description = "Specialized ship supply for crude oil tankers, chemical tankers, and LNG carriers. Safety equipment, technical stores, and provisions with strict quality standards.";
$seo_keywords = "tanker ship supply, crude oil tanker supply, chemical tanker provisions, LNG carrier supply, tanker vessel services";

// Open Graph Tags
$og_title = "Ship Supply for Tankers | AVS Global Supply";
$og_description = "Specialized ship supply for crude oil tankers, chemical tankers, and LNG carriers with strict quality standards.";
$og_image = "https://www.avsglobalsupply.com/assets/images/tankers-og.jpg";
$og_type = "website";

// Canonical & Hreflang
$canonical = "https://www.avsglobalsupply.com/tankers";
$eng_link = "https://www.avsglobalsupply.com/tankers";
$tr_link = "https://www.avsglobalsupply.com/tr/tankers";

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
      "@id": "https://www.avsglobalsupply.com/tankers#webpage",
      "url": "https://www.avsglobalsupply.com/tankers",
      "name": "Ship Supply for Tankers | Crude Oil, Chemical & LNG Tankers | AVS Global Supply",
      "description": "Specialized ship supply for tankers worldwide—provisions, bonded and controlled stores, engine and technical supplies, safety equipment and PPE, and emergency short-notice supply. Built for zero-tolerance terminal environments with ISPS-aligned workflows, audit-ready documentation, product traceability, and precision delivery windows for crude oil, chemical and LNG tanker operations.",
      "inLanguage": "en",
      "isPartOf": { "@id": "https://www.avsglobalsupply.com/#website" },
      "about": { "@id": "https://www.avsglobalsupply.com/tankers#service" },
      "keywords": [
        "tanker supplier",
        "tanker ship supply",
        "tanker ship chandler",
        "ship supply for tankers",
        "crude oil tanker supplier",
        "chemical tanker supplier",
        "lng tanker supplier",
        "tanker provisions supplier",
        "bonded stores for tankers",
        "controlled stores handling",
        "tanker technical stores supplier",
        "tanker spare parts supply",
        "safety equipment and PPE supply",
        "ISPS compliant ship supply",
        "MARPOL SOLAS compliant supplies",
        "audit ready documentation ship supply",
        "traceable ship supply",
        "emergency short notice ship supply",
        "tanker terminal delivery window",
        "MSDS documentation supply"
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.avsglobalsupply.com/tankers#breadcrumbs",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.avsglobalsupply.com/" },
        { "@type": "ListItem", "position": 2, "name": "Tankers", "item": "https://www.avsglobalsupply.com/tankers" }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.avsglobalsupply.com/tankers#service",
      "name": "Tanker Ship Supply Services (Tanker Supplier & Chandler) - AVS Global Supply",
      "description": "AVS Global Supply provides specialized provisioning and technical ship supply services for crude oil, chemical, and LNG tankers worldwide. Tanker operations require strict international and terminal-level compliance, controlled-item handling, intrinsically safe and certified products, and documentation integrity for audits and port state control. AVS supports tanker fleets with certified provisions and consumables, bonded and controlled stores handling, engine and technical supplies with OEM compliance, safety equipment and PPE for hazardous environments, and emergency short-notice supply. Our tanker workflow is designed for precision: RFQ and compliance review, controlled sourcing and verification, documentation and clearance (including MSDS and certificates), and time-critical terminal delivery aligned with strict delivery windows.",
      "inLanguage": "en",
      "provider": { "@id": "https://www.avsglobalsupply.com/#organization" },
      "areaServed": "Worldwide",
      "serviceType": [
        "Tanker ship supply",
        "Tanker ship chandler",
        "Crude oil tanker supply",
        "Chemical tanker supply",
        "LNG tanker supply",
        "Bonded & controlled stores handling",
        "Technical stores & spare parts supply",
        "Safety equipment & PPE supply",
        "Emergency short-notice ship supply"
      ],
      "category": [
        "Ship Supply",
        "Marine Provisions",
        "Bonded Stores",
        "Controlled Stores",
        "Technical Stores",
        "Safety Equipment"
      ],
      "audience": {
        "@type": "BusinessAudience",
        "audienceType": [
          "Ship owners",
          "Ship management companies",
          "Tanker operators",
          "Fleet managers",
          "Marine procurement and purchasing teams"
        ]
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Tanker Supply Categories",
        "itemListElement": [
          { "@type": "Offer", "name": "Certified Provisions & Consumables" },
          { "@type": "Offer", "name": "Bonded & Controlled Stores" },
          { "@type": "Offer", "name": "Engine & Technical Supplies (OEM compliance)" },
          { "@type": "Offer", "name": "Safety Equipment & PPE (hazardous environments)" },
          { "@type": "Offer", "name": "Emergency & Short-Notice Supply" }
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
/* Custom styles for Tankers page */
.tanker-hero {
    position: relative;
    min-height: 90vh;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.tanker-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(12, 30, 80, 0.95), rgba(12, 50, 120, 0.90), rgba(12, 30, 80, 0.80));
    z-index: 1;
}

.tanker-hero-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}

.tanker-hero-content {
    position: relative;
    z-index: 2;
}

.badge-specialized {
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

/* Tanker Operational Complexity Section */
.complexity-section {
    padding: 5rem 0;
    background: #f8fafc;
}

.section-header {
    max-width: 48rem;
    margin: 0 auto 4rem;
    text-align: center;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: #1e293b;
}

.section-description {
    font-size: 1.125rem;
    color: #64748b;
    line-height: 1.6;
}

.complexity-accordion {
    max-width: 70rem;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.accordion-item {
    background: white;
    border-radius: 0.75rem;
    border: 1px solid #e2e8f0;
    overflow: hidden;
    transition: all 0.3s;
}

.accordion-item:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.accordion-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem 2rem;
    cursor: pointer;
    transition: background 0.3s;
}

.accordion-header:hover {
    background: #f8fafc;
}

.accordion-icon {
    width: 3rem;
    height: 3rem;
    background: #eff6ff;
    border-radius: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.accordion-icon i {
    font-size: 1.5rem;
    color: #2563eb;
}

.accordion-title {
    flex: 1;
    font-size: 1.125rem;
    font-weight: 600;
    color: #1e293b;
}

.accordion-chevron {
    color: #64748b;
    transition: transform 0.3s;
    flex-shrink: 0;
}

.accordion-item.active .accordion-chevron {
    transform: rotate(180deg);
}

.accordion-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out, padding 0.3s ease-out;
}

.accordion-item.active .accordion-content {
    max-height: 500px;
    padding: 0 2rem 1.5rem 6rem;
}

.accordion-content p {
    color: #64748b;
    line-height: 1.6;
}

/* Services Tailored Section */
.services-tailored-section {
    padding: 6rem 0;
    background: white;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    max-width: 75rem;
    margin: 0 auto;
}

.service-card {
    background: white;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    transition: all 0.3s;
}

.service-card:hover {
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    transform: translateY(-4px);
}

.service-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.service-content {
    padding: 2rem;
}

.service-icon-box {
    width: 3rem;
    height: 3rem;
    background: #eff6ff;
    border-radius: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
}

.service-icon-box i {
    font-size: 1.5rem;
    color: #2563eb;
}

.service-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 0.75rem;
}

.service-text {
    color: #64748b;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.service-link {
    color: #2563eb;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: gap 0.3s;
}

.service-link:hover {
    gap: 0.75rem;
}

/* Compliance Section */
.compliance-section {
    padding: 6rem 0;
    background: #0f172a;
    color: white;
}

.compliance-header {
    text-align: center;
    margin-bottom: 4rem;
}

.compliance-badge {
    display: inline-block;
    padding: 0.5rem 1.5rem;
    background: rgba(59, 130, 246, 0.2);
    border-radius: 9999px;
    border: 1px solid rgba(59, 130, 246, 0.3);
    font-size: 0.875rem;
    margin-bottom: 1.5rem;
}

.compliance-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.compliance-description {
    font-size: 1.125rem;
    color: #cbd5e1;
    max-width: 48rem;
    margin: 0 auto;
}

.compliance-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
    margin-bottom: 4rem;
}

.compliance-card {
    background: #1e293b;
    padding: 2rem;
    border-radius: 0.75rem;
    border: 1px solid #334155;
}

.compliance-card-icon {
    width: 3rem;
    height: 3rem;
    background: rgba(59, 130, 246, 0.2);
    border-radius: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.compliance-card-icon i {
    font-size: 1.5rem;
    color: #60a5fa;
}

.compliance-card-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.compliance-card-text {
    color: #cbd5e1;
    line-height: 1.6;
    font-size: 0.875rem;
}

.compliance-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
    padding: 3rem 0;
    border-top: 1px solid #334155;
}

.compliance-badge-item {
    text-align: center;
}

.compliance-badge-name {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
}

/* Global Capability Section */
.global-capability-section {
    padding: 6rem 0;
    background: #f8fafc;
}

.ports-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
    max-width: 75rem;
    margin: 3rem auto 0;
}

.port-region-card {
    background: white;
    padding: 2rem;
    border-radius: 0.75rem;
    border: 1px solid #e2e8f0;
    transition: all 0.3s;
}

.port-region-card:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    transform: translateY(-4px);
}

.port-region-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid #eff6ff;
}

.port-region-icon {
    width: 3rem;
    height: 3rem;
    background: #eff6ff;
    border-radius: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.port-region-icon i {
    font-size: 1.5rem;
    color: #2563eb;
}

.port-region-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e293b;
}

.port-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.port-list li {
    padding: 0.75rem 0;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    border-bottom: 1px solid #f1f5f9;
    transition: color 0.3s;
}

.port-list li:last-child {
    border-bottom: none;
}

.port-list li:hover {
    color: #2563eb;
}

.port-list li::before {
    content: '⚓';
    font-size: 1.125rem;
    color: #2563eb;
}

/* Workflow Section */
.workflow-section {
    padding: 6rem 0;
    background: white;
}

.workflow-container {
    max-width: 75rem;
    margin: 0 auto;
}

.workflow-steps {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    position: relative;
}

.workflow-steps::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(to bottom, #dbeafe 0%, #2563eb 50%, #dbeafe 100%);
    transform: translateX(-50%);
}

.workflow-step {
    position: relative;
}

.workflow-step-left {
    text-align: right;
    padding-right: 3rem;
}

.workflow-step-right {
    text-align: left;
    padding-left: 3rem;
}

.workflow-number {
    position: absolute;
    width: 3.5rem;
    height: 3.5rem;
    background: #2563eb;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 700;
    box-shadow: 0 0 0 4px white, 0 0 0 6px #dbeafe;
    z-index: 10;
}

.workflow-step-left .workflow-number {
    right: -1.75rem;
}

.workflow-step-right .workflow-number {
    left: -1.75rem;
}

.workflow-card {
    background: #f8fafc;
    border-radius: 0.75rem;
    padding: 2rem;
    border: 1px solid #e2e8f0;
}

.workflow-card-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.workflow-step-right .workflow-card-header {
    flex-direction: row;
}

.workflow-step-left .workflow-card-header {
    flex-direction: row-reverse;
}

.workflow-icon {
    width: 3rem;
    height: 3rem;
    background: #2563eb;
    border-radius: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.workflow-icon i {
    font-size: 1.5rem;
    color: white;
}

.workflow-step-label {
    font-size: 0.875rem;
    color: #2563eb;
    font-weight: 600;
}

.workflow-card-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 1rem;
}

.workflow-card-text {
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.workflow-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.workflow-list li {
    color: #64748b;
    padding: 0.5rem 0;
    padding-left: 1.5rem;
    position: relative;
}

.workflow-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: #2563eb;
    font-weight: 700;
}

/* CTA Section */
.cta-section-tanker {
    padding: 6rem 0;
    background: linear-gradient(to right, #2563eb, #1d4ed8);
    text-align: center;
    color: white;
}

.cta-section-tanker h2 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
}

.cta-section-tanker p {
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

/* Floating CTA Button */
.floating-cta {
    position: fixed;
    bottom: 2rem;
    left: 2rem;
    z-index: 1000;
}

.floating-cta-btn {
    background: #2563eb;
    color: white;
    padding: 1rem 2rem;
    border-radius: 9999px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    box-shadow: 0 10px 30px rgba(37, 99, 235, 0.4);
    transition: all 0.3s;
}

.floating-cta-btn:hover {
    background: #1d4ed8;
    box-shadow: 0 15px 40px rgba(37, 99, 235, 0.5);
    transform: translateY(-2px);
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
    
    .workflow-steps {
        grid-template-columns: 1fr;
    }
    
    .workflow-steps::before {
        left: 1.75rem;
    }
    
    .workflow-step-left,
    .workflow-step-right {
        text-align: left;
        padding-left: 4rem;
        padding-right: 0;
    }
    
    .workflow-step-left .workflow-number,
    .workflow-step-right .workflow-number {
        left: 0;
        right: auto;
    }
    
    .workflow-step-left .workflow-card-header {
        flex-direction: row;
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
    
    .services-grid {
        grid-template-columns: 1fr;
    }
    
    .compliance-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-section-tanker h2 {
        font-size: 2rem;
    }
    
    .floating-cta {
        bottom: 1rem;
        left: 1rem;
    }
}

@media (max-width: 480px) {
    .accordion-item.active .accordion-content {
        padding: 0 1rem 1.5rem 4.5rem;
    }
}
</style>

<!-- Hero Section -->
<section class="tanker-hero">
    <img src="https://images.unsplash.com/photo-1605875621032-ce3b8e6c7fc9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1920" alt="Tanker ship at sea" class="tanker-hero-bg">
    <div class="auto-container">
        <div class="tanker-hero-content">
            <div class="badge-specialized">
                <span style="color: #dbeafe; font-size: 0.875rem;">Specialized Tanker Solutions</span>
            </div>
            
            <h1 class="hero-title">
                Ship Supply for<br>Tankers
            </h1>
            
            <p class="hero-description">
                Specialized provisioning and technical supplies for crude oil, chemical, and LNG tankers worldwide.
            </p>
            
            <div class="btn-group">
                <a href="https://rfq.avsglobalsupply.com" target="_blank" class="btn-primary-hero">
                    Quick Quote
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="/contact" class="btn-secondary-hero">
                    Request a Call
                </a>
            </div>
            
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-value">1500+</div>
                    <div class="stat-label">Ports Worldwide</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">500+</div>
                    <div class="stat-label">Tanker Supplies/Year</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">24h</div>
                    <div class="stat-label">Quote Turnaround</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">100%</div>
                    <div class="stat-label">ISPS Compliant</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tanker Operational Complexity Section -->
<section class="complexity-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Tanker Operational Complexity</h2>
            <p class="section-description">
                Tanker operations demand absolute precision, strict compliance, and zero-error execution. Understanding these challenges is critical to safe and compliant ship supply.
            </p>
        </div>
        
        <div class="complexity-accordion">
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="accordion-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="accordion-title">Strict International & Port-Level Regulations</div>
                    <i class="fas fa-chevron-down accordion-chevron"></i>
                </div>
                <div class="accordion-content">
                    <p>Tanker operations are governed by multiple layers of international maritime law, port state control regulations, and terminal-specific requirements. Every supply must meet ISPS, SOLAS, and MARPOL standards while adhering to local port authority mandates.</p>
                </div>
            </div>
            
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="accordion-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="accordion-title">Controlled & Bonded Items Handling</div>
                    <i class="fas fa-chevron-down accordion-chevron"></i>
                </div>
                <div class="accordion-content">
                    <p>Managing duty-free bonded stores, controlled substances, and restricted materials requires specialized customs clearance, secure storage protocols, and complete chain-of-custody documentation to prevent regulatory violations.</p>
                </div>
            </div>
            
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="accordion-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="accordion-title">Zero-Tolerance Safety Environments</div>
                    <i class="fas fa-chevron-down accordion-chevron"></i>
                </div>
                <div class="accordion-content">
                    <p>Tankers carrying hazardous cargo operate under zero-tolerance safety protocols. All supplies must be intrinsically safe, properly certified, and delivered with comprehensive MSDS documentation and hazard compatibility verification.</p>
                </div>
            </div>
            
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="accordion-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="accordion-title">Narrow Delivery Windows at Terminals</div>
                    <i class="fas fa-chevron-down accordion-chevron"></i>
                </div>
                <div class="accordion-content">
                    <p>Tanker terminals impose strict delivery windows often measured in hours, not days. Missing a window can delay cargo operations, incur terminal penalties, and disrupt critical supply chains requiring precise logistics coordination.</p>
                </div>
            </div>
            
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="accordion-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <div class="accordion-title">High Audit & Documentation Requirements</div>
                    <i class="fas fa-chevron-down accordion-chevron"></i>
                </div>
                <div class="accordion-content">
                    <p>Comprehensive audit trails are mandatory for tanker operations. Every supply item requires detailed documentation including certificates of origin, quality assurance reports, compliance declarations, and full traceability records for port state inspections.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Tailored for Tanker Vessels -->
<section class="services-tailored-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Services Tailored for Tanker Vessels</h2>
            <p class="section-description">
                Specialized supply solutions designed for the unique requirements of tanker operations, with complete control, traceability, and accuracy.
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800" alt="Fresh provisions and food supplies" class="service-image">
                <div class="service-content">
                    <div class="service-icon-box">
                        <i class="fas fa-box"></i>
                    </div>
                    <h3 class="service-title">Certified Provisions & Consumables</h3>
                    <p class="service-text">Full-spectrum provision supply with complete certification and traceability.</p>
                </div>
            </div>
            
            <div class="service-card">
                <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800" alt="Bonded stores" class="service-image">
                <div class="service-content">
                    <div class="service-icon-box">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="service-title">Bonded & Controlled Stores</h3>
                    <p class="service-text">Specialized handling of bonded, duty-free, and controlled materials.</p>
                </div>
            </div>
            
            <div class="service-card">
                <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800" alt="Ship engine spare parts and components" class="service-image">
                <div class="service-content">
                    <div class="service-icon-box">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3 class="service-title">Engine & Technical Supplies</h3>
                    <p class="service-text">Critical spare parts and technical consumables with full OEM compliance.</p>
                </div>
            </div>
            
            <div class="service-card">
                <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800" alt="Protective workwear and hard hats" class="service-image">
                <div class="service-content">
                    <div class="service-icon-box">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3 class="service-title">Safety Equipment & PPE</h3>
                    <p class="service-text">Certified safety gear and personal protective equipment for hazardous environments.</p>
                </div>
            </div>
            
            <div class="service-card">
                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800" alt="Shipping containers" class="service-image">
                <div class="service-content">
                    <div class="service-icon-box">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3 class="service-title">Emergency & Short-Notice</h3>
                    <p class="service-text">Rapid-response supply for urgent requirements and critical operational needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Safety, Compliance & Documentation Section -->
<section class="compliance-section">
    <div class="auto-container">
        <div class="compliance-header">
            <div class="compliance-badge">Critical Trust Zone</div>
            <h2 class="compliance-title" style="color: white;">Safety, Compliance & Documentation</h2>
            <p class="compliance-description">
                Our compliance framework ensures your tanker operations meet the highest standards of safety, regulatory adherence, and documentation integrity.
            </p>
        </div>
        
        <div class="compliance-grid">
            <div class="compliance-card">
                <div class="compliance-card-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="compliance-card-title" style="color: white;">Regulatory Compliance Workflows</h3>
                <p class="compliance-card-text">Structured processes ensuring adherence to international maritime regulations, port authority requirements, and flag state mandates.</p>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-card-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="compliance-card-title" style="color: white;">Audit-Ready Documentation</h3>
                <p class="compliance-card-text">Complete, organized, and instantly retrievable documentation systems prepared for port state control inspections and internal audits.</p>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-card-icon">
                    <i class="fas fa-route"></i>
                </div>
                <h3 class="compliance-card-title" style="color: white;">Product Traceability</h3>
                <p class="compliance-card-text">End-to-end tracking from source to vessel, with complete chain of custody documentation and batch/lot identification.</p>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-card-icon">
                    <i class="fas fa-cube"></i>
                </div>
                <h3 class="compliance-card-title" style="color: white;">Controlled Sourcing & Handling</h3>
                <p class="compliance-card-text">Verified supplier networks, quality assurance protocols, and controlled storage and transportation procedures.</p>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-card-icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <h3 class="compliance-card-title" style="color: white;">Safety Procedures</h3>
                <p class="compliance-card-text">Documented safety management systems aligned with ISM Code requirements and terminal safety protocols.</p>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-card-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3 class="compliance-card-title" style="color: white;">Certification Management</h3>
                <p class="compliance-card-text">Comprehensive management of quality certifications, product certificates, and regulatory compliance documentation.</p>
            </div>
        </div>
        
        <div class="compliance-badges">
            <div class="compliance-badge-item">
                <div class="compliance-badge-name">ISO 9001</div>
            </div>
            <div class="compliance-badge-item">
                <div class="compliance-badge-name">HACCP</div>
            </div>
            <div class="compliance-badge-item">
                <div class="compliance-badge-name">ISM Code</div>
            </div>
            <div class="compliance-badge-item">
                <div class="compliance-badge-name">ISPS</div>
            </div>
        </div>
    </div>
</section>

<!-- Global Port & Terminal Capability -->
<section class="global-capability-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Global Port & Terminal Capability</h2>
            <p class="section-description">
                Comprehensive coverage of major tanker terminals worldwide, with established relationships and local expertise at high-compliance ports.
            </p>
        </div>
        
        <div class="ports-grid">
            <div class="port-region-card">
                <div class="port-region-header">
                    <div class="port-region-icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3 class="port-region-title">North America</h3>
                </div>
                <ul class="port-list">
                    <li>Houston, Texas</li>
                    <li>Port of South Louisiana</li>
                    <li>Corpus Christi, Texas</li>
                    <li>Long Beach, California</li>
                    <li>New York/New Jersey</li>
                    <li>Philadelphia, Pennsylvania</li>
                </ul>
            </div>
            
            <div class="port-region-card">
                <div class="port-region-header">
                    <div class="port-region-icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3 class="port-region-title">South America</h3>
                </div>
                <ul class="port-list">
                    <li>Santos, Brazil</li>
                    <li>Rio de Janeiro, Brazil</li>
                    <li>Buenos Aires, Argentina</li>
                    <li>Callao, Peru</li>
                    <li>Cartagena, Colombia</li>
                </ul>
            </div>
            
            <div class="port-region-card">
                <div class="port-region-header">
                    <div class="port-region-icon">
                        <i class="fas fa-globe-europe"></i>
                    </div>
                    <h3 class="port-region-title">Europe</h3>
                </div>
                <ul class="port-list">
                    <li>Rotterdam, Netherlands</li>
                    <li>Antwerp, Belgium</li>
                    <li>Hamburg, Germany</li>
                    <li>Piraeus, Greece</li>
                    <li>Marseille, France</li>
                    <li>Algeciras, Spain</li>
                </ul>
            </div>
            
            <div class="port-region-card">
                <div class="port-region-header">
                    <div class="port-region-icon">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <h3 class="port-region-title">Middle East & Africa</h3>
                </div>
                <ul class="port-list">
                    <li>Fujairah, UAE</li>
                    <li>Jebel Ali, Dubai</li>
                    <li>Ras Tanura, Saudi Arabia</li>
                    <li>Durban, South Africa</li>
                    <li>Cape Town, South Africa</li>
                    <li>Port Said, Egypt</li>
                </ul>
            </div>
            
            <div class="port-region-card">
                <div class="port-region-header">
                    <div class="port-region-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h3 class="port-region-title">South & Southeast Asia</h3>
                </div>
                <ul class="port-list">
                    <li>Singapore</li>
                    <li>Mumbai, India</li>
                    <li>Chennai, India</li>
                    <li>Port Klang, Malaysia</li>
                    <li>Bangkok, Thailand</li>
                    <li>Jakarta, Indonesia</li>
                </ul>
            </div>
            
            <div class="port-region-card">
                <div class="port-region-header">
                    <div class="port-region-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h3 class="port-region-title">East Asia</h3>
                </div>
                <ul class="port-list">
                    <li>Shanghai, China</li>
                    <li>Ningbo-Zhoushan, China</li>
                    <li>Busan, South Korea</li>
                    <li>Tokyo, Japan</li>
                    <li>Yokohama, Japan</li>
                    <li>Hong Kong</li>
                </ul>
            </div>
            
            <div class="port-region-card">
                <div class="port-region-header">
                    <div class="port-region-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="port-region-title">Oceania</h3>
                </div>
                <ul class="port-list">
                    <li>Melbourne, Australia</li>
                    <li>Sydney, Australia</li>
                    <li>Brisbane, Australia</li>
                    <li>Auckland, New Zealand</li>
                    <li>Port Hedland, Australia</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Operational Workflow -->
<section class="workflow-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Operational Workflow</h2>
            <p class="section-description">
                A predictable, disciplined, and zero-error focused process designed for tanker operational requirements and compliance standards.
            </p>
        </div>
        
        <div class="workflow-container">
            <div class="workflow-steps">
                <div class="workflow-step workflow-step-left">
                    <div class="workflow-number">1</div>
                    <div class="workflow-card">
                        <div class="workflow-card-header">
                            <div class="workflow-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div>
                                <div class="workflow-step-label">Step 1</div>
                            </div>
                        </div>
                        <h3 class="workflow-card-title">RFQ & Compliance Review</h3>
                        <p class="workflow-card-text">Request submission with immediate compliance and regulatory requirement assessment.</p>
                        <ul class="workflow-list">
                            <li>Specification verification</li>
                            <li>Regulatory compliance check</li>
                            <li>Port authority requirement review</li>
                            <li>Delivery window confirmation</li>
                        </ul>
                    </div>
                </div>
                
                <div class="workflow-step workflow-step-right">
                    <div class="workflow-number">2</div>
                    <div class="workflow-card">
                        <div class="workflow-card-header">
                            <div class="workflow-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <div>
                                <div class="workflow-step-label">Step 2</div>
                            </div>
                        </div>
                        <h3 class="workflow-card-title">Controlled Sourcing & Verification</h3>
                        <p class="workflow-card-text">Procurement from verified suppliers with quality assurance and certification validation.</p>
                        <ul class="workflow-list">
                            <li>Approved supplier sourcing</li>
                            <li>Product specification validation</li>
                            <li>Quality certification verification</li>
                            <li>Batch/lot documentation</li>
                        </ul>
                    </div>
                </div>
                
                <div class="workflow-step workflow-step-left">
                    <div class="workflow-number">3</div>
                    <div class="workflow-card">
                        <div class="workflow-card-header">
                            <div class="workflow-icon">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <div>
                                <div class="workflow-step-label">Step 3</div>
                            </div>
                        </div>
                        <h3 class="workflow-card-title">Documentation & Clearance</h3>
                        <p class="workflow-card-text">Comprehensive documentation preparation for customs, port authorities, and vessel inspections.</p>
                        <ul class="workflow-list">
                            <li>Customs clearance documentation</li>
                            <li>MSDS and safety certificates</li>
                            <li>Certificate of origin</li>
                            <li>Quality assurance reports</li>
                        </ul>
                    </div>
                </div>
                
                <div class="workflow-step workflow-step-right">
                    <div class="workflow-number">4</div>
                    <div class="workflow-card">
                        <div class="workflow-card-header">
                            <div class="workflow-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div>
                                <div class="workflow-step-label">Step 4</div>
                            </div>
                        </div>
                        <h3 class="workflow-card-title">Precision Terminal Delivery</h3>
                        <p class="workflow-card-text">Time-critical delivery coordinated with terminal operations and vessel loading schedules.</p>
                        <ul class="workflow-list">
                            <li>Terminal access coordination</li>
                            <li>Delivery window synchronization</li>
                            <li>Security protocol compliance</li>
                            <li>Vessel handover documentation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section-tanker">
    <div class="auto-container">
        <h2 style="color:white;">Ready to Supply Your Tanker?</h2>
        <p>Get a competitive quote in minutes. Available 24/7 for all tanker supply needs.</p>
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

<!-- Floating CTA Button -->
<div class="floating-cta">
    <a href="https://rfq.avsglobalsupply.com" target="_blank" class="floating-cta-btn">
        <i class="fas fa-comment"></i>
        Get Quote
    </a>
</div>

<!-- FAQ Section -->
<section class="faq-section sec-pad" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="auto-container">
        <div class="section-header text-center mb-5">
            <span class="badge-specialty" style="display: inline-block; padding: 0.5rem 1.5rem; background: rgba(59, 130, 246, 0.1); border-radius: 50px; color: #3b82f6; font-weight: 600; margin-bottom: 1rem;"><i class="fas fa-question-circle" style="margin-right: 0.5rem;"></i>FAQ</span>
            <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: #0c1e50; margin-bottom: 1rem;">Frequently Asked Questions</h2>
            <p class="section-description" style="font-size: 1.1rem; color: #64748b; max-width: 700px; margin: 0 auto;">Common questions about tanker vessel supply services</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="accordion" id="faqAccordionTankers" style="background: white; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
                    
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faqt1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapset1" aria-expanded="true" aria-controls="collapset1" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                What specialized supplies do tankers require?
                            </button>
                        </h3>
                        <div id="collapset1" class="accordion-collapse collapse show" aria-labelledby="faqt1" data-bs-parent="#faqAccordionTankers">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Tankers require specialized cargo handling equipment, pump room spares, inert gas system components, tank cleaning chemicals, crude oil washing (COW) equipment, safety gear for hazardous cargo operations, and provisions for long voyages. We provide comprehensive tanker-specific supplies.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faqt2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapset2" aria-expanded="false" aria-controls="collapset2" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                Do you supply chemical and gas detection equipment?
                            </button>
                        </h3>
                        <div id="collapset2" class="accordion-collapse collapse" aria-labelledby="faqt2" data-bs-parent="#faqAccordionTankers">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Yes, we supply certified gas detection systems, portable gas detectors, breathing apparatus, safety equipment for enclosed spaces, and emergency response equipment. All products meet IMO, SOLAS, and flag state requirements with proper certification.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faqt3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapset3" aria-expanded="false" aria-controls="collapset3" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                Are your products suitable for chemical tankers?
                            </button>
                        </h3>
                        <div id="collapset3" class="accordion-collapse collapse" aria-labelledby="faqt3" data-bs-parent="#faqAccordionTankers">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Absolutely. We supply products specifically designed for chemical tanker operations including compatible pump seals, gaskets, hoses, tank coatings, and specialized cleaning chemicals. All materials are selected based on chemical compatibility charts and industry best practices.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faqt4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapset4" aria-expanded="false" aria-controls="collapset4" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                What documentation do you provide for hazardous materials?
                            </button>
                        </h3>
                        <div id="collapset4" class="accordion-collapse collapse" aria-labelledby="faqt4" data-bs-parent="#faqAccordionTankers">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                We provide complete documentation including Material Safety Data Sheets (MSDS), dangerous goods declarations, certificates of conformity, and all required shipping documents. Our team ensures full compliance with IMDG code and local port regulations.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="accordion-item" style="border: none;">
                        <h3 class="accordion-header" id="faqt5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapset5" aria-expanded="false" aria-controls="collapset5" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                Can you supply to LNG carriers?
                            </button>
                        </h3>
                        <div id="collapset5" class="accordion-collapse collapse" aria-labelledby="faqt5" data-bs-parent="#faqAccordionTankers">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Yes, we have specialized experience with LNG carrier operations. We supply cryogenic equipment spares, cargo handling system components, boil-off gas system parts, and specialized provisions for LNG vessels. Our team understands the unique requirements of gas carrier operations.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleAccordion(header) {
    const item = header.parentElement;
    const allItems = document.querySelectorAll('.accordion-item');
    
    // Close all other items
    allItems.forEach(otherItem => {
        if (otherItem !== item && otherItem.classList.contains('active')) {
            otherItem.classList.remove('active');
        }
    });
    
    // Toggle current item
    item.classList.toggle('active');
}
</script>

<?php require_once 'footer.php'; ?>
