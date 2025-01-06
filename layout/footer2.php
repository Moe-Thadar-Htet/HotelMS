
<script src="../asset/js2/main.js"></script>
<script>
    let allroom = document.getElementById("all-room");
    let available = document.getElementById("available");
    let soldout = document.getElementById("sold-out");
    let booked = document.getElementById("booked");

    let buttons = [allroom, available, soldout, , booked];

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

    booked.addEventListener("click", () => {
        resetButtonStyles();
        booked.style.background = "#FFC007";
        booked.style.color = "#000000";
    });
</script>

<script>
    const today = new Date().toISOString().split('T')[0];

    const getTomorrow = () => {
        const tomorrowDate = new Date();
        tomorrowDate.setDate(tomorrowDate.getDate() + 1);
        return tomorrowDate.toISOString().split('T')[0];
    };

    const tomorrow = getTomorrow();

    document.getElementById('checkin').setAttribute('min', today); // Today for check-in
    document.getElementById('checkout').setAttribute('min', tomorrow); // Tomorrow for check-out

    const checkinField = document.getElementById('checkin');
    const checkoutField = document.getElementById('checkout');

    checkinField.addEventListener('change', function() {
        const checkinDate = checkinField.value;

        const newMinCheckoutDate = new Date(checkinDate);
        newMinCheckoutDate.setDate(newMinCheckoutDate.getDate() + 1);
        checkoutField.setAttribute('min', newMinCheckoutDate.toISOString().split('T')[0]);
    });
</script>
</body>

</html>