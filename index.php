<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKL Todo List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Helvetica' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Georgia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Varela Round' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: 'Nunito';
        }

        body {
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #ffffff;
        }

        .container {
            width: 100vw;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /*---------- Card CSS Template ----------*/
        .card {
            width: 75%;
            margin-top: 20px;
            margin-bottom: 20px;
            background: #ffffff;
            border: 1px #000000 solid;
            border-radius: 30px;
            box-shadow: 0px 0px 5px #aeaeae;
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
        }

        .todo-list {
            width: 75%;
            background: #ffffff;
            border-radius: 5px;
            border: 2px #000000 solid;
            border-bottom: 0 !important;
        }

        /*---------- Card Header ----------*/
        .card-header {
            width: 100%;
            height: 265px;
            padding: 15px;
            background-image: url("images/mountain.png");
            background-size: contain;
        }

        .text-title {
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .text-title p {
            font-size: 3em;
            margin-top: 25px;
            font-weight: 700;
            color: #ffffff;
        }

        .text-title hr {
            width: 400px;
            margin-top: 14px;
            border: 2px #ffffff solid;
            border-radius: 1000px;
        }

        .add-list {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .add-list input {
            padding: 15px;
            margin-top: 35px;
            width: 330px;
            height: 40px;
            font-size: 17px;
            border-radius: 6px;
            border: 1px #000000 solid;
            font-family: 'Lato';
        }

        .button-list {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button-list button {
            width: 360px;
            height: 40px;
            background: #ffffff;
            color: #000000;
            font-family: 'Lato';
            margin: 10px;
            border-radius: 6px;
            border: 1px #000000 solid;
            transition: 0.2s;
        }

        .button-list button:hover {
            background: #000000;
            color: #ffffff;
            border: 1px #ffffff solid;
            box-shadow: 0px 0px 10px #aeaeae;
        }

        .button-list button:active {
            transform: scale(0.97);
        }

        .button-responsive {
            display: none;
            width: 360px;
            height: 40px;
            background: #ffffff;
            color: #000000;
            font-family: 'Lato';
            margin: 10px;
            border-radius: 6px;
            border: 1px #000000 solid;
            transition: 0.2s;
        }

        .button-responsive:hover {
            background: #000000;
            color: #ffffff;
            border: 1px #ffffff solid;
            box-shadow: 0px 0px 10px #aeaeae;
        }

        .button-responsive:active {
            transform: scale(0.97);
        }

        /*---------- Card Body ----------*/
        .card-body {
            width: 100%;
            padding: 10px;
            font-family: 'Lato';
            background: #f5f5f5;
            background-image: url("images/Stars.jpeg");
            background-size: contain;
        }

        .body-title {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .body-title h3 {
            font-size: 30px;
            color: #ffffff;
            text-shadow: 0px 0px 10px #ffffff;
        }

        .isi-list {
            display: flex;
            align-items: center;
            width: 100%;
            height: 55px;
            border-bottom: 2px #000000 solid;
        }

        .isi-list p {
            width: 83%;
            font-family: 'Lato';
            font-size: 17px;
            margin: 14px;
        }

        .isi-list button {
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .isi-list button:nth-child(2) {
            background: #ff7676;
            width: 65px;
            border: 0;
            padding: 10px;
            border-radius: 3px;
            margin: 6px;
            color: #ffffff;
            transition: transform 0.3s;
        }

        .isi-list button:nth-child(1) {
            background: #008800;
            width: 65px;
            border: 0;
            padding: 10px;
            border-radius: 3px;
            margin: 6px;
            color: #ffffff;
            transition: transform 0.3s;
        }

        .isi-list button:nth-child(2):hover {
            background: #ff767695;
            transform: scale(1.05);
        }

        .isi-list button:nth-child(1):hover {
            background: #00880095;
            transform: scale(1.05);
        }

        .isiButton {
            display: flex;
        }

        .done {
            text-decoration: line-through !important;
            color: #aaaaaa !important;
        }

        /*--------- Keyframes ----------*/
        @media only screen and (max-width: 620px) {

            .card-header {
                height: 215px;
            }

            .add-list {
                display: flex;
                flex-direction: row;
                margin-left: 5px;
            }

            .text-title p {
                font-size: 2.4em;
            }

            .text-title hr {
                width: 260px;
            }

            .add-list input {
                margin-top: 20px;
                width: 190px;
            }

            .button-responsive {
                display: block !important;
                width: 60px !important;
                height: 73px !important;
                margin-top: 31px !important;
            }

            .button-list button {
                display: none;
            }

            .isi-list button:nth-child(1) {
                font-size: 10px;
            }

            .isi-list button:nth-child(2) {
                font-size: 10px;
            }

        }
    </style>
</head>

<body>

    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="text-title">
                    <p>Todo List Web</p>
                    <hr>
                </div>

                <div class="add-list">
                    <input type="text" id="input-text" placeholder="Create New Todo">
                    <div class="button-list">
                        <button type="submit" onclick="addTask()">Add</button>
                        <button type="submit" onclick="addTask()" class="button-responsive">+</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="todo-list">
            <div class="card-body">
                <div class="body-title">
                    <h3>List Task</h3>
                </div>
            </div>

            <div class="list-task" id="list-task">
                <!-- <div class="isi-list">
                    <p>Semester Book</p>
                    <button>Hapus</button>
                    <button>Check</button>
                </div>
                <div class="isi-list">
                    <p>Dicoding Indonesia</p>
                    <button>Hapus</button>
                    <button>Check</button>
                </div>
                <div class="isi-list">
                    <p>Make Portfolio Web</p>
                    <button>Hapus</button>
                    <button>Check</button>
                </div>
                <div class="isi-list">
                    <p>Skillpath Skilvul</p>
                    <button>Hapus</button>
                    <button>Check</button>
                </div> -->
            </div>

        </div>

    </div>

    <script src="app.js"></script>
</body>

</html>