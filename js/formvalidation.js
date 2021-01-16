function userForm() {

  //Variables declaration
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  const password2 = document.getElementById('password2').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const firstName = document.getElementById('firstName').value;
  const lastName = document.getElementById('lastName').value;
  const address = document.getElementById('address').value;
  const city = document.getElementById('city').value;
  const description = document.getElementById('description').value;
  const gender = document.querySelector('input[name="gender"]');
  const country = document.getElementsByName('country').value;
  const profile = document.querySelector("#profile");
  const cv = document.querySelector("#cv");
  const techSkills= document.querySelector('input[name="skills[]"]:checked');

  // Username validation
  if(username === ""){
    document.getElementById('errorusername').innerHTML = "** Please enter the Username";
    document.getElementById('username').className = "form-control border-danger";
    return false;
  } else if((username.length <= 3) || (username.length >= 10)){
    document.getElementById('errorusername').innerHTML = "** Username length must be between 3 and 10 Characters";
    document.getElementById('username').className = "form-control border-danger";
    return false;
  } else if(!isNaN(username)){
    document.getElementById('errorusername').innerHTML = "** Numbers only are not allowed as Username";
    document.getElementById('username').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('errorusername').innerHTML = "";
    document.getElementById('username').className = "form-control border-success";
  }

  // Password validation
  if(password === ""){
    document.getElementById('errorpassword').innerHTML = "** Please enter the Password";
    document.getElementById('password').className = "form-control border-danger";
    return false;
  } else if((password.length <= 8) || (password.length >= 20)){
    document.getElementById('errorpassword').innerHTML = "** Password length must be between 8 and 20 Characters";
    document.getElementById('password').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('errorpassword').innerHTML = "";
    document.getElementById('password').className = "form-control border-success";
  }

  // Confirm Password validation
  if(password2 === ""){
    document.getElementById('errorpassword2').innerHTML = "** Please confirm your Password";
    document.getElementById('password2').className = "form-control border-danger";
    return false;
  } else if(password !== password2){
    document.getElementById('errorpassword2').innerHTML = "** Passwords are not matching";
    document.getElementById('password2').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('errorpassword2').innerHTML = "";
    document.getElementById('password2').className = "form-control border-success";
  }

  // Email validation
  if(email === ""){
    document.getElementById('erroremail').innerHTML = "** Please enter your Email";
    document.getElementById('email').className = "form-control border-danger";
    return false;
  } else if(email.indexOf('@') <= 0){
    document.getElementById('erroremail').innerHTML = "** @ is in an Invalid Position";
    document.getElementById('email').className = "form-control border-danger";
    return false;
  } else if((email.charAt(email.length - 4) !== '.') && (email.charAt(email.length - 3) !== '.')){
    document.getElementById('erroremail').innerHTML = "** . is in an Invalid Position";
    document.getElementById('email').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('erroremail').innerHTML = "";
    document.getElementById('email').className = "form-control border-success";
  }

  // Phone Number validation
  if(phone === ""){
    document.getElementById('errorphone').innerHTML = "** Please enter your Phone Number";
    document.getElementById('phone').className = "form-control border-danger";
    return false;
  } else if(isNaN(phone)){
    document.getElementById('errorphone').innerHTML = "** only Numbers are allowed for Phone number";
    document.getElementById('phone').className = "form-control border-danger";
    return false;
  } else if(phone.length !== 10){
    document.getElementById('errorphone').innerHTML = "**Phone number must be 10 digits";
    document.getElementById('phone').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('errorphone').innerHTML = "";
    document.getElementById('phone').className = "form-control border-success";
  }

  // First Name validation
  if(firstName === ""){
    document.getElementById('errorfirstName').innerHTML = "** Please enter your First Name";
    document.getElementById('firstName').className = "form-control border-danger";
    return false;
  } else if((firstName.length <= 2) || (firstName.length >= 30)){
    document.getElementById('errorfirstName').innerHTML = "** First Name length must be between 2 and 30 Characters";
    document.getElementById('firstName').className = "form-control border-danger";
    return false;
  } else if(!isNaN(firstName)){
    document.getElementById('errorfirstName').innerHTML = "** Numbers only are not allowed as First Name";
    document.getElementById('firstName').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('errorfirstName').innerHTML = "";
    document.getElementById('firstName').className = "form-control border-success";
  }

  // Last Name validation
  if(lastName === ""){
    document.getElementById('errorlastName').innerHTML = "** Please enter your First Name";
    document.getElementById('lastName').className = "form-control border-danger";
    return false;
  } else if((lastName.length <= 2) || (lastName.length >= 30)){
    document.getElementById('errorlastName').innerHTML = "** Last Name length must be between 2 and 30 Characters";
    document.getElementById('lastName').className = "form-control border-danger";
    return false;
  } else if(!isNaN(lastName)){
    document.getElementById('errorlastName').innerHTML = "** Numbers only are not allowed as Last Name";
    document.getElementById('lastName').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('errorlastName').innerHTML = "";
    document.getElementById('lastName').className = "form-control border-success";
  }

  // Address validation
  if(address === ""){
    document.getElementById('erroraddress').innerHTML = "** Please enter your Address";
    document.getElementById('address').className = "form-control border-danger";
    return false;
  } else if((address.length <= 3) || (address.length >= 50)){
    document.getElementById('erroraddress').innerHTML = "** Address length must be between 3 and 50 Characters";
    document.getElementById('address').className = "form-control border-danger";
    return false;
  } else if(!isNaN(address)){
    document.getElementById('erroraddress').innerHTML = "** Numbers only are not allowed as an Address";
    document.getElementById('address').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('erroraddress').innerHTML = "";
    document.getElementById('address').className = "form-control border-success";
  }

  // City validation
  if(city === ""){
    document.getElementById('errorcity').innerHTML = "** Please enter your City name";
    document.getElementById('city').className = "form-control border-danger";
    return false;
  } else if((city.length <= 2) || (city.length >= 50)){
    document.getElementById('errorcity').innerHTML = "** City length must be between 2 and 50 Characters";
    document.getElementById('city').className = "form-control border-danger";
    return false;
  } else if(!isNaN(city)){
    document.getElementById('errorcity').innerHTML = "** Numbers only are not allowed as a City";
    document.getElementById('city').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('errorcity').innerHTML = "";
    document.getElementById('city').className = "form-control border-success";
  }

  // Description validation
  if(description === ""){
    document.getElementById('errordescription').innerHTML = "** Please write a short description";
    document.getElementById('description').className = "form-control border-danger";
    return false;
  } else if((description.length <= 10) || (description.length >= 5000)){
    document.getElementById('errordescription').innerHTML = "** Description length must be between 10 and 5000 Characters";
    document.getElementById('description').className = "form-control border-danger";
    return false;
  } else if(!isNaN(description)){
    document.getElementById('errordescription').innerHTML = "** Numbers only are not allowed as a Description";
    document.getElementById('description').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('errordescription').innerHTML = "";
    document.getElementById('description').className = "form-control border-success";
  }

  // Gender validation
  if (!(gender[0].checked || gender[1].checked)) {
    document.getElementById('errorgender').innerHTML = "** Please Select Your Gender";
    return false;
  } else{
    document.getElementById('errorgender').innerHTML = "";
  }

  // Country validation
  if (country === "") {
    document.getElementById('errorcountry').innerHTML = "** Please Select Your Country";
    return false;
  } else{
    document.getElementById('errorcountry').innerHTML = "";
  }

  // Profile picture validation
  if ( /\.(jpe?g|png|gif)$/i.test(profile.files[0].name) === false ) {
    document.getElementById('errorprofile').innerHTML = "** Please Upload a valid .jpg, .png or .gif image";
    return false;
  } else{
    document.getElementById('errorprofile').innerHTML = "";
  }

  // CV validation
  if ( /\.(docx|pdf)$/i.test(cv.files[0].name) === false ) {
    document.getElementById('errorcv').innerHTML = "** Please Upload a valid .pdf Document";
    return false;
  } else{
    document.getElementById('errorcv').innerHTML = "";
  }

  // Tech Skills validation
  if (!techSkills) {
    document.getElementById('errorskills').innerHTML = "** Please Select minimun 1 Skill";
    return false;
  } else{
    document.getElementById('errorskills').innerHTML = "";
  }

}

function productForm() {

  //Variables declaration
  // const productID = document.getElementById('productID').value;
  const productName = document.getElementById('productName').value;
  const productPrice = document.getElementById('productPrice').value;
  const productDetails = document.getElementById('productDetails').innerHTML;
  const productSize = document.getElementById('productSize').value;
  const productImage1 = document.querySelector('#productImage1');
  const productImage2 = document.querySelector('#productImage2');
  const productImage3 = document.querySelector('#productImage3');
  const productImage4 = document.querySelector('#productImage4');
  const productImage5 = document.querySelector('#productImage5');
  const categoryName = document.getElementById('categoryName').value;
  const productQuantity = document.getElementById('productQuantity').value;
  const productPublished = document.querySelector('productPublished');
  // const productAddedDate = document.getElementById('productAddedDate').value;
  // const productEditedDate = document.getElementById('productEditedDate').value;

  // productName validation
  if(productName === ""){
    document.getElementById('productName1').innerHTML = "** Product Name cannot be Blank";
    document.getElementById('productName').className = "form-control border-danger";
    return false;
  } else if(!isNaN(productName)){
    document.getElementById('productName1').innerHTML = "** Numbers only are not valid for productName";
    document.getElementById('productName').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('productName1').innerHTML = "";
    document.getElementById('productName').className = "form-control border-success";
  }

  // productPrice validation
  if(productPrice === ""){
    document.getElementById('productPrice1').innerHTML = "** Product Name cannot be Blank";
    document.getElementById('productPrice').className = "form-control border-danger";
    return false;
  } else if(isNaN(productPrice)){
    document.getElementById('productPrice1').innerHTML = "** Only Numbers are Valid";
    document.getElementById('productPrice').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('productPrice1').innerHTML = "";
    document.getElementById('productPrice').className = "form-control border-success";
  }

  // productSize validation
  if(productSize === ""){
    document.getElementById('productSize1').innerHTML = "** Product Size cannot be Blank";
    document.getElementById('productSize').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('productSize1').innerHTML = "";
    document.getElementById('productSize').className = "form-control border-success";
  }

  // productQuantity validation
  if(productQuantity === ""){
    document.getElementById('productQuantity1').innerHTML = "** Product Quantity cannot be Blank";
    document.getElementById('productQuantity').className = "form-control border-danger";
    return false;
  } else if(isNaN(productQuantity)){
    document.getElementById('productQuantity1').innerHTML = "** Only Numbers are Valid";
    document.getElementById('productQuantity').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('productQuantity1').innerHTML = "";
    document.getElementById('productQuantity').className = "form-control border-success";
  }

  // productDetails validation
  if(productDetails === ""){
    document.getElementById('productDetails1').innerHTML = "** Product Details cannot be Blank";
    document.getElementById('productDetails').className = "form-control border-danger";
    return false;
  } else if((productDetails.length <= 10) || (productDetails.length >= 5000)){
    document.getElementById('productDetails1').innerHTML = "** Product Details length must be between 10 and 5000 Characters";
    document.getElementById('productDetails').className = "form-control border-danger";
    return false;
  } else if(!isNaN(productDetails)){
    document.getElementById('productDetails1').innerHTML = "** Numbers only are not valid as Product Details";
    document.getElementById('productDetails').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('productDetails1').innerHTML = "";
    document.getElementById('productDetails').className = "form-control border-success";
  }

  // categoryName validation
  if(categoryName === ""){
    document.getElementById('categoryName1').innerHTML = "** Category Name cannot be Blank";
    document.getElementById('categoryName').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('categoryName1').innerHTML = "";
    document.getElementById('categoryName').className = "form-control border-success";
  }

  // productPublished validation
  if(productPublished === ""){
    document.getElementById('productPublished1').innerHTML = "** Product Published field cannot be Blank";
    document.getElementById('productDetails').className = "form-control border-danger";
    return false;
  } else{
    document.getElementById('productPublished1').innerHTML = "";
    document.getElementById('productPublished').className = "form-control border-success";
  }

}