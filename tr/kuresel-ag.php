<?php 
$title = "Global Coverage - AVS Global Supply";
$description = "Explore our global ship supply coverage. We operate in major ports worldwide.";
$canonical ="https://www.avsglobalsupply.com/global-coverage";
$eng_link="https://www.avsglobalsupply.com/global-coverage";
$tr_link="https://www.avsglobalsupply.com/tr/kuresel-ag";
$sri_link="https://www.avssrilanka.com/global-coverage";
$gr_link="https://www.avsgreece.gr/global-coverage";
include 'header.php';
?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<style>
    :root {
        --primary-navy: #000080;
        --secondary-ocean: #0077be;
        --bg-white: #ffffff;
        --text-dark: #333333;
    }

    #map-container {
        width: 100%;
        height: 70vh;
        min-height: 500px;
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }
    
    #map {
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .search-container {
        position: absolute;
        top: 15px;
        right: 15px;
        z-index: 1000;
        width: 300px;
        max-width: 90%;
    }

    #searchInput {
        width: 100%;
        padding: 12px 20px;
        border: 2px solid var(--primary-navy);
        border-radius: 30px;
        font-size: 14px;
        font-family: inherit;
        box-sizing: border-box;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        outline: none;
        transition: box-shadow 0.3s;
        background-color: var(--bg-white);
    }

    #searchInput:focus {
        box-shadow: 0 4px 20px rgba(0, 119, 190, 0.4);
        border-color: var(--secondary-ocean);
    }

    .search-results {
        list-style: none;
        padding: 0;
        margin: 10px 0 0 0;
        background: var(--bg-white);
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        max-height: 250px;
        overflow-y: auto;
        display: none;
        position: absolute;
        width: 100%;
    }

    .search-results li {
        padding: 12px 20px;
        cursor: pointer;
        border-bottom: 1px solid #eee;
        font-size: 14px;
        color: var(--text-dark);
        transition: background 0.2s;
        line-height: 1.4;
    }

    .search-results li:last-child {
        border-bottom: none;
    }

    .search-results li:hover {
        background-color: #f0f8ff;
        color: var(--primary-navy);
        font-weight: bold;
    }

    .leaflet-popup-content-wrapper {
        border-radius: 6px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    
    .popup-content { font-family: inherit; padding: 5px; }
    .popup-content h3 { color: var(--primary-navy); margin: 0 0 8px 0; font-size: 16px; border-bottom: 1px solid #eee; padding-bottom: 5px;}
    .popup-content p { color: #555; margin: 0 0 12px 0; font-size: 14px; }
    .popup-content ul { padding-left: 18px; margin: 0 0 15px 0; font-size: 13px; color: #444; }
    .popup-content ul li { margin-bottom: 5px; list-style-type: none; position: relative;}
    .popup-content ul li::before { content: "✔"; color: var(--secondary-ocean); position: absolute; left: -18px; }
    
    .req-btn {
        display: block;
        text-align: center;
        text-decoration: none;
        background: var(--primary-navy);
        color: white !important;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        border-radius: 4px;
        font-weight: bold;
        font-size: 14px;
        transition: background 0.3s;
    }
    
    .req-btn:hover { background: var(--secondary-ocean); color: white !important;}

    @media (max-width: 600px) {
        #map-container { height: 60vh; }
        .search-container { 
            top: 10px; 
            right: 50%; 
            transform: translateX(50%); 
            width: 90%; 
        }
    }
</style>

<section class="page-title">
    <div class="bg-layer" style="background-image: url(assets/images/background/15.webp);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Küresel Hizmet Ağımız</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Ana Sayfa</a></li>
                <li>Küresel Hizmet Ağımız</li>
            </ul>
        </div>
    </div>
</section>

<section class="sec-pad">
    <div class="auto-container">
        <div class="sec-title text-center mb-5">
    <span class="sub-title">Hizmet Bölgelerimiz</span>
    <h2>Küresel Gemi İkmal Ağı</h2>
    <p class="mt-3">AVS Global Supply, dünya çapındaki önemli limanlarda gemi ikmal hizmetleri sunmaktadır. Küresel hizmet ağımızı keşfedin ve geminiz için doğrudan teklif isteyin.</p>
</div>
        <div id="map-container">
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search for a port or country..." autocomplete="off">
                <ul class="search-results" id="searchResults"></ul>
            </div>
            <div id="map"></div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([20.0, 10.0], 2);

    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; OpenStreetMap &copy; CARTO',
        subdomains: 'abcd',
        maxZoom: 19,
        minZoom: 2
    }).addTo(map);

    const generatePopup = (locationName, country) => `
        <div class="popup-content">
            <h3>AVS Global Supply</h3>
            <p><strong>${locationName}</strong>, ${country}</p>
            <ul>
                <li>Available Vessel Supply</li>
                <li>Provisions</li>
                <li>Bonded Stores</li>
                <li>Technical Stores</li>
                <li>Deck & Engine Stores</li>
            </ul>
            <button onclick="triggerRFQ()" class="req-btn" style="border:none; cursor:pointer; font-family:inherit;">Request a Quote</button>
        </div>
    `;

    function triggerRFQ() {
        const originalBtn = document.querySelector('.quote-box a');
        
        if (originalBtn) {
            originalBtn.dispatchEvent(new MouseEvent('mousedown', { bubbles: true, cancelable: true }));
            originalBtn.dispatchEvent(new TouchEvent('touchstart', { bubbles: true, cancelable: true }));
            
            const targetUrl = originalBtn.href;
            const tempLink = document.createElement('a');
            tempLink.href = targetUrl;
            tempLink.target = '_blank';
            document.body.appendChild(tempLink);
            tempLink.click();
            document.body.removeChild(tempLink);
        } else {
            const tempLink = document.createElement('a');
            tempLink.href = "https://rfq.avsglobalsupply.com";
            tempLink.target = '_blank';
            document.body.appendChild(tempLink);
            tempLink.click();
            document.body.removeChild(tempLink);
        }
    }

    const serviceLocations = [
        { country: "Algeria", name: "Port of Algiers", lat: 36.7525, lng: 3.0419 },
        { country: "Angola", name: "Port of Luanda", lat: -8.8368, lng: 13.2343 },
        { country: "Benin", name: "Port of Cotonou", lat: 6.3653, lng: 2.4183 },
        { country: "Cameroon", name: "Port of Douala", lat: 4.0510, lng: 9.7085 },
        { country: "Canary Islands", name: "Las Palmas", lat: 28.1235, lng: -15.4362 },
        { country: "Congo", name: "Pointe-Noire", lat: -4.7981, lng: 11.8501 },
        { country: "Djibouti", name: "Port of Djibouti", lat: 11.5880, lng: 43.1456 },
        { country: "Egypt", name: "Port of Alexandria", lat: 31.2001, lng: 29.9187 },
        { country: "Eritrea", name: "Port of Massawa", lat: 15.6111, lng: 39.4538 },
        { country: "Gabon", name: "Port of Libreville", lat: 0.4162, lng: 9.4673 },
        { country: "Gambia", name: "Port of Banjul", lat: 13.4549, lng: -16.5790 },
        { country: "Ghana", name: "Port of Tema", lat: 5.6698, lng: -0.0165 },
        { country: "Guinea", name: "Port of Conakry", lat: 9.5091, lng: -13.7122 },
        { country: "Guinea-Bissau", name: "Port of Bissau", lat: 11.8632, lng: -15.5977 },
        { country: "Ivory Coast", name: "Port of Abidjan", lat: 5.3015, lng: -4.0150 },
        { country: "Kenya", name: "Port of Mombasa", lat: -4.0434, lng: 39.6682 },
        { country: "Liberia", name: "Freeport of Monrovia", lat: 6.3156, lng: -10.8074 },
        { country: "Libya", name: "Port of Tripoli", lat: 32.8872, lng: 13.1891 },
        { country: "Mauritania", name: "Port of Nouadhibou", lat: 20.9319, lng: -17.0346 },
        { country: "Mauritius", name: "Port Louis", lat: -20.1608, lng: 57.5012 },
        { country: "Morocco", name: "Port of Casablanca", lat: 33.5928, lng: -7.6015 },
        { country: "Mozambique", name: "Port of Maputo", lat: -25.9692, lng: 32.5832 },
        { country: "Namibia", name: "Port of Walvis Bay", lat: -22.9535, lng: 14.5055 },
        { country: "Nigeria", name: "Port of Lagos (Apapa)", lat: 6.4540, lng: 3.3831 },
        { country: "Senegal", name: "Port of Dakar", lat: 14.6928, lng: -17.4467 },
        { country: "Seychelles", name: "Port Victoria", lat: -4.6191, lng: 55.4513 },
        { country: "Sierra Leone", name: "Port of Freetown", lat: 8.4844, lng: -13.2344 },
        { country: "Somali Republic", name: "Port of Mogadishu", lat: 2.0402, lng: 45.3414 },
        { country: "South Africa", name: "Port of Durban", lat: -29.8586, lng: 31.0218 },
        { country: "Tanzania", name: "Port of Dar es Salaam", lat: -6.7923, lng: 39.2083 },
        { country: "Togo", name: "Port of Lomé", lat: 6.1374, lng: 1.2222 },
        { country: "Tunisia", name: "Port of Tunis", lat: 36.8065, lng: 10.1815 },
        { country: "Albania", name: "Port of Durrës", lat: 41.3245, lng: 19.4564 },
        { country: "Azores", name: "Ponta Delgada", lat: 37.7412, lng: -25.6661 },
        { country: "Belgium", name: "Port of Antwerp", lat: 51.2194, lng: 4.4024 },
        { country: "Bulgaria", name: "Port of Varna", lat: 43.2140, lng: 27.9147 },
        { country: "Croatia", name: "Port of Rijeka", lat: 45.3270, lng: 14.4421 },
        { country: "Cyprus", name: "Port of Limassol", lat: 34.6710, lng: 33.0426 },
        { country: "Denmark", name: "Port of Copenhagen", lat: 55.6760, lng: 12.5683 },
        { country: "Estonia", name: "Port of Tallinn", lat: 59.4369, lng: 24.7535 },
        { country: "Finland", name: "Port of Helsinki", lat: 60.1695, lng: 24.9354 },
        { country: "France", name: "Port of Marseille", lat: 43.2964, lng: 5.3697 },
        { country: "Georgia", name: "Port of Batumi", lat: 41.6167, lng: 41.6167 },
        { country: "Germany", name: "Port of Hamburg", lat: 53.5510, lng: 9.9936 },
        { country: "Gibraltar", name: "Port of Gibraltar", lat: 36.1407, lng: -5.3535 },
        { country: "Greece", name: "Port of Piraeus", lat: 37.9429, lng: 23.6416 },
        { country: "Iceland", name: "Port of Reykjavik", lat: 64.1465, lng: -21.9426 },
        { country: "Ireland", name: "Port of Dublin", lat: 53.3498, lng: -6.2603 },
        { country: "Italy", name: "Port of Genoa", lat: 44.4056, lng: 8.9462 },
        { country: "Latvia", name: "Port of Riga", lat: 56.9496, lng: 24.1051 },
        { country: "Lithuania", name: "Port of Klaipėda", lat: 55.7032, lng: 21.1442 },
        { country: "Malta", name: "Grand Harbour, Valletta", lat: 35.8989, lng: 14.5145 },
        { country: "Moldova", name: "Giurgiulești Free Port", lat: 45.4800, lng: 28.1966 },
        { country: "Netherlands", name: "Port of Rotterdam", lat: 51.9225, lng: 4.4791 },
        { country: "Norway", name: "Port of Oslo", lat: 59.9139, lng: 10.7522 },
        { country: "Poland", name: "Port of Gdańsk", lat: 54.3520, lng: 18.6466 },
        { country: "Portugal", name: "Port of Lisbon", lat: 38.7222, lng: -9.1393 },
        { country: "Romania", name: "Port of Constanța", lat: 44.1732, lng: 28.6508 },
        { country: "Russia", name: "Port of Novorossiysk", lat: 44.7238, lng: 37.7688 },
        { country: "Slovenia", name: "Port of Koper", lat: 45.5480, lng: 13.7301 },
        { country: "Spain", name: "Port of Algeciras", lat: 36.1408, lng: -5.4562 },
        { country: "Sweden", name: "Port of Gothenburg", lat: 57.7088, lng: 11.9745 },
        { country: "Turkey", name: "Port of Istanbul", lat: 41.0082, lng: 28.9784 },
        { country: "Ukraine", name: "Port of Odesa", lat: 46.4825, lng: 30.7233 },
        { country: "United Kingdom", name: "Port of Southampton", lat: 50.8970, lng: -1.4043 },
        { country: "Argentina", name: "Port of Buenos Aires", lat: -34.6037, lng: -58.3815 },
        { country: "Aruba", name: "Port of Oranjestad", lat: 12.5186, lng: -70.0357 },
        { country: "Brazil", name: "Port of Santos", lat: -23.9618, lng: -46.3322 },
        { country: "Canada", name: "Port of Vancouver", lat: 49.2827, lng: -123.1207 },
        { country: "Chile", name: "Port of Valparaíso", lat: -33.0456, lng: -71.6200 },
        { country: "Colombia", name: "Port of Cartagena", lat: 10.3997, lng: -75.4800 },
        { country: "Costa Rica", name: "Port of Limón", lat: 9.9983, lng: -83.0333 },
        { country: "Cuba", name: "Port of Havana", lat: 23.1135, lng: -82.3665 },
        { country: "Dominican Republic", name: "Port of Caucedo", lat: 18.4230, lng: -69.6260 },
        { country: "Ecuador", name: "Port of Guayaquil", lat: -2.1894, lng: -79.8890 },
        { country: "Guadeloupe", name: "Pointe-à-Pitre", lat: 16.2333, lng: -61.5333 },
        { country: "Guatemala", name: "Puerto Quetzal", lat: 13.9268, lng: -90.7932 },
        { country: "Guyana", name: "Port of Georgetown", lat: 6.8013, lng: -58.1551 },
        { country: "Haiti", name: "Port-au-Prince", lat: 18.5391, lng: -72.3350 },
        { country: "Honduras", name: "Puerto Cortés", lat: 15.8341, lng: -87.9341 },
        { country: "Jamaica", name: "Port of Kingston", lat: 17.9712, lng: -76.7928 },
        { country: "Mexico", name: "Port of Veracruz", lat: 19.1737, lng: -96.1342 },
        { country: "Netherlands Antilles", name: "Willemstad, Curacao", lat: 12.1084, lng: -68.9328 },
        { country: "Nicaragua", name: "Port of Corinto", lat: 12.4820, lng: -87.1730 },
        { country: "Panama", name: "Panama Canal (Balboa)", lat: 8.9566, lng: -79.5630 },
        { country: "Peru", name: "Port of Callao", lat: -12.0565, lng: -77.1436 },
        { country: "Puerto Rico", name: "Port of San Juan", lat: 18.4655, lng: -66.1057 },
        { country: "Suriname", name: "Port of Paramaribo", lat: 5.8520, lng: -55.2038 },
        { country: "Trinidad and Tobago", name: "Port of Spain", lat: 10.6549, lng: -61.5165 },
        { country: "United States of America", name: "Port of Houston", lat: 29.7604, lng: -95.3698 },
        { country: "Uruguay", name: "Port of Montevideo", lat: -34.9011, lng: -56.1645 },
        { country: "Venezuela", name: "Puerto Cabello", lat: 10.4800, lng: -68.0125 },
        { country: "Australia", name: "Port of Sydney", lat: -33.8688, lng: 151.2093 },
        { country: "Bahrain", name: "Port of Manama", lat: 26.2285, lng: 50.5860 },
        { country: "Bangladesh", name: "Port of Chittagong", lat: 22.3300, lng: 91.8300 },
        { country: "China", name: "Port of Shanghai", lat: 31.2304, lng: 121.4737 },
        { country: "Fiji", name: "Port of Suva", lat: -18.1416, lng: 178.4419 },
        { country: "French Polynesia", name: "Port of Papeete", lat: -17.5333, lng: -149.5666 },
        { country: "Hong Kong", name: "Port of Hong Kong", lat: 22.3193, lng: 114.1693 },
        { country: "India", name: "Port of Mumbai", lat: 18.9667, lng: 72.8333 },
        { country: "Indonesia", name: "Port of Jakarta", lat: -6.2088, lng: 106.8456 },
        { country: "Iraq", name: "Port of Umm Qasr", lat: 30.0383, lng: 47.9333 },
        { country: "Israel", name: "Port of Haifa", lat: 32.8191, lng: 34.9889 },
        { country: "Japan", name: "Port of Yokohama", lat: 35.4437, lng: 139.6380 },
        { country: "Jordan", name: "Port of Aqaba", lat: 29.5319, lng: 35.0060 },
        { country: "Kuwait", name: "Port of Shuwaikh", lat: 29.3458, lng: 47.9311 },
        { country: "Lebanon", name: "Port of Beirut", lat: 33.8938, lng: 35.5018 },
        { country: "Malaysia", name: "Port Klang", lat: 3.0000, lng: 101.3928 },
        { country: "Myanmar", name: "Port of Yangon", lat: 16.8053, lng: 96.1561 },
        { country: "New Zealand", name: "Port of Auckland", lat: -36.8485, lng: 174.7633 },
        { country: "Oman", name: "Port of Salalah", lat: 16.9535, lng: 54.0044 },
        { country: "Pakistan", name: "Port of Karachi", lat: 24.8607, lng: 66.9911 },
        { country: "Papua New Guinea", name: "Port Moresby", lat: -9.4431, lng: 147.1803 },
        { country: "Philippines", name: "Port of Manila", lat: 14.5995, lng: 120.9842 },
        { country: "Qatar", name: "Port of Doha", lat: 25.2854, lng: 51.5310 },
        { country: "Saudi Arabia", name: "Port of Jeddah", lat: 21.4858, lng: 39.1925 },
        { country: "Singapore", name: "Port of Singapore", lat: 1.2902, lng: 103.8519 },
        { country: "South Korea", name: "Port of Busan", lat: 35.1016, lng: 129.0322 },
        { country: "Sri Lanka", name: "Port of Colombo", lat: 6.9270, lng: 79.8612 },
        { country: "Sudan", name: "Port Sudan", lat: 19.6174, lng: 37.2164 },
        { country: "Taiwan", name: "Port of Kaohsiung", lat: 22.6272, lng: 120.3115 },
        { country: "Thailand", name: "Laem Chabang", lat: 13.0827, lng: 100.8805 },
        { country: "United Arab Emirates", name: "Port of Dubai (Jebel Ali)", lat: 25.0112, lng: 55.0558 },
        { country: "Vietnam", name: "Port of Ho Chi Minh City", lat: 10.8230, lng: 106.6296 },
        { country: "Yemen", name: "Port of Aden", lat: 12.7954, lng: 44.9922 }
    ];

    const mapMarkers = [];

    serviceLocations.forEach((loc, index) => {
        const marker = L.circleMarker([loc.lat, loc.lng], {
            color: 'var(--primary-navy)', 
            fillColor: 'var(--secondary-ocean)',
            fillOpacity: 0.8,
            radius: 6, 
            weight: 1.5
        })
        .addTo(map)
        .bindPopup(generatePopup(loc.name, loc.country));

        mapMarkers.push({
            ...loc,
            markerObj: marker
        });
    });

    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');

    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase();
        searchResults.innerHTML = '';

        if (query.length < 2) {
            searchResults.style.display = 'none';
            return;
        }

        const filteredLocations = mapMarkers.filter(loc => 
            loc.name.toLowerCase().includes(query) || 
            loc.country.toLowerCase().includes(query)
        );

        if (filteredLocations.length > 0) {
            searchResults.style.display = 'block';
            filteredLocations.forEach(loc => {
                const li = document.createElement('li');
                li.innerHTML = `<strong>${loc.name}</strong>, ${loc.country}`;
                
                li.addEventListener('click', () => {
                    
                    searchInput.value = loc.name;
                    searchResults.style.display = 'none';
                    
                    map.flyTo([loc.lat, loc.lng], 6, {
                        animate: true,
                        duration: 1.5 
                    });
                    
                    loc.markerObj.openPopup();
                });
                
                searchResults.appendChild(li);
            });
        } else {
            searchResults.style.display = 'none';
        }
    });

    document.addEventListener('click', function(e) {
        if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
            searchResults.style.display = 'none';
        }
    });

</script>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>
