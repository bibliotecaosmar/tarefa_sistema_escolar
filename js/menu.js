const paginaAtual = () => ( document.title.substring(18) )
const listaDeClassesDe = (elemento) => ( Array.from(document.getElementById(elemento).classList) )
const insereClasse = (classe, elemento) => ( document.getElementById(elemento).classList.add(classe) )
const removeClasse = (classe, elemento) => ( document.getElementById(elemento).classList.remove(classe) )

const atualizaPagina = () => {
    if (paginaAtual() !== "Home" && listaDeClassesDe("Home").includes("active")) {
        removeClasse("active", "Home")
    }
    if (paginaAtual() !== "Turma" && listaDeClassesDe("Turma").includes("active")) {
        removeClasse("active", "Turma")
    }
    insereClasse("active", paginaAtual())    
}

atualizaPagina()
