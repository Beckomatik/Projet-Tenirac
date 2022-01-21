
//FORMULAIRE GEO API ------------------------------------------
url = "https://api-adresse.data.gouv.fr/search/?q=8+bd+du+port&limit=15";

fetch(url)  
    .then(function(resp) { return resp.json() }) // Convert data to json
    .then(function(data) {
      console.log(data);
    })
    .catch(function() {
      // catch any errors
    });

