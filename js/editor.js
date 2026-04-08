const LOADER = document.getElementById('js-loader');
const DRAG_NOTICE = document.getElementById('js-drag-notice');

const TRAY = document.getElementById('js-tray-slide');

var theModel;

const MODEL_PATH = "content/camisa.glb";

var loaded = false;
var cameraFar = 5;
var activeOption = 'shirt';

const colors = [
  { texture: 'content/images/patterns/1.webp',  size: [4,4,4], shininess: 0, name: 'Hibiscus Night'    },
  { texture: 'content/images/patterns/2.webp',  size: [4,4,4], shininess: 0, name: 'Tropicana'         },
  { texture: 'content/images/patterns/3.jpeg',  size: [4,4,4], shininess: 0, name: 'Pink Hibiscus'     },
  { texture: 'content/images/patterns/4.jpeg',  size: [4,4,4], shininess: 0, name: 'Coral Garden'      },
  { texture: 'content/images/patterns/5.jpeg',  size: [4,4,4], shininess: 0, name: 'Pacific Bloom'     },
  { texture: 'content/images/patterns/6.jpeg',  size: [4,4,4], shininess: 0, name: 'Red Jungle'        },
  { texture: 'content/images/patterns/7.jpeg',  size: [4,4,4], shininess: 0, name: 'Blue Lagoon'       },
  { texture: 'content/images/patterns/8.jpeg',  size: [4,4,4], shininess: 0, name: 'Sunset Palms'      },
  { texture: 'content/images/patterns/9.jpeg',  size: [4,4,4], shininess: 0, name: 'Forest Floor'      },
  { texture: 'content/images/patterns/10.jpeg', size: [4,4,4], shininess: 0, name: 'Maui Leaves'       },
  { texture: 'content/images/patterns/11.png',  size: [4,4,4], shininess: 0, name: 'Kona Coast'        },
  { texture: 'content/images/patterns/12.png',  size: [4,4,4], shininess: 0, name: 'Plumeria White'    },
  { texture: 'content/images/patterns/13.png',  size: [4,4,4], shininess: 0, name: 'Tiki Dusk'         },
  { texture: 'content/images/patterns/14.png',  size: [4,4,4], shininess: 0, name: 'Monstera Dark'     },
  { texture: 'content/images/patterns/15.jpeg', size: [4,4,4], shininess: 0, name: 'Waikiki Floral'    },
  // Variantes de tiling
  { texture: 'content/images/patterns/3.jpeg',  size: [2,2,2], shininess: 0, name: 'Pink Hibiscus XL'  },
  { texture: 'content/images/patterns/6.jpeg',  size: [2,2,2], shininess: 0, name: 'Red Jungle XL'     },
  { texture: 'content/images/patterns/1.webp',  size: [6,6,6], shininess: 0, name: 'Hibiscus Night SM' },
  { texture: 'content/images/patterns/8.jpeg',  size: [3,3,3], shininess: 0, name: 'Sunset Palms MD'   },
  { texture: 'content/images/patterns/2.webp',  size: [6,6,6], shininess: 0, name: 'Tropicana SM'      },
  { texture: 'content/images/patterns/11.png',  size: [3,3,3], shininess: 0, name: 'Kona Coast MD'     },
  { texture: 'content/images/patterns/4.jpeg',  size: [2,2,2], shininess: 0, name: 'Coral Garden XL'   },
  { texture: 'content/images/patterns/12.png',  size: [2,2,2], shininess: 0, name: 'Plumeria White XL' },
  { texture: 'content/images/patterns/7.jpeg',  size: [2,2,2], shininess: 0, name: 'Blue Lagoon XL'    },
  { texture: 'content/images/patterns/14.png',  size: [3,3,3], shininess: 0, name: 'Monstera Dark MD'  },
  { texture: 'content/images/patterns/5.jpeg',  size: [2,2,2], shininess: 0, name: 'Pacific Bloom XL'  },
  { texture: 'content/images/patterns/9.jpeg',  size: [3,3,3], shininess: 0, name: 'Forest Floor MD'   },
  { texture: 'content/images/patterns/10.jpeg', size: [2,2,2], shininess: 0, name: 'Maui Leaves XL'    },
  { texture: 'content/images/patterns/13.png',  size: [2,2,2], shininess: 0, name: 'Tiki Dusk XL'      },
  { texture: 'content/images/patterns/1.webp',  size: [2,2,2], shininess: 0, name: 'Hibiscus Night XL' },
  { texture: 'content/images/patterns/2.webp',  size: [3,3,3], shininess: 0, name: 'Tropicana MD'      },
  { texture: 'content/images/patterns/3.jpeg',  size: [6,6,6], shininess: 0, name: 'Pink Hibiscus SM'  },
];

const buttonColors = [
  { color: 'FAFAF8', shininess: 30, name: 'Pearl White'  },
  { color: 'EDE0C4', shininess: 20, name: 'Ivory'        },
  { color: 'D4B895', shininess: 15, name: 'Natural'      },
  { color: 'C19A6B', shininess: 10, name: 'Tan'          },
  { color: '8B6F5E', shininess: 10, name: 'Warm Brown'   },
  { color: '6B7280', shininess: 20, name: 'Slate'        },
  { color: '01003C', shininess: 50, name: 'Navy'         },
  { color: '1A1A1A', shininess: 60, name: 'Jet Black'    },
];

const BACKGROUND_COLOR = 0xf1f1f1;

// Init the scene
const scene = new THREE.Scene();
// Set background
scene.background = new THREE.Color(BACKGROUND_COLOR);
scene.fog = new THREE.Fog(BACKGROUND_COLOR, 20, 100);

const canvas = document.querySelector('#c');

// Init the renderer
const renderer = new THREE.WebGLRenderer({canvas, antialias: true});

renderer.shadowMap.enabled = true;
renderer.setPixelRatio(window.devicePixelRatio); 

document.body.appendChild(renderer.domElement);

// Add a camera
var camera = new THREE.PerspectiveCamera( 50, window.innerWidth / window.innerHeight, 0.1, 1000);
camera.position.z = cameraFar;
camera.position.x = 0;

// Initial material
const INITIAL_MTL = new THREE.MeshPhongMaterial( { color: 0xf1f1f1, shininess: 10 } );

const INITIAL_MAP = [
  {childID: "button", mtl: INITIAL_MTL},
  {childID: "shirt", mtl: INITIAL_MTL},
];

// Init the object loader
var loader = new THREE.GLTFLoader();

loader.load(MODEL_PATH, function(gltf) {
  theModel = gltf.scene;

  theModel.traverse((o) => {
     if (o.isMesh) {
       o.castShadow = true;
       o.receiveShadow = true;
     }
   });

// Set the models initial scale   
  theModel.scale.set(2,2,2);
  theModel.rotation.y = Math.PI;
 

  // Add the model to the scene
  theModel.position.y = -1;
  
  // Set initial textures
  for (let object of INITIAL_MAP) {
    initColor(theModel, object.childID, object.mtl);
  }
  
  scene.add(theModel);

  // Aplicar textura hawaiana aleatoria al cargar
  const textureIndices = colors.reduce((acc, c, i) => c.texture ? [...acc, i] : acc, []);
  const randomIdx = textureIndices[Math.floor(Math.random() * textureIndices.length)];
  setMaterial(theModel, 'shirt', buildMaterial(colors[randomIdx]));

  // Marcar ese swatch como activo por defecto
  activeSwatchMap['shirt'] = randomIdx;
  const defaultSwatch = TRAY.querySelector('[data-key="' + randomIdx + '"]');
  if (defaultSwatch) defaultSwatch.classList.add('--is-active');

  // Remove the loader
  LOADER.remove();

}, undefined, function(error) {
  console.error(error)
});

// Function - Add the textures to the models
function initColor(parent, type, mtl) {
  parent.traverse((o) => {
   if (o.isMesh) {
     if (o.name.includes(type)) {
          o.material = mtl;
          o.nameID = type; // Set a new property to identify this object
       }
   }
 });
}


// Add lights
var hemiLight = new THREE.HemisphereLight( 0xffffff, 0xffffff, 0.61 );
    hemiLight.position.set( 0, 50, 0 );
// Add hemisphere light to scene   
scene.add( hemiLight );

var dirLight = new THREE.DirectionalLight( 0xffffff, 0.54 );
    dirLight.position.set( -8, 12, 8 );
    dirLight.castShadow = true;
    dirLight.shadow.mapSize = new THREE.Vector2(1024, 1024);
// Add directional Light to scene    
    scene.add( dirLight );

// Floor
var floorGeometry = new THREE.PlaneGeometry(5000, 5000, 1, 1);
var floorMaterial = new THREE.MeshPhongMaterial({
  color: 0xeeeeee,
  shininess: 0
});

var floor = new THREE.Mesh(floorGeometry, floorMaterial);
floor.rotation.x = -0.5 * Math.PI;
floor.receiveShadow = true;
floor.position.y = -1;
scene.add(floor);

// Add controls
var controls = new THREE.OrbitControls( camera, renderer.domElement );
controls.maxPolarAngle = Math.PI / 2;
controls.minPolarAngle = Math.PI / 3;
controls.enableDamping = true;
controls.enablePan = false;
controls.dampingFactor = 0.1;
controls.autoRotate = false; // Toggle this if you'd like the chair to automatically rotate
controls.autoRotateSpeed = 0.2; // 30


function animate() {

  controls.update();
  renderer.render(scene, camera);
  requestAnimationFrame(animate);
  
  if (resizeRendererToDisplaySize(renderer)) {
    const canvas = renderer.domElement;
    camera.aspect = canvas.clientWidth / canvas.clientHeight;
    camera.updateProjectionMatrix();
  }
  
  if (theModel != null && loaded == false) {
    initialRotation();
    DRAG_NOTICE.classList.add('start');
  }
}

animate();

// Function - New resizing method
function resizeRendererToDisplaySize(renderer) {
  const canvas = renderer.domElement;
  var width = window.innerWidth;
  var height = window.innerHeight;
  var canvasPixelWidth = canvas.width / window.devicePixelRatio;
  var canvasPixelHeight = canvas.height / window.devicePixelRatio;

  const needResize = canvasPixelWidth !== width || canvasPixelHeight !== height;
  if (needResize) {
    
    renderer.setSize(width, height, false);
  }
  return needResize;
}

// Disable scrolling .. (??)
window.onscroll = function () { window.scrollTo(0, 0); };

// Function - Build Swatches
let currentColors = colors;
const activeSwatchMap = {};

function buildSwatches(arr) {
  currentColors = arr;
  TRAY.innerHTML = '';
  for (let [i, color] of arr.entries()) {
    let swatch = document.createElement('div');
    swatch.classList.add('tray__swatch');
    if (color.texture) {
      swatch.style.backgroundImage = "url(" + color.texture + ")";
      swatch.style.backgroundSize = Math.round((4 / color.size[0]) * 100) + '%';
    } else {
      swatch.style.background = "#" + color.color;
    }
    swatch.setAttribute('data-key', i);
    if (color.name) swatch.setAttribute('data-name', color.name);
    swatch.addEventListener('mouseenter', () => updateSwatchLabel(arr[i].name || ''));
    swatch.addEventListener('mouseleave', () => {
      const savedKey = activeSwatchMap[activeOption];
      updateSwatchLabel(savedKey != null ? (currentColors[savedKey].name || '') : '');
    });
    TRAY.append(swatch);
  }
  // Restore active swatch for current option
  const savedKey = activeSwatchMap[activeOption];
  if (savedKey != null) {
    const sw = TRAY.querySelector('[data-key="' + savedKey + '"]');
    if (sw) sw.classList.add('--is-active');
  }
}

buildSwatches(colors);

// Swatch click — event delegation
TRAY.addEventListener('click', (e) => {
  const swatch = e.target.closest('.tray__swatch');
  if (!swatch) return;
  const key = parseInt(swatch.dataset.key);
  const color = currentColors[key];
  setMaterial(theModel, activeOption, buildMaterial(color));
  updateSwatchLabel(color.name || '');
  TRAY.querySelectorAll('.tray__swatch').forEach(s => s.classList.remove('--is-active'));
  swatch.classList.add('--is-active');
  activeSwatchMap[activeOption] = key;
});

// Select Option
const options = document.querySelectorAll(".option");

for (const option of options) {
  option.addEventListener('click', selectOption);
}

function selectOption(e) {
  let option = e.currentTarget;
  if (option.classList.contains('--is-active')) return;
  activeOption = option.dataset.option;
  for (const otherOption of options) {
    otherOption.classList.remove('--is-active');
  }
  option.classList.add('--is-active');
  buildSwatches(activeOption === 'button' ? buttonColors : colors);
}



function buildMaterial(color) {
  if (color.texture) {
    let txt = new THREE.TextureLoader().load(color.texture);
    txt.repeat.set(color.size[0], color.size[1], color.size[2]);
    txt.wrapS = THREE.RepeatWrapping;
    txt.wrapT = THREE.RepeatWrapping;
    return new THREE.MeshPhongMaterial({
      map: txt,
      shininess: color.shininess ? color.shininess : 10
    });
  } else {
    return new THREE.MeshPhongMaterial({
      color: parseInt('0x' + color.color),
      shininess: color.shininess ? color.shininess : 10
    });
  }
}



function setMaterial(parent, type, mtl) {
  parent.traverse((o) => {
   if (o.isMesh && o.nameID != null) {
     if (o.nameID == type) {
          o.material = mtl;
       }
   }
 });
}

// Function - Opening rotate
let initRotate = 0;

function initialRotation() {
  initRotate++;
if (initRotate <= 120) {
    theModel.rotation.y += Math.PI / 60;
  } else {
    loaded = true;
  }
}

// Reset button
const RESET_BTN = document.getElementById('js-reset');
const INITIAL_MTL_RESET = new THREE.MeshPhongMaterial({ color: 0xf1f1f1, shininess: 10 });
if (RESET_BTN) {
  RESET_BTN.addEventListener('click', () => {
    setMaterial(theModel, 'shirt', INITIAL_MTL_RESET);
    setMaterial(theModel, 'button', INITIAL_MTL_RESET);
    Object.keys(activeSwatchMap).forEach(k => { activeSwatchMap[k] = null; });
    TRAY.querySelectorAll('.tray__swatch').forEach(s => s.classList.remove('--is-active'));
    updateSwatchLabel('');
  });
}

// Swatch label
const SWATCH_LABEL = document.getElementById('js-swatch-label');
function updateSwatchLabel(name) {
  if (!SWATCH_LABEL) return;
  SWATCH_LABEL.textContent = name;
  SWATCH_LABEL.classList.toggle('--visible', !!name);
}

var slider = document.getElementById('js-tray'), sliderItems = document.getElementById('js-tray-slide'), difference;

function slide(wrapper, items) {
  var posX1 = 0,
      posX2 = 0,
      posInitial,
      threshold = 20,
      posFinal,
      slides = items.getElementsByClassName('tray__swatch');
  
  // Mouse events
  items.onmousedown = dragStart;
  
  // Touch events
  items.addEventListener('touchstart', dragStart);
  items.addEventListener('touchend', dragEnd);
  items.addEventListener('touchmove', dragAction);


  function dragStart (e) {
    e = e || window.event;
     posInitial = items.offsetLeft;
     difference = sliderItems.offsetWidth - slider.offsetWidth;
     difference = difference * -1;
    
    if (e.type == 'touchstart') {
      posX1 = e.touches[0].clientX;
    } else {
      posX1 = e.clientX;
      document.onmouseup = dragEnd;
      document.onmousemove = dragAction;
    }
  }

  function dragAction (e) {
    e = e || window.event;
    
    if (e.type == 'touchmove') {
      posX2 = posX1 - e.touches[0].clientX;
      posX1 = e.touches[0].clientX;
    } else {
      posX2 = posX1 - e.clientX;
      posX1 = e.clientX;
    }
    
    if (items.offsetLeft - posX2 <= 0 && items.offsetLeft - posX2 >= difference) {
        items.style.left = (items.offsetLeft - posX2) + "px";
    }
  }
  
  function dragEnd (e) {
    posFinal = items.offsetLeft;
    if (posFinal - posInitial < -threshold) {
      
    } else if (posFinal - posInitial > threshold) {

    } else {
      items.style.left = (posInitial) + "px";
    }

    document.onmouseup = null;
    document.onmousemove = null;
  }

}

slide(slider, sliderItems);