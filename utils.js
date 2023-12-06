async function fetchData() {
    const result = await fetch("http://arabchan.atwebpages.com/api.php");
    return result.json();
}

export function createImage(image) {
    const { id, url, description } = image;
    return `<div class="image">
        <img src="${url}" />
        <div class="info">
            <p class="id">ID: <span>${id}</span></p>
            <p class="description">${description}</p>
        </div>
    </div>`;
}

export const data = await fetchData();
