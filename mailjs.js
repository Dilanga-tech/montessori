function sendMail() {
    var params = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        birth: document.getElementById("birth").value,
        start: document.getElementById("start").value,
        phone: document.getElementById("phone").value,
        message: document.getElementById("message").value,
    };

    const serviceID = "service_rig7ycl";
    const tempateID = "template_tt45rfs";
    
    
    emailjs.send(serviceID,tempateID,params)
    .then(
        res =>{
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("birth").value = "";
            document.getElementById("start").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("message").value = "";
            console.log(res);
            alert("Your Message sent successfully");
        }
    ).catch((err=>console.log(err)));
}
