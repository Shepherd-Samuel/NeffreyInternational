// Example: Alert when adding to cart
document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    addToCartButtons.forEach(btn => {
        btn.addEventListener("click", function() {
            alert("Book added to cart!");
        });
    });
});
