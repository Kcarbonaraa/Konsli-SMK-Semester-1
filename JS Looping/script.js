//Input data paket dan kode paket

//Array
let paketShopee = [];

//Input berapa kali perulangan yang ingin dijalankan
let inputStok = parseInt(prompt("Input jumlah stok (angka) : "));

for(let count = 0; count < inputStok; count++){
    //Nama paket
    let namaPaket = prompt("Nama paket ke-" + (count + 1) + ":");
    //Kode paket
    let kodePaket = parseInt(prompt("Masukkan kode paket : "));

//memasukkan data yang sudah diinput dari prompt dengan .push
    paketShopee.push({Nama_paket: namaPaket, Kode_paket: kodePaket});
}

//menampilkan data tabel dengan console.table
console.table(paketShopee);

/*
Studi kasus saya adalah data paket yang masuk ke sistem/server sebuah
perusahaan online shop, namun secara manual.
*/ 