

  function sendMail() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const birth = document.getElementById("birth").value;
    const start = document.getElementById("start").value;
    const phone = document.getElementById("phone").value;
    const message = document.getElementById("message").value;

    const subject = encodeURIComponent("New Form Submission from " + name);
    const body = encodeURIComponent(
      `Name: ${name}\nEmail: ${email}\nDate of Birth: ${birth}\nStart Date: ${start}\nPhone: ${phone}\nMessage:\n${message}`
    );

    const mailtoLink = `mailto:thennakoondilanga@gmail.com.com?subject=${subject}&body=${body}`;

    window.location.href = mailtoLink;
    return false; // prevent form submission
  }