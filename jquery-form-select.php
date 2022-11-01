<!-- Link referensi
    https://www.petanikode.com/jquery-form-select/
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="POST">
    <select name="package" id="package">
        <option data-price="4000">Sabun Mandi</option>
        <option data-price="6000">Bedak Bayi</option>
        <option data-price="2000">Sampoo</option>
    </select>
    
    <input type="text" name="price" readonly>
</form>

<script src="js/jquery-3.6.0.min.js"></script>
<script>
    $('#package').on('change', function(){
    // ambil data dari elemen option yang dipilih
    const price = $('#package option:selected').data('price');
    
    // tampilkan data ke element
    $('[name=price]').val(price);
    });
</script>
</body>
</html>