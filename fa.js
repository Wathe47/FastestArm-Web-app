function validateForm() {
  var faculty = document.getElementById("faculty1").value;
  var phone = document.getElementById("phone1").value;
  var male = document.getElementById("male");
  var female = document.getElementById("female");
  var fullname = document.getElementById("name1").value;
  var speed = document.getElementById("speed1").value;
  var batch = document.getElementById("batch1").value;

  var gender = male.checked ? male.value : female.value;

  var isValid = true;

  if (phone == "" || fullname == "" || speed == "") {
    alert("There are empty fields, please fill them ");
    isValid = false;
    return false;
  }

  if (!checkName(fullname)) {
    alert("Enter only letters for the Name ");
    isValid = false;
    return false;
  }

  if (dropdownCheck(faculty) == false) {
    alert("Please select the faculty ");
    isValid = false;
    return false;
  }

  if (dropdownCheck(batch) == false) {
    alert("Please select the batch ");
    isValid = false;
    return false;
  }

  if (male.checked == false && female.checked == false) {
    alert("Select a gender ");
    isValid = false;
    return false;
  }

  if (isValid) {
    console.log(fullname);
    console.log(faculty);
    console.log(batch);
    console.log(gender);
    console.log(phone);
    console.log(speed);
    alert("Player registration successful!");
  } else {
    alert("Player registration unsuccessful!");
  }
}

function dropdownCheck(item) {
  if (item == "Default") {
    return false;
  } else return true;
}

function checkName(str) {
  return /^[A-Za-z\s]*$/.test(str);
}

function default1(e) {
  e.preventDefault;
}
