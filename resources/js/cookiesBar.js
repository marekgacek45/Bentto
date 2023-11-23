const cookieBox = document.querySelector("#cookieBox");
const acceptBtn = document.querySelector("#acceptBtn");

const addCookie = () => {
    document.cookie = "Polityka Prywatności; max-age=" + 60 * 60 * 24 * 30;

    if (document.cookie.indexOf("Polityka Prywatności") !== -1) {
        cookieBox.classList.add("hidden");
    }
};

const checkCookie = () => {
    if (document.cookie.indexOf("Polityka Prywatności") !== -1) {
        cookieBox.classList.add("hidden");
    } else {
        cookieBox.classList.remove("hidden");
    }
};

checkCookie();

acceptBtn.addEventListener("click", () => {
    addCookie();
    checkCookie();
});