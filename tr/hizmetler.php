<?php
require 'lib/Parsedown.php';

// === SLUG Al ===
$slug = $_GET['slug'] ?? '';
$slug = pathinfo($slug, PATHINFO_FILENAME);
if (empty($slug)) {
    http_response_code(404);
    include 'error.php';
    exit;
}
// === API URL ===
$api_url = "https://avs-cms-5fzbd.ondigitalocean.app/api/pages/$slug?populate=*&filters[webSites][\$eq]=TR";

try {
    $response = file_get_contents($api_url);
    if (!$response) throw new Exception('API yanıtı alınamadı');

    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) throw new Exception('JSON decode hatası');
    $page = $data['data'] ?? [];

    // Başlık ve Meta
    $page_title     = $page['title'] ?? '';
    $seo_title      = $page['seo_title'] ?? $page_title;
    $description    = $page['description'] ?? '';
    $canonical      = $page['canonical_url'] ?? '';
    $custom_js      = $page['custom_js'] ?? '';
    $website_name   = $page['webSites'] ?? '';
    $content_md     = $page['content'] ?? '';
    $content_html   = (new Parsedown())->text($content_md);

    // Dil Linkleri
    $eng_link = $page['href_en'] ?? '';
    $tr_link  = $page['href_tr'] ?? '';
    $sri_link = $page['href_sri'] ?? '';
    $gr_link  = $page['href_gr'] ?? '';

    // Görseller
    $header_image_url = $page['header_image'][0]['url'] ?? '';
    $main_image_url   = $page['main_image'][0]['url'] ?? '';

} catch (Exception $e) {
    error_log('Sayfa API Hatası: ' . $e->getMessage());
    // Boş değerlerle devam et
    $page_title = $seo_title = $description = $canonical = $custom_js = '';
    include 'error.php';
    exit;
}
include 'header.php';
?>

<style>
.text-box h3 { margin-top: 23px; }
</style>

<!-- Sayfa Başlığı -->
<section class="page-title">
    <div class="bg-layer" style="background-image: url(<?= $header_image_url ?>);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?= htmlspecialchars($page_title) ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>Hizmetler</li>
                <li><?= htmlspecialchars($page_title) ?></li>
            </ul>
        </div>
    </div>
</section>

<!-- Hizmet Detayları -->
<section class="service-details sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- İçerik -->
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content service-details-page">
                    <?php if ($main_image_url): ?>
                        <p><img src="<?= $main_image_url ?>" alt="<?= htmlspecialchars($page_title) ?>"></p>
                    <?php endif; ?>
                    <?= $content_html ?>
                    <?php include 'tabs.php'; ?>
                </div>
                <div class="general-form">
                
                    </div>
            </div>
        
            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
                    <!-- Hizmetler Menüsü -->
                    <div class="sidebar-widget category-widget">
                        <ul class="category-list clearfix">
                            <?php if (!empty($serviceSlugs)): ?>
                                <?php foreach ($serviceSlugs as $service): ?>
                                    <?php
                                        $service_slug = $service['slug'] ?? '';
                                        $service_title = $service['title'] ?? '';
                                        $active_class = $service_slug === $slug ? 'current' : '';
                                    ?>
                                    <li>
                                        <a href="/tr/hizmetler/<?= $service_slug ?>" class="<?= $active_class ?>">
                                            <span><?= htmlspecialchars($service_title) ?></span>
                                            <i class="flaticon-diagonal-arrow"></i>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li><a href="#">No services available</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <!-- Broşürler -->
                    <div class="download-widget">
                        <ul class="download-list clearfix">
                            <?php
                            $downloads = [
                                ['icon' => 'avs_2024-pdf', 'label' => '2025 Brochure', 'file' => 'AVS Global Ship Supply.pdf'],
                                ['icon' => 'avs_jis_dinvalves-pdf', 'label' => 'JIS & DIN Valves', 'file' => 'avs_jis_dinvalves.pdf'],
                                ['icon' => 'avs_marine_rubber_spareparts-pdf', 'label' => 'Marine Rubber & S. P.', 'file' => 'avs_marine_rubber_spareparts.pdf'],
                                ['icon' => 'avsropes-pdf', 'label' => 'Ropes', 'file' => 'avsropes.pdf'],
                            ];
                            foreach ($downloads as $d): ?>
                                <li>
                                    <div class="icon"><i class="<?= $d['icon'] ?>"></i></div>
                                    <h5><?= $d['label'] ?></h5>
                                    <a href="/assets/files/<?= $d['file'] ?>" target="_blank">
                                        <button type="button"><i class="flaticon-download"></i></button>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="general-form">
                    <?php include 'generalform.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>
