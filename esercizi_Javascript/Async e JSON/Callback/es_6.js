function soloPari(vettore){
    return vettore.filter(ele => ele % 2 === 0);
}

function stampaSoloPari(vettore, filtraPari){
    const vettorePari = filtraPari(vettore);
    console.log(vettorePari);
}

const vettore = [1, 2, 3, 4, 5, 6];
stampaSoloPari(vettore, soloPari);