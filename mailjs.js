





function sendMail(event) {
    // Prevent default form submission
    event.preventDefault();

    // Collect form input data
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var birth = document.getElementById("birth").value;
    var start = document.getElementById("start").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value;

    // Basic validation
    if (!name || !email || !phone || !message) {
        Swal.fire({
            title: 'Error!',
            text: 'Please fill in all required fields.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        return; // Stop the function if fields are missing
    }

    // If email is not valid
    if (!validateEmail(email)) {
        Swal.fire({
            title: 'Error!',
            text: 'Please enter a valid email address.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        return; // Stop the function if the email is invalid
    }

    // Collect form data in an object
    var params = {
        name: name,
        email: email,
        birth: birth,
        start: start,
        phone: phone,
        message: message,
    };

    // Replace these with your actual EmailJS Service ID and Template ID
    const serviceID = "service_rig7ycl";
    const tempateID = "template_tt45rfs";

    // Send the email using EmailJS
    emailjs.send(serviceID,tempateID,params)
        .then(function(response) {
            // On success, clear the form
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("birth").value = "";
            document.getElementById("start").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("message").value = "";

            // Show success message with SweetAlert2
            Swal.fire({
                title: 'Success!',
                text: 'Your message has been sent successfully.',
                icon: 'success',
                confirmButtonText: 'OK'
            });

            console.log(response);
        })
        .catch(function(error) {
            // Log the error to the console
            console.log(error);

            // Show error message with SweetAlert2
            Swal.fire({
                title: 'Error!',
                text: 'Something went wrong. Please try again later.',
                icon: 'error',
                confirmButtonText: 'Try Again'
            });
        });
}

// Helper function to validate the email format
function validateEmail(email) {
    const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return re.test(String(email).toLowerCase());
}




