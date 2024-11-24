const Nilai_A = 100;
const Nilai_B = 90;
const Nilai_C = 85;
const Nilai_D = 75;

let NilaiUjian = prompt("Masukkan nilai kamu : ");

if (isNaN(NilaiUjian)) {
    alert("Harus berupa angka bukan huruf");
} else {
    NilaiUjian = parseInt(NilaiUjian);
}

if (NilaiUjian > Nilai_B){
    console.warn("Kamu dapet Nilai A!");
}else if(NilaiUjian > Nilai_C){
    console.warn("Kamu dapet Nilai B!");
}else if(NilaiUjian > Nilai_D){
    console.warn("Kamu dapet Nilai C!");
}else if (NilaiUjian < Nilai_D){
    console.warn("Kamu dapet Nilai D! Semangat");
}else if(prompt("Masukkkan nilai kamu : ") == ""){
    alert("Belom diisi bos");
}