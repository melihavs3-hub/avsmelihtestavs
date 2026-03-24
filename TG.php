<?php 
$title = "AVS 3rd Together Stronger Event";
$description = "";
$canonical = "https://www.avsglobalsupply.com/contact";
$eng_link = "https://www.avsglobalsupply.com/contact";
$tr_link = "https://www.avsglobalsupply.com/tr/iletisim";
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "ContactPage",
  "name": "Contact AVS Global Supply",
  "description": "Get in touch with AVS Global Supply for maritime services, technical support, or any other inquiries.",
  "url": "http://www.avsglobalsupply.com/contact",
  "mainEntity": {
    "@type": "Organization",
    "name": "AVS Global Supply",
    "url": "http://www.avsglobalsupply.com",
    "logo": "https://www.avsglobalsupply.com/assets/images/avs-logo-big.webp",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Soganlik Yeni Mah, Pamukkale Sk. No:2, Kartal",
      "addressLocality": "Istanbul",
      "addressRegion": "IST",
      "postalCode": "34880",
      "addressCountry": "TR"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+90-216-591-0849",
      "contactType": "customer service",
      "areaServed": "WW",
      "availableLanguage": ["English", "Turkish"]
    }
  }
}
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Form ve RSVP alanına erişim
 const rsvpYes = document.getElementById("rsvpYes");
    const rsvpNo = document.getElementById("rsvpNo");
    const otherFields = document.querySelectorAll(".additional-fields");
    const rvspNoCls = document.querySelectorAll(".rvspNoCls"); 
    const thankYouMessage = document.getElementById("thankYouMessage");

    // Başlangıçta "No" seçili olduğunu varsayalım ve diğer alanları gizleyelim
    function toggleFields() {
        if (rsvpYes.checked) {
            otherFields.forEach(field => {
                field.style.display = "block";
                // Eğer "Yes" seçildiyse, tüm alanlar zorunlu olmalı
                const inputs = field.querySelectorAll("input, textarea");
                inputs.forEach(input => {
                    input.required = true;
                });

            });
            const thirdDiv = document.getElementById('3rd');
            
            console.log(thirdDiv); // thirdDiv öğesini konsola yazdırarak doğru şekilde erişilip erişilmediğini kontrol edelim
            
            if (thirdDiv) { 
                // Eğer öğe mevcutsa, sınıflarını güncelliyoruz
                thirdDiv.classList.remove('col-lg-12', 'col-md-12'); // 'col-lg-6' ve 'col-md-6' sınıflarını kaldırıyoruz
                thirdDiv.classList.add('col-lg-6', 'col-md-6'); // 'col-lg-12' ve 'col-md-12' sınıflarını ekliyoruz
            } else {
                console.log("Div with id '3rd' not found.");
            }
        } else {
            otherFields.forEach(field => {
                field.style.display = "none";
                // Eğer "No" seçildiyse, sadece Full Name ve Email zorunlu olacak
                const inputs = field.querySelectorAll("input, textarea");
                inputs.forEach(input => {
                    input.required = false;
                });
            });
            document.querySelector('input[name="full_name"]').required = true;
            document.querySelector('input[name="email"]').required = true;
            const thirdDiv = document.getElementById('3rd');
            
    console.log(thirdDiv); // thirdDiv öğesini konsola yazdırarak doğru şekilde erişilip erişilmediğini kontrol edelim
    
    if (thirdDiv) { 
        // Eğer öğe mevcutsa, sınıflarını güncelliyoruz
        thirdDiv.classList.remove('col-lg-6', 'col-md-6'); // 'col-lg-6' ve 'col-md-6' sınıflarını kaldırıyoruz
        thirdDiv.classList.add('col-lg-12', 'col-md-12'); // 'col-lg-12' ve 'col-md-12' sınıflarını ekliyoruz
    } else {
        console.log("Div with id '3rd' not found.");
    }

            if (rsvpNo.checked) {
            rvspNoCls.forEach(field => {
                field.style.display = "block";
            });
        }
        }
    }

    rsvpYes.addEventListener("change", toggleFields);
    rsvpNo.addEventListener("change", toggleFields);
 // Sayfa yüklendiğinde doğru görünümün ayarlanmasını sağla

 const form = document.getElementById("contactForm");
    const submitButton = form.querySelector('button[type="submit"]');
    form.addEventListener("submit", function (e) {
        e.preventDefault();

        if (!document.getElementById("checkbox1").checked) {
            Toastify({
                text: "You must confirm that you have read our privacy policy.",
                duration: 3000,
                backgroundColor: "red",
                close: true,
            }).showToast();
            return;
        }

        submitButton.disabled = true;
        const formData = new FormData(this);
        fetch("https://www.abdulvahitsimsek.com/avs/send.php", {
            method: "POST",
            body: formData,
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    showThankYouMessage();
                } else {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        backgroundColor: "red",
                        close: true,
                    }).showToast();
                    submitButton.disabled = false;
                }
            })
            .catch(() => {
                showThankYouMessage();
            });
    });

    function showThankYouMessage() {
        form.style.display = "none";
        thankYouMessage.style.display = "block";
        startConfetti();
        setTimeout(() => {
        confetti.reset(); // canvas-confetti için reset çağrılır
    }, 5000);
    }

    function startConfetti() {
    confetti({
        particleCount: 3000,
        spread: 700,
        origin: { y: 0.2 }, // Başlangıç konumu
    });
}

});

</script>
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script> 
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<link rel="preload" href="https://www.avsglobalsupply.com/assets/images/logo.webp">
<link rel="preload" href="<?php echo $preload_image; ?>">
<link rel="canonical" href="<?php echo $canonical; ?>"/>
<link rel="alternate" hreflang="en" href="<?php echo $eng_link; ?>"/>
<link rel="alternate" hreflang="tr" href="<?php echo $tr_link; ?>"/>
<link rel="alternate" hreflang="x-default" href="<?php echo $eng_link; ?>" />
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/timeline.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script> -->


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q229YB8DXK"></script>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q229YB8DXK');
</script>
</head>


<!-- page wrapper -->
<body>
	<div id="fb-root" hidden></div>
	<!-- Your customer chat code -->
	<div class="fb-customerchat" attribution=setup_tool page_id="675489079185157" greeting_dialog_display="hide">
	</div>
    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap" style="display: block;">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner">
                            <img  class="spinner" src="assets/images/logo.webp" alt="AVS Logo">
                        </div>
                        <!-- <div class="txt-loading">
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="V" class="letters-loading">
                                V
                            </span>
                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="G" class="letters-loading">
                                G
                            </span>
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="B" class="letters-loading">
                                B
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                        </div> -->
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- sidebar cart item -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-2 xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-3 xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-4 xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-5 xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="https://www.avsglobalsupply.com/"><img src="assets/images/logo.webp" alt="AVS Logo"></a>
                                </div>
                                <div class="content-box">
                                    <h4>About Us</h4>
                                    <p>AVS has led maritime supply, catering, and logistics for 39 years, serving seafarers globally. Our reach spans 1,500+ ports in 126 countries, committed to excellence, innovation, and sustainability. We aim to surpass client expectations, making their challenges our mission.
                                    <p>Partner with AVS, where fast, efficient and reliable maritime solutions is our priority.</p>
                                    <a href="https://www.avsglobalsupply.com/company" class="theme-btn btn-two">About Us</a>
                                </div>
                                <div class="contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li>Soganlik Yeni Mah, Pamukkale Sk. No:2, 34880 Kartal/Istanbul/Turkiye</li>
                                        <li><a href="tel:+902165910849">+90 216 591 0849</a></li>
                                        <li><a href="mailto:info@avsglobalsupply.com">info@avsglobalsupply.com</a></li>
                                    </ul>
                                </div>
                                <ul class="social-box clearfix">
						<li><a href="https://www.linkedin.com/company/avsglobalsupply/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a></li>
						<li><a href="https://www.instagram.com/avsglobalsupply" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/avsglobalshipsupply/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://x.com/AvsGlobalSupply" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-square-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC5RgbAXnzJWoLIN-oydGqQQ" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="outer-container">
                    <ul class="info-list clearfix">
                        <li><a href="https://www.avsglobalsupply.com/nordic">Nordic Hamburg</a></li>
                        <li><a href="https://www.avsglobalsupply.com/areas">Service Areas</a></li>
                        <li><a href="https://www.avsglobalsupply.com/newvendors">New Vendors</a></li>
                    </ul>
                    <ul class="social-links clearfix">
                        <li><h5>Social Connect</h5></li>
						<li><a href="https://www.linkedin.com/company/avsglobalsupply/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a></li>
						<li><a href="https://www.instagram.com/avsglobalsupply" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/avsglobalshipsupply/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://x.com/AvsGlobalSupply" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-square-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC5RgbAXnzJWoLIN-oydGqQQ" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- header-upper -->
            <div class="header-upper">
                <div class="outer-container">
                    <div class="left-column">
                        <figure class="logo-box"><a href="https://www.avsglobalsupply.com/"><img src="assets/images/logo.webp" alt="AVS Logo"></a></figure>
                        <div class="award-box">
                            <div class="award-image"><img src="assets/images/icons/award-1.webp" alt=""></div>
                            <h5>Your global ship supplier <br />at all over the world.</h5>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="support-box">
                            <div class="icon-box"><i class="flaticon-headphone"></i></div>
                            <button id="chatButton"> <h5><a href="#">Have <br />Question?</a></h5></button>
                        </div>
                        <div class="phone"><h3><a href="tel:+902165910849">+90 216 591 0849</a></h3></div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
           
                        </div>
        
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="https://www.avsglobalsupply.com/"><img src="assets/images/logo.webp" alt="AVS Logo"></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                     <li>Soganlik Yeni Mah, Pamukkale Sk. No:2, 34880 Kartal/Istanbul/Turkiye</li>
                     <li><a href="tel:+902165910849">+90 216 591 0849</a></li>
                     <li><a href="mailto:info@avsglobalsupply.com">info@avsglobalsupply.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
						<li><a href="https://www.linkedin.com/company/avsglobalsupply/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a></li>
						<li><a href="https://www.instagram.com/avsglobalsupply" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/avsglobalshipsupply/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://x.com/AvsGlobalSupply" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-square-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC5RgbAXnzJWoLIN-oydGqQQ" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
<!-- Sayfa Başlığı -->
<section class="page-title" style="padding: 40px 0px;">
    <div class="bg-layer" style="background-image: url(assets/images/background/23.webp);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1 style="margin:100px">AVS 3rd Together Stronger Event</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="https://www.avsglobalsupply.com/">Home</a></li>
                <li>AVS 3rd Together Stronger Event</li>
            </ul>
        </div>
    </div>
</section>

<!-- İletişim Formu -->
<section class="contact-style-two">
    <div class="outer-container sec-pad">
        <div class="auto-container">
            <div class="form-inner">
            <div id="thankYouMessage" style="display: none; text-align: center ">
    <h2 style="color:white">Thank you for your response! Your RSVP has been received.</h2>
</div>

                <form id="contactForm" method="POST" action="send.php">
                    <div class="row clearfix">
                        <!-- Form Grupları -->
                        <div id="3rd" class="col-lg-6 col-md-6 col-sm-12 form-group">
    <label>Will you be joining AVS 3rd Together Stronger Event?</label>
    <input type="radio" name="rsvp" value="Yes" id="rsvpYes" required> Yes
    <input type="radio" name="rsvp" value="No" id="rsvpNo" required> No
</div>

<!-- Diğer Alanlar (Bu alanlar yalnızca RSVP Yes seçildiğinde görünsün) -->
<div class="col-lg-6 col-md-6 col-sm-12 form-group additional-fields rvspNoCls" style="display: none;">
    <label>Full Name</label>
    <input type="text" name="full_name" placeholder="Full Name" required>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 form-group additional-fields" style="display: none;">
    <label>Company Name</label>
    <input type="text" name="company_name" placeholder="Company Name">
</div>

<div class="col-lg-6 col-md-6 col-sm-12 form-group additional-fields" style="display: none;">
    <label>Job Title/Designation</label>
    <input type="text" name="job_title" placeholder="Job Title/Designation">
</div>
<div class="col-lg-6 col-md-6 col-sm-12 form-group additional-fields rvspNoCls justify-content-end" style="display: none;">
    <label>Email Address</label>
    <input type="email" name="email" placeholder="Email Address" required>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 form-group additional-fields" style="display: none;">
    <label>Contact Number</label>
    <input type="text" name="contact_number" placeholder="Contact Number">
</div>

<div class="col-lg-6 col-md-6 col-sm-12 form-group additional-fields" style="display: none;">
    <label>Country of Residence</label>
    <input type="text" name="country_residence" placeholder="Country of Residence">
</div>

<div class="col-lg-6 col-md-6 col-sm-12 form-group additional-fields" style="display: none;">
    <label>Additional Guests</label>
    <input type="number" name="additional_guests" placeholder="Number of additional guests">
</div>

<div class="col-lg-6 col-md-6 col-sm-12 form-group additional-fields" style="display: none;">
    <label>Hotel Booking</label>
    <input type="radio" name="hotel_booking" value="Yes"> Yes
    <input type="radio" name="hotel_booking" value="No"> No
</div>

<div class="col-lg-6 col-md-6 col-sm-12 form-group additional-fields" style="display: none;">
    <label>Visa Assistance</label>
    <input type="radio" name="visa_assistance" value="Yes"> Yes
    <input type="radio" name="visa_assistance" value="No"> No
</div>

<div class="col-lg-12 form-group additional-fields" style="display: none;">
    <label>Comments</label>
    <textarea name="comments" placeholder="Write your comments..."></textarea>
</div>

                        <div class="col-lg-12 form-group">
                            <div class="check-box">
                                <input class="check" type="checkbox" id="checkbox1"></input>
                                <label for="checkbox1" >Click here to confirm you have read our <a href="https://www.avsglobalsupply.com/kvkk" target=_blank>privacy policy</a>*</label>
                            </div>
                        </div>

                        <div class="col-lg-12 form-group message-btn">
                            <button class="theme-btn btn-two" type="submit"><span>Submit</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
