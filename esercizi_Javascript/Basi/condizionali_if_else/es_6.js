let anno = 2016;

if(anno % 400 === 0 || anno % 4 === 0 && anno % 100 !== 0)
    console.log(`${anno} è un anno bisestile`);
else
    console.log(`${anno} non è un anno bisestile`);             