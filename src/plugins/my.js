let carts = document.querySelectorAll('.add-cart');
    
 let products =[
    { 
        name:'a-shirt',
        tag:'t-shirt',
        price:10,
        incart:0
        
        
    },
    { 
        name:'b-shirt',
        tag:'s-shirt',
        price:20,
        incart:0
        
        
    },
    { 
        name:'c-shirt',
        tag:'z-shirt',
        price:30,
        incart:0
        
        
    },
    { 
        name:'d-shirt',
        tag:'y-shirt',
        price:50,
        incart:0
        
        
    }
];
      
    
 for (let i=0 ;i < carts.length; i++){
     
     carts[i].addEventListener('click',()=>{
         
         cartNumbers(products[i]);
         
     });
 }
    
  function onloadcartNumbers() {
      let productNumbers= localStorage.getItem('cartNumbers');
      if(productNumbers)
      {
         document.querySelector('.cart').textContent= productNumbers; 
      }
      
  }

    
  function cartNumbers(product){
      
      
      let productNumbers= localStorage.getItem('cartNumbers',product);
       productNumbers = parseInt(productNumbers);
      
      if (productNumbers)
      {
          
      localStorage.setItem('cartNumbers' , productNumbers + 1);
      document.querySelector('.cart').textContent= productNumbers +1;
      
      }else{
          
           localStorage.setItem('cartNumbers' , 1);
          document.querySelector('.cart').textContent = 1;

  }
      setitems(product);
    
  }
    
    
    
  function setitems (product) {
         let cartitem = localStorage.getItem('productincart');
         cartitem = JSON.parse(cartitem);
         if (cartitem != null){
             if (cartitem [product.tag] == undefined){
                 
                cartitem = {
                     
                     ...cartitem, 
                    [product.tag]:product
                 }
             }
             cartitem[product.tag].incart += 1;
             
         }else {
             product.incart = 1;
             cartitem = {
                 [product.tag]:product
             }
         }
         
        localStorage.setItem('productincart', JSON.stringify
                            (cartitem));
    
     
  }  
    function displaycart(){
    let cartitem = localStorage.getItem ('productincart') ;
      cartitem = JSON.parse(cartitem);
      let productcontainer= document.querySelector('.showcart');
      console.log(cartitem);
          
      if (cartitem && productcontainer)
      {
          productcontainer.innerHTML = '';
        
          
      }
      }
         
    
    displaycart();
    onloadcartNumbers();      
      