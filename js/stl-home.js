

fetch('js/camisas.json')
    .then(function(data) { return data.json()})
    .then(function(data) { 
        camisas = data;

        camisas.forEach(function (camisa) {
        document.querySelector('.stl-list--1').innerHTML += 
            `
            <li class="stl-list__block stl-list__block--home">
                <img src="${camisa.image}" class= "stl-list__block--img stl-list__block--img--home" alt="hawaiian shirt">
            </li>
            `;

        document.querySelector('.stl-list--2').innerHTML += 
            `
            <li class="stl-list__block stl-list__block--home">
                <img src="${camisa.image}" class= "stl-list__block--img stl-list__block--img--home" alt="hawaiian shirt">
            </li>
            `;

        document.querySelector('.stl-list--3').innerHTML += 
        `
        <li class="stl-list__block stl-list__block--home">
            <img src="${camisa.image}" class= "stl-list__block--img stl-list__block--img--home" alt="hawaiian shirt">
        </li>
        `;
        }
    )})


