<?php
require 'lib/Parsedown.php';

// Slug alma
$slug = $_GET['slug'] ?? '';
$slug = pathinfo($slug, PATHINFO_FILENAME);

// API URL'leri
$query = [
    'populate' => 'category,cover,author.avatar',
    'webSites' => 'EN', // website filtresini kullanıyoruz
];

// URL'yi doğru şekilde yapılandırmak için http_build_query kullanıyoruz.
$api_url = "https://avs-cms-5fzbd.ondigitalocean.app/api/news-pages/$slug?" . http_build_query($query);

$api_url_categories = "https://avs-cms-5fzbd.ondigitalocean.app/api/news-categories?populate=news_pages";
// API'den içerik verisi çek
$article = file_get_contents($api_url);
$articleData = $article ? json_decode($article, true) : null;

// API'den kategori verisi çek
$categories = @file_get_contents($api_url_categories);
$categoryData = $categories ? json_decode($categories, true)['data'] ?? [] : [];

// Hata kontrolü
if (!$articleData || !isset($articleData['title'])) {
    http_response_code(404);
    include 'error.php';
    exit;
}
// Veriyi ata
$title        = $articleData['title'];
$seo_title    = $articleData['seo_title'] ?? $title;
$description  = $articleData['description'] ?? '';
$content_md   = $articleData['content'] ?? '';
$content_html = (new Parsedown())->text($content_md);
$canonical    = $articleData['canonical_url'] ?? "https://www.avsglobalsupply.com/news/$slug";
$author       = $articleData['author']['name'] ?? 'Bilinmiyor';
$cover       = $articleData['cover']['url'] ?? 'assets/images/news/thumb-2.jpg';
$header_image = $articleData['header_image']['url'] ?? 'assets/images/background/13.webp';
$authorImage  = $articleData['author']['avatar']['url'];
$authorBio   = $articleData['author']['bio'] ?? 'Bilinmiyor';
$createdAt    = new DateTime($articleData['createdAt']);
$category     = $articleData['category']['name'] ?? 'Kategori Yok';
$eng_link = $articleData['href_en'] ?? '';
$tr_link  = $articleData['href_tr'] ?? '';
$sri_link = $articleData['href_sri'] ?? '';
$gr_link  = $articleData['href_gr'] ?? '';
$form_cheked = $articleData['showForm'] ??'';
$publish_date = $articleData['publish_date'] ?? '';
$custom_js    = $articleData['custom_js'] ?? null;
$formattedDate = !empty($publish_date)
    ? (new DateTime($publish_date))->format('d M Y H:i')
    : $createdAt->format('d M Y H:i');

$querypost = [
    'pagination[page]' => 1,
    'pagination[pageSize]' => 3,
    'populate' => '*', // Burada sadece virgül ile ayırıyoruz.
    'filters[webSites][$eq]' => 'EN',
    'sort' => 'createdAt:desc', // Son eklenenler en üstte görünsün
];

if (!empty($filters)) {
    $querypost['filters[category][name][$eq]'] = $filters;
}

// URL'yi doğru şekilde yapılandırmak için http_build_query kullanıyoruz.
$api_url_post = 'https://avs-cms-5fzbd.ondigitalocean.app/api/news-pages?' . http_build_query($querypost);

try {
    $responsepost = file_get_contents($api_url_post);
    if (!$responsepost) throw new Exception('API yanıtı alınamadı');
    $datapost = json_decode($responsepost, true);
    if (json_last_error() !== JSON_ERROR_NONE) throw new Exception('JSON decode hatası');
} catch (Exception $e) {
    error_log($e->getMessage());
    $datapost = ['data' => [], 'meta' => ['pagination' => ['page' => 1, 'pageCount' => 1]]];
}
?>
<?php include 'header.php'; ?>

<style>
    .text-box h3 { margin-top: 23px; }
    .blog-image p img {
        border-radius: 30px;
        width: 100%;
        margin: 25px 0;
    }
</style>

<!-- Başlık -->
<section class="page-title">
    <div class="bg-layer" style="background-image: url(<?php echo $header_image ?>);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?= htmlspecialchars($title) ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>News</li>
                <li><?= htmlspecialchars($title) ?></li>
            </ul>
        </div>
    </div>
</section>

<!-- İçerik -->
<section class="sidebar-page-container blog-details sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- İçerik -->
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-content ">
                    <div class="content-one service-details-page">
                        <div class="author-post">
                            <figure class="author-thumb"><img src="assets/images/news/thumb-2.jpg" alt=""></figure>
                            <h6><?= htmlspecialchars($category) ?></h6>
                            <ul class="post-info clearfix">
                                <span>Date:</span> <?= $formattedDate ?></li></li>
                                <li><span>Author:</span> <?= htmlspecialchars($author) ?></li>
                            </ul>
                        </div>
                        <h2><?= htmlspecialchars($title) ?></h2>
                  
                        <div class="text-box blog-image">
                        <p>
                            <img src="<?php echo $cover ?>" alt="">
                        </p>    
                        <?= $content_html ?>
                    </div>
                    </div>

                    <!-- Yazar kutusu -->
                    <div class="author-box">
                        <figure class="author-thumb"><img src=<?php echo $authorImage ?>  alt=""></figure>
                        <h6>Published by</h6>
                        <h3><?= htmlspecialchars($author) ?></h3>
                        <p><?= htmlspecialchars($authorBio) ?>.</p>
                        <h5><a href="blog.php">All Posts</a></h5>
                    </div>

                    <!-- Geri butonu -->
                    <div class="post-nav-btn">
                        <div class="btn-box">
                            <a href="blog.php"><span>← Back to News</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12">
                <div class="blog-sidebar">
                    <!-- Kategoriler -->
                   

                    <!-- Popüler Yazılar (Statik örnek) -->
                    <div class="sidebar-widget post-widget">
                        <div class="widget-title"><h3>Popular Posts</h3></div>
                        <div class="post-inner">
                            <?php foreach ($datapost['data'] as $post): ?>
                            <div class="post">
                                    <figure class="post-thumb"><a href="#"><img src="<?= $post['cover']['url'] ?>" alt=""></a></figure>
                                    <h6><?= htmlspecialchars($post['category']['name'] ?? '') ?></h6>
                                    <h4><a href="/news-detail/<?= $post['slug'] ?>"><?= htmlspecialchars($post['title']) ?></a></h4>
                                </div>
                                <?php endforeach; ?>
                            
                        </div>
                    </div>
                </div>
                <?php if ($form_cheked): ?>
                    <div class="general-form">
                    <?php include 'generalform.php'; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>




<?php include 'footer.php'; ?>
