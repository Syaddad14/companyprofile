<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengaduan</title>
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
        <label for="name_clients">Nama Klien</label>
        <input type="text" id="name_clients" name="name_clients" required><br><br>
        
        <label for="client_no">No HP Klien</label>
        <input type="text" id="client_no" name="client_no" required><br><br>
        
        <label for="complaint">Pengaduan</label><br>
        <textarea id="complaint" name="complaint" rows="8" required></textarea><br><br>
        
        <div style="text-align: center;">
            <button type="submit">Kirim</button>
        </div>
    </br>
        <div style="text-align: center;">
            <button type="button" onclick="window.open('{{ route('client.tracking.form') }}', '_blank')" class="btn btn-info btn-sm">Lacak</button>
        </div>
        </form>
    <br>
</body>
</html>
