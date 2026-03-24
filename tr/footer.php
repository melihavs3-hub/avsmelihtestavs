<style>
    .premium-footer {
        background-color: #f4f7f9;
        font-family: 'Mulish', sans-serif;
        color: #556270;
        position: relative;
        padding-top: 80px;
        margin-top: 60px;
    }

    .newsletter-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(11, 74, 125, 0.08);
        transform: translateY(-100px);
        margin-bottom: -60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 30px;
        border: 1px solid #eef1f5;
    }
    .newsletter-info h3 {
        color: #0b4a7d;
        font-family: 'Urbanist', sans-serif;
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 8px;
    }
    .newsletter-info p {
        margin: 0;
        font-size: 15px;
        color: #6c7a87;
    }
    .newsletter-form {
        flex: 1;
        max-width: 500px;
        display: flex;
        gap: 10px;
        position: relative;
    }
    .newsletter-form input {
        width: 100%;
        padding: 16px 24px;
        border-radius: 50px;
        border: 2px solid #e9ecef;
        background: #f8f9fa;
        outline: none;
        transition: all 0.3s;
        font-family: 'Mulish', sans-serif;
    }
    .newsletter-form input:focus {
        border-color: #0b4a7d;
        background: #ffffff;
    }
    .newsletter-form button {
        position: absolute;
        right: 6px;
        top: 6px;
        bottom: 6px;
        padding: 0 30px;
        border-radius: 50px;
        background: #0b4a7d;
        color: #fff;
        border: none;
        font-weight: 700;
        cursor: pointer;
        transition: transform 0.2s, background 0.3s;
    }
    .newsletter-form button:hover {
        background: #083861;
        transform: scale(0.95);
    }

    .footer-main-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1.5fr;
        gap: 40px;
        padding-bottom: 50px;
    }
    .footer-col h4 {
        font-family: 'Urbanist', sans-serif;
        color: #333c4a;
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 24px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .footer-links li a {
        color: #6c7a87;
        text-decoration: none;
        display: inline-block;
        padding: 8px 0;
        transition: color 0.2s, transform 0.2s;
        font-size: 15px;
    }
    .footer-links li a:hover {
        color: #0b4a7d;
        transform: translateX(5px);
        font-weight: 600;
    }

    .brand-col img {
        max-width: 160px;
        margin-bottom: 20px;
    }
    .brand-col p {
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 24px;
        max-width: 300px;
    }
    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 15px;
        color: #6c7a87;
        font-size: 14px;
    }
    .contact-item i {
        color: #0b4a7d;
        font-size: 18px;
        margin-top: 3px;
    }

    .footer-bottom-wrapper {
        border-top: 1px solid #e1e5eb;
        padding: 30px 0;
        display: flex;
        flex-direction: column;
        gap: 30px;
    }
    .iso-logos {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
        opacity: 0.6;
        transition: opacity 0.3s;
    }
    .iso-logos:hover {
        opacity: 1;
    }
    .iso-logos img {
        height: 40px;
        filter: grayscale(100%);
        transition: filter 0.3s;
    }
    .iso-logos img:hover {
        filter: grayscale(0%);
    }

    .footer-copyright {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 14px;
    }
    .legal-links {
        display: flex;
        gap: 20px;
    }
    .legal-links a {
        color: #6c7a87;
        text-decoration: none;
    }
    .legal-links a:hover {
        color: #0b4a7d;
    }

    .fab-to-top {
        position: fixed;
        bottom: 30px;
        left: 30px;
        width: 50px;
        height: 50px;
        background-color: #0b4a7d;
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        box-shadow: 0 10px 20px rgba(11, 74, 125, 0.3);
        border: none;
        cursor: pointer;
        z-index: 999;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .fab-to-top.visible {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .fab-to-top:hover {
        background-color: #083861;
        transform: translateY(-5px);
    }

    @media (max-width: 991px) {
        .newsletter-card {
            flex-direction: column;
            text-align: center;
            padding: 30px 20px;
            transform: translateY(-60px);
            margin-bottom: -20px;
        }
        .newsletter-form button {
            position: static;
            width: 100%;
            padding: 15px;
            margin-top: 10px;
            border-radius: 12px;
        }
        .newsletter-form input {
            border-radius: 12px;
        }
        .newsletter-form {
            flex-direction: column;
            width: 100%;
            gap: 0;
        }
        
        .footer-main-grid {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .brand-col {
            text-align: center;
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-col h4 {
            margin: 0;
            padding: 20px 0;
            border-bottom: 1px solid #e1e5eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }
        .footer-col h4::after {
            content: '+';
            font-size: 24px;
            font-weight: 300;
            color: #0b4a7d;
            transition: transform 0.3s;
        }
        .footer-col.active h4::after {
            transform: rotate(45deg);
        }
        .footer-links {
            display: none;
            padding: 15px 0;
            border-bottom: 1px solid #e1e5eb;
        }
        
        .footer-copyright {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }
        .iso-logos img {
            height: 35px;
        }
        .fab-to-top {
            bottom: 20px;
            left: 20px;
        }
    }
</style>

<footer class="premium-footer">
    <div class="container auto-container">
        
        <div class="newsletter-card">
            <div class="newsletter-info">
                <h3>Gelişmelerden Haberdar Olun</h3>
                <p>En güncel denizcilik haberleri ve AVS güncellemeleri doğrudan e-posta adresinize gelsin.</p>
            </div>
            <form id="newsletter-form" class="newsletter-form validate">
                <input type="email" name="email" placeholder="İş e-posta adresiniz..." required id="mce-EMAIL">
                <button type="submit" id="mc-embedded-subscribe">Abone Ol</button>
            </form>
        </div>

        <div class="footer-main-grid">
            
            <div class="brand-col">
                <a href="/"><img src="assets/images/logo.webp" alt="AVS Global Logo"></a>
                <p>126 ülkede 1500'den fazla liman ağıyla dünya çapında faaliyet gösteren küresel gemi tedarikçiniz.</p>
                
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Soğanlık Yeni Mah, Pamukkale Sk. No:2, 34880 <br> Kartal / İstanbul / Türkiye</span>
                </div>
            </div>

            <div class="footer-col accordion-col">
                <h4>Kurumsal</h4>
                <ul class="footer-links">
                    <li><a href="https://www.avsglobalsupply.com/company">Hakkımızda</a></li>
                    <li><a href="https://www.avsglobalsupply.com/timeline">Tarihçe</a></li>
                    <li><a href="https://www.avsglobalsupply.com/management">Yönetim</a></li>
                    <li><a href="https://www.avsglobalsupply.com/advantage">AVS Ayrıcalığı</a></li>
                    <li><a href="https://www.avsglobalsupply.com/glossary">Denizcilik Sözlüğü</a></li>
                </ul>
            </div>

            <div class="footer-col accordion-col">
                <h4>Hizmetlerimiz</h4>
                <ul class="footer-links">
                    <?php if (!empty($serviceSlugs) && is_array($serviceSlugs)): ?>
                        <?php foreach (array_slice($serviceSlugs, 0, 6) as $service): ?>
                            <li><a href="/services/<?php echo $service['slug']; ?>"><?php echo $service['page_name']; ?></a></li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li><a href="#">Gemi Tedariki</a></li>
                        <li><a href="#">Catering Hizmetleri</a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="footer-col accordion-col">
                <h4>Son Güncellemeler</h4>
                <ul class="footer-links">
                    <li><a href="https://www.youtube.com/watch?v=MNta7NWHTpc" target="_blank"><i class="fab fa-youtube text-danger me-2"></i> Karadaki Şeflerimizden Kusursuz Öğle Yemeği</a></li>
                    <li><a href="https://www.youtube.com/watch?v=e27edJ8Dsjc" target="_blank"><i class="fab fa-youtube text-danger me-2"></i> DS Kanuni Ekibinin Ziyareti</a></li>
                    <li style="margin-top: 15px;">
                        <a href="https://www.youtube.com/@avsglobalsupply" target="_blank" style="color:#0b4a7d; font-weight: 700;">
                            Tüm Videoları İzle <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom-wrapper">
            <?php
                $current_page = basename($_SERVER['REQUEST_URI'], '.php');
                $is_index = ($current_page == '/' || $current_page == '' || $current_page == 'index' || strpos($_SERVER['REQUEST_URI'], 'index.php') !== false || $_SERVER['REQUEST_URI'] == '/');
                if (!$is_index): 
            ?>
            <div class="iso-logos">
                <a href="https://impa.net/" target="_blank"><img src="assets/images/iso/impa.png" alt="IMPA"></a>
                <a href="https://shipsupply.org/" target="_blank"><img src="assets/images/iso/issa.jpg" alt="ISSA"></a>
                <a href="https://www.bimco.org/" target="_blank"><img src="assets/images/iso/bimco.jpg" alt="BIMCO"></a>
                <a href="https://unglobalcompact.org/" target="_blank"><img src="assets/images/iso/un global.png" alt="UN Global Compact"></a>
                <a href="https://www.turssa.org/" target="_blank"><img src="assets/images/iso/turssa.jpg" alt="TURSSA"></a>
            </div>
            <?php endif; ?>

            <div class="footer-copyright">
                <div>© <?php echo date("Y"); ?> <strong style="color: #0b4a7d;">AVS Global Supply</strong>. Tüm hakları saklıdır.</div>
                <div class="legal-links">
                    <a href="https://www.avsglobalsupply.com/partners">İş Ortakları</a>
                    <a href="https://www.avsglobalsupply.com/career">Kariyer</a>
                    <a href="https://www.avsglobalsupply.com/contact">İletişim</a>
                    <a href="https://www.avsglobalsupply.com/kvkk">KVKK / Gizlilik Politikası</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<button class="fab-to-top" id="backToTopFab" aria-label="Yukarı Çık">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const fab = document.getElementById("backToTopFab");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 400) {
                fab.classList.add("visible");
            } else {
                fab.classList.remove("visible");
            }
        });
        fab.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });

        const accordions = document.querySelectorAll('.accordion-col h4');
        
        accordions.forEach(acc => {
            acc.addEventListener('click', function() {
                if(window.innerWidth <= 991) {
                    const parent = this.parentElement;
                    const list = parent.querySelector('.footer-links');
                    
                    parent.classList.toggle('active');
                    
                    if (parent.classList.contains('active')) {
                        list.style.display = 'block';
                    } else {
                        list.style.display = 'none';
                    }
                }
            });
        });

        window.addEventListener('resize', () => {
            if(window.innerWidth > 991) {
                document.querySelectorAll('.footer-links').forEach(list => list.style.display = 'block');
                document.querySelectorAll('.accordion-col').forEach(col => col.classList.remove('active'));
            } else {
                document.querySelectorAll('.accordion-col').forEach(col => {
                    if(!col.classList.contains('active')) {
                        col.querySelector('.footer-links').style.display = 'none';
                    }
                });
            }
        });
    });
</script>

</div> <script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/validation.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/lazysizes.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery.lettering.min.js"></script>
<script src="assets/js/jquery.circleType.js"></script>
<script src="assets/js/bxslider.js"></script>

<script src="assets/js/script.js"></script>

</body>
</html>
