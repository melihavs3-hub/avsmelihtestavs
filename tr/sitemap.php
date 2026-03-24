<?php
header('Content-Type: application/xml; charset=utf-8');

// Temel domain, dil dizini hariç
$base_url = "https://www.avsglobalsupply.com";
$language_prefix = "/tr";

// Statik sayfalar
$static_pages = [
    '', // Anasayfa
    '/sirket',
    '/tarihce',
    '/yonetim',
    '/avantaj',
    '/haberler',
    '/partnerler',
    '/kariyer',
    '/surdurulebilirlik',
    '/blog',
    '/iletisim',
    '/nordic',
    '/hizmet-bolgeleri',
    '/yeni-tedarikci',
    '/kvkk',
];

// Dinamik sayfalar
$dynamic_pages = [];

// API URL'leri (TR için)
$services_api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/pages?populate=*&filters[webSites][$eqi]=TR&sort=order:asc';
$blog_api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/articles?filters[webSites][$eqi]=TR';
$news_api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/news-pages?filters[webSites][$eqi]=TR';

// URL normalize edici fonksiyon
function normalize_url_path($canonical_url, $language_prefix) {
    if (!$canonical_url) return null;

    // Protokol ekle
    if (!preg_match('#^https?://#', $canonical_url)) {
        $canonical_url = 'https://' . ltrim($canonical_url, '/');
    }

    // Path'i al
    $url_path = parse_url($canonical_url, PHP_URL_PATH);
    if ($url_path) {
        $cleaned = '/' . ltrim($url_path, '/');

        // Eğer path zaten /tr ile başlıyorsa, tekrar ekleme
        if (strpos($cleaned, $language_prefix . '/') === 0) {
            return $cleaned;
        }

        return $language_prefix . $cleaned;
    }

    return null;
}

// API'den sayfa çekici fonksiyon
function fetch_dynamic_pages($api_url, $language_prefix) {
    $pages = [];

    try {
        $response = file_get_contents($api_url);
        $data = json_decode($response, true)['data'] ?? [];

        foreach ($data as $item) {
            $canonical_url = $item['canonical_url'] ?? '';
            $normalized_path = normalize_url_path($canonical_url, $language_prefix);
            if ($normalized_path) {
                $pages[] = $normalized_path;
            }
        }
    } catch (Exception $e) {}

    return $pages;
}

// Dinamik sayfaları topla
$dynamic_pages = array_merge(
    fetch_dynamic_pages($services_api_url, $language_prefix),
    fetch_dynamic_pages($blog_api_url, $language_prefix),
    fetch_dynamic_pages($news_api_url, $language_prefix)
);

// Tekrarları sil
$dynamic_pages = array_unique($dynamic_pages);

// XML çıktısı
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($static_pages as $page): ?>
    <url>
        <loc><?= htmlspecialchars($base_url . $language_prefix . $page) ?></loc>
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
