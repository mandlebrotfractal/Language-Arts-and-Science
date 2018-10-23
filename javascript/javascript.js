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
    index: 0,  
    farright: (document.querySelectorAll(".slide").length - 2) * 100,
    curtrans: arrayOfPercent()
    }

    
    console.log(sliderControls.curtrans);

    let loopThroughBackgroundsRight = (event) => {
        console.log(event);
        sliderControls.index--; 
        if(sliderControls.index <= -1){
            sliderControls.index = sliderControls.amount - 1; 
        }
        for(let i = 0; i < sliderControls.amount; i++){
            if(i === sliderControls.index){
                sliderControls.slides[i].style.opacity = '0'; 
                sliderControls.slides[i].style.transform = 'translate(-100%, 0%)';
                sliderControls.curtrans[i] = -100; 
            }
            else{
                sliderControls.slides[i].style.opacity = '1'; 
                sliderControls.curtrans[i] = sliderControls.curtrans[i] + 100;
                sliderControls.slides[i].style.transform = `translate(${sliderControls.curtrans[i]}%, 0%)`;
            }
        }
       
    }
    
    let loopThroughBackgroundsLeft = (event) => {
        console.log(event); 
        for(let i = 0; i < sliderControls.amount; i++){
            if(i === sliderControls.index){
                sliderControls.slides[i].style.opacity = '0'; 
                sliderControls.slides[i].style.transform = `translate(${sliderControls.farright}%, 0%)`;
                sliderControls.curtrans[i] = sliderControls.farright; 
            }   
            else{
                sliderControls.slides[i].style.opacity = '1'; 
                sliderControls.curtrans[i] = sliderControls.curtrans[i] - 100; 
                sliderControls.slides[i].style.transform =`translate(${sliderControls.curtrans[i]}%, 0%)`;
            }
        }
        sliderControls.index++;
        if(sliderControls.index > sliderControls.amount - 1){
            sliderControls.index = 0;
        }

    }

    let autoRun = () => {
        loopThroughBackgroundsRight(); 
        setInterval(loopThroughBackgroundsRight, 5000); 
    }

    autoRun();

    if(document.getElementById("carouselright")){
        document.getElementById("carouselright").addEventListener("click",(e) => {loopThroughBackgroundsRight(e)});
    }
    if(document.getElementById("carouselleft")){
        document.getElementById("carouselleft").addEventListener("click",(e) =>  {loopThroughBackgroundsLeft(e)});
    }
    if(document.getElementById("carouselright")){
        document.getElementById("carouselright").addEventListener("click",(e) => {loopThroughBackgroundsRight(e)});
    }
    if(document.getElementById("carouselleft")){
        document.getElementById("carouselleft").addEventListener("click",(e) => {loopThroughBackgroundsLeft(e)});
    }

  

})
