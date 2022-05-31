const btnaddcart = document.querySelectorAll('#btnaddcart');
btnaddcart.forEach(element => {
    element.onclick = () => {
        alert("bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng");
    }
});


const love = document.querySelectorAll('#love');
love.forEach(element => {
    element.onclick = () => {
        element.style.color = "red";


    }

});

// love.onclick = () => {
//         love.style.background = 'red'
//         love.color = 'red';

//     }
// .product .product-body .product-btns>button:hover {
//     background-color: #E4E7ED;
//     color: #D10024;
//     border-radius: 50%;
// }