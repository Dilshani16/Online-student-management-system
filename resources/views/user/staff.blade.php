@include('user.headerU')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .staff{
            background-color: #f0f8ff;
        }

        .tittle{
            padding: 50px;
            text-align: center;
        }

        .card{
            width: 18rem;
            margin: 20px auto;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            background-color: #e6e6fa;
        }

        .card-container{
            padding: 10px;

        }

        .img{
            height: 200px;
        }

        .search-bar{
            margin: 20px auto;
            margin-left: 500px;
        }
    </style>

</head>
<body>

    <div class="staff">
        <h2 class="tittle">Staff Members In Schola</h2>

        {{-- <form action="{{route('user.search')}}" method="GET" class="d-flex justify-content-center mb-4">
            <input type='text' name='query' class="form-control w-50" placeholder="Search by name or position" required>
            <button type="submit" class='btn btn-primary ms-2'>Search</button>
        </form> --}}

        <div class="search-bar mt-2">
            <input type='text' id="searchInput" class="form-control w-50" placeholder="Search by name or position">

        </div>

        <script>
            document.getElementById('searchInput').addEventListener('keyup', function(){
                const query = this.value.toLowerCase();
                const staffcard = document.querySelectorAll('.staff-card');

                staffcard.forEach(card =>{
                    const name = card.dataset.name;
                    const position = card.dtaset.position;

                    if(name.includes(query) || position.includes(query)){
                        card.style.display = '';
                    }else{
                        card.style.display = 'none';
                    }
                });
            });
        </script>



    <div class="row mt-3">

        @foreach ($staff as $sta)
            <div class="col-md-3 mb-4 card-container">
            <div class="card" >
                <img class="card-img-top  img" src="/img/images.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mt-3">{{$sta->first_name}} {{$sta->last_name}}</h5>
                    <h6 class="card-text">{{$sta->position}}</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <a href="#" class="list-group-item">Email: {{$sta->email}}</a>
                    <li class="list-group-item">Phone: {{$sta->contact_no}}</li>
                </ul>
            </div>
            </div>
        @endforeach
    </div>
    </div>

</body>
</html>

@include('user.footerU')
