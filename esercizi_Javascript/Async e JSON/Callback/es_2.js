function funzioneCallback(valore){
    console.log(valore);
}

function funzioneConCallback(valore, metodo){
    metodo(valore);
}

funzioneConCallback(10, funzioneCallback);