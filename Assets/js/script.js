// DATE IN FORM START
function todayDate() {
    const mainDate = new Date();
    const fullMonth = (mainDate.getMonth()+1 < 10)? "0"+(mainDate.getMonth()+1) : mainDate.getMonth()+1;
    const fullDate = (mainDate.getDate() < 10)? "0"+(mainDate.getDate()) : mainDate.getDate();
    document.querySelector("input[type='date']").value = mainDate.getFullYear() + "-" + fullMonth + "-" + fullDate;
}
// DATE IN FORM END

// SELECT TRANSFER START
function toggleKas() {
    let from = document.querySelector("#transfer-from");
    let to = document.querySelector("#transfer-to");
    if (from.value == "1-10001") {
        to.querySelector("option[selected]").removeAttribute("selected");
        to.querySelector("option[value='1-10002']").setAttribute("selected", "");
    } else if (from.value == "1-10002") {
        to.querySelector("option[selected]").removeAttribute("selected");
        to.querySelector("option[value='1-10001']").setAttribute("selected", "");
    }
}
// SELECT TRANSFER START

// AUTO COUNT TOTAL START
function countTotal() {
    let kuantitas = document.querySelector("#kuantitas").value;
    let satuan = document.querySelector("#satuan").value;
    let total = document.querySelector("#total");
    total.innerHTML = "Rp"+(kuantitas*satuan);
}
// AUTO COUNT TOTAL END
