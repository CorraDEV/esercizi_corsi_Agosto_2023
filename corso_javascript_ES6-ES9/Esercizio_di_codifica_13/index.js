function test(frutto){
    switch(frutto){
        case 'mela':
            console.log('Mela: dolce e croccante');
            break;
        case 'banana':
            console.log('Banana: dolce e morbida');
            break;
        case 'arancia':
            console.log('Arancia: agrumata e succosa');
            break;    
        default:
            console.log('Non conosco questo frutto');
    }
}

frutto('mela');