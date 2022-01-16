// Switch Slider
const modelViewer = document.querySelector("model-viewer");
const filename = document.getElementById("filename");
const arButton = document.getElementById("ar-button");

function switchSrc(element, name) {
    arButton.style.display = "";

    console.log("element: " + element);
    console.log("name: " + name);

    filename.textContent = name;

    const base = "./models/" + name;
    modelViewer.src = base + '.glb';
    modelViewer.iossrc = base + '.usdz';
    modelViewer.poster = base + '.png';

    const slides = document.querySelectorAll(".slide");
    slides.forEach((element) => { element.classList.remove("selected"); });
    element.classList.add("selected");
};

// window.switchSrc = (element, name) => {
//     const base = "./models/" + name;
//     modelViewer.src = base + '.glb';
//     modelViewer.poster = base + '.png';

//     const slides = document.querySelectorAll(".slide");
//     slides.forEach((element) => { element.classList.remove("selected"); });
//     element.classList.add("selected");
// };

document.querySelector(".slider").addEventListener('beforexrselect', (ev) => {
    // Keep slider interactions from affecting the XR scene.
    ev.preventDefault();
});