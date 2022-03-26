let  sliders = document.querySelectorAll('.payment-card')



window.addEventListener('scroll', ()=>{
    sliders.forEach(slider =>{

        // // let sliderHeight= slider.getBoundingClientRect('slider').top;
        // let sliderHeight= window.screenY;
        // let windowsHeight = window.innerHeight;

        // if(windowsHeight  > sliderHeight){
        //     // slider.classList.remove('animate');
        //     console.log('im here')
        // }

    })
});

let faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(faqItem =>{
    faqItem.addEventListener('click',
     (e)=>{ 

        let answer = (e.target.children[1]);

            answer.style.height = '150px'; 
        
              faqItem.addEventListener('click',()=>{
                  if(answer.style.height ='150px'){
                    answer.style.height = '0px';
                  }
                  else{
                        answer.style.height = '150px'; 
                }
        }) 
    });
 })



//  let links =document.querySelectorAll('.dashboard-links');

//  const route = (event)=>{
//     event = event || window.event;
//     event.preventDefault();
//     window.history.pushState({},'',event.target.href);
//     HandleLocation();
//  }
 

//  const routes = {
//      404:"../html folder/userhome.html",
//      "/home":"../html folder/userhome.html",
//      "/reinvest":"../html folder/reinvest.html",
//      "/referrals":"../html folder/referrals.html",
//      "/transactions":"../html folder/transactions.html",
//      "/plans":"../html folder/plans.html",
//      "/accountInfo":"../html folder/accountinfo.html",
//  };

// const HandleLocation = async ()=>{

//     const path = window.location.pathname;

//     const route = routes[path] || routes[404];
    
//     const html = await fetch(route).then((data)=> data.text());

    
//     document.querySelector(".page-displayer").innerHTML = html;

// }

//  links.forEach(link=>{
//      link.addEventListener('click', route);
//  })

//  window.onpopstate = HandleLocation;

//  window.route = route;
 
//  HandleLocation();

//  window.onload(()=>{
//     window.location.path="/html%20folder/dashboard.html";   
//  })

// menu bar codes


function OpenMenubar(){
    const menuList=document.getElementById('menu-items');
    menuList.style.height='80vh';   
}
function CloseSideBar(){
    const menuList=document.getElementById('menu-items');
    menuList.style.height='0px';
}
const menu=document.getElementById('menubar');  
menu.addEventListener('click',OpenMenubar);
const sidebar=document.getElementById('close-sidebar');  
sidebar.addEventListener('click',CloseSideBar);