function test(var1, var2){
    if(var1 && var2)
        console.log('Entrambi true');
    else if(var1)
        console.log('Solo var1 è true');
    else if(var2)
        console.log('Solo var2 è true');        
    else
        console.log('Entrambi false');        
}

test(4,5);