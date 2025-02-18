@include('user.headerU')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Support</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        .support_container{
            background-image: url('/img/support.jpg');
            background-size: cover;
            padding: 30px;
            min-height: 100vh;

        }

        .img{
            height: 150px;
            width: 10px;
            padding: 10px;
            margin-top: 50px;
        }

        .tittle{
            text-align: center;
            color: white;
        }

        h4{
            text-align: center;
        }

        .cards{
            padding: 20px 250px;
        }

        .end{
            text-align: center;
            padding: 0 300px;
            color: white;
        }



        .cards .card-container {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .cards .card-container:hover {
            transform: scale(1.1); /* Enlarges the full card container */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); /* Adds a shadow for emphasis */
        }

        .cards .card {
            border: none; /* Removes the default border */
            border-radius: 8px; /* Adds rounded corners */
            overflow: hidden; /* Ensures content stays inside */
        }

        .cards .card img {
            transition: transform 0.3s ease;
        }

        .cards .card-container:hover img {
            transform: scale(1.05); /* Slight zoom on the image */
        }

        .cards .card h4 {
            text-align: center;
            font-weight: bold;
            margin-top: 15px;
            transition: color 0.3s ease;
        }

        .cards .card-container:hover h4 {
            color: #007bff; /* Changes the text color when hovered */
        }

    </style>


</head>
<body>

    <div class="support_container">

        <div class="tittle mt-5">
            <h3>How Can We Help Your</h3>
        </div>

        <div class="row mt-5  cards">

            <div class="col-md-3 mb-4 card-container">

                <div class="card " >
                    <img class="card-img-top  img" src="/img/feedback1.jpg" alt="Card image cap">
                    <h4 class="mb-4">Add Feedback</h4>
                </div>
                
            </div>

            <div class="col-md-3 mb-4 card-container">
                 <div class="card" >
                    <img class="card-img-top  img" src="/img/contact.jpg" alt="Card image cap">

                    <h4 class="mb-4">Contact us</h4>

                </div>
            </div>

            <div class="col-md-3 mb-4 card-container">
                <a href="{{route('acadamic.chat')}}" class="card-link">
                <div class="card" >
                    <img class="card-img-top  img" src="/img/chatbox.jpg" alt="Card image cap">

                    <h4 class="mb-4">Chat Box</h4>
                </div>
                </a>
            </div>

            <div class="col-md-3 mb-4 card-container">
                <div class="card" >
                    <img class="card-img-top  img" src="/img/faq1.jpg" alt="Card image cap">

                    <h4 class="mb-4">FAQs</h4>

                </div>
            </div>

        </div>

        <div class=" end mt-5 mb-5">
            <h4>Here to Guide and Support You</h4>
            <p class="mt-3">The Support Page in a Student Management System serves
                as a dedicated platform for students, teachers, and administrators
                to seek assistance and resolve issues. It provides features like FAQs,
                a contact form for submitting queries or complaints, live chat for instant help,
                and access to guides or resources. The goal is to ensure smooth system usage and timely support for all users.</p>
        </div>
    </div>

</body>
</html>

@include('footer')
