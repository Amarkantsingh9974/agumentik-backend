document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("myForm");
  
  form.addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent the default form submission

      // Perform any processing here (e.g., validation, sending data to the server)

      // Redirect to dashboard.php
      window.location.href = "dashboard.php";
  });
});
