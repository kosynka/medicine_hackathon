@extends('layouts.login_base')
@section('styles')
    @parent
    <style>
        .whitebox {
            left: 35%;
            width: 425px;
            height: 600px;
            left: 387px;
            top: 138px;

            background: #FFFFFF;
            border-radius: 25px;
            margin-left: 35%;

            padding-top: 10px;
        } 
        .whitebox h1 {
            margin-left: 40%
        } 
        .inpt {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.15)), #76BBB4;
            border-radius: 25px;
            height: 80px;
            margin: 15px;
            display: flex;
            flex-wrap: wrap;
            color: white;
        }
        .inpt input {
            background: none;
            height: 30px;
            width: 100%;
            margin-left: 20px;
            margin-right: 20px;
            color: white;
            color
            border-bottom-color: white;
            border-bottom-width: 2px;
            margin-bottom: 10px;

            outline: none;
        }
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: white;
            opacity: 1; /* Firefox */
        }
        .inpt label {
            background: none;
            margin-left: 20px;
            margin-top: 10px;
        }
        .registerbtn {
            margin-top: 30px;
            margin-left: 150px;
            width: 150px;
            height: 40px;
            color: white;
            font-size: 18px;
            background: #5E9690;
            border-radius: 25px;
            opacity: 0.85;
            cursor: pointer;
        }
        .registerbtn:hover {
            opacity: 1;
        }
        .passres {
            margin-left: 30px;
        }
        .passres:hover {
            margin-left: 30px;
            background-color:#70b4ad;
            border-radius: 10px;
        }
        .reglink {
            margin-left: 150px
        }
        .reglink:hover {
            margin-left: 150px;
            background-color:#70b4ad;
            border-radius: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="whitebox">
        <form>
            <div class="container">
                <h1 class="">Tirkelý</h1> 
                <div class="inpt">
                    <label for="email"><b>T. A. J</b></label>
                    <input type="text" placeholder="Email eńgizińiz" name="email" required>    
                </div>
                <div class="inpt">
                    <label for="psw"><b>Telefon nomeri</b></label>
                    <input type="password" placeholder="Qupıa sózdi eńgizińiz" name="psw" required>
                </div>
                <div class="inpt">
                    <label for="psw"><b>Qupıa sózdi terińiz</b></label>
                    <input type="password" placeholder="Qupıa sózdi eńgizińiz" name="psw" required>
                </div>
                <div class="inpt">
                    <label for="psw"><b>Qupıa taǵy sózdi terińiz</b></label>
                    <input type="password" placeholder="Qupıa sózdi eńgizińiz" name="psw" required>
                </div>
                <div>
                </div>
                <button type="submit" class="registerbtn">Tirkelý</button>
            </div>
          </form>
    </div>
@endsection