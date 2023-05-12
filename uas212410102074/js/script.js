let abjad = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
let abjadstr = abjad.join("");
const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika kita menuliskan keyword
let rowcontain = document.getElementById('row-contain');
keyword.addEventListener('keydown', function (e) {
  let search = document.getElementById("search");
  let keyboard = e.key;
  let keyword = search.value;
  if(abjadstr.includes(e.key)){
      keyword = search.value+keyboard;
  }
  else if (e.which == 8){ //cek backspace
      keyboard="";
      keyword= keyword.slice(0,-1); //menghapus 1 huruf dibelakang
  }
  else{
      keyboard="";
      keyword = search.value+keyboard;
  }
  for (let i = 0; i < keyword.length; i++) {
      keyword = keyword.trim();
  }
  $.ajax({
    url: 'ajax/ajax_cari.php',
    method : "post",
    data : {
      keyword : keyword
    },
    success : (e)=>{
      console.log(e);
      rowcontain.innerHTML = e;
    },
    error : ()=>{
      console.log("AJAX gagal");
    }
  })
});

// Preview Image untuk Tambah dan Ubah
function previewImage() {
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}