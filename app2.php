<?php
//Eğer formdan veri geldiyse formdaki verileri al
if (isset($_POST['result'])) {

    $age=$_POST['age'];
}
//Eğer formdan veri gelmemişse aşağıdaki default verileri kullan
else{

    $age = 25; 
}
//Yaşa göre atandığı grup belirlenir

if ($age >=0 && $age <=14) {
    $group = "Çocuk"; 
    } else if($age >=15 && $age <= 24){
      $group = "Genç";
    }else if($age >=25 && $age <= 64){
      $group = "Yetişkin";
    }else if($age >=65){
      $group = "Yaşlı";
    }
    else {
        $group="Lütfen Geçerli Bir Yaş Giriniz";
    }
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasan Kürşad KORKMAZ | Ödev 1_1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .selectMargin {
        margin-bottom: 5rem;
    }

    h3 {
        margin-bottom: 50px;
    }

    input {
        margin-bottom: 20px;

    }

    select {
        margin-bottom: 20px;

    }
    </style>
</head>

<body>
    <div class="row">
        <div class="container">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="col-lg-12 selectMargin">
                    <!-- Verinin alınabilmesi için olan form -->
                    <h3>Yaş Grubunuzu Burdan Belirleyebirsiniz</h3>
                    <form action="#" method="POST">
                        <div class="form-group row">
                            <label for="age-id" class="col-sm-2 col-form-label">Yaşınız</label>
                            <div class="col-sm-10">
                                <input required type="number" <?php if(isset($_POST['result'])){ ?>
                                    value="<?php echo $age ?>" <?php } ?> class="form-control" name="age" id="age-id"
                                    placeholder="<?php echo $age ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="result" class="btn btn-primary">Hesapla</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="col-lg-12">
<!-- İşlem sonucunun yazdırıldığı yer -->
                    <h3>Yaş Grubunuz: <?php echo $group; ?> </h3>




                </div>
            </div>
        </div>
    </div>

</body>

</html>