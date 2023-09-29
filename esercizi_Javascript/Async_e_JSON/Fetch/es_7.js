fetch('https://jsonplaceholder.typicode.com/todos/1000')
.then(res =>{
    if(res.ok)
        return res.json();
    else
        throw new Error('richiesta fallita');
})
.then(data => console.log(data))
.catch(err => console.log(err));