$(document).ready(function () {
    $("#registration-form").submit(function (e) {
        const fname = $("#fname").val();
        const lname = $("#lname").val();
        const email = $("#email").val();
        const phone = $("#phone").val();

        if (!fname || !lname || !email || !phone) {
            alert("All fields are required!");
            e.preventDefault();
        } else {
            alert("Form submitted successfully!");
        }
    });
});