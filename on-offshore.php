<?php 
$title = "Onshore/Offshore Catering - AVS Global Supply";
$canonical = "https://www.avsglobalsupply.com/on-offshore";
$eng_link = "https://www.avsglobalsupply.com/on-offshore";
$custom_js = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
';
include 'header.php'; 
?>

<!-- Offshore Catering Wrapper -->
<div class="offshore-wrapper">
    <style>
        .offshore-wrapper * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .offshore-wrapper h1 {
            color: white;
        }
 .offshore-wrapper li {
            color: white;
        }
        .offshore-wrapper {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #ffffff;
            overflow-x: hidden;
        }

        /* Navigation Styles */
        .offshore-wrapper .nav-bar {
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 999;
            padding: 1rem 0;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .offshore-wrapper .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .offshore-wrapper .nav-menu {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
        }

        .offshore-wrapper .nav-button {
            background: transparent;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            color: #374151;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .offshore-wrapper .nav-button:hover {
            background: #f3f4f6;
            color: #1e3a8a;
        }

        .offshore-wrapper .nav-button.active {
            background: #1e3a8a;
            color: white;
        }

        .offshore-wrapper .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #1e3a8a;
            cursor: pointer;
            position: absolute;
            right: 1.5rem;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Content Styles */
        .offshore-wrapper .content {
            min-height: 100vh;
        }

        @media (max-width: 480px) {
            .offshore-wrapper .nav-logo-text {
                font-size: 1rem;
            }
        }

        /* Responsive Utilities */
        .offshore-wrapper .responsive-grid-2,
        .offshore-wrapper .responsive-grid-3,
        .offshore-wrapper .responsive-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
            width: 100%;
        }

        /* Ensure cards stretch correctly inside grids */
        .offshore-wrapper .responsive-grid-2 > div,
        .offshore-wrapper .responsive-grid-3 > div,
        .offshore-wrapper .responsive-grid-4 > div {
            width: 100%;
        }

        .offshore-wrapper .responsive-grid-hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        @media (max-width: 768px) {
            .offshore-wrapper .responsive-grid-hero {
                grid-template-columns: 1fr;
                gap: 1.5rem;
                text-align: center;
            }
            
            /* Force single-column on small screens for tighter readability */
            .offshore-wrapper .responsive-grid-2,
            .offshore-wrapper .responsive-grid-3,
            .offshore-wrapper .responsive-grid-4 {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            /* Container adjustments for mobile */
            div[style*="max-width: 1200px"] {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
        }

        @media (max-width: 640px) {
            .offshore-wrapper .responsive-grid-hero {
                gap: 1rem;
            }
            
            /* Tighten spacing and padding on cards for small screens */
            .offshore-wrapper .responsive-grid-2,
            .offshore-wrapper .responsive-grid-3,
            .offshore-wrapper .responsive-grid-4 {
                gap: 0.9rem;
            }
            
            /* Reduce margins between stacked cards */
            .offshore-wrapper .responsive-grid-2 > div,
            .offshore-wrapper .responsive-grid-3 > div,
            .offshore-wrapper .responsive-grid-4 > div {
                margin: 0;
            }
            
            .offshore-wrapper [style*="padding: 3rem"] {
                padding: 2rem 1.25rem !important;
            }
            
            .offshore-wrapper [style*="padding: 2.5rem"] {
                padding: 1.75rem 1.1rem !important;
            }
            
            .offshore-wrapper [style*="padding: 2rem"] {
                padding: 1.5rem 1.1rem !important;
            }
        }

        /* Responsive Typography */
        .offshore-wrapper .responsive-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .offshore-wrapper .responsive-subtitle {
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .offshore-wrapper .responsive-text {
            font-size: 1rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .offshore-wrapper .responsive-title {
                font-size: 2rem;
            }
            
            .offshore-wrapper .responsive-subtitle {
                font-size: 1.1rem;
            }
            
            .offshore-wrapper .responsive-text {
                font-size: 0.95rem;
            }
            
            /* Responsive padding */
            .offshore-wrapper .responsive-padding {
                padding: 3rem 1rem !important;
            }
            
            .offshore-wrapper .responsive-section-padding {
                padding: 3rem 0 !important;
            }
        }

        @media (max-width: 480px) {
            .offshore-wrapper .responsive-title {
                font-size: 1.75rem;
            }
            
            .offshore-wrapper .responsive-subtitle {
                font-size: 1rem;
            }
            
            .offshore-wrapper .responsive-padding {
                padding: 2rem 1rem !important;
            }
            
            .offshore-wrapper .responsive-section-padding {
                padding: 2rem 0 !important;
            }
        }

        /* Responsive Form Styles */
        .offshore-wrapper .responsive-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .offshore-wrapper .responsive-form-grid-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1rem;
        }

        @media (max-width: 768px) {
            .responsive-form-grid,
            .offshore-wrapper .responsive-form-grid-3 {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .offshore-wrapper .nav-menu {
                position: fixed;
                top: 5rem;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 1rem;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                z-index: 1000;
            }
            
            .nav-menu.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }
            
            .offshore-wrapper .nav-button {
                padding: 1rem;
                text-align: center;
                border-bottom: 1px solid #f3f4f6;
            }
            
            .offshore-wrapper .mobile-menu-btn {
                display: block;
            }
            
            .offshore-wrapper .nav-container {
                padding: 0 1rem;
            }
            
            .offshore-wrapper .nav-logo-text {
                font-size: 1.2rem;
            }
            
            /* Fix container padding for mobile */
            div[style*="padding: 5rem"] {
                padding: 2rem 1rem !important;
            }
            
            section[style*="padding: 4rem 0"] {
                padding: 2rem 0 !important;
            }
            
            div[style*="max-width: 1200px"][style*="padding"] {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
            
            /* Mobile Typography Fixes */
            h1[style*="font-size: 3.5rem"] {
                font-size: 2rem !important;
                line-height: 1.2 !important;
            }
            
            h2[style*="font-size: 3rem"] {
                font-size: 1.8rem !important;
                line-height: 1.2 !important;
            }
            
            h2[style*="font-size: 2.5rem"] {
                font-size: 1.5rem !important;
                line-height: 1.3 !important;
            }
            
            h3[style*="font-size: 2rem"] {
                font-size: 1.3rem !important;
                line-height: 1.3 !important;
            }
            
            p[style*="font-size: 1.25rem"] {
                font-size: 1rem !important;
            }
            
            div[style*="font-size: 2.5rem"] {
                font-size: 1.5rem !important;
            }
            
            /* Span and text elements */
            span[style*="font-size: 2rem"] {
                font-size: 1.3rem !important;
                line-height: 1.3 !important;
            }
            
            /* Icon size adjustments for mobile */
            i[style*="font-size: 2.5rem"] {
                font-size: 1.8rem !important;
            }
            
            i[style*="font-size: 2rem"] {
                font-size: 1.5rem !important;
            }
            
            /* Ensure text doesn't overflow */
            h1, h2, h3, p {
                word-wrap: break-word !important;
                overflow-wrap: break-word !important;
                max-width: 100% !important;
            }
            
            /* Make button containers responsive */
            div[style*="display: flex; gap: 1rem"] {
                flex-direction: column !important;
                gap: 0.75rem !important;
            }
            
            div[style*="display: flex; gap: 1rem"] button {
                width: 100% !important;
                text-align: center !important;
            }
        }
    </style>

    <!-- Navigation Bar -->
    <nav class="nav-bar">
        <div class="nav-container">
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
            <div class="nav-menu">
                <a href="/global-ship-supply.php" class="nav-button">Global Supply</a>
                <a href="/provisions-supply.php" class="nav-button">Provisions Supply</a>
                <a href="/on-offshore.php" class="nav-button active">On/Offshore</a>
                <a href="/technical-stores.php" class="nav-button">Technical Stores</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <!-- Catering Page Content -->
        <div style="min-height: 100vh; background: linear-gradient(to bottom, #f8fafc, white);">
            <!-- Hero Section -->
            <section style="position: relative; overflow: hidden; background: linear-gradient(135deg, #581c87 0%, #7c3aed 50%, #3730a3 100%); color: white;">
                <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.2);"></div>
                <div style="max-width: 1200px; margin: 0 auto; padding: 5rem 1.5rem; position: relative; z-index: 10;">
                    <div class="responsive-grid-hero">
                        <div>
                            <div style="margin-bottom: 2rem;">
                                <div style="display: inline-block; background: rgba(168, 85, 247, 0.2); color: #e9d5ff; border: 1px solid rgba(168, 85, 247, 0.3); padding: 0.5rem 1rem; border-radius: 0.375rem; margin-bottom: 1rem;">
                                    Comprehensive Catering Solutions
                                </div>
                                <h1 style="font-size: 3.5rem; font-weight: bold; line-height: 1.1; margin: 1rem 0;">
                                    Onshore/Offshore Catering
                                    <span style="display: block; color: #c4b5fd;">& Services</span>
                                </h1>
                                <p style="font-size: 1.25rem; color: #e9d5ff; line-height: 1.6; margin: 1rem 0;">
                                    Elevate comfort and culinary excellence, onshore and offshore. Transform your environments 
                                    into havens of comfort and taste that exceed crew expectations.
                                </p>
                            </div>
                            
                            <!-- Key Highlights -->
                            <div class="responsive-grid-2" style="margin: 2rem 0;">
                                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 0.75rem; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 2.5rem; font-weight: bold; color: #fbbf24;">Global</div>
                                    <div style="color: #e9d5ff; font-weight: 500;">Rapid Mobilization</div>
                                </div>
                                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 0.75rem; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 2.5rem; font-weight: bold; color: #fbbf24;">360°</div>
                                    <div style="color: #e9d5ff; font-weight: 500;">Full Service Solutions</div>
                                </div>
                            </div>
                            
                            <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                                <a href="https://rfq.avsglobalsupply.com" target="_blank" style="text-decoration: none;">
                                    <button style="background: #eab308; color: black; font-weight: 600; padding: 0.75rem 2rem; border-radius: 0.375rem; border: none; cursor: pointer; font-size: 1.1rem;">
                                        Get Catering Quote
                                    </button>
                                </a>
                                <a href="#contact-form" style="text-decoration: none;">
                                    <button style="background: transparent; color: white; border: 1px solid rgba(255,255,255,0.3); padding: 0.75rem 2rem; border-radius: 0.375rem; cursor: pointer; font-size: 1.1rem;">
                                        Contact Us
                                    </button>
                                </a>
                            </div>
                        </div>
                        
                        <div style="position: relative;">
                            <img src="https://images.unsplash.com/photo-1514814309075-1f08d9a71f4c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtYXJpdGltZSUyMGNhdGVyaW5nJTIwb2Zmc2hvcmUlMjBkaW5pbmd8ZW58MXx8fHwxNzU5NDc2MDM4fDA&ixlib=rb-4.1.0&q=80&w=1080" 
                                 alt="Maritime catering and dining" 
                                 style="width: 100%; height: 24rem; object-fit: cover; border-radius: 1rem; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Core Services -->
            <section style="padding: 4rem 0; background: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Comprehensive Catering & Facility Services</h2>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 48rem; margin: 0 auto; line-height: 1.6;">
                            Making crews feel motivated and at home while promoting health, happiness, and career growth 
                            through exceptional service and comprehensive facility management.
                        </p>
                    </div>
                    
                    <div class="responsive-grid-3">
                        <div style="background: linear-gradient(135deg, #faf5ff 0%, white 100%); border-radius: 0.5rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                            <div style="width: 4rem; height: 4rem; background: #e9d5ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-utensils" style="font-size: 2rem; color: #9333ea;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Culinary Excellence</h3>
                            <p style="color: #6b7280; line-height: 1.6;">
                                Delicious, high-quality food catering to multinational dietary preferences. 
                                LMS-trained chefs and stewards ensuring exceptional dining experiences that boost morale.
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #eff6ff 0%, white 100%); border-radius: 0.5rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                            <div style="width: 4rem; height: 4rem; background: #dbeafe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-building" style="font-size: 2rem; color: #2563eb;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Facility Management</h3>
                            <p style="color: #6b7280; line-height: 1.6;">
                                Complete housekeeping, laundry, and sanitization services that maintain pristine 
                                environments. Creating comfortable spaces that feel like home for your crew.
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #f0fdf4 0%, white 100%); border-radius: 0.5rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                            <div style="width: 4rem; height: 4rem; background: #dcfce7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-graduation-cap" style="font-size: 2rem; color: #16a34a;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Training & Development</h3>
                            <p style="color: #6b7280; line-height: 1.6;">
                                Career development through our specialized education center. 
                                Investing in your crew's growth and professional advancement for long-term success.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Hotel Management & Catering Services Section -->
            <section style="padding: 4rem 0; background: #f8fafc;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Specialized Services</h2>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 48rem; margin: 0 auto; line-height: 1.6;">
                            Professional hotel management and comprehensive catering solutions tailored for maritime operations
                        </p>
                    </div>
                    
                    <div class="responsive-grid-2" style="gap: 3rem;">
                        <!-- Hotel Management -->
                        <div style="background: white; border-radius: 1rem; padding: 3rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04); border: 1px solid #e5e7eb;">
                            <div style="text-align: center; margin-bottom: 2rem;">
                                <div style="width: 5rem; height: 5rem; background: linear-gradient(135deg, #6366f1, #4f46e5); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                                    <i class="fas fa-hotel" style="font-size: 2.5rem; color: white;"></i>
                                </div>
                                <h3 style="font-size: 2rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Hotel Management</h3>
                                <p style="color: #6b7280; line-height: 1.6; margin-bottom: 2rem;">
                                    Complete hospitality services ensuring comfort and cleanliness standards that exceed expectations
                                </p>
                            </div>
                            
                            <div>
                                <div style="display: flex; align-items: start; margin-bottom: 1.5rem;">
                                    <div style="width: 3rem; height: 3rem; background: #ede9fe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                                        <i class="fas fa-tshirt" style="font-size: 1.25rem; color: #6366f1;"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Laundry Services</h4>
                                        <p style="color: #6b7280; line-height: 1.6;">Professional washing, drying, and pressing services with eco-friendly detergents and fabric care</p>
                                    </div>
                                </div>
                                
                                <div style="display: flex; align-items: start; margin-bottom: 1.5rem;">
                                    <div style="width: 3rem; height: 3rem; background: #dbeafe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                                        <i class="fas fa-broom" style="font-size: 1.25rem; color: #3b82f6;"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Cleaning Services</h4>
                                        <p style="color: #6b7280; line-height: 1.6;">Deep cleaning, sanitization, and maintenance of cabins, common areas, and recreational spaces</p>
                                    </div>
                                </div>
                                
                                <div style="display: flex; align-items: start; margin-bottom: 1.5rem;">
                                    <div style="width: 3rem; height: 3rem; background: #f0fdf4; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                                        <i class="fas fa-bed" style="font-size: 1.25rem; color: #10b981;"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Housekeeping</h4>
                                        <p style="color: #6b7280; line-height: 1.6;">Daily room service, linen changes, and personalized accommodation maintenance</p>
                                    </div>
                                </div>
                                
                                <div style="display: flex; align-items: start;">
                                    <div style="width: 3rem; height: 3rem; background: #fef3c7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                                        <i class="fas fa-spray-can" style="font-size: 1.25rem; color: #f59e0b;"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Sanitization</h4>
                                        <p style="color: #6b7280; line-height: 1.6;">Advanced disinfection protocols ensuring health and safety compliance</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Catering Services -->
                        <div style="background: white; border-radius: 1rem; padding: 3rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04); border: 1px solid #e5e7eb;">
                            <div style="text-align: center; margin-bottom: 2rem;">
                                <div style="width: 5rem; height: 5rem; background: linear-gradient(135deg, #f59e0b, #d97706); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                                    <i class="fas fa-concierge-bell" style="font-size: 2.5rem; color: white;"></i>
                                </div>
                                <h3 style="font-size: 2rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Catering Services</h3>
                                <p style="color: #6b7280; line-height: 1.6; margin-bottom: 2rem;">
                                    World-class culinary experiences with diverse menus catering to international tastes and dietary requirements
                                </p>
                            </div>
                            
                            <div>
                                <div style="display: flex; align-items: start; margin-bottom: 1.5rem;">
                                    <div style="width: 3rem; height: 3rem; background: #fef3c7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                                        <i class="fas fa-globe" style="font-size: 1.25rem; color: #f59e0b;"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 0.5rem;">International Cuisine</h4>
                                        <p style="color: #6b7280; line-height: 1.6;">Diverse menu options representing global culinary traditions and local specialties</p>
                                    </div>
                                </div>
                                
                                <div style="display: flex; align-items: start; margin-bottom: 1.5rem;">
                                    <div style="width: 3rem; height: 3rem; background: #dcfce7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                                        <i class="fas fa-leaf" style="font-size: 1.25rem; color: #16a34a;"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Dietary Accommodations</h4>
                                        <p style="color: #6b7280; line-height: 1.6;">Specialized menus for dietary restrictions, allergies, and religious requirements</p>
                                    </div>
                                </div>
                                
                                <div style="display: flex; align-items: start; margin-bottom: 1.5rem;">
                                    <div style="width: 3rem; height: 3rem; background: #fee2e2; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                                        <i class="fas fa-clock" style="font-size: 1.25rem; color: #dc2626;"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 0.5rem;">24/7 Service</h4>
                                        <p style="color: #6b7280; line-height: 1.6;">Round-the-clock meal service accommodating all watch schedules and time zones</p>
                                    </div>
                                </div>
                                
                                <div style="display: flex; align-items: start;">
                                    <div style="width: 3rem; height: 3rem; background: #ede9fe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                                        <i class="fas fa-award" style="font-size: 1.25rem; color: #8b5cf6;"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Premium Quality</h4>
                                        <p style="color: #6b7280; line-height: 1.6;">Fresh ingredients, professional presentation, and exceptional taste in every meal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- QHSE Section -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div style="text-align: center; margin-bottom: 4rem;">
                        <h2 style="font-size: 2.5rem; font-weight: bold; color: white; margin-bottom: 1rem;">
                            QHSE - Quality, Health, Safety & Environment
                        </h2>
                        <p style="font-size: 1.25rem; color: #cbd5e1; max-width: 48rem; margin: 0 auto; line-height: 1.6;">
                            Our comprehensive QHSE management ensures the highest standards of quality, health, safety, 
                            and environmental protection across all maritime operations.
                        </p>
                    </div>
                    
                    <div class="responsive-grid-2" style="gap: 3rem; margin-bottom: 3rem;">
                        <!-- Quality -->
                        <div style="background: rgba(255, 255, 255, 0.05); border-radius: 1rem; padding: 2.5rem; border: 1px solid rgba(255, 255, 255, 0.1);">
                            <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                                <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #3b82f6, #1d4ed8); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <i class="fas fa-award" style="font-size: 1.5rem; color: white;"></i>
                                </div>
                                <h3 style="font-size: 1.75rem; font-weight: bold; color: white;">Quality</h3>
                            </div>
                            <ul style="color: #cbd5e1; line-height: 1.8; list-style: none; padding: 0;">
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    ISO 14001 certified quality management systems
                                </li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Continuous improvement and performance monitoring
                                </li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Supplier qualification and audit programs
                                </li>
                                <li style="display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Customer satisfaction measurement and feedback
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Health -->
                        <div style="background: rgba(255, 255, 255, 0.05); border-radius: 1rem; padding: 2.5rem; border: 1px solid rgba(255, 255, 255, 0.1);">
                            <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                                <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #10b981, #047857); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <i class="fas fa-heartbeat" style="font-size: 1.5rem; color: white;"></i>
                                </div>
                                <h3 style="font-size: 1.75rem; font-weight: bold; color: white;">Health</h3>
                            </div>
                            <ul style="color: #cbd5e1; line-height: 1.8; list-style: none; padding: 0;">
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Occupational health and wellness programs
                                </li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Mental health support and crew wellbeing
                                </li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Nutritional guidelines and healthy meal planning
                                </li>
                                <li style="display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Medical emergency preparedness and response
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Safety -->
                        <div style="background: rgba(255, 255, 255, 0.05); border-radius: 1rem; padding: 2.5rem; border: 1px solid rgba(255, 255, 255, 0.1);">
                            <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                                <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #f59e0b, #d97706); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <i class="fas fa-shield-alt" style="font-size: 1.5rem; color: white;"></i>
                                </div>
                                <h3 style="font-size: 1.75rem; font-weight: bold; color: white;">Safety</h3>
                            </div>
                            <ul style="color: #cbd5e1; line-height: 1.8; list-style: none; padding: 0;">
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    ISM Code and ISPS Code compliance
                                </li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Risk assessment and hazard identification
                                </li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Safety briefings and emergency drills
                                </li>
                                <li style="display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Incident reporting and investigation procedures
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Environment -->
                        <div style="background: rgba(255, 255, 255, 0.05); border-radius: 1rem; padding: 2.5rem; border: 1px solid rgba(255, 255, 255, 0.1);">
                            <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                                <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #059669, #047857); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <i class="fas fa-leaf" style="font-size: 1.5rem; color: white;"></i>
                                </div>
                                <h3 style="font-size: 1.75rem; font-weight: bold; color: white;">Environment</h3>
                            </div>
                            <ul style="color: #cbd5e1; line-height: 1.8; list-style: none; padding: 0;">
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    MARPOL Convention compliance and monitoring
                                </li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Waste management and pollution prevention
                                </li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Energy efficiency and carbon footprint reduction
                                </li>
                                <li style="display: flex; align-items: start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    Environmental impact assessments and reporting
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Certifications Banner -->
                    <div style="background: rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2rem; text-align: center; border: 1px solid rgba(255, 255, 255, 0.2);">
                        <h4 style="font-size: 1.5rem; font-weight: bold; color: white; margin-bottom: 1rem;">
                            International Certifications & Standards
                        </h4>
                        <div class="responsive-grid-3" style="gap: 1.5rem;">
                            <div style="color: #cbd5e1;">
                                <i class="fas fa-certificate" style="color: #fbbf24; margin-right: 0.5rem;"></i>
                                ISO 14001:2015
                            </div>
                            <div style="color: #cbd5e1;">
                                <i class="fas fa-certificate" style="color: #fbbf24; margin-right: 0.5rem;"></i>
                                ISO 9001:2015
                            </div>
                            <div style="color: #cbd5e1;">
                                <i class="fas fa-certificate" style="color: #fbbf24; margin-right: 0.5rem;"></i>
                                ISPS Code Compliant
                            </div>
                            <div style="color: #cbd5e1;">
                                <i class="fas fa-certificate" style="color: #fbbf24; margin-right: 0.5rem;"></i>
                                ISO 45001:2018
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- HACCP Section -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, #065f46 0%, #047857 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div style="text-align: center; margin-bottom: 4rem;">
                        <div style="display: inline-flex; align-items: center; background: rgba(255, 255, 255, 0.15); border-radius: 2rem; padding: 0.75rem 1.5rem; margin-bottom: 2rem; border: 1px solid rgba(255, 255, 255, 0.2);">
                            <i class="fas fa-certificate" style="color: #fbbf24; font-size: 1.5rem; margin-right: 0.75rem;"></i>
                            <span style="color: white; font-weight: 600; font-size: 1.1rem;">ISO 22000:2018 CERTIFIED</span>
                        </div>
                        <h2 style="font-size: 3rem; font-weight: bold; color: white; margin-bottom: 1rem;">
                            HACCP Food Safety Management
                        </h2>
                        <p style="font-size: 1.25rem; color: #a7f3d0; max-width: 48rem; margin: 0 auto; line-height: 1.6;">
                            Hazard Analysis and Critical Control Points (HACCP) system ensures the highest standards of food safety 
                            and quality in maritime catering operations worldwide.
                        </p>
                    </div>
                    
                    <div style="background: rgba(255, 255, 255, 0.1); border-radius: 1.5rem; padding: 3rem; border: 1px solid rgba(255, 255, 255, 0.2); margin-bottom: 3rem;">
                        <div style="text-align: center; margin-bottom: 3rem;">
                            <div style="width: 6rem; height: 6rem; background: linear-gradient(135deg, #fbbf24, #f59e0b); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 20px 25px -5px rgba(251, 191, 36, 0.3);">
                                <i class="fas fa-utensils" style="font-size: 2.5rem; color: white;"></i>
                            </div>
                            <h3 style="font-size: 2rem; font-weight: bold; color: white; margin-bottom: 1rem;">7 Principles of HACCP</h3>
                            <p style="color: #a7f3d0; font-size: 1.1rem;">Our comprehensive food safety management system</p>
                        </div>
                        
                        <div class="responsive-grid-2" style="gap: 2rem;">
                            <div style="background: rgba(255, 255, 255, 0.08); border-radius: 1rem; padding: 2rem; border: 1px solid rgba(255, 255, 255, 0.1);">
                                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                    <div style="width: 2.5rem; height: 2.5rem; background: #fbbf24; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; color: #065f46; font-weight: bold;">1</div>
                                    <h4 style="color: white; font-weight: bold; font-size: 1.1rem;">Hazard Analysis</h4>
                                </div>
                                <p style="color: #a7f3d0; line-height: 1.6; font-size: 0.95rem;">Comprehensive identification and assessment of biological, chemical, and physical hazards in food preparation and service.</p>
                            </div>
                            
                            <div style="background: rgba(255, 255, 255, 0.08); border-radius: 1rem; padding: 2rem; border: 1px solid rgba(255, 255, 255, 0.1);">
                                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                    <div style="width: 2.5rem; height: 2.5rem; background: #fbbf24; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; color: #065f46; font-weight: bold;">2</div>
                                    <h4 style="color: white; font-weight: bold; font-size: 1.1rem;">Critical Control Points</h4>
                                </div>
                                <p style="color: #a7f3d0; line-height: 1.6; font-size: 0.95rem;">Strategic identification of critical points where hazards can be prevented, eliminated, or reduced to acceptable levels.</p>
                            </div>
                            
                            <div style="background: rgba(255, 255, 255, 0.08); border-radius: 1rem; padding: 2rem; border: 1px solid rgba(255, 255, 255, 0.1);">
                                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                    <div style="width: 2.5rem; height: 2.5rem; background: #fbbf24; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; color: #065f46; font-weight: bold;">3</div>
                                    <h4 style="color: white; font-weight: bold; font-size: 1.1rem;">Critical Limits</h4>
                                </div>
                                <p style="color: #a7f3d0; line-height: 1.6; font-size: 0.95rem;">Establishment of measurable criteria that must be met to ensure food safety at each critical control point.</p>
                            </div>
                            
                            <div style="background: rgba(255, 255, 255, 0.08); border-radius: 1rem; padding: 2rem; border: 1px solid rgba(255, 255, 255, 0.1);">
                                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                    <div style="width: 2.5rem; height: 2.5rem; background: #fbbf24; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; color: #065f46; font-weight: bold;">4</div>
                                    <h4 style="color: white; font-weight: bold; font-size: 1.1rem;">Monitoring Procedures</h4>
                                </div>
                                <p style="color: #a7f3d0; line-height: 1.6; font-size: 0.95rem;">Systematic monitoring and documentation of critical control points to ensure continuous compliance and safety.</p>
                            </div>
                            
                            <div style="background: rgba(255, 255, 255, 0.08); border-radius: 1rem; padding: 2rem; border: 1px solid rgba(255, 255, 255, 0.1);">
                                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                    <div style="width: 2.5rem; height: 2.5rem; background: #fbbf24; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; color: #065f46; font-weight: bold;">5</div>
                                    <h4 style="color: white; font-weight: bold; font-size: 1.1rem;">Corrective Actions</h4>
                                </div>
                                <p style="color: #a7f3d0; line-height: 1.6; font-size: 0.95rem;">Predetermined corrective measures when monitoring indicates deviation from established critical limits.</p>
                            </div>
                            
                            <div style="background: rgba(255, 255, 255, 0.08); border-radius: 1rem; padding: 2rem; border: 1px solid rgba(255, 255, 255, 0.1);">
                                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                    <div style="width: 2.5rem; height: 2.5rem; background: #fbbf24; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; color: #065f46; font-weight: bold;">6</div>
                                    <h4 style="color: white; font-weight: bold; font-size: 1.1rem;">Verification</h4>
                                </div>
                                <p style="color: #a7f3d0; line-height: 1.6; font-size: 0.95rem;">Regular verification activities to validate that the HACCP system is working effectively and consistently.</p>
                            </div>
                            
                            <div style="background: rgba(255, 255, 255, 0.08); border-radius: 1rem; padding: 2rem; border: 1px solid rgba(255, 255, 255, 0.1);">
                                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                    <div style="width: 2.5rem; height: 2.5rem; background: #fbbf24; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; color: #065f46; font-weight: bold;">7</div>
                                    <h4 style="color: white; font-weight: bold; font-size: 1.1rem;">Record Keeping</h4>
                                </div>
                                <p style="color: #a7f3d0; line-height: 1.6; font-size: 0.95rem;">Comprehensive documentation and record-keeping demonstrating the HACCP system is followed consistently.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ISO 22000 Benefits -->
                    <div class="responsive-grid-3" style="gap: 2rem;">
                        <div style="text-align: center; background: rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2rem; border: 1px solid rgba(255, 255, 255, 0.2);">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #3b82f6, #1d4ed8); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                <i class="fas fa-microscope" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h4 style="color: white; font-weight: bold; margin-bottom: 0.75rem;">Hazard Prevention</h4>
                            <p style="color: #a7f3d0; font-size: 0.9rem; line-height: 1.5;">Proactive identification and prevention of food safety hazards before they occur</p>
                        </div>
                        
                        <div style="text-align: center; background: rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2rem; border: 1px solid rgba(255, 255, 255, 0.2);">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #10b981, #047857); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                <i class="fas fa-clipboard-check" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h4 style="color: white; font-weight: bold; margin-bottom: 0.75rem;">Regulatory Compliance</h4>
                            <p style="color: #a7f3d0; font-size: 0.9rem; line-height: 1.5;">Full compliance with international food safety regulations and maritime standards</p>
                        </div>
                        
                        <div style="text-align: center; background: rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2rem; border: 1px solid rgba(255, 255, 255, 0.2);">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #f59e0b, #d97706); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                <i class="fas fa-users-cog" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h4 style="color: white; font-weight: bold; margin-bottom: 0.75rem;">Staff Training</h4>
                            <p style="color: #a7f3d0; font-size: 0.9rem; line-height: 1.5;">Comprehensive training programs ensuring all staff understand food safety protocols</p>
                        </div>
                        
                        <div style="text-align: center; background: rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2rem; border: 1px solid rgba(255, 255, 255, 0.2);">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #8b5cf6, #7c3aed); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                <i class="fas fa-chart-line" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h4 style="color: white; font-weight: bold; margin-bottom: 0.75rem;">Continuous Improvement</h4>
                            <p style="color: #a7f3d0; font-size: 0.9rem; line-height: 1.5;">Regular audits and system improvements to maintain the highest food safety standards</p>
                        </div>
                    </div>
                </div>
            </section>

            <?php include 'landing-form.php'; ?>

            <!-- CTA Section -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, #581c87 0%, #7c3aed 50%, #3730a3 100%); color: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; text-align: center;">
                    <h2 style="font-size: 3rem; font-weight: bold; margin-bottom: 2rem;">Elevate Your Crew's Experience</h2>
                    <p style="font-size: 1.25rem; color: #e9d5ff; line-height: 1.6; margin-bottom: 2rem; max-width: 48rem; margin-left: auto; margin-right: auto;">
                        Transform your offshore and onshore environments into havens of comfort and excellence. 
                        Join industry leaders who trust our comprehensive catering and facility management services.
                    </p>
                    
                    <div style="display: flex; gap: 1rem; justify-content: center; margin-bottom: 2rem;">
                        <a href="https://rfq.avsglobalsupply.com" target="_blank" style="text-decoration: none;">
                            <button style="background: #eab308; color: black; font-weight: 600; padding: 1rem 2rem; border-radius: 0.375rem; border: none; cursor: pointer; font-size: 1.1rem;">
                                Request Catering Quote
                            </button>
                        </a>
                        <a href="https://avsglobalsupply.com" target="_blank" style="text-decoration: none;">
                            <button style="background: transparent; color: white; border: 1px solid rgba(255,255,255,0.3); padding: 1rem 2rem; border-radius: 0.375rem; cursor: pointer; font-size: 1.1rem;">
                                Learn More
                            </button>
                        </a>
                    </div>
                    
                    <div class="responsive-grid-3" style="padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.2);">
                        <div style="text-align: center;">
                            <div style="font-size: 1.5rem; font-weight: bold; color: #fbbf24;">Culinary Excellence</div>
                            <div style="color: #e9d5ff;">Premium dining experiences</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 1.5rem; font-weight: bold; color: #fbbf24;">Global Mobilization</div>
                            <div style="color: #e9d5ff;">Rapid worldwide deployment</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 1.5rem; font-weight: bold; color: #fbbf24;">360° Solutions</div>
                            <div style="color: #e9d5ff;">Complete facility management</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const navMenu = document.querySelector('.nav-menu');
            
            if (mobileMenuBtn && navMenu) {
                mobileMenuBtn.addEventListener('click', function() {
                    navMenu.classList.toggle('active');
                    const icon = mobileMenuBtn.querySelector('i');
                    if (navMenu.classList.contains('active')) {
                        icon.className = 'fas fa-times';
                    } else {
                        icon.className = 'fas fa-bars';
                    }
                });

                // Close mobile menu when clicking on a link
                document.querySelectorAll('.nav-button').forEach(link => {
                    link.addEventListener('click', function() {
                        navMenu.classList.remove('active');
                        const icon = mobileMenuBtn.querySelector('i');
                        icon.className = 'fas fa-bars';
                    });
                });

                // Close mobile menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (!navMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                        navMenu.classList.remove('active');
                        const icon = mobileMenuBtn.querySelector('i');
                        icon.className = 'fas fa-bars';
                    }
                });
            }
        });
    </script>
</div>
<!-- Offshore Wrapper Sonu -->

<?php include 'footer.php'; ?>
