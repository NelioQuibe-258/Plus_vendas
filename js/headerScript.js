function carrinhaCheckOut(){
  const cart_money = document.getElementById('money');
  const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
  if(!sessionStorage.getItem('total')){
    sessionStorage.setItem('total', '0');
  }
  let total = 0;
  if (carrinho.length > 0) {
    carrinho.forEach((item, index) => {
    
      const qtynr = document.getElementById('qtynr');
      
      qtynr.textContent = index + 1;

      if (parseInt(qtynr.textContent) > 0 ) {
        document.getElementById('qty').style.display = 'inline';
      } else {
        document.getElementById('qty').style.display = 'none';
      }
      total =(parseFloat(total) + parseFloat(item.preco.substring(2))).toFixed(2);
    });
    sessionStorage.setItem('total', total);
  }
  cart_money.textContent = parseFloat(sessionStorage.getItem('total')).toFixed(2);
}
carrinhaCheckOut();