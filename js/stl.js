const tagsTotales = ['urban', 'sober', 'monochromatic', 'tropical', 'colorful', 'beach', 'vintage', 'arty', 'nighttime'];
tagsTotales.forEach(function(tag) {
    document.querySelector('.stl__filters').innerHTML += `<button class="stl__filters--tags">${tag}</button>`;
})

//let camisas = []
//const CamisasAsString = camisas.join 

const favouriteShirts = [];

fetch('js/camisas.json')
    .then(function(data) { return data.json()})
    .then(function(data) { 
        camisas = data;
        paintProducts([])
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

// HEART BUTTON

function changeClass(id) {
    var element = document.getElementById(`heart-${id}`);
    element.classList.toggle("is-active");
    if (element.classList.contains('is-active')) {
        favouriteShirts.push(id);
    } else {
        favouriteShirts.splice(favouriteShirts.indexOf(id),1);
    }
}

function paintProducts(selectedFilter) {
    document.querySelector('.stl-list').innerHTML = '';
    camisas.forEach(function (camisa) {
        const hasNotFilters = selectedFilter.length === 0;
        const filterIncluded = camisa.tags.some(function(tag) { return selectedFilter.includes(tag) });
        if (hasNotFilters || filterIncluded) {
            document.querySelector('.stl-list').innerHTML += 
            `
            <li class="stl-list__block">
                <div class="stl-list__block--avatar">
                    <div id="heart-${camisa.id}" onclick="changeClass(${camisa.id})" class="heart ${favouriteShirts.includes(camisa.id) ? 'is-active' : ''}"></div>  
                    <img src="${camisa.image}" class= "stl-list__block--img" alt="hawaiian shirt">
                </div>
                <p class="stl-list__block--name">${camisa.name}</p> 
                <p class="stl-list__block--tags">${camisa.tags.join(",  ")}</p> 
            </li>
            `;
        }
    });

    }

