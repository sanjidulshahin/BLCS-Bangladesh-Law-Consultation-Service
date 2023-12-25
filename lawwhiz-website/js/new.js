document.addEventListener("DOMContentLoaded", function() {
    const userTypeSelect = document.getElementById("user-type");
    const clientForm = document.getElementById("client-form");
    const lawyerForm = document.getElementById("lawyer-form");
  
    userTypeSelect.addEventListener("change", function() {
      if (userTypeSelect.value === "client") {
        clientForm.classList.remove("hidden");
        lawyerForm.classList.add("hidden");
      } else if (userTypeSelect.value === "lawyer") {
        clientForm.classList.add("hidden");
        lawyerForm.classList.remove("hidden");
      }
    });
  });
  