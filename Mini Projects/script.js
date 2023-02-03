function changeColor() {
    var heart = document.querySelector(".fa-heart");
    if (heart.style.color === "rgb(255,66,66)") {
        heart.style.color = "rgb(65, 65, 245)";
    } else {
        heart.style.color = "rgb(255,66,66)";
    }
}