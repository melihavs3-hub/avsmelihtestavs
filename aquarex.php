<?php
$seo_title = "Aquarex Water Filtration System | Maritime Water Solutions | AVS Global Supply";
$canonical = "https://www.avsglobalsupply.com/aquarex";
$eng_link = "https://www.avsglobalsupply.com/aquarex";
$tr_link = "https://www.avsglobalsupply.com/tr/aquarex";

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
      "url": "https://www.avsglobalsupply.com"
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
      "@id": "https://www.avsglobalsupply.com/aquarex#webpage",
      "url": "https://www.avsglobalsupply.com/aquarex",
      "name": "AQUAREX – Onboard Water Quality & Sustainability Solutions | AVS Global Supply",
      "description": "AQUAREX by AVS Global Supply delivers onboard water quality and sustainability solutions that ensure clean, safe drinking water while reducing plastic waste. The service supports crew health, hygiene, and environmental responsibility as part of everyday onboard operations.",
      "inLanguage": "en",
      "isPartOf": { "@id": "https://www.avsglobalsupply.com/#website" },
      "about": { "@id": "https://www.avsglobalsupply.com/aquarex#service" },
      "keywords": [
        "onboard water quality solutions",
        "sustainable water management for ships",
        "plastic reduction onboard",
        "crew health and hygiene solutions",
        "aquarex water system"
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.avsglobalsupply.com/aquarex#breadcrumbs",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.avsglobalsupply.com/" },
        { "@type": "ListItem", "position": 2, "name": "AQUAREX", "item": "https://www.avsglobalsupply.com/aquarex" }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.avsglobalsupply.com/aquarex#service",
      "name": "AQUAREX Onboard Water Quality & Sustainability Solutions",
      "description": "AQUAREX integrates safe drinking water, hygiene support, and sustainability into daily onboard routines. By reducing dependency on bottled water and improving water quality management, the service strengthens crew wellbeing while supporting environmentally responsible ship operations.",
      "inLanguage": "en",
      "provider": { "@id": "https://www.avsglobalsupply.com/#organization" },
      "areaServed": "Worldwide",
      "serviceType": [
        "Onboard Water Quality Solutions",
        "Sustainable Water Management",
        "Crew Health & Hygiene Support",
        "Plastic Reduction Solutions"
      ]
    }
  ]
}
</script>
';


require_once 'header.php';
?>

<style>
:root {
    --cyan-900: #164e63;
    --cyan-800: #155e75;
    --cyan-700: #0e7490;
    --cyan-600: #0891b2;
    --cyan-500: #06b6d4;
    --blue-800: #1e40af;
    --blue-600: #2563eb;
    --indigo-900: #312e81;
    --green-500: #22c55e;
    --slate-50: #f8fafc;
    --slate-600: #475569;
    --slate-900: #0f172a;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Hero Section */
.aquarex-hero {
    position: relative;
    min-height: 100vh;
    background: linear-gradient(135deg, var(--cyan-900) 0%, var(--cyan-800) 50%, var(--cyan-600) 100%);
    overflow: hidden;
    display: flex;
    align-items: center;
    padding: 120px 0 80px;
}

.aquarex-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        linear-gradient(to right, rgba(6, 182, 212, 0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(6, 182, 212, 0.03) 1px, transparent 1px);
    background-size: 80px 80px;
}

.pulse-circle {
    position: absolute;
    border-radius: 50%;
    opacity: 0.2;
    animation: pulse 3s ease-in-out infinite;
}

.pulse-circle-1 {
    width: 400px;
    height: 400px;
    background: var(--cyan-500);
    top: 10%;
    left: -100px;
}

.pulse-circle-2 {
    width: 300px;
    height: 300px;
    background: var(--blue-600);
    bottom: 20%;
    right: -50px;
    animation-delay: 1s;
}

@keyframes pulse {
    0%, 100% { opacity: 0.2; transform: scale(1); }
    50% { opacity: 0.3; transform: scale(1.05); }
}

.hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 8px 20px;
    border-radius: 50px;
    color: white;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 24px;
}

.hero-title {
    font-size: 64px;
    font-weight: 800;
    color: white;
    line-height: 1.1;
    margin-bottom: 24px;
}

.hero-description {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.7;
    margin-bottom: 40px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.hero-buttons {
    display: flex;
    gap: 16px;
    justify-content: center;
    margin-bottom: 60px;
}

.btn-primary {
    background: var(--cyan-500);
    color: white;
    padding: 16px 40px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    text-decoration: none;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(6, 182, 212, 0.4);
}

.btn-secondary {
    background: transparent;
    color: white;
    padding: 16px 40px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    text-decoration: none;
    transition: all 0.3s;
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    color: white;
}

.hero-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    max-width: 800px;
    margin: 0 auto;
}

.stat-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 16px;
    padding: 24px;
    text-align: center;
}

.stat-value {
    font-size: 40px;
    font-weight: 800;
    color: var(--green-500);
    margin-bottom: 8px;
}

.stat-label {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

/* Environmental Impact Calculator */
.impact-calculator-section {
    padding: 40px 0;
    background: white;
}

.calculator-layout {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 450px 1fr;
    gap: 20px;
    align-items: start;
}

.parameters-panel {
    background: white;
    border-radius: 20px;
    padding: 24px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
    position: sticky;
    top: 100px;
}

.panel-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
}

.panel-icon {
    font-size: 20px;
}

.panel-title {
    font-size: 18px;
    font-weight: 700;
    color: var(--slate-900);
}

.param-group {
    margin-bottom: 20px;
}

.param-label {
    font-size: 14px;
    font-weight: 600;
    color: var(--slate-900);
    margin-bottom: 8px;
    display: block;
}

.param-value {
    font-size: 26px;
    font-weight: 800;
    color: var(--slate-900);
    margin-bottom: 8px;
}

.param-description {
    font-size: 13px;
    color: var(--slate-600);
    margin-top: 6px;

    font-size: 32px;
    font-weight: 800;
    color: var(--slate-900);
    margin-bottom: 12px;
}

.param-description {
    font-size: 14px;
    color: var(--slate-600);
    margin-top: 8px;
}

.slider {
    width: 100%;
    height: 8px;
    border-radius: 10px;
    background: #e2e8f0;
    outline: none;
    -webkit-appearance: none;
    cursor: pointer;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: var(--cyan-600);
    cursor: grab;
    transition: all 0.2s;
}

.slider::-webkit-slider-thumb:hover {
    transform: scale(1.2);
}

.slider::-webkit-slider-thumb:active {
    cursor: grabbing;
}

.slider::-moz-range-thumb {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: var(--cyan-600);
    cursor: grab;
    border: none;
    transition: all 0.2s;
}

.results-panel {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.impact-card {
    background: linear-gradient(135deg, var(--cyan-600) 0%, var(--cyan-800) 100%);
    border-radius: 16px;
    padding: 24px;
    color: white;
    box-shadow: 0 8px 32px rgba(6, 182, 212, 0.35);
}

.impact-card.blue {
    background: linear-gradient(135deg, var(--blue-600) 0%, var(--indigo-900) 100%);
    box-shadow: 0 8px 32px rgba(37, 99, 235, 0.35);
}

.impact-card.white {
    background: white;
    color: var(--slate-900);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
}

.impact-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 16px;
}

.impact-icon {
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
}

.impact-card.white .impact-icon {
    background: rgba(59, 130, 246, 0.1);
}

.impact-label {
    font-size: 14px;
    font-weight: 600;
    opacity: 0.95;
}

.impact-value {
    font-size: 40px;
    font-weight: 800;
    line-height: 1;
    margin-bottom: 8px;
}

.impact-subtitle {
    font-size: 14px;
    opacity: 0.9;
    line-height: 1.5;

    background: rgba(255, 255, 255, 0.2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
}

.impact-card.white .impact-icon {
    background: rgba(59, 130, 246, 0.1);
}

.impact-label {
    font-size: 16px;
    font-weight: 600;
    opacity: 0.95;
}

.impact-value {
    font-size: 56px;
    font-weight: 800;
    line-height: 1;
    margin-bottom: 12px;
}

.impact-subtitle {
    font-size: 15px;
    opacity: 0.9;
    line-height: 1.5;
}

.benefits-list {
    margin-top: 20px;
}

.benefit-item {
    background: rgba(255, 255, 255, 0.08);
    padding: 16px 20px;
    border-radius: 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.benefit-label {
    font-size: 13px;
    opacity: 0.9;
}

.benefit-value {
    font-size: 24px;
    font-weight: 800;
}

.five-year-section {
    background: linear-gradient(135deg, rgba(6, 182, 212, 0.1) 0%, rgba(37, 99, 235, 0.1) 100%);
    border-radius: 16px;
    padding: 20px 24px;
    margin-top: 16px;
}

.five-year-title {
    font-size: 16px;
    font-weight: 800;
    color: var(--slate-900);
    margin-bottom: 16px;
}

.five-year-grid {
    display: grid;
    gap: 12px;
}

.five-year-item {
    background: white;
    padding: 14px 16px;
    border-radius: 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
}

.five-year-label {
    font-size: 14px;
    font-weight: 600;
    color: var(--slate-900);
}

.five-year-subtitle {
    font-size: 12px;
    color: var(--slate-600);
    margin-top: 3px;
}

.five-year-value {
    font-size: 22px;
    font-weight: 800;
    color: var(--cyan-700);
}

/* Products Section */
.products-section {
    padding: 100px 0;
    background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
}

.products-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 32px;
    margin-bottom: 60px;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}

.product-card {
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 20px;
    padding: 40px 32px;
    position: relative;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
}

.product-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 24px 48px rgba(6, 182, 212, 0.15);
    border-color: var(--cyan-500);
}

.product-card.featured {
    border: 2px solid var(--cyan-500);
    box-shadow: 0 12px 32px rgba(6, 182, 212, 0.12);
    transform: scale(1.05);
}

.product-card.featured:hover {
    transform: scale(1.05) translateY(-12px);
}

.product-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(6, 182, 212, 0.1);
    color: var(--cyan-700);
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.product-badge.popular {
    background: linear-gradient(135deg, var(--cyan-500), var(--blue-600));
    color: white;
}

.product-image {
    width: 100%;
    height: 180px;
    background: linear-gradient(135deg, rgba(6, 182, 212, 0.05), rgba(37, 99, 235, 0.05));
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
}

.product-icon {
    font-size: 80px;
    filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
}

.product-title {
    font-size: 28px;
    font-weight: 800;
    color: var(--slate-900);
    margin-bottom: 8px;
}

.product-capacity {
    font-size: 16px;
    color: var(--cyan-700);
    font-weight: 600;
    margin-bottom: 16px;
}

.product-description {
    font-size: 15px;
    color: var(--slate-600);
    line-height: 1.6;
    margin-bottom: 24px;
}

.product-features {
    list-style: none;
    padding: 0;
    margin: 0 0 32px 0;
    flex-grow: 1;
}

.product-features li {
    font-size: 15px;
    color: var(--slate-700);
    padding: 10px 0;
    border-bottom: 1px solid #f1f5f9;
}

.product-features li:last-child {
    border-bottom: none;
}

.product-cta {
    display: block;
    text-align: center;
    background: linear-gradient(135deg, var(--cyan-500), var(--blue-600));
    color: white;
    padding: 14px 28px;
    border-radius: 12px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
    margin-top: auto;
}

.product-cta:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 24px rgba(6, 182, 212, 0.3);
    color: white;
}

.products-info-bar {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 16px;
    padding: 32px;
}

.info-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
}

.info-icon {
    font-size: 32px;
    flex-shrink: 0;
}

.info-content h4 {
    font-size: 16px;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 4px;
}

.info-content p {
    font-size: 14px;
    color: var(--slate-600);
    margin: 0;
}

/* Responsive Design for Products */
@media (max-width: 992px) {
    .products-grid {
        grid-template-columns: 1fr;
        gap: 24px;
    }
    
    .product-card.featured {
        transform: scale(1);
    }
    
    .product-card.featured:hover {
        transform: translateY(-12px);
    }
    
    .products-info-bar {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
}

@media (max-width: 576px) {
    .products-info-bar {
        grid-template-columns: 1fr;
    }
}

/* Benefits Section */
.benefits-section {
    padding: 100px 0;
    background: white;
}

.section-header {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 30px;
}

.section-badge {
    display: inline-block;
    background: rgba(6, 182, 212, 0.1);
    color: var(--cyan-700);
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 16px;
}

.section-title {
    font-size: 42px;
    font-weight: 800;
    color: var(--slate-900);
    margin-bottom: 16px;
}

.section-description {
    font-size: 18px;
    color: var(--slate-600);
    line-height: 1.7;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.benefit-card {
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 16px;
    padding: 40px 32px;
    text-align: center;
    transition: all 0.3s;
}

.benefit-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    border-color: #64748b;
}

.benefit-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--cyan-500), var(--blue-600));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 40px;
    margin: 0 auto 24px;
}

.benefit-value {
    font-size: 32px;
    font-weight: 800;
    color: var(--green-500);
    margin-bottom: 8px;
}

.benefit-title {
    font-size: 24px;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 12px;
}

.benefit-description {
    font-size: 16px;
    color: var(--slate-600);
    line-height: 1.6;
}

/* Features Section */
.features-section {
    padding: 100px 0;
    background: var(--slate-50);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.feature-card {
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 32px;
    transition: all 0.3s;
}

.feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.feature-icon {
    width: 64px;
    height: 64px;
    background: linear-gradient(135deg, var(--cyan-500), var(--blue-600));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    color: white;
    margin-bottom: 20px;
}

.feature-card h3 {
    font-size: 22px;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 12px;
}

.feature-card p {
    font-size: 16px;
    color: var(--slate-600);
    line-height: 1.6;
}

/* Comparison Section */
.comparison-section {
    padding: 100px 0;
    background: white;
}

.comparison-table {
    max-width: 1000px;
    margin: 0 auto;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.comparison-table table {
    width: 100%;
    border-collapse: collapse;
}

.comparison-table th {
    background: linear-gradient(135deg, var(--cyan-800), var(--blue-600));
    color: white;
    padding: 20px;
    font-size: 18px;
    font-weight: 700;
    text-align: left;
}

.comparison-table td {
    padding: 20px;
    border-bottom: 1px solid #e2e8f0;
    font-size: 16px;
}

.comparison-table tr:last-child td {
    border-bottom: none;
}

.comparison-table tr:hover {
    background: var(--slate-50);
}

.check-icon {
    color: var(--green-500);
    font-size: 24px;
}

.cross-icon {
    color: #ef4444;
    font-size: 24px;
}

/* Technical Specs Section */
.specs-section {
    padding: 100px 0;
    background: var(--slate-50);
}

.specs-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.specs-image {
    position: relative;
    height: 500px;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
}

.specs-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.specs-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.spec-item {
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 20px;
}

.spec-label {
    font-size: 14px;
    color: var(--slate-600);
    margin-bottom: 8px;
}

.spec-value {
    font-size: 18px;
    font-weight: 700;
    color: var(--slate-900);
}

/* CTA Section */
.cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, var(--cyan-900), var(--cyan-800), var(--cyan-600));
    color: white;
    text-align: center;
}

.cta-section h2 {
    font-size: 48px;
    font-weight: 800;
    margin-bottom: 24px;
}

.cta-section p {
    font-size: 20px;
    margin-bottom: 40px;
    opacity: 0.9;
}

/* Contact Form Section */
.contact-form-section {
    padding: 100px 0;
    background: white;
}

.form-container {
    max-width: 800px;
    margin: 0 auto;
    background: white;
    border-radius: 20px;
    padding: 48px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    margin-bottom: 24px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group.full-width {
    grid-column: 1 / -1;
}

.form-label {
    font-size: 14px;
    font-weight: 600;
    color: var(--slate-900);
    margin-bottom: 8px;
    display: block;
}

.form-label .required {
    color: #ef4444;
    margin-left: 4px;
}

.form-input,
.form-textarea {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    font-size: 15px;
    font-family: inherit;
    transition: all 0.2s;
    background: white;
}

.form-input:focus,
.form-textarea:focus {
    outline: none;
    border-color: var(--cyan-500);
    box-shadow: 0 0 0 3px rgba(6, 182, 212, 0.1);
}

.form-textarea {
    resize: vertical;
    min-height: 120px;
}

.kvkk-group {
    display: flex;
    align-items: start;
    gap: 12px;
    margin-bottom: 32px;
    padding: 20px;
    background: var(--slate-50);
    border-radius: 12px;
}

.kvkk-checkbox {
    width: 20px;
    height: 20px;
    cursor: pointer;
    flex-shrink: 0;
    margin-top: 2px;
}

.kvkk-label {
    font-size: 14px;
    color: var(--slate-600);
    line-height: 1.6;
    cursor: pointer;
}

.kvkk-label a {
    color: var(--cyan-600);
    text-decoration: none;
    font-weight: 600;
}

.kvkk-label a:hover {
    text-decoration: underline;
}

.form-submit {
    width: 100%;
    background: linear-gradient(135deg, var(--cyan-600), var(--blue-600));
    color: white;
    padding: 16px 32px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
}

.form-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(6, 182, 212, 0.4);
}

.form-submit:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

.form-success,
.form-error {
    padding: 16px 20px;
    border-radius: 8px;
    margin-bottom: 24px;
    font-size: 14px;
    display: none;
}

.form-success {
    background: #d1fae5;
    color: #065f46;
    border: 1px solid #6ee7b7;
}

.form-error {
    background: #fee2e2;
    color: #991b1b;
    border: 1px solid #fca5a5;
}

.form-success.show,
.form-error.show {
    display: block;
}

/* Responsive */
@media (max-width: 1024px) {
    .hero-stats,
    .benefits-grid,
    .features-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .specs-content,
    .calculator-grid {
        grid-template-columns: 1fr;
    }
    
    .calculator-layout {
        grid-template-columns: 1fr;
    }
    
    .parameters-panel {
        position: relative;
        top: 0;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 40px;
    }
    
    .hero-stats,
    .benefits-grid,
    .features-grid,
    .specs-grid {
        grid-template-columns: 1fr;
    }
    
    .hero-buttons {
        flex-direction: column;
    }
    
    .section-title {
        font-size: 32px;
    }
    
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .form-container {
        padding: 32px 24px;
    }
}
</style>

<!-- Hero Section -->
<section class="aquarex-hero">
    <div class="pulse-circle pulse-circle-1"></div>
    <div class="pulse-circle pulse-circle-2"></div>
    
    <div class="auto-container">
        <div class="hero-content">
            <div class="hero-badge">
                🌱 Sustainable Maritime Solution
            </div>
            
            <h1 class="hero-title">Aquarex Water Filtration System</h1>
            
            <p class="hero-description">
                Revolutionary water filtration technology for maritime vessels. Reduce plastic waste by 90%, save costs, and provide premium quality drinking water for your crew.
            </p>
            
            <div class="hero-buttons">
                <a href="#contact" class="btn-primary">
                    Contact Us →
                </a>
                <a href="assets/files/aquarex-brochure.pdf" download class="btn-secondary">
                    Download Brochure
                </a>
            </div>
            
            <div class="hero-stats">
                <div class="stat-card">
                    <div class="stat-value">90%</div>
                    <div class="stat-label">Less Waste</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">60%</div>
                    <div class="stat-label">Cost Savings</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">99.9%</div>
                    <div class="stat-label">Pure Water</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="products-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">OUR PRODUCTS</span>
            <h2 class="section-title">Aquarex Water Filtration Systems</h2>
            <p class="section-description">
                Premium water filtration solutions designed for maritime operations. Choose the perfect system for your vessel size and crew requirements.
            </p>
        </div>
        
        <div class="products-grid">
            <!-- C100 System -->
            <div class="product-card">
                <div class="product-badge">Compact Solution</div>
                <div class="product-image">
                    <img src="assets/images/aquarex-c100.png" alt="Aquarex C100" style="width: 100%; height: 100%; object-fit: contain; border-radius: 16px;">
                </div>
                <h3 class="product-title">Aquarex C100</h3>
                <p class="product-capacity">Under-Counter Filtration System</p>
                <p class="product-description">
                    Compact under-counter filtration unit designed for vessels of all sizes. Advanced multi-stage RO filtration system that fits seamlessly into any galley space.
                </p>
                <ul class="product-features">
                    <li>✓ Multi-stage RO filtration technology</li>
                    <li>✓ Compact under-counter design</li>
                    <li>✓ Easy installation & maintenance</li>
                    <li>✓ Status indicator lights</li>
                    <li>✓ Marine-grade construction</li>
                </ul>
            </div>
            
            <!-- T100 System -->
            <div class="product-card featured">
                <div class="product-badge popular">Most Popular</div>
                <div class="product-image">
                    <img src="assets/images/T100.webp" alt="Aquarex T100" style="width: 100%; height: 100%; object-fit: contain; border-radius: 16px;">
                </div>
                <h3 class="product-title">Aquarex T100</h3>
                <p class="product-capacity">Floor-Standing Water Dispenser</p>
                <p class="product-description">
                    Premium floor-standing water dispenser with integrated filtration. Features hot and cold water options, digital display, and sleek design perfect for crew mess halls and common areas.
                </p>
                <ul class="product-features">
                    <li>✓ Hot & cold water dispenser</li>
                    <li>✓ Integrated filtration system</li>
                    <li>✓ Digital display & controls</li>
                    <li>✓ Floor-standing design</li>
                    <li>✓ High-capacity performance</li>
                </ul>
            </div>
        </div>
        
        <!-- Products Info Bar -->
        <div class="products-info-bar">
            <div class="info-item">
                <span class="info-icon">🔧</span>
                <div class="info-content">
                    <h4>Full Installation Support</h4>
                    <p>Expert installation and crew training included</p>
                </div>
            </div>
            <div class="info-item">
                <span class="info-icon">🛡️</span>
                <div class="info-content">
                    <h4>2-Year Warranty</h4>
                    <p>Comprehensive warranty on all systems</p>
                </div>
            </div>
            <div class="info-item">
                <span class="info-icon">📞</span>
                <div class="info-content">
                    <h4>24/7 Support</h4>
                    <p>Technical support available worldwide</p>
                </div>
            </div>
            <div class="info-item">
                <span class="info-icon">♻️</span>
                <div class="info-content">
                    <h4>Eco-Friendly</h4>
                    <p>Reduce plastic waste by up to 90%</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Environmental Impact Calculator -->
<section class="impact-calculator-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">ENVIRONMENTAL IMPACT</span>
            <h2 class="section-title">Calculate Your Impact</h2>
            <p class="section-description">
                See the environmental benefits of switching to Aquarex water filtration system.
            </p>
        </div>
        
        <div class="calculator-layout">
            <!-- Parameters Panel -->
            <div class="parameters-panel">
                <div class="panel-header">
                    <span class="panel-icon">📋</span>
                    <h3 class="panel-title">Your Vessel Parameters</h3>
                </div>
                
                <div class="param-group">
                    <label class="param-label">Crew Size</label>
                    <div class="param-value" id="crew-display">25</div>
                    <input type="range" class="slider" id="crew-size" min="5" max="100" value="25" oninput="calculateImpact()">
                    <p class="param-description">Number of crew members on board</p>
                </div>
                
                <div class="param-group">
                    <label class="param-label">Water Consumption</label>
                    <div class="param-value" id="consumption-display">3L</div>
                    <input type="range" class="slider" id="water-consumption" min="1" max="8" step="0.5" value="3" oninput="calculateImpact()">
                    <p class="param-description">Liters per person per day</p>
                </div>
                
                <!-- 5-Year Impact Section -->
                <div class="five-year-section">
                    <h3 class="five-year-title">5-Year Environmental Impact</h3>
                    <div class="five-year-grid">
                        <div class="five-year-item">
                            <div>
                                <div class="five-year-label">Plastic Bottles Eliminated</div>
                                <div class="five-year-subtitle">5-year total</div>
                            </div>
                            <div class="five-year-value" id="five-year-bottles">273,750</div>
                        </div>
                        <div class="five-year-item">
                            <div>
                                <div class="five-year-label">Plastic Waste Prevented</div>
                                <div class="five-year-subtitle">5-year total</div>
                            </div>
                            <div class="five-year-value" id="five-year-waste">6.845kg</div>
                        </div>
                        <div class="five-year-item">
                            <div>
                                <div class="five-year-label">CO₂ Emissions Prevented</div>
                                <div class="five-year-subtitle">5-year total</div>
                            </div>
                            <div class="five-year-value" id="five-year-co2">22.65 tonnes</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Results Panel -->
            <div class="results-panel">
                <!-- Annual Plastic Waste Card -->
                <div class="impact-card">
                    <div class="impact-header">
                        <div class="impact-icon">♻️</div>
                        <div class="impact-label">Estimated Annual Plastic Waste Prevented</div>
                    </div>
                    <div class="impact-value" id="plastic-waste-kg">1,369 kg</div>
                    <div class="impact-subtitle" id="bottles-text">That's 54,750 plastic bottles eliminated every year</div>
                </div>
                
                <!-- CO2 Emissions Card -->
                <div class="impact-card blue">
                    <div class="impact-header">
                        <div class="impact-icon">🌱</div>
                        <div class="impact-label">Estimated CO₂ Emissions Prevented</div>
                    </div>
                    <div class="impact-value" id="co2-tonnes">4.53 tonnes</div>
                    <div class="impact-subtitle">Reduced carbon footprint from plastic production and transport</div>
                </div>
                
                <!-- Operational Benefits Card -->
                <div class="impact-card white">
                    <div class="impact-header">
                        <div class="impact-icon">📦</div>
                        <div class="impact-label">Estimated Operational Benefits</div>
                    </div>
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <div class="benefit-label" style="color: var(--slate-900); font-size: 16px; font-weight: 600;">Freed up Cargo Space Annually</div>
                            <div class="benefit-value" style="color: #475569; font-size: 42px; font-weight: 700; margin-top: 8px;" id="storage-space">55m³</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">KEY BENEFITS</span>
            <h2 class="section-title">Transform Your Vessel's Water Supply</h2>
            <p class="section-description">
                Aquarex delivers tangible benefits that impact your operations, environment, and bottom line.
            </p>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">♻️</div>
                <div class="benefit-value">90%</div>
                <h3 class="benefit-title">Reduce Plastic Waste</h3>
                <p class="benefit-description">
                    Eliminate thousands of plastic bottles per voyage. Reduce environmental impact significantly.
                </p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">💰</div>
                <div class="benefit-value">60%</div>
                <h3 class="benefit-title">Cost Savings</h3>
                <p class="benefit-description">
                    Significant reduction in bottled water procurement and storage costs annually.
                </p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">💧</div>
                <div class="benefit-value">99.9%</div>
                <h3 class="benefit-title">Premium Quality</h3>
                <p class="benefit-description">
                    Advanced filtration ensures the highest water quality for your crew.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">ADVANCED TECHNOLOGY</span>
            <h2 class="section-title">Built for Maritime Environments</h2>
            <p class="section-description">
                Designed specifically for the challenges of maritime operations with proven reliability.
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🔬</div>
                <h3>Multi-Stage Filtration</h3>
                <p>Advanced 5-stage filtration system removes contaminants, impurities, and ensures premium water quality.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Real-time Monitoring</h3>
                <p>Digital monitoring system tracks water quality 24/7 with instant alerts for maintenance needs.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔧</div>
                <h3>Easy Maintenance</h3>
                <p>Simple filter replacement and minimal maintenance requirements keep operations running smoothly.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✅</div>
                <h3>Certified Quality</h3>
                <p>Meets international maritime water quality standards and safety regulations.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Energy Efficient</h3>
                <p>Low power consumption design minimizes operational costs and environmental impact.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🌍</div>
                <h3>Eco-Friendly</h3>
                <p>Sustainable solution that dramatically reduces single-use plastic waste.</p>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Section -->
<section class="comparison-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">COST COMPARISON</span>
            <h2 class="section-title">Bottled Water vs Aquarex System</h2>
            <p class="section-description">
                See how Aquarex compares to traditional bottled water solutions.
            </p>
        </div>
        
        <div class="comparison-table">
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Bottled Water</th>
                        <th>Aquarex System</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Annual Cost (est.)</strong></td>
                        <td>~$35,000</td>
                        <td><strong style="color: var(--green-500);">Contact for Quote</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Storage Space (est.)</strong></td>
                        <td>~200 sq ft</td>
                        <td><strong style="color: var(--green-500);">~15 sq ft</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Plastic Waste (est.)</strong></td>
                        <td>~50,000 bottles/year</td>
                        <td><strong style="color: var(--green-500);">0 bottles</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Water Quality</strong></td>
                        <td>Variable</td>
                        <td><strong style="color: var(--green-500);">Consistent 99.9%</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Logistics Hassle</strong></td>
                        <td>High</td>
                        <td><strong style="color: var(--green-500);">Minimal</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Technical Specs Section -->
<section class="specs-section" id="specs">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">SPECIFICATIONS</span>
            <h2 class="section-title">Technical Details</h2>
        </div>
        
        <div class="specs-content">
            <div class="specs-image">
                <img src="assets/images/Aquarex+NEW+man+drinking+on+vessel+copy.webp" alt="Aquarex Water Filtration System - Crew Member">
            </div>
            
            <div class="specs-grid">
                <div class="spec-item">
                    <div class="spec-label">Filtration Technology</div>
                    <div class="spec-value">Multi-stage UV</div>
                </div>
                <div class="spec-item">
                    <div class="spec-label">Water Quality</div>
                    <div class="spec-value">99.9% purity</div>
                </div>
                <div class="spec-item">
                    <div class="spec-label">Filter Replacement</div>
                    <div class="spec-value">12-18 months</div>
                </div>
                <div class="spec-item">
                    <div class="spec-label">Installation Time</div>
                    <div class="spec-value">4-6 hours</div>
                </div>
                <div class="spec-item">
                    <div class="spec-label">Certifications</div>
                    <div class="spec-value">IMO, NSF/ANSI, EU, WHO</div>
                </div>
                <div class="spec-item">
                    <div class="spec-label">Operating Mode</div>
                    <div class="spec-value">Automated</div>
                </div>
                <div class="spec-item">
                    <div class="spec-label">Maintenance</div>
                    <div class="spec-value">Minimal</div>
                </div>
                <div class="spec-item">
                    <div class="spec-label">Warranty</div>
                    <div class="spec-value">Included</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section" id="contact">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">GET IN TOUCH</span>
            <h2 class="section-title">Request a Quote</h2>
            <p class="section-description">
                Fill out the form below and our team will get back to you within 24 hours.
            </p>
        </div>
        
        <div class="form-container">
            <div class="form-success" id="form-success">
                ✓ Thank you! Your message has been sent successfully. We'll contact you soon.
            </div>
            <div class="form-error" id="form-error">
                ✗ Something went wrong. Please try again or contact us directly.
            </div>
            
            <form id="aquarex-form">
                <input type="hidden" name="form_type" value="aquarex">
                
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">
                            Full Name<span class="required">*</span>
                        </label>
                        <input type="text" name="name" class="form-input" required placeholder="John Doe">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            Company<span class="required">*</span>
                        </label>
                        <input type="text" name="company" class="form-input" required placeholder="Your Company">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            Position<span class="required">*</span>
                        </label>
                        <input type="text" name="position" class="form-input" required placeholder="Fleet Manager">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            Email<span class="required">*</span>
                        </label>
                        <input type="email" name="email" class="form-input" required placeholder="john@company.com">
                    </div>
                    
                    <div class="form-group full-width">
                        <label class="form-label">
                            Phone<span class="required">*</span>
                        </label>
                        <input type="tel" name="phone" class="form-input" required placeholder="+1 234 567 8900">
                    </div>
                    
                    <div class="form-group full-width">
                        <label class="form-label">
                            Message<span class="required">*</span>
                        </label>
                        <textarea name="message" class="form-textarea" required placeholder="Tell us about your vessel and requirements..."></textarea>
                    </div>
                </div>
                
                <div class="kvkk-group">
                    <input type="checkbox" id="kvkk-consent" name="kvkk_consent" class="kvkk-checkbox" required>
                    <label for="kvkk-consent" class="kvkk-label">
                        I have read and accept the <a href="/kvkk" target="_blank">Personal Data Protection Policy (KVKK)</a> and consent to the processing of my personal data.
                    </label>
                </div>
                
                <div class="form-group full-width">
                    <div class="g-recaptcha" data-sitekey="6LcEgg4rAAAAAGoVKdeSgPWfHwIhyAzj2RizOcK3"></div>
                </div>

                <button type="submit" class="form-submit">
                    Send Message →
                </button>
            </form>
        </div>
    </div>
</section>

<script>
function calculateImpact() {
    const crewSize = parseInt(document.getElementById('crew-size').value);
    const waterConsumption = parseFloat(document.getElementById('water-consumption').value);
    
    // Update parameter displays
    document.getElementById('crew-display').textContent = crewSize;
    document.getElementById('consumption-display').textContent = waterConsumption + 'L';
    
    // Calculate annual consumption in liters
    const annualLiters = crewSize * waterConsumption * 365;
    
    // Calculate bottles (assuming 1L bottles)
    const bottles = Math.round(annualLiters);
    
    // Calculate plastic waste in kg (25g per 1L bottle)
    const plasticKg = (bottles * 0.025).toFixed(0);
    
    // Calculate CO2 emissions in tonnes (82.8g CO2 per 1L bottle)
    const co2Tonnes = (bottles * 0.0828 / 1000).toFixed(2);
    
    // Calculate storage space in m³ (1L bottle = ~0.001 m³)
    const storageM3 = Math.round(bottles * 0.001);
    
    // Update annual impact displays
    document.getElementById('plastic-waste-kg').textContent = plasticKg.toLocaleString() + ' kg';
    document.getElementById('bottles-text').textContent = `That's approximately ${bottles.toLocaleString()} plastic bottles eliminated every year`;
    document.getElementById('co2-tonnes').textContent = co2Tonnes + ' tonnes';
    document.getElementById('storage-space').textContent = storageM3 + 'm³';
    
    // Calculate 5-year impact
    const fiveYearBottles = bottles * 5;
    const fiveYearKg = (plasticKg * 5 / 1000).toFixed(3);  // Convert to tonnes
    const fiveYearCO2 = (co2Tonnes * 5).toFixed(2);
    
    document.getElementById('five-year-bottles').textContent = fiveYearBottles.toLocaleString();
    document.getElementById('five-year-waste').textContent = fiveYearKg + 'kg';
    document.getElementById('five-year-co2').textContent = fiveYearCO2 + ' tonnes';
}

// Initialize on page load
window.addEventListener('load', function() {
    calculateImpact();
});

// Form submission handling
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('aquarex-form');
    if (!form) {
        return;
    }

    const submitBtn = form.querySelector('.form-submit');
    if (!submitBtn) {
        return;
    }

    const originalLabel = submitBtn.textContent;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const successMsg = document.getElementById('form-success');
        const errorMsg = document.getElementById('form-error');
        
        // Hide previous messages
        if (successMsg) {
            successMsg.classList.remove('show');
        }
        if (errorMsg) {
            errorMsg.classList.remove('show');
        }
        
        // Get form data
        const formData = new FormData(form);
        
        if (!formData.get('kvkk_consent')) {
            if (errorMsg) {
                errorMsg.textContent = 'Please accept the Personal Data Protection Policy (KVKK).';
                errorMsg.classList.add('show');
                errorMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            return;
        }
        
        if (!formData.get('g-recaptcha-response')) {
            if (errorMsg) {
                errorMsg.textContent = 'Please complete the reCAPTCHA operation.';
                errorMsg.classList.add('show');
                errorMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            return;
        }
        
        // Disable submit button
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';
        
        const company = (formData.get('company') || '').trim();
        const position = (formData.get('position') || '').trim();
        const subjectParts = [];
        
        if (company) {
            subjectParts.push('company:' + company);
        }
        
        if (position) {
            subjectParts.push('position:' + position);
        }
        
        const data = {
            name: formData.get('name'),
            phone: formData.get('phone'),
            email: formData.get('email'),
            subject: subjectParts.join('/'),
            message: formData.get('message'),
            webSites: 'Avs Global',
            url: window.location.href,
            recaptchaToken: formData.get('g-recaptcha-response')
        };
        
        // Send form
        fetch('https://avs-cms-5fzbd.ondigitalocean.app/api/general-forms', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ data })
        })
        .then(res => {
            if (!res.ok) throw new Error('Send failed');
            return res.json();
        })
        .then(() => {
            if (successMsg) {
                successMsg.classList.add('show');
                successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            form.reset();
            
            if (typeof grecaptcha !== 'undefined') {
                grecaptcha.reset();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            if (errorMsg) {
                errorMsg.textContent = 'Message could not be sent. Please try again.';
                errorMsg.classList.add('show');
                errorMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.textContent = originalLabel;
        });
    });
});
</script>

<?php require_once 'footer.php'; ?>
