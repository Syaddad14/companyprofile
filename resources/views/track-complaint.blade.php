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
            color: white;
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
            color: white;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: black;
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
        <div style="text-align: center;">
            <button type="button" onclick="window.open('{{ route('client.tracking.form') }}', '_blank')" class="btn btn-info btn-sm">Lacak</button>
        </div>
        </div>
    </form>
    <br>
</body>
</html>
