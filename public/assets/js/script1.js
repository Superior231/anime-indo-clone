// SIDEBAR dan NAVBAR
const body        = document.querySelector("body"),
      sidebar     = body.querySelector(".sidebar"),
      toggle      = body.querySelector(".toggle"),
      logoNav     = document.getElementById("navNameBrand"),
      logoNavHp   = document.getElementById("logo-nav-hp"),
      textNavHp   = document.getElementById("navNameBrand"),
      textNav     = body.querySelector(".navbar"),
      dropDownNav = body.querySelector(".dropdown-menu"),
      bgNav       = document.getElementById("bg-nav"),
      logoSide    = document.getElementById("logoSide");



// Menyimpan status sidebar di localStorage
const sidebarState = localStorage.getItem("sidebar");
const logoNavState = localStorage.getItem("logoNav");

    if (sidebarState === "open") {
        sidebar.classList.remove("close");
        logoNav.classList.add("disabled"); // Menandakan logoNav dinonaktifkan ketika sidebar terbuka
    } else {
        sidebar.classList.add("close");
    }

    if (logoNavState === "disabled") {
        logoNav.classList.add("disabled");
    } else {
        logoNav.classList.remove("disabled");
    }


    // Sidebar toggle
    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        logoNav.classList.toggle("disabled");

        // Save sidebar dan logonav state di localStorage
        const newSidebarState = sidebar.classList.contains("close") ? "closed" : "open";
        localStorage.setItem("sidebar", newSidebarState);

        const newLogoNavState = logoNav.classList.contains("disabled") ? "disabled" : "";
        localStorage.setItem("logoNav", newLogoNavState);
    });


// sidebar jadwal tayang
const menuLinksJadwalTayang = document.querySelectorAll('.nav-pills .nav-item a');

    menuLinksJadwalTayang.forEach(function(link) {
        link.addEventListener('click', function() {
            menuLinksJadwalTayang.forEach(function(item) {
                item.classList.remove('active');
            });
            this.classList.add('active');
        });
    });



// Navbar Search Button
const navSrcBtn   = document.getElementById("nav-search-btn"),
      navSrcClose = document.getElementById("nav-close-btn"),
      srcBox      = document.getElementById("search-box");
    
    navSrcBtn.addEventListener("click", () => {
        srcBox.classList.add("active");
        navSrcClose.classList.add("active");
        navSrcBtn.classList.add("active");
        logoNavHp.classList.add("active");
        textNavHp.classList.add("active");
    });
    navSrcClose.addEventListener("click", () => {
        srcBox.classList.remove("active");
        navSrcClose.classList.remove("active");
        navSrcBtn.classList.remove("active");
        logoNavHp.classList.remove("active");
        textNavHp.classList.remove("active");
    });
// Navbar Search Button End


// Nav Bottom
const list = body.querySelectorAll(".list");
    function activeLink () {
        list.forEach((item) => 
        item.classList.remove("active"));
        this.classList.add("active");
    }
    list.forEach((item) => 
    item.addEventListener("click", activeLink));
// Nav Bottom End

// SIDEBAR dan NAVBAR End




// Back to Top
const iconBackToTop = document.querySelector(".icon-back-to-top");
try {
    if (iconBackToTop) {
        window.addEventListener("scroll", () => {
            if(window.pageYOffset > 100) {
                iconBackToTop.classList.add("active");
            }
            else {
                iconBackToTop.classList.remove("active");
            }
        });
    }
} catch (error) {
    console.log('Fitur back to top tidak ditemukan!');
}
// Back to Top End




// Input File Upload Color
function updateTextColor(input) {
    if (input.files.length > 0) {
        input.classList.add('text-light');
    }
}
// Input File Upload Color End

  