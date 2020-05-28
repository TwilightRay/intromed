console.log("hello, world.")
function openFormSignIn() {
  document.getElementById("signIn").style.display = "block"
}

function closeFormSignIn() {
  document.getElementById("signIn").style.display = "none"
}

function openFormSignUp() {
  closeFormSignIn()
  document.getElementById("signUp").style.display = "block"
}

function closeFormSignUp() {
  document.getElementById("signUp").style.display = "none"
}
