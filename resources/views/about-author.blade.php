<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Author</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">

</head>
<style>
    body {
        background-image: url('assets/hp.jpg');
        margin: 0;
        padding: 0;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
    }

    body::before {
        content: "";
        background-color: rgba(0, 0, 0, 0.581);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .card-container {
        display: flex;
        justify-content: space-between;
        margin-top: 2%;
        color: white;
    }

    .card {
        width: 48%;
        /* Adjust the width as needed */
        padding: 20px;
        text-align: center;
        color: white;
    }

    .second-card {
        width: 50%;
        /* Adjust the width as needed */
        padding: 20px;
        text-align: left;
        color: white;
        /* border: 1px solid rgba(158, 158, 158, 0.529);
        border-radius: 5px; */
    }

    .card img {
        max-width: 100%;
        height: auto;
    }

    .sub-card {
        width: auto;
        /* Adjust the width as needed */
        padding: 20px;
        text-align: left;
        border: 1px solid rgba(158, 158, 158, 0.529);
        border-radius: 5px;
        color: white;
    }

    p {
        font-size: 14px;
        text-align: justify;
        line-height: 1.5;
        color: white;
        font-family: 'Times New Roman', Times, serif;
        letter-spacing: 1px;
    }

    .fade-in {
        opacity: 0;
        animation: fadeIn 1.5s forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>

<body>
    @extends('master')
    @section('content')
        <br>
        <h1 style="color: white; font-family: 'Times New Roman', Times, serif;" class="fade-in">ABOUT AUTHOR</h1>
        <div class="card-container fade-in">
            <div class="card" style="background-color: transparent; border: 1px solid white; ">
                <img src="/assets/jk2.jpg" alt="JK ROWLING"><br>
                <h2 style="color: white; font-family: 'Times New Roman', Times, serif;">JK Rowling</h2>
            </div>
            <div class="second-card" style="background-color: transparent;">
                <h2 style="font-family: 'Times New Roman', Times, serif;">Humble beginnings</h2>
                <p>J.K. Rowling, in full <strong>Joanne Kathleen Rowling</strong>, (born July 31, 1965, Yate,
                    near Bristol, England),
                    British author, creator of the popular and critically acclaimed Harry Potter series, about a young
                    sorcerer in training.</p>
                <p>After graduating from the University of Exeter in 1986, Rowling began working for Amnesty International
                    in London, where she started to write the Harry Potter adventures. In the early 1990s she traveled to
                    Portugal to teach English as a foreign language, but, after a brief marriage and the birth of her
                    daughter, she returned to the United Kingdom, settling in Edinburgh. Living on public assistance between
                    stints as a French teacher, she continued to write.</p>

                <table>
                    <th>
                        <div class="sub-card" style="margin-right: 15px;">
                            <h4 style="font-family: 'Times New Roman', Times, serif;">284K Followers</h4>
                        </div>
                    <th>

                    <td>
                        <div class="sub-card">
                            <h4 style="font-family: 'Times New Roman', Times, serif;">24 Books Published</h4>
                        </div>
                    </td>
                </table>
            </div>
        </div>

    @endsection
</body>

</html>
