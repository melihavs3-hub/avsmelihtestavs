<?php 
$title = "Technical Stores - AVS Global Supply";
$canonical = "https://www.avsglobalsupply.com/technical-stores";
$eng_link = "https://www.avsglobalsupply.com/technical-stores";
$custom_js = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
';
include 'header.php'; 
?>

<!-- Technical Stores Wrapper -->
<div class="technical-wrapper">
    <style>
        .technical-wrapper * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .technical-wrapper h1 {
            color: white;
        }

        .technical-wrapper {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #ffffff;
        }

        /* Navigation Styles */
        .technical-wrapper .nav-bar {
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

        .technical-wrapper .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .technical-wrapper .nav-menu {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
        }

        .technical-wrapper .nav-button {
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

        .technical-wrapper .nav-button:hover {
            background: #f3f4f6;
            color: #1e3a8a;
        }

        .technical-wrapper .nav-button.active {
            background: #1e3a8a;
            color: white;
        }

        .technical-wrapper .mobile-menu-btn {
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
        .technical-wrapper .content {
            min-height: 100vh;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .technical-wrapper .nav-menu {
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
            
            .technical-wrapper .nav-button {
                padding: 1rem;
                text-align: center;
                border-bottom: 1px solid #f3f4f6;
            }
            
            .technical-wrapper .mobile-menu-btn {
                display: block;
            }
            
            .technical-wrapper .nav-container {
                padding: 0 1rem;
            }
            
            .technical-wrapper .nav-logo-text {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .technical-wrapper .nav-logo-text {
                font-size: 1rem;
            }
        }

        /* Responsive Utilities */
        .technical-wrapper .responsive-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .technical-wrapper .responsive-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .technical-wrapper .responsive-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .technical-wrapper .responsive-grid-hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .technical-wrapper .responsive-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .technical-wrapper .responsive-form-grid-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1rem;
        }

        @media (max-width: 1024px) {
            .technical-wrapper .responsive-grid-3 {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
            
            .technical-wrapper .responsive-grid-4 {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .technical-wrapper .responsive-grid-hero {
                grid-template-columns: 1fr;
                gap: 1.5rem;
                text-align: center;
            }
            
            .technical-wrapper .responsive-grid-2 {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .technical-wrapper .responsive-grid-3 {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .technical-wrapper .responsive-grid-4 {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .technical-wrapper .responsive-form-grid {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }
            
            .technical-wrapper .responsive-form-grid-3 {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }
            
            /* Container adjustments for mobile */
            div[style*="max-width: 1200px"] {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
        }

        @media (max-width: 640px) {
            .technical-wrapper .responsive-grid-3 {
                gap: 1rem;
            }
        }

        /* Responsive Typography */
        .technical-wrapper .responsive-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .technical-wrapper .responsive-subtitle {
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .technical-wrapper .responsive-text {
            font-size: 1rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .technical-wrapper .responsive-title {
                font-size: 2rem;
            }
            
            .technical-wrapper .responsive-subtitle {
                font-size: 1.1rem;
            }
            
            .technical-wrapper .responsive-text {
                font-size: 0.95rem;
            }
            
            /* Responsive padding */
            .technical-wrapper .responsive-padding {
                padding: 3rem 1rem !important;
            }
            
            .technical-wrapper .responsive-section-padding {
                padding: 3rem 0 !important;
            }
        }

        @media (max-width: 480px) {
            .technical-wrapper .responsive-title {
                font-size: 1.75rem;
            }
            
            .technical-wrapper .responsive-subtitle {
                font-size: 1rem;
            }
            
            .technical-wrapper .responsive-padding {
                padding: 2rem 1rem !important;
            }
            
            .technical-wrapper .responsive-section-padding {
                padding: 2rem 0 !important;
            }
        }

        /* Responsive Form Styles */
        .technical-wrapper .responsive-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .technical-wrapper .responsive-form-grid-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1rem;
        }

        @media (max-width: 768px) {
            .responsive-form-grid,
            .technical-wrapper .responsive-form-grid-3 {
                grid-template-columns: 1fr;
                gap: 1rem;
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
                <a href="/on-offshore.php" class="nav-button">On/Offshore</a>
                <a href="/technical-stores.php" class="nav-button active">Technical Stores</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <!-- Technical Page Content -->
        <div style="min-height: 100vh; background: linear-gradient(to bottom, #f8fafc, white);">
            <!-- Hero Section -->
            <section style="position: relative; overflow: hidden; background: linear-gradient(135deg, #0f172a 0%, #374151 50%, #1e3a8a 100%); color: white;">
                <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.2);"></div>
                <div style="max-width: 1200px; margin: 0 auto; padding: 5rem 1.5rem; position: relative; z-index: 10;" class="responsive-padding">
                    <div class="responsive-grid-hero">
                        <div>
                            <div style="margin-bottom: 2rem;">
                                <div style="display: inline-block; background: rgba(59, 130, 246, 0.2); color: #bfdbfe; border: 1px solid rgba(59, 130, 246, 0.3); padding: 0.5rem 1rem; border-radius: 0.375rem; margin-bottom: 1rem;">
                                    Marine Technical Solutions
                                </div>
                                <h1 class="responsive-title" style="font-size: 3.5rem; font-weight: bold; line-height: 1.1; margin: 1rem 0;">
                                    Technical Stores
                                    <span style="display: block; color: #93c5fd;">& Marine Equipment</span>
                                </h1>
                                <p class="responsive-text" style="font-size: 1.25rem; color: #bfdbfe; line-height: 1.6; margin: 1rem 0;">
                                    Comprehensive technical supplies from trusted suppliers worldwide. Quality assured 
                                    equipment with complete documentation and compliance certificates for maritime operations.
                                </p>
                            </div>
                            
                            <!-- Key Benefits -->
                            <div class="responsive-grid-2" style="margin: 2rem 0;">
                                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 0.75rem; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 2.5rem; font-weight: bold; color: #fbbf24;">Certified</div>
                                    <div style="color: #bfdbfe; font-weight: 500;">Quality Suppliers</div>
                                </div>
                                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 0.75rem; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 2.5rem; font-weight: bold; color: #fbbf24;">Global</div>
                                    <div style="color: #bfdbfe; font-weight: 500;">Procurement Network</div>
                                </div>
                            </div>
                            
                            <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                                <a href="https://rfq.avsglobalsupply.com" target="_blank" style="text-decoration: none;">
                                    <button style="background: #eab308; color: black; font-weight: 600; padding: 0.75rem 2rem; border-radius: 0.375rem; border: none; cursor: pointer; font-size: 1.1rem;">
                                        Get Technical Quote
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
                            <img src="assets/images/manufacturing-factory-with-industrial-machinery-an-2025-03-16-03-21-25-utc.jpg" 
                                 alt="Marine technical equipment and tools" 
                                 style="width: 100%; height: 24rem; object-fit: cover; border-radius: 1rem; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Value Proposition -->
            <section style="padding: 4rem 0; background: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Excellence in Marine Technical Supply</h2>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 48rem; margin: 0 auto; line-height: 1.6;">
                            From routine maintenance to critical repairs, our comprehensive technical stores ensure 
                            your operations continue smoothly with quality-assured equipment and expert support.
                        </p>
                    </div>
                    
                    <div class="responsive-grid-2" style="margin-bottom: 4rem;">
                        <div style="background: linear-gradient(135deg, #f0fdf4 0%, white 100%); border-radius: 0.5rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                            <div style="width: 4rem; height: 4rem; background: #dcfce7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-shield-alt" style="font-size: 2rem; color: #16a34a;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Safety Equipment</h3>
                            <p style="color: #6b7280; line-height: 1.6;">
                                Life-saving appliances, fire fighting systems, personal protective equipment, and safety tools. 
                                SOLAS compliant products with valid certificates and inspection documentation.
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #faf5ff 0%, white 100%); border-radius: 0.5rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                            <div style="width: 4rem; height: 4rem; background: #e9d5ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-tools" style="font-size: 2rem; color: #9333ea;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Marine Tools</h3>
                            <p style="color: #6b7280; line-height: 1.6;">
                                Professional grade tools, workshop equipment, and specialized marine hardware. 
                                Quality brands with warranties and technical support for optimal performance.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Specialized Stores Section -->
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 class="responsive-title" style="color: #111827;">Our Specialized Stores</h2>
                        <p class="responsive-text" style="color: #6b7280; max-width: 48rem; margin: 0 auto;">
                            Comprehensive inventory across multiple specialized departments to meet all maritime operational requirements
                        </p>
                    </div>
                    
                    <div class="responsive-grid-3">
                        <!-- Engine Stores -->
                        <div style="background: linear-gradient(135deg, #eff6ff 0%, white 100%); border-radius: 0.75rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); border: 1px solid #e5e7eb;">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #3b82f6, #1e40af); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-cogs" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Engine Stores</h3>
                            <p style="color: #6b7280; line-height: 1.6; font-size: 0.9rem;">
                                Filters, gaskets, pumps, cooling systems, fuel injection components, and engine room consumables
                            </p>
                        </div>
                        
                        <!-- Cabin Stores -->
                        <div style="background: linear-gradient(135deg, #f0fdf4 0%, white 100%); border-radius: 0.75rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); border: 1px solid #e5e7eb;">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #10b981, #047857); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-bed" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Cabin Stores</h3>
                            <p style="color: #6b7280; line-height: 1.6; font-size: 0.9rem;">
                                Bedding, linens, furniture, lighting, air conditioning components, and crew comfort items
                            </p>
                        </div>
                        
                        <!-- Deck Stores -->
                        <div style="background: linear-gradient(135deg, #fff7ed 0%, white 100%); border-radius: 0.75rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); border: 1px solid #e5e7eb;">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #f97316, #ea580c); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-anchor" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Deck Stores</h3>
                            <p style="color: #6b7280; line-height: 1.6; font-size: 0.9rem;">
                                Ropes, chains, winches, deck equipment, mooring gear, and cargo handling accessories
                            </p>
                        </div>
                        
                        <!-- Electrical Stores -->
                        <div style="background: linear-gradient(135deg, #fef3c7 0%, white 100%); border-radius: 0.75rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); border: 1px solid #e5e7eb;">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #eab308, #ca8a04); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-bolt" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Electrical Stores</h3>
                            <p style="color: #6b7280; line-height: 1.6; font-size: 0.9rem;">
                                Cables, switches, panels, lighting systems, navigation equipment, and electrical components
                            </p>
                        </div>
                        
                        <!-- Stationery & Printing Stores -->
                        <div style="background: linear-gradient(135deg, #faf5ff 0%, white 100%); border-radius: 0.75rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); border: 1px solid #e5e7eb;">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #8b5cf6, #7c3aed); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-print" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Stationery & Printing</h3>
                            <p style="color: #6b7280; line-height: 1.6; font-size: 0.9rem;">
                                Office supplies, printing materials, charts, logbooks, and administrative essentials
                            </p>
                        </div>
                        
                        <!-- Nautical Stores -->
                        <div style="background: linear-gradient(135deg, #ecfdf5 0%, white 100%); border-radius: 0.75rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); border: 1px solid #e5e7eb;">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #059669, #047857); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-compass" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Nautical Stores</h3>
                            <p style="color: #6b7280; line-height: 1.6; font-size: 0.9rem;">
                                Navigation instruments, charts, compasses, binoculars, and bridge equipment
                            </p>
                        </div>
                        
                        <!-- Safety Stores -->
                        <div style="background: linear-gradient(135deg, #fef2f2 0%, white 100%); border-radius: 0.75rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); border: 1px solid #e5e7eb;">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #dc2626, #b91c1c); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-hard-hat" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Safety Stores</h3>
                            <p style="color: #6b7280; line-height: 1.6; font-size: 0.9rem;">
                                Personal protective equipment, life jackets, fire extinguishers, and emergency gear
                            </p>
                        </div>
                        
                        <!-- Medical Stores -->
                        <div style="background: linear-gradient(135deg, #f0f9ff 0%, white 100%); border-radius: 0.75rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); border: 1px solid #e5e7eb;">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #0ea5e9, #0284c7); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-heartbeat" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Medical Stores</h3>
                            <p style="color: #6b7280; line-height: 1.6; font-size: 0.9rem;">
                                Medicines, first aid supplies, medical equipment, and health monitoring devices
                            </p>
                        </div>
                        
                        <!-- Valves & Ball Bearings -->
                        <div style="background: linear-gradient(135deg, #f5f3ff 0%, white 100%); border-radius: 0.75rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); border: 1px solid #e5e7eb;">
                            <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #6366f1, #4f46e5); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-cog" style="font-size: 1.5rem; color: white;"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Valves & Ball Bearings</h3>
                            <p style="color: #6b7280; line-height: 1.6; font-size: 0.9rem;">
                                Industrial valves, ball bearings, seals, gaskets, and precision mechanical components
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Comprehensive Catalog -->
            <section class="responsive-section-padding" style="padding: 4rem 0; background: linear-gradient(135deg, #f9fafb 0%, #eff6ff 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div class="responsive-grid-hero">
                        <div>
                            <h2 class="responsive-title" style="color: #111827;">Comprehensive Technical Catalog</h2>
                            <p class="responsive-text" style="color: #6b7280; margin-bottom: 2rem;">
                                Access to thousands of technical items through our global procurement network. 
                                From standard consumables to specialized marine equipment, we source what you need, when you need it.
                            </p>
                            
                            <div class="responsive-grid-2" style="gap: 1rem;">
                                <div style="background: white; border-radius: 0.5rem; padding: 1rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                                    <div style="font-size: 1.5rem; font-weight: bold; color: #2563eb;">Deck Equipment</div>
                                    <div style="color: #6b7280; font-size: 0.875rem;">Winches, cranes, rigging</div>
                                </div>
                                <div style="background: white; border-radius: 0.5rem; padding: 1rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                                    <div style="font-size: 1.5rem; font-weight: bold; color: #16a34a;">Navigation</div>
                                    <div style="color: #6b7280; font-size: 0.875rem;">Electronics, charts, instruments</div>
                                </div>
                                <div style="background: white; border-radius: 0.5rem; padding: 1rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                                    <div style="font-size: 1.5rem; font-weight: bold; color: #9333ea;">Electrical</div>
                                    <div style="color: #6b7280; font-size: 0.875rem;">Cables, lighting, control systems</div>
                                </div>
                                <div style="background: white; border-radius: 0.5rem; padding: 1rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                                    <div style="font-size: 1.5rem; font-weight: bold; color: #ea580c;">HVAC</div>
                                    <div style="color: #6b7280; font-size: 0.875rem;">Air conditioning, ventilation</div>
                                </div>
                            </div>
                        </div>
                        
                        <div style="position: relative;">
                            <img src="assets/images/engine-room-of-container-ship-goseong-gun-south-2024-10-21-22-47-16-utc.jpg"
                                 style="width: 100%; height: 20rem; object-fit: cover; border-radius: 1rem; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Key Features -->
            <section style="padding: 4rem 0; background: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Technical Supply Excellence</h2>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 32rem; margin: 0 auto;">
                            Trusted by maritime professionals worldwide for reliable technical supply solutions
                        </p>
                    </div>
                    
                    <div class="responsive-grid-4" style="gap: 1.5rem;">
                        <div style="background: linear-gradient(135deg, #eff6ff 0%, white 100%); border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #3b82f6; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-certificate" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Quality Assurance</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                All products sourced from certified suppliers with full documentation and compliance certificates
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #f0fdf4 0%, white 100%); border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #22c55e; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-shipping-fast" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Fast Delivery</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                Emergency deliveries and planned supplies to any port worldwide with tracking and updates
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #faf5ff 0%, white 100%); border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #8b5cf6; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-search" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Sourcing Expertise</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                Specialized team to source hard-to-find equipment and supplies from global supplier network
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #fff7ed 0%, white 100%); border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #f97316; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-phone" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Technical Support</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                Expert technical advice and after-sales support for all supplied equipment and stores
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <?php include 'landing-form.php'; ?>

            <!-- CTA Section -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, #0f172a 0%, #374151 50%, #1e3a8a 100%); color: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; text-align: center;">
                    <h2 style="font-size: 3rem; font-weight: bold; margin-bottom: 2rem;">Reliable Technical Supply Solutions</h2>
                    <p style="font-size: 1.25rem; color: #bfdbfe; line-height: 1.6; margin-bottom: 2rem; max-width: 48rem; margin-left: auto; margin-right: auto;">
                        Trust our technical expertise and global procurement network for all your marine equipment needs. 
                        Quality products, competitive pricing, and reliable delivery worldwide.
                    </p>
                    
                    <div style="display: flex; gap: 1rem; justify-content: center; margin-bottom: 2rem;">
                        <a href="https://rfq.avsglobalsupply.com" target="_blank" style="text-decoration: none;">
                            <button style="background: #eab308; color: black; font-weight: 600; padding: 1rem 2rem; border-radius: 0.375rem; border: none; cursor: pointer; font-size: 1.1rem;">
                                Request Technical Quote
                            </button>
                        </a>
                        <a href="https://avsglobalsupply.com" target="_blank" style="text-decoration: none;">
                            <button style="background: transparent; color: white; border: 1px solid rgba(255,255,255,0.3); padding: 1rem 2rem; border-radius: 0.375rem; cursor: pointer; font-size: 1.1rem;">
                                Learn More
                            </button>
                        </a>
                    </div>
                    
                    <div class="responsive-grid-3" style="gap: 2rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.2);">
                        <div style="text-align: center;">
                            <div style="font-size: 1.5rem; font-weight: bold; color: #fbbf24;">Quality Assured</div>
                            <div style="color: #bfdbfe;">Certified suppliers only</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 1.5rem; font-weight: bold; color: #fbbf24;">Global Network</div>
                            <div style="color: #bfdbfe;">Worldwide procurement</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 1.5rem; font-weight: bold; color: #fbbf24;">Expert Support</div>
                            <div style="color: #bfdbfe;">Technical assistance included</div>
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
<!-- Technical Wrapper Sonu -->

<?php include 'footer.php'; ?>