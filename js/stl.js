const tagsTotales = ['urban', 'sober', 'monochromatic', 'tropical', 'colorful', 'beach', 'vintage', 'arty', 'nighttime'];
tagsTotales.forEach(function(tag) {
    document.querySelector('.stl__filters').innerHTML += `<button class="stl__filters--tags">${tag}</button>`;
})

//let camisas = []
//const CamisasAsString = camisas.join 

fetch('./js/camisas.json')
    .then(function(data) { return data.json()})
    .then(function(data) { 
        camisas = data;
    })

document.querySelectorAll('.stl__filters--tags').forEach(function(button) {
    button.addEventListener('click', function() {
        button.classList.toggle('active');

        const list = [];
        document.querySelectorAll('.active').forEach(function(buttonActive) {
            list.push(buttonActive.textContent)
        });
        paintProducts(list)
    })
})

function paintProducts(selectedFilter) {
    document.querySelector('.stl__list').innerHTML = '';
    camisas.forEach(function (camisa) {
        if (camisa.tags.some(function(tag) { return selectedFilter.includes(tag) })) {
            document.querySelector('.stl__list').innerHTML += 
            `
            <li class="stl__block">
                <div>
                    <div onclick="changeClass()" class="heart"></div>  
                    <img src="${camisa.image}" class= "stl__img" alt="hawaiian shirt">
                </div>
                <p class="stl__name">${camisa.name}</p> 
                <p class="stl__tags">${camisa.tags}</p> 
            </li>
            `;
        }
    });

    // HEART BUTTON

    function changeClass() {
        var element = document.getElementsByClassName("heart");
        element.classList.toggle("is-active");
        }

    }

