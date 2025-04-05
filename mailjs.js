function sendEmail() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const birth = document.getElementById("birth").value;
    const start = document.getElementById("start").value;
    const phone = document.getElementById("phone").value;
    const message = document.getElementById("message").value;
  
    const subject = encodeURIComponent("New Form Submission from " + name);
    const body = encodeURIComponent(
      "Name: " + name + "\n" +
      "Email: " + email + "\n" +
      "Date of Birth: " + birth + "\n" +
      "Start Date: " + start + "\n" +
      "Phone: " + phone + "\n\n" +
      "Message:\n" + message
    );
  
    // This will open the user's default email client
    window.location.href = `mailto:thennakoondilanga@gmail.com.com?subject=${subject}&body=${body}`;
  }