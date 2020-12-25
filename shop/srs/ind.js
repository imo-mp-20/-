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

toggleenter();
togglecart();