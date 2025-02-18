@include('user.headerU')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>

        .chat-container{
            background-image: url('/img/viwe.jpg');
            background-size: cover;
            padding: 30px;
            min-height: 100vh;
        }

       #chat-box {
            height: 300px;
            overflow-y: scroll;
            border: 1px solid #ddd;
            background-color: #ffffff;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .message { margin-bottom: 10px; }
        .user { color: blue; }
        .bot { color: green; }
    </style>
</head>
<body>

    <div class="chat-container">
        <div class="container mt-5">
            <h2>Chat Box</h2>
            <div class="border p-3 mb-3" style="height: 300px; overflow-y: scroll;" id="chat-box">
                @foreach ($messages as $message)
                    <p><strong>{{ $message->sender }}:</strong> {{ $message->message }}</p>
                @endforeach
            </div>
            <form id="chat-form">
                <div class="mb-3">
                    <input type="text" id="user" class="form-control" placeholder="Your name" required>
                </div>
                <div class="mb-3">
                    <input type="text" id="message" class="form-control" placeholder="Type a message" required>
                </div>
                <button type="submit" class="btn btn-primary mb-5">Send</button>
            </form>
        </div>

        <script>
            document.getElementById('chat-form').addEventListener('submit', function (e) {
                e.preventDefault();

                const sender = document.getElementById('sender').value;
                const message = document.getElementById('message').value;

                axios.post('{{ route('chat.send') }}', {
                    sender: sender,
                    message: message
                }).then(response => {
                    if (response.data.success) {
                        const chatBox = document.getElementById('chat-box');
                        const newMessage = `<p><strong>${sender}:</strong> ${message}</p>`;
                        chatBox.innerHTML += newMessage;
                        chatBox.scrollTop = chatBox.scrollHeight;
                        document.getElementById('message').value = '';
                    }
                }).catch(error => {
                    console.error(error);
                });
            });
        </script>
    </div>

</body>
</html>



@include('footer')
