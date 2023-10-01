class Formulaire{
    
    constructor(formId) {
        this.form = document.getElementById(formId);
        this.form.addEventListener('submit', this.submitForm.bind(this));
      }
    
      submitForm(event) {
        event.preventDefault(); // Prevent the form from submitting normally
    
        const formData = new FormData(this.form); // Create form data object
    
        // Send the form data to the server
        fetch('process_form.php', {
          method: 'POST',
          body: formData
        })
          .then(response => {
            if (response.ok) {
              alert('Form submitted successfully!');
              // TODO: Redirect or perform any other actions as needed
            } else {
              throw new Error('Error submitting the form. Please try again.');
            }
          })
          .catch(error => {
            alert('An error occurred. Please try again later.');
            console.error(error);
          });
      }
}