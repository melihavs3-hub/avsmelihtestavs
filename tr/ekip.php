<?php
// Yönlendirme yapmadan önce hiçbir çıktı olmadığından emin olun
header("Location: /tr/");
exit;
?>


<?php 
$title = "Ekibimiz - AVS";
$description = "";
$canonical ="https://www.avsglobalsupply.com/tr/ekip";
$eng_link="https://www.avsglobalsupply.com/team";
$tr_link="https://www.avsglobalsupply.com/tr/ekip";
$sri_link="https://www.avssrilanka.com/team";
$gr_link="https://www.avsgreece.gr/team";
include 'header.php';
?>

<!-- page-title -->
        <section class="page-title">
            <div class="bg-layer" style="background-image: url(/assets/images/background/04.webp);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Ekibimiz</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Anasayfa</a></li>
                        <li>Hakkımızda</li>
                        <li>Ekibimiz</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container blog-details sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="content-one">
                                <div class="author-post">
                                    <figure class="author-thumb"><img src="/assets/images/news/thumb-2.webp" alt=""></figure>
                                    <h6>GLOBAL</h6>
									<ul class="post-info clearfix">
										<li>Hızlı</li>
										<li>Etkin</li>
										<li>Güvenilir</li>
										<li>Sürdürülebilir</li>
									</ul>
									</div>
									<h2>Bu sayfa yapım aşamasındadır.</h2>
									<div class="text-box">
										<br>Kısa bir süre içinde yayınlanacaktır.</br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include 'sidebar-about.php'; ?>  
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>

