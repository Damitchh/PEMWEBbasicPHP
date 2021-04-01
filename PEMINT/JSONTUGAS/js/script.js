$.getJSON('data/data.json', function(data){
    let produk = data.MaticShop.Produk;
    $.each(produk, function (i, data){
        $('#daftar-produk').append('<div class="col-md-4"><div class="card mb-3" style="width: 20rem;" ><img src="img/produk/'+ data.Gambar +'" class="card-img-top" style="height: 10rem;"><div class="card-body"><h5 class="card-title">'+ data.Nama +'</h5><p class="card-text">Jumlah Stok :'+ data.Stok +'</p><h5>'+ data.Harga +'</h5><a href="#" class="btn btn-primary">Buy</a></div></div></div>')
    });
});