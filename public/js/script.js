let a = Math.floor(Math.random() * 10 + 1);
let b = Math.floor(Math.random() * 10 + 1);

// GET ID
let spanA = document.getElementById('a');
let spanB = document.getElementById('b');
let btn = document.getElementById('register');
let captchaInput = document.getElementById('captcha');
// END GET ID

spanA.innerHTML = a;
spanB.innerHTML = b;
let hasil = a + b;

captchaInput.addEventListener('change', function(){
    if(hasil == captchaInput.value){
        btn.removeAttribute('disabled')
        captchaInput.classList.remove('is-invalid')
    } else {
        captchaInput.classList.add('is-invalid')
    }
})