const token = 'a2?kgnc$';

fetch('https://jsonplaceholder.typicode.com/todos/1', {
    headers: {  
        Authorization: 'Bearer ' + token        
    }
})
.then(res => res.json())
.then(data => console.log(data))
.catch(err => console.log(err));