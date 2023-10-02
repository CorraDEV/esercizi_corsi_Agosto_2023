async function richiestaDati(url) {        
    const responseObj = await fetch(url);        
    const res = await responseObj.json(); 
    return res;
}

async function stampaDati(url, funzioneFetch){
    const res = await funzioneFetch(url);        
    console.log(res);
}
const url = 'https://jsonplaceholder.typicode.com/users';
stampaDati(url, richiestaDati);