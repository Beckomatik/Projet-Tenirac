//FORMULAIRE GEO API ------------------------------------------

let adresse = document.querySelector("#adresse");
let wrapper = document.getElementById('wrapper');

adresse.addEventListener('input', function search() {


  if (adresse.value.length > 0) {
    fetch("https://api-adresse.data.gouv.fr/search/?q=" + adresse.value + "&limit=6")
      .then(response => response.json())
      .then(data => {
        let result = data.features;
      

        wrapper.innerHTML = "";
        if (result.length) {
          for (let i = 0; i < result.length; i++) {
            let li = document.createElement('li');
            li.innerText = result[i].properties.label;

            wrapper.appendChild(li);

            li.addEventListener('click', displayadresse);

            function displayadresse() {
              adresse.value = li.innerText;

              wrapper.innerHTML = "";
            }
          }
        }
      })
  } else {
    wrapper.innerHTML = "";
  };
});