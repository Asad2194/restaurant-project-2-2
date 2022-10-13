const menuIcon=document.getElementById('bar-icon');
const menu=document.getElementById('Menu-bar-icon');

menuIcon.addEventListener('click',()=>{
    if(menu.className === 'hidden'){
        menu.classList.remove('hidden');
    }
    else{
        menu.classList.add('hidden');
    }
});

