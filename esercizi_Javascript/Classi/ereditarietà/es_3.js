class Persona{
    constructor(nome, cognome){
        this.nome = nome;
        this.cognome = cognome;
    }
}

class Studente extends Persona{
    constructor(nome, cognome, corsoDiStudi){
        super(nome, cognome);
        this.corsoDiStudi = corsoDiStudi;
    }    
}

const studente = new Studente('Paolo', 'Rossi', 'Computer Science');

console.log(studente.nome, studente.cognome, studente.corsoDiStudi);