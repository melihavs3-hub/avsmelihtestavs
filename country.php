<?php
require 'lib/Parsedown.php';

// Get slug from URL path
$slug = $_GET['slug'] ?? '';
$slug = pathinfo($slug, PATHINFO_FILENAME);

$api_url = "https://avs-cms-5fzbd.ondigitalocean.app/api/port-pages/{$slug}";

try {
    $response = file_get_contents($api_url);
    if (!$response) throw new Exception('API response could not be received');

    $data = json_decode($response, true);
    if (!$data || !isset($data)) {
        throw new Exception('Country information not found');
    }

    // Title and Meta Data
    $page_title = $data['title'] ?? '';
    $page_name = $data['page_name'] ?? '';
    $seo_title = $data['seo_title'] ?? $page_title;
    $description = $data['description'] ?? '';
    $canonical = $data['canonical_url'] ?? '';
    $content_md = $data['content'] ?? '';
    $port_tabs_md = $data['porttabs'] ?? '';
    $cover = $data['cover']['url'] ?? '';
    $eng_link = $data['href_en'] ?? '';
    $canonnical = $data['canonical_url'] ?? '';
    $custom_js = $data['custom_js'] ?? '';
    

    $content_html = (new Parsedown())->text($content_md);
    $content_port_tabs = (new Parsedown())->text($port_tabs_md);
    // Images
    $header_image_url = $data['header_image']['url'] ?? '';
    $main_image_url = $data['cover']['url'] ?? '';

} catch (Exception $e) {
    header('Location: /areas');
    exit;
}

$country_port = "https://avs-cms-5fzbd.ondigitalocean.app/api/countries/{$data['country']['documentId']}?populate=ports.port_page";
try {
    $response = file_get_contents($country_port);
    $country = json_decode($response, true);
    if (!$country || !isset($country)) {
        throw new Exception('Country information not found');
    }
} catch (Exception $e) {
    header('Location: /areas');
    exit;
}

include 'header.php';
?>

<!-- Add Leaflet CSS and JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>

<style>

.ports-marker {
        position: relative;
        width: 30px !important;
        height: 40px !important;
        background: transparent;
        border: none;
        box-shadow: none;
    }
.ports-marker::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 30px;
        height: 30px;
        background-image: url('assets/images/logo.webp');
        background-size: 26px; /* Logo biraz daha küçük olsun ki kenarlarda boşluk olsun */
        background-repeat: no-repeat;
        background-position: center;
        border: 2px solid #15558b;
        border-radius: 3px;
        background-color: white; /* Logo için beyaz arka plan */
    }
    .ports-marker::after {
        content: '';
        position: absolute;
        left: 14px;
        top: 28px; /* Sopa biraz daha aşağıdan başlasın */
        width: 2px;
        height: 12px;
        background: #15558b;
        z-index: -1;
    }

    .ports-marker:hover::before {
        transform: scale(1.1);
        border-color: #0A2F5A;
    }

    .ports-marker:hover::after {
        background: #0A2F5A;
    }
.port-popup {
    padding: 10px;
    min-width: 200px;
}

.port-title {
    font-weight: bold;
    margin-bottom: 10px;
    color: #15558d;
}

.port-actions {
    margin-top: 10px;
    text-align: center;
}

.detail-btn {
    display: inline-block;
    padding: 5px 15px;
    background: #15558d;
    color: white;
    text-decoration: none;
    border-radius: 3px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.detail-btn:hover {
    background: #0f3d66;
    color: white;
}
</style>

<!-- Page Title -->
<section class="page-title">
<div class="bg-layer" style="background-image: url(<?= !empty($header_image_url) ? htmlspecialchars($header_image_url) : '/assets/images/banner/banner-13.webp' ?>);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?= htmlspecialchars($page_name) ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>Country</li>
                <li><?= htmlspecialchars($page_title) ?></li>
            </ul>
        </div>
    </div>
</section>
<section class="service-details sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Content -->
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content service-details-page">
                    <?php if ($main_image_url): ?>
                        <p><img src="<?= $main_image_url ?>" alt="<?= htmlspecialchars($page_title) ?>"></p>
                    <?php endif; ?>
                    <?= $content_html ?>
					
					<div class="content-four">
                                <div class="upper-box">
                                    <h3>Extensive Product Range and Lower Costs</h3>
									<p>Your operational success is our commitment; experience the AVS advantage by contacting us today.</p>
									</div>
									<div class="tabs-box">
										<div class="tab-btns tab-buttons clearfix">
											<div class="tab-btn active-btn" data-tab="#tab-1">Reliable & Flexible Services</div>
											<div class="tab-btn" data-tab="#tab-2">Global Network</div>
											<div class="tab-btn" data-tab="#tab-3">Sectors We Serve</div>
											<div class="tab-btn" data-tab="#tab-4">Ports</div>
                                    </div>
                                    <div class="tabs-content">
                                        <div class="tab active-tab" id="tab-1">
                                            <div class="text-box">
											<p>With extensive experience and strong relationships in the maritime industry, AVS provides reliable services. We are always committed to delivering high-quality and dependable solutions to our customers.</p>
											<p>We offer flexible solutions tailored to the unique needs of each customer. AVS develops customized approaches to meet our clients' demands.</p>
										</div>
										</div>
										<div class="tab" id="tab-2">
											<div class="text-box">
												<p>AVS has a vast network serving over 1,500 ports worldwide. This global network enables us to provide fast and efficient service to our customers.</p>
											</div>
										</div>
										<div class="tab" id="tab-3">
											<div class="text-box">
												<h3>Trade and Transport</h3>
												<p>
													<ul>
													  <li><strong>Merchant Vessels</strong></li>
													  <li><strong>Tankers</strong></li>
													  <li><strong>Dry Bulks</strong></li>
													  <li><strong>Liners</strong></li>
													  <li><strong>Platform Supply Vessels</strong></li>
													  <li><strong>Container Ships</strong></li>
													  <li><strong>Ro-Ro Ships (Roll-on/Roll-off)</strong></li>
													</ul>
												</p>
													<h3>Tourism and Passenger Transport</h3>
												<p>
													<ul>
													  <li><strong>Cruises</strong></li>
													  <li><strong>Ferries</strong></li>
													  <li><strong>Yachts</strong></li>
													</ul>
												</p>

													<h3>Energy and Oil Industry</h3>
												<p>
													<ul>
													  <li><strong>Tankers</strong></li>
													  <li><strong>Drilling Vessels</strong></li>
													  <li><strong>Floating Production Storage and Offloading (FPSO)</strong></li>
													  <li><strong>Anchor Handling Tug Supply Vessels (AHTS)</strong></li>
													  <li><strong>Pipe Lay Vessels / Barge</strong></li>
													  <li><strong>Offshore Support Vessels</strong></li>
													  <li><strong>Floating Liquefied Natural Gas (FLNG) Vessels</strong></li>
													</ul>
												</p>

													<h3>Scientific Research and Exploration</h3>
												<p>
													<ul>
													  <li><strong>Seismic Research Vessels</strong></li>
													  <li><strong>Submersibles</strong></li>
													  <li><strong>Jackups</strong></li>
													  <li><strong>Semi Submersibles</strong></li>
													  <li><strong>Research Vessels</strong></li>
													</ul>
												</p>

													<h3>Military and Government Services</h3>
												<p>
													<ul>
													  <li><strong>Government Vessels</strong></li>
													  <li><strong>Patrol Vessels</strong></li>
													  <li><strong>Frigates</strong></li>
													  <li><strong>Submarines</strong></li>
													</ul>
												</p>

													<h3>Environment and Marine Management</h3>
												<p>
													<ul>
													  <li><strong>Dredgers</strong></li>
													  <li><strong>Environmental Research Vessels</strong></li>
													</ul>
												</p>

													<h3>Logistics and Support Services</h3>
												<p>
													<ul>
													  <li><strong>Tenders</strong></li>
													  <li><strong>Multi-Purpose Supply Vessel (MPSV)</strong></li>
													  <li><strong>Ship Managers</strong></li>
													  <li><strong>Salvage Vessels</strong></li>
													  <li><strong>Tugboats</strong></li>
													</ul>
												</p>
											</div>
										</div>
										<div class="tab" id="tab-4">
                                            <div class="text-box">
                                            <?= $content_port_tabs ?>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                </div>
				
            </div>
			
            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
                    <!-- Services Menu -->
                    <div class="sidebar-widget category-widget">
                    <div class="widget-title" style="padding-bottom: 15px;">
                        <h3>Ports We Serve in <?= htmlspecialchars($page_title)?> </h3>
                    </div>
                    <div id="country-map" style="height: 400px;"></div>
                    </div>
                    <div class="quote-box">
<a href="https://rfq.avsglobalsupply.com" target="_blank" rel="noopener noreferrer">
<i class="fas fa-file-invoice"></i>
<span><?= htmlspecialchars($page_title) ?> Quick Quote</span>
</a>
</div>
                    <div class="general-form">
                    <?php include 'generalform.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
body .sidebar-page-container {
    position: relative !important;
    overflow: visible !important;
}

body .sidebar-page-container .auto-container {
    display: flex !important;
    gap: 30px !important;
    align-items: flex-start !important;
}

body .sidebar-page-container .content-column {
    flex: 0 0 66.666667% !important;
    max-width: 66.666667% !important;
}

body .sidebar-page-container .sidebar-column {
    flex: 0 0 33.333333% !important;
    max-width: 33.333333% !important;
    position: relative !important;
}

body .sidebar-page-container .blog-sidebar {
    position: -webkit-sticky !important;
    position: sticky !important;
    top: 100px !important;
    margin-bottom: 30px !important;
    z-index: 10 !important;
}

@media (max-width: 991px) {
    body .sidebar-page-container .auto-container {
        flex-direction: column !important;
    }
    
    body .sidebar-page-container .content-column,
    body .sidebar-page-container .sidebar-column {
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }
    
    body .sidebar-page-container .blog-sidebar {
        position: relative !important;
        top: 0 !important;
        margin-top: 30px !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const countryData = <?php echo json_encode($country['data']); ?>;
    const ports = countryData.ports || [];
    
    console.log('Country Data:', countryData);
    console.log('Ports:', ports);
    
    const map = L.map('country-map');
    
    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '©OpenStreetMap, ©CartoDB'
    }).addTo(map);
    
    // Collect all port coordinates
    const bounds = [];
    ports.forEach(port => {
        if (port && port.lat && port.lng) {
            bounds.push([parseFloat(port.lat), parseFloat(port.lng)]);
        }
    });
    
    // Add port markers
    ports.forEach(port => {
        if (port && port.lat && port.lng) {
            const marker = L.marker([port.lat, port.lng], {
                icon: L.divIcon({
                    className: 'ports-marker',
                    iconSize: [30, 40],
                    iconAnchor: [15, 40],
                    popupAnchor: [0, -42]
                })
            });
            
            marker.addTo(map);
            
            if (port.title) {
                let popupContent = `<div class="port-popup">
                    <div class="port-title">${port.title}</div>`;
                
                if (port.port_page) {
                    popupContent += `
                        <div class="port-actions">
                            <a href="/port/${port.port_page.slug}" class="detail-btn" style="color: #fff;">
                                <i class="fa fa-info-circle"></i>
                                Port Details
                            </a>
                        </div>`;
                }
                
                popupContent += '</div>';
                marker.bindPopup(popupContent);
            }
        }
    });

    // If ports exist, fit the map to their bounds
    if (bounds.length > 0) {
        map.fitBounds(bounds, {
            padding: [50, 50], // Add padding around bounds
            maxZoom: 8 // Prevent too much zoom
        });
    } else {
        // Default view if no ports exist
        map.setView([41.0082, 28.9784], 6);
    }
});
</script>

<?php include 'footer.php'; ?>