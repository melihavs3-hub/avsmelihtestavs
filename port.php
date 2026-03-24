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
        throw new Exception('Port information not found');
    }

    // Title and Meta Data
    $page_title = $data['title'] ?? '';
    $seo_title = $data['seo_title'] ?? $page_title;
    $description = $data['description'] ?? '';
    $canonical = $data['canonical_url'] ?? '';
    $content_md = $data['content'] ?? '';
    $cover = $data['cover']['url'] ?? '';
    $custom_js = $data['custom_js'] ?? '';

    $content_html = (new Parsedown())->text($content_md);

    // Images
    $header_image_url = $data['header_image'][0]['url'] ?? '';
    $main_image_url = $data['main_image'][0]['url'] ?? '';

} catch (Exception $e) {
    header('Location: /areas');
    exit;
}

$title = $page_title;
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
.port-marker {
    background-color: #e74c3c;
    border: 2px solid #ffffff;
    border-radius: 50%;
    width: 12px !important;
    height: 12px !important;
    box-shadow: 0 0 4px rgba(0,0,0,0.5);
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
    <div class="bg-layer" style="background-image: url('/assets/images/banner/banner-13.webp');"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Ship Supply, Provisions & Technical Stores Supply in <?= htmlspecialchars($page_title) ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>Port</li>
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
                    <?php include 'tabs.php'; ?>
                    
                </div>
            </div>
        <!-- Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
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

<?php include 'footer.php'; ?>