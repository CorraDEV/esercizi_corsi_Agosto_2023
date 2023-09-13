const emailMsg = {
    oggetto: 'Auguri di compleanno',
    nomeDest: 'Luca'
}

emailMsg.contenuto = `Auguri di buon compleanno ${emailMsg.nomeDest}`;
console.log(
`Oggetto: ${emailMsg.oggetto}
Destinatario: ${emailMsg.nomeDest}
${emailMsg.contenuto}
`
);