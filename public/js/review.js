let upper = document.getElementById('upper');
let transNav = document.getElementById('trans-nav');
let upperHeader = document.getElementById('upper-header');
let lower = document.getElementById('lower');
let confirmBtn = document.getElementById('confirm');
let bankName = document.getElementById('bankname');
let bankName2 = document.getElementById('bank_name_2');
let accountName = document.getElementById('accountname');
let accountName2 = document.getElementById('account_name_2');
let accountNumber = document.getElementById('accountnumber');
let accountNumber2 = document.getElementById('account_number_2');
let amount = document.getElementById('amount');
let amount2 = document.getElementById('amount_2');
let purpose = document.getElementById('purpose');
let purpose2 = document.getElementById('purpose_2');
let send = document.getElementById('send');


confirmBtn.addEventListener('click', (e) => {
    e.preventDefault();
    bankName2.innerText = bankName.value
    amount2.innerText = Number(amount.value)
        .toLocaleString('en-US', { style: 'currency', currency: 'USD' });
    accountName2.innerText = accountName.value
    accountNumber2.innerText = accountNumber.value
    purpose2.innerText = purpose.value
    transNav.classList.add('hidden');
    upper.classList.add('hidden');
    upperHeader.classList.add('hidden');
    lower.classList.remove('active');
    confirmBtn.classList.add('hidden');
    console.log("acc -n0 : " + accountNumber.value);

})
const pins = document.querySelectorAll('.pin');

pins.forEach((input, index) => {

    input.addEventListener('input', () => {
        // Allow only numbers
        input.value = input.value.replace(/\D/g, '');

        if (input.value && index < pins.length - 1) {
            pins[index + 1].focus();
        }
    });


    input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && !input.value && index > 0) {
            pins[index - 1].focus();
        }
    });

});

send.addEventListener('click', (e) => {
    e.preventDefault();
    const pinFormInput = document.getElementById('pin');
    pinFormInput.value = [...pins].map(p => p.value).join('');
    document.getElementById('transfer-form').submit();
});
// const checkPin = (e) => {
//     e.preventDefault();
//     pinFormInput.value = [...pins].map(p => p.value).join('');
//     return true
// };
