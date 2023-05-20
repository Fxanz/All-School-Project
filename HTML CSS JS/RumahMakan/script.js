function updateHarga() {
    var makanan = document.getElementById("makanan");
    var harga = document.getElementById("harga");
    var selectedOption = makanan.options[makanan.selectedIndex];
    var selectedHarga = selectedOption.getAttribute("data-harga");
    harga.value = selectedHarga;
  }
  
  const hidden = document.querySelectorAll(".hidden");
  window.addEventListener("load", function () {
    document.getElementById("container").classList.add("reveal");
    
  });
  
  document.getElementById("kembali").addEventListener("click", function () {
    document.getElementById("container2").classList.add("hide");
  });