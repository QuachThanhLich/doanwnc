<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <?php include('cdn.php') ?>
</head>
<style>
    .row {
        justify-content: center;
        margin-bottom: 20px;
    }

    .btnCont {
        width: 38%;
        display: inline-flex;
        flex-direction: column;
        justify-content: flex-end;
        float: right;
    }

    .btnCont .list {
        margin: 0 0 10px auto;
        display: inline-flex;
        justify-content: flex-end;
        border: 1px solid #ced4da;
    }

    .btnCont .list a {
        background: #000000;

        position: relative;
        padding: 14px 15px 13px 30px;
        border-right-width: 0;
        width: auto;
        font-weight: bold;
        color: #ffffff;
    }

    .btnCont .list a::before {
        content: '';
        height: auto;
        background-color: transparent;
        position: absolute;
        top: -1px;
        right: -10px;
        bottom: auto;
        left: auto;
        z-index: 1;
        border-width: 26px;
        border-color: transparent;
        border-style: solid;
        border-right: 0;
        border-left: 10px solid #ffffff;
    }

    .btnCont .list a::after {
        position: absolute;
        top: -1px;
        right: -9px;
        bottom: auto;
        left: auto;
        display: block;
        border-width: 26px;
        border-color: transparent;
        border-style: solid;
        border-right: 0;
        border-left: 10px solid #000000;
        content: "";
        z-index: 1;
    }

    .btnCont .list a:last-child::before,
    .btnCont .list a:last-child::after {
        display: none
    }

    .btnCont .list a:hover {
        text-decoration: none;
        color: #000000;
        background: #ffffff;
    }

    .btnCont .list a:hover::after {
        position: absolute;
        top: -1px;
        right: -9px;
        bottom: auto;
        left: auto;
        display: block;
        border-width: 26px;
        border-color: transparent;
        border-style: solid;
        border-right: 0;
        border-left: 10px solid #ffffff;
        content: "";
        z-index: 1;
    }

    .btnCont .list a:last-child:hover::before,
    .btnCont .list a:last-child:hover::after {
        text-decoration: none;
        color: #000000;
        background: #ffffff;
        z-index: 0;
        /* border-left: 1px solid #ced4da; */
    }

    .text-danger {
        margin-top: 100px;
        display: block;
        width: 100%;
        border: 1px solid #ced4da;
        font-weight: 400;
        padding: 20px;
        font-size: 1.8rem;
    }

    .information .btn {
        max-width: 300px;
        width: 100%;
        margin: 0 0 0 auto;
    }

    .information .btn a {
        display: block;
        text-align: center;
        color: #000;
        border: 1px solid #000;
        padding: 13px 10px;
    }

    .information .btn a:hover {
        text-decoration: none;
        color: #ffffff;
        background: #000000;
        transition: .3s;
    }
</style>

<body>
    <?php include('header.php') ?>
    <main>
        <div class="container">
            <div class="pro">
                <div class="row mbot-3">
                    <div class="col-sm-2">
                        <h2 class="text-center cart-title">S???n ph???m</h2>
                    </div>
                    <div class="col-sm-2">
                        <h2 class="text-center cart-title">????n gi??</h2>
                    </div>
                    <div class="col-sm-2">
                        <h2 class="text-center cart-title">S??? l?????ng</h2>
                    </div>
                    <div class="col-sm-2">
                        <h2 class="text-center cart-title">T???ng c???ng</h2>
                    </div>
                    <div class="col-sm-2">
                    </div>
                <div class="col-md-8">
                    <div class="list">
                        <a href='checkout.php'>Xem ????n h??ng</a>
                        <a href='index.php'>?????a ch???</a>
                        <a href='delcart.php?item=all'>X??c nh???n ????n</a>
                    </div>
                    <div class="information">
                        <p class="title">
                            T???ng ????n h??ng :
                        </p>
                        <div class="box">
                            <p class="tex01">
                                T???m t??nh :
                            </p>
                            <p class="text02">Thu???</p>
                            <p class="text03">t???ng :</p>
                            <p class="btn">
                                <a href="#">Ti???n h??nh thanh to??n</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1 class='text-danger'>Gi??? h??ng tr???ng</h1>
                    <a class='btn btn-primary' href='index.php'>Ti???p t???c mua</a>
                </div>
            </div>
        </div>
        <?php include('footer.php') ?>
    </main>
</body>

</html>