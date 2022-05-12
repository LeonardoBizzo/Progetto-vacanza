var res, tipo = null;
var ids = ["nominativo", "data", "ammontare", "tipo"];
var req = new XMLHttpRequest();

function setTipo(btn) {
    tipo = btn.innerHTML;
    document.getElementById("dropdownTipo").innerText = tipo;
}

function invia() {
    let descrizione = document.getElementById("descrizione").value;
    let data = document.getElementById("data").value;
    let ammontare;

    if (tipo == null) {
        alert("Selezionare una tipologia");
        return;
    }

    if (tipo == "Bonifico") {
        ammontare = 1 * document.getElementById("ammontare").value;
    } else {
        ammontare = -1 * document.getElementById("ammontare").value;
    }

    req.open("POST", "/vacanza/backend/bankHandler.php", true);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            window.location.reload(true);
        }
    };
    req.send(`descrizione=${descrizione}&data=${data}&ammontare=${ammontare}&tipo=${tipo}`);
}
