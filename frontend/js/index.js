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
    let descrizione = document.getElementById("descrizione").value;
    let data = document.getElementById("data").value;
    let ammontare;

    if (tipo == null) {
        alert("Selezionare una tipologia");
        return;
    }

    // se la tipologia di transazione è bonifico è positivo se è una spesa allora è negativo
    if (tipo == "Bonifico") {
        ammontare = 1 * document.getElementById("ammontare").value;
    } else {
        ammontare = -1 * document.getElementById("ammontare").value;
    }

    req.open("POST", "/ProgettoVacanza/backend/bankHandler.php", true);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText); // echo from php
        }
    };
    req.send(`descrizione=${descrizione}&data=${data}&ammontare=${ammontare}&tipo=${tipo}`);
}

// richiede il file xml e mostra i dati nella pagina HTML
function getXMLData() {
}
