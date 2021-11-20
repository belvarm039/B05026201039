<html>
    <head>
        <p>
            Belva Rizki Mufidah <br>
            Belva <br>
            5026201039
        </p>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
              -webkit-appearance: none;
              margin: 0;
            }

            /* Firefox */
            input[type=number] {
              -moz-appearance: textfield;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <h2 style="text-align: center;">Form Input Data Barang</h2>
            <form action="/google.php" id="formInputData">
                <div class="row">
                    <div class="col-2">
                        <label for="namabarang">Nama Barang</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="namabarang" name="namabarang" minlength="10" required><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <label for="hargabarang">Harga</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" id="hargabarang" name="hargabarang" min="5000" required><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <label for="jenisbarang_list">Jenis Barang</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" list="jenisbarang_list" name="jenisbarang" id="jenisbarang">
                            <datalist id="jenisbarang_list">
                                <option value="Makanan">
                                <option value="Minuman">
                                <option value="Non Mamin">
                            </datalist><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <label for="kodebarcode">Kode Barcode</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" id="kodebarcode" name="kodebarcode" minlength="10" required><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <input type="submit" class="btn btn-primary btn-block" value="Kirim">
                    </div>
                    <div class="col-6">
                        <input type="button" class="btn btn-warning btn-block" onclick="myFunction()" value="Reset">

                            <script>
                            function myFunction() {
                             document.getElementById("formInputData").reset();
                            }
                            </script>
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>
