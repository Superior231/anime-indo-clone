const passwordInput   = document.getElementById('password');
const passwordInput2  = document.getElementById('password-confirm');
const showPassButton  = document.querySelector('.showPass');
const showPassButton2 = document.querySelector('.showPass2');

const loginPage = document.body.classList.contains('login');
const registerPage = document.body.classList.contains('register');

// Login
function login(passwordInput, showPassButton) {
    try {
        passwordInput.addEventListener('input', () => {
            if( passwordInput.value.length >= 1 ) {
                showPassButton.style.display = 'block';
            } else {
                showPassButton.style.display = 'none';
            }
        });
        
        showPassButton.addEventListener('click', (e) => {
            e.preventDefault(); // Mencegah reload halaman
        
            if( passwordInput.type === 'password' ) {
                passwordInput.type = 'text';
                showPassButton.innerHTML = '<i class="fa-regular fa-eye"></i>';
            } else {
                passwordInput.type = 'password';
                showPassButton.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
            }
        
        });
    } catch (error) {
        console.log("fitur login tidak ditemukan!");
    }
}


// Register
function register(passwordInput, passwordInput2, showPassButton, showPassButton2) {
    try {
        passwordInput.addEventListener('input', () => {
            if( passwordInput.value.length >= 1 ) {
                showPassButton.style.display = 'block';
            } else {
                showPassButton.style.display = 'none';
            }
        });
        
        passwordInput2.addEventListener('input', () => {
            if( passwordInput2.value.length >= 1 ) {
                showPassButton2.style.display = 'block';
            } else {
                showPassButton2.style.display = 'none';
            }
        });
        
        showPassButton.addEventListener('click', (e) => {
            e.preventDefault(); // Mencegah reload halaman
        
            if( passwordInput.type === 'password' ) {
                passwordInput.type = 'text';
                showPassButton.innerHTML = '<i class="fa-regular fa-eye"></i>';
            } else {
                passwordInput.type = 'password';
                showPassButton.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
            }
        
        });
        
        showPassButton2.addEventListener('click', (e) => {
            e.preventDefault();
        
            if( passwordInput2.type === 'password' ) {
                passwordInput2.type = 'text';
                showPassButton2.innerHTML = '<i class="fa-regular fa-eye"></i>';
            } else {
                passwordInput2.type = 'password';
                showPassButton2.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
            }
        });
    } catch (error) {
        console.log("fitur register tidak ditemukan!");
    }
}



// Pengkondisian penggunaan functions berdasarkan halamann yang active
if (loginPage) {
    login(passwordInput, showPassButton);
} else if (registerPage) {
    register(passwordInput, passwordInput2, showPassButton, showPassButton2);
}
