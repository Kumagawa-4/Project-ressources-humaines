function getStorageItem() {
    let values = JSON.parse(localStorage.getItem("attribute"));
    let tbody = document.querySelector("tbody");
    tbody.innerHTML = '';

    if (values) {
        values.forEach((value) => {
            let row = document.createElement("tr");

            let plat = document.createElement("td");
            plat.innerHTML = value.plat;
            plat.classList.add("cell-padding"); // Add class here
            row.appendChild(plat);

            let ingredient = document.createElement("td");
            ingredient.innerHTML = value.ingredient;
            ingredient.classList.add("cell-padding"); // Add class here
            row.appendChild(ingredient);

            let prix = document.createElement("td");
            prix.innerHTML = value.prix;
            row.appendChild(prix);

            tbody.appendChild(row);
        });
    }
}
getStorageItem()