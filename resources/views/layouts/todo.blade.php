<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
   <title>@yield('title')</title>
      <style>
         table {
            border-collapse: collapse;
            border-spacing: 0;
         }
         input,{
            vertical-align: middle;
         }

         .flex {
            display: flex;
         }

         .between {
            justify-content: space-between;
         }

         .mb-15 {
            margin-bottom: 15px;
         }

         .mb-30 {
            margin-bottom: 30px;
         }
         .container {
            background-color: #2d197c;
            height: 100vh;
            width: 100vw;
            position: relative;
         }

         .card {
            background-color: #fff;
            width: 50vw;
            padding: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
         }

         .title {
            font-weight: bold;
            font-size: 24px;
         }

         .input-add {
            width: 80%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            font-size: 14px;
            outline: none;
         }

         table {
            text-align: center;
            width: 100%
         }

         tr {
            height: 50px;
            vertical-align: middle;
         }

         .input-update {
            width: 90%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            font-size: 14px;
            outline: none;
         }

         .button-add {
            text-align: left;
            border: 2px solid #dc70fa;
            font-size: 12px;
            color: #dc70fa;
            background-color: #fff;
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.4s;
            outline: none;
         }

         .button-add:hover {
            background-color: #dc70fa;
            border-color: #dc70fa;
            color: #fff;
         }

         .button-update {
            text-align: left;
            border: 2px solid #fa9770;
            font-size: 12px;
            color: #fa9770;
            background-color: #fff;
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.4s;
            outline: none;
         }

         .button-update:hover {
            background-color: #fa9770;
            border-color: #fa9770;
            color: #fff;
         }

         .button-delete {
            text-align: left;
            border: 2px solid #71fadc;
            font-size: 12px;
            color: #71fadc;
            background-color: #fff;
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.4s;
            outline: none;
         }

         .button-delete:hover {
            background-color: #71fadc;
            border-color: #71fadc;
            color: #fff;
         }
   </style>
</head>
<body>
   <div class="content">
   @yield('contents_todolist')
   </div>
</body>
</html>