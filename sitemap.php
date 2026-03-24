<?php
header('Content-Type: application/xml; charset=utf-8');

$base_url = "https://www.avsglobalsupply.com";

// Statik sayfalar
$static_pages = [
    '/company',
    '/timeline',
    '/management',
    '/advantage',
    '/news',
    '/partners',
    '/career',
    '/sustainability',
    '/blog',
    '/contact',
    '/nordic',
    '/areas',
    '/newvendors',
    '/kvkk',
];

// Dinamik sayfalar
$dynamic_pages = [];

// API URL'leri
$services_api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/pages?populate=*&filters[webSites][$eqi]=EN&sort=order:asc';
$portpage_api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/port-pages?populate=*';
$blog_api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/articles?filters[webSites][$eqi]=EN';
$news_api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/news-pages?filters[webSites][$eqi]=EN';

// URL normalize edici fonksiyon
function normalize_url_path($canonical_url, $base_url) {
    if (!$canonical_url) return null;

    if (!preg_match('#^https?://#', $canonical_url)) {
        $canonical_url = 'https://' . ltrim($canonical_url, '/');
    }

    $url_path = parse_url($canonical_url, PHP_URL_PATH);
    if ($url_path) {
        return '/' . ltrim($url_path, '/');
    }

    return null;
}

// Strapi API sayfalama destekli veri çekme fonksiyonu
function fetch_dynamic_pages($api_url, $base_url) {
    $pages = [];
    $page = 1;
    $pageSize = 100; // API izin veriyorsa daha yüksek olabilir

    while (true) {
        $paged_url = $api_url . "&pagination[page]={$page}&pagination[pageSize]={$pageSize}";
        try {
            $response = file_get_contents($paged_url);
            $json = json_decode($response, true);

            $data = $json['data'] ?? [];
            foreach ($data as $item) {
                $canonical_url = $item['canonical_url'] ?? '';
                $normalized_path = normalize_url_path($canonical_url, $base_url);
                if ($normalized_path) {
                    $pages[] = $normalized_path;
                }
            }

            $meta = $json['meta']['pagination'] ?? [];
            if (empty($meta) || $page >= $meta['pageCount']) {
                break; // Tüm sayfalar alındı
            }

            $page++;

        } catch (Exception $e) {
            break; // API çağrısı başarısızsa dur
        }
    }

    return $pages;
}

// Dinamik sayfaları topla
$dynamic_pages = array_merge(
    fetch_dynamic_pages($services_api_url, $base_url),
    fetch_dynamic_pages($portpage_api_url, $base_url),
    fetch_dynamic_pages($blog_api_url, $base_url),
    fetch_dynamic_pages($news_api_url, $base_url)
);

// Tekrarları kaldır
$dynamic_pages = array_unique($dynamic_pages);

// XML çıktısı
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
        <loc>https://www.avsglobalsupply.com</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
<?php foreach ($static_pages as $page): ?>
    <url>
        <loc><?= htmlspecialchars($base_url . $page) ?></loc>
        <changefreq>weekly</changefreq>
        <priority><?= $page === '' ? '1.0' : '0.8' ?></priority>
    </url>
<?php endforeach; ?>

<?php foreach ($dynamic_pages as $page): ?>
    <url>
        <loc><?= htmlspecialchars($base_url . $page) ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
<?php endforeach; ?>
</urlset>
