

fetch('./js/camisas.json')
    .then(function(data) { return data.json()})
    .then(function(data) { 
        camisas = data;

        camisas.forEach(function (camisa) {
        document.querySelector('.stl__list--1').innerHTML += 
            `
            <li class="stl__block stl__block--home">
                <img src="${camisa.image}" class= "stl__img stl__img--home" alt="hawaiian shirt">
            </li>
            `;

        document.querySelector('.stl__list--2').innerHTML += 
            `
            <li class="stl__block stl__block--home">
                <img src="${camisa.image}" class= "stl__img stl__img--home" alt="hawaiian shirt">
            </li>
            `;
        }
    )})


