async function f(){
    const pro1 = new Promise((resolve, reject) => resolve('risolta'));
    const pro2 = new Promise((resolve, reject) => resolve('risolta2'));
    const pro3 = new Promise((resolve, reject) => resolve('risolta3'));
    const allPros = await Promise.all([pro1, pro2, pro3]);
    console.log(allPros);
}
f();