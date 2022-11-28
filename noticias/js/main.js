/*--------------------------*/
/* Função para abrir o menu */
/*--------------------------*/
function abrir_menu() {
    document.getElementById("id_menu").style.width = "50vw";
}

function fechar() {
    document.getElementById("id_menu").style.width = "0";
}

function color() {
    document.getElementById("id_menu").style.color = "blue";
}

/*-----------------*/
/* Função do curso */
/*-----------------*/
var inputCursos = document.querySelector(".pesquisar input");
var cursos = document.querySelector(".cursos-ete-JS");

const filterTodo = (inputvalue, ArrayCursos, returMatched) =>
    ArrayCursos.filter((todo) => {
        const Matched = todo.textContent.toLowerCase().includes(inputvalue);
        return returMatched ? Matched : !Matched;
    });

const manipulate = (todos, classAdd, ClassHide) => {
    todos.forEach((todo) => {
        todo.classList.remove(ClassHide);
        todo.classList.add(classAdd);
    });
};

const hideCursos = (inputvalue, ArrayCursos) => {
    const hide = filterTodo(inputvalue, ArrayCursos, false);
    manipulate(hide, "hidden", "visible");
};

const visibleCursos = (inputvalue, ArrayCursos) => {
    const show = filterTodo(inputvalue, ArrayCursos, true);

    manipulate(show, "visible", "hidden");
};

inputCursos.addEventListener("input", (event) => {
    const inputvalue = event.target.value.trim().toLowerCase();
    const ArrayCursos = Array.from(cursos.children);

    hideCursos(inputvalue, ArrayCursos);

    visibleCursos(inputvalue, ArrayCursos);
});

/*--------------*/
/* abrir o curso */
/*--------------*/

// const Jsondata = JSON.stringify(dataCursos);
// const objdata = JSON.parse(Jsondata);

var escolher = document.querySelector(".escolherModalidade");
var fundoMod = document.querySelector(".fundo-mod");
var infos = document.querySelector(".cursos-infos");
var titleCursos = document.querySelector(".titleCursos");
var infoCursos = document.querySelector(".info-p");
var imgCursos = document.querySelector(".img-curso-p");
var trabalho = document.querySelector(".trabalhar");
var eixo = document.querySelector(".eixo-tec");
var coord = document.querySelector(".cord");
var matriz = document.querySelector(".matriz");
var plano = document.querySelector(".plano");
var requisitos = document.querySelector(".requisitos");

var AparecerCursos = function rodarCursos(id, mod) {
    titleCursos.textContent = dataCursos[id].modalidade[mod].titulo;
    infoCursos.textContent = dataCursos[id].modalidade[mod].que;
    imgCursos.innerHTML = "<img src='" + dataCursos[id].img + "'>";
    trabalho.textContent = dataCursos[id].modalidade[mod].trabalhar;
    eixo.textContent = dataCursos[id].modalidade[mod].eixo;

    for (
        var i = 0; i < dataCursos[id].modalidade[mod].Coordenadores.length; i++
    ) {
        var li = document.createElement("li");

        li.textContent = dataCursos[id].modalidade[mod].Coordenadores[i];

        coord.appendChild(li);
    }

    matriz.innerHTML =
        "<a href='" +
        dataCursos[id].modalidade[mod].matriz +
        "'target='_blank'> Matriz </a>";
    plano.innerHTML =
        "<a href='" +
        dataCursos[id].modalidade[mod].plano +
        "' target='_blank'> Planos </a>";
    requisitos.textContent = dataCursos[id].modalidade[mod].requisitos;
};

function modal(id, mod) {
    if (mod === 0) {
        mod = 0;
        id = id;
        AparecerCursos(id, mod);
        infos.style.display = "flex";
        escolher.style.display = "none";
        fundoMod.style.display = "none";
    } else if (mod === 1) {
        mod = 1;
        id = id;
        AparecerCursos(id, mod);
        infos.style.display = "flex";
        escolher.style.display = "none";
        fundoMod.style.display = "none";
    } else {
        mod = 2;
        id = id;
        AparecerCursos(id, mod);
        infos.style.display = "flex";
        escolher.style.display = "none";
        fundoMod.style.display = "none";
    }
}

function cursosDescricao(id) {
    escolher.style.display = "flex";
    fundoMod.style.display = "block";
    escolher.innerHTML =
        "<h1 onclick='fecharCurso()'> <a href='javascript:void(0)' class='fecharCurso'><i class='fa-solid fa-xmark'></i></a> </h1>";

    for (var j = 0; j < dataCursos[id].modalidades.length; j++) {
        var li = document.createElement("h1");

        li.innerHTML =
            "<button onclick='modal( " +
            id +
            ", " +
            j +
            ")'>" +
            dataCursos[id].modalidades[j] +
            "</button>";

        escolher.appendChild(li);
    }
}

var coordLimpar = document.querySelector(".cord");

function fecharCurso() {
    infos.style.display = "none";
    escolher.style.display = "none";
    fundoMod.style.display = "none";
    coordLimpar.innerHTML = "";
}

function voltarCurso() {
    infos.style.display = "none";
    fundoMod.style.display = "block";
    coordLimpar.innerHTML = "";
}

/*--------------------------*/
/* função saiba mais do FAQ */
/*--------------------------*/
let answers = document.querySelectorAll(".perguntas");
answers.forEach((event) => {
    event.addEventListener("click", () => {
        if (event.classList.contains("active")) {
            event.classList.remove("active");
        } else {
            event.classList.add("active");
        }
    });
});

/*---------------------------------------------*/
/* Função de mostrar/esconder do passe escolar */
/*---------------------------------------------*/
function passEscolar(num) {
    document.querySelector(".T-P").textContent = passe[0].empresas[num].title;
    document.querySelector(".Text-p").innerHTML = passe[0].empresas[num].texto1;
}

/*----------*/
/* Galeria */
/*---------*/
function galeria(gal) {
    var galeg = document.querySelector(".gallery-container");
    var titleG = document.querySelector(".titleGaleria h1");
    var galeriaDiv = document.querySelector('.galeria');

    galeriaDiv.style.display = "block";

    titleG.innerHTML = gallery[gal].evento + " - ETEC Jorge Street";

    for (var i = 0; i < gallery[gal].foto.length; i++) {
        var div = document.createElement("div");
        div.innerHTML =
            "<a href=img/" +
            gallery[gal].foto[i] +
            " target='_blank' class='gallery-items'><img src=./img/" +
            gallery[gal].foto[i] +
            "></a>";
        galeg.appendChild(div);
    }
}
function fecharGaleria(){
    var galeriaDiv = document.querySelector('.galeria');
    var galeg = document.querySelector(".gallery-container");
    var titleG = document.querySelector(".titleGaleria h1");

    galeriaDiv.style.display = "none";
    galeg.innerHTML = "";
    titleG.innerHTML = "";
}


