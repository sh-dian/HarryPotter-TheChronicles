<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">

</head>
<style>
    body {
        background-image: url('assets/landing.jpg');
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

    p {
        font-size: 14px;
        text-align: justify;
        line-height: 1.5;
        color: white;
        font-family: 'Times New Roman', Times, serif;
        letter-spacing: 1px;
    }

    a {
        color: white;
    }

    a:hover {
        color: yellow;
    }

    a::after {
        color: wheat;
    }
</style>

<body>
    @extends('master')
    @section('content')
        <!--Briefly explanation about Harry Potter -->
        <div class="fade-in"
            style="border-radius: 5px; display: flex; justify-content: center; align-items: center; height: 80vh; margin:0; padding:5%;background-color: rgba(255, 255, 255, 0.109);">
            <img src="/assets/title.gif" alt="Title" class="fade-in" style="width: 60%;">

            <p style="margin-left: 5%">The Harry Potter film series is a fantasy film franchise based on the popular book
                series by J.K. Rowling. It
                consists of eight movies released between 2001 and 2011. The films follow the adventures of a young wizard
                named Harry Potter as he attends Hogwarts School of Witchcraft and Wizardry, discovers his true identity as
                a wizard, and battles the dark wizard Lord Voldemort.

                Throughout the series, Harry forms close friendships with Ron Weasley and Hermione Granger, and together
                they face various challenges and uncover the mysteries surrounding Voldemort's rise to power. The films
                explore themes of magic, friendship, destiny, and the battle between good and evil in the magical world. The
                cast includes Daniel Radcliffe as Harry Potter, Emma Watson as Hermione Granger, and Rupert Grint as Ron
                Weasley, among others.</p>
        </div>

        <!--Harry Potter House -->
        <div class="fade-in"
            style="display: flex; justify-content: center; align-items: center; padding-top: 4%; padding-bottom: 4%">
            <h2 style="color: white; letter-spacing: 5px;  font-family: 'Times New Roman', Times, serif;">Harry Potter
                Houses</h2>
            <img src="/assets/houses.png" alt="Hogwarts Houses" width="80%">
        </div>

        <!--Harry Potter Sorting Ceremony -->

        <div class="fade-in" style="border-radius: 5px; background-color: rgba(255, 255, 255, 0.109);">
            <h2
                style="color: white; letter-spacing: 5px; padding-top:2%;font-family: 'Times New Roman', Times, serif; text-align:center;">
                Interested In Knowing Which House Are You?
                <br>
                <a href="https://www.wizardingworld.com/register">Get Sorted Now!!</a>
            </h2>
            <div class="fade-in"
                style="display: flex; justify-content: center; align-items: center; height: 80vh; padding:0;">
                <video src="/assets/sortingCeremony.mp4" muted autoplay controls
                    style="border: 2px solid white; border-radius: 15px; width: 70%;"></video>
            </div>
        </div>
    @endsection
</body>

</html>
