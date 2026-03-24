<?php 
$title = "Ship Provisions - AVS Global Supply";
$canonical = "https://www.avsglobalsupply.com/provisions-supply";
$eng_link = "https://www.avsglobalsupply.com/provisions-supply";
$custom_js = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
';
include 'header.php'; 
?>

<!-- Provisions Page Wrapper -->
<div class="provisions-wrapper">
    <style>
        .provisions-wrapper * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .provisions-wrapper h1 {
            color: white;
        }

        .provisions-wrapper {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #ffffff;
        }

        /* Navigation Styles */
        .provisions-wrapper .nav-bar {
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

        .provisions-wrapper .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .provisions-wrapper .nav-menu {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
        }

        .provisions-wrapper .nav-button {
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

        .provisions-wrapper .nav-button:hover {
            background: #f3f4f6;
            color: #1e3a8a;
        }

        .provisions-wrapper .nav-button.active {
            background: #1e3a8a;
            color: white;
        }

        .provisions-wrapper .mobile-menu-btn {
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
        .provisions-wrapper .content {
            min-height: 100vh;
        }

        @media (max-width: 480px) {
            .provisions-wrapper .nav-logo-text {
                font-size: 1rem;
            }
        }

        /* Responsive Utilities */
        .provisions-wrapper .responsive-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .provisions-wrapper .responsive-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .provisions-wrapper .responsive-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .provisions-wrapper .responsive-grid-hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        @media (max-width: 1024px) {
            .provisions-wrapper .responsive-grid-3 {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .provisions-wrapper .responsive-grid-hero {
                grid-template-columns: 1fr;
                gap: 1.5rem;
                text-align: center;
            }
            
            .provisions-wrapper .responsive-grid-2,
            .provisions-wrapper .responsive-grid-3,
            .provisions-wrapper .responsive-grid-4 {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            /* Container adjustments for mobile */
            .provisions-wrapper div[style*="max-width: 1200px"] {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
        }

        @media (max-width: 640px) {
            .provisions-wrapper .responsive-grid-2,
            .provisions-wrapper .responsive-grid-3,
            .provisions-wrapper .responsive-grid-4 {
                gap: 0.75rem;
            }
            
            .provisions-wrapper .responsive-grid-hero {
                gap: 1rem;
            }
        }

        /* Responsive Typography */
        .provisions-wrapper .responsive-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .provisions-wrapper .responsive-subtitle {
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .provisions-wrapper .responsive-text {
            font-size: 1rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .provisions-wrapper .responsive-title {
                font-size: 2rem;
            }
            
            .provisions-wrapper .responsive-subtitle {
                font-size: 1.1rem;
            }
            
            .provisions-wrapper .responsive-text {
                font-size: 0.95rem;
            }
            
            /* Responsive padding */
            .provisions-wrapper .responsive-padding {
                padding: 3rem 1rem !important;
            }
            
            .provisions-wrapper .responsive-section-padding {
                padding: 3rem 0 !important;
            }
        }

        @media (max-width: 480px) {
            .provisions-wrapper .responsive-title {
                font-size: 1.75rem;
            }
            
            .provisions-wrapper .responsive-subtitle {
                font-size: 1rem;
            }
            
            .provisions-wrapper .responsive-padding {
                padding: 2rem 1rem !important;
            }
            
            .provisions-wrapper .responsive-section-padding {
                padding: 2rem 0 !important;
            }
        }

        /* Responsive Form Styles */
        .provisions-wrapper .responsive-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .provisions-wrapper .responsive-form-grid-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1rem;
        }

        @media (max-width: 768px) {
            .provisions-wrapper .responsive-form-grid,
            .provisions-wrapper .responsive-form-grid-3 {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            /* Fix container padding for mobile */
            .provisions-wrapper div[style*="padding: 5rem"] {
                padding: 2rem 1rem !important;
            }
            
            .provisions-wrapper section[style*="padding: 4rem 0"] {
                padding: 2rem 0 !important;
            }
            
            .provisions-wrapper div[style*="max-width: 1200px"][style*="padding"] {
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
            
            /* Responsive button containers */
            div[style*="display: flex"][style*="gap: 1rem"] {
                flex-direction: column !important;
                align-items: center !important;
            }
            
            div[style*="display: flex"][style*="gap: 1rem"] a {
                width: 100% !important;
            }
            
            .provisions-wrapper div[style*="display: flex"][style*="gap: 1rem"] button {
                width: 100% !important;
                max-width: 300px !important;
            }
        

            .provisions-wrapper .nav-menu {
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
            
            .provisions-wrapper .nav-menu.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }
            
            .provisions-wrapper .nav-button {
                padding: 1rem;
                text-align: center;
                border-bottom: 1px solid #f3f4f6;
            }
            
            .provisions-wrapper .mobile-menu-btn {
                display: block;
            }
            
            .provisions-wrapper .nav-container {
                padding: 0 1rem;
            }
            
            .provisions-wrapper .nav-logo-text {
                font-size: 1.2rem;
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
                <a href="/provisions-supply.php" class="nav-button active">Provisions Supply</a>
                <a href="/on-offshore.php" class="nav-button">On/Offshore</a>
                <a href="/technical-stores.php" class="nav-button">Technical Stores</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <!-- Provisions Page Content -->
        <div style="min-height: 100vh; background: linear-gradient(to bottom, #f8fafc, white);">
            <!-- Hero Section -->
            <section style="position: relative; overflow: hidden; background: linear-gradient(135deg, #14532d 0%, #166534 50%, #064e3b 100%); color: white;">
                <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.2);"></div>
                <div style="max-width: 1200px; margin: 0 auto; padding: 5rem 1.5rem; position: relative; z-index: 10;" class="responsive-padding">
                    <div class="responsive-grid-hero">
                        <div>
                            <div style="margin-bottom: 2rem;">
                                <div style="display: inline-block; background: rgba(34, 197, 94, 0.2); color: #bbf7d0; border: 1px solid rgba(34, 197, 94, 0.3); padding: 0.5rem 1rem; border-radius: 0.375rem; margin-bottom: 1rem;">
                                    Maritime Provision Management
                                </div>
                                <h1 style="font-size: 3.5rem; font-weight: bold; line-height: 1.1; margin: 1rem 0;">
                                    Ship Provisions Supply
                                    <span style="display: block; color: #86efac;">& Management</span>
                                </h1>
                                <p style="font-size: 1.25rem; color: #bbf7d0; line-height: 1.6; margin: 1rem 0;">
                                    Reliable and cost-effective solutions that transform routine supply management 
                                    into a strategic asset, ensuring your crew's needs are met with precision and care.
                                </p>
                            </div>
                            
                            <!-- Key Benefits -->
                            <div class="responsive-grid-2" style="margin: 2rem 0;">
                                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 0.75rem; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 2.5rem; font-weight: bold; color: #fbbf24;">MLC 2006</div>
                                    <div style="color: #bbf7d0; font-weight: 500;">Standards Compliant</div>
                                </div>
                                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 0.75rem; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 2.5rem; font-weight: bold; color: #fbbf24;">24/7</div>
                                    <div style="color: #bbf7d0; font-weight: 500;">Global Coverage</div>
                                </div>
                            </div>
                            
                            <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                                <a href="https://rfq.avsglobalsupply.com" target="_blank" style="text-decoration: none;">
                                    <button style="background: #eab308; color: black; font-weight: 600; padding: 0.75rem 2rem; border-radius: 0.375rem; border: none; cursor: pointer; font-size: 1.1rem;">
                                        Get Provision Quote
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
                            <img src="https://images.unsplash.com/photo-1655184128397-5009b5a40ea6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzaGlwJTIwZ2FsbGV5JTIwa2l0Y2hlbiUyMGZvb2QlMjBwcmVwYXJhdGlvbnxlbnwxfHx8fDE3NTk0NzYwMzV8MA&ixlib=rb-4.1.0&q=80&w=1080" 
                                 alt="Ship galley food preparation" 
                                 style="width: 100%; height: 24rem; object-fit: cover; border-radius: 1rem; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Value Proposition -->
            <section style="padding: 4rem 0; background: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Precision Meets Passion</h2>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 48rem; margin: 0 auto; line-height: 1.6;">
                            Our approach transforms routine supply management and catering into a strategic asset, 
                            ensuring operational excellence through advanced digital platforms and meticulous selection.
                        </p>
                    </div>
                    
                    <div class="responsive-grid-3">
                        <div style="background: linear-gradient(135deg, #f0fdf4 0%, white 100%); border-radius: 0.5rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                            <div style="width: 4rem; height: 4rem; background: #dcfce7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-dollar-sign" style="font-size: 2rem; color: #16a34a;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Budget Management</h3>
                            <p style="color: #6b7280; line-height: 1.6;">
                                Precise budgeting costs per man per day with strategic purchasing and cost-effective planning. 
                                Maximize value while maintaining premium quality standards.
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #eff6ff 0%, white 100%); border-radius: 0.5rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                            <div style="width: 4rem; height: 4rem; background: #dbeafe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-users" style="font-size: 2rem; color: #2563eb;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Crew Satisfaction</h3>
                            <p style="color: #6b7280; line-height: 1.6;">
                                Increased morale with delicious, high-quality food catering to multinational dietary preferences. 
                                Happy crew means improved productivity and retention.
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #faf5ff 0%, white 100%); border-radius: 0.5rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                            <div style="width: 4rem; height: 4rem; background: #e9d5ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-shield-alt" style="font-size: 2rem; color: #9333ea;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Safety & Compliance</h3>
                            <p style="color: #6b7280; line-height: 1.6;">
                                Food safety, hygiene, and nutrition fully compliant with MLC 2006 standards. 
                                Comprehensive documentation and certification for peace of mind.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Fresh Provisions Showcase -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, #f0fdf4 0%, #eff6ff 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div class="responsive-grid-hero">
                        <div>
                            <img src="https://images.unsplash.com/photo-1650012048722-c81295ccbe79?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxmcmVzaCUyMGZvb2QlMjB2ZWdldGFibGVzJTIwc2hpcCUyMHN1cHBseXxlbnwxfHx8fDE3NTk0NzYwNDN8MA&ixlib=rb-4.1.0&q=80&w=1080" 
                                 alt="Fresh vegetables and food supply" 
                                 style="width: 100%; height: 20rem; object-fit: cover; border-radius: 1rem; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);" />
                        </div>
                        
                        <div>
                            <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1.5rem;">Premium Fresh Provisions</h2>
                            <p style="font-size: 1.25rem; color: #6b7280; line-height: 1.6; margin-bottom: 2rem;">
                                From the meticulous selection of premium goods to specialized dietary requirements, 
                                every aspect is designed for cost-effectiveness, transparency, and crew satisfaction.
                            </p>
                            
                            <div class="responsive-grid-2" style="gap: 1rem;">
                                <div style="background: white; border-radius: 0.5rem; padding: 1rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                                    <div style="font-size: 1.5rem; font-weight: bold; color: #16a34a;">Fresh</div>
                                    <div style="color: #6b7280; font-size: 0.875rem;">Daily produce & dairy</div>
                                </div>
                                <div style="background: white; border-radius: 0.5rem; padding: 1rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                                    <div style="font-size: 1.5rem; font-weight: bold; color: #2563eb;">Frozen</div>
                                    <div style="color: #6b7280; font-size: 0.875rem;">Meat & seafood varieties</div>
                                </div>
                                <div style="background: white; border-radius: 0.5rem; padding: 1rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                                    <div style="font-size: 1.5rem; font-weight: bold; color: #9333ea;">Dry Goods</div>
                                    <div style="color: #6b7280; font-size: 0.875rem;">Pantry essentials</div>
                                </div>
                                <div style="background: white; border-radius: 0.5rem; padding: 1rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                                    <div style="font-size: 1.5rem; font-weight: bold; color: #ea580c;">Specialty</div>
                                    <div style="color: #6b7280; font-size: 0.875rem;">Cultural cuisines</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Key Features -->
            <section style="padding: 4rem 0; background: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Complete Provision Management</h2>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 32rem; margin: 0 auto;">
                            Advanced solutions backed by experienced professionals and cutting-edge technology
                        </p>
                    </div>
                    
                    <div class="responsive-grid-4">
                        <div style="background: linear-gradient(135deg, #f0fdf4 0%, white 100%); border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #22c55e; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-globe" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">National Dishes Made for Crews Comfort</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                Authentic cuisine from around the world prepared with care to provide crews with familiar, comforting meals from their home countries
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #eff6ff 0%, white 100%); border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #3b82f6; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-chart-bar" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Advanced Dashboard</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                Real-time reporting, forecasting, budget management, and inventory control platform
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #faf5ff 0%, white 100%); border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #8b5cf6; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-utensils" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Dietary Preferences</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                Comprehensive menu planning for multinational crews with diverse cultural preferences
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #fff7ed 0%, white 100%); border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #f97316; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-clock" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Waste Reduction</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                Strategic planning and portion control to minimize waste and reduce operational costs
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seafarers Wellbeing Section -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div class="responsive-grid-hero">
                        <div>
                            <div style="display: inline-block; background: rgba(59, 130, 246, 0.2); color: #1e40af; border: 1px solid rgba(59, 130, 246, 0.3); padding: 0.5rem 1rem; border-radius: 0.375rem; margin-bottom: 1rem; font-weight: 500;">
                                Crew Welfare & Support
                            </div>
                            <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1.5rem; line-height: 1.2;">
                                Seafarers Wellbeing
                                <span style="display: block; color: #3b82f6; font-size: 2rem; margin-top: 0.5rem;">Psychological Support Services</span>
                            </h2>
                            <p style="font-size: 1.125rem; color: #6b7280; line-height: 1.6; margin-bottom: 2rem;">
                                We understand that life at sea can be challenging. Our dedicated wellbeing program provides 
                                comprehensive psychological support to ensure your crew's mental health and overall wellness, 
                                creating a positive working environment that enhances both morale and operational efficiency.
                            </p>
                            
                            <div style="margin-bottom: 2rem;">
                                <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Support Services Include:</h3>
                                <div style="display: grid; gap: 0.75rem;">
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #3b82f6; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;">24/7 confidential counseling services</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #3b82f6; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;">Mental health awareness training programs</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #3b82f6; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;">Stress management and resilience workshops</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #3b82f6; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;">Family communication support services</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #3b82f6; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;">Crisis intervention and emergency psychological support</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div style="position: relative;">
                            <div style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); border-radius: 1rem; padding: 2rem; position: relative;">
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 2rem;">
                                    <div style="background: white; border-radius: 0.75rem; padding: 1.5rem; text-align: center; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                                        <div style="width: 3rem; height: 3rem; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                            <i class="fas fa-user-friends" style="color: white; font-size: 1.25rem;"></i>
                                        </div>
                                        <div style="font-size: 1.5rem; font-weight: bold; color: #111827;">24/7</div>
                                        <div style="color: #6b7280; font-size: 0.875rem;">Support Available</div>
                                    </div>
                                    <div style="background: white; border-radius: 0.75rem; padding: 1.5rem; text-align: center; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                                        <div style="width: 3rem; height: 3rem; background: #8b5cf6; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                            <i class="fas fa-shield-alt" style="color: white; font-size: 1.25rem;"></i>
                                        </div>
                                        <div style="font-size: 1.5rem; font-weight: bold; color: #111827;">100%</div>
                                        <div style="color: #6b7280; font-size: 0.875rem;">Confidential</div>
                                    </div>
                                </div>
                                
                                <div style="background: rgba(255, 255, 255, 0.8); border-radius: 0.75rem; padding: 1.5rem; text-align: center;">
                                    <i class="fas fa-brain" style="font-size: 3rem; color: #3b82f6; margin-bottom: 1rem;"></i>
                                    <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Mental Health First Aid</h4>
                                    <p style="color: #6b7280; font-size: 0.875rem; line-height: 1.4;">
                                        Professional psychological support services designed specifically for the unique challenges of maritime life
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Learning Management System (LMS) Section -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, #fef3e2 0%, #fef7ed 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div class="responsive-grid-hero">
                        <div style="position: relative;">
                            <div style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%); border-radius: 1rem; padding: 2rem; position: relative;">
                                <div class="responsive-grid-2" style="margin-bottom: 2rem;">
                                    <div style="background: rgba(255, 255, 255, 0.9); border-radius: 0.75rem; padding: 1.5rem; text-align: center; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                                        <div style="width: 3rem; height: 3rem; background: #dc2626; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                            <i class="fas fa-utensils" style="color: white; font-size: 1.25rem;"></i>
                                        </div>
                                        <div style="font-size: 1.5rem; font-weight: bold; color: #111827;">1000+</div>
                                        <div style="color: #6b7280; font-size: 0.875rem;">Recipes Available</div>
                                    </div>
                                    <div style="background: rgba(255, 255, 255, 0.9); border-radius: 0.75rem; padding: 1.5rem; text-align: center; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                                        <div style="width: 3rem; height: 3rem; background: #7c3aed; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                            <i class="fas fa-graduation-cap" style="color: white; font-size: 1.25rem;"></i>
                                        </div>
                                        <div style="font-size: 1.5rem; font-weight: bold; color: #111827;">Skills</div>
                                        <div style="color: #6b7280; font-size: 0.875rem;">Development Courses</div>
                                    </div>
                                </div>
                                
                                <div style="background: rgba(255, 255, 255, 0.9); border-radius: 0.75rem; padding: 1.5rem; text-align: center;">
                                    <i class="fas fa-lightbulb" style="font-size: 3rem; color: #f59e0b; margin-bottom: 1rem;"></i>
                                    <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Tips & Tricks</h4>
                                    <p style="color: #6b7280; font-size: 0.875rem; line-height: 1.4;">
                                        Professional culinary insights and maritime galley management techniques from industry experts
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div style="display: inline-block; background: rgba(251, 191, 36, 0.2); color: #f59e0b; border: 1px solid rgba(251, 191, 36, 0.3); padding: 0.5rem 1rem; border-radius: 0.375rem; margin-bottom: 1rem; font-weight: 500;">
                                Culinary Education Platform
                            </div>
                            <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1.5rem; line-height: 1.2;">
                                Learning Management System
                                <span style="display: block; color: #f59e0b; font-size: 2rem; margin-top: 0.5rem;">Professional Culinary Training</span>
                            </h2>
                            <p style="font-size: 1.125rem; color: #6b7280; line-height: 1.6; margin-bottom: 2rem;">
                                Enhance your galley operations with our comprehensive Learning Management System. 
                                Access thousands of recipes, develop culinary skills through structured courses, 
                                and learn professional tips and tricks from maritime culinary experts.
                            </p>
                            
                            <div style="margin-bottom: 2rem;">
                                <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Platform Features:</h3>
                                <div style="display: grid; gap: 0.75rem;">
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #f59e0b; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;"><strong>1000+ Recipes</strong> - Extensive collection of international dishes and maritime-specific meals</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #f59e0b; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;"><strong>Skill Development Courses</strong> - Structured learning paths for cooks and stewards</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #f59e0b; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;"><strong>Professional Tips & Tricks</strong> - Expert insights for galley management and food preparation</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #f59e0b; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;"><strong>Interactive Learning</strong> - Hands-on training modules and progress tracking</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #f59e0b; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;"><strong>Certification Programs</strong> - Industry-recognized culinary certifications for maritime professionals</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Aquarex Environmental Solution Section -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, #e0f7fa 0%, #e3f2fd 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div class="responsive-grid-hero">
                        <div style="position: relative;">
                            <div style="background: linear-gradient(135deg, #00acc1 0%, #0277bd 100%); border-radius: 1rem; padding: 2rem; position: relative;">
                                <div class="responsive-grid-2" style="margin-bottom: 2rem;">
                                    <div style="background: rgba(255, 255, 255, 0.9); border-radius: 0.75rem; padding: 1.5rem; text-align: center; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                                        <div style="width: 3rem; height: 3rem; background: #d32f2f; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                            <i class="fas fa-ban" style="color: white; font-size: 1.25rem;"></i>
                                        </div>
                                        <div style="font-size: 1.5rem; font-weight: bold; color: #111827;">95%</div>
                                        <div style="color: #6b7280; font-size: 0.875rem;">Plastic Reduction</div>
                                    </div>
                                    <div style="background: rgba(255, 255, 255, 0.9); border-radius: 0.75rem; padding: 1.5rem; text-align: center; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                                        <div style="width: 3rem; height: 3rem; background: #388e3c; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                            <i class="fas fa-leaf" style="color: white; font-size: 1.25rem;"></i>
                                        </div>
                                        <div style="font-size: 1.5rem; font-weight: bold; color: #111827;">80%</div>
                                        <div style="color: #6b7280; font-size: 0.875rem;">CO2 Reduction</div>
                                    </div>
                                </div>
                                
                                <div style="background: rgba(255, 255, 255, 0.9); border-radius: 0.75rem; padding: 1.5rem; text-align: center;">
                                    <i class="fas fa-water" style="font-size: 3rem; color: #00acc1; margin-bottom: 1rem;"></i>
                                    <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Pure Water Technology</h4>
                                    <p style="color: #6b7280; font-size: 0.875rem; line-height: 1.4;">
                                        Advanced filtration and purification system delivering premium quality drinking water while protecting the environment
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div style="display: inline-block; background: rgba(0, 172, 193, 0.2); color: #00acc1; border: 1px solid rgba(0, 172, 193, 0.3); padding: 0.5rem 1rem; border-radius: 0.375rem; margin-bottom: 1rem; font-weight: 500;">
                                Environmental Innovation
                            </div>
                            <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1.5rem; line-height: 1.2;">
                                Aquarex Water Solutions
                                <span style="display: block; color: #00acc1; font-size: 2rem; margin-top: 0.5rem;">Sustainable Hydration Technology</span>
                            </h2>
                            <p style="font-size: 1.125rem; color: #6b7280; line-height: 1.6; margin-bottom: 2rem;">
                                Transform your vessel's water consumption with Aquarex advanced purification technology. 
                                Dramatically reduce plastic waste, minimize CO2 footprint, and contribute to ocean conservation 
                                while providing premium quality drinking water for your crew.
                            </p>
                            
                            <div style="margin-bottom: 2rem;">
                                <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Environmental Benefits:</h3>
                                <div style="display: grid; gap: 0.75rem;">
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #d32f2f; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;"><strong>Plastic Elimination</strong> - Eliminate thousands of plastic bottles per voyage, preventing ocean pollution</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #388e3c; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;"><strong>Carbon Footprint Reduction</strong> - Significantly lower CO2 emissions by eliminating bottled water logistics</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #00acc1; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;"><strong>Ocean Protection</strong> - Contribute to cleaner oceans by reducing maritime plastic pollution</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #1976d2; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;"><strong>Water Conservation</strong> - Efficient water use with minimal waste and maximum quality output</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                                        <div style="width: 0.5rem; height: 0.5rem; background: #7b1fa2; border-radius: 50%; flex-shrink: 0;"></div>
                                        <span style="color: #6b7280;"><strong>Sustainable Operations</strong> - Support maritime industry's transition to environmentally responsible practices</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Environmental Impact Statistics -->
                            <div style="background: rgba(255, 255, 255, 0.8); border-radius: 0.75rem; padding: 1.5rem; margin-top: 1.5rem;">
                                <h4 style="font-size: 1rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Environmental Impact Per Vessel Per Year:</h4>
                                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1rem;">
                                    <div style="text-align: center;">
                                        <div style="font-size: 1.25rem; font-weight: bold; color: #d32f2f;">-50,000</div>
                                        <div style="font-size: 0.75rem; color: #6b7280;">Plastic bottles avoided</div>
                                    </div>
                                    <div style="text-align: center;">
                                        <div style="font-size: 1.25rem; font-weight: bold; color: #388e3c;">-25 tons</div>
                                        <div style="font-size: 0.75rem; color: #6b7280;">CO2 emissions reduced</div>
                                    </div>
                                    <div style="text-align: center;">
                                        <div style="font-size: 1.25rem; font-weight: bold; color: #00acc1;">99.9%</div>
                                        <div style="font-size: 0.75rem; color: #6b7280;">Purification efficiency</div>
                                    </div>
                                    <div style="text-align: center;">
                                        <div style="font-size: 1.25rem; font-weight: bold; color: #1976d2;">Zero</div>
                                        <div style="font-size: 0.75rem; color: #6b7280;">Plastic waste</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include 'landing-form.php'; ?>

            <!-- CTA Section -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, #14532d 0%, #166534 50%, #064e3b 100%); color: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; text-align: center;">
                    <h2 style="font-size: 3rem; font-weight: bold; margin-bottom: 2rem;">Transform Your Crew's Dining Experience</h2>
                    <p style="font-size: 1.25rem; color: #bbf7d0; line-height: 1.6; margin-bottom: 2rem; max-width: 48rem; margin-left: auto; margin-right: auto;">
                        Join leading maritime companies that trust our provision management expertise. 
                        Experience the difference that strategic supply management makes for crew satisfaction and operational success.
                    </p>
                    
                    <div style="display: flex; gap: 1rem; justify-content: center; margin-bottom: 2rem;">
                        <a href="https://rfq.avsglobalsupply.com" target="_blank" style="text-decoration: none;">
                            <button style="background: #eab308; color: black; font-weight: 600; padding: 1rem 2rem; border-radius: 0.375rem; border: none; cursor: pointer; font-size: 1.1rem;">
                                Request Provision Quote
                            </button>
                        </a>
                        <a href="#contact-form" style="text-decoration: none;">
                            <button style="background: transparent; color: white; border: 1px solid rgba(255,255,255,0.3); padding: 1rem 2rem; border-radius: 0.375rem; cursor: pointer; font-size: 1.1rem;">
                                Contact Us
                            </button>
                        </a>
                    </div>
                    
                    <div class="responsive-grid-3" style="padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.2);">
                        <div style="text-align: center;">
                            <div style="font-size: 1.5rem; font-weight: bold; color: #fbbf24;">MLC 2006</div>
                            <div style="color: #bbf7d0;">Fully compliant standards</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 1.5rem; font-weight: bold; color: #fbbf24;">Global Reach</div>
                            <div style="color: #bbf7d0;">Worldwide port coverage</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 1.5rem; font-weight: bold; color: #fbbf24;">Staff Training</div>
                            <div style="color: #bbf7d0;">LMS-certified professionals</div>
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
<!-- Provisions Wrapper Sonu -->

<?php include 'footer.php'; ?>