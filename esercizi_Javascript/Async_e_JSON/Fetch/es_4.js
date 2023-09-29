fetch('https://jsonplaceholder.typicode.com/todos/1', {
    method: 'DELETE'
})
.then(res =>{
    if(res.ok){
        console.log('dato eliminato');
        return res.json();
    }
    else        
        throw new Error('errore durante eliminazione dato');    
})
.then(data => console.log(data))
.catch(err => console.log(err));