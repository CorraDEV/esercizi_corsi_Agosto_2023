function funCallBack(vettore, callback){
    for(let ele of vettore)
        callback(ele);    
}

function stampaElemento(ele){
    console.log(ele);
}

const vettore = [1, 2, 3, 4, 5, 6];
funCallBack(vettore, stampaElemento);