fetch('https://jsonplaceholder.typicode.com/todos?id=18')
.then(res => res.json())
.then(data => console.log(data))
.catch(err => console.log(err));