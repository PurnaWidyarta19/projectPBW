const payAmountBtn = document.querySelector('#payAmount');
const decrementBtn = document.querySelector('#decrement');
const quantityElem = document.querySelector('#quantity');
const incrementBtn = document.querySelector('#increment');
const priceElem = document.querySelector('#price');
const subtotalElem = document.querySelector('#subtotal');
const taxElem = document.querySelector('#tax');
const totalElem = document.querySelector('#total');

for(let i=0; i < incrementBtn.length; i++){
    incrementBtn[i].addEventListener('click', function(){
        let increment = Number(this.previousElementSibling.textContent);
        increment++;

        this.previousElementSibling.textContent = increment;

        totalCalc();
    });

    decrementBtn[i].addEventListener('click', function(){
        let decrement = Number(this.nextElementSibling.textContent);
        decrement <=1 ? 1 : decrement--;
        
        this.nextElementSibling.textContent = decrement;

        totalCalc();
    });
}

const totalCalc = function(){
    consttax = 0.05;
    let subtotal = 0;
    let total = 0;

    for(let i=0; quantityElem.length; i++){
        subtotal += Number(quantityElem[i].textContent)* Number(priceElem[i].textContent);
    }

    subtotalElem.textContent = subtotal.toFixed(2);

    totalTax = subtotal * tax;

    taxElem.textContent = totalTax;

    totalElem.textContent = total.toFixed(2);
    payAmountBtn.textContent = total.toFixed(2);
}