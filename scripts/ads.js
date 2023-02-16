const popupOverlay = document.querySelector(".popup-overlay");
        const skipButton = document.querySelector(".popup-container .skip-button");
        let remainTime = 100;
        let allowSkip = false;
        let popupTimer;


        const showAd = () => {
            popupOverlay.classList.add("active");
            popupTimer = setInterval(() => {
                console.log(remainTime);
                skipButton.innerHTML = "Skip in " + remainTime + "s";
                remainTime--;
                if(remainTime < 0)
                {
                    allowSkip = true;
                    skipButton.innerHTML = "Skip";
                    clearInterval(popupTimer);
                }
            }, 1000);
        }

        const skipAd = () => {
            popupOverlay.classList.remove("active");
        }

        skipButton.addEventListener("click", () => {
            if (allowSkip)
            {
                skipAd();
            }
        });


        
        const startTimer = () => {
            showAd();
            window.removeEventListener("click", startTimer);
        };
        setTimeout("startTimer()", 2000);