// Permite o acionamento do modal de login ao carregar a página
document.addEventListener('DOMContentLoaded', function() {
    const modal = new bootstrap.Modal(document.getElementById('loginmodal'));
    const loginbutton = document.getElementById('loginbutton');
    if (loginbutton) {
        modal.show();
    }
});

// Função para validar a força da senha
function passStrength(user_password) {
    let strength = 0;

    if (user_password.length > 8) strength++;
    if (/[A-Z]/.test(user_password)) strength++;
    if (/[a-z]/.test(user_password)) strength++;
    if (/\d/.test(user_password)) strength++;
    if (/[@$!%*#?&]/.test(user_password)) strength++;

    return strength;
}

// Valida se as senhas são iguais
function passwordConfirmation() {
    const user_password = document.getElementById('user_password').value;
    const confirm_password = document.getElementById('confirm_password').value;
    const input = document.getElementById('confirm_password');

    if (user_password !== confirm_password) {
        input.classList.remove('is-valid');
        input.classList.add('is-invalid');
    } else {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
    }

    formValidation();
}

// Atualiza a barra de força da senha e valida a senha
function strengthBar() {
    const user_password = document.getElementById('user_password').value;
    const input = document.getElementById('user_password');
    const strength = passStrength(user_password);
    const pass_strength = document.getElementById('pass_strength');
    const feedback = document.getElementById('feedback-text');

    if (strength < 4 || user_password.length < 8) {
        input.classList.add('is-invalid');
        input.classList.remove('is-valid');
    } else {
        input.classList.add('is-valid');
        input.classList.remove('is-invalid');
    }

    const colors = [
        'linear-gradient(90deg, #f472b6, #f472b6)', 
        'linear-gradient(90deg, #f472b6, #d572e6)', 
        'linear-gradient(90deg, #f472b6, #c084fc)', 
        'linear-gradient(90deg, #e472f6, #c084fc)', 
        'linear-gradient(90deg, #f472b6, #c084fc)'  
    ];
    const texts = ['Muito fraca', 'Fraca', 'Média', 'Forte', 'Muito forte'];
    const levels = ['20%', '40%', '60%', '80%', '100%'];

    pass_strength.style.width = levels[strength - 1] || '0%';
    pass_strength.style.background = colors[strength - 1] || 'transparent';
    feedback.innerText = texts[strength - 1] || '';
    formValidation();
}

// Valida o campo de email
function validateEmail() {
    const input = document.getElementById('user_email');
    const email = input.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === '') {
        input.classList.remove('is-valid', 'is-invalid');
    } else if (emailPattern.test(email)) {
        input.classList.add('is-valid');
        input.classList.remove('is-invalid');
    } else {
        input.classList.add('is-invalid');
        input.classList.remove('is-valid');
    }

    formValidation();
}

// Valida o campo de telefone
document.getElementById('user_tel').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, '');

    if (value.length > 11) value = value.slice(0, 11);

    if (value.length > 10) {
        value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    } else if (value.length > 6) {
        value = value.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
    } else if (value.length > 2) {
        value = value.replace(/(\d{2})(\d{0,5})/, '($1) $2');
    } else {
        value = value.replace(/(\d{0,2})/, '($1');
    }

    e.target.value = value;
    formValidation();
});

// Valida o campo de data de nascimento
document.getElementById('birthday_date').addEventListener('input', function (e) {
    const input = document.getElementById('birthday_date');
    let value = new Date(input.value);
    let year = value.getFullYear();
    let actual_date = new Date().getFullYear();

    if (year >= actual_date) {
        input.classList.add('is-invalid');
    } else if (actual_date - year <= 13) {
        input.classList.add('is-invalid');
        input.classList.remove('is-valid');
    } else {
        input.classList.add('is-valid');
        input.classList.remove('is-invalid');
    }

    formValidation();
});

// Valida o formulário antes de enviar
function formValidation() {
    const invalid_input = document.querySelectorAll('.is-invalid');
    const button_reg = document.getElementById('button_reg');

    if (invalid_input.length > 0) {
        button_reg.disabled = true;
    } else {
        button_reg.disabled = false;
    }
}