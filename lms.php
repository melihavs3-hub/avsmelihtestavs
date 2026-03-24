<?php
$seo_title = "AVS Maritime Culinary LMS | Online Galley Training | Ship Cook Education";
$canonical = "https://www.avsglobalsupply.com/lms";
$eng_link = "https://www.avsglobalsupply.com/lms";
$tr_link = "https://www.avsglobalsupply.com/tr/lms";

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
      "@id": "https://www.avsglobalsupply.com/lms#webpage",
      "url": "https://www.avsglobalsupply.com/lms",
      "name": "Learning Management System (LMS) for Maritime Fleets | AVS Global Supply",
      "description": "AVS Learning Management System (LMS) is a maritime-focused digital training platform designed to standardise onboard behaviour, preserve operational knowledge, and improve service consistency across fleets. The system supports structured onboarding, role-based learning paths, refresher training, and knowledge continuity for seafarers and onboard staff.",
      "inLanguage": "en",
      "isPartOf": { "@id": "https://www.avsglobalsupply.com/#website" },
      "about": { "@id": "https://www.avsglobalsupply.com/lms#service" },
      "keywords": [
        "maritime learning management system",
        "crew training platform",
        "onboard training system",
        "fleet training standardisation",
        "seafarer training software",
        "maritime lms"
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.avsglobalsupply.com/lms#breadcrumbs",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.avsglobalsupply.com/" },
        { "@type": "ListItem", "position": 2, "name": "Learning Management System", "item": "https://www.avsglobalsupply.com/lms" }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.avsglobalsupply.com/lms#service",
      "name": "Maritime Learning Management System (LMS)",
      "description": "AVS Global Supply provides a Learning Management System tailored for maritime operations. The LMS enables fleet-wide training consistency by delivering structured onboarding, standard operating procedures, service behaviour training, and refresher modules. By centralising knowledge and tracking training progress, AVS LMS supports operational continuity, compliance, and measurable improvements in onboard service quality.",
      "inLanguage": "en",
      "provider": { "@id": "https://www.avsglobalsupply.com/#organization" },
      "areaServed": "Worldwide",
      "serviceType": [
        "Maritime LMS",
        "Crew Training Platform",
        "Onboard Knowledge Management",
        "Fleet Training Standardisation"
      ],
      "audience": {
        "@type": "BusinessAudience",
        "audienceType": [
          "Ship owners",
          "Ship management companies",
          "Fleet managers",
          "Marine HR and training teams"
        ]
      }
    }
  ]
}
</script>
';


require_once 'header.php';
?>

<style>
:root {
    --blue-900: #1e3a8a;
    --blue-800: #1e40af;
    --blue-600: #2563eb;
    --blue-500: #3b82f6;
    --indigo-900: #3730a3;
    --purple-500: #a855f7;
    --pink-500: #ec4899;
    --green-500: #22c55e;
    --cyan-500: #06b6d4;
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
.lms-hero {
    position: relative;
    min-height: 100vh;
    background: linear-gradient(135deg, var(--blue-900) 0%, var(--blue-800) 50%, var(--indigo-900) 100%);
    overflow: hidden;
    display: flex;
    align-items: center;
    padding: 120px 0 80px;
}

.lms-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        linear-gradient(to right, rgba(59, 130, 246, 0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(59, 130, 246, 0.03) 1px, transparent 1px);
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
    background: var(--blue-500);
    top: 10%;
    left: -100px;
}

.pulse-circle-2 {
    width: 300px;
    height: 300px;
    background: var(--purple-500);
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
    background: white;
    color: var(--blue-900);
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

/* Features Section */
.features-section {
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
    background: rgba(59, 130, 246, 0.1);
    color: var(--blue-600);
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

.features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.feature-card {
    background: white;
    border: 2px solid rgba(226, 232, 240, 0.5);
    border-radius: 20px;
    padding: 36px;
    text-align: center;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
}

.feature-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
    border-color: currentColor;
}

.feature-card:nth-child(1) { border-color: rgba(37, 99, 235, 0.3); }
.feature-card:nth-child(2) { border-color: rgba(168, 85, 247, 0.3); }
.feature-card:nth-child(3) { border-color: rgba(236, 72, 153, 0.3); }
.feature-card:nth-child(4) { border-color: rgba(34, 197, 94, 0.3); }
.feature-card:nth-child(5) { border-color: rgba(6, 182, 212, 0.3); }

.feature-card:nth-child(1):hover { border-color: var(--blue-500); }
.feature-card:nth-child(2):hover { border-color: var(--purple-500); }
.feature-card:nth-child(3):hover { border-color: var(--pink-500); }
.feature-card:nth-child(4):hover { border-color: var(--green-500); }
.feature-card:nth-child(5):hover { border-color: var(--cyan-500); }

.feature-icon {
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

.feature-card:hover .feature-icon {
    transform: scale(1.1) rotate(5deg);
}

.feature-card:nth-child(1) .feature-icon { background: linear-gradient(135deg, var(--blue-600) 0%, var(--blue-500) 100%); }
.feature-card:nth-child(2) .feature-icon { background: linear-gradient(135deg, #9333ea 0%, var(--purple-500) 100%); }
.feature-card:nth-child(3) .feature-icon { background: linear-gradient(135deg, #db2777 0%, var(--pink-500) 100%); }
.feature-card:nth-child(4) .feature-icon { background: linear-gradient(135deg, #16a34a 0%, var(--green-500) 100%); }
.feature-card:nth-child(5) .feature-icon { background: linear-gradient(135deg, #0891b2 0%, var(--cyan-500) 100%); }

.feature-card h3 {
    font-size: 26px;
    font-weight: 800;
    color: var(--slate-900);
    margin-bottom: 14px;
    letter-spacing: -0.5px;
}

.feature-card p {
    font-size: 16px;
    color: var(--slate-600);
    line-height: 1.7;
}

/* Course Categories Section */
.categories-section {
    padding: 100px 0;
    background: var(--slate-50);
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.category-card {
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 16px;
    padding: 32px;
    cursor: pointer;
    transition: all 0.3s;
}

.category-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border-color: var(--blue-600);
}

.category-icon {
    font-size: 48px;
    margin-bottom: 16px;
}

.category-card h3 {
    font-size: 24px;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 8px;
}

.category-count {
    color: var(--blue-600);
    font-weight: 600;
    font-size: 14px;
}

/* Benefits Section */
.benefits-section {
    padding: 100px 0;
    background: white;
}

.benefits-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.benefits-image {
    position: relative;
    height: 500px;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
}

.benefits-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.benefits-list {
    list-style: none;
}

.benefit-item {
    display: flex;
    gap: 20px;
    margin-bottom: 32px;
}

.benefit-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: white;
    flex-shrink: 0;
}

.benefit-item:nth-child(1) .benefit-icon { background: var(--blue-600); }
.benefit-item:nth-child(2) .benefit-icon { background: var(--purple-500); }
.benefit-item:nth-child(3) .benefit-icon { background: var(--pink-500); }

.benefit-text h4 {
    font-size: 20px;
    font-weight: 700;
    color: var(--slate-900);
    margin-bottom: 8px;
}

.benefit-text p {
    font-size: 16px;
    color: var(--slate-600);
    line-height: 1.6;
}

/* FAQ Section */
.faq-section-sw {
    padding: 100px 0;
    background: var(--slate-50);
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
}

.faq-item:hover {
    border-color: var(--blue-600);
}

.faq-question {
    padding: 24px;
    font-size: 18px;
    font-weight: 700;
    color: var(--slate-900);
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.faq-icon {
    font-size: 24px;
    color: var(--blue-600);
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
    background: linear-gradient(135deg, var(--blue-900), var(--blue-800), var(--indigo-900));
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
    margin-bottom: 16px;
    opacity: 0.9;
}

.cta-note {
    font-size: 16px;
    opacity: 0.8;
    margin-bottom: 40px;
}

/* Responsive */
@media (max-width: 1024px) {
    .hero-stats,
    .features-grid,
    .categories-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .benefits-content {
        grid-template-columns: 1fr;
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
    .features-grid,
    .categories-grid {
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
<section class="lms-hero">
    <div class="pulse-circle pulse-circle-1"></div>
    <div class="pulse-circle pulse-circle-2"></div>
    
    <div class="auto-container">
        <div class="hero-content">
            <div class="hero-badge">
                #1 Maritime Culinary Training Platform
            </div>
            
            <h1 class="hero-title">Turn Your Galley Into a 5-Star Kitchen</h1>
            
            <p class="hero-description">
                Stop guessing. Stop improvising. Start cooking like a pro with expert training from the AVS Culinary Team. Master maritime cooking challenges and transform your crew's dining experience.
            </p>
            
            <p class="hero-description" style="font-size: 16px; color: rgba(255, 255, 255, 0.8); margin-top: -12px;">
                *Available exclusively as an add-on to AVS catering contracts
            </p>
            
            <div class="hero-buttons">
                <a href="/contact" class="btn-primary">
                    ▶ Watch Demo
                </a>
                <a href="#features" class="btn-secondary">
                    Learn More
                </a>
            </div>
            
            <div class="hero-stats">
                <div class="stat-card">
                    <div class="stat-value">500+</div>
                    <div class="stat-label">Recipes Available</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">10+</div>
                    <div class="stat-label">Video Courses</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">500+</div>
                    <div class="stat-label">Active Users</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">95%</div>
                    <div class="stat-label">Satisfaction Rate</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section" id="features">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">PLATFORM FEATURES</span>
            <h2 class="section-title">Everything You Need to Master Galley Cooking</h2>
            <p class="section-description">
                A comprehensive learning platform designed specifically for maritime culinary professionals.
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">📚</div>
                <h3>Comprehensive Learning</h3>
                <p>Master the art of maritime cooking with curated courses from basic fundamentals to advanced techniques.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">👨‍🍳</div>
                <h3>Expert-Led Training</h3>
                <p>Our culinary masters have cooked through storms and served thousands. Learn from the best in maritime cooking.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎥</div>
                <h3>Video Tutorials</h3>
                <p>Watch, pause, replay—crystal-clear videos showing every technique, ingredient prep, and cooking method.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🌍</div>
                <h3>Global Chef Community</h3>
                <p>Connect with maritime cooks worldwide. Share recipes, tips, and experiences from galleys across the oceans.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>Learn Anywhere</h3>
                <p>Download courses for offline viewing. Learn at your pace, on your schedule, whether at sea or in port.</p>
            </div>
        </div>
    </div>
</section>

<!-- Course Categories Section -->
<section class="categories-section">
    <div class="auto-container">
        <div class="section-header">
            <span class="section-badge">COURSE LIBRARY</span>
            <h2 class="section-title">Explore Our Course Categories</h2>
            <p class="section-description">
                From basic skills to advanced culinary techniques, we've got you covered.
            </p>
        </div>
        
        <div class="categories-grid">
            <div class="category-card">
                <div class="category-icon">🔰</div>
                <h3>Basic Fundamentals</h3>
                <p class="category-count">5 courses</p>
            </div>
            
            <div class="category-card">
                <div class="category-icon">🌍</div>
                <h3>International Cuisine</h3>
                <p class="category-count">10 courses</p>
            </div>
            
            <div class="category-card">
                <div class="category-icon">🥗</div>
                <h3>Dietary Restrictions</h3>
                <p class="category-count">3 courses</p>
            </div>
            
            <div class="category-card">
                <div class="category-icon">🛡️</div>
                <h3>Food Safety</h3>
                <p class="category-count">8 courses</p>
            </div>
            
            <div class="category-card">
                <div class="category-icon">🍰</div>
                <h3>Baking & Pastry</h3>
                <p class="category-count">6 courses</p>
            </div>
            
            <div class="category-card">
                <div class="category-icon">⚓</div>
                <h3>Maritime Specific</h3>
                <p class="category-count">9 courses</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="auto-container">
        <div class="benefits-content">
            <div class="benefits-image">
                <img src="assets/images/chef-onboard.jpg" alt="Maritime Chef Training">
            </div>
            
            <div>
                <div class="section-header" style="text-align: left; margin-bottom: 40px;">
                    <span class="section-badge">WHY CHOOSE AVS LMS</span>
                    <h2 class="section-title">Built by Maritime Chefs, For Maritime Chefs</h2>
                    <p class="section-description">
                        We know your challenges because we've lived them. Limited ingredients, rough seas, demanding schedules—our training addresses real maritime cooking scenarios.
                    </p>
                </div>
                
                <ul class="benefits-list">
                    <li class="benefit-item">
                        <div class="benefit-icon">⚓</div>
                        <div class="benefit-text">
                            <h4>Maritime-Specific Solutions</h4>
                            <p>Learn techniques designed for galley operations, limited storage, and cooking in motion.</p>
                        </div>
                    </li>
                    
                    <li class="benefit-item">
                        <div class="benefit-icon">📊</div>
                        <div class="benefit-text">
                            <h4>Track Your Growth</h4>
                            <p>Monitor your progress, earn certifications, and showcase your culinary development.</p>
                        </div>
                    </li>
                    
                    <li class="benefit-item">
                        <div class="benefit-icon">🔄</div>
                        <div class="benefit-text">
                            <h4>Always Fresh Content</h4>
                            <p>New courses added monthly. Stay current with culinary trends and techniques.</p>
                        </div>
                    </li>
                </ul>
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
                <img src="assets/images/partner/ekol-denizcilik-logo.jpg" alt="Ekol Denizcilik">
                <h3 class="faq-logo-title">Powered by Ekol Denizcilik</h3>
                <p class="faq-logo-subtitle">Leading maritime training provider with decades of experience in seafarer education</p>
            </div>
            
            <!-- FAQ Content -->
            <div class="faq-container">
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    How do I access the courses?
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Access is provided through our web platform and mobile app. Download courses for offline viewing at sea.
                    </div>
                </div>
            </div>
            
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    Is internet required for all courses?
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        No, you can download courses for offline viewing. Perfect for vessels with limited connectivity.
                    </div>
                </div>
            </div>
            
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    Can multiple crew members use one account?
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We offer fleet licenses allowing multiple users. Contact us for custom pricing for your vessel fleet.
                    </div>
                </div>
            </div>
            
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    Do courses come with certifications?
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Yes, upon course completion you receive certificates that can be added to your maritime professional portfolio.
                    </div>
                </div>
            </div>
            
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    How can I get LMS access?
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        AVS Maritime Culinary LMS is exclusively available as an add-on to our catering contracts. Contact our team to learn about combining premium catering services with professional culinary training for your crew.
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
        <h2 style="color: white;">Start Your Culinary Journey Today</h2>
        <p style="color: white;">Transform your galley operations with professional maritime culinary training</p>
        <p class="cta-note" style="color: white;">*Exclusively available as an add-on to AVS catering contracts</p>
        <div class="hero-buttons">
            <a href="/contact" class="btn-primary">Get Started</a>
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
