async function stampaRisultato(){
    const pro1 = new Promise((resolve, reject) => resolve('risolta'));
    const res1 = await pro1;
    
    const pro2 = await new Promise((resolve, reject) => resolve('risolta2'));
    const res2 = await pro2;

    const pro3 = await new Promise((resolve, reject) => resolve('risolta3'));
    const res3 = await pro3;

    console.log(res1, res2, res3);
}
stampaRisultato();