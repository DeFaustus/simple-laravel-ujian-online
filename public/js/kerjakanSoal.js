const idSoal = document.querySelector("#id_soal").value;
getDaftarSoal();
function getDaftarSoal() {
    fetch(`/dashboard/getdaftarsoal/${idSoal}`, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
        },
    })
        .then((res) => res.json())
        .then((res) => {
            tampilDataSoal(res);
        });
}
function tampilDataSoal(res) {
    let data = "";
    const daftarSoal = document.querySelector("#daftar-soal");
    res.data.map((item) => {
        data += item;
        daftarSoal.innerHTML = data;
    });
}
function check(value, iDdataSoal) {
    const body = document.getElementsByTagName("body")[0];
    const token = document.head.querySelector(
        "[name=csrf-token][content]"
    ).content;
    const data = {
        iDdataSoal: iDdataSoal,
        iDsoal: idSoal,
        value: value,
    };
    body.classList.add("pe-none");
    fetch("/dashboard/jawab", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
            "X-CSRF-TOKEN": token,
        },
        body: JSON.stringify(data),
    })
        .then((res) => res.json())
        .then((res) => {
            body.classList.remove("pe-none");
            getDaftarSoal();
        })
        .catch((e) => console.error(e));
}
