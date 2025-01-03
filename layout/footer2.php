
<script>
        let allroom = document.getElementById("all-room");
        let available = document.getElementById("available");
        let soldout = document.getElementById("sold-out");
        let dailyincome = document.getElementById("daily-income");
        let booked = document.getElementById("booked");
    
        let buttons = [allroom, available, soldout, dailyincome, booked];
    
        function resetButtonStyles() {
            buttons.forEach(button => {
                button.style.background = "";
                button.style.color = "";
            });
        }
    
        allroom.addEventListener("click", () => {
            resetButtonStyles();
            allroom.style.background = "#10CAF0";
            allroom.style.color = "#000000";
        });
    
        available.addEventListener("click", () => {
            resetButtonStyles();
            available.style.background = "#198753";
            available.style.color = "#FFFFFF";
        });
    
        soldout.addEventListener("click", () => {
            resetButtonStyles();
            soldout.style.background = "#DC3444";
            soldout.style.color = "#FFFFFF";
        });
    
        dailyincome.addEventListener("click", () => {
            resetButtonStyles();
            dailyincome.style.background = "#0C6DFD";
            dailyincome.style.color = "#FFFFFF";
        });

        booked.addEventListener("click", () => {
            resetButtonStyles();
            booked.style.background = "#FFC007";
            booked.style.color = "#000000";
        });
    </script>
</body>
</html>