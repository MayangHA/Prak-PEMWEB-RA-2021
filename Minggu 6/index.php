<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style type="text/css">
    body {
        background-color: antiquewhite;
        font-family: 'Scheherazade New', serif;

    }
    form {
        color: antiquewhite;
    }

    section {
        display: flex;
        flex-direction: row;
        width: 500px;
        height: 300px;
        background-color: rgb(158, 42, 43);
        justify-content: space-evenly;
        margin-left: 500px;
    }

    h2 {
        text-align: center;
        color: antiquewhite;
    }

    .btn-1 {
    width: 100px;
    height: 50px;
    border: none;
    color: antiquewhite;
    background-color: #25252A ;
    border-radius: 4px;
    box-shadow: inset 0 0 0 0 rgb(224, 159, 62);
    transition: ease-out 0.3s;
    font-size: 13px;
    outline: none;
    align-items: center;
    align-self: center;
    }

    .btn-1:hover {
    box-shadow: inset 100px 0 0 0 rgb(224, 159, 62);
    cursor: pointer;
    color: rgb(34, 34, 34);
    }

</style>
<body>
    <section>
        <div>
            <h2>Form Belanja</h2>
            <form action="shopbag.php" method="POST" id="shopping" name="shopping" enctype="multipart/form">
                <label for=""> Mangga Rp. 15.000 </label>
                <input type="number" id="mangga" onchange="setValue()" name="mangga"> <br> <br>
                <label for=""> Jambu Rp. 13.000 </label>
                <input type="number" id="jambu" onchange="setValue()" name="jambu"> <br> <br>
                <label for=""> Salak Rp. 10.000 </label>
                <input type="number" id="salak" onchange="setValue()" name="salak"> <br> <br>
                <label for=""> Total Harga : </label>
                <input type="text" id="jumlah" name="jumlah" readonly> <br> <br>

                <button class="btn-1" type="submit"> Submit </button>
            </form>
        </div>
    </section>
</body>

<script>
    function setValue(){
        var total = document.getElementById("jumlah");
        var mangga = document.getElementById("mangga").value * 15000;
        var jambu = document.getElementById("jambu").value * 13000;
        var salak = document.getElementById("salak").value * 10000;
        console.log(mangga + jambu + salak);
        var hasil = mangga + jambu + salak;
        total.value = hasil;

    }
</script>
</html>