<?php
$title = "AVS Global Supply - Maritime Catering & Provision Management";
$description = "Professional maritime catering and provision supply services across 1500+ ports worldwide. MLC 2006 compliant with fixed-rate provisioning.";
$canonical = "https://www.avsglobalsupply.com/catering-management.php";
$eng_link = "https://www.avsglobalsupply.com/catering-management.php";
$tr_link = "https://www.avsglobalsupply.com/tr/kumanya.php";
$sri_link = "https://www.avssrilanka.com/catering-management.php";
$gr_link = "https://www.avsgreece.gr/catering-management.php";
include 'header.php';
?>
<!-- Leaflet CSS and JS for interactive map -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- Landing Page Wrapper - Tüm landing page CSS'leri bu wrapper içinde scope edilmiştir -->
<div class="landing-page-wrapper">
    <style>
        /* Landing page için özel CSS - Sadece .landing-page-wrapper içinde geçerli */
        .landing-page-wrapper * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .landing-page-wrapper {
            font-family: 'Mulish', sans-serif;
            line-height: 1.6;
            color: #374151;
            background: #f9fafb;
        }
        
        .landing-page-wrapper .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        /* Hero Section */
        .landing-page-wrapper .hero {
            background: linear-gradient(135deg, #14558b 0%, #15558b 50%, #6da3d1 100%);
            color: white;
            padding: 4rem 0;
        }
        
        .landing-page-wrapper .hero-content {
            text-align: center;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .landing-page-wrapper .hero h1 {
            font-family: 'Urbanist', sans-serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .landing-page-wrapper .hero p {
            font-size: 1.25rem;
            color: #e3f2fd;
            margin-bottom: 3rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .landing-page-wrapper .hero-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .landing-page-wrapper .feature {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }
        
        .landing-page-wrapper .feature-icon {
            width: 2rem;
            height: 2rem;
            color: #fff212;
        }
        
        .landing-page-wrapper .feature-text .title {
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .landing-page-wrapper .feature-text .subtitle {
            font-size: 0.875rem;
            color: #bfdbfe;
        }
        
        /* Main Content */
        .landing-page-wrapper .main-content {
            padding: 3rem 0;
        }
        
        .landing-page-wrapper .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .landing-page-wrapper .section-header h2 {
            font-family: 'Urbanist', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: #14558b;
            margin-bottom: 1rem;
        }
        
        .landing-page-wrapper .section-header p {
            font-size: 1.125rem;
            color: #6b7280;
        }
        
        .landing-page-wrapper .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
        }
        
        /* Cards */
        .landing-page-wrapper .card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .landing-page-wrapper .card-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .landing-page-wrapper .card-title {
            font-family: 'Urbanist', sans-serif;
            font-size: 1.25rem;
            font-weight: 600;
            color: #14558b;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
        }
        
        .landing-page-wrapper .card-description {
            color: #6b7280;
            font-size: 0.875rem;
        }
        
        .landing-page-wrapper .card-content {
            padding: 1.5rem;
        }
        
        /* Port Map */
        .landing-page-wrapper .port-selection {
            margin-bottom: 1rem;
        }
        
        .landing-page-wrapper .selected-ports {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            min-height: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .landing-page-wrapper .port-badge {
            background: #15558b;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .landing-page-wrapper .port-badge .remove-btn {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            padding: 0;
            width: 1rem;
            height: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .landing-page-wrapper .map-container {
            background: #eff6ff;
            border: 1px solid #dbeafe;
            border-radius: 0.5rem;
            padding: 1rem;
        }
        
        /* Leaflet map customization */
        .landing-page-wrapper .leaflet-container {
            background: #a8dadc;
            font-family: inherit;
        }
        
        .landing-page-wrapper .custom-port-marker {
            background: #ef4444;
            border: 3px solid #ffffff;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.3);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .landing-page-wrapper .custom-port-marker:hover {
            transform: scale(1.3);
            background: #dc2626;
            box-shadow: 0 4px 8px rgba(0,0,0,0.4);
        }
        
        .landing-page-wrapper .custom-port-marker.selected {
            background: #15558b;
            border-color: #14558b;
            animation: pulse 2s infinite;
            transform: scale(1.2);
        }
        
        .landing-page-wrapper .leaflet-popup-content-wrapper {
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        .landing-page-wrapper .leaflet-popup-content {
            margin: 12px 16px;
            font-size: 14px;
        }
        
        .landing-page-wrapper .port-popup {
            text-align: center;
        }
        
        .landing-page-wrapper .port-popup h4 {
            margin: 0 0 4px 0;
            color: #1f2937;
            font-size: 16px;
            font-weight: 600;
        }
        
        .landing-page-wrapper .port-popup p {
            margin: 0 0 8px 0;
            color: #6b7280;
            font-size: 13px;
        }
        
        .landing-page-wrapper .port-popup button {
            background: #15558b;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
            transition: background 0.3s ease;
        }
        
        .landing-page-wrapper .port-popup button:hover {
            background: #14558b;
        }
        
        .landing-page-wrapper .port-popup button.selected {
            background: #059669;
        }
        
        .landing-page-wrapper .port-popup button.selected:hover {
            background: #047857;
        }

        /* FAQ Styles */
        .landing-page-wrapper .faq-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .landing-page-wrapper .faq-item {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .landing-page-wrapper .faq-item:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        .landing-page-wrapper .faq-question {
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
        }

        .landing-page-wrapper .faq-question:hover {
            background-color: #f8fafc;
        }

        .landing-page-wrapper .faq-question h3 {
            margin: 0;
            font-size: 1.125rem;
            font-weight: 600;
            color: #1f2937;
            flex: 1;
            padding-right: 1rem;
        }

        .landing-page-wrapper .faq-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            transition: transform 0.3s ease;
        }

        .landing-page-wrapper .faq-item.active .faq-icon {
            transform: rotate(180deg);
            color: #15558b;
        }

        .landing-page-wrapper .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            background-color: #f8fafc;
        }

        .landing-page-wrapper .faq-answer.active {
            max-height: 1000px;
            padding: 1.5rem;
        }

        .landing-page-wrapper .faq-answer p {
            margin: 0;
            color: #4b5563;
            line-height: 1.6;
        }
        
        .landing-page-wrapper .port-marker.unselected {
            fill: #ef4444;
            stroke: #dc2626;
            stroke-width: 2;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(37, 99, 235, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(37, 99, 235, 0);
            }
        }
        
        .landing-page-wrapper .port-label {
            font-size: 12px;
            font-weight: 600;
            fill: #1f2937;
            text-shadow: 1px 1px 2px rgba(255,255,255,0.8);
            pointer-events: none;
        }
        
        .landing-page-wrapper .map-legend {
            display: flex;
            align-items: center;
            gap: 2rem;
            margin-top: 0.5rem;
            font-size: 0.875rem;
            color: #6b7280;
        }
        
        .landing-page-wrapper .legend-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .landing-page-wrapper .legend-dot {
            width: 0.75rem;
            height: 0.75rem;
            border-radius: 50%;
        }
        
        .landing-page-wrapper .legend-dot.available {
            background: #ef4444;
        }
        
        .landing-page-wrapper .legend-dot.selected {
            background: #15558b;
        }
        
        /* Pricing Calculator */
        .landing-page-wrapper .form-group {
            margin-bottom: 1.5rem;
        }
        
        .landing-page-wrapper .form-label {
            display: block;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: #374151;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .landing-page-wrapper .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 1rem;
            transition: all 0.2s;
        }
        
        .landing-page-wrapper .form-input:focus {
            outline: none;
            border-color: #15558b;
            box-shadow: 0 0 0 3px rgba(21, 85, 139, 0.1);
        }
        
        .landing-page-wrapper .pricing-estimate {
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            border-radius: 0.5rem;
            padding: 1rem;
            margin: 1rem 0;
        }
        
        .landing-page-wrapper .estimate-header {
            font-weight: 500;
            color: #1e3a8a;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .landing-page-wrapper .estimate-details {
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }
        
        .landing-page-wrapper .estimate-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }
        
        .landing-page-wrapper .estimate-price {
            text-align: center;
            padding-top: 0.75rem;
            border-top: 1px solid #bfdbfe;
        }
        
        .landing-page-wrapper .estimate-price .label {
            font-size: 0.875rem;
            color: #1e3a8a;
            margin-bottom: 0.25rem;
        }
        
        .landing-page-wrapper .estimate-price .amount {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e3a8a;
        }
        
        .landing-page-wrapper .estimate-disclaimer {
            font-size: 0.75rem;
            color: #15558b;
            margin-top: 0.75rem;
            line-height: 1.4;
        }
        
        .landing-page-wrapper .alert {
            padding: 1rem;
            border-radius: 0.5rem;
            margin: 1rem 0;
        }
        
        .landing-page-wrapper .alert-warning {
            background: #fef3c7;
            border: 1px solid #f59e0b;
            color: #92400e;
        }
        
        .landing-page-wrapper .btn {
            background: #15558b;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            text-decoration: none;
        }
        
        .landing-page-wrapper .btn:hover {
            background: #14558b;
            transform: translateY(-1px);
        }
        
        .landing-page-wrapper .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        .landing-page-wrapper .btn-large {
            width: 100%;
            padding: 1rem;
            font-size: 1.125rem;
        }
        
        .landing-page-wrapper .selected-ports-summary {
            background: #f9fafb;
            border-radius: 0.5rem;
            padding: 0.75rem;
            margin-top: 1rem;
        }
        
        .landing-page-wrapper .summary-title {
            font-weight: 500;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }
        
        .landing-page-wrapper .ports-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 0.25rem;
            font-size: 0.875rem;
            color: #4b5563;
        }
        
        .landing-page-wrapper .info-card {
            margin-top: 1.5rem;
        }
        
        .landing-page-wrapper .info-list {
            list-style: none;
            padding: 0;
        }
        
        .landing-page-wrapper .info-item {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            margin-bottom: 0.75rem;
            font-size: 0.875rem;
        }
        
        .landing-page-wrapper .info-bullet {
            width: 0.5rem;
            height: 0.5rem;
            background: #15558b;
            border-radius: 50%;
            margin-top: 0.5rem;
            flex-shrink: 0;
        }
        
        /* Modal */
        .landing-page-wrapper .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        
        .landing-page-wrapper .modal-overlay.active {
            display: flex;
        }
        
        .landing-page-wrapper .modal-content {
            background: white;
            border-radius: 0.75rem;
            padding: 0;
            max-width: 600px;
            width: 100%;
            max-height: 90vh;
            overflow: hidden;
            position: relative;
            animation: modalSlide 0.3s ease-out;
        }
        
        @keyframes modalSlide {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .landing-page-wrapper .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .landing-page-wrapper .modal-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }
        
        .landing-page-wrapper .modal-description {
            color: #6b7280;
            font-size: 0.875rem;
        }
        
        .landing-page-wrapper .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #6b7280;
            padding: 0.25rem;
        }
        
        .landing-page-wrapper .modal-close:hover {
            color: #374151;
        }
        
        .landing-page-wrapper .modal-body {
            padding: 1.5rem;
            max-height: 60vh;
            overflow-y: auto;
        }
        
        .landing-page-wrapper .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        
        .landing-page-wrapper .form-grid-full {
            grid-column: 1 / -1;
        }
        
        .landing-page-wrapper .form-textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 1rem;
            font-family: inherit;
            resize: vertical;
            min-height: 100px;
            transition: all 0.2s;
        }
        
        .landing-page-wrapper .form-textarea:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        
        .landing-page-wrapper .success-message {
            text-align: center;
            padding: 2rem;
        }
        
        .landing-page-wrapper .success-icon {
            width: 4rem;
            height: 4rem;
            color: #10b981;
            margin: 0 auto 1rem;
        }
        
        .landing-page-wrapper .loading {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            border: 2px solid #f3f4f6;
            border-top: 2px solid #2563eb;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .landing-page-wrapper .content-grid {
                grid-template-columns: 1fr;
            }
            
            .landing-page-wrapper .form-grid {
                grid-template-columns: 1fr;
            }
            
            .landing-page-wrapper .hero-features {
                grid-template-columns: 1fr;
            }
        }
        
        /* Navigation Bar Styles */
        .landing-page-wrapper .nav-bar .nav-button:hover {
            background: #f3f4f6 !important;
            color: #1e3a8a !important;
        }
        
        .landing-page-wrapper .nav-bar .nav-button.active {
            background: #1e3a8a !important;
            color: white !important;
        }
        
        @media (max-width: 768px) {
            .landing-page-wrapper .nav-bar .mobile-menu-btn {
                display: block !important;
                position: absolute !important;
                right: 1.5rem !important;
                top: 50% !important;
                transform: translateY(-50%) !important;
            }
            
            .landing-page-wrapper .nav-bar > div {
                position: relative !important;
            }
            
            .landing-page-wrapper .nav-bar .nav-menu {
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
            
            .landing-page-wrapper .nav-bar .nav-menu.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }
            
            .landing-page-wrapper .nav-bar .nav-button {
                padding: 1rem !important;
                text-align: center;
                border-bottom: 1px solid #f3f4f6;
                width: 100%;
            }
        }
    </style>

    <!-- Navigation Bar
    <nav class="nav-bar" style="position: sticky; top: 0; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); z-index: 999; padding: 1rem 0; box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; display: flex; justify-content: center; align-items: center; position: relative;">
            <button class="mobile-menu-btn" style="display: none; background: none; border: none; font-size: 1.5rem; color: #1e3a8a; cursor: pointer; position: absolute; right: 1.5rem; top: 50%; transform: translateY(-50%);">
                <i class="fas fa-bars"></i>
            </button>
            <div class="nav-menu" style="display: flex; gap: 0.5rem; justify-content: center;">
                <a href="/global-ship-supply.php" class="nav-button" style="background: transparent; border: none; padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 500; color: #374151; cursor: pointer; transition: all 0.3s ease; text-decoration: none; display: inline-block;">Global Supply</a>
                <a href="/catering-management.php" class="nav-button active" style="background: #1e3a8a; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 500; cursor: pointer; transition: all 0.3s ease; text-decoration: none; display: inline-block;">Catering Management</a>
                <a href="/provisions-supply.php" class="nav-button" style="background: transparent; border: none; padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 500; color: #374151; cursor: pointer; transition: all 0.3s ease; text-decoration: none; display: inline-block;">Provisions Supply</a>
                <a href="/on-offshore.php" class="nav-button" style="background: transparent; border: none; padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 500; color: #374151; cursor: pointer; transition: all 0.3s ease; text-decoration: none; display: inline-block;">On/Offshore</a>
                <a href="/technical-stores.php" class="nav-button" style="background: transparent; border: none; padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 500; color: #374151; cursor: pointer; transition: all 0.3s ease; text-decoration: none; display: inline-block;">Technical Stores</a>
            </div>
        </div>
    </nav> -->

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Global Maritime Provision Supply</h1>
                <p>Fixed provision supply rates within MLC 2006 scope across <strong>1500+ ports worldwide</strong>. Vessel-based contracts for your crew provisioning needs with global coverage.</p>
                
                <div class="hero-features">
                    <div class="feature">
                        <i class="fas fa-globe feature-icon"></i>
                        <div class="feature-text">
                            <div class="title">Global Coverage</div>
                            <div class="subtitle">1500+ Ports Worldwide</div>
                        </div>
                    </div>
                    <div class="feature">
                        <i class="fas fa-shield-alt feature-icon"></i>
                        <div class="feature-text">
                            <div class="title">Fixed Rates</div>
                            <div class="subtitle">Transparent Pricing</div>
                        </div>
                    </div>
                    <div class="feature">
                        <i class="fas fa-clock feature-icon"></i>
                        <div class="feature-text">
                            <div class="title">24/7 Service</div>
                            <div class="subtitle">Always Available</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <div class="section-header">
                <h2>Get Your Provision Supply Information</h2>
                <p>Select from our <strong>1500+ port network worldwide</strong>, enter crew details, and contact us for customized pricing. Request catering contracts for any global location.</p>
            </div>

            <div class="content-grid">
                <!-- Port Selection -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <i class="fas fa-anchor" style="color: #15558b;"></i>
                            Select Ports
                        </div>
                        <div class="card-description">
                            Choose from our 1500+ global port network (major ports shown on map)
                        </div>
                    </div>
                    <div class="card-content">
                        <!-- Global Coverage Notice -->
                        <div style="background: #eff6ff; border: 1px solid #dbeafe; border-radius: 6px; padding: 12px; margin-bottom: 16px; text-align: center;">
                            <i class="fas fa-globe" style="color: #15558b; margin-right: 6px;"></i>
                            <strong style="color: #14558b;">1500+ Ports Worldwide</strong>
                            <br>
                            <small style="color: #6b7280;">Major ports shown below • Full network available • Request catering contracts for any location</small>
                        </div>
                        
                        <div class="port-selection">
                            <div class="selected-ports" id="selectedPorts">
                                <p style="color: #6b7280; font-size: 0.875rem;">Select ports on the map below</p>
                            </div>
                            
                            <div class="map-container">
                                <!-- Professional Interactive World Map -->
                                <div id="worldMap" style="height: 500px; width: 100%; border-radius: 8px; overflow: hidden;"></div>
                                
                                <div class="map-legend">
                                    <div class="legend-item">
                                        <div class="legend-dot available"></div>
                                        <span>Available Ports</span>
                                    </div>
                                    <div class="legend-item">
                                        <div class="legend-dot selected"></div>
                                        <span>Selected Ports</span>
                                    </div>
                                    <div style="margin-top: 8px; text-align: center;">
                                        <small style="color: #6b7280;">
                                            <i class="fas fa-info-circle" style="margin-right: 4px;"></i>
                                            Don't see your port? We serve 1500+ locations worldwide.
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Calculator & Info -->
                <div>
                    <!-- Pricing Calculator -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <i class="fas fa-calculator" style="color: #15558b;"></i>
                                Pricing Calculator
                            </div>
                            <div class="card-description">
                                Get an instant estimate overview for your MLC 2006 compliant provision supply needs. Contact us for detailed pricing.
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="form-group">
                                <label class="form-label" for="crewCount">
                                    <i class="fas fa-users"></i>
                                    Average Number of Crew
                                </label>
                                <input 
                                    type="number" 
                                    id="crewCount" 
                                    class="form-input"
                                    placeholder="Enter crew count"
                                    min="1"
                                    max="500"
                                >
                            </div>
                            
                            <div id="portWarning" class="alert alert-warning" style="display: none;">
                                <p>Please select at least one port to calculate pricing</p>
                            </div>
                            
                            <div id="pricingEstimate" style="display: none;">
                                <!-- Pricing estimate will be populated by JavaScript -->
                            </div>
                            
                            <button id="detailedPricingBtn" class="btn btn-large" style="display: none;">
                                Get Detailed Pricing Quote
                            </button>
                            
                            <div id="selectedPortsSummary" style="display: none;">
                                <!-- Selected ports summary will be populated by JavaScript -->
                            </div>
                        </div>
                    </div>

                    <!-- Info Card -->
                    <div class="card info-card">
                        <div class="card-header">
                            <div class="card-title">Why Choose AVS Global Supply?</div>
                        </div>
                        <div class="card-content">
                            <ul class="info-list">
                                <li class="info-item">
                                    <div class="info-bullet"></div>
                                    <div>
                                        <strong>MLC 2006 Compliant:</strong> Fixed rates within Maritime Labour Convention scope
                                    </div>
                                </li>
                                <li class="info-item">
                                    <div class="info-bullet"></div>
                                    <div>
                                        <strong>Vessel-Based Contracts:</strong> Tailored agreements for each vessel
                                    </div>
                                </li>
                                <li class="info-item">
                                    <div class="info-bullet"></div>
                                    <div>
                                        <strong>Quality Assurance:</strong> Fresh provisions from trusted suppliers
                                    </div>
                                </li>
                                <li class="info-item">
                                    <div class="info-bullet"></div>
                                    <div>
                                        <strong>Global Network:</strong> Consistent service across all ports
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Quote CTA for Spot Supplies -->
    <section style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); padding: 3rem 0; color: white; margin-bottom: 0;">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2 style="font-family: 'Urbanist', sans-serif; font-size: 2.5rem; font-weight: bold; margin-bottom: 1rem;">
                    <i class="fas fa-bolt" style="margin-right: 0.5rem;"></i>
                    Need Spot Supplies Fast?
                </h2>
                <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9;">
                    Get instant quotes for urgent provision orders. Quick response within 24 hours for immediate maritime supply needs.
                </p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    <div style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 8px; backdrop-filter: blur(10px);">
                        <i class="fas fa-shipping-fast" style="font-size: 2rem; margin-bottom: 0.5rem; color: #fbbf24;"></i>
                        <h3 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem;">Fast Delivery</h3>
                        <p style="font-size: 0.9rem; opacity: 0.8;">Same-day or next-day supply</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 8px; backdrop-filter: blur(10px);">
                        <i class="fas fa-clock" style="font-size: 2rem; margin-bottom: 0.5rem; color: #fbbf24;"></i>
                        <h3 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem;">Quick Response</h3>
                        <p style="font-size: 0.9rem; opacity: 0.8;">Quote within 2 hours</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 8px; backdrop-filter: blur(10px);">
                        <i class="fas fa-globe" style="font-size: 2rem; margin-bottom: 0.5rem; color: #fbbf24;"></i>
                        <h3 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem;">Global Coverage</h3>
                        <p style="font-size: 0.9rem; opacity: 0.8;">1500+ ports worldwide</p>
                    </div>
                </div>
                
                <div style="display: flex; justify-content: center;">
                    <a href="https://rfq.avsglobalsupply.com" target="_blank" rel="noopener noreferrer"
                       style="background: white; color: #d97706; border: none; padding: 1rem 2rem; border-radius: 8px; font-weight: 600; font-size: 1rem; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; gap: 0.5rem; text-decoration: none;">
                        <i class="fas fa-bolt"></i>
                        Get Instant Quote for Spot Supplies
                    </a>
                </div>
                
                <p style="margin-top: 1.5rem; font-size: 0.9rem; opacity: 0.7;">
                    <i class="fas fa-check-circle" style="margin-right: 0.5rem;"></i>
                    Emergency provisions available 24/7 - All MLC 2006 compliant
                </p>
            </div>
        </div>
    </section>

    <!-- Catering Contract CTA Section -->
    <section style="background: linear-gradient(135deg, #059669 0%, #047857 100%); padding: 3rem 0; color: white;" id="contact">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2 style="font-family: 'Urbanist', sans-serif; font-size: 2.5rem; font-weight: bold; margin-bottom: 1rem;">
                    <i class="fas fa-utensils" style="margin-right: 0.5rem;"></i>
                    Need Catering for Your Port?
                </h2>
                <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9;">
                    Don't see your port on the map? No problem! Request a custom catering contract for any of our 1500+ global locations.
                </p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    <div style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 8px; backdrop-filter: blur(10px);">
                        <i class="fas fa-globe-americas" style="font-size: 2rem; margin-bottom: 0.5rem; color: #34d399;"></i>
                        <h3 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem;">Any Location Worldwide</h3>
                        <p style="font-size: 0.9rem; opacity: 0.8;">1500+ ports across all continents</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 8px; backdrop-filter: blur(10px);">
                        <i class="fas fa-handshake" style="font-size: 2rem; margin-bottom: 0.5rem; color: #34d399;"></i>
                        <h3 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem;">Custom Contracts</h3>
                        <p style="font-size: 0.9rem; opacity: 0.8;">Tailored agreements for your fleet</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 8px; backdrop-filter: blur(10px);">
                        <i class="fas fa-clock" style="font-size: 2rem; margin-bottom: 0.5rem; color: #34d399;"></i>
                        <h3 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem;">Quick Response</h3>
                        <p style="font-size: 0.9rem; opacity: 0.8;">Fast contract setup and delivery</p>
                    </div>
                </div>
                
                <div style="display: flex; justify-content: center;">
                    <button onclick="showCateringRequestModal()" 
                            style="background: white; color: #047857; border: none; padding: 1rem 2rem; border-radius: 8px; font-weight: 600; font-size: 1rem; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-utensils"></i>
                        Request Catering Contract
                    </button>
                </div>
                
                <p style="margin-top: 1.5rem; font-size: 0.9rem; opacity: 0.7;">
                    <i class="fas fa-shield-alt" style="margin-right: 0.5rem;"></i>
                    All contracts include MLC 2006 compliance and quality assurance
                </p>
            </div>
        </div>
    </section>

    <!-- Our Services & Solutions -->
    <section style="background: white; padding: 4rem 0;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="font-family: 'Urbanist', sans-serif; font-size: 2.5rem; font-weight: bold; color: #14558b; margin-bottom: 1rem;">
                    Comprehensive Maritime Solutions
                </h2>
                <p style="font-size: 1.125rem; color: #6b7280; max-width: 600px; margin: 0 auto;">
                    Beyond provision supply, we offer advanced solutions for crew welfare, training, and vessel operations
                </p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; max-width: 1200px; margin: 0 auto;">
                <!-- Aquarex Water Systems -->
                <div style="background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); border-radius: 12px; padding: 2rem; color: white; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                        <i class="fas fa-tint" style="font-size: 2.5rem; color: #bae6fd;"></i>
                        <h3 style="font-size: 1.5rem; font-weight: bold; margin: 0;">Aquarex</h3>
                    </div>
                    <p style="font-size: 1rem; line-height: 1.6; margin-bottom: 1.5rem; opacity: 0.9;">
                        Premium drinking water systems for ships. Advanced filtration and purification technology ensuring safe, clean water supply for your crew at sea.
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                        <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #bae6fd;"></i>
                            <span>Advanced water filtration systems</span>
                        </li>
                        <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #bae6fd;"></i>
                            <span>WHO drinking water standards compliant</span>
                        </li>
                        <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #bae6fd;"></i>
                            <span>Easy installation and maintenance</span>
                        </li>
                    </ul>
                    <a href="https://www.avsglobalsupply.com/aquarex-new" target="_blank" rel="noopener noreferrer" 
                       style="display: inline-flex; align-items: center; gap: 0.5rem; background: white; color: #0284c7; padding: 0.75rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                        Learn More <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>

                <!-- Seafarers Wellbeing -->
                <div style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 12px; padding: 2rem; color: white; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                        <i class="fas fa-heart" style="font-size: 2.5rem; color: #a7f3d0;"></i>
                        <h3 style="font-size: 1.5rem; font-weight: bold; margin: 0;">Seafarers Wellbeing</h3>
                    </div>
                    <p style="font-size: 1rem; line-height: 1.6; margin-bottom: 1.5rem; opacity: 0.9;">
                        Comprehensive crew welfare programs focusing on mental health, physical fitness, and overall wellbeing of maritime professionals.
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                        <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #a7f3d0;"></i>
                            <span>Mental health support programs</span>
                        </li>
                        <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #a7f3d0;"></i>
                            <span>Wellness resources and counseling</span>
                        </li>
                        <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #a7f3d0;"></i>
                            <span>24/7 helpline and assistance</span>
                        </li>
                    </ul>
                    <a href="https://www.avsglobalsupply.com/seafarerswellbeing-new" target="_blank" rel="noopener noreferrer" 
                       style="display: inline-flex; align-items: center; gap: 0.5rem; background: white; color: #059669; padding: 0.75rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                        Learn More <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>

                <!-- LMS (Learning Management System) -->
                <div style="background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%); border-radius: 12px; padding: 2rem; color: white; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                        <i class="fas fa-graduation-cap" style="font-size: 2.5rem; color: #ddd6fe;"></i>
                        <h3 style="font-size: 1.5rem; font-weight: bold; margin: 0;">Learning Management</h3>
                    </div>
                    <p style="font-size: 1rem; line-height: 1.6; margin-bottom: 1.5rem; opacity: 0.9;">
                        Advanced training platform for maritime professionals. STCW-compliant courses, certifications, and continuous professional development.
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem;">
                        <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #ddd6fe;"></i>
                            <span>STCW-compliant training courses</span>
                        </li>
                        <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #ddd6fe;"></i>
                            <span>Digital certification and tracking</span>
                        </li>
                        <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #ddd6fe;"></i>
                            <span>Interactive e-learning modules</span>
                        </li>
                    </ul>
                    <a href="https://www.avsglobalsupply.com/lms-new" target="_blank" rel="noopener noreferrer" 
                       style="display: inline-flex; align-items: center; gap: 0.5rem; background: white; color: #7c3aed; padding: 0.75rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                        Learn More <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section style="background: #f8fafc; padding: 4rem 0;" id="faq">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="font-family: 'Urbanist', sans-serif; font-size: 2.5rem; font-weight: bold; color: #14558b; margin-bottom: 1rem;">
                    Frequently Asked Questions
                </h2>
                <p style="font-size: 1.125rem; color: #6b7280; max-width: 600px; margin: 0 auto;">
                    Everything you need to know about AVS Global Supply maritime provision services
                </p>
            </div>
            
            <div style="max-width: 800px; margin: 0 auto;">
                <div class="faq-container">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(1)">
                            <h3>Why should I choose AVS Global Supply for maritime provision services?</h3>
                            <div class="faq-icon">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="faq-answer" id="faq-1">
                            <p>AVS Global Supply offers reliable and cost-effective solutions for all your maritime provision needs. We provide comprehensive services across 1500+ ports worldwide with transparent pricing and MLC 2006 compliance.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(2)">
                            <h3>What makes AVS Provision Management services unique?</h3>
                            <div class="faq-icon">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="faq-answer" id="faq-2">
                            <p>Improve your maritime operations with our Provision Management services, where precision meets passion. Our approach transforms routine supply management and catering into a strategic asset, ensuring your crew's needs are met with care and efficiency. From the meticulous selection of premium goods to our advanced digital platform, every aspect is designed for cost-effectiveness, transparency, and satisfaction.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(3)">
                            <h3>What are the key benefits of using AVS provision services?</h3>
                            <div class="faq-icon">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="faq-answer" id="faq-3">
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    <span><strong>Budgeting costs per man per day</strong> - Transparent and predictable pricing structure</span>
                                </li>
                                <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    <span><strong>Strategic purchasing and cost-effective planning</strong> - Optimized procurement processes</span>
                                </li>
                                <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    <span><strong>Increased morale and satisfaction</strong> with delicious, high-quality food according to multinational dietary preferences</span>
                                </li>
                                <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    <span><strong>Food safety, hygiene, and nutrition</strong> in line with MLC 2006 standards</span>
                                </li>
                                <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    <span><strong>Premium provision supplies</strong> supporting your crew's catering operations</span>
                                </li>
                                <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    <span><strong>Advanced dashboard</strong> for reporting, forecasting, budget management, and inventory control</span>
                                </li>
                                <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                                    <i class="fas fa-check-circle" style="color: #10b981; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;"></i>
                                    <span><strong>Reduced waste and operational costs</strong> through efficient supply chain management</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(4)">
                            <h3>How many ports does AVS Global Supply serve?</h3>
                            <div class="faq-icon">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="faq-answer" id="faq-4">
                            <p>AVS Global Supply serves <strong>1500+ ports worldwide</strong>, covering all major shipping routes and economic zones across all continents. If your port is not shown on our interactive map, simply request a catering contract and we'll arrange service for your location.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(5)">
                            <h3>Are your services compliant with international maritime standards?</h3>
                            <div class="faq-icon">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="faq-answer" id="faq-5">
                            <p>Yes, all our provision services are fully compliant with <strong>MLC 2006 (Maritime Labour Convention)</strong> standards. We ensure food safety, hygiene, and nutrition meet international requirements, providing your crew with safe, high-quality meals that support their health and wellbeing at sea.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(6)">
                            <h3>How does your pricing structure work?</h3>
                            <div class="faq-icon">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="faq-answer" id="faq-6">
                            <p>We offer transparent <strong>fixed provision supply rates</strong> with costs calculated per crew member per day. Our competitive pricing varies by port location and specific requirements. Contact us directly for detailed pricing information tailored to your vessel's needs and route.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(8)">
                            <h3>What technology solutions do you offer for supply management?</h3>
                            <div class="faq-icon">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="faq-answer" id="faq-8">
                            <p>We provide an <strong>advanced digital dashboard</strong> that offers comprehensive reporting, forecasting, budget management, and inventory control. This technology platform ensures transparency, reduces waste, and helps optimize your operational costs through data-driven insights.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Pricing Modal -->
    <div class="modal-overlay" id="detailedModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeDetailedModal()">
                <i class="fas fa-times"></i>
            </button>
            
            <div id="modalContent">
                <div class="modal-header">
                    <div class="modal-title">Request Detailed Pricing Quote</div>
                    <div class="modal-description">
                        Get a comprehensive pricing quote for your vessel's provision supply needs
                    </div>
                </div>
                
                <div class="modal-body">
                    <form id="detailedForm">
                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label" for="fullName">
                                    <i class="fas fa-user"></i>
                                    Full Name *
                                </label>
                                <input type="text" id="fullName" name="name" class="form-input" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="company">
                                    <i class="fas fa-building"></i>
                                    Company *
                                </label>
                                <input type="text" id="company" name="company" class="form-input" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="email">
                                    <i class="fas fa-envelope"></i>
                                    Email *
                                </label>
                                <input type="email" id="email" name="email" class="form-input" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="phone">
                                    <i class="fas fa-phone"></i>
                                    Phone *
                                </label>
                                <input type="tel" id="phone" name="phone" class="form-input" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="vesselName">
                                    <i class="fas fa-ship"></i>
                                    Vessel Name *
                                </label>
                                <input type="text" id="vesselName" name="vessel" class="form-input" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="portName">
                                    <i class="fas fa-anchor"></i>
                                    Port *
                                </label>
                                <input type="text" id="portName" name="port" class="form-input" placeholder="Port name" required>
                            </div>
                            
                            <div class="form-group form-grid-full">
                                <label class="form-label" for="additionalRequirements">
                                    <i class="fas fa-list"></i>
                                    Additional Requirements
                                </label>
                                <textarea 
                                    id="additionalRequirements" 
                                    name="message" 
                                    class="form-textarea"
                                    placeholder="Please describe any specific dietary requirements, special provisions, or additional services needed..."
                                ></textarea>
                            </div>

                            <div class="form-group form-grid-full">
                                <div class="g-recaptcha" data-sitekey="6LcEgg4rAAAAAGoVKdeSgPWfHwIhyAzj2RizOcK3"></div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-large" id="submitBtn">
                            <i class="fas fa-paper-plane"></i>
                            Submit Quote Request
                        </button>
                    </form>
                </div>
            </div>
            
            <div id="successContent" style="display: none;">
                <div class="success-message">
                    <i class="fas fa-check-circle success-icon"></i>
                    <h3 style="color: #10b981; margin-bottom: 1rem;">Quote Request Submitted!</h3>
                    <p style="color: #6b7280; margin-bottom: 2rem;">
                        Thank you for your interest in AVS Global Supply. Our team will review your requirements and send you a detailed pricing quote within 24 hours.
                    </p>
                    <button class="btn" onclick="closeDetailedModal()">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Catering Contract Request Modal -->
    <div class="modal-overlay" id="cateringModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeCateringModal()">
                <i class="fas fa-times"></i>
            </button>
            
            <div id="cateringModalContent">
                <div class="modal-header">
                    <div class="modal-title">Request Catering Contract</div>
                    <div class="modal-description">
                        Get a custom catering contract for any port worldwide from our 1500+ global network
                    </div>
                </div>
                
                <div class="modal-body">
                    <form id="cateringForm">
                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-user"></i>
                                    Full Name *
                                </label>
                                <input type="text" name="name" class="form-input" placeholder="Your full name" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-building"></i>
                                    Company *
                                </label>
                                <input type="text" name="company" class="form-input" placeholder="Your company name" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-envelope"></i>
                                    Email *
                                </label>
                                <input type="email" name="email" class="form-input" placeholder="your@email.com" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-phone"></i>
                                    Phone *
                                </label>
                                <input type="tel" name="phone" class="form-input" placeholder="+1 (555) 123-4567" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-ship"></i>
                                    Vessel Name *
                                </label>
                                <input type="text" name="vessel" class="form-input" placeholder="Your vessel name" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Port *
                                </label>
                                <input type="text" name="port" class="form-input" placeholder="Port name, city, country" required>
                            </div>
                            
                            <div class="form-group full-width">
                                <label class="form-label">
                                    <i class="fas fa-utensils"></i>
                                    Catering Requirements
                                </label>
                                <textarea name="message" class="form-input" rows="4" placeholder="Please specify any dietary requirements, cuisine preferences, special occasions, allergies, or other catering needs..."></textarea>
                            </div>

                            <div class="form-group full-width">
                                <div class="g-recaptcha" data-sitekey="6LcEgg4rAAAAAGoVKdeSgPWfHwIhyAzj2RizOcK3"></div>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn">
                                <i class="fas fa-paper-plane"></i>
                                Submit Catering Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Success Message -->
            <div id="cateringSuccessMessage" style="display: none; text-align: center; padding: 2rem;">
                <i class="fas fa-check-circle success-icon"></i>
                <h3 style="color: #10b981; margin-bottom: 1rem;">Catering Request Submitted!</h3>
                <p style="color: #6b7280; margin-bottom: 2rem;">
                    Thank you for your catering contract request. Our team will review your requirements and contact you within 24 hours to discuss your custom contract.
                </p>
                <button class="btn" onclick="closeCateringModal()">
                    Close
                </button>
            </div>
        </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        // Port data with actual coordinates (latitude, longitude) - Major Global Ports
        const PORTS = [
            // Asia-Pacific Major Ports
            { id: "singapore", name: "Singapore", country: "Singapore", lat: 1.3521, lng: 103.8198 },
            { id: "shanghai", name: "Shanghai", country: "China", lat: 31.2304, lng: 121.4737 },
            { id: "hongkong", name: "Hong Kong", country: "China", lat: 22.3193, lng: 114.1694 },
            { id: "busan", name: "Busan", country: "South Korea", lat: 35.1796, lng: 129.0756 },
            { id: "yokohama", name: "Yokohama", country: "Japan", lat: 35.4437, lng: 139.6380 },
            { id: "tokyo", name: "Tokyo", country: "Japan", lat: 35.6762, lng: 139.6503 },
            { id: "kobe", name: "Kobe", country: "Japan", lat: 34.6901, lng: 135.1956 },
            { id: "kaohsiung", name: "Kaohsiung", country: "Taiwan", lat: 22.6273, lng: 120.3014 },
            { id: "manila", name: "Manila", country: "Philippines", lat: 14.5995, lng: 120.9842 },
            { id: "jakarta", name: "Jakarta", country: "Indonesia", lat: -6.2088, lng: 106.8456 },
            { id: "sydney", name: "Sydney", country: "Australia", lat: -33.8688, lng: 151.2093 },
            { id: "melbourne", name: "Melbourne", country: "Australia", lat: -37.8136, lng: 144.9631 },
            { id: "brisbane", name: "Brisbane", country: "Australia", lat: -27.4698, lng: 153.0251 },
            { id: "fremantle", name: "Fremantle", country: "Australia", lat: -32.0569, lng: 115.7454 },
            { id: "dalian", name: "Dalian", country: "China", lat: 38.9140, lng: 121.6147 },
            { id: "tianjin", name: "Tianjin", country: "China", lat: 39.1042, lng: 117.2013 },
            { id: "qingdao", name: "Qingdao", country: "China", lat: 36.0986, lng: 120.3719 },
            { id: "guangzhou", name: "Guangzhou", country: "China", lat: 23.1291, lng: 113.2644 },
            { id: "bangkok", name: "Bangkok", country: "Thailand", lat: 13.7563, lng: 100.5018 },
            { id: "hochiminh", name: "Ho Chi Minh City", country: "Vietnam", lat: 10.8231, lng: 106.6297 },
            
            // Middle East & Indian Ocean
            { id: "dubai", name: "Dubai", country: "UAE", lat: 25.2048, lng: 55.2708 },
            { id: "abudhabi", name: "Abu Dhabi", country: "UAE", lat: 24.4539, lng: 54.3773 },
            { id: "sharjah", name: "Sharjah", country: "UAE", lat: 25.3463, lng: 55.4209 },
            { id: "doha", name: "Doha", country: "Qatar", lat: 25.2854, lng: 51.5310 },
            { id: "kuwait", name: "Kuwait City", country: "Kuwait", lat: 29.3759, lng: 47.9774 },
            { id: "bahrain", name: "Manama", country: "Bahrain", lat: 26.2285, lng: 50.5860 },
            { id: "mumbai", name: "Mumbai", country: "India", lat: 19.0760, lng: 72.8777 },
            { id: "chennai", name: "Chennai", country: "India", lat: 13.0827, lng: 80.2707 },
            { id: "kolkata", name: "Kolkata", country: "India", lat: 22.5726, lng: 88.3639 },
            { id: "cochin", name: "Kochi", country: "India", lat: 9.9312, lng: 76.2673 },
            { id: "colombo", name: "Colombo", country: "Sri Lanka", lat: 6.9271, lng: 79.8612 },
            { id: "karachi", name: "Karachi", country: "Pakistan", lat: 24.8607, lng: 67.0011 },
            { id: "bandarabbas", name: "Bandar Abbas", country: "Iran", lat: 27.1865, lng: 56.2808 },
            { id: "muscat", name: "Muscat", country: "Oman", lat: 23.5859, lng: 58.4059 },
            { id: "aden", name: "Aden", country: "Yemen", lat: 12.7797, lng: 45.0367 },
            
            // Europe Major Ports
            { id: "rotterdam", name: "Rotterdam", country: "Netherlands", lat: 51.9244, lng: 4.4777 },
            { id: "antwerp", name: "Antwerp", country: "Belgium", lat: 51.2194, lng: 4.4025 },
            { id: "hamburg", name: "Hamburg", country: "Germany", lat: 53.5511, lng: 9.9937 },
            { id: "bremen", name: "Bremen", country: "Germany", lat: 53.0793, lng: 8.8017 },
            { id: "london", name: "London", country: "UK", lat: 51.5074, lng: -0.1278 },
            { id: "felixstowe", name: "Felixstowe", country: "UK", lat: 51.9543, lng: 1.3511 },
            { id: "southampton", name: "Southampton", country: "UK", lat: 50.9097, lng: -1.4044 },
            { id: "liverpool", name: "Liverpool", country: "UK", lat: 53.4084, lng: -2.9916 },
            { id: "barcelona", name: "Barcelona", country: "Spain", lat: 41.3851, lng: 2.1734 },
            { id: "valencia", name: "Valencia", country: "Spain", lat: 39.4699, lng: -0.3763 },
            { id: "algeciras", name: "Algeciras", country: "Spain", lat: 36.1408, lng: -5.4526 },
            { id: "bilbao", name: "Bilbao", country: "Spain", lat: 43.2627, lng: -2.9253 },
            { id: "marseille", name: "Marseille", country: "France", lat: 43.2965, lng: 5.3698 },
            { id: "lehavre", name: "Le Havre", country: "France", lat: 49.4944, lng: 0.1079 },
            { id: "genoa", name: "Genoa", country: "Italy", lat: 44.4056, lng: 8.9463 },
            { id: "livorno", name: "Livorno", country: "Italy", lat: 43.5543, lng: 10.3106 },
            { id: "naples", name: "Naples", country: "Italy", lat: 40.8518, lng: 14.2681 },
            { id: "trieste", name: "Trieste", country: "Italy", lat: 45.6495, lng: 13.7768 },
            { id: "piraeus", name: "Piraeus", country: "Greece", lat: 37.9364, lng: 23.7279 },
            { id: "thessaloniki", name: "Thessaloniki", country: "Greece", lat: 40.6401, lng: 22.9444 },
            { id: "istanbul", name: "Istanbul", country: "Turkey", lat: 41.0082, lng: 28.9784 },
            { id: "izmir", name: "Izmir", country: "Turkey", lat: 38.4189, lng: 27.1287 },
            { id: "gdansk", name: "Gdansk", country: "Poland", lat: 54.3520, lng: 18.6466 },
            { id: "stockholm", name: "Stockholm", country: "Sweden", lat: 59.3293, lng: 18.0686 },
            { id: "gothenburg", name: "Gothenburg", country: "Sweden", lat: 57.7089, lng: 11.9746 },
            { id: "oslo", name: "Oslo", country: "Norway", lat: 59.9139, lng: 10.7522 },
            { id: "bergen", name: "Bergen", country: "Norway", lat: 60.3913, lng: 5.3221 },
            { id: "copenhagen", name: "Copenhagen", country: "Denmark", lat: 55.6761, lng: 12.5683 },
            { id: "helsinki", name: "Helsinki", country: "Finland", lat: 60.1699, lng: 24.9384 },
            { id: "riga", name: "Riga", country: "Latvia", lat: 56.9496, lng: 24.1052 },
            { id: "tallinn", name: "Tallinn", country: "Estonia", lat: 59.4370, lng: 24.7536 },
            
            // North America Major Ports
            { id: "losangeles", name: "Los Angeles", country: "USA", lat: 33.7701, lng: -118.1937 },
            { id: "longbeach", name: "Long Beach", country: "USA", lat: 33.7701, lng: -118.1937 },
            { id: "newyork", name: "New York", country: "USA", lat: 40.6892, lng: -74.0445 },
            { id: "savannah", name: "Savannah", country: "USA", lat: 32.0835, lng: -81.0998 },
            { id: "charleston", name: "Charleston", country: "USA", lat: 32.7767, lng: -79.9311 },
            { id: "miami", name: "Miami", country: "USA", lat: 25.7617, lng: -80.1918 },
            { id: "houston", name: "Houston", country: "USA", lat: 29.7604, lng: -95.3698 },
            { id: "neworleans", name: "New Orleans", country: "USA", lat: 29.9511, lng: -90.0715 },
            { id: "seattle", name: "Seattle", country: "USA", lat: 47.6062, lng: -122.3321 },
            { id: "tacoma", name: "Tacoma", country: "USA", lat: 47.2529, lng: -122.4443 },
            { id: "oakland", name: "Oakland", country: "USA", lat: 37.8044, lng: -122.2712 },
            { id: "portland", name: "Portland", country: "USA", lat: 45.5152, lng: -122.6784 },
            { id: "baltimore", name: "Baltimore", country: "USA", lat: 39.2904, lng: -76.6122 },
            { id: "norfolk", name: "Norfolk", country: "USA", lat: 36.8468, lng: -76.2852 },
            { id: "vancouver", name: "Vancouver", country: "Canada", lat: 49.2827, lng: -123.1207 },
            { id: "montreal", name: "Montreal", country: "Canada", lat: 45.5017, lng: -73.5673 },
            { id: "halifax", name: "Halifax", country: "Canada", lat: 44.6488, lng: -63.5752 },
            { id: "toronto", name: "Toronto", country: "Canada", lat: 43.6532, lng: -79.3832 },
            
            // Central America & Caribbean
            { id: "panama", name: "Panama City", country: "Panama", lat: 9.1011, lng: -79.4028 },
            { id: "colon", name: "Colon", country: "Panama", lat: 9.3549, lng: -79.9009 },
            { id: "veracruz", name: "Veracruz", country: "Mexico", lat: 19.2006, lng: -96.1342 },
            { id: "acapulco", name: "Acapulco", country: "Mexico", lat: 16.8531, lng: -99.8237 },
            { id: "kingston", name: "Kingston", country: "Jamaica", lat: 17.9771, lng: -76.7674 },
            { id: "havana", name: "Havana", country: "Cuba", lat: 23.1136, lng: -82.3666 },
            { id: "sanjuan", name: "San Juan", country: "Puerto Rico", lat: 18.4655, lng: -66.1057 },
            
            // South America Major Ports
            { id: "santos", name: "Santos", country: "Brazil", lat: -23.9608, lng: -46.3331 },
            { id: "rio", name: "Rio de Janeiro", country: "Brazil", lat: -22.9068, lng: -43.1729 },
            { id: "salvador", name: "Salvador", country: "Brazil", lat: -12.9714, lng: -38.5014 },
            { id: "fortaleza", name: "Fortaleza", country: "Brazil", lat: -3.7172, lng: -38.5433 },
            { id: "buenosaires", name: "Buenos Aires", country: "Argentina", lat: -34.6118, lng: -58.3960 },
            { id: "valparaiso", name: "Valparaíso", country: "Chile", lat: -33.0472, lng: -71.6127 },
            { id: "callao", name: "Callao", country: "Peru", lat: -12.0464, lng: -77.1428 },
            { id: "cartagena", name: "Cartagena", country: "Colombia", lat: 10.3932, lng: -75.4832 },
            { id: "barranquilla", name: "Barranquilla", country: "Colombia", lat: 10.9685, lng: -74.7813 },
            { id: "maracaibo", name: "Maracaibo", country: "Venezuela", lat: 10.6666, lng: -71.6124 },
            { id: "laguaira", name: "La Guaira", country: "Venezuela", lat: 10.6010, lng: -66.9326 },
            { id: "georgetown", name: "Georgetown", country: "Guyana", lat: 6.8013, lng: -58.1551 },
            { id: "paramaribo", name: "Paramaribo", country: "Suriname", lat: 5.8520, lng: -55.2038 },
            { id: "montevideo", name: "Montevideo", country: "Uruguay", lat: -34.9011, lng: -56.1645 },
            
            // Africa Major Ports
            { id: "durban", name: "Durban", country: "South Africa", lat: -29.8587, lng: 31.0218 },
            { id: "capetown", name: "Cape Town", country: "South Africa", lat: -33.9249, lng: 18.4241 },
            { id: "portelizabeth", name: "Port Elizabeth", country: "South Africa", lat: -33.9608, lng: 25.6022 },
            { id: "lagos", name: "Lagos", country: "Nigeria", lat: 6.5244, lng: 3.3792 },
            { id: "apapa", name: "Apapa", country: "Nigeria", lat: 6.4474, lng: 3.3595 },
            { id: "alexandria", name: "Alexandria", country: "Egypt", lat: 31.2001, lng: 29.9187 },
            { id: "portsaid", name: "Port Said", country: "Egypt", lat: 31.2565, lng: 32.2841 },
            { id: "suez", name: "Suez", country: "Egypt", lat: 29.9668, lng: 32.5498 },
            { id: "casablanca", name: "Casablanca", country: "Morocco", lat: 33.5731, lng: -7.5898 },
            { id: "tangier", name: "Tangier", country: "Morocco", lat: 35.7595, lng: -5.8340 },
            { id: "tunis", name: "Tunis", country: "Tunisia", lat: 36.8065, lng: 10.1815 },
            { id: "algiers", name: "Algiers", country: "Algeria", lat: 36.7538, lng: 3.0588 },
            { id: "dakar", name: "Dakar", country: "Senegal", lat: 14.7167, lng: -17.4677 },
            { id: "abidjan", name: "Abidjan", country: "Ivory Coast", lat: 5.3600, lng: -4.0083 },
            { id: "accra", name: "Accra", country: "Ghana", lat: 5.6037, lng: -0.1870 },
            { id: "tema", name: "Tema", country: "Ghana", lat: 5.6698, lng: -0.0177 },
            { id: "douala", name: "Douala", country: "Cameroon", lat: 4.0511, lng: 9.7679 },
            { id: "libreville", name: "Libreville", country: "Gabon", lat: 0.4162, lng: 9.4673 },
            { id: "luanda", name: "Luanda", country: "Angola", lat: -8.8390, lng: 13.2894 },
            { id: "maputo", name: "Maputo", country: "Mozambique", lat: -25.9692, lng: 32.5732 },
            { id: "djibouti", name: "Djibouti", country: "Djibouti", lat: 11.8251, lng: 42.5903 },
            { id: "mombasa", name: "Mombasa", country: "Kenya", lat: -4.0435, lng: 39.6682 },
            { id: "daressalaam", name: "Dar es Salaam", country: "Tanzania", lat: -6.7924, lng: 39.2083 }
        ];

        let selectedPorts = [];
        let map;
        let portMarkers = {};

        // Initialize Leaflet map
        function initializeMap() {
            // Create map centered on the world
            map = L.map('worldMap', {
                center: [20, 0],
                zoom: 2,
                minZoom: 2,
                maxZoom: 10,
                worldCopyJump: true
            });

            // Add tile layer - using CartoDB Positron for clean look
            L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
                attribution: '© OpenStreetMap contributors © CARTO',
                subdomains: 'abcd',
                maxZoom: 19
            }).addTo(map);

            // Add port markers
            PORTS.forEach(port => {
                // Create custom HTML marker
                const markerHtml = `<div class="custom-port-marker" data-port-id="${port.id}"></div>`;
                
                const marker = L.marker([port.lat, port.lng], {
                    icon: L.divIcon({
                        html: markerHtml,
                        className: 'custom-marker-container',
                        iconSize: [16, 16],
                        iconAnchor: [8, 8]
                    })
                });

                // Create popup content
                const popupContent = `
                    <div class="port-popup">
                        <h4>${port.name}</h4>
                        <p>${port.country}</p>
                        <button onclick="togglePortSelection('${port.id}')" id="btn-${port.id}">
                            Select Port
                        </button>
                    </div>
                `;
                
                marker.bindPopup(popupContent);
                marker.addTo(map);
                
                // Store marker reference
                portMarkers[port.id] = marker;
                
                // Add click event to marker element
                marker.on('add', function() {
                    const markerElement = marker.getElement().querySelector('.custom-port-marker');
                    if (markerElement) {
                        markerElement.addEventListener('click', () => {
                            togglePortSelection(port.id);
                        });
                    }
                });
            });
        }

        function togglePortSelection(portId) {
            const port = PORTS.find(p => p.id === portId);
            const isSelected = selectedPorts.some(p => p.id === portId);
            
            if (isSelected) {
                selectedPorts = selectedPorts.filter(p => p.id !== portId);
            } else {
                selectedPorts.push(port);
            }
            
            updatePortMarkers();
            updateSelectedPortsDisplay();
            updatePricingCalculator();
        }

        function updatePortMarkers() {
            PORTS.forEach(port => {
                const marker = portMarkers[port.id];
                const isSelected = selectedPorts.some(p => p.id === port.id);
                
                if (marker) {
                    const markerElement = marker.getElement();
                    const markerDiv = markerElement ? markerElement.querySelector('.custom-port-marker') : null;
                    
                    if (markerDiv) {
                        if (isSelected) {
                            markerDiv.classList.add('selected');
                        } else {
                            markerDiv.classList.remove('selected');
                        }
                    }
                    
                    // Update popup button
                    const popup = marker.getPopup();
                    if (popup) {
                        const content = popup.getContent();
                        const newContent = content.replace(
                            /onclick="togglePortSelection\('[^']+'\)"[^>]*>/,
                            `onclick="togglePortSelection('${port.id}')" id="btn-${port.id}" class="${isSelected ? 'selected' : ''}">`
                        ).replace(
                            /Select Port|Remove Port/,
                            isSelected ? 'Remove Port' : 'Select Port'
                        );
                        popup.setContent(newContent);
                    }
                }
            });
        }

        function updateSelectedPortsDisplay() {
            const container = document.getElementById('selectedPorts');
            
            if (selectedPorts.length === 0) {
                container.innerHTML = '<p style="color: #6b7280; font-size: 0.875rem;">Select ports on the map below</p>';
            } else {
                container.innerHTML = selectedPorts.map(port => `
                    <div class="port-badge">
                        ${port.name}, ${port.country}
                        <button class="remove-btn" onclick="removePort('${port.id}')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `).join('');
            }
        }

        function removePort(portId) {
            selectedPorts = selectedPorts.filter(p => p.id !== portId);
            updatePortMarkers();
            updateSelectedPortsDisplay();
            updatePricingCalculator();
        }

        function updatePricingCalculator() {
            const crewCount = document.getElementById('crewCount').value;
            const warning = document.getElementById('portWarning');
            const estimate = document.getElementById('pricingEstimate');
            const detailedBtn = document.getElementById('detailedPricingBtn');
            const summary = document.getElementById('selectedPortsSummary');
            
            // Show/hide port warning
            if (selectedPorts.length === 0) {
                warning.style.display = 'block';
                estimate.style.display = 'none';
                detailedBtn.style.display = 'none';
                summary.style.display = 'none';
            } else {
                warning.style.display = 'none';
                summary.style.display = 'block';
                
                // Update summary
                summary.innerHTML = `
                    <div class="selected-ports-summary">
                        <div class="summary-title">Selected Ports:</div>
                        <div class="ports-grid">
                            ${selectedPorts.map(port => `<div>${port.name}, ${port.country}</div>`).join('')}
                        </div>
                        <div style="margin-top: 0.5rem; font-size: 0.75rem; color: #6b7280;">
                            AVS provides fixed-rate provisioning at all selected ports
                        </div>
                    </div>
                `;
                
                // Calculate and show estimate if crew count is provided
                if (crewCount && parseInt(crewCount) > 0) {
                    showPricingEstimate(parseInt(crewCount));
                    detailedBtn.style.display = 'block';
                } else {
                    estimate.style.display = 'none';
                    detailedBtn.style.display = 'none';
                }
            }
        }

        function showPricingEstimate(crew) {
            const portCount = selectedPorts.length;
            const estimate = document.getElementById('pricingEstimate');
            
            // For smaller operations (less than 10 crew AND 2 or fewer ports), show pricing
            if (crew < 10 && portCount <= 2) {
                const minDailyRate = 9;
                const maxDailyRate = 15;
                const minMonthlyEstimate = (minDailyRate * crew) * 30;
                const maxMonthlyEstimate = (maxDailyRate * crew) * 30;
                
                estimate.innerHTML = `
                    <div class="pricing-estimate">
                        <div class="estimate-header">
                            <i class="fas fa-calculator"></i>
                            Pricing Estimate
                        </div>
                        
                        <div class="estimate-details">
                            <div class="estimate-row">
                                <span>Crew count:</span>
                                <span style="font-weight: 500;">${crew}</span>
                            </div>
                            <div class="estimate-row">
                                <span>Selected ports:</span>
                                <span style="font-weight: 500;">${portCount} port${portCount !== 1 ? 's' : ''}</span>
                            </div>
                            <div class="estimate-row">
                                <span>Monthly estimate:</span>
                                <span style="font-weight: 500;">$${minMonthlyEstimate.toLocaleString()} - $${maxMonthlyEstimate.toLocaleString()}</span>
                            </div>
                        </div>
                        
                        <div class="estimate-price" style="color: #1f2937;">
                            <div class="label">Monthly Price (30 days):</div>
                            <div class="amount" style="font-size: 1.2rem;">
                                $${minMonthlyEstimate.toLocaleString()} - $${maxMonthlyEstimate.toLocaleString()}
                            </div>
                        </div>
                        
                        <div class="estimate-disclaimer">
                            Final pricing subject to specific vessel requirements and service agreement.
                        </div>
                    </div>
                `;
            } else {
                // For larger operations (10+ crew OR 3+ ports), show service ready message without pricing
                estimate.innerHTML = `
                    <div class="pricing-estimate">
                        <div class="estimate-header">
                            <i class="fas fa-check-circle"></i>
                            AVS Provision Supply Ready
                        </div>
                        
                        <div class="estimate-details">
                            <div class="estimate-row">
                                <span>Crew count:</span>
                                <span style="font-weight: 500;">${crew}</span>
                            </div>
                            <div class="estimate-row">
                                <span>Selected ports:</span>
                                <span style="font-weight: 500;">${portCount} port${portCount !== 1 ? 's' : ''}</span>
                            </div>
                            <div class="estimate-row">
                                <span>Service type:</span>
                                <span style="font-weight: 500;">MLC 2006 Compliant</span>
                            </div>
                            <div class="estimate-row">
                                <span>Coverage:</span>
                                <span style="font-weight: 500;">Fixed-rate provisioning available</span>
                            </div>
                        </div>
                        
                        <div class="estimate-price" style="background: #10b981; color: white;">
                            <div class="label">Service Status:</div>
                            <div class="amount" style="font-size: 1.1rem;">
                                ✓ Ready to serve your vessel
                            </div>
                        </div>
                        
                        <div class="estimate-disclaimer">
                            Get detailed pricing and contract terms by requesting a comprehensive quote below.
                        </div>
                    </div>
                `;
            }
            estimate.style.display = 'block';
        }

        // Crew count input handler
        document.getElementById('crewCount').addEventListener('input', updatePricingCalculator);

        // Detailed pricing modal
        function openDetailedModal() {
            // Populate port field with selected ports
            const portField = document.getElementById('portName');
            if (selectedPorts.length > 0) {
                const portNames = selectedPorts.map(p => `${p.name}, ${p.country}`).join('; ');
                portField.value = portNames;
            }
            
            document.getElementById('detailedModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeDetailedModal() {
            document.getElementById('detailedModal').classList.remove('active');
            document.body.style.overflow = '';
            
            // Reset modal content
            document.getElementById('modalContent').style.display = 'block';
            document.getElementById('successContent').style.display = 'none';
            document.getElementById('detailedForm').reset();
        }

        document.getElementById('detailedPricingBtn').addEventListener('click', openDetailedModal);

        // Catering contract modal functions
        function showCateringRequestModal() {
            // Populate port field with selected ports
            const cateringForm = document.getElementById('cateringForm');
            const portField = cateringForm.querySelector('input[name="port"]');
            if (selectedPorts.length > 0) {
                const portNames = selectedPorts.map(p => `${p.name}, ${p.country}`).join('; ');
                portField.value = portNames;
            }
            
            document.getElementById('cateringModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeCateringModal() {
            document.getElementById('cateringModal').classList.remove('active');
            document.body.style.overflow = '';
            
            // Reset modal content
            document.getElementById('cateringModalContent').style.display = 'block';
            document.getElementById('cateringSuccessMessage').style.display = 'none';
            document.getElementById('cateringForm').reset();
        }

        // Helper function to generate UUID
        function generateUUID() {
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                const r = Math.random() * 16 | 0;
                const v = c === 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
        }

        // Detailed Form submission
        document.getElementById('detailedForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<div class="loading"></div> Checking your information...';
            
            const formData = new FormData(this);
            const token = grecaptcha.getResponse();
            
            if (!token) {
                alert('Please complete the reCAPTCHA verification.');
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Quote Request';
                return;
            }
            
            const sessionId = generateUUID();
            
            const payload = {
                name: formData.get('name'),
                company: formData.get('company'),
                email: formData.get('email'),
                phone: formData.get('phone'),
                vessel: formData.get('vessel'),
                port: formData.get('port'),
                message: formData.get('message'),
                requestDate: new Date().toISOString(),
                recaptchaToken: token,
                sessionId: sessionId,
                url: window.location.href
            };
            
            try {
                const response = await fetch('https://avs-cms-5fzbd.ondigitalocean.app/api/quote-requests', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ data: payload })
                });
                
                const result = await response.json();
                
                if (!response.ok) {
                    throw new Error(result?.error?.message || 'Failed to submit.');
                }
                
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Quote Request';
                
                document.getElementById('modalContent').style.display = 'none';
                document.getElementById('successContent').style.display = 'block';
                grecaptcha.reset();
                
            } catch (error) {
                console.error('Submit error:', error);
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Quote Request';
                alert(error.message || 'There was an error submitting your request. Please try again.');
            }
        });

        // Catering form submission
        document.getElementById('cateringForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<div class="loading"></div> Checking your information...';
            
            const formData = new FormData(this);
            const token = grecaptcha.getResponse(1); // Second reCAPTCHA instance
            
            if (!token) {
                alert('Please complete the reCAPTCHA verification.');
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Catering Request';
                return;
            }
            
            const sessionId = generateUUID();
            
            const payload = {
                name: formData.get('name'),
                company: formData.get('company'),
                email: formData.get('email'),
                phone: formData.get('phone'),
                vessel: formData.get('vessel'),
                port: formData.get('port'),
                message: formData.get('message'),
                requestDate: new Date().toISOString(),
                recaptchaToken: token,
                sessionId: sessionId,
                url: window.location.href
            };
            
            try {
                const response = await fetch('https://avs-cms-5fzbd.ondigitalocean.app/api/quote-requests', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ data: payload })
                });
                
                const result = await response.json();
                
                if (!response.ok) {
                    throw new Error(result?.error?.message || 'Failed to submit.');
                }
                
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Catering Request';
                
                document.getElementById('cateringModalContent').style.display = 'none';
                document.getElementById('cateringSuccessMessage').style.display = 'block';
                grecaptcha.reset(1);
                
            } catch (error) {
                console.error('Submit error:', error);
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Catering Request';
                alert(error.message || 'There was an error submitting your request. Please try again.');
            }
        });

        // Close catering modal when clicking outside
        document.getElementById('cateringModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeCateringModal();
            }
        });

        // Close modal when clicking outside
        document.getElementById('detailedModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeDetailedModal();
            }
        });

        // ESC key to close modals
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeDetailedModal();
                closeCateringModal();
            }
        });

        // FAQ Toggle Function
        function toggleFAQ(id) {
            const wrapper = document.querySelector('.landing-page-wrapper');
            const faqItem = document.querySelector(`#faq-${id}`).parentElement;
            const faqAnswer = document.getElementById(`faq-${id}`);
            const isActive = faqAnswer.classList.contains('active');
            
            // Close all other FAQ items
            wrapper.querySelectorAll('.faq-answer.active').forEach(answer => {
                answer.classList.remove('active');
                answer.parentElement.classList.remove('active');
            });
            
            // Toggle current item if it wasn't active
            if (!isActive) {
                faqAnswer.classList.add('active');
                faqItem.classList.add('active');
            }
        }

        // Initialize the application
        document.addEventListener('DOMContentLoaded', function() {
            initializeMap();
            
            // Mobile menu toggle
            const mobileMenuBtn = document.querySelector('.landing-page-wrapper .mobile-menu-btn');
            const navMenu = document.querySelector('.landing-page-wrapper .nav-menu');
            
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
                document.querySelectorAll('.landing-page-wrapper .nav-button').forEach(link => {
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
<!-- Landing Page Wrapper Sonu -->

<?php include 'footer.php'; ?>