function check(value, iDdataSoal) {
    let idSoal = document.querySelector("#id_soal").value;
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
        })
        .catch((e) => console.error(e));
}
