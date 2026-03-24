<?php
// Yönlendirme yapmadan önce hiçbir çıktı olmadığından emin olun
header("Location: /");
exit;
?>

<?php 
$title = "Our Team - AVS";
$description = "";
$canonical ="https://www.avsglobalsupply.com/team";
$eng_link="https://www.avsglobalsupply.com/team";
$tr_link="https://www.avsglobalsupply.com/tr/ekip";
$sri_link="https://www.avssrilanka.com/team";
$gr_link="https://www.avsgreece.gr/team";
include 'header.php';
?>
<style>

<style>
  /* Mobil ve tablet cihazlar için stil kuralları */
  @media only screen and (max-width: 768px) {
    .content-one {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    .inner-box {
      width: 80% !important;
      margin-right: 0 !important;
      margin-bottom: 20px;
    }
    .content-one > div {
      float: none !important;
      margin-top: 20px !important;
    }
  }

  /* 769px ve üstü ekran boyutları için stil kuralları (masaüstü) */
  @media only screen and (min-width: 769px) {
    .inner-box {
      width: 22%;
      margin-right: 20px;
      float: left;
    }
    .content-one > div {
      display: block;
      float: left;
      margin-top: 35px;
    }
  }

  .content-one {
    margin-top: 35px;
  }

  .image-box img {
    max-width: 100%;
    height: auto;
  }

  .lower-content {
    text-align: center;
    margin-top: 20px;
  }

  .lower-content h3 {
    font-size: 22px;
    line-height: 32px;
  }

  .lower-content p {
    text-align: center;
  }
</style>


</style>

<!-- page-title -->
        <section class="page-title">
            <div class="bg-layer" style="background-image: url(assets/images/background/04.webp);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Our Team</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li>About</li>
                        <li>Our Team</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->

       <section class="sidebar-page-container blog-details sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="content-one">
                                <h2>This page is under construction.</h2>
                                <div class="text-box">
                                    <br>It will be published as soon as possible.</br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar">
 
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li>
                                            <a href="https://www.avsglobalsupply.com/company">The&nbsp;Company</a>
                                            <div class="line"></div>
                                            <span>1</span>
                                        </li>
                                        <li>
                                            <a href="https://www.avsglobalsupply.com/timeline">Timeline</a>
                                            <div class="line"></div>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <a href="https://www.avsglobalsupply.com/management">Management</a>
                                            <div class="line"></div>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <a href="https://www.avsglobalsupply.com/advantage">The&nbsp;AVS&nbsp;Advantage</a>
                                            <div class="line"></div>
                                            <span>4</span>
                                        </li>
										<li>
                                            <a href="https://www.avsglobalsupply.com/team">Our&nbsp;Team</a>
                                            <div class="line"></div>
                                            <span>5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>News</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="https://www.7deniz.net/avs-pendik-belediyesinin-duzenledigi-kadinlar-gunu-etkinligine-katildi" rel="nofollow"><img src="assets/images/news/post01.webp" alt=""></a></figure>
                                        <h6>News</h6>
                                        <h4><a href="https://www.7deniz.net/avs-pendik-belediyesinin-duzenledigi-kadinlar-gunu-etkinligine-katildi" rel="nofollow">AVS, Pendik Belediyesi'nin düzenlediği Kadınlar Günü etkinliğine katıldı.</a></h4>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="https://www.7deniz.net/tobb-turkiye-denizcilik-meclisi-toplantisi-yapildi" rel="nofollow"><img src="assets/images/news/post02.webp" alt=""></a></figure>
                                        <h6>News</h6>
                                        <h4><a href="https://www.7deniz.net/tobb-turkiye-denizcilik-meclisi-toplantisi-yapildi" rel="nofollow">Abdülvahit Şimşek TOBB Türkiye Denizcilik Meclisi toplantısına katıldı.</a></h4>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="https://www.denizhaber.com/avs-65-issada-denizcilik-dunyasinin-liderleriyle-bulustu" rel="nofollow"><img src="assets/images/news/post03.webp" alt=""></a></figure>
                                        <h6>News</h6>
                                        <h4><a href="https://www.denizhaber.com/avs-65-issada-denizcilik-dunyasinin-liderleriyle-bulustu" rel="nofollow">AVS, 65. ISSA’da Denizcilik Dünyasının Liderleriyle Buluştu.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget tags-widget">
							
                            </div>
                        </div>             
                    </div>
                </div>
            </div>
        </section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>

