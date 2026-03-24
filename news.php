<?php
require 'lib/Parsedown.php';

$title = "News";
$seo_title = "News";
$description = "";
$canonical = "https://www.avsglobalsupply.com/news";
$eng_link = "https://www.avsglobalsupply.com/news";
$tr_link  = "https://www.avsglobalsupply.com/tr/haberler";
$sri_link = "https://www.avssrilanka.com/news";
$gr_link  = "https://www.avsgreece.gr/news";

include 'header.php';

$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$filters = $_GET['filters'] ?? '';

$query = [
    'pagination[page]' => $page,
    'pagination[pageSize]' => 9,
    'populate' => '*', // Burada sadece virgül ile ayırıyoruz.
    'filters[webSites][$eq]' => 'EN',
    'sort' => 'createdAt:desc', // Son eklenenler en üstte görünsün
];

if (!empty($filters)) {
    $query['filters[category][name][$eq]'] = $filters;
}

// URL'yi doğru şekilde yapılandırmak için http_build_query kullanıyoruz.
$api_url = 'https://avs-cms-5fzbd.ondigitalocean.app/api/news-pages?' . http_build_query($query);

try {
    $response = file_get_contents($api_url);
    if (!$response)
        throw new Exception('API yanıtı alınamadı');
    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE)
        throw new Exception('JSON decode hatası');
} catch (Exception $e) {
    error_log($e->getMessage());
    $data = ['data' => [], 'meta' => ['pagination' => ['page' => 1, 'pageCount' => 1]]];
}
?>

<style>
    .text-box h3 {
        margin-top: 23px;
    }
</style>

<!-- Sayfa Başlığı -->
<section class="page-title">
    <div class="bg-layer" style="background-image: url(assets/images/background/13.webp);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>News</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>News</li>
            </ul>
        </div>
    </div>
</section>

<!-- News Grid -->
<section class="blog-grid sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <?php foreach ($data['data'] as $post): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="upper-box">
                                <span class="category"><?= htmlspecialchars($post['category']['name'] ?? '') ?></span>
                                <ul class="post-info clearfix">
                                <?php
                                    $rawDate = !empty($post['publish_date']) ? $post['publish_date'] : $post['createdAt'];
                                    $dateObj = new DateTime($rawDate, new DateTimeZone('UTC'));
                                    $dateObj->setTimezone(new DateTimeZone('Europe/Istanbul'));
                                    ?>
                                    <li><span>On</span> <?= $dateObj->format('M d, Y H:i') ?></li>
                                    <li><span>By</span>
                                        <?= htmlspecialchars($post['author']['name'] ?? 'Yazar Bilinmiyor') ?></li>
                                </ul>
                            </div>
                            <div class="image-box">
                                <?php if (!empty($post['cover']['url'])): ?>
                                    <figure class="image">
                                        <a href="news-detail/<?= $post['slug'] ?>">
                                            <img src="<?= $post['cover']['url'] ?>"
                                                alt="<?= htmlspecialchars($post['title']) ?>">
                                        </a>
                                    </figure>
                                    <div class="view-btn">
                                        <a href="<?= $post['cover']['url'] ?>" class="lightbox-image" data-fancybox="gallery">
                                            <i class="flaticon-zoom-in"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="lower-box">
                                <h3><a href="news-detail/<?= $post['slug'] ?>"><?= htmlspecialchars($post['title']) ?></a>
                                </h3>
                                <p><?= htmlspecialchars($post['description'] ?? '') ?></p>
                                <div class="link">
                                    <a href="news-detail/<?= $post['slug'] ?>"><span>Explore More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <?php
        $pagination = $data['meta']['pagination'];
        $current = $pagination['page'];
        $total = $pagination['pageCount'];
        ?>
        <div class="pagination-wrapper centred">
            <ul class="pagination clearfix">
                <?php if ($current > 1): ?>
                    <li class="prev-btn">
                        <a href="news.php?page=<?= $current - 1 ?>&filters=<?= urlencode($filters) ?>">
                            <i class="flaticon-right-chevron"></i> Prev Page
                        </a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total; $i++): ?>
                    <li class="count-page">
                        <a href="news.php?page=<?= $i ?>&filters=<?= urlencode($filters) ?>"
                            class="<?= $i === $current ? 'current' : '' ?>">
                            <span><?= str_pad($i, 2, '0', STR_PAD_LEFT) ?></span>
                        </a>
                    </li>
                <?php endfor; ?>

                <?php if ($current < $total): ?>
                    <li class="next-btn">
                        <a href="news.php?page=<?= $current + 1 ?>&filters=<?= urlencode($filters) ?>">
                            Next Page <i class="flaticon-right-chevron"></i>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>