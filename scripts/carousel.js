const carouselItems = document.querySelectorAll(".carousel_item"); 
let i = 1;

setInterval(() => {
// Accessing All the carousel Items
 Array.from(carouselItems).forEach((item,index) => {

   if(i < carouselItems.length){
    item.style.transform = `translateX(${i*100}%)`
   }
  })

  if(i < carouselItems.length){
    i++;
  }
  else{
    i=0;
  }
},3000)

const carouselItems2 = document.querySelectorAll(".carousel_item2"); 
let b = 1;

setInterval(() => {
// Accessing All the carousel Items
 Array.from(carouselItems2).forEach((item,index) => {

   if(b+3 < carouselItems2.length){
    item.style.transform = `translateX(${b*100}%)`

   }
  })

  if(b < carouselItems2.length){
    b++;
  }
  else{
    b=0;
  }
},3000)