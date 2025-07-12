const cartState = {
    items: []
};

const catalog = {
    1: { id: 1, name: "Shoes", price: 50 },
    2: { id: 2, name: "Shirt", price: 20 },
    3: { id: 3, name: "Sweater", price: 60 },
    4: { id: 4, name: "Hoodie", price: 120 }
};
function UpdateCartUI() {
    const cartStatus = document.querySelector(".cart-status");
    if (cartState.items.length === 0) {
        cartStatus.innerHTML = "<div>Your shopping cart is empty</div>";
    } else {
        const itemList = cartState.items.map(item => 
            `<div>${item.name} - $${item.price}</div>`
        ).join("");
        cartStatus.innerHTML = `
            <div>You have ${cartState.items.length} item(s) in your cart:</div>
            ${itemList}
        `;
    }
}
function handleAddToCart(event, itemId) {
    event.preventDefault();
    const item = catalog[itemId];
    if (item) {
        cartState.items.push(item);
        UpdateCartUI();
    }
}
function iniCatalog() {
    const links = document.querySelectorAll(".catalog ul li a");
    links.forEach((link, index) => {
        const itemId = index + 1;
        link.addEventListener("click", (e) => handleAddToCart(e, itemId));
    });
}
document.addEventListener("DOMContentLoaded", () => {
    iniCatalog();
    UpdateCartUI();
});