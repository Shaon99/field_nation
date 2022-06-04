let containerHeight = document.getElementById("container").offsetHeight;
let blue_square = document.getElementById("blue_square");
let direction = 0;

const animate = () => {

    let Left = blue_square.offsetLeft;
    let Top = blue_square.offsetTop;

    if ((Left + 100) >= screen.width || (Top + 100) >= containerHeight) {
        direction = 1;
    } else if (blue_square.offsetLeft < 0) {
        direction = 0;
    }

    if (direction === 0) {
        Left += 10;
        Top += 10;
    } else {
        Left -= 10;
        Top -= 10;
    }

    blue_square.style.left = Left + "px";
    blue_square.style.top = Top + "px";

    setTimeout(() => {
        animate()
    }, 1000);
}

setTimeout(
    () => {
        animate();
    }, 1000); 