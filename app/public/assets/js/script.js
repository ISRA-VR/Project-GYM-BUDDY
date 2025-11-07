const toggles = document.querySelectorAll(".toggle-password");

toggles.forEach(toggle => {
    toggle.addEventListener("click", () => {
        const input = document.getElementById(toggle.dataset.target);

        const type = input.getAttribute("type") === "password" ? "text" : "password";
        input.setAttribute("type", type);

        toggle.classList.toggle("bi-eye");
        toggle.classList.toggle("bi-eye-slash");
    });
});