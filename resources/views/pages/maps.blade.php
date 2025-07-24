<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Maps Page</title>
  <link rel="stylesheet" href="style.css" />
  <style>
  /* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background: linear-gradient(to bottom, #e0f2fe, #fff);
  color: #333;
  line-height: 1.6;
}

a {
  text-decoration: none;
  color: inherit;
}

.container {
  width: 90%;
  max-width: 1100px;
  margin: auto;
}

/* Navbar */
.navbar {
  background-color: #fff;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  position: sticky;
  top: 0;
  z-index: 1000;
}

.navbar .container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 0;
}

.logo {
  font-size: 1.5rem;
  font-weight: bold;
  color: #1e3a8a;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 2rem;
}

.nav-links a {
  color: #333;
  padding-bottom: 4px;
  border-bottom: 2px solid transparent;
  transition: all 0.3s;
}

.nav-links a:hover,
.nav-links .active {
  color: #1d4ed8;
  border-color: #1d4ed8;
}

.menu-toggle {
  display: none;
  font-size: 1.5rem;
  background: none;
  border: none;
}

/* Responsive Menu */
@media (max-width: 768px) {
  .nav-links {
    display: none;
    flex-direction: column;
    background: #fff;
    padding: 1rem;
    border-top: 1px solid #eee;
  }

  .nav-links.show {
    display: flex;
  }

  .menu-toggle {
    display: block;
  }
}

/* Header */
.page-header {
  text-align: center;
  padding: 3rem 1rem 2rem;
}

.page-header h1 {
  font-size: 2.5rem;
  color: #0f172a;
}

.page-header p {
  color: #64748b;
  margin-top: 0.5rem;
}

/* Filter Section */
.filter-section {
  margin-bottom: 2rem;
}

.filter-section .container {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  align-items: center;
}

.search-input,
.city-select {
  width: 100%;
  max-width: 400px;
  padding: 0.75rem 1rem;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 1rem;
}

body {
      font-family: sans-serif;
      background-color: #f4f4f4;
      padding: 40px;
    }

    .map-section {
      padding: 20px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
      margin-bottom: 60px;
    }

    .map-section h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 30px;
      color: #2c3e50;
    }

    .map-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .map-card {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 16px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      text-align: center;
      transition: transform 0.2s ease-in-out;
    }

    .map-card:hover {
      transform: translateY(-5px);
    }

    .map-card img {
      width: 100%;
      border-radius: 8px;
      cursor: pointer;
      margin-bottom: 10px;
      transition: 0.3s ease;
    }

    .map-title {
      font-size: 18px;
      font-weight: bold;
      margin: 10px 0 5px;
      color: #333;
    }

    .map-card p {
      margin: 5px 0;
      color: #666;
    }

    .btn-link {
      display: inline-block;
      margin: 6px;
      padding: 6px 12px;
      font-size: 14px;
      text-decoration: none;
      border-radius: 4px;
      background-color: #3498db;
      color: #fff;
      transition: background-color 0.3s ease;
    }

    .btn-link:hover {
      background-color: #2980b9;
    }

    /* Modal preview */
    .modal {
      display: none;
      position: fixed;
      z-index: 9999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.85);
    }

    .modal-content {
      display: block;
      margin: 60px auto;
      max-width: 90%;
      max-height: 80%;
      border-radius: 8px;
    }

    .close {
      position: absolute;
      top: 20px;
      right: 30px;
      color: white;
      font-size: 32px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover {
      color: red;
    }
    .map-section {
  padding: 2rem 1rem;
}

.map-section h2 {
  text-align: center;
  font-size: 1.75rem;
  margin-bottom: 2rem;
}

/* Map Cards */
.map-grid {
  display: grid;
  gap: 1.5rem;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
}

.map-card {
  background: #fff;
  border: 1px solid #e5e7eb;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
  transition: transform 0.3s;
}

.map-card:hover {
  transform: translateY(-4px);
}

.map-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}

.map-title {
  text-align: center;
  font-weight: bold;
  padding: 1rem;
}

.map-info {
  padding: 1rem;
}

.map-info h3 {
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
}

.map-info p {
  color: #555;
  font-size: 0.9rem;
  margin-bottom: 0.25rem;
}

.btn-link {
  color: #2563eb;
  font-weight: 500;
  margin-right: 10px;
}

.btn-buy {
  background: #16a34a;
  color: white;
  padding: 0.5rem 1rem;
  border-radius: 6px;
  font-size: 0.9rem;
  font-weight: 500;
  transition: background 0.3s;
}

.btn-buy:hover {
  background: #15803d;
}

/* Utility */
.hidden {
  display: none;
  .map-card {
  @apply bg-white rounded shadow-md p-4 space-y-2;
}
.btn-link {
  @apply inline-block mt-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition;
}

</style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="container">
      <img src="{{ asset('assets/images/MD Logo.png') }}" alt="Maps Download Logo" style="height: 120px;">
    </a>
      <a href="/" class="logo">Maps Download</a>
       
      <ul class="nav-links" id="navLinks">
        <li><a href="/">Home</a></li>
        <li><a href="/maps" class="active">Maps</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
       
      </ul>
      <button id="menuToggle" class="menu-toggle">☰</button>
    </div>
  </nav>

  <!-- Header -->
  <header class="page-header">
    <h1>Our Recent Works</h1>
    <p>Explore our detailed regional maps with ease.</p>
  </header>

  <!-- Search and City Filter -->
  <section class="filter-section">
    <div class="container">
      <input type="text" placeholder="🔍 Search map title..." class="search-input" />
      <select id="citySelect" class="city-select">
        <option value="">-- Choose Region/State--</option>
        <option value="yangon">Yangon  Region</option>
        <option value="tanithary">Tanithary Region </option>
        <option value="mandalay">Mandalay Region</option>
        <option value="sagaing">Sagaing Region</option>
        <option value="bago">Bago Region</option>
        <option value="ayeyarwady">Ayeyarwady Region </option>
        <option value="magway">Magway Region</option>
       

        <option value="chin">Chin State </option>
        <option value="kachin">Kachin State</option>
        <option value="kayah">Kayah State</option>
        <option value="kayin">Kayin State </option>
        <option value="mon">Mon State</option>
        <option value="rakhine">Rakhine State</option>
        <option value="shan">Shan State </option>
      </select>
    </div>
  </section>

 

  <!-- Yangon Section -->
  <section id="yangonMaps" class="map-section hidden">
    <h2>Yangon Township Maps</h2>
    <div class="map-grid">
      <div class="map-card">
        <img src="{{ asset('assets/images/maps/Yangon/ahlone.jpg') }}" alt="Ahlone Township">
        <div class="map-title">Ahlone Township</div>
        <p>PDF Price: 300000</p>
          <a href="{{ asset('assets/images/maps/Yangon/ahlone.jpg') }}" download="ahlone-map.jpg" class="btn-link">
            Download 
          </a>

         <a href="{{ url('/buy?image=ahlone.pdf&title=Ahlone Township') }}">
          Buy PDF
         </a>
     </div>
 
      <div class="map-card">
             <img src="{{ asset('assets/images/maps/Yangon/bahan.jpg') }}" alt="Bahan Township">
                  <div class="map-title">Bahan Township</div>
                                      <p>PDF Price:300000</p>
            <a href="{{ asset('assets/images/maps/Yangon/bahan.jpg') }}" download="bahan.jpg" class="btn-link">
                                          Download 
            </a>
           <a href="{{ url('/buy?image=bahan.jpg&title=Bahan Township') }}">
                                          Buy PDF
           </a>
      </div>
      <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/dagon.jpg') }}" alt="Dagon Township">
                  <div class="map-title">Dagon Township</div>
                                       <p>PDF Price:300000</p>
               <a href="{{ asset('assets/images/maps/Yangon/dagon.jpg') }}" download="dagon.jpg" class="btn-link">
                                           Download 
               </a>
               <a href="{{ url('/buy?image=dagon.jpg&title=DagonTownship') }}">
                                            Buy PDF
              </a>
      </div>

      <div class="map-card">
              <img src="{{ asset('assets/images/maps/Yangon/dagon-seikkan.jpg') }}" alt="Dagon Seikkan Township">
                 <div class="map-title">Dagon Seikkan Township</div>
                                     <p>PDF Price:300000</p>
                 <a href="{{ asset('assets/images/maps/Yangon/dagon-seikkan.jpg') }}" download="dagon-seikkan.jpg" class="btn-link">
                                         Download 
                </a>
                <a href="{{ url('/buy?image=dagon-seikkan.jpg&title=Dagon Seikkan Township') }}">
                                          Buy PDF
                </a>
      </div>
      </div><br><br>

     <div class="map-grid">
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/daw-bon.jpg') }}" alt="Dawbon Township">
                  <div class="map-title">Dawbon Township</div>
                  <p>PDF Price: 300000</p>
                <a href="{{ asset('assets/images/maps/Yangon/daw-bon.jpg') }}" download="daw-bon.jpg" class="btn-link">
                            Download 
                </a>

                <a href="{{ url('/buy?image=dagon-daw-bon.jpg&title=Dawbon Township') }}">
                             Buy PDF
                </a>
     </div>
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/east-dagon.jpg') }}" alt="East Dagon Township">
                  <div class="map-title">East Dagon Township</div>
                  <p>PDF Price:300000</p>
                 <a href="{{ asset('assets/images/maps/Yangon/east-dagon.jpg') }}" download="east-dagon.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=east-dagon.jpg&title=East Dagon Township') }}">
                   Buy PDF
                  </a>
      </div>
      <div class="map-card">
                 <img src="{{ asset('assets/images/maps/Yangon/hlaing-tharyar_east.jpg') }}" alt="Hlaing Tharyar Township">
                  <div class="map-title">Hlaing Tharyar Township (East)</div>
                  <p>PDF Price:300000</p>
                  <a href="{{ asset('assets/images/maps/Yangon/hlaing-tharyar_east.jpg') }}" download="hlaing-tharyar_east.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=hlaing-tharyar_east.jpg&title=Hlaing Tharyar Township(East)') }}">
                   Buy PDF
                   </a>
      </div>
      <div class="map-card">
                   <img src="{{ asset('assets/images/maps/Yangon/hlaing-tharyar_west.jpg') }}" alt="Hlaing Tharyar Township (West)">
                   <div class="map-title">Hlaing Tharyar Township (West)</div>
                   <p>PDF Price:300000</p>
                   <a href="{{ asset('assets/images/maps/Yangon/hlaing-tharyar_west.jpg') }}" download="hlaing-tharyar_east.jpg" class="btn-link">
                    Download 
                  </a>
                  <a href="{{ url('/buy?image=hlaing-tharyar_west.jpg&title=Hlaing Tharyar Township(West)') }}">
                  Buy PDF
                  </a>
      </div>
    </div>
<br><br>
    <div class="map-grid">
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/kamaryut.jpg') }}" alt="Kamaryut Township">
                  <div class="map-title">Kamaryut Township</div>
                  <p>PDF Price: 300000</p>
                <a href="{{ asset('assets/images/maps/Yangon/kamaryut.jpg') }}" download="kamaryut.jpg" class="btn-link">
                            Download 
                </a>

                <a href="{{ url('/buy?image=kamaryut.pdf&title=KamaryutTownship') }}">
                             Buy PDF
                </a>
     </div>
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/kyauk-tada.jpg') }}" alt="Kyauk-tada Township">
                  <div class="map-title">Kyauk Tada Township</div>
                  <p>PDF Price:300000</p>
                 <a href="{{ asset('assets/images/maps/Yangon/kyauk-tada.jpg') }}" download="Kyauk-tada.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=kyauk-tada.pdf&title=East Kyauk-tada Township') }}">
                   Buy PDF
                  </a>
      </div>
      <div class="map-card">
                 <img src="{{ asset('assets/images/maps/Yangon/kyi-myin-daing.jpg') }}" alt="Hlaing Tharyar Township">
                  <div class="map-title">Kyee Myin Daing Township</div>
                  <p>PDF Price:300000</p>
                  <a href="{{ asset('assets/images/maps/Yangon/kyi-myin-daing.jpg') }}" download="kyi-myin-daing.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=hlaing-kyi-myin-daing.pff&title=Kyee Myin Daing Township') }}">
                   Buy PDF
                   </a>
      </div>
      <div class="map-card">
                   <img src="{{ asset('assets/images/maps/Yangon/lanmadaw.jpg') }}" alt="Lanmadaw Township">
                   <div class="map-title">Lanmadaw Township</div>
                   <p>PDF Price:300000</p>
                   <a href="{{ asset('assets/images/maps/Yangon/lanmadaw.jpg') }}" download="lanmadaw.jpg" class="btn-link">
                    Download 
                  </a>
                  <a href="{{ url('/buy?image=lanmadaw.pdf&title=Lanmadaw Township') }}">
                  Buy PDF
                  </a>
      </div>
    </div><br><br>
   
    <div class="map-grid">
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/latha.jpg') }}" alt="Latha Township">
                  <div class="map-title">Latha Township</div>
                  <p>PDF Price: 300000</p>
                <a href="{{ asset('assets/images/maps/Yangon/latha.jpg') }}" download="latha.jpg" class="btn-link">
                            Download 
                </a>

                <a href="{{ url('/buy?image=latha.pdf&title=Latha Township') }}">
                             Buy PDF
                </a>
     </div>
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/mayangone.jpg') }}" alt="Mayangone Township">
                  <div class="map-title">Mayangone Township</div>
                  <p>PDF Price:300000</p>
                 <a href="{{ asset('assets/images/maps/Yangon/mayangone.jpg') }}" download="mayangone" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=mayangone.pdf&title=Mayangone Township') }}">
                   Buy PDF
                  </a>
      </div>
      <div class="map-card">
                 <img src="{{ asset('assets/images/maps/Yangon/mingalardon.jpg') }}" alt="Mingalardon Township">
                  <div class="map-title">Mingalardon Township</div>
                  <p>PDF Price:300000</p>
                  <a href="{{ asset('assets/images/maps/Yangon/mingalardon.jpg') }}" download="mingalardon.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=mingalardon.pdf&title=Mingalardon Township') }}">
                   Buy PDF
                   </a>
      </div>
      <div class="map-card">
                   <img src="{{ asset('assets/images/maps/Yangon/north-dagon.jpg') }}" alt="North Dagon Township">
                   <div class="map-title">North Dagon Township</div>
                   <p>PDF Price:300000</p>
                   <a href="{{ asset('assets/images/maps/Yangon/north-dagon.jpg') }}" download="north-dagon.jpg" class="btn-link">
                    Download 
                  </a>
                  <a href="{{ url('/buy?image=north-dagon.pdf&title=North Dagon Township') }}">
                  Buy PDF
                  </a>
      </div>
     </div> <br><br>

      <div class="map-grid">
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/north-okkalapa.jpg') }}" alt="North Okkalapa Township">
                  <div class="map-title">North Okkalapa Township</div>
                  <p>PDF Price: 300000</p>
                <a href="{{ asset('assets/images/maps/Yangon/north-okkalapa.jpg') }}" download="north-okkalapa.jpg" class="btn-link">
                            Download 
                </a>

                <a href="{{ url('/buy?image=north-okkalapa.pdf&title=North Okkalapa Township') }}">
                             Buy PDF
                </a>
     </div>
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/pabedan.jpg') }}" alt="Pabedan Township">
                  <div class="map-title">Pabedan Township</div>
                  <p>PDF Price:300000</p>
                 <a href="{{ asset('assets/images/maps/Yangon/pabedan.jpg') }}" download="pabedan.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=pabedan.pdf&title=Pabedan Township') }}">
                   Buy PDF
                  </a>
      </div>
      <div class="map-card">
                 <img src="{{ asset('assets/images/maps/Yangon/sanchaung.jpg') }}" alt="Sanchaung Township">
                  <div class="map-title">Sanchaung Township</div>
                  <p>PDF Price:300000</p>
                  <a href="{{ asset('assets/images/maps/Yangon/sanchaung.jpg') }}" download="sanchaung.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=sanchaung.pdf&title=Sanchaung Township') }}">
                   Buy PDF
                   </a>
      </div>
      <div class="map-card">
                   <img src="{{ asset('assets/images/maps/Yangon/shwe-pyi-thar.jpg') }}" alt="Shwe Pyi Tharr Township">
                   <div class="map-title">Shwe Pyi Thar Township</div>
                   <p>PDF Price:300000</p>
                   <a href="{{ asset('assets/images/maps/Yangon/shwe-pyi-thar.jpg') }}" download="shwe-pyi-thar.jpg" class="btn-link">
                    Download 
                  </a>
                  <a href="{{ url('/buy?image=shwe-pyi-thar.pdf&title=Shwe Pyi Thar Township') }}">
                  Buy PDF
                  </a>
      </div>
     </div> <br><br>

      <div class="map-grid">
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/south-dagon.jpg') }}" alt="South Dagon Township">
                  <div class="map-title">South Dagon Township</div>
                  <p>PDF Price: 300000</p>
                <a href="{{ asset('assets/images/maps/Yangon/south-dagon.jpg') }}" download="south-dagon.jpg" class="btn-link">
                            Download 
                </a>

                <a href="{{ url('/buy?image=south-dagon.pdf&title=South Dagon Township') }}">
                             Buy PDF
                </a>
     </div>
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/tarmwe.jpg') }}" alt="Tarmwe Township">
                  <div class="map-title">Tarmwe Township</div>
                  <p>PDF Price:300000</p>
                 <a href="{{ asset('assets/images/maps/Yangon/tarmwe.jpg') }}" download="tarmwe.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=tarmwe.pdf&title=Tarmwe Township') }}">
                   Buy PDF
                  </a>
      </div>
      <div class="map-card">
                 <img src="{{ asset('assets/images/maps/Yangon/thaketa.jpg') }}" alt="Thaketa Township">
                  <div class="map-title">Thaketa Township</div>
                  <p>PDF Price:300000</p>
                  <a href="{{ asset('assets/images/maps/Yangon/thaketa.jpg') }}" download="thaketa.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=thaketa.pdf&title=Thaketa Township') }}">
                   Buy PDF
                   </a>
      </div>
      <div class="map-card">
                   <img src="{{ asset('assets/images/maps/Yangon/thingangyun.jpg') }}" alt="Thingangyun Township (West)">
                   <div class="map-title">Thingangyun Township </div>
                   <p>PDF Price:300000</p>
                   <a href="{{ asset('assets/images/maps/Yangon/thingangyun.jpg') }}" download="thingangyun.jpg" class="btn-link">
                    Download 
                  </a>
                  <a href="{{ url('/buy?image=thingangyun.pdf&title=Thingangyun Township') }}">
                  Buy PDF
                  </a>
      </div>
     </div> <br><br>

     <div class="map-grid">
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/yankin.jpg') }}" alt="Yankin Township">
                  <div class="map-title">Yankin Township</div>
                  <p>PDF Price: 300000</p>
                <a href="{{ asset('assets/images/maps/Yangon/yankin.jpg') }}" download="yankin.jpg" class="btn-link">
                            Download 
                </a>

                <a href="{{ url('/buy?image=yankin.pdf&title=Yankin Township') }}">
                             Buy PDF
                </a>
     </div>
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/south-okkalapa.jpg') }}" alt="South Okkalapa Township">
                  <div class="map-title">South Okkalapa Township</div>
                  <p>PDF Price:300000</p>
                 <a href="{{ asset('assets/images/maps/Yangon/south-okkalapa.jpg') }}" download="south-okkalapa.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=south-okkalapa.pdf&title=South Okkalapa Township') }}">
                   Buy PDF
                  </a>
      </div>
      <div class="map-card">
                 <img src="{{ asset('assets/images/maps/Yangon/thanlyin.jpg') }}" alt="Thanlyin Township">
                  <div class="map-title">Thanlyin Township</div>
                  <p>PDF Price:300000</p>
                  <a href="{{ asset('assets/images/maps/Yangon/thanlyin.jpg') }}" download="thanlyin.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=thanlyin.pdf&title=Thanlyin Township') }}">
                   Buy PDF
                   </a>
      </div>
      <div class="map-card">
                   <img src="{{ asset('assets/images/maps/Yangon/botahtaung.jpg') }}" alt="Botahtaung Township (West)">
                   <div class="map-title">Botahtaung Township </div>
                   <p>PDF Price:300000</p>
                   <a href="{{ asset('assets/images/maps/Yangon/botahtaung.jpg') }}" download="botahtaung.jpg" class="btn-link">
                    Download 
                  </a>
                  <a href="{{ url('/buy?image=botahtaung.pdf&title=Botahtaung Township') }}">
                  Buy PDF
                  </a>
      </div>
     </div> <br><br>

      <div class="map-grid">
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/dala.jpg') }}" alt="Dala Township">
                  <div class="map-title">Dala Township</div>
                  <p>PDF Price: 300000</p>
                <a href="{{ asset('assets/images/maps/Yangon/dala.jpg') }}" download="dala.jpg" class="btn-link">
                            Download 
                </a>

                <a href="{{ url('/buy?image=dala.pdf&title=Dala Township') }}">
                             Buy PDF
                </a>
     </div>
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/hlaing.jpg') }}" alt="Hlaing Township">
                  <div class="map-title">Hlaing Township</div>
                  <p>PDF Price:300000</p>
                 <a href="{{ asset('assets/images/maps/Yangon/hlaing.jpg') }}" download="hlaing.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=hlaing.pdf&title=Hlaing Township') }}">
                   Buy PDF
                  </a>
      </div>
      <div class="map-card">
                 <img src="{{ asset('assets/images/maps/Yangon/mingalar-taung-nyunt.jpg') }}" alt="Mingalar Taung Nyunt">
                  <div class="map-title">Mingalar Taung Nyunt Township</div>
                  <p>PDF Price:300000</p>
                  <a href="{{ asset('assets/images/maps/Yangon/mingalar-taung-nyunt.jpg') }}" download="mingalar-taung-nyunt.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=mingalar-taung-nyunt.pdf&title=Mingalar Taung Nyunt') }}">
                   Buy PDF
                   </a>
      </div>
      <div class="map-card">
                   <img src="{{ asset('assets/images/maps/Yangon/pazundaung.jpg') }}" alt="Pazundaung Township">
                   <div class="map-title">Pazundaung Township </div>
                   <p>PDF Price:300000</p>
                   <a href="{{ asset('assets/images/maps/Yangon/pazundaung.jpg') }}" download="pazundaung.jpg" class="btn-link">
                    Download 
                  </a>
                  <a href="{{ url('/buy?image=pazundaung.pdf&title=Pazundaung Township') }}">
                  Buy PDF
                  </a>
      </div>
     </div> <br><br>

      <div class="map-grid">
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/seikkan.jpg') }}" alt="Seikkan Township">
                  <div class="map-title">Seikkan Township</div>
                  <p>PDF Price: 300000</p>
                <a href="{{ asset('assets/images/maps/Yangon/seikkan.jpg') }}" download="seikkan.jpg" class="btn-link">
                            Download 
                </a>

                <a href="{{ url('/buy?image=seikkan.pdf&title=Seikkan Township') }}">
                             Buy PDF
                </a>
     </div>
     <div class="map-card">
               <img src="{{ asset('assets/images/maps/Yangon/seikkyi-khanaungto.jpg') }}" alt="Seikkyi Khanaungto Township">
                  <div class="map-title">Seikkyi Khanaungto Township</div>
                  <p>PDF Price:300000</p>
                 <a href="{{ asset('assets/images/maps/Yangon/seikkyi-khanaungto.jpg') }}" download="seikkyi-khanaungto.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=seikkyi-khanaungto.pdf&title=Seikkyi Khanaungto Township') }}">
                   Buy PDF
                  </a>
      </div>
      <div class="map-card">
                 <img src="{{ asset('assets/images/maps/Yangon/insein.jpg') }}" alt="Insein Township">
                  <div class="map-title">Insein Township</div>
                  <p>PDF Price:300000</p>
                  <a href="{{ asset('assets/images/maps/Yangon/insein.jpg') }}" download="insein.jpg" class="btn-link">
                   Download 
                  </a>
                  <a href="{{ url('/buy?image=insein.pdf&title=Insein Township') }}">
                   Buy PDF
                   </a>
      </div>
     </div> <br><br>
  </section>
<!--Yangon Section End-->
    <!-- Tanithary Section Start-->
     <section id="tanitharyMaps" class="map-section">
    <h2>Tanintharyi Township Maps</h2>
    <div class="map-grid">
      @foreach([
        ['Dawei', 'Dawei Township'],
        ['Myeik', 'Myeik Township'],
        ['Bokpyin', 'Bokpyin Township'],
        ['Kawthoung', 'Kawthoung Township'],
      ] as [$file, $title])
      <div class="map-card">
        <img src="{{ asset("assets/images/maps/Tanithary/$file.jpg") }}" alt="{{ $title }}" onclick="openModal(this.src)">
        <div class="map-title">{{ $title }}</div>
        <p>PDF Price: 300000</p>
        <a href="{{ asset("assets/images/maps/Tanithary/$file.jpg") }}" download="{{ $file }}.jpg" class="btn-link">Download</a>
        <a href="{{ url("/buy?image=$file.pdf&title=$title") }}" class="btn-link" style="background-color: green;">Buy PDF</a>
      </div>
      @endforeach
    </div>
  </section>

  <!-- Image Modal -->
  <div id="imageModal" class="modal" onclick="closeModal()">
    <span class="close" onclick="closeModal()">×</span>
    <img class="modal-content" id="modalImage">
  </div>

  <script>
    function openModal(src) {
      const modal = document.getElementById('imageModal');
      const modalImg = document.getElementById('modalImage');
      modal.style.display = "block";
      modalImg.src = src;
    }

    function closeModal() {
      document.getElementById('imageModal').style.display = "none";
    }
  </script>

   <!-- Tanithary Section End-->
 
  

   <!-- Mandalay Section -->
  <section id="mandalayMaps" class="map-section hidden">
    <h2>Mandalay Township Maps</h2>
    <div class="map-grid">
      <div class="map-card">
        <img src="public\assets\img\maps\free\ahlone.jpg" alt="Ahlone Township">
        <div class="map-title">Ahlone Township</div>
      </div>
      <div class="map-card">
        <img src="maps/yangon/bahan.jpg" alt="Bahan Township">
        <div class="map-title">Bahan Township</div>
      </div>
    </div>
  </section>

  <!-- Sagaing Section -->
  <section id="sagaingMaps" class="map-section hidden">
    <h2>Sagaing Township Maps</h2>
    <div class="map-grid">
      <div class="map-card">
        <img src="public\assets\img\maps\free\ahlone.jpg" alt="Ahlone Township">
        <div class="map-title">Ahlone Township</div>
        <p>Price: Free</p>
          <a href="maps/sample-map.pdf" download class="btn-link">Download</a>
         <a href="{{ url('/buy-map') }}"
                 class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">
                 Buy PDF
             </a>
      </div>
      <div class="map-card">
        <img src="public\assets\img\maps\free\bahan.jpg" alt="Bahan Township">
        <div class="map-title">Bahan Township</div>
        <p>Price: Free</p>
          <a href="maps/sample-map.pdf" download class="btn-link">Download</a>
         <a href="{{ url('/buy-map') }}"
                 class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">
                 Buy PDF
             </a>
      </div>
    </div>
  </section>

   <!-- Bago Section -->
  <section id="bagoMaps" class="map-section hidden">
    <h2>Bago Township Maps</h2>
    <div class="map-grid">
      <div class="map-card">
        <img src="public\assets\img\maps\free\ahlone.jpg" alt="Ahlone Township">
        <div class="map-title">Ahlone Township</div>
      </div>
      <div class="map-card">
        <img src="maps/yangon/bahan.jpg" alt="Bahan Township">
        <div class="map-title">Bahan Township</div>
      </div>
    </div>
  </section>

  <!-- Yangon Section -->
  <section id="yangonMaps" class="map-section hidden">
    <h2>Yangon District Maps</h2>
    <div class="map-grid">
      <div class="map-card">
        <img src="public\assets\img\maps\free\ahlone.jpg" alt="Ahlone Township">
        <div class="map-title">Ahlone Township</div>
        <p>Price: Free</p>
          <a href="maps/sample-map.pdf" download class="btn-link">Download</a>
         <a href="{{ url('/buy-map') }}"
                 class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">
                 Buy PDF
             </a>
      </div>
      <div class="map-card">
        <img src="public\assets\img\maps\free\bahan.jpg" alt="Bahan Township">
        <div class="map-title">Bahan Township</div>
        <p>Price: Free</p>
          <a href="maps/sample-map.pdf" download class="btn-link">Download</a>
         <a href="{{ url('/buy-map') }}"
                 class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">
                 Buy PDF
             </a>
      </div>
    </div>
  </section>

   <!-- Mandalay Section -->
  <section id="mandalayMaps" class="map-section hidden">
    <h2>Mandalay District Maps</h2>
    <div class="map-grid">
      <div class="map-card">
        <img src="public\assets\img\maps\free\ahlone.jpg" alt="Ahlone Township">
        <div class="map-title">Ahlone Township</div>
      </div>
      <div class="map-card">
        <img src="maps/yangon/bahan.jpg" alt="Bahan Township">
        <div class="map-title">Bahan Township</div>
      </div>
    </div>
  </section>

  <!-- Sagaing Section -->
  <section id="sagaingMaps" class="map-section hidden">
    <h2>Sagaing District Maps</h2>
    <div class="map-grid">
      <div class="map-card">
        <img src="public\assets\img\maps\free\ahlone.jpg" alt="Ahlone Township">
        <div class="map-title">Ahlone Township</div>
        <p>Price: Free</p>
          <a href="maps/sample-map.pdf" download class="btn-link">Download</a>
         <a href="{{ url('/buy-map') }}"
                 class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">
                 Buy PDF
             </a>
      </div>
      <div class="map-card">
        <img src="public\assets\img\maps\free\bahan.jpg" alt="Bahan Township">
        <div class="map-title">Bahan Township</div>
        <p>Price: Free</p>
          <a href="maps/sample-map.pdf" download class="btn-link">Download</a>
         <a href="{{ url('/buy-map') }}"
                 class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">
                 Buy PDF
             </a>
      </div>
    </div>
  </section>

   <!-- Bago Section -->
  <section id="bagoMaps" class="map-section hidden">
    <h2>Bago District Maps</h2>
    <div class="map-grid">
      <div class="map-card">
        <img src="public\assets\img\maps\free\ahlone.jpg" alt="Ahlone Township">
        <div class="map-title">Ahlone Township</div>
      </div>
      <div class="map-card">
        <img src="maps/yangon/bahan.jpg" alt="Bahan Township">
        <div class="map-title">Bahan Township</div>
      </div>
    </div>
  </section>

 

  <!-- Featured Maps -->
  <section class="map-section">
    <h2>Featured Maps</h2>
    <div class="map-grid">
      <div class="map-card">
        <img src="maps/sample-map.jpg" alt="Yangon City Map">
        <div class="map-info">
          <h3>Yangon City Map</h3>
          <p>Type: Free</p>
          <p>Price: Free</p>
          <a href="maps/sample-map.pdf" download class="btn-link">Download</a>
         <a href="{{ url('/buy-map') }}"
                 class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">
                 Buy PDF
             </a>
        </div>
      </div>
    </div>
  </section>
<!--script-->
 <script>
  document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.querySelector(".search-input");
    const mapCards = document.querySelectorAll(".map-card");

    searchInput.addEventListener("input", function () {
      const searchValue = this.value.toLowerCase();

      mapCards.forEach(function (card) {
        const title = card.querySelector(".map-title").textContent.toLowerCase();
        const isMatch = title.includes(searchValue);

        card.style.display = isMatch ? "block" : "none";
      });
    });
  });
  
  document.getElementById("citySelect").addEventListener("change", function () {
    const selectedCity = this.value;

    // Hide all map sections
    const allMapSections = document.querySelectorAll(".map-section");
    allMapSections.forEach((section) => {
      section.classList.add("hidden");
    });

    // Show the selected city's map
    const selectedMap = document.getElementById(`${selectedCity}Maps`);
    if (selectedMap) {
      selectedMap.classList.remove("hidden");
    }
  });

  document.getElementById("menuToggle").addEventListener("click", function () {
    document.getElementById("navLinks").classList.toggle("show");
  });
</script>

</body>
</html>
