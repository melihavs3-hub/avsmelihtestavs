<?php
$seo_title = "Seafarers Wellbeing Program | Maritime Mental Health Support | AVS Global Ship Supply";
$canonical = "https://www.avsglobalsupply.com/seafarers-wellbeing";
$eng_link = "https://www.avsglobalsupply.com/seafarers-wellbeing";
$tr_link = "https://www.avsglobalsupply.com/tr/seafarers-wellbeing";

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
      "@id": "https://www.avsglobalsupply.com/seafarers-wellbeing#webpage",
      "url": "https://www.avsglobalsupply.com/seafarers-wellbeing",
      "name": "Seafarers Wellbeing Services | Mental & Emotional Support at Sea | AVS Global Supply",
      "description": "Seafarers Wellbeing by AVS Global Supply supports mental and emotional balance as part of everyday onboard life. The service strengthens resilience, emotional stability, and psychological wellbeing, helping crews manage stress, prevent fatigue, and maintain healthy daily routines at sea.",
      "inLanguage": "en",
      "isPartOf": { "@id": "https://www.avsglobalsupply.com/#website" },
      "about": { "@id": "https://www.avsglobalsupply.com/seafarers-wellbeing#service" },
      "keywords": [
        "seafarers wellbeing",
        "crew mental health support",
        "emotional wellbeing at sea",
        "psychological support for seafarers",
        "crew wellness services"
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.avsglobalsupply.com/seafarers-wellbeing#breadcrumbs",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.avsglobalsupply.com/" },
        { "@type": "ListItem", "position": 2, "name": "Seafarers Wellbeing", "item": "https://www.avsglobalsupply.com/seafarers-wellbeing" }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.avsglobalsupply.com/seafarers-wellbeing#service",
      "name": "Seafarers Wellbeing Support Services",
      "description": "AVS Seafarers Wellbeing services focus on supporting emotional balance, resilience, and psychological stability during sea service. By integrating mental and emotional support into daily onboard life, the service contributes to healthier crews, improved focus, reduced human-related operational risks, and stronger service continuity.",
      "inLanguage": "en",
      "provider": { "@id": "https://www.avsglobalsupply.com/#organization" },
      "areaServed": "Worldwide",
      "serviceType": [
        "Seafarers Wellbeing Services",
        "Mental and Emotional Support at Sea",
        "Crew Wellness Programs"
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
    --emerald-900: #064e3b;
    --teal-800: #115e59;
    --cyan-900: #164e63;
    --emerald-500: #10b981;
    --teal-500: #14b8a6;
    --cyan-500: #06b6d4;
    --blue-500: #3b82f6;
    --indigo-500: #6366f1;
    --pink-500: #ec4899;
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
.wellbeing-hero {
    position: relative;
    min-height: 100vh;
    background: linear-gradient(135deg, var(--emerald-900) 0%, var(--teal-800) 50%, var(--cyan-900) 100%);
    overflow: hidden;
    display: flex;
    align-items: center;
    padding: 120px 0 80px;
}

.wellbeing-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        linear-gradient(to right, rgba(16, 185, 129, 0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(16, 185, 129, 0.03) 1px, transparent 1px);
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
    background: var(--emerald-500);
    top: 10%;
    left: -100px;
}

.pulse-circle-2 {
    width: 300px;
    height: 300px;
    background: var(--cyan-500);
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
    margin-bottom: 32px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.availability-indicator {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(16, 185, 129, 0.2);
    border: 1px solid rgba(16, 185, 129, 0.3);
    padding: 12px 24px;
    border-radius: 50px;
    color: white;
    font-weight: 600;
    margin-bottom: 24px;
}

.pulse-dot {
    width: 10px;
    height: 10px;
    background: var(--emerald-500);
    border-radius: 50%;
    animation: pulse-dot 2s ease-in-out infinite;
}

@keyframes pulse-dot {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(1.2); }
}

.trust-markers {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 40px;
}

.hero-buttons {
    display: flex;
    gap: 16px;
    justify-content: center;
    margin-bottom: 60px;
}

.btn-primary {
    background: white;
    color: var(--emerald-900);
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
    box-shadow: 0 10px 25px rgba(255, 255, 255, 0.3);
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
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    max-width: 900px;
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
    color: white;
    margin-bottom: 8px;
}

.stat-label {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
}

/* Service Model Section */
.service-model-section {
    padding: 100px 0;
    background: white;
}

.section-header {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 60px;
}

.section-badge {
    display: inline-block;
    background: rgba(16, 185, 129, 0.1);
    color: var(--emerald-500);
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

.model-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.model-card {
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 16px;
    padding: 40px;
    transition: all 0.3s;
}

.model-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    border-color: var(--emerald-500);
}

.model-card h3 {
    font-size: 28px;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 20px;
}

.model-card ul {
    list-style: none;
}

.model-card li {
    padding: 12px 0;
    padding-left: 32px;
    position: relative;
    color: var(--slate-600);
    font-size: 16px;
    line-height: 1.6;
}

.model-card li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--emerald-500);
    font-weight: bold;
    font-size: 18px;
}

/* Services Section */
.services-section {
    padding: 100px 0;
    background: var(--slate-50);
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.service-card {
    background: white;
    border: 2px solid rgba(226, 232, 240, 0.5);
    border-radius: 20px;
    padding: 36px;
    text-align: center;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
}

.service-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
    border-color: currentColor;
}

.service-card:nth-child(1) { border-color: rgba(16, 185, 129, 0.3); }
.service-card:nth-child(2) { border-color: rgba(20, 184, 166, 0.3); }
.service-card:nth-child(3) { border-color: rgba(6, 182, 212, 0.3); }
.service-card:nth-child(4) { border-color: rgba(59, 130, 246, 0.3); }
.service-card:nth-child(5) { border-color: rgba(99, 102, 241, 0.3); }
.service-card:nth-child(6) { border-color: rgba(236, 72, 153, 0.3); }

.service-card:nth-child(1):hover { border-color: var(--emerald-500); }
.service-card:nth-child(2):hover { border-color: var(--teal-500); }
.service-card:nth-child(3):hover { border-color: var(--cyan-500); }
.service-card:nth-child(4):hover { border-color: var(--blue-500); }
.service-card:nth-child(5):hover { border-color: var(--indigo-500); }
.service-card:nth-child(6):hover { border-color: var(--pink-500); }

.service-icon {
    width: 88px;
    height: 88px;
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 44px;
    color: white;
    margin: 0 auto 28px;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
}

.service-card:hover .service-icon {
    transform: scale(1.1) rotate(5deg);
}

.service-card:nth-child(1) .service-icon { background: linear-gradient(135deg, #059669 0%, var(--emerald-500) 100%); }
.service-card:nth-child(2) .service-icon { background: linear-gradient(135deg, #0d9488 0%, var(--teal-500) 100%); }
.service-card:nth-child(3) .service-icon { background: linear-gradient(135deg, #0891b2 0%, var(--cyan-500) 100%); }
.service-card:nth-child(4) .service-icon { background: linear-gradient(135deg, #2563eb 0%, var(--blue-500) 100%); }
.service-card:nth-child(5) .service-icon { background: linear-gradient(135deg, #4f46e5 0%, var(--indigo-500) 100%); }
.service-card:nth-child(6) .service-icon { background: linear-gradient(135deg, #db2777 0%, var(--pink-500) 100%); }

.service-card h3 {
    font-size: 24px;
    font-weight: 800;
    color: var(--slate-900);
    margin-bottom: 14px;
    letter-spacing: -0.5px;
}

.service-card p {
    font-size: 16px;
    color: var(--slate-600);
    line-height: 1.7;
}

/* How It Works Section */
.workflow-section {
    padding: 100px 0;
    background: white;
}

.workflow-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    position: relative;
}

.workflow-steps::before {
    content: '';
    position: absolute;
    top: 40px;
    left: 10%;
    right: 10%;
    height: 2px;
    background: linear-gradient(to right, var(--emerald-500), var(--cyan-500));
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
    border: 4px solid var(--emerald-500);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    font-weight: 800;
    color: var(--emerald-500);
    margin: 0 auto 24px;
    box-shadow: 0 4px 20px rgba(16, 185, 129, 0.2);
}

.workflow-step h3 {
    font-size: 20px;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 12px;
}

.workflow-step p {
    font-size: 15px;
    color: var(--slate-600);
    line-height: 1.6;
}

/* Programs Section */
.programs-section {
    padding: 100px 0;
    background: var(--slate-50);
}

.programs-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.program-card {
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 16px;
    padding: 32px;
    transition: all 0.3s;
}

.program-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border-color: var(--emerald-500);
}

.program-card h3 {
    font-size: 24px;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 16px;
}

.program-meta {
    display: flex;
    gap: 16px;
    margin-bottom: 16px;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--slate-600);
    font-size: 14px;
}

.program-card p {
    color: var(--slate-600);
    line-height: 1.6;
}

/* FAQ Section */
.faq-section-sw {
    padding: 100px 0;
    background: white;
}

.faq-layout {
    display: grid;
    grid-template-columns: 400px 1fr;
    gap: 60px;
    align-items: start;
}

.faq-logo-container {
    position: sticky;
    top: 120px;
    background: white;
    border-radius: 20px;
    padding: 60px 40px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.faq-logo-container img {
    max-width: 100%;
    height: auto;
}

.faq-logo-title {
    font-size: 18px;
    font-weight: 700;
    color: var(--slate-900);
    margin-top: 24px;
    margin-bottom: 12px;
}

.faq-logo-subtitle {
    font-size: 14px;
    color: var(--slate-600);
    line-height: 1.6;
}

.faq-container {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.faq-item {
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    margin-bottom: 16px;
    overflow: hidden;
    transition: all 0.3s;
    display: block !important;
    visibility: visible !important;
}

.faq-item:hover {
    border-color: var(--emerald-500);
}

.faq-question {
    padding: 24px;
    font-size: 18px;
    font-weight: 700;
    color: var(--slate-900);
    cursor: pointer;
    display: flex !important;
    justify-content: space-between;
    align-items: center;
    visibility: visible !important;
}

.faq-icon {
    font-size: 24px;
    color: var(--emerald-500);
    transition: transform 0.3s;
}

.faq-item.active .faq-icon {
    transform: rotate(180deg);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
}

.faq-item.active .faq-answer {
    max-height: 300px;
}

.faq-answer-content {
    padding: 0 24px 24px;
    color: var(--slate-600);
    line-height: 1.7;
}

/* CTA Section */
.cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, var(--emerald-900), var(--teal-800), var(--cyan-900));
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

/* Responsive */
@media (max-width: 1024px) {
    .hero-stats,
    .services-grid,
    .workflow-steps {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .model-grid,
    .programs-grid {
        grid-template-columns: 1fr;
    }
    
    .workflow-steps::before {
        display: none;
    }
    
    .faq-layout {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .faq-logo-container {
        position: relative;
        top: 0;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 40px;
    }
    
    .hero-stats,
    .services-grid,
    .workflow-steps {
        grid-template-columns: 1fr;
    }
    
    .hero-buttons {
        flex-direction: column;
    }
    
    .section-title {
        font-size: 32px;
    }
    
    .faq-layout {
        display: block;
    }
    
    .faq-logo-container {
        margin-bottom: 30px;
    }
    
    .faq-container {
        display: flex !important;
        flex-direction: column !important;
        width: 100% !important;
        visibility: visible !important;
    }
    
    .faq-item {
        display: block !important;
        width: 100% !important;
        margin-bottom: 12px !important;
        background: white !important;
        border: 2px solid #e2e8f0 !important;
        visibility: visible !important;
        min-height: 60px !important;
    }
    
    .faq-question {
        padding: 16px !important;
        font-size: 16px !important;
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        visibility: visible !important;
        width: 100% !important;
        color: var(--slate-900) !important;
        font-weight: 700 !important;
    }
    
    .faq-answer-content {
        padding: 0 16px 16px;
        font-size: 14px;
    }
}
</style>

<!-- Hero Section -->
<section class="wellbeing-hero">
    <div class="pulse-circle pulse-circle-1"></div>
    <div class="pulse-circle pulse-circle-2"></div>
    
    <div class="auto-container">
        <div class="hero-content">
            <div class="hero-badge">
                ❤️ Professional Mental Health Support
            </div>
            
            <h1 class="hero-title">Seafarers Wellbeing Program</h1>
            
            <p class="hero-description">
                Supporting the mental health and wellbeing of maritime professionals. Comprehensive psychological support, education, and consultation services available 24/7.
            </p>
            
            <p class="hero-description" style="font-size: 16px; color: rgba(255, 255, 255, 0.8); margin-top: -12px;">
                *Corporate wellness program for maritime companies
            </p>
            
            <div class="availability-indicator">
                <span class="pulse-dot"></span>
                Counselors Available Now
            </div>
            
            <p class="trust-markers">
                Complete confidentiality guaranteed • Multi-language support • No judgment zone
            </p>
            
            <div class="hero-buttons">
                <a href="https://wa.me/+905386849842" class="btn-primary">
                    💬 Chat on WhatsApp
                </a>
                <a href="#services" class="btn-secondary">
                    Learn More
                </a>
            </div>
            
            <div class="hero-stats">
                <div class="stat-card">
                    <div class="stat-value">200+</div>
                    <div class="stat-label">Seafarers Supported</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">24/7</div>
                    <div class="stat-label">Availability</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">98%</div>
                    <div class="stat-label">Positive Outcomes</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">3</div>
                    <div class="stat-label">Languages Supported</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Model Section -->
<section class="service-model-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">SERVICE OPTIONS</span>
            <h2 class="section-title">Flexible Service Models</h2>
            <p class="section-description">
                Choose the wellbeing support model that fits your fleet operations.
            </p>
        </div>
        
        <div class="model-grid">
            <div class="model-card">
                <h3>Standalone Wellness Contracts</h3>
                <ul>
                    <li>Fleet-wide coverage for all vessels</li>
                    <li>24/7 multilingual support access</li>
                    <li>MMPI testing and crew assessments</li>
                    <li>Monthly wellness reporting</li>
                    <li>Customized program design</li>
                </ul>
            </div>
            
            <div class="model-card">
                <h3>Bundled with Catering Management</h3>
                <ul>
                    <li>Integrated with catering contracts</li>
                    <li>Holistic crew care approach</li>
                    <li>Streamlined single-provider solution</li>
                    <li>Bundled pricing advantage</li>
                    <li>Coordinated wellness & nutrition</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">OUR SERVICES</span>
            <h2 class="section-title">Comprehensive Mental Health Support</h2>
            <p class="section-description">
                Professional services designed specifically for the unique challenges of maritime life.
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🎧</div>
                <h3>24/7 Psychological Support</h3>
                <p>Professional counseling services available around the clock. Reach out anytime, anywhere.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">📚</div>
                <h3>Educational Resources</h3>
                <p>Comprehensive mental health education and self-help materials tailored for seafarers.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">👤</div>
                <h3>Private Consultation</h3>
                <p>Confidential one-on-one sessions with certified maritime psychologists.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">📋</div>
                <h3>MMPI Testing</h3>
                <p>Comprehensive psychological assessments and detailed reporting for crew evaluation.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🔒</div>
                <h3>Confidential Reporting</h3>
                <p>Secure reporting system for company wellness monitoring without compromising privacy.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🌟</div>
                <h3>Preventive Wellness</h3>
                <p>Proactive programs to maintain mental health and prevent issues before they arise.</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="workflow-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">HOW IT WORKS</span>
            <h2 class="section-title">Getting Support Is Easy</h2>
            <p class="section-description">
                A simple, confidential process designed to make accessing support as easy as possible.
            </p>
        </div>
        
        <div class="workflow-steps">
            <div class="workflow-step">
                <div class="step-number">01</div>
                <h3>Reach Out</h3>
                <p>Contact us via phone, email, or our secure chat platform</p>
            </div>
            
            <div class="workflow-step">
                <div class="step-number">02</div>
                <h3>Initial Assessment</h3>
                <p>Brief confidential discussion to understand your needs</p>
            </div>
            
            <div class="workflow-step">
                <div class="step-number">03</div>
                <h3>Ongoing Support</h3>
                <p>Regular sessions, resources, and continuous support</p>
            </div>
            
            <div class="workflow-step">
                <div class="step-number">04</div>
                <h3>Progress Tracking</h3>
                <p>Monitor your wellbeing improvement over time</p>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="programs-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">WELLNESS PROGRAMS</span>
            <h2 class="section-title">Structured Wellness Programs</h2>
            <p class="section-description">
                Evidence-based programs addressing common maritime wellbeing challenges.
            </p>
        </div>
        
        <div class="programs-grid">
            <div class="program-card">
                <h3>Stress Management</h3>
                <div class="program-meta">
                    <span class="meta-item">📅 8 sessions</span>
                    <span class="meta-item">⏱️ 45 mins each</span>
                </div>
                <p>Learn practical techniques to manage stress at sea, maintain emotional balance, and develop resilience.</p>
            </div>
            
            <div class="program-card">
                <h3>Resilience Building</h3>
                <div class="program-meta">
                    <span class="meta-item">📅 6 sessions</span>
                    <span class="meta-item">⏱️ 1 hour each</span>
                </div>
                <p>Build mental toughness and adaptability for challenging maritime conditions and long voyages.</p>
            </div>
            
            <div class="program-card">
                <h3>Sleep Optimization</h3>
                <div class="program-meta">
                    <span class="meta-item">📅 4 sessions</span>
                    <span class="meta-item">⏱️ 30 mins each</span>
                </div>
                <p>Improve sleep quality despite irregular schedules, watch systems, and vessel operations.</p>
            </div>
            
            <div class="program-card">
                <h3>Relationship Support</h3>
                <div class="program-meta">
                    <span class="meta-item">📅 6 sessions</span>
                    <span class="meta-item">⏱️ 1 hour each</span>
                </div>
                <p>Maintain healthy relationships with family and loved ones while at sea for extended periods.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section-sw">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">FAQ</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
        </div>
        
        <div class="faq-layout">
            <!-- Logo Container -->
            <div class="faq-logo-container">
                <img src="assets/images/seafarers-wellbeing-logo-png.png" alt="Seafarers Wellbeing by Ekol">
                <h3 class="faq-logo-title">Seafarers Wellbeing</h3>
                <p class="faq-logo-subtitle">Comprehensive mental health and wellness support for maritime professionals, powered by Ekol Denizcilik</p>
            </div>
            
            <!-- FAQ Content -->
            <div class="faq-container">
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    How do I access the service at sea?
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We offer phone, email, and secure chat options. Sessions work even with limited internet connectivity.
                    </div>
                </div>
            </div>
            
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    What languages are supported?
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We currently offer support in English, Turkish and German, with additional languages available upon request.
                    </div>
                </div>
            </div>
            
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    Will my employer know I'm using this service?
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        While your company purchases this program for your benefit, all counseling sessions are completely confidential. Your employer will never know if or when you use the service. They only receive general program usage statistics without any individual information.
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="auto-container">
        <h2 style="color: white;">Invest in Your Crew's Mental Wellbeing</h2>
        <p style="color: white;">Comprehensive mental health support for your maritime workforce. Contact us to learn about corporate wellness programs.</p>
        <div class="hero-buttons">
            <a href="/contact" class="btn-primary">Request Corporate Program Info</a>
            <a href="https://wa.me/+905386849842" class="btn-secondary">WhatsApp Us</a>
        </div>
    </div>
</section>

<script>
function toggleFaq(element) {
    const isActive = element.classList.contains('active');
    
    // Close all
    document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('active');
    });
    
    // Open clicked if it wasn't active
    if (!isActive) {
        element.classList.add('active');
    }
}
</script>

<?php require_once 'footer.php'; ?>
