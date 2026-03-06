import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {

    const loginForm = document.getElementById("loginForm");

    if (loginForm) {

        loginForm.addEventListener("submit", function (e) {

            e.preventDefault();

            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;

            if (email === "admin@gmail.com" && password === "1234") {

                Swal.fire({
                    icon: 'success',
                    title: 'Login Successful',
                    text: 'Welcome to the system!',
                    confirmButtonColor: '#3b82f6'
                }).then(() => {

                    window.location.href = "/home";

                });

            } else {

                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed',
                    text: 'Invalid email or password',
                    confirmButtonColor: '#ef4444'
                });

            }

        });

    }

});
