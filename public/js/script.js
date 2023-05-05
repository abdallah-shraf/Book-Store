let userBox = document.querySelector(".header .header-2 .user-box");

document.querySelector("#user-btn").onclick = () => {
  userBox.classList.toggle("active");
  navbar.classList.remove("active");
};

let navbar = document.querySelector(".header .header-2 .navbar");

document.querySelector("#menu-btn").onclick = () => {
  navbar.classList.toggle("active");
  userBox.classList.remove("active");
};

window.onscroll = () => {
  userBox.classList.remove("active");
  navbar.classList.remove("active");

  if (window.scrollY > 60) {
    document.querySelector(".header .header-2").classList.add("active");
  } else {
    document.querySelector(".header .header-2").classList.remove("active");
  }
};
//event email
const btn= document.getElementById("btn");
btn.addEventListener("click",sendMail);
//emailjs
function sendMail(){
    console.log("object");
    var paramas = {
        name: document.getElementById("name").value,
        email: document.getElementById("e,ail").value,
        message: document.getElementById("message").value,

    };

    const severID ="service_rg3owzo";
    const templateID= "template_w3mb44kk";
    emailjs
    .send(severID, templateID, paramas)
    .then((res) => {
        document.getElementById("name").value="";
        document.getElementById("email").value="";
        document.getElementById("message").value="";
        console.log(res);
        alert("Your message has been sended");
    })
    .catch((err) => console.log(err));
}

