let  sliders = document.querySelectorAll('.payment-card')



window.addEventListener('scroll', ()=>{
    sliders.forEach(slider =>{

        // let sliderHeight= slider.getBoundingClientRect('slider').top;
        let sliderHeight= window.screenY;
        let windowsHeight = window.innerHeight;

        if(windowsHeight  > sliderHeight){
            // slider.classList.remove('animate');
            console.log('im here')
        }

    })
});
