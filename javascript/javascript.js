document.addEventListener("DOMContentLoaded", (event) => {
    console.log(event); 
    
    let arrayOfPercent = () => {
        let arr =  []; 
        for(let i = 0; i < document.querySelectorAll(".slide").length; i++){
            arr.push(i * 100); 
        }
        return arr;
    }

    let sliderControls = {
    slides: document.querySelectorAll(".slide"),
    amount: document.querySelectorAll(".slide").length,
    index: 0,  
    farright: (document.querySelectorAll(".slide").length - 1) * 100,
    curtrans: arrayOfPercent()
    }

    
    console.log(sliderControls.curtrans);

    let loopThroughBackgroundsRight = () => {
        console.log(sliderControls.amount + (sliderControls.index - sliderControls.amount));
        sliderControls.index--; 
        if(sliderControls.index <= -1){
            sliderControls.index = sliderControls.amount - 1; 
        }
        for(let i = 0; i < sliderControls.amount; i++){
            if(i === sliderControls.index){
                console.log(sliderControls.curtrans);
                console.log(sliderControls.index);
                sliderControls.slides[i].style.transform = 'translate(0%, 0%)';
                sliderControls.curtrans[i] = 0; 
            }
            else{
                sliderControls.curtrans[i] = sliderControls.curtrans[i] + 100;
                sliderControls.slides[i].style.transform = `translate(${sliderControls.curtrans[i]}%, 0%)`;
            }
        }
       
    }
    
    let loopThroughBackgroundsLeft = () => {
        for(let i = 0; i < sliderControls.amount; i++){
            if(i === sliderControls.index){
                sliderControls.slides[i].style.transform = `translate(${sliderControls.farright}%, 0%)`;
                sliderControls.curtrans[i] = sliderControls.farright; 
            }   
            else{
                console.log(sliderControls.curtrans[i]);
                sliderControls.curtrans[i] = sliderControls.curtrans[i] - 100; 
                console.log(sliderControls.curtrans);
                sliderControls.slides[i].style.transform =`translate(${sliderControls.curtrans[i]}%, 0%)`;
            }
        }
        sliderControls.index++;
        if(sliderControls.index > sliderControls.amount - 1){
            sliderControls.index = 0;
        }

    }

    document.getElementById("carouselright").addEventListener("click", loopThroughBackgroundsRight);
    document.getElementById("carouselleft").addEventListener("click", loopThroughBackgroundsLeft);

})
