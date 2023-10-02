async function richiestaDati(url) {        
    try{
        const responseObj = await fetch(url);        
        
        if(!responseObj.ok)    
            throw new Error('errore nella chiamata AJAX');
        
        const res = await responseObj.json();
        console.log(res);
    }
    catch(err){
        console.log(err);
    }    
}

const url = 'https://jsonplaceholder.typicode.com/users/1';
richiestaDati(url);