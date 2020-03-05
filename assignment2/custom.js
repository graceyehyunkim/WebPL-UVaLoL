//Alerts user when login information is invalid
function validateInfo() {
    if (document.getElementById("loginID").value === '') {
        alert('Please enter valid ID!');
    } else if (document.getElementById("loginPassword").value === '') {
        alert('Please enter valid Password!');
    } else {
        alert('Logged In');
    }
}

document.getElementById("discord").addEventListener("click", function() {
    confirm('You are about to leave the page. Continue?')
})