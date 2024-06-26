// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()



const $inputName = document.getElementById("test-input");

$inputName.addEventListener("keypress", (event) => {
  const value = event.which;
  if (value >= 1072 && value <= 1103) {
    console.log(value);
  } else {
    event.preventDefault();
  }
});

