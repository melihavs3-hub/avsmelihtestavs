<?php
$query = [
    'pagination[page]' => $page,
    'pagination[pageSize]' => 3,
    'populate' => '*', // Burada sadece virgül ile ayırıyoruz.
    'filters[webSites][$eq]' => 'TR',
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

<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar">

                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Hakkımızda</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li>
                                            <a href="https://www.avsglobalsupply.com/tr/sirket">Şirket</a>
                                            <div class="line"></div>
                                            <span>1</span>
                                        </li>
                                        <li>
                                            <a href="https://www.avsglobalsupply.com/tr/tarihce">Tarihce</a>
                                            <div class="line"></div>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <a href="https://www.avsglobalsupply.com/tr/yonetim">Yönetim</a>
                                            <div class="line"></div>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <a href="https://www.avsglobalsupply.com/tr/avantaj">AVS&nbsp;Avantajları</a>
                                            <div class="line"></div>
                                            <span>4</span>
                                        </li>
										<li>
                                            <a href="https://www.avsglobalsupply.com/tr/haberler">Haberler</a>
                                            <div class="line"></div>
                                            <span>5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>Haberler</h3>
                                </div>
                                <div class="post-inner">
                                <?php foreach ($data['data'] as $post): ?>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="/tr/haber-detay/<?php echo $post['slug']?>"><img src="<?php echo $post['cover']['url']?>" alt=""></a></figure>
                                        <h6><?php echo $post['category']['name'] ??'' ?></h6>
                                        <h4><a href="/tr/haber-detay/<?php echo $post['slug']?>"><?php echo $post['title']?></a></h4>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="sidebar-widget tags-widget">
							
                            </div>
                        </div>             
                    </div>