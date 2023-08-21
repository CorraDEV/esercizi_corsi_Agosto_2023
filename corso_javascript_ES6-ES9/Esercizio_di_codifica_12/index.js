function test(var1,var2, var3){
    if(var1 > var2){
        if(var1 > var3)
            console.log(++var1);
        else
            console.log(var3+3);
    }
    else if(var2 > var3)
        console.log(var2 + 2);
    else 
        console.log(var3 + 3);
}

test(4,6,2);