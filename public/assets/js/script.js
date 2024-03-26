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



// Tema
const tema = document.querySelectorAll('.form-check-input');
const temaStorageKey = 'selectedTheme';  // mendefinisikan variable untuk selectedTheme untuk menyimpan value tema

try {
    tema.forEach(input => {
        input.addEventListener('click', function() {
            document.body.className = '';
            if (this.checked) {
                document.body.classList.add(this.id);
                localStorage.setItem(temaStorageKey, this.id);
            }
        });
    });

    // Ambil value tema yang sudah disimpan dari localStorage saat halaman dimuat
    const savedTheme = localStorage.getItem(temaStorageKey);
    
    if (savedTheme) {
        document.body.classList.add(savedTheme);
        document.getElementById(savedTheme).checked = true;  // menyimpan posisi chacked berdasarkan id
    }
} catch (error) {
    console.log("Fitur ganti tema tidak ditemukan!");
}
// Tema End









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



// Title Anime
const animeTitles = document.querySelectorAll(".card-title .anime-title");
const maxLength = 25;
const animeTitleNav = document.querySelector(".anime-title-nav");

// Anime title count hidden
// Menggunakan SelectorAll karena class anime-title lebih dari 1 dan menggunakan foreach agar dapat mengakses setiap element yang memiliki class anime-title
animeTitles.forEach((animeTitle) => {
    try {
        if (animeTitle.textContent.length > maxLength) {
            animeTitle.textContent = animeTitle.textContent.substring(0, maxLength) + "...";
        }
    } catch (error) {
        console.log('Anime title count hidden tidak muncul!');
    }
});

// Anime title count nav hidden
try {
    if (animeTitleNav.textContent.length > maxLength) {
        animeTitleNav.textContent = animeTitleNav.textContent.substring(0, maxLength) + "...";
    }
} catch (error) {
    console.log('Anime title nav tidak muncul!');
}


// Animasi scroll title anime
try {
    if (animeTitleNav) {
        window.addEventListener("scroll", () => {
            if(window.pageYOffset > 100) {
                animeTitleNav.classList.add("active");
            }
            else {
                animeTitleNav.classList.remove("active");
            }
        });
    }
} catch (error) {
    console.log('Anime title nav tidak muncul!');
}
// Title Anime End


// Subscribe Button
const subsBtn = document.getElementById("subscribeBtn");
const textSpan = document.querySelector(".subscribe-text");
const icon = document.querySelector(".subscribe-icon");
const toast = new bootstrap.Toast(document.getElementById('subscribeToast'));
const toastText = document.getElementById('toastTextSubscribe');

try {
    function subscribed() {
        if (textSpan.textContent === "Subscribe") {
            textSpan.textContent = "Unsubscribe";
            subsBtn.classList.add('active');
            icon.classList.replace('bxs-bell', 'bxs-bell-ring');
            toastText.innerHTML = "Anda berhasil subscribe.";
        } else {
            textSpan.textContent = "Subscribe";
            subsBtn.classList.remove('active');
            icon.classList.replace('bxs-bell-ring', 'bxs-bell');
            toastText.innerHTML = "Anda berhasil unsubscribe.";
        }
        toast.show(); // Pindahkan pemanggilan show() ke sini
    }
    subsBtn.addEventListener("click", subscribed);
} catch (error) {
    console.log("Fitur subscribed tidak ditemukan!");
}
// Subscribe Button End


// Episode Filter
const filterBtn = document.getElementById("filterBtn");

try {
    function episodeFilter() {
        filterBtn.classList.toggle('bx-rotate-180');
    }

    filterBtn.addEventListener("click", episodeFilter);
} catch (error) {
    console.log("Fitur filter episode tidak ditemukan!");
}
// Episode Filter End




// Input File Upload Color
function updateTextColor(input) {
    if (input.files.length > 0) {
        input.classList.add('text-light');
    }
}
// Input File Upload Color End

  