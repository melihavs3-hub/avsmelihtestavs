<?php 
$title = "Service Areas - AVS Global Supply";
$description = "Interactive map showing regions, countries, and ports served by AVS Global Supply";
$canonical ="https://www.avsglobalsupply.com/areas";
$eng_link="https://www.avsglobalsupply.com/areas";
$tr_link="https://www.avsglobalsupply.com/tr/hizmet-bolgeleri";
$sri_link="https://www.avssrilanka.com/areas";
$gr_link="https://www.avsgreece.gr/areas";
include 'header.php';

// API endpoint
define('API_ENDPOINT', 'https://avs-cms-5fzbd.ondigitalocean.app/api/regions?populate[countries][populate][ports][populate]=port_page&populate[countries][populate]=port_page');
?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- page-title -->
<section class="page-title">
    <div class="bg-layer" style="background-image: url(assets/images/background/20.webp);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Our Service Areas</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>Our Areas</li>
            </ul>
        </div>
    </div>
</section>

<style>
    .map-container {
        display: flex;
        flex-direction: row;
        height: 800px;
        width: 100%;
        margin: 20px auto;
        gap: 20px;
        max-width: 100%;
        padding: 0 15px;
        box-sizing: border-box;
    }
    
    @media (max-width: 768px) {
        .map-container {
            flex-direction: column;
            height: auto;
            margin: 10px auto;
            padding: 10px;
        }
    }
    
    .sidebar {
        width: 300px;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        overflow-y: auto;
        height: 100%;
        flex-shrink: 0;
    }
    
    @media (max-width: 768px) {
        .sidebar {
            width: 100%;
            height: 300px;
            margin-bottom: 15px;
        }
    }

    #map {
        flex: 1;
        width: calc(100% - 340px); /* 300px sidebar + 40px gap/padding */
        min-height: 450px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        z-index: 1;
    }

    @media (max-width: 480px) {
        #map {
            height: 350px;
            min-height: 350px;
            width: 100%;
        }
    }

    @media (max-width: 390px) {
        #map {
            height: 300px;
            min-height: 300px;
            margin: 10px -10px;
            width: 100%;
            border-radius: 0;
        }
        
        .map-container {
            padding: 0;
            margin: 0;
        }
        
        .sidebar {
            margin: 10px;
            height: 250px;
        }
    }

    .region-item {
        padding: 12px 15px;
        margin: 5px 0;
        cursor: pointer;
        border-radius: 4px;
        transition: all 0.3s ease;
        background: #f8f9fa;
        border: 1px solid #eee;
    }

    .region-item:hover {
        background: #f0f0f0;
        transform: translateX(5px);
    }

    .region-item.active {
        background: #15558b;
        color: white;
    }

    .countries-item {
        padding: 10px 15px;
        margin: 5px 0;
        cursor: pointer;
        border-radius: 4px;
        transition: all 0.3s ease;
        background: #f0f8ff;
        border: 1px solid #e0e0f0;
        position: relative;
    }

    .countries-item:hover {
        background: #e0f0ff;
    }

    .countries-item.expanded {
        background: #e0f0ff;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .countries-item .toggle-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        transition: transform 0.3s ease;
    }

    .countries-item.expanded .toggle-icon {
        transform: translateY(-50%) rotate(180deg);
    }

    .ports-list {
        display: none;
        background: #ffffff;
        border: 1px solid #e0e0f0;
        border-top: none;
        margin-top: -5px;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        padding: 5px 0;
    }

    .ports-list.visible {
        display: block;
    }

    .ports-item {
        padding: 8px 15px;
        margin: 2px 15px;
        cursor: pointer;
        border-radius: 4px;
        background: #f5f7fa;
        border: 1px solid #eaeef4;
        transition: all 0.2s ease;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.95em;
    }

    .ports-item:hover {
        background: #edf0f5;
        transform: translateX(3px);
    }

    .detail-btn {
        background: #15558b;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 4px 8px;
        font-size: 11px;
        cursor: pointer;
    }

    .detail-btn:hover {
        background: #0A2F5A;
    }

    .section-title {
        color: #15558b;
        font-size: 18px;
        margin: 20px 0 10px;
        padding-bottom: 8px;
        border-bottom: 2px solid #15558b;
    }

    .breadcrumb {
        display: flex;
        gap: 8px;
        align-items: center;
        margin-bottom: 15px;
        font-size: 14px;
        color: #666;
    }

    .breadcrumb-item {
        cursor: pointer;
        color: #15558b;
    }

    .breadcrumb-item:hover {
        text-decoration: underline;
    }

    .breadcrumb-separator {
        color: #999;
    }

    .ports-marker {
        position: relative;
        width: 30px !important;
        height: 40px !important;
        background: transparent;
        border: none;
        box-shadow: none;
    }

    .ports-marker::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 30px;
        height: 30px;
        background-image: url('assets/images/logo.webp');
        background-size: 26px; /* Logo biraz daha küçük olsun ki kenarlarda boşluk olsun */
        background-repeat: no-repeat;
        background-position: center;
        border: 2px solid #15558b;
        border-radius: 3px;
        background-color: white; /* Logo için beyaz arka plan */
    }

    .ports-marker::after {
        content: '';
        position: absolute;
        left: 14px;
        top: 28px; /* Sopa biraz daha aşağıdan başlasın */
        width: 2px;
        height: 12px;
        background: #15558b;
        z-index: -1;
    }

    .ports-marker:hover::before {
        transform: scale(1.1);
        border-color: #0A2F5A;
    }

    .ports-marker:hover::after {
        background: #0A2F5A;
    }

    .ports-popup {
        min-width: 200px;
        padding: 10px;
    }

    .ports-popup-header {
        font-weight: bold;
        color: #15558b;
        margin-bottom: 8px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
        font-size: 14px;
    }

    .ports-popup-content {
        margin: 10px 0;
        font-size: 13px;
        color: #666;
    }

    .ports-popup-actions {
        display: flex;
        justify-content: flex-end;
        margin-top: 10px;
    }

    .ports-popup .detail-btn {
        background: #15558b;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 5px 12px;
        font-size: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .ports-popup .detail-btn:hover {
        background: #0A2F5A;
        transform: translateY(-1px);
    }

    .loading {
        text-align: center;
        padding: 20px;
        color: #666;
    }

    .error {
        color: #dc3545;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #dc3545;
        border-radius: 4px;
        background: #fff;
    }

    .countries-marker {
        background: #d4534c;
        border: 2px solid white;
        border-radius: 50%;
        box-shadow: 0 0 4px rgba(0,0,0,0.4);
    }

    .countries-marker:hover {
        background: #c13e37;
        transform: scale(1.2);
    }
</style>

<div class="auto-container">
    <div class="map-container">
        <div class="sidebar">
            <div id="navigation"></div>
            <div id="content"></div>
        </div>
        <div id="map"></div>
    </div>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    // API endpoint tanımı
    const API_ENDPOINT = '<?php echo API_ENDPOINT; ?>';

    // Global değişkenler
    let map;
    let currentRegion = null;
    let currentCountry = null;
    let countryMarkers = L.layerGroup();
    let portMarkers = L.layerGroup();
    let regions = [];

    // Haritayı başlat
    function initMap() {
        // Harita container'ının yüklenmesini bekle
        setTimeout(() => {
            if (document.getElementById('map')) {
                map = L.map('map', {
                    minZoom: 2,
                    maxZoom: 10,
                    zoomControl: true,
                    scrollWheelZoom: true
                }).setView([30, 0], 2);

                L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                    attribution: '©OpenStreetMap, ©CartoDB',
                    subdomains: 'abcd',
                    maxZoom: 10
                }).addTo(map);

                // Layer gruplarını ekle
                countryMarkers.addTo(map);
                portMarkers.addTo(map);

                // Harita yüklendikten sonra invalidate size
                map.invalidateSize();
                
                // Bölgeleri yükle
                loadRegions();
            }
        }, 100);
    }

    // API'den bölgeleri yükle
    async function loadRegions() {
        try {
            showLoading();
            const response = await fetch(API_ENDPOINT);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            
            if (!data || !data.data) {
                throw new Error('Invalid API response format');
            }
            
            regions = Array.isArray(data.data) ? data.data : [data.data];
            renderRegions();
            hideLoading();
        } catch (error) {
            console.error('Error loading regions:', error);
            showError('An error occurred while loading regions: ' + error.message);
        }
    }

    // Bölgeleri listele
    function renderRegions() {
        const navigation = document.getElementById('navigation');
        const content = document.getElementById('content');
        
        navigation.innerHTML = '<div class="breadcrumb">All Regions</div>';
        
        content.innerHTML = `
            <div class="section-title">Regions</div>
            ${regions.map(region => `
                <div class="region-item" onclick="selectRegion('${region.id}')">
                    ${region.title}
                </div>
            `).join('')}
        `;
    }

    // Bölge seç
    function selectRegion(regionId) {
        try {
            showLoading();
            currentRegion = regions.find(r => r.id.toString() === regionId.toString());
            
            if (!currentRegion) {
                throw new Error('Region not found');
            }

            if (currentRegion.countries && currentRegion.countries.length > 0) {
                renderRegionDetail();
                renderCountryMarkers();
                
                // Haritayı güncelle
                const bounds = [];
                currentRegion.countries.forEach(country => {
                    if (country.lat && country.lng) {
                        bounds.push([parseFloat(country.lat), parseFloat(country.lng)]);
                    }
                });
                
                if (bounds.length > 0) {
                    map.fitBounds(bounds, {
                        padding: [50, 50],
                        maxZoom: 6
                    });
                }
            } else {
                throw new Error('No countries available in this region');
            }
            
            hideLoading();
        } catch (error) {
            console.error('Error loading region detail:', error);
            showError('An error occurred while loading region details: ' + error.message);
        }
    }

    // Bölge detaylarını göster
    function renderRegionDetail() {
        const navigation = document.getElementById('navigation');
        const content = document.getElementById('content');
        
        navigation.innerHTML = `
            <div class="breadcrumb">
                <span class="breadcrumb-item" onclick="loadRegions()">All Regions</span>
                <span class="breadcrumb-separator">›</span>
                <span class="breadcrumb-item">${currentRegion.title}</span>
            </div>
        `;
        
        content.innerHTML = `
            <div class="section-title">Countries</div>
            ${currentRegion.countries.map(country => `
                <div>
                    <div class="countries-item" onclick="toggleCountryPorts('${country.id}')">
                        <span>${country.title}</span>
                        <span class="toggle-icon">▼</span>
                    </div>
                    <div class="ports-list" id="ports-${country.id}">
                        ${country.ports ? country.ports.map(port => `
                            <div class="ports-item" onclick="selectPort('${country.id}', '${port.id}')">
                                ${port.title}
                            </div>
                        `).join('') : ''}
                    </div>
                </div>
            `).join('')}
        `;
    }

    function createCountryPopup(country) {
        return `
            <div class="ports-popup">
                <div class="ports-popup-header">${country.title}</div>
                ${country.description ? 
                    `<div class="ports-popup-content">${country.description}</div>` : 
                    ''
                }
                ${country.port_page ? `
                    <div class="ports-popup-actions">
                        <button class="detail-btn" onclick="viewCountryDetail('${country.port_page.slug}')">
                            View Details
                        </button>
                    </div>
                ` : ''}
            </div>
        `;
    }

    function createPortPopup(port) {
        return `
            <div class="ports-popup">
                <div class="ports-popup-header">${port.title}</div>
                ${port.description ? 
                    `<div class="ports-popup-content">${port.description}</div>` : 
                    ''
                }
                ${port.port_page ? `
                    <div class="ports-popup-actions">
                        <button class="detail-btn" onclick="viewPortDetail('${port.port_page.slug}')">
                            Port Details
                        </button>
                    </div>
                ` : ''}
            </div>
        `;
    }

    // Ülke markerlarını ekle
    function renderCountryMarkers() {
        countryMarkers.clearLayers();
         
        currentRegion.countries.forEach(country => {
            if (country.lat && country.lng) {
                const marker = L.marker([
                    parseFloat(country.lat),
                    parseFloat(country.lng)
                ], {
                    icon: L.divIcon({
                        className: 'countries-marker',
                        iconSize: [24, 24]
                    })
                });
                
                marker.bindPopup(createCountryPopup(country));
                countryMarkers.addLayer(marker);
            }
        });
    }

    // Port markerlarını ekle
    function renderPortMarkers(country) {
        portMarkers.clearLayers();
        
        if (country && country.ports) {
            country.ports.forEach(port => {
                if (port.lat && port.lng) {
                    const marker = L.marker([parseFloat(port.lat), parseFloat(port.lng)], {
                        icon: L.divIcon({
                            className: 'ports-marker',
                            iconSize: [30, 40],
                            iconAnchor: [15, 40],
                            popupAnchor: [0, -42]
                        })
                    });
                    
                    marker.bindPopup(createPortPopup(port));
                    portMarkers.addLayer(marker);
                }
            });
        }
    }

    // Ülkenin limanlarını toggle et
    function toggleCountryPorts(countryId) {
        
        const country = currentRegion.countries.find(c => c.id.toString() === countryId.toString());
        if (country) {
            const portsList = document.getElementById(`ports-${countryId}`);
            const countryItem = portsList.previousElementSibling;
            
            portsList.classList.toggle('visible');
            countryItem.classList.toggle('expanded');
            
            if (portsList.classList.contains('visible')) {
                currentCountry = country;
                if (country.ports && country.ports.length > 0) {
                    renderPortMarkers(country);
                    
                    const bounds = [];
                    bounds.push([parseFloat(country.lat), parseFloat(country.lng)]);
                    country.ports.forEach(port => {
                        if (port.lat && port.lng) {
                            bounds.push([parseFloat(port.lat), parseFloat(port.lng)]);
                        }
                    });
                    
                    if (bounds.length > 0) {
                        map.fitBounds(bounds, {
                            padding: [50, 50],
                            maxZoom: 8
                        });
                    }
                }
            } else {
                portMarkers.clearLayers();
                if (country.lat && country.lng) {
                    map.setView([parseFloat(country.lat), parseFloat(country.lng)], 6);
                }
            }
        }
    }

    // Port seç
    function selectPort(countryId, portId) {
        const country = currentRegion.countries.find(c => c.id.toString() === countryId.toString());
        if (country && country.ports) {
            const port = country.ports.find(p => p.id.toString() === portId.toString());
            
            if (port && port.lat && port.lng) {
                map.setView([parseFloat(port.lat), parseFloat(port.lng)], 10);
                
                portMarkers.eachLayer(marker => {
                    const markerLatLng = marker.getLatLng();
                    if (markerLatLng.lat === parseFloat(port.lat) && markerLatLng.lng === parseFloat(port.lng)) {
                        marker.openPopup();
                    }
                });
            }
        }
    }

    // Ülke detay sayfasına git
    function viewCountryDetail(slug) {
        if (slug) {
            window.location.href = `/country/${slug}`;
        }
    }

    function viewPortDetail(slug) {
        if (slug) {
            window.location.href = `/port/${slug}`;
        }
    }

    // Loading göster/gizle
    function showLoading() {
        const content = document.getElementById('content');
        content.innerHTML = '<div class="loading">Loading...</div>';
    }

    function hideLoading() {
        const content = document.getElementById('content');
        if (content.querySelector('.loading')) {
            content.querySelector('.loading').remove();
        }
    }

    // Hata göster
    function showError(message) {
        const content = document.getElementById('content');
        content.innerHTML = `<div class="error">${message}</div>`;
    }

    // Sayfa yüklendiğinde haritayı başlat
    document.addEventListener('DOMContentLoaded', () => {
        initMap();
        
        // Pencere boyutu değiştiğinde haritayı güncelle
        window.addEventListener('resize', () => {
            if (map) {
                map.invalidateSize();
            }
        });
    });
</script>

<?php include 'footer.php'; ?>

