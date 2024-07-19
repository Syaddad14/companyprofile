<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lacak Pengaduan</title>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <style>
        body {
            background-color: #061122;
            color: white; /* Changed font color to white */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #091830;
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            max-width: 500px;
        }
        label {
            color: white; /* Changed font color to white */
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: black; /* Changed font color to white */
        }
        button {
            background-color: #061122;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <form action="{{ route('client.complain.store') }}" method="POST">
        @csrf
        <h2 style="text-align: center;">Komplain Klien</h2>
    </br>
        </br>
        <div style="text-align: center;">
            <button type="button" onclick="window.location.href='http://127.0.0.1:8000/tracking/Aerplus'" class="btn btn-info btn-sm">Aerplus</button>
            <button type="button" onclick="window.location.href='http://127.0.0.1:8000/tracking/Magenta%20EO'" class="btn btn-info btn-sm">Magenta EO</button>
            <button type="button" onclick="window.location.href='http://127.0.0.1:8000/tracking/Metaprint'" class="btn btn-info btn-sm">Metaprint</button>
            <button type="button" onclick="window.location.href='http://127.0.0.1:8000/tracking/Vapehitz'" class="btn btn-info btn-sm">Vapehitz</button>
        </div>
        </form>
    <br>
</body>
</html>
