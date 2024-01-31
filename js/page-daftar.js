// Validasi
function validate() {
    var error = "";
    error = validateNamaDepan();
    error += validateNamaBelakang();
    error += validateEmail();
    error += validateNoTlpn();

    if (error == "") {
        window.location.replace("page-login.html");
        alert("Akun berhasil dibuat! Silakan login dengan akun kamu.");
    } else {
        alert(error);
    }
}

// Validasi nama depan 
function validateNamaDepan() {
    var namaDepan = document.getElementById("nama-depan").value;
    if (/[^a-zA-Z]/.test(nama-depan)) return "Nama Depan hanya boleh berisi huruf.\n";
    else return "";
}

//Validai nama belakang
function validateNamaBelakang(){
    var namaBelakang = document.getElementById("name-belakang").value;
    if (/[^a-zA-Z]/.test(nama-belakang)) return "Nama Depan hanya boleh berisi huruf.\n";
    else return "";
}

// Validasi email
function validateEmail() {
    var email = document.getElementById("email").value;
    var tes =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (tes.test(email)) return "";
    else return "Email yang kamu masukkan tidak valid\n";
}

//Validasi no tlpn
function validateNoTlpn{
    var noTlpn = document.getElementById("telp").value;
    var tesTlp = 
        /[62]/+(/[^a-zA-Z]/);

    if(tesTlpn.test(telp)) return "";
    else return "No Telepon yang kamu masukkan tidak valid\n"
}

//Validasi Password dan confirmPassword
function validateConfirmPassword(){
    var pass = document.getElementById("password").value;
    var confirm = document.getElementById("confirm-pass").value;
    if (confirm != pass)
        document.getElementById("pass-alert").innerHTML =
            "Password yang kamu masukkan tidak sama.";
    else document.getElementById("pass-alert").innerHTML = "";
}