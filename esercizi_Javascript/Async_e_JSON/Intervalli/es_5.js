const slides = ['slide1', 'slide2', 'slide3'];

let i = 0;

setInterval(() =>{
    console.log(slides[i]);
    i++;

    if(slides.length == i)
        i = 0;
}, 3000)