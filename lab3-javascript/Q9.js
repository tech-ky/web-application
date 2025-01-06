document.getElementById("Send").addEventListener("click", validateInputs);

function validateInputs() {
    var name = document.forms["SurveyForm"]["Name"];
    var email = document.forms["SurveyForm"]["Email"];
    var age = document.forms["SurveyForm"]["Age"];
    var course = document.forms["SurveyForm"]["Course"];

    if ((name.value).trim() === "") {
        window.alert("Pls enter your name");
        name.focus();
        return false;
    } // end of name check

    if ((email.value).trim() === "") {
        window.alert("Pls enter your email");
        email.focus();
        return false;
    } else {
        var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!regex.test(email.value)) {
            window.alert("Invalid email");
            email.focus();
            return false;
        }
    } // end of email check

    if ((age.value).trim() === "") {
        window.alert("Pls enter your age");
        age.focus();
        return false;
    } else {
        if (isNaN(age.value)) {
            window.alert("Age is not a number");
            age.focus();
            return false;
        }
    } // end of age check

    if (course.selectedIndex < 1) {
        window.alert("Please select a course");
        course.focus();
        return false;
    } // end of course check

    // when everything is fine
    var msg = (name.value).trim() + "," +
            (email.value).trim() + "," +
            (age.value).trim() + "," +
            course[course.selectedIndex].text;
    window.alert(msg);
    return true;
}
