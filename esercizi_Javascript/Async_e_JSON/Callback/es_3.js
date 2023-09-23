function chiamataAsincrona(callback) {
    setTimeout(() => callback("testo del messaggio"), 1500);
}
  
function mioCallback(testoMessaggio) {
    console.log("messaggio: "+testoMessaggio);
}
  
chiamataAsincrona(mioCallback);