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

function   {
  let search = document.getElementById("search");

  if (search.value == "Консультация специалистов") {
    document.location.href = 'pages/consultation.php';
  } else if (search.value == "Медосмотр") {
    document.location.href = 'pages/bodycheck.php';
  } else if (search.value == "Диагностика") {
    document.location.href = 'pages/diagnostics.php';
  } else if (search.value == "Лечение") {
    document.location.href = 'pages/Treatment.php';
  } else if (search.value == "Хирургия") {
    document.location.href = 'pages/surgery.php';
  } else if (search.value == "Реабилитация") {
    document.location.href = 'pages/rehabilitation.php';
  } else {
    alert('Ничего не найдено');
  }
}
