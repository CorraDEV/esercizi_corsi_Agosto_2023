function ordinaOggetti(oggetti){    
    oggetti.sort(function confrontaEta(a, b) {
        return a.eta - b.eta;
    });    
}
function stampaDalPiuGiovane(persone, ordinamento){
    ordinamento(persone);
    console.log(persone);
}

const persone = [
{
    nome: "Giuseppe",
    eta: 80,
    cognome: "Rossi",    
},
{
    nome: "Samuele",
    eta: 92,
    cognome: "Rossi",    
},
{
    nome: "Riccardo",
    eta: 75,
    cognome: "Rossi",
}
];

stampaDalPiuGiovane(persone, ordinaOggetti);