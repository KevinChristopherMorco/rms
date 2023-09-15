const passwordIcon = document.querySelectorAll('.login-container__login-input-container .login-container__login-input-group i')
const passwordInput = document.querySelectorAll('.login-container__login-input-container input[type="password"]')

passwordIcon.forEach((passwordIconEl) => {
    passwordIconEl.addEventListener('click', (e) => {
        passwordInput.forEach((passwordInputEl) => {
            if (passwordInputEl.type == 'password') {
                passwordInputEl.type = 'text'
                passwordIconEl.classList.remove('fa-eye-slash')
                passwordIconEl.classList.add('fa-eye')

            } else {
                passwordInputEl.type = 'password'
                passwordIconEl.classList.remove('fa-eye')
                passwordIconEl.classList.add('fa-eye-slash')
            }
        })

    })
})
