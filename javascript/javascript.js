document.addEventListener("DOMContentLoaded", (event) => {
    console.log(event); 
    
    let arrayOfPercent = () => {
        let arr =  []; 
        for(let i = 0; i < document.querySelectorAll(".slide").length; i++){
            arr.push((i - 1) * 100); 
        }
        return arr;
    }

    let sliderControls = {
    slides: document.querySelectorAll(".slide"),
    amount: document.querySelectorAll(".slide").length,
    index: 1,  
    farright: (document.querySelectorAll(".slide").length - 2) * 100,
    curtrans: arrayOfPercent()
    }

    
    console.log(sliderControls.curtrans);

    let loopThroughBackgroundsRight = () => {
        sliderControls.index--; 
        if(sliderControls.index <= -1){
            sliderControls.index = sliderControls.amount - 1; 
        }
        if(sliderControls.index === 0){
            sliderControls.slides[sliderControls.amount - 1].style.zindex =  '-2';
        }
        console.log(sliderControls.index);
        for(let i = 0; i < sliderControls.amount; i++){
            if(i === sliderControls.index){
                sliderControls.slides[i].style.transform = 'translate(-100%, 0%)';
                sliderControls.curtrans[i] = -100; 
            }
            else{
                sliderControls.curtrans[i] = sliderControls.curtrans[i] + 100;
                sliderControls.slides[i].style.cssText = `transform: translate(${sliderControls.curtrans[i]}%, 0%); zindex: -2;`;
            }
        }
       
    }
    
    let loopThroughBackgroundsLeft = () => {
        console.log(sliderControls.index);
        for(let i = 0; i < sliderControls.amount; i++){
            if(i === sliderControls.index){
                sliderControls.slides[i].style.cssText = `transform: translate(${sliderControls.farright}%, 0%); zindex: -2;`;
                sliderControls.curtrans[i] = sliderControls.farright; 
            }   
            else{
                sliderControls.curtrans[i] = sliderControls.curtrans[i] - 100; 
                sliderControls.slides[i].style.transform =`translate(${sliderControls.curtrans[i]}%, 0%)`;
            }
        }
        sliderControls.index++;
        if(sliderControls.index > sliderControls.amount - 1){
            sliderControls.index = 0;
        }

    }

    if(document.getElementById("carouselright")){
        document.getElementById("carouselright").addEventListener("click", loopThroughBackgroundsRight);
    }
    if(document.getElementById("carouselleft")){
        document.getElementById("carouselleft").addEventListener("click", loopThroughBackgroundsLeft);
    }
    if(document.getElementById("carouselright")){
        document.getElementById("carouselright").addEventListener("click", loopThroughBackgroundsRight);
    }
    if(document.getElementById("carouselleft")){
        document.getElementById("carouselleft").addEventListener("click", loopThroughBackgroundsLeft);
    }

  

})
