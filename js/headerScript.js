function carrinhaCheckOut(){
        
  const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

  if (carrinho.length > 0) {
    carrinho.forEach((item, index) => {
    const cart_money = document.getElementById('money');
      const qtynr = document.getElementById('qtynr');
      index += 1;
      qtynr.textContent = index;

      if (parseInt(qtynr.textContent) > 0 ) {
        document.getElementById('qty').style.display = 'inline';
      } else {
        document.getElementById('qty').style.display = 'none';
      }

      cart_money.textContent = (parseFloat(cart_money.textContent) + parseFloat(item.preco.substring(2))).toFixed(2);
    });
  }
}
carrinhaCheckOut();