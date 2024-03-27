async function getMusik() {
    try {
        const response = await fetch('/api/musik.json');
        const musik = await response.json(); // Menunggu data JSON sebenarnya
        renderMusik(musik.filter(item => item.pilihan === 'True'));
        renderMusikLainnya(musik.filter(item => item.pilihan === 'False'));
        return musik;
    } catch (error) {
        console.error('Data tidak ditemukan!', error);
    }
}

function renderMusik(musik) {
    const container = document.getElementById('musik');
    container.innerHTML = ''; // Mengosongkan kontainer sebelum menambahkan musik baru

    musik.forEach(item => {
        const card = createMusikCard(item);
        container.appendChild(card);
    });
}

// Looping berdasarkan abjad
function renderMusikLainnya(musik) {
    const containerLainnya = document.getElementById('musik-lainnya');
    containerLainnya.innerHTML = ''; // Mengosongkan kontainer sebelum menambahkan musik baru

    // Urutkan musik berdasarkan judul (title) secara alfabetis
    musik.sort(function (a, b) {
        let titleA = a.title.toUpperCase(); // Mengambil judul dari objek musik
        let titleB = b.title.toUpperCase();
        return titleA.localeCompare(titleB);
    });

    musik.forEach(item => {
        const card = createMusikCard(item);
        containerLainnya.appendChild(card);
    });
}



function createMusikCard(musik) {
    const a = document.createElement('a');
    a.href = '#';
    a.innerHTML = `
        <div class="d-flex align-items-center gap-3">
            <div class="gambar">
                <img src="${musik.gambar}" alt="gambar">
            </div>
            <div class="musik-title d-flex align-items-center gap-2">
                <h6 class="text-light text-size py-0 my-0">${musik.title}</h6>
                <i class='bx bxs-volume-full bx-flashing bx-xs text-light'></i>
            </div>
        </div>
        <div class="play-btn d-flex px-3">
            <i class='bx bx-play fs-3 text-light'></i>
            <i class='bx bx-pause fs-3 text-light'></i>
        </div>
    `;

    const audio = document.createElement('audio');
    audio.src = musik.link;
    audio.classList.add('audio-player'); // Tambahkan kelas audio-player untuk mengidentifikasi elemen audio

    a.addEventListener('click', function(event) {
        const isActive = a.classList.contains('active');
        document.querySelectorAll('.musik a, .musik-lainnya a').forEach(item => {
            item.classList.remove('active');
        });

        const audioPlayers = document.querySelectorAll('.audio-player');
        audioPlayers.forEach(player => {
            if (player !== audio) {
                player.pause(); // Jeda pemutaran audio lain jika ada
            }
        });

        if (!isActive) {
            a.classList.add('active');
            if (audio.paused) {
                audio.play(); // Putar audio jika sedang tidak diputar
            } else {
                audio.pause(); // Jeda audio jika sedang diputar
            }
        } else {
            audio.pause(); // Hentikan pemutaran audio jika tag <a> diklik kembali
        }

        event.preventDefault();
    });

    a.appendChild(audio);
    return a;
}



// Search Musik
function searchMusik() {
    const input = document.getElementById('search-music').value.toLowerCase();
    const cards = document.querySelectorAll('.musik-lainnya a');
    let noResults = true; // Tambahkan variabel penanda hasil pencarian

    cards.forEach(card => {
        const title = card.querySelector('.musik-title h6').textContent.toLowerCase(); // Ambil judul musik dan ubah menjadi lowercase
        if (title.includes(input)) {
            card.style.display = "flex"; // Tampilkan card jika cocok dengan input
            noResults = false; // Setel penanda hasil pencarian menjadi false
        } else {
            card.style.display = "none"; // Sembunyikan card jika tidak cocok dengan input
        }
    });

    
    // Tampilkan pesan error jika tidak ada hasil pencarian
    const containerError = document.querySelector('.musik-lainnya');
    const errorMessage = containerError.querySelector('.error-message');
    const errorImg = containerError.querySelector('.error-img');
    
    if (noResults && !errorMessage) {
        const errorImg = document.createElement('img');
        const errorMessage = document.createElement('h6');

        errorImg.src = '/assets/img/anime-boy.gif';
        errorImg.className = 'error-img mx-auto';

        errorMessage.textContent = 'Tidak ada hasil yang cocok';
        errorMessage.className = 'error-message text-light text-center';

        containerError.appendChild(errorImg);
        containerError.appendChild(errorMessage);
        
    } else if (!noResults && errorMessage) {
        // Hapus pesan error jika ada hasil pencarian
        errorImg.remove();
        errorMessage.remove();
    }
}


// Event listener untuk input pencarian
document.getElementById('search-music').addEventListener('input', function () {
    searchMusik(); // Panggil fungsi pencarian saat input berubah
});



// Panggil fungsi getMusik untuk mendapatkan data dari API
getMusik();