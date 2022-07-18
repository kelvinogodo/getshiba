

let faqItems = document.querySelectorAll('.faq-item');
let closeBtns = document.querySelectorAll('.close-answer');

faqItems.forEach(faqItem =>{
    faqItem.addEventListener('click',

     (e)=>{ 

        let answer = (e.target.children[1]);

        hbjbnnanswer.style.height = 'auto'; 
    });
 })

closeBtns.forEach(Btn =>{
    Btn.addEventListener('click',

     (e)=>{ 

     (e.path[3].children[1]).style.height='0px';
kghgho
    });
 })



 function OpenMenubar(){
    const menuList=document.getElementById('menu-items');
    menuList.style.width='100%';
}
function CloseSideBar(){
    const menuList=document.getElementById('menu-items');
    menuList.style.width='0px';
}
const menu=document.getElementById('menubar');  
menu.addEventListener('click',OpenMenubar);
const sidebar=document.getElementById('close-sidebar');  
sidebar.addEventListener('click',CloseSideBar);




// menu bar codes for main pages

const menuList=document.getElementById('menu-items');

try {
    
    const OpenMenubar= (el,value) =>{
        el.style.height =`${value}`;       
    }

    function CloseSideBar(el, value) {
        el.style.height = `${value}`;

    }

    const menu = document.getElementById('menubar').addEventListener('click',()=>{
        OpenMenubar(menuList,'80%');
    });

    const sidebar = document.getElementById('close-sidebar').addEventListener('click',()=>{
        OpenMenubar(menuList,'0px');
    });

} 
catch (error) {
}


// modal caller function 

let CallModal= (element) => {
    element.style.transform = 'scale(1)';
};


let closeModal= (element)=>{
    element.style.transform = 'scale(0)';
}

// profil edit modal 


let profileSettingModal = document.querySelector('.profile-modal');
document.querySelector('.user-icon').addEventListener(`click`, ()=>{   
      
    CallModal(profileSettingModal);
    closeModal(notificationModal)
    
});

// Notification modal 

let notificationModal = document.querySelector('.notification-modal');
document.querySelector('.notification').addEventListener(`click`, ()=>{   
      
    CallModal(notificationModal);
    closeModal(profileSettingModal)
});

// close notification modal 

document.querySelector('.close-notification').addEventListener('click', (e)=>{
    closeModal(notificationModal)

})
document.querySelector('.close-profile').addEventListener('click', (e)=>{
    closeModal(profileSettingModal)
})
