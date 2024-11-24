const mobil = [
   {Nama: "Hilux", Merek: "Toyota", Jenis: "4WD"},
   {Nama: "MX-5", Merek: "Mazda", Jenis: "RWD"},
   {Nama: "Triton", Merek: "Mitsubishi", Jenis: "4WD"},
   {Nama: "BRZ", Merek: "Subaru", Jenis: "RWD"},
   {Nama: "Civic Type-R", Merek: "Honda",Jenis: "FWD"},
];


//Menampilkan data menggunakan metode forEach
mobil.forEach(objekMobil => {
    console.info(`Car name: ${objekMobil.Nama} | Car brand: ${objekMobil.Merek} | Car Type: ${objekMobil.Jenis}`);
    });

//Menambahkan Objek baru
/*const mobilBaru = { Nama: "Fortuner" , Merek: "Toyota" , Jenis: "4WD" };
    mobil.push(mobilBaru);
//menampilkan output dari metode push() dengan forEach
mobil.forEach(objekMobil => {
    console.info(`Car name: ${objekMobil.Nama} | Car brand: ${objekMobil.Merek} | Car Type: ${objekMobil.Jenis}`);
    });
*/

//Menghapus salah satu Objek
/*const indexToRemove = mobil.findIndex(dataMobil => dataMobil.Nama === "Triton");
if (indexToRemove !== -1) {
  mobil.splice(indexToRemove, 1)};
//menampilkan output dari metode splice() dengan forEach
console.warn("Setelah melakukan metode splice()")
mobil.forEach(objekMobil => {
    console.info(`Car name: ${objekMobil.Nama} | Car brand: ${objekMobil.Merek} | Car Type: ${objekMobil.Jenis}`);
    });
*/