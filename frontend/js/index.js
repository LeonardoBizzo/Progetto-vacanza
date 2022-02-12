var res, tipo = null;
var ids = ["nominativo", "data", "ammontare", "tipo"];
var req = new XMLHttpRequest();

// setta il tipo di transazione tra quelle possibili nel menu dropdown
function setTipo(btn) {
    tipo = btn.innerHTML;
    document.getElementById("dropdownTipo").innerText = tipo;
}

// crea un elemento XML con i valori inseriti nelle inputbox e lo aggiunge alla xml response
function invia() {
    let xmlElement = document.createElement("spesa");

    let nome = document.createElement("nominativo");
    nome.innerText = document.getElementById("nominativo").value;
    
    let data = document.createElement("data");
    data.innerText = document.getElementById("data").value;

    let tipologia = document.createElement("tipo");
    if (tipo == null){
        alert("Selezionare una tipologia");
        return;
    }
    tipologia.innerText = tipo;

    // se la tipologia di transazione è bonifico è positivo se è una spesa allora è negativo
    let ammontare = document.createElement("ammontare");
    if (tipo == "Bonifico") {
        ammontare.innerText = "+" +  document.getElementById("ammontare").value;
    }
    else {
        ammontare.innerText = "-" +  document.getElementById("ammontare").value;
    }

    xmlElement.appendChild(nome);
    xmlElement.appendChild(data);
    xmlElement.appendChild(ammontare);
    xmlElement.appendChild(tipologia);

    res.getElementsByTagName("conto")[0].appendChild(xmlElement);
}

// richiede il file xml e mostra i dati nella pagina HTML
function getXMLData() {
    let tableBody = document.getElementById("tableBody");
    let tableRow, tableChild, conto;

    req.onreadystatechange = function () {
        if (req.status == 200 && req.readyState == 4) {
            res = req.responseXML;
            conto = res.getElementsByTagName("spesa");

            for (let i = 0; i < conto.length; i++) {
                tableRow = document.createElement("tr");

                for (let j = 0; j < ids.length; j++) {
                    tableChild = document.createElement("td");
                    tableChild.innerText = conto[i].getElementsByTagName(ids[j])[0].textContent;

                    tableRow.appendChild(tableChild);
                    tableBody.appendChild(tableRow);
                }
            }
        }
    }

    req.open("get", "./assets/file/data.xml", true);
    req.send();
}