const text = document.querySelector(".second-text");
        const textLoad = () => {
            setTimeout(() => {
                text.textContent = "3D Designer";
            }, 0);
            setTimeout(() => {
                text.textContent = "UI/UX Designer";
            }, 4000);
            setTimeout(() => {
                text.textContent = "Graphic Designer";
            }, 8000); //1s = 1000 milliseconds
        }
        textLoad();
        setInterval(textLoad, 12000);