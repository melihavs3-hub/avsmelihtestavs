<?php 
$title = "Maritime Glossary - AVS";
$description = "";
$canonical ="https://www.avsglobalsupply.com/glossary";
$eng_link="https://www.avsglobalsupply.com/glossary";
$tr_link="https://www.avsglobalsupply.com/tr/sozluk";
$sri_link="https://www.avssrilanka.com/glossary";
$gr_link="https://www.avsgreece.gr/glossary";
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
            <div class="bg-layer" style="background-image: url(assets/images/background/04.webp);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Maritime Glossary</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li>Glossary</li>
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
                    <td class="term" data-term="Abeam">Abeam</td>
                    <td class="description">The direction at right angles to the centerline of the ship.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Aboard">Aboard</td>
                    <td class="description">On or onto a ship or boat.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Abandon Ship">Abandon Ship</td>
                    <td class="description">The command given to leave the ship in an emergency.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Adrift">Adrift</td>
                    <td class="description">Floating freely without being tied or anchored.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Aft">Aft</td>
                    <td class="description">Toward the rear or stern of the ship.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Afterdeck">Afterdeck</td>
                    <td class="description">The deck located towards the stern of the ship.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Amidships">Amidships</td>
                    <td class="description">The middle part of the ship.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Anchor">Anchor</td>
                    <td class="description">A heavy object used to moor a ship to the sea bottom.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Anchorage">Anchorage</td>
                    <td class="description">A place where ships can anchor safely.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Aft Bulkhead">Aft Bulkhead</td>
                    <td class="description">A vertical partition in the aft part of the ship.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Afloat">Afloat</td>
                    <td class="description">Floating on the water or not touching the bottom.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Apparent Wind">Apparent Wind</td>
                    <td class="description">The wind experienced on a moving ship, a combination of true wind and the wind created by the ship's motion.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Astern">Astern</td>
                    <td class="description">At or toward the rear of the ship.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Auxiliary">Auxiliary</td>
                    <td class="description">A supplementary engine or power source.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Abyssal Plain">Abyssal Plain</td>
                    <td class="description">A flat, deep part of the ocean floor.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Aye Aye">Aye Aye</td>
                    <td class="description">A nautical term used to acknowledge a command.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Ammunition">Ammunition</td>
                    <td class="description">Projectiles and explosives used for defense.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Accretion">Accretion</td>
                    <td class="description">The process of sediment build-up at the sea floor.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Albatross">Albatross</td>
                    <td class="description">A large seabird known for its long wingspan.</td>
                </tr>
                <tr>
                    <td class="term" data-term="Adjust">Adjust</td>
                    <td class="description">To change the position or setting of something, like sails or equipment.</td>
                </tr>
            </table>
        </div>
		<div class="letter-group" data-letter="B">
    <h2>B</h2>
    <table>
        <tr>
            <td class="term" data-term="Ballast">Ballast</td>
            <td class="description">Heavy material placed in the bottom of a ship to improve stability.</td>
        </tr>
        <tr>
            <td class="term" data-term="Barge">Barge</td>
            <td class="description">A flat-bottomed boat used for transporting cargo on rivers and canals.</td>
        </tr>
        <tr>
            <td class="term" data-term="Beam">Beam</td>
            <td class="description">The width of a ship at its widest point.</td>
        </tr>
        <tr>
            <td class="term" data-term="Bilge">Bilge</td>
            <td class="description">The lowest part of a ship's hull where water collects.</td>
        </tr>
        <tr>
            <td class="term" data-term="Bow">Bow</td>
            <td class="description">The front part of a ship.</td>
        </tr>
    </table>
</div>

<div class="letter-group" data-letter="C">
    <h2>C</h2>
    <table>
	<tr>
            <td class="term" data-term="Catering">Catering</td>
            <td class="description">The provision of food and beverages on board a ship, including the preparation and serving of meals to the crew and passengers.</td>
        </tr>
        <tr>
            <td class="term" data-term="Capstan">Capstan</td>
            <td class="description">A rotating machine used to wind up ropes or cables.</td>
        </tr>
        <tr>
            <td class="term" data-term="Cockpit">Cockpit</td>
            <td class="description">The area of a boat where the helmsman or crew controls the vessel.</td>
        </tr>
        <tr>
            <td class="term" data-term="Compass">Compass</td>
            <td class="description">A navigational instrument for determining direction.</td>
        </tr>
        <tr>
            <td class="term" data-term="Crows Nest">Crows Nest</td>
            <td class="description">A platform high up on a ship's mast used for lookout purposes.</td>
        </tr>
        <tr>
            <td class="term" data-term="Cleat">Cleat</td>
            <td class="description">A fitting on a boat or dock used to secure lines.</td>
        </tr>
		<tr>
            <td class="term" data-term="Customs">Customs</td>
            <td class="description">The governmental authority that regulates the flow of goods into and out of a country, including the collection of duties and taxes.</td>
        </tr>
    </table>
</div>

<div class="letter-group" data-letter="D">
    <h2>D</h2>
    <table>
	 <tr>
                <td class="term" data-term="Dry Bulk">Dry Bulk</td>
                <td class="description">Ships designed to carry bulk cargoes such as coal or grain.</td>
            </tr>
            <tr>
                <td class="term" data-term="Drilling Vessel">Drilling Vessel</td>
                <td class="description">A ship equipped for offshore drilling operations.</td>
            </tr>
            <tr>
                <td class="term" data-term="Dredger">Dredger</td>
                <td class="description">A vessel used for dredging waterways.</td>
            </tr>
        <tr>
            <td class="term" data-term="Deck">Deck</td>
            <td class="description">The floor of a ship, covering the hull and forming the ship's surface.</td>
        </tr>
		<tr>
            <td class="term" data-term="Deck Stores">Deck Stores</td>
            <td class="description">Supplies and equipment used for the upkeep and maintenance of the deck area of a ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Davit">Davit</td>
            <td class="description">A small crane used to lower or raise lifeboats or other equipment.</td>
        </tr>
        <tr>
            <td class="term" data-term="Draft">Draft</td>
            <td class="description">The depth of water a ship requires to float.</td>
        </tr>
        <tr>
            <td class="term" data-term="Dry Dock">Dry Dock</td>
            <td class="description">A dock where a ship can be taken out of water for repairs or maintenance.</td>
        </tr>
        <tr>
            <td class="term" data-term="Displacement">Displacement</td>
            <td class="description">The weight of the water displaced by a ship, indicating its weight.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="E">
    <h2>E</h2>
    <table>
        <tr>
            <td class="term" data-term="Echo Sounder">Echo Sounder</td>
            <td class="description">A device used to measure water depth by sending sound waves.</td>
        </tr>
        <tr>
            <td class="term" data-term="Engine Room">Engine Room</td>
            <td class="description">The space on a ship where the main engines are located.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ensign">Ensign</td>
            <td class="description">A flag or banner representing a ship's nationality.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ebb Tide">Ebb Tide</td>
            <td class="description">The period when the tide is receding or going out.</td>
        </tr>
        <tr>
            <td class="term" data-term="EPIRB">EPIRB</td>
            <td class="description">A device that transmits a distress signal to rescue services in case of an emergency.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="F">
    <h2>F</h2>
    <table>
	 <tr>
                <td class="term" data-term="FPSO">Floating Production Storage and Offloading (FPSO)</td>
                <td class="description">A floating facility used for processing and storing oil and gas.</td>
            </tr>
            <tr>
                <td class="term" data-term="FLNG">Floating Liquefied Natural Gas (FLNG) Vessel</td>
                <td class="description">A floating facility for liquefying and storing natural gas.</td>
            </tr>
        <tr>
            <td class="term" data-term="Ferry">Ferry</td>
            <td class="description">A vessel used to transport people, vehicles, and cargo across bodies of water.</td>
        </tr>
        <tr>
            <td class="term" data-term="Frigate">Frigate</td>
            <td class="description">A type of warship used for escorting and protecting other ships and convoys.</td>
        </tr>
        <tr>
            <td class="term" data-term="Fathometer">Fathometer</td>
            <td class="description">An instrument used to measure the depth of water.</td>
        </tr>
        <tr>
            <td class="term" data-term="Fender">Fender</td>
            <td class="description">A cushion or padding used to protect a boat or ship from damage when moored.</td>
        </tr>
        <tr>
            <td class="term" data-term="Flare">Flare</td>
            <td class="description">A pyrotechnic signal used to indicate distress or attract attention.</td>
        </tr>
		<tr>
            <td class="term" data-term="Food Trading">Food Trading</td>
            <td class="description">The buying and selling of food products, including distribution and supply chain management.</td>
        </tr>
        <tr>
            <td class="term" data-term="Forecastle">Forecastle</td>
            <td class="description">The upper deck area of a ship forward of the mast, often used for crew accommodation.</td>
        </tr>
        <tr>
            <td class="term" data-term="Freeboard">Freeboard</td>
            <td class="description">The distance from the waterline to the upper deck of a ship.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="G">
    <h2>G</h2>
    <table>
	<tr>
            <td class="term" data-term="Government Vessel">Government Vessel</td>
            <td class="description">A ship operated by government agencies for various purposes, including law enforcement and research.</td>
        </tr>
        <tr>
            <td class="term" data-term="Galley">Galley</td>
            <td class="description">The kitchen area on a ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Gangway">Gangway</td>
            <td class="description">A portable bridge used to board or disembark from a ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Gimbal">Gimbal</td>
            <td class="description">A device that allows an object to remain level despite the motion of its base.</td>
        </tr>
        <tr>
            <td class="term" data-term="Gudgeon">Gudgeon</td>
            <td class="description">A small metal fitting that supports the pivot of a rudder or other moving part.</td>
        </tr>
        <tr>
            <td class="term" data-term="Grain Cargo">Grain Cargo</td>
            <td class="description">Cargo consisting of grain, often carried in bulk by ships.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="H">
    <h2>H</h2>
    <table>
	<tr>
                <td class="term" data-term="Hook">Hook</td>
                <td class="description">A device used for lifting or pulling cargo.</td>
            </tr>
        <tr>
            <td class="term" data-term="Hull">Hull</td>
            <td class="description">The main body of a ship, excluding the superstructure and deck.</td>
        </tr>
        <tr>
            <td class="term" data-term="Helm">Helm</td>
            <td class="description">The steering mechanism of a ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Hatch">Hatch</td>
            <td class="description">An opening in the deck of a ship, covered with a lid, allowing access to the holds or compartments below.</td>
        </tr>
        <tr>
            <td class="term" data-term="Hawser">Hawser</td>
            <td class="description">A heavy rope or cable used for towing or mooring a ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Heave">Heave</td>
            <td class="description">To lift or haul something with effort, often using a rope or tackle.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="I">
    <h2>I</h2>
    <table>
        <tr>
            <td class="term" data-term="Impetus">Impetus</td>
            <td class="description">The force or energy with which a body moves or a process begins.</td>
        </tr>
        <tr>
            <td class="term" data-term="Inboard">Inboard</td>
            <td class="description">Towards the center of the ship from the side.</td>
        </tr>
        <tr>
            <td class="term" data-term="Inlet">Inlet</td>
            <td class="description">A narrow body of water between islands or leading inland.</td>
        </tr>
        <tr>
            <td class="term" data-term="Insurance">Insurance</td>
            <td class="description">Protection against financial loss or damage to a ship and cargo.</td>
        </tr>
        <tr>
            <td class="term" data-term="Inboard Engine">Inboard Engine</td>
            <td class="description">An engine installed inside the hull of a boat or ship.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="J">
    <h2>J</h2>
    <table>
	<tr>
                <td class="term" data-term="Jackups">Jackups</td>
                <td class="description">A type of offshore platform that can be raised above the water.</td>
            </tr>
        <tr>
            <td class="term" data-term="Jib">Jib</td>
            <td class="description">A triangular sail set forward of the mast.</td>
        </tr>
        <tr>
            <td class="term" data-term="Junction">Junction</td>
            <td class="description">The point where two or more waterways or channels meet.</td>
        </tr>
        <tr>
            <td class="term" data-term="Jetty">Jetty</td>
            <td class="description">A structure extending into a waterway to protect or provide access.</td>
        </tr>
        <tr>
            <td class="term" data-term="Jackstay">Jackstay</td>
            <td class="description">A strong rope or chain used for securing or extending sails.</td>
        </tr>
        <tr>
            <td class="term" data-term="Junction Box">Junction Box</td>
            <td class="description">An enclosure where electrical connections are made or protected.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="K">
    <h2>K</h2>
    <table>
        <tr>
            <td class="term" data-term="Keel">Keel</td>
            <td class="description">The central structural component along the bottom of a ship's hull.</td>
        </tr>
        <tr>
            <td class="term" data-term="Knot">Knot</td>
            <td class="description">A unit of speed equal to one nautical mile per hour.</td>
        </tr>
        <tr>
            <td class="term" data-term="Kedge Anchor">Kedge Anchor</td>
            <td class="description">A small anchor used to maneuver a ship by dragging it along the seabed.</td>
        </tr>
        <tr>
            <td class="term" data-term="Kip">Kip</td>
            <td class="description">A unit of weight or a small load, commonly used in shipping.</td>
        </tr>
        <tr>
            <td class="term" data-term="King Post">King Post</td>
            <td class="description">A vertical post used to support a ship's mast or rigging.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="L">
    <h2>L</h2>
    <table>
	<tr>
                <td class="term" data-term="Liners">Liners</td>
                <td class="description">Large ships used for regular passenger or cargo services.</td>
            </tr>
            <tr>
                <td class="term" data-term="Logistics and Support Services">Logistics and Support Services</td>
                <td class="description">Services related to the logistical and operational support of ships.</td>
            </tr>
        <tr>
            <td class="term" data-term="Lifeboat">Lifeboat</td>
            <td class="description">A small boat carried on a ship for use in emergencies.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ladder">Ladder</td>
            <td class="description">A device used for climbing between different levels on a ship.</td>
        </tr>
		<tr>
            <td class="term" data-term="Logistics">Logistics</td>
            <td class="description">The detailed organization and implementation of complex operations, particularly the transportation and storage of goods and materials.</td>
        </tr>
        <tr>
            <td class="term" data-term="Longitude">Longitude</td>
            <td class="description">The geographic coordinate that specifies the east-west position of a point on the Earth's surface.</td>
        </tr>
        <tr>
            <td class="term" data-term="Luff">Luff</td>
            <td class="description">The forward edge of a sail, or to steer a boat closer to the wind.</td>
        </tr>
        <tr>
            <td class="term" data-term="Line">Line</td>
            <td class="description">A rope or cord used for various purposes on a ship.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="M">
    <h2>M</h2>
    <table>
	<tr>
            <td class="term" data-term="Merchant Vessel">Merchant Vessel</td>
            <td class="description">A commercial ship used for transporting goods and passengers.</td>
        </tr>
        <tr>
            <td class="term" data-term="Multi-Purpose Supply Vessel">Multi-Purpose Supply Vessel</td>
            <td class="description">A versatile vessel used for a range of offshore support operations, including supply and maintenance tasks.</td>
        </tr>
        <tr>
            <td class="term" data-term="Mast">Mast</td>
            <td class="description">A tall vertical pole on a ship that supports sails and rigging.</td>
        </tr>
        <tr>
            <td class="term" data-term="Marina">Marina</td>
            <td class="description">A docking facility for small boats and yachts.</td>
        </tr>
        <tr>
            <td class="term" data-term="Marine">Marine</td>
            <td class="description">Relating to the sea or ocean, or to the organisms that live there.</td>
        </tr>
        <tr>
            <td class="term" data-term="Mooring">Mooring</td>
            <td class="description">The process of securing a ship or boat to a fixed point.</td>
        </tr>
        <tr>
            <td class="term" data-term="Main Deck">Main Deck</td>
            <td class="description">The principal deck of a ship, usually the uppermost deck.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="N">
    <h2>N</h2>
    <table>
        <tr>
            <td class="term" data-term="Nautical Mile">Nautical Mile</td>
            <td class="description">A unit of measurement used in maritime and air navigation, equal to one minute of latitude.</td>
        </tr>
        <tr>
            <td class="term" data-term="Navigation">Navigation</td>
            <td class="description">The process of planning and controlling a ship's course and position.</td>
        </tr>
        <tr>
            <td class="term" data-term="Nose">Nose</td>
            <td class="description">The front part of the ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Nozzle">Nozzle</td>
            <td class="description">A device used to control the direction and flow of fluids, such as water or fuel.</td>
        </tr>
        <tr>
            <td class="term" data-term="Netting">Netting</td>
            <td class="description">A mesh material used for various purposes, including securing cargo or fish.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="O">
    <h2>O</h2>
    <table>
	<tr>
                <td class="term" data-term="Offshore Support Vessel">Offshore Support Vessel</td>
                <td class="description">A vessel that provides support for offshore operations.</td>
            </tr>
        <tr>
                <td class="term" data-term="Offshore">Offshore</td>
                <td class="description">Referring to activities, operations, or services that occur at sea, away from the shore.</td>
        </tr>
		<tr>
                <td class="term" data-term="Oil Tanker">Oil Tanker</td>
                <td class="description">A ship designed to carry oil cargo.</td>
        </tr>
		<tr>
                <td class="term" data-term="Onshore">Onshore</td>
                <td class="description">Referring to activities, operations, or services that take place on land, as opposed to offshore.</td>
        </tr>
        <tr>
            <td class="term" data-term="Oar">Oar</td>
            <td class="description">A long pole with a flat blade at one end, used for rowing a boat.</td>
        </tr>
        <tr>
            <td class="term" data-term="Overboard">Overboard</td>
            <td class="description">Falling or being thrown off a ship or boat into the water.</td>
        </tr>
        <tr>
            <td class="term" data-term="Outboard">Outboard</td>
            <td class="description">Refers to equipment or engines mounted on the outside of a boat.</td>
        </tr>
        <tr>
            <td class="term" data-term="Osmosis">Osmosis</td>
            <td class="description">The movement of water through a membrane to balance concentrations.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ordnance">Ordnance</td>
            <td class="description">Weapons and ammunition used on a ship.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="P">
    <h2>P</h2>
    <table>
	<tr>
            <td class="term" data-term="Platform Supply Vessel">Platform Supply Vessel</td>
            <td class="description">A vessel used to transport supplies to offshore platforms and rigs.</td>
        </tr>
        <tr>
            <td class="term" data-term="Pipe Lay Vessel">Pipe Lay Vessel</td>
            <td class="description">A ship specialized in laying pipes for underwater oil and gas pipelines.</td>
        </tr>
        <tr>
            <td class="term" data-term="Patrol Vessel">Patrol Vessel</td>
            <td class="description">A ship used for patrolling and monitoring maritime areas.</td>
        </tr>
        <tr>
            <td class="term" data-term="Pilot Vessel">Pilot Vessel</td>
            <td class="description">A ship used to transport maritime pilots to and from large vessels.</td>
        </tr>
	<tr>
            <td class="term" data-term="Provision">Provision</td>
            <td class="description">Supplies of food, drink, and other essentials for the crew and passengers on a ship.</td>
        </tr>
		<tr>
            <td class="term" data-term="Provision Supply">Provision Supply</td>
            <td class="description">The act of providing food, beverages, and other essential supplies to a ship or its crew.</td>
        </tr>
        <tr>
            <td class="term" data-term="Port">Port</td>
            <td class="description">The left side of a ship when facing forward; also a harbor for ships.</td>
        </tr>
        <tr>
            <td class="term" data-term="Propeller">Propeller</td>
            <td class="description">A device with blades that pushes water backward to move the ship forward.</td>
        </tr>
        <tr>
            <td class="term" data-term="Pilot">Pilot</td>
            <td class="description">A person who navigates and directs the course of a ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Porthole">Porthole</td>
            <td class="description">A small, circular window in a ship's hull.</td>
        </tr>
        <tr>
            <td class="term" data-term="Pitch">Pitch</td>
            <td class="description">The angle at which a ship's bow or stern tilts up or down.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="Q">
    <h2>Q</h2>
    <table>
        <tr>
            <td class="term" data-term="Quarterdeck">Quarterdeck</td>
            <td class="description">The part of a ship's deck reserved for officers and important ceremonies.</td>
        </tr>
        <tr>
            <td class="term" data-term="Quay">Quay</td>
            <td class="description">A platform or dock where ships are loaded and unloaded.</td>
        </tr>
        <tr>
            <td class="term" data-term="Quadrant">Quadrant</td>
            <td class="description">An instrument used for measuring angles or for navigation.</td>
        </tr>
        <tr>
            <td class="term" data-term="Quickstop">Quickstop</td>
            <td class="description">A maneuver or device used to rapidly slow down or stop a vessel.</td>
        </tr>
        <tr>
            <td class="term" data-term="Quintessential">Quintessential</td>
            <td class="description">Representing the most perfect or typical example of a quality or class.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="R">
    <h2>R</h2>
    <table>
	 <tr>
            <td class="term" data-term="Research Vessel">Research Vessel</td>
            <td class="description">A ship equipped for conducting scientific research at sea.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ro-Ro Ship">Ro-Ro Ship</td>
            <td class="description">A type of ship designed to carry vehicles that roll on and off the vessel.</td>
        </tr>
        <tr>
            <td class="term" data-term="Roro">Ro-Ro</td>
            <td class="description">A ship designed for vehicles and cargo to roll on and off.</td>
        </tr>
        <tr>
            <td class="term" data-term="Rudder">Rudder</td>
            <td class="description">A flat piece of wood or metal used to steer the ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Rigging">Rigging</td>
            <td class="description">The system of ropes and cables used to support and control sails.</td>
        </tr>
        <tr>
            <td class="term" data-term="Reef">Reef</td>
            <td class="description">A ridge of jagged rock, coral, or sand just below the surface of the sea.</td>
        </tr>
        <tr>
            <td class="term" data-term="Roller">Roller</td>
            <td class="description">A cylindrical device used for various purposes, including aiding in the movement of cargo.</td>
        </tr>
        <tr>
            <td class="term" data-term="Roadstead">Roadstead</td>
            <td class="description">An area of water sheltered by land where ships can anchor safely.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="S">
    <h2>S</h2>
    <table>
	<tr>
                <td class="term" data-term="Submersibles">Submersibles</td>
                <td class="description">Small underwater vehicles used for exploration.</td>
            </tr>
            <tr>
                <td class="term" data-term="Seafarer">Seafarer</td>
                <td class="description">A person who works on a ship or is involved in maritime activities, often referring to sailors or crew members.</td>
            </tr>
			<tr>
                <td class="term" data-term="Semi Submersibles">Semi Submersibles</td>
                <td class="description">Floating platforms partially submerged to provide stability.</td>
            </tr>
            <tr>
                <td class="term" data-term="Salvage Vessel">Salvage Vessel</td>
                <td class="description">A vessel used for recovering wrecked or damaged ships.</td>
            </tr>
            <tr>
                <td class="term" data-term="Ship Manager">Ship Manager</td>
                <td class="description">A person or company responsible for managing a ship's operations.</td>
            </tr>
            <tr>
                <td class="term" data-term="Seismic Research Vessel">Seismic Research Vessel</td>
                <td class="description">A vessel used for conducting underwater seismic research.</td>
            </tr>
	<tr>
            <td class="term" data-term="Ship Supplier">Ship Supplier</td>
            <td class="description">A company or individual that provides necessary equipment, provisions, and supplies to ships.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ship Chandler">Ship Chandler</td>
            <td class="description">A professional company that supplies ships with necessary provisions and equipment, often including food, tools, and maintenance supplies.</td>
        </tr>
		<tr>
                <td class="term" data-term="Ship Manager">Ship Manager</td>
                <td class="description">A person or company responsible for managing a ship's operations.</td>
        </tr>
		<tr>
                <td class="term" data-term="Ship Supply">Ship Supply</td>
                <td class="description">The provision of necessary equipment, materials, and services to ships to ensure their operational readiness.</td>
        </tr>
		<tr>
                <td class="term" data-term="Ship Technical Services">Ship Technical Services</td>
                <td class="description">Specialized services provided for the maintenance, repair, and operation of ship systems and equipment.</td>
        </tr>
        <tr>
            <td class="term" data-term="Stern">Stern</td>
            <td class="description">The rear part of a ship or boat.</td>
        </tr>
        <tr>
            <td class="term" data-term="Starboard">Starboard</td>
            <td class="description">The right side of a ship when facing forward.</td>
        </tr>
        <tr>
            <td class="term" data-term="Scuppers">Scuppers</td>
            <td class="description">Openings in the deck for draining water off the ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Sail">Sail</td>
            <td class="description">A piece of fabric used to catch the wind and propel a boat or ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Shoreline">Shoreline</td>
            <td class="description">The line where land meets the sea or a lake.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="T">
    <h2>T</h2>
    <table>
	<tr>
                <td class="term" data-term="Tankers">Tankers</td>
                <td class="description">Large ships designed to carry liquid cargo.</td>
            </tr>
            <tr>
                <td class="term" data-term="Tugboat">Tugboat</td>
                <td class="description">A small, powerful boat used to tow or push ships.</td>
            </tr>
            <tr>
                <td class="term" data-term="Tenders">Tender</td>
                <td class="description">A small boat used to transport people or supplies to and from a larger vessel.</td>
            </tr>
        <tr>
            <td class="term" data-term="Technical Stores">Technical Store</td>
            <td class="description">Spare parts, tools, and equipment used for maintenance and repair.</td>
        </tr>
	<tr>
            <td class="term" data-term="Technical Stores">Technical Stores</td>
            <td class="description">Spare parts, tools, and equipment used for the maintenance and repair of ship machinery and systems.</td>
        </tr>
        <tr>
            <td class="term" data-term="Tiller">Tiller</td>
            <td class="description">A lever used to control the rudder of a ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Tide">Tide</td>
            <td class="description">The periodic rise and fall of sea levels caused by the gravitational effects of the moon and sun.</td>
        </tr>
        <tr>
            <td class="term" data-term="Turbine">Turbine</td>
            <td class="description">A rotary engine that extracts energy from fluid flow, often used for propulsion or power generation.</td>
        </tr>
        <tr>
            <td class="term" data-term="Transom">Transom</td>
            <td class="description">The horizontal beam at the stern of a ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Thwart">Thwart</td>
            <td class="description">A seat or row across the width of a boat, used for rowing or as a brace.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="U">
    <h2>U</h2>
    <table>
        <tr>
            <td class="term" data-term="Underway">Underway</td>
            <td class="description">A term used to indicate that a ship is moving and not at anchor or made fast to a dock.</td>
        </tr>
        <tr>
            <td class="term" data-term="Upwind">Upwind</td>
            <td class="description">The direction from which the wind is blowing.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ullage">Ullage</td>
            <td class="description">The amount by which a container is not full, particularly in tanks on ships.</td>
        </tr>
        <tr>
            <td class="term" data-term="Underdeck">Underdeck</td>
            <td class="description">The area of a ship located below the main deck.</td>
        </tr>
        <tr>
            <td class="term" data-term="Union">Union</td>
            <td class="description">A connection or joint between different parts of a ship or between ships and their cargo.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="V">
    <h2>V</h2>
    <table>
        <tr>
            <td class="term" data-term="Vessel">Vessel</td>
            <td class="description">A general term for any type of boat or ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Vang">Vang</td>
            <td class="description">A rope or tackle used to control the angle of a sail to the wind.</td>
        </tr>
        <tr>
            <td class="term" data-term="Ventilation">Ventilation</td>
            <td class="description">The process of supplying fresh air and removing stale air from a ship.</td>
        </tr>
        <tr>
            <td class="term" data-term="Voyage">Voyage</td>
            <td class="description">A long journey by sea.</td>
        </tr>
        <tr>
            <td class="term" data-term="Vortex">Vortex</td>
            <td class="description">A flow pattern of fluid with a whirling motion, often seen in wake turbulence behind ships.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="W">
    <h2>W</h2>
    <table>
        <tr>
            <td class="term" data-term="Wake">Wake</td>
            <td class="description">The trail of disturbed water left behind a moving ship.</td>
        </tr>
		<tr>
            <td class="term" data-term="Warehouse">Warehouse</td>
            <td class="description">A large building or facility where goods and materials are stored before distribution or sale.</td>
        </tr>
        <tr>
            <td class="term" data-term="Wharf">Wharf</td>
            <td class="description">A structure built along the shore where ships can dock and load or unload cargo.</td>
        </tr>
        <tr>
            <td class="term" data-term="Winch">Winch</td>
            <td class="description">A mechanical device used for hauling in or letting out rope or cable.</td>
        </tr>
        <tr>
            <td class="term" data-term="Weld">Weld</td>
            <td class="description">A process of joining metal parts together by melting and fusing them.</td>
        </tr>
        <tr>
            <td class="term" data-term="Windlass">Windlass</td>
            <td class="description">A mechanical device used for raising and lowering an anchor or other heavy objects.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="X">
    <h2>X</h2>
    <table>
        <tr>
            <td class="term" data-term="Xenon">Xenon</td>
            <td class="description">A rare gas sometimes used in ship's lighting systems.</td>
        </tr>
        <tr>
            <td class="term" data-term="Xenolith">Xenolith</td>
            <td class="description">A fragment of rock from the ocean floor that becomes embedded in the ship's hull.</td>
        </tr>
        <tr>
            <td class="term" data-term="X-Boat">X-Boat</td>
            <td class="description">A type of experimental or prototype boat used for testing new designs or technologies.</td>
        </tr>
        <tr>
            <td class="term" data-term="Xerox">Xerox</td>
            <td class="description">A brand name that may refer to copying documents onboard, though not directly related to nautical terms.</td>
        </tr>
        <tr>
            <td class="term" data-term="X-Hull">X-Hull</td>
            <td class="description">A specific hull design used for stability and performance, often in racing boats.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="Y">
    <h2>Y</h2>
    <table>
	<tr>
            <td class="term" data-term="Yacht">Yacht</td>
            <td class="description">A luxury vessel used for recreation or cruising.</td>
        </tr>
        <tr>
            <td class="term" data-term="Yaw">Yaw</td>
            <td class="description">The movement of a ship's bow from side to side.</td>
        </tr>
        <tr>
            <td class="term" data-term="Yacht">Yacht</td>
            <td class="description">A medium to large-sized vessel used for recreational purposes.</td>
        </tr>
        <tr>
            <td class="term" data-term="Yoke">Yoke</td>
            <td class="description">A bar or frame used to control the steering of a ship or aircraft.</td>
        </tr>
        <tr>
            <td class="term" data-term="Yard">Yard</td>
            <td class="description">A horizontal spar or beam on a ship's mast from which sails are set.</td>
        </tr>
        <tr>
            <td class="term" data-term="Yardarm">Yardarm</td>
            <td class="description">The end of a ship's yard where the sail is attached.</td>
        </tr>
    </table>
</div>
<div class="letter-group" data-letter="Z">
    <h2>Z</h2>
    <table>
        <tr>
            <td class="term" data-term="Zephyr">Zephyr</td>
            <td class="description">A gentle, light breeze.</td>
        </tr>
        <tr>
            <td class="term" data-term="Zodiac">Zodiac</td>
            <td class="description">A brand name for inflatable boats used for various maritime activities.</td>
        </tr>
        <tr>
            <td class="term" data-term="Zoning">Zoning</td>
            <td class="description">The process of designating specific areas for certain types of maritime activities.</td>
        </tr>
        <tr>
            <td class="term" data-term="Zebra Mussel">Zebra Mussel</td>
            <td class="description">An invasive species of freshwater mollusk known to cause problems for ships and waterways.</td>
        </tr>
        <tr>
            <td class="term" data-term="Zinc">Zinc</td>
            <td class="description">A metal used in anti-corrosion treatments for ships' hulls.</td>
        </tr>
    </table>
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

