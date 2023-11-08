<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Details</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">

</head>
<style>
    body {
        background-image: url('assets/landing2.jpg');
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
</style>

<body>

    @extends('master')
    @section('content')
        <h1
            style="padding-bottom:10%; color: white; text-align: center; padding-top: 3%; letter-spacing: 8px;  font-family: 'Times New Roman', Times, serif;">
            Harry Potter Series Chronological</h1>

        <!-- Harry Potter and the Philosopher’s Stone (2001) -->
        <div class="fade-in"
            style="border-radius: 5px; display: flex; justify-content: center; align-items: center; height: 80vh; margin-bottom:15%; padding:5%;background-color: rgba(255, 255, 255, 0.109);">
            <img src="/assets/s1.jpg" alt="Title" class="fade-in" style="width: 60%; height: 100vh; border-radius: 10px;">

            <p style="margin: 5%"><strong> Harry Potter and the Philosopher’s Stone (2001)</strong><br>Harry Potter is an orphaned boy brought up by his unkind Muggle (non-magical) aunt and
                uncle. At the age of eleven, half-giant Rubeus Hagrid informs him that he is actually a wizard and that his
                parents were murdered by an evil wizard named Lord Voldemort. Voldemort also attempted to kill one-year-old
                Harry on the same night, but his killing curse mysteriously rebounded and reduced him to a weak and helpless
                form. Harry became extremely famous in the Wizarding World as a result. Harry begins his first year at
                Hogwarts School of Witchcraft and Wizardry and learns about magic. During the year, Harry and his friends
                Ron Weasley and Hermione Granger become entangled in the mystery of the Philosopher's Stone which is being
                kept within the school.</p>
        </div>

        <!-- Harry Potter and the Chamber of Secrets (2002) -->
        <div class="fade-in"
            style="border-radius: 5px; display: flex; justify-content: center; align-items: center; height: 80vh; margin-bottom:15%; padding:5%;background-color: rgba(255, 255, 255, 0.109);">
            <p style="margin: 5%"><strong> Harry Potter and the Chamber of Secrets (2002)</strong><br>Harry, Ron, and Hermione return to Hogwarts for their second year, which proves to be more
                challenging than the last. The Chamber of Secrets has been opened, leaving students and ghosts petrified by
                an unleashed monster. Harry must face up to claims that he is the heir of Salazar Slytherin (founder of the
                Chamber), learn that he can speak Parseltongue, and also discover the properties of a mysterious diary, only
                to find himself trapped within the Chamber itself.</p>

            <img src="/assets/chamber.jpg" alt="Title" class="fade-in"
                style="width: 60%; height: 100vh; border-radius: 10px;">

        </div>

        <!-- Harry Potter and the Prisoner of Azkaban (2004) -->
        <div class="fade-in"
            style="border-radius: 5px; display: flex; justify-content: center; align-items: center; height: 80vh; margin-bottom:15%; padding:5%;background-color: rgba(255, 255, 255, 0.109);">
            <img src="/assets/prisoner.jpg" alt="Title" class="fade-in"
                style="width: 60%; height: 100vh; border-radius: 10px;">

            <p style="margin: 5%"><strong> Harry Potter and the Prisoner of Azkaban (2004)</strong><br>Harry's third year sees the boy wizard, along with his friends, attending Hogwarts School
                once again. Professor R. J. Lupin joins the staff as Defence Against the Dark Arts teacher, while convicted
                murderer Sirius Black escapes from Azkaban. The Ministry of Magic entrusts the Dementors to guard Hogwarts
                from Black. Harry learns more about his past and his connection with the escaped prisoner.</p>
        </div>

        <!-- Harry Potter and the Goblet of Fire (2005) -->
        <div class="fade-in"
            style="border-radius: 5px; display: flex; justify-content: center; align-items: center; height: 80vh; margin-bottom:15%; padding:5%;background-color: rgba(255, 255, 255, 0.109);">

            <p style="margin: 5%"><strong> Harry Potter and the Goblet of Fire (2005) </strong><br>During Harry's fourth year, Hogwarts plays host to the Triwizard Tournament. Three
                European schools participate in the tournament, with three 'champions' representing each school in the
                deadly tasks. The Goblet of Fire chooses Fleur Delacour, Viktor Krum, and Cedric Diggory to compete against
                each other. However, Harry's name is also produced from the Goblet thus making him a fourth champion, which
                leads to a terrifying encounter with a reborn Lord Voldemort.</p>

            <img src="/assets/gob.jpg" alt="Title" class="fade-in"
                style="width: 60%; height: 100vh; border-radius: 10px;">

        </div>

        <!-- Harry Potter and the Order of the Phoenix (2007) -->
        <div class="fade-in"
            style="border-radius: 5px; display: flex; justify-content: center; align-items: center; height: 80vh; margin-bottom:15%; padding:5%;background-color: rgba(255, 255, 255, 0.109);">
            <img src="/assets/order.jpg" alt="Title" class="fade-in"
                style="width: 60%; height: 100vh; border-radius: 10px;">

            <p style="margin: 5%"><strong>Harry Potter and the Order of the Phoenix (2007)</strong><br>Harry's fifth year begins with him being attacked by Dementors in Little Whinging. Later,
                he finds out that the Ministry of Magic is in denial of Lord Voldemort's return. Harry is also beset by
                disturbing and realistic nightmares, while Professor Umbridge, a representative of Minister for Magic
                Cornelius Fudge, is the new Defence Against the Dark Arts teacher. Harry becomes aware that Voldemort is
                after a prophecy which reveals: "neither can live while the other survives". The rebellion involving the
                students of Hogwarts, secret organisation Order of the Phoenix, the Ministry of Magic, and the Death Eaters
                begins.</p>
        </div>

        <!-- Harry Potter and the Half-Blood Prince (2009) -->
        <div class="fade-in"
            style="border-radius: 5px; display: flex; justify-content: center; align-items: center; height: 80vh; margin-bottom:15%; padding:5%;background-color: rgba(255, 255, 255, 0.109);">

            <p style="margin: 5%"><strong> Harry Potter and the Half-Blood Prince (2009)</strong><br>In Harry's sixth year at Hogwarts, Lord Voldemort and his Death Eaters are increasing
                their terror upon the Wizarding and Muggle worlds. Headmaster Albus Dumbledore persuades his old friend
                Horace Slughorn to return to Hogwarts as a professor as there is a vacancy to fill. There is a more
                important reason, however, for Slughorn's return. While in a Potions lesson, Harry takes possession of a
                strangely annotated school textbook, inscribed as belonging to the 'Half-Blood Prince'. Draco Malfoy
                struggles to carry out a mission presented to him by Voldemort. Meanwhile, Dumbledore and Harry secretly
                work together to discover how to destroy the Dark Lord once and for all.</p>

            <img src="/assets/hbp.jpg" alt="Title" class="fade-in"
                style="width: 60%; height: 100vh; border-radius: 10px;">

        </div>

        <!-- Harry Potter and the Deathly Hallows - Part 1 (2010) -->
        <div class="fade-in"
            style="border-radius: 5px; display: flex; justify-content: center; align-items: center; height: 80vh; margin-bottom:15%; padding:5%;background-color: rgba(255, 255, 255, 0.109);">
            <img src="/assets/dh1.jpg" alt="Title" class="fade-in"
                style="width: 60%; height: 100vh; border-radius: 10px;">

            <p style="margin: 5%"><strong> Harry Potter and the Deathly Hallows - Part 1 (2010)</strong><br>After unexpected events at the end of the previous year, Harry, Ron, and Hermione are
                entrusted with a quest to find and destroy Lord Voldemort's secret to immortality – the Horcruxes. It is
                supposed to be their final year at Hogwarts, but the collapse of the Ministry of Magic and Voldemort's rise
                to power prevents them from attending. The trio undergo an arduous journey with many obstacles in their path
                including Death Eaters, Snatchers, the mysterious Deathly Hallows, and Harry's connection with the Dark
                Lord's mind becoming ever stronger.</p>
        </div>

        <!-- Harry Potter and the Deathly Hallows - Part 2 (2011) -->
        <div class="fade-in"
            style="border-radius: 5px; display: flex; justify-content: center; align-items: center; height: 80vh; margin-bottom:15%; padding:5%;background-color: rgba(255, 255, 255, 0.109);">

            <p style="margin: 5%"><strong>Harry Potter and the Deathly Hallows - Part 2 (2011)</strong><br>After destroying one Horcrux and discovering the significance of the three Deathly
                Hallows, Harry, Ron and Hermione continue to seek the other Horcruxes in an attempt to destroy Voldemort,
                who has now obtained the powerful Elder Wand. The Dark Lord discovers Harry's hunt for his Horcruxes and
                launches an attack on Hogwarts, where the trio return for one last stand against the dark forces that
                threaten both the Wizarding and Muggle worlds.</p>

            <img src="/assets/dh2.jpg" alt="Title" class="fade-in"
                style="width: 60%; height: 100vh; border-radius: 10px;">

        </div>
    @endsection
</body>

</html>
