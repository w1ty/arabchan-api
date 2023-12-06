import { data, createImage } from "./utils.js";

const container = document.querySelector(".random .container");
container.innerHTML = createImage(
    data[Math.floor(Math.random() * data.length)]
);
