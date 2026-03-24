<?php 
$title = "Denizcilik Sözlüğü - AVS";
$description = "";
$canonical ="https://www.avsglobalsupply.com/glossary";
$eng_link="https://www.avsglobalsupply.com/glossary";
$tr_link="https://www.avsglobalsupply.com/tr/sozluk";
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
  #search {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            xfont-size: 16px;
			border: solid 1px;
			border-radius: 10px;
        }
        .term {
			margin-bottom: 26px;
    border-bottom: solid 1px #000000;
	column-count: 2;
        }
        .term{
            margin: 0;
            font-size: 18px;
			font-weight: bold;
			width: 25%;
			color:black;
        }
        .term p {
            margin: 5px 0 0;
            xfont-size: 14px;
        }
		tr{    line-height: 50px;}
        .hidden {
            display: none;
        }
        .alphabet-buttons {
            margin-bottom: 20px;
        }
		.description{border-bottom: solid 1px #000000;color:black;}
        .alphabet-buttons button {
            margin-right: 5px;
            padding: 10px;
            cursor: pointer;
            xfont-size: 16px;
			    border: solid 1px #000000;
				border-radius: 10px;
        }
		.letter-group{margin-top:40px;}
		
	table{width:100%;}
</style>

<section class="page-title">
            <div class="bg-layer" style="background-image: url(/assets/images/background/04.webp);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Denizcilik Sözlüğü</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Anasayfa</a></li>
                        <li>Denizcilik Sözlüğü</li>
                    </ul>
                </div>
            </div>
        </section>

<section class="sidebar-page-container blog-details sec-pad" style="    padding: 50px 0 50px 0;">
<div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side" style="width:100% !important;">

    <input type="text" id="search" placeholder="Search term...">

    <!-- Alfabetik butonlar -->
    <div class="alphabet-buttons">
        <button data-letter="all">All</button>
        <button data-letter="A">A</button>
        <button data-letter="B">B</button>
        <button data-letter="C">C</button>
        <button data-letter="D">D</button>
        <button data-letter="E">E</button>
        <button data-letter="F">F</button>
        <button data-letter="G">G</button>
        <button data-letter="H">H</button>
        <button data-letter="I">I</button>
        <button data-letter="J">J</button>
        <button data-letter="K">K</button>
        <button data-letter="L">L</button>
        <button data-letter="M">M</button>
        <button data-letter="N">N</button>
        <button data-letter="O">O</button>
        <button data-letter="P">P</button>
        <button data-letter="Q">Q</button>
        <button data-letter="R">R</button>
        <button data-letter="S">S</button>
        <button data-letter="T">T</button>
        <button data-letter="U">U</button>
        <button data-letter="V">V</button>
        <button data-letter="W">W</button>
        <button data-letter="X">X</button>
        <button data-letter="Y">Y</button>
        <button data-letter="Z">Z</button>
    </div>

    <div id="terms">
    <div class="letter-group" data-letter="A">
        <h2>A</h2>
        <table>
            <tr>
                <td class="term" data-term="Açık Alan">Açık Alan</td>
                <td class="description">Denizde, karaya yakın, açık ve düz bir bölge.</td>
            </tr>
            <tr>
                <td class="term" data-term="Açık Deniz">Açık Deniz</td>
                <td class="description">Kara parçasından uzak, açık su alanı.</td>
            </tr>
            <tr>
                <td class="term" data-term="Açık Kasa">Açık Kasa</td>
                <td class="description">Kapağı olmayan veya üstü açık yük taşıma bölümü.</td>
            </tr>
            <tr>
                <td class="term" data-term="Ağır Yük">Ağır Yük</td>
                <td class="description">Taşınması zor olan, büyük ve ağır yükler.</td>
            </tr>
            <tr>
                <td class="term" data-term="Ağaç Yük">Ağaç Yük</td>
                <td class="description">Deniz taşımacılığında kullanılan ağaç veya odun yüklü gemiler.</td>
            </tr>
            <tr>
                <td class="term" data-term="Ayrıcalıklı Liman">Ayrıcalıklı Liman</td>
                <td class="description">Özel izinler veya ayrıcalıklarla kullanılan liman.</td>
            </tr>
            <tr>
                <td class="term" data-term="Aydınlatma Feneri">Aydınlatma Feneri</td>
                <td class="description">Denizde yön bulma amacıyla kullanılan ışık kaynağı.</td>
            </tr>
            <tr>
                <td class="term" data-term="Ayakta Yüzen">Ayakta Yüzen</td>
                <td class="description">Suda durabilen ve yüzebilen nesne veya kişi.</td>
            </tr>
            <tr>
                <td class="term" data-term="Ağır Yük Kaldırma">Ağır Yük Kaldırma</td>
                <td class="description">Yüksek ağırlık kapasitesine sahip ekipmanla yapılan kaldırma işlemi.</td>
            </tr>
            <tr>
                <td class="term" data-term="Ayrılma Manivela">Ayrılma Manivela</td>
                <td class="description">Gemi ya da teknelerde, ayrılma işlemlerini yapmak için kullanılan kol.</td>
            </tr>
        </table>
    </div>
	<div class="letter-group" data-letter="B">
    <h2>B</h2>
    <table>
        <tr>
            <td class="term" data-term="Büyük Kasa">Büyük Kasa</td>
            <td class="description">Yüksek kapasiteli yük taşıma bölümü.</td>
        </tr>
        <tr>
            <td class="term" data-term="Bileşen Yük">Bileşen Yük</td>
            <td class="description">Parçalardan oluşan ve bir araya getirilerek kullanılan yük.</td>
        </tr>
        <tr>
            <td class="term" data-term="Bükülme">Bükülme</td>
            <td class="description">Geminin belirli bir yönde eğilmesi veya deformasyonu.</td>
        </tr>
        <tr>
            <td class="term" data-term="Başüstü">Başüstü</td>
            <td class="description">Gemi veya teknede, baş tarafına yakın üst bölüm.</td>
        </tr>
        <tr>
            <td class="term" data-term="Buhar Motoru">Buhar Motoru</td>
            <td class="description">Buhar gücü ile çalışan motor tipi.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="C">
    <h2>C</h2>
    <table>
        <tr>
            <td class="term" data-term="Cam Kasa">Cam Kasa</td>
            <td class="description">Cam malzemeden yapılan yük taşıma bölümü.</td>
        </tr>
        <tr>
            <td class="term" data-term="Cephane">Cephane</td>
            <td class="description">Askeri kullanıma yönelik mühimmat ve silahlar.</td>
        </tr>
        <tr>
            <td class="term" data-term="Cilt">Cilt</td>
            <td class="description">Bir kitabın ya da dokümanın kapak ve sayfalarını koruyan dış yüzey.</td>
        </tr>
        <tr>
            <td class="term" data-term="Çapraz Yük">Çapraz Yük</td>
            <td class="description">Gemide çapraz olarak yerleştirilen yük.</td>
        </tr>
        <tr>
            <td class="term" data-term="Cihaz">Cihaz</td>
            <td class="description">Belirli bir işlevi yerine getirmek için kullanılan teknik ekipman.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="D">
    <h2>D</h2>
    <table>
        <tr>
            <td class="term" data-term="Dalgıç">Dalgıç</td>
            <td class="description">Su altında çalışan veya su altına dalan kişi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Dorsal">Dorsal</td>
            <td class="description">Sırtla ilgili veya sırt bölgesindeki şeyler.</td>
        </tr>
        <tr>
            <td class="term" data-term="Dönüş Yolu">Dönüş Yolu</td>
            <td class="description">Gemi veya teknenin geri dönmek için kullandığı rota.</td>
        </tr>
        <tr>
            <td class="term" data-term="Dalgaların Ölçülmesi">Dalgaların Ölçülmesi</td>
            <td class="description">Denizdeki dalgaların yüksekliğini ve şiddetini belirleme işlemi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Demirleme">Demirleme</td>
            <td class="description">Gemi veya teknenin sabit bir noktada kalmasını sağlamak için demir atma işlemi.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="E">
    <h2>E</h2>
    <table>
        <tr>
            <td class="term" data-term="Envanter">Envanter</td>
            <td class="description">Bir gemide bulunan eşyaların ve yüklerin listesi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ekim">Ekim</td>
            <td class="description">Denizde toprak veya diğer materyalleri yerleştirme işlemi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Etkileşim">Etkileşim</td>
            <td class="description">Gemi veya tekne ile çevre arasındaki ilişki ve etkiler.</td>
        </tr>
        <tr>
            <td class="term" data-term="Eğirme">Eğirme</td>
            <td class="description">İplik veya iplik benzeri materyallerin bükülerek oluşturulması.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ekspres">Ekspres</td>
            <td class="description">Hızlı ve doğrudan teslimat yapan taşıma yöntemi.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="F">
    <h2>F</h2>
    <table>
        <tr>
            <td class="term" data-term="Fırtına">Fırtına</td>
            <td class="description">Şiddetli rüzgar ve kötü hava koşulları ile karakterize edilen hava durumu.</td>
        </tr>
        <tr>
            <td class="term" data-term="Fren">Fren</td>
            <td class="description">Gemi veya araç hızını azaltmak için kullanılan mekanizma.</td>
        </tr>
        <tr>
            <td class="term" data-term="Fırtına İle Mücadele">Fırtına İle Mücadele</td>
            <td class="description">Fırtına sırasında gemiyi güvenli bir şekilde koruma yöntemleri.</td>
        </tr>
        <tr>
            <td class="term" data-term="Fırtına Dalgası">Fırtına Dalgası</td>
            <td class="description">Şiddetli fırtına nedeniyle oluşan büyük ve tehlikeli dalgalar.</td>
        </tr>
        <tr>
            <td class="term" data-term="Fırtına Kapakları">Fırtına Kapakları</td>
            <td class="description">Gemi üzerinde fırtına sırasında su girmesini önlemek için kullanılan kapaklar.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="G">
    <h2>G</h2>
    <table>
        <tr>
            <td class="term" data-term="Gemi">Gemi</td>
            <td class="description">Suda hareket eden büyük taşıma aracı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Gövde">Gövde</td>
            <td class="description">Bir geminin ana yapısal kısmı, suyun altında kalan bölümü.</td>
        </tr>
        <tr>
            <td class="term" data-term="Güverte">Güverte</td>
            <td class="description">Bir geminin üst yüzeyi, yürüyüş yolları ve açık alanlar.</td>
        </tr>
        <tr>
            <td class="term" data-term="Geri Vites">Geri Vites</td>
            <td class="description">Gemi veya motorlu araçların geri hareket etmesini sağlayan vites.</td>
        </tr>
        <tr>
            <td class="term" data-term="Güvenlik">Güvenlik</td>
            <td class="description">Gemideki personelin ve yükün korunmasını sağlayan önlemler.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="H">
    <h2>H</h2>
    <table>
        <tr>
            <td class="term" data-term="Halka">Halka</td>
            <td class="description">Gemi veya teknede çeşitli amaçlarla kullanılan yuvarlak metal parça.</td>
        </tr>
        <tr>
            <td class="term" data-term="Hava Alma">Hava Alma</td>
            <td class="description">Gemide havalandırma ve oksijen sağlama işlemi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Hız">Hız</td>
            <td class="description">Bir geminin su üzerindeki hareket hızını belirten ölçü.</td>
        </tr>
        <tr>
            <td class="term" data-term="Halter">Halter</td>
            <td class="description">Gemiye veya tekneye bağlı olarak kullanılan bir tür zincir veya halat.</td>
        </tr>
        <tr>
            <td class="term" data-term="Havalandırma">Havalandırma</td>
            <td class="description">Geminin iç kısmının havalandırılmasını sağlayan sistemler.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="I">
    <h2>I</h2>
    <table>
        <tr>
            <td class="term" data-term="Islak">Islak</td>
            <td class="description">Suya maruz kalmış veya nemli olan yüzeyler.</td>
        </tr>
        <tr>
            <td class="term" data-term="İskele">İskele</td>
            <td class="description">Gemi veya teknelerin yanaşabileceği ve yükleme-boşaltma yapabileceği yapı.</td>
        </tr>
        <tr>
            <td class="term" data-term="İç Kapasite">İç Kapasite</td>
            <td class="description">Bir geminin iç kısmında bulunan kullanılabilir alan.</td>
        </tr>
        <tr>
            <td class="term" data-term="İşletme">İşletme</td>
            <td class="description">Bir geminin yönetilmesi ve işletilmesi ile ilgili süreçler.</td>
        </tr>
        <tr>
            <td class="term" data-term="İç Yüzey">İç Yüzey</td>
            <td class="description">Geminin iç kısmında bulunan yüzeyler ve kaplamalar.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="İ">
    <h2>İ</h2>
    <table>
        <tr>
            <td class="term" data-term="İskorpit">İskorpit</td>
            <td class="description">Deniz ortamında yaşayan, dikenli ve zehirli bir balık türü.</td>
        </tr>
        <tr>
            <td class="term" data-term="İskele">İskele</td>
            <td class="description">Gemi veya teknelerin yanaşabileceği ve yükleme-boşaltma yapabileceği yapı.</td>
        </tr>
        <tr>
            <td class="term" data-term="İç Yüzey">İç Yüzey</td>
            <td class="description">Geminin iç kısmında bulunan yüzeyler ve kaplamalar.</td>
        </tr>
        <tr>
            <td class="term" data-term="İşletme">İşletme</td>
            <td class="description">Bir geminin yönetilmesi ve işletilmesi ile ilgili süreçler.</td>
        </tr>
        <tr>
            <td class="term" data-term="İç Kapasite">İç Kapasite</td>
            <td class="description">Bir geminin iç kısmında bulunan kullanılabilir alan.</td>
        </tr>
    </table>
</div>

<div class="letter-group" data-letter="J">
    <h2>J</h2>
    <table>
        <tr>
            <td class="term" data-term="Jeneratör">Jeneratör</td>
            <td class="description">Elektrik üretiminde kullanılan makine.</td>
        </tr>
        <tr>
            <td class="term" data-term="Jib">Jib</td>
            <td class="description">Yelkenli teknelerde ön tarafa çekilen yelken türü.</td>
        </tr>
        <tr>
            <td class="term" data-term="Jant">Jant</td>
            <td class="description">Gemi veya teknelerin tekerleklerinde kullanılan parça.</td>
        </tr>
        <tr>
            <td class="term" data-term="Jenerator">Jenerator</td>
            <td class="description">Enerji üretiminde kullanılan cihaz.</td>
        </tr>
        <tr>
            <td class="term" data-term="Jelatin">Jelatin</td>
            <td class="description">Gemi içinde kullanılan çeşitli kaplama ve destek malzemesi.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="K">
    <h2>K</h2>
    <table>
        <tr>
            <td class="term" data-term="Kıç">Kıç</td>
            <td class="description">Gemi veya teknenin arka kısmı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Kurtarma Botu">Kurtarma Botu</td>
            <td class="description">Acil durumlarda kullanmak üzere taşınan küçük bot.</td>
        </tr>
        <tr>
            <td class="term" data-term="Köprüüstü">Köprüüstü</td>
            <td class="description">Gemi üzerindeki komuta ve kontrol alanı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Kabin">Kabin</td>
            <td class="description">Gemi veya teknelerde, mürettebatın dinlenme veya uyuma alanı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Karina">Karina</td>
            <td class="description">Geminin su altı kısmı, suyun altında kalan bölüm.</td>
        </tr>
    </table>
</div>

<div class="letter-group" data-letter="L">
    <h2>L</h2>
    <table>
        <tr>
            <td class="term" data-term="Liman">Liman</td>
            <td class="description">Gemi veya teknelerin yanaşabileceği ve karaya çıkabileceği su kenarı bölgesi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Liman Yükleme">Liman Yükleme</td>
            <td class="description">Gemiye yükleme işleminin yapıldığı liman bölgesi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Lambalı">Lambalı</td>
            <td class="description">Gemi üzerinde yön göstermek için kullanılan ışıklı işaret.</td>
        </tr>
        <tr>
            <td class="term" data-term="Lifeboat">Lifeboat</td>
            <td class="description">Acil durumlarda kullanılan küçük bot.</td>
        </tr>
        <tr>
            <td class="term" data-term="Lodos">Lodos</td>
            <td class="description">Güneybatı yönünden esen rüzgar.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="M">
    <h2>M</h2>
    <table>
        <tr>
            <td class="term" data-term="Meydani">Meydani</td>
            <td class="description">Gemi veya tekne tarafından kullanılan deniz alanı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Makarna">Makarna</td>
            <td class="description">Gemiyle yapılan uzun mesafe seyahatleri tanımlayan terim.</td>
        </tr>
        <tr>
            <td class="term" data-term="Mast">Mast</td>
            <td class="description">Yelkenlerin ve direklerin bağlı olduğu dikey direk.</td>
        </tr>
        <tr>
            <td class="term" data-term="Manivela">Manivela</td>
            <td class="description">Gemi makinelerinde kullanılan döner kol.</td>
        </tr>
        <tr>
            <td class="term" data-term="Marine">Marine</td>
            <td class="description">Denizle ilgili veya deniz ortamında kullanılan terim.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="N">
    <h2>N</h2>
    <table>
        <tr>
            <td class="term" data-term="Navigasyon">Navigasyon</td>
            <td class="description">Gemi veya teknenin yön bulma ve rota belirleme süreci.</td>
        </tr>
        <tr>
            <td class="term" data-term="Nitelik">Nitelik</td>
            <td class="description">Gemi veya teknenin sahip olduğu özellikler.</td>
        </tr>
        <tr>
            <td class="term" data-term="Netlik">Netlik</td>
            <td class="description">Görüntü veya görüş açısının netliği.</td>
        </tr>
        <tr>
            <td class="term" data-term="Noktalar">Noktalar</td>
            <td class="description">Harita veya pusula üzerindeki belirli referans noktaları.</td>
        </tr>
        <tr>
            <td class="term" data-term="Nöbet">Nöbet</td>
            <td class="description">Gemi mürettebatının belirli bir zaman diliminde gözetleme yapma görevi.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="O">
    <h2>O</h2>
    <table>
        <tr>
            <td class="term" data-term="Omuz">Omuz</td>
            <td class="description">Gemi üzerindeki geniş ve yüksek alan, genellikle kıç kısmında bulunur.</td>
        </tr>
        <tr>
            <td class="term" data-term="Oda">Oda</td>
            <td class="description">Gemi üzerindeki özel alan veya mürettebat bölmesi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Oyna">Oyna</td>
            <td class="description">Gemi veya tekne üzerinde hareket etme veya değiştirme eylemi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Okyanus">Okyanus</td>
            <td class="description">Dünyanın büyük su kütlesi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Orta">Orta</td>
            <td class="description">Gemi veya teknenin merkezi kısmı.</td>
        </tr>
    </table>
</div>

<div class="letter-group" data-letter="Ö">
    <h2>Ö</h2>
    <table>
        <tr>
            <td class="term" data-term="Ön Güverte">Ön Güverte</td>
            <td class="description">Gemi veya teknenin ön kısmındaki açık alan.</td>
        </tr>
        <tr>
            <td class="term" data-term="Özdeş">Özdeş</td>
            <td class="description">Birbirine çok benzeyen veya aynı olan.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ölçüm">Ölçüm</td>
            <td class="description">Bir nesnenin boyutlarını veya özelliklerini belirleme işlemi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Örtü">Örtü</td>
            <td class="description">Bir şeyi kaplayan veya koruyan malzeme.</td>
        </tr>
        <tr>
            <td class="term" data-term="Öncelik">Öncelik</td>
            <td class="description">Bir şeyin diğerlerinden önce gelmesi durumu.</td>
        </tr>
    </table>
</div>

<div class="letter-group" data-letter="P">
    <h2>P</h2>
    <table>
        <tr>
            <td class="term" data-term="Pruva">Pruva</td>
            <td class="description">Geminin ön kısmı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Pupa">Pupa</td>
            <td class="description">Geminin arka kısmı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Pervane">Pervane</td>
            <td class="description">Gemi veya tekneyi hareket ettiren döner parça.</td>
        </tr>
        <tr>
            <td class="term" data-term="Parka">Parka</td>
            <td class="description">Denizcilerin giydiği kalın ceket veya mont.</td>
        </tr>
        <tr>
            <td class="term" data-term="Pilot">Pilot</td>
            <td class="description">Gemi veya uçağı yönlendiren kişi.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="R">
    <h2>R</h2>
    <table>
        <tr>
            <td class="term" data-term="Rüzgar">Rüzgar</td>
            <td class="description">Havanın hareketi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Rota">Rota</td>
            <td class="description">Bir geminin veya teknenin izlediği yol.</td>
        </tr>
        <tr>
            <td class="term" data-term="Römorkör">Römorkör</td>
            <td class="description">Diğer gemileri çekmek veya yönlendirmek için kullanılan özel gemi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Rıhtım">Rıhtım</td>
            <td class="description">Gemilerin yanaşabileceği ve yük boşaltabileceği yapı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Renk">Renk</td>
            <td class="description">Gemi üzerindeki görsel özellikler ve işaretler.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="S">
    <h2>S</h2>
    <table>
        <tr>
            <td class="term" data-term="Sail">Sail</td>
            <td class="description">Yelken, bir gemiyi rüzgarla hareket ettiren büyük kumaş parçası.</td>
        </tr>
        <tr>
            <td class="term" data-term="Sancak">Sancak</td>
            <td class="description">Geminin sağ tarafı (göğe bakıldığında).</td>
        </tr>
        <tr>
            <td class="term" data-term="Sarkaç">Sarkaç</td>
            <td class="description">Gemi üzerinde yatay hareket sağlayan düzenek.</td>
        </tr>
        <tr>
            <td class="term" data-term="Sualtı">Sualtı</td>
            <td class="description">Deniz yüzeyinin altındaki bölge.</td>
        </tr>
        <tr>
            <td class="term" data-term="Sürüklenme">Sürüklenme</td>
            <td class="description">Bir geminin rüzgar veya akıntılar tarafından yön değiştirmesi.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="Ş">
    <h2>Ş</h2>
    <table>
        <tr>
            <td class="term" data-term="Şamandıra">Şamandıra</td>
            <td class="description">Suyu yüzeyde tutmak için kullanılan işaretleme aracı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Şaft">Şaft</td>
            <td class="description">Gemi motorundan güç alan ve pervaneyi döndüren döner mil.</td>
        </tr>
        <tr>
            <td class="term" data-term="Şiddet">Şiddet</td>
            <td class="description">Bir şeyin güçlü veya yoğun olma derecesi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Şamandır">Şamandır</td>
            <td class="description">Suda yüzen veya yüzeydeki işaretleme aracı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Şuurlu">Şuurlu</td>
            <td class="description">Farkında veya bilinçli olmak durumu.</td>
        </tr>
    </table>
</div>

<div class="letter-group" data-letter="T">
    <h2>T</h2>
    <table>
        <tr>
            <td class="term" data-term="Tuzak">Tuzak</td>
            <td class="description">Denizciler tarafından kurulan, gemi veya denizciyi korumak için kullanılan düzenek.</td>
        </tr>
        <tr>
            <td class="term" data-term="Tekne">Tekne</td>
            <td class="description">Küçük boyutlu bir gemi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Tuz">Tuz</td>
            <td class="description">Deniz suyunun içinde bulunan mineral.</td>
        </tr>
        <tr>
            <td class="term" data-term="Tali">Tali</td>
            <td class="description">Ana halatın veya ipliğin bağlı olduğu yardımcı halat veya iplik.</td>
        </tr>
        <tr>
            <td class="term" data-term="Tersane">Tersane</td>
            <td class="description">Gemi inşa edilen veya onarılan yer.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="U">
    <h2>U</h2>
    <table>
        <tr>
            <td class="term" data-term="Uygulama">Uygulama</td>
            <td class="description">Bir plan veya yöntemi kullanma veya gerçekleştirme işlemi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Uzunluk">Uzunluk</td>
            <td class="description">Bir nesnenin uzun olan boyutu veya mesafe.</td>
        </tr>
        <tr>
            <td class="term" data-term="Uygun">Uygun</td>
            <td class="description">Bir şeyin belirli bir durum veya amaç için uygun olması.</td>
        </tr>
        <tr>
            <td class="term" data-term="Uçak">Uçak</td>
            <td class="description">Havada hareket edebilen motorlu taşıt aracı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Uygunluk">Uygunluk</td>
            <td class="description">Bir şeyin belirli bir standart veya gereksinime uygun olma durumu.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="Ü">
    <h2>Ü</h2>
    <table>
        <tr>
            <td class="term" data-term="Üçgen Yelken">Üçgen Yelken</td>
            <td class="description">Gemi veya botlarda kullanılan üçgen şeklindeki yelken türü.</td>
        </tr>
        <tr>
            <td class="term" data-term="Üfleme">Üfleme</td>
            <td class="description">Rüzgarın etkisiyle denizde oluşan dalga hareketi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Üzerinde Seyir">Üzerinde Seyir</td>
            <td class="description">Bir geminin belirli bir rota üzerinde hareket etmesi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Üçgen Güverte">Üçgen Güverte</td>
            <td class="description">Gemi veya botlarda bulunan, üçgen biçiminde tasarlanmış güverte kısmı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ümit Burnu">Ümit Burnu</td>
            <td class="description">Bir geminin belirli bir limana ulaşmak için geçtiği önemli deniz noktası.</td>
        </tr>
    </table>
</div>

<div class="letter-group" data-letter="V">
    <h2>V</h2>
    <table>
        <tr>
            <td class="term" data-term="Vardiya">Vardiya</td>
            <td class="description">Bir işte veya görevde belirli bir süre boyunca çalışmak için belirlenen zaman dilimi.</td>
        </tr>
        <tr>
            <td class="term" data-term="Verim">Verim</td>
            <td class="description">Bir şeyin ne kadar etkili veya verimli çalıştığını gösteren ölçü.</td>
        </tr>
        <tr>
            <td class="term" data-term="Vites">Vites</td>
            <td class="description">Araçlarda hız değişimini sağlayan mekanizma.</td>
        </tr>
        <tr>
            <td class="term" data-term="Vagon">Vagon</td>
            <td class="description">Demiryollarında yük veya yolcu taşımak için kullanılan araç.</td>
        </tr>
        <tr>
            <td class="term" data-term="Varlık">Varlık</td>
            <td class="description">Bir kişinin sahip olduğu mal veya mülk.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="Y">
    <h2>Y</h2>
    <table>
        <tr>
            <td class="term" data-term="Yük">Yük</td>
            <td class="description">Taşınması gereken veya taşınan şeyler.</td>
        </tr>
        <tr>
            <td class="term" data-term="Yelken">Yelken</td>
            <td class="description">Gemi veya tekneye rüzgarla güç veren kumaş parçası.</td>
        </tr>
        <tr>
            <td class="term" data-term="Yüzey">Yüzey</td>
            <td class="description">Bir nesnenin dış kısmı veya görünür kısmı.</td>
        </tr>
        <tr>
            <td class="term" data-term="Yarış">Yarış</td>
            <td class="description">İki veya daha fazla kişinin veya aracın hız yarışına girme durumu.</td>
        </tr>
        <tr>
            <td class="term" data-term="Yön">Yön</td>
            <td class="description">Bir nesnenin hareket ettiği veya bulunduğu yön.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="Z">
    <h2>Z</h2>
    <table>
        <tr>
            <td class="term" data-term="Zincir">Zincir</td>
            <td class="description">Birbirine bağlı halkalardan oluşan metal parçası, genellikle bağlama veya tutma amacıyla kullanılır.</td>
        </tr>
        <tr>
            <td class="term" data-term="Zemin">Zemin</td>
            <td class="description">Bir nesnenin üzerinde bulunduğu veya desteklendiği yüzey.</td>
        </tr>
        <tr>
            <td class="term" data-term="Zaman">Zaman</td>
            <td class="description">Olayların ve eylemlerin sıralandığı süre.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ziyaret">Ziyaret</td>
            <td class="description">Bir kişiyi veya yeri ziyaret etme durumu.</td>
        </tr>
        <tr>
            <td class="term" data-term="Zarar">Zarar</td>
            <td class="description">Bir şeyin kaybı, hasarı veya bozulması.</td>
        </tr>
    </table>
</div>

	
	
	

</div>


</div>

</div></div></div>
<
        <!-- Diğer harfler için benzer yapılar eklenebilir -->

    <script>
    // Arama fonksiyonu
    document.getElementById('search').addEventListener('input', function() {
        const searchValue = this.value.toLowerCase(); // Arama değeri
        const terms = document.querySelectorAll('.letter-group'); // Tüm harf gruplarını al

        terms.forEach(function(group) {
            const termElements = group.querySelectorAll('.term'); // Bu grubun terimlerini al
            let hasVisibleTerm = false;

            termElements.forEach(function(term) {
                const termText = term.textContent.toLowerCase(); // Her terimin metnini al
                if (termText.includes(searchValue)) {
                    term.parentElement.style.display = ''; // Eğer aranan kelimeyi içeriyorsa göster
                    hasVisibleTerm = true;
                } else {
                    term.parentElement.style.display = 'none'; // Aksi takdirde gizle
                }
            });

            // Başlıkları grubun görünürlüğüne göre göster/gizle
            if (hasVisibleTerm) {
                group.style.display = ''; // Başlıkları ve terimleri göster
            } else {
                group.style.display = 'none'; // Grubu ve başlığı gizle
            }
        });
    });

    // Alfabetik butonlara tıklama olayı
    const buttons = document.querySelectorAll('.alphabet-buttons button');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const letter = this.dataset['letter'].toLowerCase();
            const letterGroups = document.querySelectorAll('.letter-group');

            letterGroups.forEach(group => {
                const groupLetter = group.dataset.letter.toLowerCase();
                if (letter === 'all' || letter === groupLetter) {
                    group.style.display = ''; // Grubu göster
                } else {
                    group.style.display = 'none'; // Grubu gizle
                }
            });
        });
    });
</script>


	</div></div></div>
</section>

<?php include 'footer.php'; ?>

