document.addEventListener("DOMContentLoaded", function () {
    let catalogButton = document.getElementById("catalogButton");
    let catalogMenu = document.getElementById("catalogMenu");

    if (catalogButton && catalogMenu) {
        catalogButton.addEventListener("click", function () {
            catalogMenu.classList.toggle("show");
        });

        // Закрытие меню при клике вне его
        document.addEventListener("click", function (event) {
            if (!catalogButton.contains(event.target) && !catalogMenu.contains(event.target)) {
                catalogMenu.classList.remove("show");
            }
        });
    }
});
