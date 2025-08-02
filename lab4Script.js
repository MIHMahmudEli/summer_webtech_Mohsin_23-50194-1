// counter
let count = 0;
let incrementButton = document.getElementById("incrementButton");
let decrementButton = document.getElementById("decrementButon");

function changeCount(value) {
    count += value;
    document.getElementById("count").innerText = count;
}

incrementButton.addEventListener("click", function() {
    changeCount(1);
});

decrementButton.addEventListener("click", function() {
    changeCount(-1);
})


// calculateBMI
let weightInput = document.getElementById("weight");
let heightInput = document.getElementById("height");

function calculateBMI() {
    let weight = parseFloat(weightInput.value);
    let height = parseFloat(heightInput.value);
    
    if (isNaN(weight) || isNaN(height) || height <= 0) {
        alert("Please enter valid weight and height.");
        return;
    }
    
    let bmi = weight / (height * height);
    document.getElementById("bmiResult").innerText = "Your BMI is: " + bmi.toFixed(2);
}

let calculateButton = document.getElementById("Calculate");
calculateButton.addEventListener("click", calculateBMI);

//ColorChange
let colorBox = document.getElementById("colorBox");
let colorInput = document.getElementById("colorPicker");

function changeColor() {
    let selectedColor = colorInput.value;
    colorBox.style.backgroundColor = selectedColor;
}

let changeColorButton = document.getElementById("changeColorButton");
changeColorButton.addEventListener("click", changeColor);

// Form Validation
let passwordInput = document.getElementById("password");
let confirmPasswordInput = document.getElementById("confirmPassword");

function validateForm() {
    let password = passwordInput.value;
    let confirmPassword = confirmPasswordInput.value;
    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }
    else if (password.length < 6) {
        alert("Password must be at least 6 characters long!");
        return false;
    }
    // Complex password logic:
    // At least one uppercase, one lowercase, one digit, one special character
    let upperCase = /[A-Z]/;
    let lowerCase = /[a-z]/;
    let digit = /[0-9]/;
    let specialChar = /[!@#$%^&*(),.?":{}|<>]/;
    if (
        !upperCase.test(password) ||
        !lowerCase.test(password) ||
        !digit.test(password) ||
        !specialChar.test(password)
    ) {
        alert("Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.");
        return false;
    }

    alert("Form submitted successfully!");
}

let submittedButton = document.getElementById("submitForm");
submittedButton.addEventListener("click", function(event) {
    event.preventDefault(); // Prevent form submission for validation
    validateForm();
});