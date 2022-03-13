function validateForm() {
  let x = document.forms["myForm"]["email"].value;
  let y = document.forms["myForm"]["password"].value;
  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  console.log(emailPattern.test(x));
  if (x == "" && y=="") {
    alert("Email and password must be filled out");
    return false;
  }
  else if (x==""){
    alert("Email must be filled out");
    return false;
  }
  else if(y==""){
    alert("Password must be filled out")
    return false;
  }
  else if(y.length<8){
    alert("Password length should be more than 8.")
  }
  else if(emailPattern.test(x)!= true){
    alert("Enter a valid type of email.")
    return false
  }
}
