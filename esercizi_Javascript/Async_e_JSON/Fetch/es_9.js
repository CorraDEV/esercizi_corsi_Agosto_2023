fetch('https://jsonplaceholder.typicode.com/todos/1', {
    mode: 'cors'
})
.then(res => res.json())
.then(data => console.log(data))
.catch(err => console.log(err));