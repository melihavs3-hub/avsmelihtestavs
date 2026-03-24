<?php
$seo_title = "Ship Supply for Container Vessels | Global Container Ship Supplies | AVS Global Supply";
$canonical = "https://www.avsglobalsupply.com/container-vessels";
$eng_link = "https://www.avsglobalsupply.com/container-vessels";
$tr_link = "https://www.avsglobalsupply.com/tr/container-vessels";

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
      "@id": "https://www.avsglobalsupply.com/container-vessels#webpage",
      "url": "https://www.avsglobalsupply.com/container-vessels",
      "name": "Ship Supply for Container Vessels | Global Container Ship Supplies | AVS Global Supply",
      "description": "Global container vessel ship supply solutions by AVS Global Supply. Comprehensive provisions, bonded stores, technical stores, deck stores, safety equipment, and cabin stores delivered with precision timing for fixed-schedule liner operations, supported by 24-hour average response and high on-time delivery performance.",
      "inLanguage": "en",
      "isPartOf": { "@id": "https://www.avsglobalsupply.com/#website" },
      "about": { "@id": "https://www.avsglobalsupply.com/container-vessels#service" },
      "keywords": [
        "container vessel supplier",
        "container ship supply",
        "container vessel ship chandler",
        "container ship chandler",
        "container vessel provisions supplier",
        "container ship provisions",
        "technical stores for container vessels",
        "bonded stores for container vessels",
        "deck stores for container ships",
        "safety equipment supply for ships",
        "global ship supply for container lines",
        "liner operations supply partner",
        "on-time ship supply delivery"
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.avsglobalsupply.com/container-vessels#breadcrumbs",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.avsglobalsupply.com/" },
        { "@type": "ListItem", "position": 2, "name": "Container Vessels", "item": "https://www.avsglobalsupply.com/container-vessels" }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.avsglobalsupply.com/container-vessels#service",
      "name": "Container Vessel Ship Supply Solutions (Container Ship Supplier & Chandler) - AVS Global Supply",
      "description": "AVS Global Supply delivers full-spectrum ship supply solutions for container vessels operating on fixed schedules and tight port windows. Our service covers end-to-end provisioning and technical supply for liner operations—fresh, frozen and dry provisions; bonded stores; technical stores and spare parts; deck stores; safety equipment; and cabin stores. Designed for precision timing, reliability, and documentation readiness, AVS supports container lines with a streamlined workflow (request, quote within 24 hours, quality-verified procurement with cold chain management, and on-time vessel-side delivery). Supported by global port coverage and 24/7 operations, AVS helps container fleets minimize port time and maintain operational continuity.",
      "inLanguage": "en",
      "provider": { "@id": "https://www.avsglobalsupply.com/#organization" },
      "areaServed": "Worldwide",
      "serviceType": [
        "Container vessel ship supply",
        "Container ship chandler",
        "Marine provisions for container vessels",
        "Bonded stores supply",
        "Technical stores supply",
        "Deck stores supply",
        "Safety equipment supply",
        "Cabin stores supply"
      ],
      "category": [
        "Ship Supply",
        "Marine Provisions",
        "Marine Chandlery",
        "Bonded Stores",
        "Technical Stores",
        "Safety Equipment",
        "Cabin Stores"
      ],
      "audience": {
        "@type": "BusinessAudience",
        "audienceType": [
          "Container shipping lines",
          "Ship owners",
          "Ship management companies",
          "Fleet managers",
          "Marine procurement and purchasing teams"
        ]
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Container Vessel Supply Categories",
        "itemListElement": [
          {
            "@type": "OfferCatalog",
            "name": "Provisions & Consumables",
            "itemListElement": [
              { "@type": "Offer", "name": "Fresh meat, poultry, and seafood" },
              { "@type": "Offer", "name": "Frozen foods and vegetables" },
              { "@type": "Offer", "name": "Dry goods and canned products" },
              { "@type": "Offer", "name": "Dairy products and bakery items" },
              { "@type": "Offer", "name": "Beverages and drinking water" }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "Bonded Stores",
            "itemListElement": [
              { "@type": "Offer", "name": "Tobacco products" },
              { "@type": "Offer", "name": "Alcoholic beverages" },
              { "@type": "Offer", "name": "Personal care items" },
              { "@type": "Offer", "name": "Crew comfort products" },
              { "@type": "Offer", "name": "Bonded store management" }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "Technical Stores",
            "itemListElement": [
              { "@type": "Offer", "name": "Engine spare parts" },
              { "@type": "Offer", "name": "Lubricants and oils" },
              { "@type": "Offer", "name": "Maintenance consumables" },
              { "@type": "Offer", "name": "Filters and gaskets" },
              { "@type": "Offer", "name": "Electrical supplies" }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "Deck Stores",
            "itemListElement": [
              { "@type": "Offer", "name": "Ropes and wires" },
              { "@type": "Offer", "name": "Paints and coatings" },
              { "@type": "Offer", "name": "Cleaning supplies" },
              { "@type": "Offer", "name": "Navigation consumables" },
              { "@type": "Offer", "name": "Deck maintenance items" }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "Safety Equipment",
            "itemListElement": [
              { "@type": "Offer", "name": "Personal protective equipment (PPE)" },
              { "@type": "Offer", "name": "Fire safety equipment" },
              { "@type": "Offer", "name": "Life-saving appliances" },
              { "@type": "Offer", "name": "Safety clothing and boots" },
              { "@type": "Offer", "name": "Emergency equipment" }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "Cabin Stores",
            "itemListElement": [
              { "@type": "Offer", "name": "Linens and bedding" },
              { "@type": "Offer", "name": "Towels and bath supplies" },
              { "@type": "Offer", "name": "Cleaning products" },
              { "@type": "Offer", "name": "Cabin amenities" },
              { "@type": "Offer", "name": "Housekeeping consumables" }
            ]
          }
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
/* Landing Page Design - Container Vessels */
:root {
    --blue-950: #172554;
    --blue-900: #1e3a8a;
    --blue-800: #1e40af;
    --blue-700: #1d4ed8;
    --blue-600: #2563eb;
    --blue-500: #3b82f6;
    --blue-100: #dbeafe;
    --blue-50: #eff6ff;
    --slate-50: #f8fafc;
    --slate-100: #f1f5f9;
    --slate-900: #0f172a;
}

/* Hero Section */
.hero-container {
    position: relative;
    min-height: 90vh;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.hero-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(23, 37, 84, 0.95), rgba(30, 58, 138, 0.90), rgba(23, 37, 84, 0.80));
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    animation: fadeInUp 0.8s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-badge {
    display: inline-block;
    padding: 0.5rem 1.5rem;
    background: rgba(37, 99, 235, 0.2);
    backdrop-filter: blur(8px);
    border-radius: 9999px;
    border: 1px solid rgba(96, 165, 250, 0.3);
    color: var(--blue-100);
    font-size: 0.875rem;
    margin-bottom: 1.5rem;
}

.hero-title {
    font-size: 3.75rem;
    font-weight: 700;
    color: white;
    margin-bottom: 1.5rem;
    line-height: 1.1;
}

.hero-subtitle {
    font-size: 1.25rem;
    color: var(--blue-100);
    margin-bottom: 2rem;
    max-width: 42rem;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 4rem;
}

.btn-primary {
    padding: 1rem 2rem;
    background: var(--blue-600);
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

.btn-primary:hover {
    background: var(--blue-700);
    transform: translateY(-2px);
    color: white;
}

.btn-secondary {
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

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    color: white;
}

.hero-stats {
    padding-top: 3rem;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
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
    color: var(--blue-100);
}

/* Vessel Overview Section */
.vessel-overview {
    padding: 6rem 0;
    background: linear-gradient(to bottom, white, var(--slate-50));
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
    color: var(--slate-900);
}

.section-description {
    font-size: 1.125rem;
    color: #64748b;
    line-height: 1.6;
}

.specs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    max-width: 75rem;
    margin: 0 auto;
}

.spec-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    border: 1px solid #e2e8f0;
    transition: all 0.3s;
}

.spec-card:hover {
    border-color: #93c5fd;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    transform: translateY(-4px);
}

.spec-icon {
    width: 3.5rem;
    height: 3.5rem;
    background: linear-gradient(135deg, var(--blue-100), var(--blue-50));
    border-radius: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    transition: transform 0.3s;
}

.spec-card:hover .spec-icon {
    transform: scale(1.1);
}

.spec-icon i {
    font-size: 1.75rem;
    color: var(--blue-900);
}

.spec-label {
    font-size: 0.875rem;
    color: #64748b;
    margin-bottom: 0.5rem;
}

.spec-value {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--blue-600);
    margin-bottom: 0.5rem;
}

.spec-description {
    font-size: 0.875rem;
    color: #64748b;
    line-height: 1.5;
}

/* Services Section with Accordion */
.services-section {
    padding: 6rem 0;
    background: white;
}

.services-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
    max-width: 75rem;
    margin: 0 auto;
}

.service-accordion {
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 1rem;
    overflow: hidden;
    transition: all 0.3s;
}

.service-accordion.active {
    border-color: var(--blue-600);
    box-shadow: 0 8px 20px rgba(37, 99, 235, 0.15);
}

.service-header {
    padding: 2rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 1.5rem;
    transition: background 0.3s;
}

.service-header:hover {
    background: var(--slate-50);
}

.service-icon-box {
    width: 4rem;
    height: 4rem;
    background: linear-gradient(135deg, var(--blue-100), var(--blue-50));
    border-radius: 0.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s;
}

.service-accordion.active .service-icon-box {
    background: var(--blue-600);
}

.service-accordion.active .service-icon-box i {
    color: white;
}

.service-icon-box i {
    font-size: 2rem;
    color: var(--blue-600);
    transition: color 0.3s;
}

.service-info {
    flex: 1;
}

.service-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 0.5rem;
}

.service-summary {
    color: #64748b;
    font-size: 1rem;
}

.service-chevron {
    font-size: 1.5rem;
    color: #64748b;
    transition: transform 0.3s;
}

.service-accordion.active .service-chevron {
    transform: rotate(180deg);
}

.service-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out, padding 0.3s ease-out;
}

.service-accordion.active .service-content {
    max-height: 500px;
    padding: 0 2rem 2rem 2rem;
}

.service-details {
    padding: 1.5rem;
    background: var(--slate-50);
    border-radius: 0.75rem;
}

.service-details ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.service-details li {
    padding: 0.75rem 0;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    border-bottom: 1px solid #e2e8f0;
}

.service-details li:last-child {
    border-bottom: none;
}

.service-details li::before {
    content: '✓';
    display: flex;
    align-items: center;
    justify-content: center;
    width: 1.5rem;
    height: 1.5rem;
    background: var(--blue-100);
    color: var(--blue-600);
    border-radius: 50%;
    font-weight: 700;
    flex-shrink: 0;
}

/* Why AVS Section */
.why-avs-section {
    padding: 6rem 0;
    background: linear-gradient(to bottom, var(--slate-50), white);
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    max-width: 75rem;
    margin: 0 auto;
}

.benefit-card {
    position: relative;
    background: white;
    padding: 2.5rem;
    border-radius: 1.5rem;
    border: 1px solid #e2e8f0;
    overflow: hidden;
    transition: all 0.3s;
}

.benefit-card::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(37, 99, 235, 0.1), transparent);
    border-radius: 50%;
    transform: translate(50%, -50%);
    filter: blur(40px);
}

.benefit-card:hover {
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    transform: translateY(-4px);
}

.benefit-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(to right, var(--blue-600), var(--blue-400));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s;
}

.benefit-card:hover::after {
    transform: scaleX(1);
}

.benefit-icon {
    width: 4rem;
    height: 4rem;
    background: linear-gradient(135deg, var(--blue-100), var(--blue-50));
    border-radius: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.benefit-icon i {
    font-size: 2rem;
    color: var(--blue-600);
}

.benefit-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 1rem;
}

.benefit-description {
    color: #64748b;
    line-height: 1.6;
}

/* Global Coverage Section */
.global-coverage {
    padding: 6rem 0;
    background: white;
}

.regions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    max-width: 75rem;
    margin: 3rem auto 0;
}

.region-card {
    padding: 2rem;
    border-radius: 1rem;
    border: 2px solid;
    transition: all 0.3s;
}

.region-card.asia {
    background: #eff6ff;
    border-color: #93c5fd;
}

.region-card.europe {
    background: #f0fdf4;
    border-color: #86efac;
}

.region-card.americas {
    background: #fef3c7;
    border-color: #fcd34d;
}

.region-card.mea {
    background: #fce7f3;
    border-color: #f9a8d4;
}

.region-card:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transform: translateY(-4px);
}

.region-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.region-icon {
    font-size: 2rem;
}

.region-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--slate-900);
}

.region-ports {
    list-style: none;
    padding: 0;
    margin: 0;
}

.region-ports li {
    padding: 0.5rem 0;
    color: #64748b;
    font-size: 0.875rem;
}

.region-more {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    font-weight: 600;
    color: var(--blue-600);
}

/* Workflow Section */
.workflow-section {
    padding: 6rem 0;
    background: linear-gradient(to bottom, white, var(--slate-50));
}

.workflow-timeline {
    max-width: 75rem;
    margin: 3rem auto;
    position: relative;
}

.workflow-line {
    position: absolute;
    top: 3rem;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(to right, #dbeafe, #2563eb, #dbeafe);
    z-index: 0;
}

.workflow-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    position: relative;
    z-index: 1;
}

.workflow-step {
    text-align: center;
}

.workflow-number {
    width: 6rem;
    height: 6rem;
    background: linear-gradient(135deg, var(--blue-600), var(--blue-500));
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    font-weight: 700;
    margin: 0 auto 1.5rem;
    box-shadow: 0 0 0 8px white, 0 0 0 10px #dbeafe;
}

.workflow-step-badge {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    background: var(--blue-100);
    color: var(--blue-700);
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.workflow-step-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 0.75rem;
}

.workflow-step-description {
    font-size: 0.875rem;
    color: #64748b;
    line-height: 1.5;
}

/* Compliance Section */
.compliance-section {
    padding: 6rem 0;
    background: white;
}

.compliance-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    max-width: 75rem;
    margin: 3rem auto;
}

.compliance-card {
    background: linear-gradient(to bottom, var(--slate-50), white);
    padding: 2rem;
    border-radius: 1rem;
    text-align: center;
    transition: all 0.3s;
}

.compliance-card:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    transform: translateY(-4px);
}

.compliance-icon {
    width: 4rem;
    height: 4rem;
    background: linear-gradient(135deg, var(--blue-100), var(--blue-50));
    border-radius: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
}

.compliance-icon i {
    font-size: 2rem;
    color: var(--blue-600);
}

.compliance-name {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 0.5rem;
}

.compliance-description {
    font-size: 0.75rem;
    color: #64748b;
}

.trust-box {
    max-width: 48rem;
    margin: 3rem auto 0;
    padding: 2rem;
    background: var(--blue-50);
    border: 2px solid var(--blue-200);
    border-radius: 1rem;
    text-align: center;
}

.trust-box p {
    color: var(--blue-900);
    margin: 0;
}

/* Final CTA Section */
.final-cta {
    position: relative;
    padding: 6rem 0;
    overflow: hidden;
}

.final-cta-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}

.final-cta-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(23, 37, 84, 0.95), rgba(30, 58, 138, 0.90));
    z-index: 1;
}

.final-cta-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: white;
}

.final-cta-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
}

.final-cta-description {
    font-size: 1.25rem;
    color: var(--blue-100);
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
    margin-bottom: 4rem;
}

.btn-cta-white {
    padding: 1rem 2rem;
    background: white;
    color: var(--blue-600);
    border: none;
    border-radius: 0.5rem;
    font-size: 1.125rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-cta-white:hover {
    background: var(--blue-50);
    transform: translateY(-2px);
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    max-width: 50rem;
    margin: 0 auto;
    padding-top: 3rem;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.contact-item {
    text-align: center;
}

.contact-icon {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.contact-label {
    font-size: 0.875rem;
    color: var(--blue-100);
    margin-bottom: 0.5rem;
}

.contact-value {
    font-size: 1.125rem;
    font-weight: 600;
}

/* Floating CTA */
.floating-cta {
    position: fixed;
    bottom: 2rem;
    left: 2rem;
    z-index: 1000;
}

.floating-cta-btn {
    background: var(--blue-600);
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
    background: var(--blue-700);
    box-shadow: 0 15px 40px rgba(37, 99, 235, 0.5);
    transform: translateY(-2px);
    color: white;
}

/* Responsive */
@media (min-width: 768px) {
    .hero-stats {
        grid-template-columns: repeat(4, 1fr);
    }
    
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .final-cta-title {
        font-size: 2rem;
    }
    
    .workflow-line {
        display: none;
    }
    
    .workflow-steps {
        grid-template-columns: 1fr;
    }
    
    .floating-cta {
        bottom: 1rem;
        left: 1rem;
    }
}
</style>

<!-- Hero Section -->
<section class="hero-container">
    <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1920" alt="Container vessel" class="hero-bg">
    <div class="hero-overlay"></div>
    <div class="auto-container">
        <div class="hero-content">
            <div class="hero-badge">Global Container Solutions</div>
            
            <h1 class="hero-title">
                Container Vessel<br>Ship Supply Solutions
            </h1>
            
            <p class="hero-subtitle">
                Comprehensive provisioning and technical supplies for container vessels operating on global liner routes with precision timing and reliability.
            </p>
            
            <div class="hero-buttons">
                <a href="https://rfq.avsglobalsupply.com" target="_blank" class="btn-primary">
                    Get Quick Quote
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="/contact" class="btn-secondary">
                    Schedule Call
                </a>
            </div>
            
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-value">1500+</div>
                    <div class="stat-label">Ports Worldwide</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">126+</div>
                    <div class="stat-label">Countries</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">24/7</div>
                    <div class="stat-label">Operations</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">98%</div>
                    <div class="stat-label">On-Time Delivery</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vessel Overview Section -->
<section class="vessel-overview">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Understanding Container Operations</h2>
            <p class="section-description">
                Container vessels operate on fixed schedules with minimal port time, demanding precision coordination and reliable supply partners.
            </p>
        </div>
        
        <div class="specs-grid">
            <div class="spec-card">
                <div class="spec-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="spec-label">Port Time</div>
                <div class="spec-value">12-48h</div>
                <div class="spec-description">Tight turnaround windows requiring precise delivery timing</div>
            </div>
            
            <div class="spec-card">
                <div class="spec-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="spec-label">Crew Size</div>
                <div class="spec-value">20-30</div>
                <div class="spec-description">Large crews requiring substantial provision quantities</div>
            </div>
            
            <div class="spec-card">
                <div class="spec-icon">
                    <i class="fas fa-route"></i>
                </div>
                <div class="spec-label">Voyage Duration</div>
                <div class="spec-value">3-6 weeks</div>
                <div class="spec-description">Extended routes between major container hub ports</div>
            </div>
            
            <div class="spec-card">
                <div class="spec-icon">
                    <i class="fas fa-box"></i>
                </div>
                <div class="spec-label">Supply Volume</div>
                <div class="spec-value">High</div>
                <div class="spec-description">Large-scale provisioning for long voyages</div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section with Accordion -->
<section class="services-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Comprehensive Supply Solutions</h2>
            <p class="section-description">
                Full-spectrum ship supply services tailored for container vessel operations. Click to explore each category.
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-accordion" onclick="toggleService(this)">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="service-info">
                        <h3 class="service-title">Provisions & Consumables</h3>
                        <p class="service-summary">Fresh, frozen, and dry provisions for extended voyages</p>
                    </div>
                    <i class="fas fa-chevron-down service-chevron"></i>
                </div>
                <div class="service-content">
                    <div class="service-details">
                        <ul>
                            <li>Fresh meat, poultry, and seafood</li>
                            <li>Frozen foods and vegetables</li>
                            <li>Dry goods and canned products</li>
                            <li>Dairy products and bakery items</li>
                            <li>Beverages and drinking water</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="service-accordion" onclick="toggleService(this)">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="service-info">
                        <h3 class="service-title">Bonded Stores</h3>
                        <p class="service-summary">Duty-free items and bonded products</p>
                    </div>
                    <i class="fas fa-chevron-down service-chevron"></i>
                </div>
                <div class="service-content">
                    <div class="service-details">
                        <ul>
                            <li>Tobacco products</li>
                            <li>Alcoholic beverages</li>
                            <li>Personal care items</li>
                            <li>Crew comfort products</li>
                            <li>Bonded store management</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="service-accordion" onclick="toggleService(this)">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="service-info">
                        <h3 class="service-title">Technical Stores</h3>
                        <p class="service-summary">Engine room supplies and spare parts</p>
                    </div>
                    <i class="fas fa-chevron-down service-chevron"></i>
                </div>
                <div class="service-content">
                    <div class="service-details">
                        <ul>
                            <li>Engine spare parts</li>
                            <li>Lubricants and oils</li>
                            <li>Maintenance consumables</li>
                            <li>Filters and gaskets</li>
                            <li>Electrical supplies</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="service-accordion" onclick="toggleService(this)">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-ship"></i>
                    </div>
                    <div class="service-info">
                        <h3 class="service-title">Deck Stores</h3>
                        <p class="service-summary">Deck equipment and navigation supplies</p>
                    </div>
                    <i class="fas fa-chevron-down service-chevron"></i>
                </div>
                <div class="service-content">
                    <div class="service-details">
                        <ul>
                            <li>Ropes and wires</li>
                            <li>Paints and coatings</li>
                            <li>Cleaning supplies</li>
                            <li>Navigation consumables</li>
                            <li>Deck maintenance items</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="service-accordion" onclick="toggleService(this)">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <div class="service-info">
                        <h3 class="service-title">Safety Equipment</h3>
                        <p class="service-summary">PPE and safety compliance items</p>
                    </div>
                    <i class="fas fa-chevron-down service-chevron"></i>
                </div>
                <div class="service-content">
                    <div class="service-details">
                        <ul>
                            <li>Personal protective equipment</li>
                            <li>Fire safety equipment</li>
                            <li>Life-saving appliances</li>
                            <li>Safety clothing and boots</li>
                            <li>Emergency equipment</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="service-accordion" onclick="toggleService(this)">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-bed"></i>
                    </div>
                    <div class="service-info">
                        <h3 class="service-title">Cabin Stores</h3>
                        <p class="service-summary">Accommodation and housekeeping supplies</p>
                    </div>
                    <i class="fas fa-chevron-down service-chevron"></i>
                </div>
                <div class="service-content">
                    <div class="service-details">
                        <ul>
                            <li>Linens and bedding</li>
                            <li>Towels and bath supplies</li>
                            <li>Cleaning products</li>
                            <li>Cabin amenities</li>
                            <li>Housekeeping consumables</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why AVS Section -->
<section class="why-avs-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Why Container Lines Choose AVS</h2>
            <p class="section-description">
                Proven reliability, global coverage, and operational excellence that container vessel operators depend on.
            </p>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <h3 class="benefit-title">Schedule Synchronization</h3>
                <p class="benefit-description">Real-time coordination with vessel ETAs and port operations ensuring zero-delay deliveries aligned with your tight sailing schedules.</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3 class="benefit-title">Quality Assurance</h3>
                <p class="benefit-description">ISO 9001 certified processes with stringent quality controls ensuring consistent product excellence across all supply categories.</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="benefit-title">Global Port Coverage</h3>
                <p class="benefit-description">Established presence at all major container hub ports worldwide with local teams and regulatory expertise.</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3 class="benefit-title">Transparent Pricing</h3>
                <p class="benefit-description">Clear, competitive pricing with no hidden fees. Volume discount programs available for fleet accounts.</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="benefit-title">24/7 Operations</h3>
                <p class="benefit-description">Round-the-clock operations team ready to handle urgent requests, schedule changes, and last-minute requirements.</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-file-invoice"></i>
                </div>
                <h3 class="benefit-title">Digital Systems</h3>
                <p class="benefit-description">Complete digital documentation, real-time tracking, automated invoicing, and fleet management integration.</p>
            </div>
        </div>
    </div>
</section>

<!-- Global Coverage Section -->
<section class="global-coverage">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Global Container Port Network</h2>
            <p class="section-description">
                Coverage of the world's busiest container ports and major liner service routes across all continents.
            </p>
        </div>
        
        <div class="regions-grid">
            <div class="region-card asia">
                <div class="region-header">
                    <span class="region-icon">🌏</span>
                    <h3 class="region-title">Asia Pacific</h3>
                </div>
                <ul class="region-ports">
                    <li>Shanghai, China</li>
                    <li>Singapore</li>
                    <li>Shenzhen, China</li>
                    <li>Busan, South Korea</li>
                    <li>Hong Kong</li>
                </ul>
                <div class="region-more">+ 15 more ports</div>
            </div>
            
            <div class="region-card europe">
                <div class="region-header">
                    <span class="region-icon">🌍</span>
                    <h3 class="region-title">Europe</h3>
                </div>
                <ul class="region-ports">
                    <li>Rotterdam, Netherlands</li>
                    <li>Antwerp, Belgium</li>
                    <li>Hamburg, Germany</li>
                    <li>Valencia, Spain</li>
                    <li>Piraeus, Greece</li>
                </ul>
                <div class="region-more">+ 12 more ports</div>
            </div>
            
            <div class="region-card americas">
                <div class="region-header">
                    <span class="region-icon">🌎</span>
                    <h3 class="region-title">Americas</h3>
                </div>
                <ul class="region-ports">
                    <li>Los Angeles, USA</li>
                    <li>Long Beach, USA</li>
                    <li>New York/NJ, USA</li>
                    <li>Santos, Brazil</li>
                    <li>Vancouver, Canada</li>
                </ul>
                <div class="region-more">+ 10 more ports</div>
            </div>
            
            <div class="region-card mea">
                <div class="region-header">
                    <span class="region-icon">🌍</span>
                    <h3 class="region-title">MEA</h3>
                </div>
                <ul class="region-ports">
                    <li>Jebel Ali, UAE</li>
                    <li>Port Said, Egypt</li>
                    <li>Durban, South Africa</li>
                    <li>Tangier, Morocco</li>
                    <li>King Abdullah, KSA</li>
                </ul>
                <div class="region-more">+ 8 more ports</div>
            </div>
        </div>
    </div>
</section>

<!-- Workflow Section -->
<section class="workflow-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Our Operational Workflow</h2>
            <p class="section-description">
                A streamlined, efficient process designed to meet the demanding schedules of container vessel operations.
            </p>
        </div>
        
        <div class="workflow-timeline">
            <div class="workflow-line"></div>
            <div class="workflow-steps">
                <div class="workflow-step">
                    <div class="workflow-number">1</div>
                    <div class="workflow-step-badge">Step 1</div>
                    <h3 class="workflow-step-title">Request</h3>
                    <p class="workflow-step-description">Submit requirements via portal or email with port and ETA details</p>
                </div>
                
                <div class="workflow-step">
                    <div class="workflow-number">2</div>
                    <div class="workflow-step-badge">Step 2</div>
                    <h3 class="workflow-step-title">Quote</h3>
                    <p class="workflow-step-description">Receive detailed quotation within 24 hours with transparent pricing</p>
                </div>
                
                <div class="workflow-step">
                    <div class="workflow-number">3</div>
                    <div class="workflow-step-badge">Step 3</div>
                    <h3 class="workflow-step-title">Procurement</h3>
                    <p class="workflow-step-description">Quality-verified sourcing and preparation with cold chain management</p>
                </div>
                
                <div class="workflow-step">
                    <div class="workflow-number">4</div>
                    <div class="workflow-step-badge">Step 4</div>
                    <h3 class="workflow-step-title">Delivery</h3>
                    <p class="workflow-step-description">On-time vessel-side delivery with complete documentation</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compliance Section -->
<section class="compliance-section">
    <div class="auto-container">
        <div class="section-header">
            <h2 class="section-title">Compliance & Standards</h2>
            <p class="section-description">
                Certified to the highest international standards ensuring quality, safety, and regulatory compliance.
            </p>
        </div>
        
        <div class="compliance-grid">
            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="compliance-name">ISO 9001</div>
                <div class="compliance-description">Quality Management</div>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="compliance-name">HACCP</div>
                <div class="compliance-description">Food Safety</div>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-award"></i>
                </div>
                <div class="compliance-name">ISPS</div>
                <div class="compliance-description">Port Security</div>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <div class="compliance-name">ISM Code</div>
                <div class="compliance-description">Safety Management</div>
            </div>
        </div>
        
        <div class="trust-box">
            <p><strong>Trusted by leading container shipping lines worldwide</strong> – our commitment to quality, reliability, and compliance has made us the preferred ship supply partner for major operators.</p>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="final-cta">
    <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1920" alt="Container operations" class="final-cta-bg">
    <div class="final-cta-overlay"></div>
    <div class="auto-container">
        <div class="final-cta-content">
            <h2 class="final-cta-title" style="color:white;" >Ready to Supply Your Fleet?</h2>
            <p class="final-cta-description">
                Get competitive quotes and reliable service for your next port call. Our team is standing by 24/7.
            </p>
            
            <div class="cta-buttons">
                <a href="https://rfq.avsglobalsupply.com" target="_blank" class="btn-cta-white">
                    <i class="fas fa-file-invoice"></i>
                    Request Quote Now
                </a>
                <a href="/contact" class="btn-cta-white">
                    <i class="fas fa-phone"></i>
                    Schedule Call
                </a>
            </div>
            
            <div class="contact-grid">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-label">Email</div>
                    <div class="contact-value">rfq@avsglobalsupply.com</div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="contact-label">WhatsApp</div>
                    <div class="contact-value"><a href="https://wa.me/+905386849842" target="_blank" style="color: inherit; text-decoration: none;">+90 538 684 98 42</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Floating CTA -->
<div class="floating-cta">
    <a href="https://rfq.avsglobalsupply.com" target="_blank" class="floating-cta-btn">
        <i class="fas fa-comment"></i>
        Get Quote
    </a>
</div>

<script>
function toggleService(element) {
    const isActive = element.classList.contains('active');
    
    // Close all accordions
    document.querySelectorAll('.service-accordion').forEach(item => {
        item.classList.remove('active');
    });
    
    // Open clicked accordion if it wasn't active
    if (!isActive) {
        element.classList.add('active');
    }
}
</script>

<!-- FAQ Section -->
<section class="faq-section sec-pad" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="auto-container">
        <div class="section-header text-center mb-5">
            <span class="badge-specialty" style="display: inline-block; padding: 0.5rem 1.5rem; background: rgba(59, 130, 246, 0.1); border-radius: 50px; color: #3b82f6; font-weight: 600; margin-bottom: 1rem;"><i class="fas fa-question-circle" style="margin-right: 0.5rem;"></i>FAQ</span>
            <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: #0c1e50; margin-bottom: 1rem;">Frequently Asked Questions</h2>
            <p class="section-description" style="font-size: 1.1rem; color: #64748b; max-width: 700px; margin: 0 auto;">Common questions about container vessel supply services</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="accordion" id="faqAccordion" style="background: white; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
                    
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                What types of provisions do you supply to container vessels?
                            </button>
                        </h3>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                We provide comprehensive provisions including fresh and frozen food, dry goods, beverages, bonded stores, and specialized dietary items. Our supplies are tailored for container vessel operations with quick turnaround times at major hub ports.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                How quickly can you deliver to container vessels with tight schedules?
                            </button>
                        </h3>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                We understand container vessels operate on tight schedules. At major container ports, we typically deliver within 24-48 hours with coordination to match your vessel's ETA and sailing schedule. Our logistics team ensures zero-delay deliveries.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                Do you supply technical stores and spare parts for container ships?
                            </button>
                        </h3>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Yes, we supply a complete range of technical stores including deck stores, engine room supplies, refrigeration spares for reefer containers, lashing equipment, safety gear, and genuine OEM parts. All products meet classification society standards.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item" style="border: none; border-bottom: 1px solid #e2e8f0;">
                        <h3 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                Do you offer contracted supply services?
                            </button>
                        </h3>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Yes, we provide comprehensive contracted supply services including technical stores management and provision management for individual vessels or entire fleets. Our contract solutions ensure consistent quality, optimized inventory, and predictable costs.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="accordion-item" style="border: none;">
                        <h3 class="accordion-header" id="faq5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5" style="padding: 1.5rem 2rem; font-size: 1.1rem; font-weight: 600; color: #0c1e50; background: white;">
                                Do you have coverage at all major container hub ports?
                            </button>
                        </h3>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="padding: 1.5rem 2rem; color: #64748b; line-height: 1.8;">
                                Yes, we have established presence at all major container hub ports worldwide including Singapore, Shanghai, Rotterdam, Hamburg, Los Angeles, and over 1500 ports across 126 countries. Our local teams ensure compliance with port regulations and efficient service.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
