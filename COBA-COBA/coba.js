document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("registrationForm");

    form.addEventListener("submit", function(event) {
        let valid = true;
        const namaInput = document.getElementById("nama");
        const emailInput = document.getElementById("email");
        
        if (namaInput.value.trim() === "") {
            valid = false;
            alert("Nama harus diisi!");
            namaInput.focus();
        } else if (emailInput.value.trim() === "") {
            valid = false;
            alert("Email harus diisi!");
            emailInput.focus();
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});
