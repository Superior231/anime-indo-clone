const passwordInput   = document.getElementById('password');
const passwordConfirm  = document.getElementById('password-confirm');
const showPassButton  = document.querySelector('.showPass');
const showPassButton2 = document.querySelector('.showPass2');

passwordInput.addEventListener('input', () => {
    if( passwordInput.value.length >= 1 ) {
        showPassButton.style.display = 'block';
    } else {
        showPassButton.style.display = 'none';
    }
});

passwordConfirm.addEventListener('input', () => {
    if( passwordConfirm.value.length >= 1 ) {
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

    if( passwordConfirm.type === 'password' ) {
        passwordConfirm.type = 'text';
        showPassButton2.innerHTML = '<i class="fa-regular fa-eye"></i>';
    } else {
        passwordConfirm.type = 'password';
        showPassButton2.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
    }
});