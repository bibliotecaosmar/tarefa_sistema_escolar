const currentPage = () => {
  if (document.title = "Home") {
    document.getElementById("Home").classList.add('active')
    document.getElementById("Turma").classList.remove('active')
  } 
  if (document.title = "Turma") {
    document.getElementById("Home").classList.remove('active')
    document.getElementById("Turma").classList.add('active')
  }
}

// Default functions
currentPage()
