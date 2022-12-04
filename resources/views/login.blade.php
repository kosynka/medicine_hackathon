@extends('layouts.login_base')
@section('styles')
    @parent
    <style>
        .whitebox {
            left: 35%;
            width: 423px;
            height: 423px;
            left: 389px;
            top: 177px;

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
        <form action="{{ url('/signin') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="container">
                <h1 class="">Кirý</h1> 
                <div class="inpt">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Email eńgizińiz" name="email" required>    
                </div>
                <div class="inpt">
                    <label for="password"><b>Qupıa sóz</b></label>
                    <input type="password" placeholder="Qupıa sózdi eńgizińiz" name="password" required>
                </div>
                <div>
                    <a class="passres" href="#">Qupıa sózdi umyttym</a>
                    <a class="reglink" href="#">Tirkelý</a>
                </div>
                <button type="submit" class="registerbtn">Kirý</button>
            </div>
          </form>
    </div>
@endsection