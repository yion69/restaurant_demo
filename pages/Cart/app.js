
//No Script Yet 
const btnPlus = document.querySelectorAll('.item-plus');
const btnMinus = document.querySelectorAll('.item-minus');
const btnClear = document.querySelector('.cart-clear');
const btnCheckout = document.querySelector('.btn-checkout');

const clearCart = async () => {
    const request = await fetch('../../Controller/__cart.php', {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: new URLSearchParams({
            "food_id": null,
            "method": "clear"
        })
    })
    const response = await request.json();
    console.log(response);
    window.location.reload();
}
    

const addItem = (element) => {
    const container = element.target.closest('.item-container');
    const item = container.querySelector('.item-count')
    let itemCount = parseInt(item.textContent, 10);
    itemCount++;
    item.textContent = itemCount;
}

const removeItem = (element) => {
    const container = element.target.closest('.item-container');
    const item = container.querySelector('.item-count')
    let itemCount = parseInt(item.textContent, 10);
    if(itemCount > 1){
        itemCount--;
    }
    item.textContent = itemCount;
}

const extractNumbers = (str) => {
    const matches = str.match(/\d+/g);
    return matches ? matches.join('') : '';
};

const calculateTotal = () => {
    let total = 0;
    const container = document.querySelectorAll('.item-container');
    container.forEach(e => {
        const fCount = e.querySelector('.item-count').textContent;
        const fPrice = e.querySelector('.item-price').textContent;
        const fees = document.querySelector('.item-fees').textContent;
        
        total += (parseInt(fCount, 10) * extractNumbers(fPrice));
    })
    return total;
}

const postOrder = async (food_list) => {
        const request = await fetch('../../Controller/__order.php', {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            "food_order": food_list
        })
    })
    const response = await request.json();
    console.log(response);
}

btnPlus.forEach( btn => {
    btn.addEventListener("click", (e) => {
        addItem(e);
    })
})
btnMinus.forEach( btn => {
    btn.addEventListener("click", (e) => {
        removeItem(e);
    })
})
btnClear.addEventListener("click", () => {
    clearCart();
})

btnCheckout.addEventListener("click", () => {
    const order = [];
    const container = document.querySelectorAll('.item-container');
    container.forEach(e => {
        const fId = e.querySelector('.item-id').textContent;
        const fCount = e.querySelector('.item-count').textContent;
        const fName = e.querySelector('.item-name').textContent;
        const fPrice = e.querySelector('.item-price').textContent;
        const fees = document.querySelector('.item-fees').textContent;
        const fTotal = calculateTotal();
        order.push({
            food_id: fId,
            food_name: fName,
            food_price: fPrice,
            food_count: fCount,
            food_fees: fees,
            food_total: fTotal
        })
    })
    postOrder(order);
    setTimeout(() => {
        window.location.href ='../Checkout/index.php';
    }, 1000);
});