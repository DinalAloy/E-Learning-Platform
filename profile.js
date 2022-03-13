function Isvalid(){
  let x = document.forms["profile_form"]["name"].value;
  let y = document.forms["profile_form"]["id"].value;
  let z = document.forms["profile_form"]["number"].value;
  const numberPattern = /^[7-9][0-9]{9}$/;
  console.log(numberPattern.test(x));
  if(numberPattern.test(x)!=true){
    try{
    alert("Enter a valid number");
  }
  catch(err){
    alert(err);
  }
    document.getElementByClassName("field").style.border = "3px solid #FF0000";
    return false;
  }
