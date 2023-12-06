"use strict";

import { data, createImage } from "/utils.js";

const content = document.getElementById("content");
const imagesContainer = content.lastElementChild;
let limit = { start: 0, end: 30 };
let showButton = true;

if (data) {
    content.firstElementChild.remove();
}

function addImage(image) {
    imagesContainer.innerHTML += createImage(image);
}

function moreButton() {
    const showMore = document.createElement("div");
    showMore.className = "more";
    const button = document.createElement("button");
    button.textContent = "Show More";
    button.addEventListener("click", () => {
        imagesContainer.lastElementChild.remove();
        limit.start = limit.end;
        let add = 30;
        if (limit.end + add >= data.length) {
            showButton = false;
            limit.end = data.length;
            return addImages();
        }
        limit.end += add;
        addImages();
    });

    showMore.appendChild(button);
    return showMore;
}

function addImages() {
    for (let i = limit.start; i < limit.end; i++) {
        addImage(data[i]);
    }
    if (showButton) {
        imagesContainer.appendChild(moreButton());
    }
}
console.log(data);
addImages();
