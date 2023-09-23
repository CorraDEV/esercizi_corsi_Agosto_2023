function funzioneCallback(){
    console.log('sono una funzione di callback');
}

function funzioneConCallback(callback){
    callback();
}

funzioneConCallback(funzioneCallback);