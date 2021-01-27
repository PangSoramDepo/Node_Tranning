let carts= document.querySelectorAll('.add-cart');
    
         let products =[
    { 
        name:'a-shirt',
        tag:'t',
        price:90,
        incart:0
        
        
    },
    { 
        name:'b-shirt',
        tag:'s',
        price:70,
        incart:0
        
        
    },
    { 
        name:'c-shirt',
        tag:'c',
        price:30,
        incart:0
        
        
    },
    { 
        name:'d-shirt',
        tag:'h',
        price:80,
        incart:0
        
        
    },
             
     { 
        name:'a-shirt',
        tag:'t',
        price:90,
        incart:0
        
        
    },
    { 
        name:'b-shirt',
        tag:'s',
        price:70,
        incart:0
        
        
    },
    { 
        name:'c-shirt',
        tag:'c',
        price:30,
        incart:0
        
        
    },
    { 
        name:'d-shirt',
        tag:'h',
        price:80,
        incart:0
        
        
    } ,       
             
     { 
        name:'a-shirt',
        tag:'t',
        price:90,
        incart:0
        
        
    },
    { 
        name:'b-shirt',
        tag:'s',
        price:70,
        incart:0
        
        
    },
    { 
        name:'c-shirt',
        tag:'c',
        price:30,
        incart:0
        
        
    },
    { 
        name:'d-shirt',
        tag:'h',
        price:80,
        incart:0
        
        
    }        
             
             
             
             
];
      
    
 for (let i=0 ;i < carts.length; i++){
     
     carts[i].addEventListener('click',()=>{
         
         cartNumbers(products[i]);
         totalcost(products[i]);
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
      console.log(product);
      
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
                     
                     ...cartitem, [product.tag]:product
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
    function totalcost (product)
      {
       let cartcost = localStorage.getItem('totalcost');
       console.log('my cart is' ,cartcost);
       
        console.log(typeof cartcost);
       if (cartcost != null)
       {
           
           cartcost = parseInt(cartcost);
           localStorage.setItem('totalcost', cartcost +
                                product.price);
       }else
       {
           localStorage.setItem('totalcost', product.price);
           
       }
   }
    
    
function displaycart(){
         
let cartitem = localStorage.getItem ('productincart') ;
      cartitem = JSON.parse(cartitem);
      let productcontainer= document.querySelector('.cartsell2');
       let cartcost = localStorage.getItem('totalcost');
        
      if (cartitem && productcontainer){
        console.log('i lov u',cartitem); 
        productcontainer.innerHTML ='';
     Object.values(cartitem).map(item =>{
    
         productcontainer.innerHTML +=`

<div class = "product1">
<img src = "ima/${item.tag}.jpg">

<div class = "name"> ${item.name}</div>

</div>
<div class = "prices">$${item.price}.00</div>
<div class = "qua">${item.incart}</div>

<div class = "to">$${item.incart * item.price}.00</div>
            
          ` 
       });
productcontainer.innerHTML +=`
         
<div class = "oop">
<h4 class = "op">  Total-Product </h4>
 <h3 class = "po">$${cartcost}.00</h3>        
 </div>
         
         `;   
       
             
        
      }
      }
      
         
    
    displaycart();
    onloadcartNumbers();   
      

