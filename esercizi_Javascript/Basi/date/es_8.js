const dataOdierna = new Date();
const dataFutura = new Date(2023, 11, 31);

if(dataFutura > dataOdierna) 
    console.log("data futura");
else
    console.log("data non futura");