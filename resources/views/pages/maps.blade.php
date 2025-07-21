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
}
</style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="container">
      <a href="/" class="logo">MyMaps</a>
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
        <option value="">-- Choose City --</option>
        <option value="yangon">Yangon  Region</option>
        <option value="mandalay">Mandalay Region</option>
        <option value="sagaing">Sagaing Region</option>
        <option value="bago">Bago Region</option>
        <option value="ayeyarwady">Ayeyarwady Region </option>
        <option value="magway">Magway Region</option>
        <option value="tanintharyi">Tanintharyi Region </option>

        <option value="yangon">Chin State </option>
        <option value="mandalay">Kachin State</option>
        <option value="sagaing">Kayah State</option>
        <option value="bago">Kayin State </option>
        <option value="ayeyarwady">Mon State</option>
        <option value="magway">Rakhine State</option>
        <option value="tanintharyi">Shan State </option>
      </select>
    </div>
  </section>

 

  <!-- Yangon Section -->
  <section id="yangonMaps" class="map-section hidden">
    <h2>Yangon District Maps</h2>
    <div class="map-grid">
      <div class="map-card">
        <img src="{{ asset('assets/images/maps/free/ahlone.jpg') }}" alt="Ahlone Township">
        <div class="map-title">Ahlone Township</div>
        <p>PDF Price: 300000</p>
          {{-- <a href="maps/sample-map.pdf" download class="btn-link">Download</a> --}}
          <a href="{{ asset('assets/images/maps/free/ahlone.jpg') }}" download="ahlone-map.jpg" class="btn-link">
  Download 
</a>

         <a href="{{ url('/buy?image=ahlone.jpg&title=Ahlone Township') }}">
   Buy PDF
</a>

      </div>
      <div class="map-card">
        <img src="{{ asset('assets/images/maps/free/bahan.jpg') }}" alt="Bahan Township">
        <div class="map-title">Bahan Township</div>
        <p>PDF Price:300000</p>
               <a href="{{ asset('assets/images/maps/free/bahan.jpg') }}" download="bahan.jpg" class="btn-link">
  Download 
</a>
          <a href="{{ url('/buy?image=bahan.jpg&title=Bahan Township') }}">
   Buy PDF
</a>

      </div>
       <div class="map-card">
        <img src="{{ asset('assets/images/maps/free/dagon.jpg') }}" alt="Dagon Township">
        <div class="map-title">Dagon Township</div>
        <p>PDF Price:300000</p>
         <a href="{{ asset('assets/images/maps/free/dagon.jpg') }}" download="dagon.jpg" class="btn-link">
  Download 
</a>
          <a href="{{ url('/buy?image=dagon.jpg&title=DagonTownship') }}">
   Buy PDF
</a>
      </div>

       <div class="map-card">
        <img src="{{ asset('assets/images/maps/free/dagon-seikkan.jpg') }}" alt="Dagon Seikkan Township">
        <div class="map-title">Dagon Seikkan Township</div>
        <p>PDF Price:300000</p>
           <a href="{{ asset('assets/images/maps/free/dagon-seikkan.jpg') }}" download="dagon-seikkan.jpg" class="btn-link">
  Download 
</a>
          <a href="{{ url('/buy?image=dagon-seikkan.jpg&title=Dagon Seikkan Township') }}">
   Buy PDF
</a>
      </div>
      
    </div>
    <br><br>

     <div class="map-grid">
      <div class="map-card">
        <img src="{{ asset('assets/images/maps/free/daw-bon.jpg') }}" alt="Dawbon Township">
        <div class="map-title">Dawbon Township</div>
        <p>PDF Price: 300000</p>
          {{-- <a href="maps/sample-map.pdf" download class="btn-link">Download</a> --}}
          <a href="{{ asset('assets/images/maps/free/daw-bon.jpg') }}" download="daw-bon.jpg" class="btn-link">
  Download 
</a>

         <a href="{{ url('/buy?image=dagon-daw-bon.jpg&title=Dawbon Township') }}">
   Buy PDF
</a>
      </div>
      <div class="map-card">
        <img src="{{ asset('assets/images/maps/free/east-dagon.jpg') }}" alt="East Dagon Township">
        <div class="map-title">East Dagon Township</div>
        <p>PDF Price:300000</p>
               <a href="{{ asset('assets/images/maps/free/east-dagon.jpg') }}" download="east-dagon.jpg" class="btn-link">
  Download 
</a>
          <a href="{{ url('/buy?image=east-dagon.jpg&title=East Dagon Township') }}">
   Buy PDF
</a>
      </div>
       <div class="map-card">
        <img src="{{ asset('assets/images/maps/free/hlaing-tharyar_east.jpg') }}" alt="Hlaing Tharyar Township">
        <div class="map-title">Hlaing Tharyar Township (East)</div>
        <p>PDF Price:300000</p>
         <a href="{{ asset('assets/images/maps/free/hlaing-tharyar_east.jpg') }}" download="hlaing-tharyar_east.jpg" class="btn-link">
  Download 
</a>
          <a href="{{ url('/buy?image=hlaing-tharyar_east.jpg&title=Hlaing Tharyar Township(East)') }}">
   Buy PDF
</a>
      </div>

       <div class="map-card">
        <img src="{{ asset('assets/images/maps/free/hlaing-tharyar_west.jpg') }}" alt="Hlaing Tharyar Township (West)">
        <div class="map-title">Hlaing Tharyar Township (West)</div>
        <p>PDF Price:300000</p>
           <a href="{{ asset('assets/images/maps/free/hlaing-tharyar_west.jpg') }}" download="hlaing-tharyar_east.jpg" class="btn-link">
  Download 
</a>
          <a href="{{ url('/buy?image=hlaing-tharyar_west.jpg&title=Hlaing Tharyar Township(West)') }}">
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
