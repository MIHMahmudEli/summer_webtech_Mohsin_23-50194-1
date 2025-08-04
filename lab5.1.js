let fullName = document.getElementById("name");
let email = document.getElementById("email");
let age = document.getElementById("age");
let course = document.getElementById("course");

function validateForm() {
    if (fullName.value === "") {
        alert("Name must be filled out");
        return false;
    }
    else if (email.value === "") {
        alert("Email must be filled out");
        return false;
    }
    else if (age.value === "") {
        alert("Age must be filled out");
        return false;
    }
    else if (course.value === "") {
        alert("Course must be selected");
        return false;
    }
    else if (age.value < 0 || age.value > 120) {
        alert("Please enter a valid age between 0 and 120");
        return false;
    }
    else if (!email.value.includes("@")) {
        alert("Please enter a valid email address");
        return false;
    }
    else if (fullName.value.length < 3) {
        alert("Name must be at least 3 characters long");
        return false;
    }
    else if (fullName.value.length > 50) {
        alert("Name must not exceed 50 characters");
        return false;
    }
    else if(fullName.value.match(/[^a-zA-Z\s]/)) {
        alert("Name must contain only letters and spaces");
        return false;
    }

    alert("Form submitted successfully!");
    return true;

}

document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault();
    if (validateForm()) {
    }
});