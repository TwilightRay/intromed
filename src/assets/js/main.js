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

function openFormAdd() {
  document.getElementById("add").style.display = "block"
}

function closeFormAdd() {
  document.getElementById("add").style.display = "none"
}
