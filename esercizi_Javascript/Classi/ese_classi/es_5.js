class Studente{
    constructor(nome, cognome, voti){
        this.nome = nome;
        this.cognome = cognome;
        this.voti = voti;
    }
    aggiungiVoto(voto){
        this.voti.push(voto);
    }
}

let studente = new Studente("Giuseppe", "Rossi", [7, 5, 6]);
studente.aggiungiVoto(8);

console.log(studente.voti);