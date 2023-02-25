<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/pay.css">

</head>

<body>
    @extends('ui.temp')
    @section('body')
    <div class='container-fluid mt-5 mb-5 p-0'>
        <div class="inner row d-flex justify-content-center">
            <div class="card col-md-5 col-12 box1">
                <div class="card-content">
                    <div class="card-header">
                        <div class="heading mb-3"> PAYMENT METHOD </div>
                        <div class="sub-heading row text-center m-0">
                            <div class="col-6 col-md-6 sub-heading1">By Credit Card</div>
                            <button type="button"class="col-6 col-md-6 sub-heading2"href="https://www.paypal.com/eg/home">By PayPal</button>

                        </div>
                    </div>
                    <div class="card-body">
                        <p><small> You choose the method of payment with a credit card. Enter your paymentdetails or select another payment method </small></p>
                        <div class="credit d-block mt-5 mx-auto"> <img class="frnt" src="https://i.imgur.com/Lj98lDm.png" width="200px"> <img class="back" src="https://i.imgur.com/HrUwtFC.png" width="200px"> </div>
                    </div>
                </div>
            </div>
            <div class="card col-md-5 col-12 box2">
                <div class="card-content">
                    <div class="card-header box2-head">
                        <div class="heading2"> PAYMENT DETAILS </div>
                    </div>
                    <div class="card-body col-10 offset-1">
                        <form>
                            <div class="form-group"> <label><small><strong class="text-muted">CARD HOLDER</strong></small></label>
                                 <input class="form-control" placeholder="Mohamed Ahmed"> </div>
                            <div class="form-group"> <label><small><strong class="text-muted">CARD NUMBER</strong></small></label>
                                <div class="d-flex card-number"> <input class="form-control" placeholder="1234-4567-4543-1685">
                                    <i class="fas fa-credit-card text-muted fa-2x"></i> </div>
                            </div>
                            <div class="line3">
                                <div class="txt d-flex">
                                    <p><small class="text-muted">EXPERATION DATE</small></p>
                                    <p><small class="text-muted">CVV</small></p>
                                </div>
                                <div class="form-group row"> <select class="form-control col-5">
                                        <option>January</option>
                                        <option>February</option>
                                        <option>march</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select> <select class="form-control col-4">
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                    </select> <input class="col-3 col-md-2 offset-md-1 text-left" type="text" placeholder="234"> </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer col-10 offset-1 border-0 footer2">
                        <div class="d-flex total mb-5">
                            <p><strong>TOTAL</strong></p>
                            <p><strong>$ 1235</strong></p>
                        </div> <button class="btn col-12"> PAY </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>
