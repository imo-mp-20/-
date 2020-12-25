"use strict";

//корзина
function togglecart(){
    const btncart = document.querySelector('.cart');
    const modalcart = document.querySelector('.carts');
    const closecart = document.querySelector('.carts-close');
    
    btncart.addEventListener('click',function(){
        modalcart.style.display = 'block';
        document.body.style.overflow = 'hidden';
    });

    closecart.addEventListener('click', function(){
        modalcart.style.display = '';
        document.body.style.overflow = '';
    });
}

// // добавление и удаление
function addcart(){

    const products = document.querySelectorAll('.product .prod'),
    cartwrapper = document.querySelector('.carts-wrapper'),
    emptycart = document.getElementById('carts-empty'),
    count = document.querySelector('.cart-number');



    products.forEach(function(prod){
        const btn = prod.querySelector('.btn');
        btn.addEventListener('click', function(){
            const prodclon = prod.cloneNode(true);
            cartwrapper.appendChild(prodclon);
            
            showdata();

            const removebtn = prodclon.querySelector('.btn');
            removebtn.textContent = 'Удалить';
            removebtn.addEventListener('click', function(){
                prodclon.remove();
                showdata();
            });
        });
    });


    function showdata() {
        const cardscart = cartwrapper.querySelectorAll('.prod'),
        cardprice = cartwrapper.querySelectorAll('.prod-price'),
        cardtotal = document.querySelector('.carts-total span');
        let sum = 0;
            
        count.textContent = cardscart.length;
            
            
        cardprice.forEach( function(elem)  {
                let price = parseFloat( elem.textContent);
                sum += price;
            });

        cardtotal.textContent = sum;

        if (cardscart.length != 0) {
                emptycart.remove();
        } else{
                cartwrapper.appendChild(emptycart);
        } 
    }
}
// //фильтры чекбоксы
function actionpage(){

    const cards = document.querySelectorAll('.product .prod'),
    newcheckbox = document.getElementById('checkbox-3'),
    min = document.getElementById('min'),
    max = document.getElementById('max'),
    search = document.querySelector('.serch-input'),
    searchbtn = document.querySelector('.buttonS');

    newcheckbox.addEventListener('click', filter);

    min.addEventListener('change', filter);
    max.addEventListener('change', filter);

    searchbtn.addEventListener('click', function(){
        const searchtext = new RegExp(search.value.trim(), 'i');
        cards.forEach(function(card){
            const title = card.querySelector('.prod-name');
            if (!searchtext.test(title.textContent)) {
                card.style.display = 'none';
            } else {
                card.style.display = '';
            }
        });
        search.value ='';
    });


    }

    function filter(){
        const cards = document.querySelectorAll('.product .prod'),
        newcheckbox = document.getElementById('checkbox-3'),
        min = document.getElementById('min'),
        max = document.getElementById('max'),
        activli = document.querySelector('.catalog-list li.active');

        cards.forEach(function(card){
            const  cardprice = card.querySelector('.prod-price');
            const price = parseFloat(cardprice.textContent);
            const neew = card.querySelector('.prod-new');

            card.style.display = '';

            if ((min.value && price < min.value) || ( max.value && price > max.value)) {
                    card.style.display = 'none';
                } else  if(newcheckbox.checked && !neew) {
                    card.style.display = 'none';
                } else if (activli) {
                    if(card.dataset.category !== activli.textContent){
                        card.style.display = 'none';
                    }  
                } 
        });
        
    }

    function renderCatalog(){
    const cards = document.querySelectorAll('.product .prod');
    const cataloglist = document.querySelector('.catalog-list');
    const categories = new Set();
    const catalog = document.querySelector('.catalog');
    const catalbt = document.querySelector('.catalog-button');

    cards.forEach(function(card){
        categories.add(card.dataset.category);
    });
    
    categories.forEach(function(item){
        const li = document.createElement('li');
        li.textContent = item;
        cataloglist.appendChild(li);
        
    });

    const allli = cataloglist.querySelectorAll('li');
        catalbt.addEventListener('click', function(event){
            if(event.target.tagName == 'LI'){
                allli.forEach(function(elem){
                    if (elem.classList.contains('active')) {
                        elem.classList.remove('active');
                    } else {
                    if(elem === event.target){
                        elem.classList.add('active');
                    }   else{
                        elem.classList.remove('active');
                    }
                }
                });
                filter();
            
            }
            
        });
   
}


function toggleenter(){
    const btncart = document.getElementById('vhod');
    const modalcart = document.querySelector('.enter');
    const closecart = document.querySelector('.enter-close');
    
    btncart.addEventListener('click',function(){
        modalcart.style.display = 'block';
        document.body.style.overflow = 'hidden';
    });

    closecart.addEventListener('click', function(){
        modalcart.style.display = '';
        document.body.style.overflow = '';
    });
}





renderCatalog();
togglecart();
addcart();
actionpage();
toggleenter();


