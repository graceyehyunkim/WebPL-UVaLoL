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

/* Sets focus on "name" field on form */
function setFocus() {
    signupform.getElementById("namefield").focus();
}