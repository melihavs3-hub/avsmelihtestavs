<?php 
$title = "Global Ship Supply - AVS Global Supply";
$canonical = "https://www.avsglobalsupply.com/global-ship-supply";
$eng_link = "https://www.avsglobalsupply.com/global-ship-supply";
$custom_js = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
';
include 'header.php'; 
?>

<!-- Global Ship Supply Wrapper -->
<div class="global-supply-wrapper">
    <style>
        .global-supply-wrapper * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .global-supply-wrapper h1 {
            color: white;
        }

        .global-supply-wrapper {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #1f2937;
            background: #f8fafc;
        }

        /* Navigation Styles */
        .global-supply-wrapper .nav-bar {
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

        .global-supply-wrapper .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .global-supply-wrapper .nav-menu {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
        }

        .global-supply-wrapper .nav-button {
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

        .global-supply-wrapper .nav-button:hover {
            background: #f3f4f6;
            color: #1e3a8a;
        }

        .global-supply-wrapper .nav-button.active {
            background: #1e3a8a;
            color: white;
        }

        .global-supply-wrapper .mobile-menu-btn {
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
        .global-supply-wrapper .content {
            min-height: 100vh;
        }

        /* Content Styles */
        .global-supply-wrapper .content {
            min-height: 100vh;
        }
.global-supply-wrapper h2 {
            color: whitesmoke;
        }
        /* Responsive Utilities */
        .global-supply-wrapper .responsive-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .global-supply-wrapper .responsive-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .global-supply-wrapper .responsive-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .global-supply-wrapper .responsive-grid-hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        @media (max-width: 1024px) {
            .global-supply-wrapper .responsive-grid-3 {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .global-supply-wrapper .responsive-grid-hero {
                grid-template-columns: 1fr;
                gap: 1.5rem;
                text-align: center;
            }
            
            .global-supply-wrapper .responsive-grid-2,
            .global-supply-wrapper .responsive-grid-3,
            .global-supply-wrapper .responsive-grid-4 {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .global-supply-wrapper .nav-menu {
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
            
            .global-supply-wrapper .nav-menu.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }
            
            .global-supply-wrapper .nav-button {
                padding: 1rem;
                text-align: center;
                border-bottom: 1px solid #f3f4f6;
            }
            
            .global-supply-wrapper .mobile-menu-btn {
                display: block;
            }
        }

        /* Responsive Form Styles */
        .global-supply-wrapper .responsive-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .global-supply-wrapper .responsive-form-grid-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1rem;
        }

        @media (max-width: 768px) {
            .global-supply-wrapper .responsive-form-grid,
            .global-supply-wrapper .responsive-form-grid-3 {
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
                <a href="/global-ship-supply.php" class="nav-button active">Global Supply</a>
                <a href="/provisions-supply.php" class="nav-button">Provisions Supply</a>
                <a href="/on-offshore.php" class="nav-button">On/Offshore</a>
                <a href="/technical-stores.php" class="nav-button">Technical Stores</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <!-- Home Page Content -->
        <div style="min-height: 100vh; background: linear-gradient(to bottom, #f8fafc, white);">
            <!-- Hero Section -->
            <section style="position: relative; overflow: hidden; background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 50%, #0f172a 100%); color: white; padding-top: 6rem;">
                <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.2);"></div>
                <div style="max-width: 1200px; margin: 0 auto; padding: 1rem 1.5rem 1.5rem; position: relative; z-index: 10;">
                    <div class="responsive-grid-hero">
                        <div>
                            <div style="margin-bottom: 2rem;">
                                <div style="display: inline-block; background: rgba(59, 130, 246, 0.2); color: #bfdbfe; border: 1px solid rgba(59, 130, 246, 0.3); padding: 0.5rem 1rem; border-radius: 0.375rem; margin-bottom: 1rem;">
                                    Global Maritime Solutions
                                </div>
                                <h1 style="font-size: 3.5rem; font-weight: bold; line-height: 1.1; margin: 1rem 0;">
                                    Global Supply Services
                                    <span style="display: block; color: #93c5fd;">Worldwide Excellence</span>
                                </h1>
                                <p style="font-size: 1.25rem; color: #bfdbfe; line-height: 1.6; margin: 1rem 0;">
                                    Your single point of contact for comprehensive maritime supplies across the globe. 
                                    Serving vessels and offshore platforms with unmatched reliability and precision.
                                </p>
                            </div>
                            
                            <!-- Key Statistics -->
                            <div class="responsive-grid-2" style="margin: 2rem 0;">
                                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 0.75rem; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 2.5rem; font-weight: bold; color: #fbbf24;">126+</div>
                                    <div style="color: #bfdbfe; font-weight: 500;">Countries Served</div>
                                </div>
                                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 0.75rem; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 2.5rem; font-weight: bold; color: #fbbf24;">1500+</div>
                                    <div style="color: #bfdbfe; font-weight: 500;">Ports Worldwide</div>
                                </div>
                            </div>
                            
                            <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                                <a href="https://rfq.avsglobalsupply.com" target="_blank" style="text-decoration: none;">
                                    <button style="background: #eab308; color: black; font-weight: 600; padding: 0.75rem 2rem; border-radius: 0.375rem; border: none; cursor: pointer; font-size: 1.1rem;">
                                        Get Quote Today
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
                            <img src="assets/images/fully-loaded-container-cargo-ship-at-sea-global-l-2025-09-08-11-32-34-utc.JPG" 
                                 alt="Container ship with colorful cargo containers at sea - aerial view" 
                                 style="width: 100%; height: 24rem; object-fit: cover; border-radius: 1rem; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Overview -->
            <section style="padding: 4rem 0; background: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Comprehensive Supply Solutions</h2>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 48rem; margin: 0 auto; line-height: 1.6;">
                            From remote areas to major ports, we deliver provision supplies and technical stores 
                            with unparalleled global reach and local expertise.
                        </p>
                    </div>
                    
                    <div class="responsive-grid-3">
                        <div style="background: linear-gradient(135deg, #eff6ff 0%, white 100%); border-radius: 0.5rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                            <div style="width: 4rem; height: 4rem; background: #dbeafe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-ship" style="font-size: 2rem; color: #2563eb;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Provision Supply</h3>
                            <p style="color: #6b7280; line-height: 1.6;">
                                Fresh provisions, dry goods, and specialized dietary requirements delivered to any port worldwide. 
                                Quality guaranteed with strict temperature control and handling protocols.
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #f0fdf4 0%, white 100%); border-radius: 0.5rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                            <div style="width: 4rem; height: 4rem; background: #dcfce7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-globe" style="font-size: 2rem; color: #16a34a;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Technical Stores</h3>
                            <p style="color: #6b7280; line-height: 1.6;">
                                Complete range of technical supplies, safety equipment, and marine tools. 
                                Sourced from certified suppliers with full documentation and compliance certificates.
                            </p>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, #faf5ff 0%, white 100%); border-radius: 0.5rem; padding: 2rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                            <div style="width: 4rem; height: 4rem; background: #e9d5ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-users" style="font-size: 2rem; color: #9333ea;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Remote Areas</h3>
                            <p style="color: #6b7280; line-height: 1.6;">
                                Specialized logistics for remote locations and challenging destinations. 
                                Advanced planning and local partnerships ensure reliable delivery anywhere.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Key Features -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, #f9fafb 0%, #eff6ff 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="font-size: 2.5rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Why Choose Our Global Network</h2>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 32rem; margin: 0 auto;">
                            Unmatched service quality backed by decades of maritime supply expertise
                        </p>
                    </div>
                    
                    <div class="responsive-grid-4">
                        <div style="background: white; border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #3b82f6; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-users" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Single Point of Contact</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                Dedicated sourcing representative for streamlined communication and personalized service
                            </p>
                        </div>
                        
                        <div style="background: white; border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #10b981; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-credit-card" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Flexible Payment</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                Convenient payment terms in your preferred currency with flexible credit options
                            </p>
                        </div>
                        
                        <div style="background: white; border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #8b5cf6; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-chart-bar" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">Advanced Reporting</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                Real-time dashboard to track orders, forecast supplies, and optimize inventory management
                            </p>
                        </div>
                        
                        <div style="background: white; border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <div style="width: 3rem; height: 3rem; background: #ef4444; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <i class="fas fa-clock" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <h4 style="font-weight: bold; color: #111827; margin-bottom: 0.5rem;">24/7 Support</h4>
                            <p style="color: #6b7280; font-size: 0.875rem;">
                                Round-the-clock service, 365 days a year, ensuring support whenever you need it
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Global Reach -->
            <section style="padding: 4rem 0; background: #0f172a; color: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                    <div class="responsive-grid-hero">
                        <div>
                            <h2 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1.5rem;">Unparalleled Global Reach</h2>
                            <p style="font-size: 1.25rem; color: #d1d5db; line-height: 1.6; margin-bottom: 2rem;">
                                Our extensive network spans across continents, ensuring we can serve your vessels 
                                wherever they operate. From major commercial ports to remote offshore locations.
                            </p>
                            
                            <div class="responsive-grid-2">
                                <div>
                                    <div style="font-size: 2rem; font-weight: bold; color: #fbbf24;">126+</div>
                                    <div style="color: #d1d5db;">Countries with active operations</div>
                                </div>
                                <div>
                                    <div style="font-size: 2rem; font-weight: bold; color: #fbbf24;">1500+</div>
                                    <div style="color: #d1d5db;">Ports served worldwide</div>
                                </div>
                                <div>
                                    <div style="font-size: 2rem; font-weight: bold; color: #60a5fa;">24/7</div>
                                    <div style="color: #d1d5db;">Hours of operation</div>
                                </div>
                                <div>
                                    <div style="font-size: 2rem; font-weight: bold; color: #60a5fa;">40+</div>
                                    <div style="color: #d1d5db;">Years of Experience</div>
                                </div>
                            </div>
                        </div>
                        
                        <div style="position: relative;">
                            <img src="assets/images/globe-on-hand-for-earth-day-2025-01-27-11-05-04-utc.jpg" 
                                 alt="Earth globe showing global reach" 
                                 style="width: 100%; height: 20rem; object-fit: cover; border-radius: 1rem; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);" />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include 'landing-form.php'; ?>
    </div>

    <script>
        // Enhanced Global Supply App - Static Version
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuBtn = document.querySelector('.global-supply-wrapper .mobile-menu-btn');
            const navMenu = document.querySelector('.global-supply-wrapper .nav-menu');
            
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
                document.querySelectorAll('.global-supply-wrapper .nav-button').forEach(link => {
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
<!-- Global Supply Wrapper End -->

<?php include 'footer.php'; ?>
