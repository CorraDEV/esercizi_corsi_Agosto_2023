function testUpperCase(variabile){
    var res;
    
    res = variabile.toUpperCase();
  
    return res;
}

function testLowerCase(variabile){
    var res;
    
    res = variabile.toLowerCase();
  
    return res;
}

let parola = 'AlBeRo';
console.log(testUpperCase(parola));
console.log(testLowerCase(parola));