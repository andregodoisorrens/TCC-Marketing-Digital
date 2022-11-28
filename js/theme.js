// localStorage.setItem('theme', 'dark'); 
// localStorage.getItem('theme'); 

const toggle = document.getElementById("toggle");
const refresh = document.getElementById("refresh");
const theme = localStorage.getItem('theme');
// const theme = window.localStorage.getItem("theme");

/* verifica se o tema armazenado no localStorage é escuro
se sim aplica o tema escuro ao body */
if (theme === "dark") document.body.classList.add("dark");

// event listener para quando o botão de alterar o tema for clicado
toggle.addEventListener("change", () => {
  document.body.classList.toggle("dark");
  if (theme === "dark") {
    window.localStorage.setItem("theme", "light");
  } else window.localStorage.setItem("theme", "dark");
});


if( theme ) {
  setTheme(theme)
}

// refresh.addEventListener("click", () => {
//   window.location.reload();
// });