const formata_data = (ano) => ( ano.substring(0, 4) + "." + ano.substring(4, 5) )

const formata_todas_as_datas = () => {
  let count = 0
  while (document.getElementById("dataPeriodo" + count).innerHTML !== 'undefined') {
    data = document.getElementById("dataPeriodo" + count).innerHTML
    document.getElementById("dataPeriodo" + count).innerHTML = formata_data(data) 
    count++
  }
}

formata_todas_as_datas()
