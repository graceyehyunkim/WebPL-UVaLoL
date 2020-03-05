//Alerts user when login information is invalid
const validateInfo = () => {
    if (document.getElementById("loginID").value === '') {
        alert('Please enter valid ID!');
    } else if (document.getElementById("loginPassword").value === '') {
        alert('Please enter valid Password!');
    } else {
        alert('Logged In');
    }
}
//confirmation for leaving the page for discord link
document.getElementById("discord").addEventListener("click", function() {
    if(confirm('You are about to leave the page. Continue?') == true) {
        window.location.href = "https://discord.gg/erFKKhc"
    }
});