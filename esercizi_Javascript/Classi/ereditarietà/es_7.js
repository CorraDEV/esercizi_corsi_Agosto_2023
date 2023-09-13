class Persona{
    saluta(){
        console.log("Ciao, sono una persona");
    }
}

class Studente extends Persona{
    constructor(nome, corsoDiStudi){
        super();
        this.nome = nome;
        this.corsoDiStudi = corsoDiStudi;
    }    
    saluta(){
        console.log(`Ciao, mi chiamo ${this.nome} e sono uno studente di ${this.corsoDiStudi}`);
    }
}

const studente = new Studente('Andrea', 'Computer Science');
const persona = new Persona();

persona.saluta();
studente.saluta();