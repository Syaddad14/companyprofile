<!DOCTYPE html>
<html>
<head>
    <title>Respond to Complaint</title>
</head>
<body>
    <h1>Respond to Complaint for {{ $client->name }}</h1>

    <p>Complaint: {{ $complaint->description }}</p>

    <form action="{{ route('client.submit.response', ['client' => $client->id, 'complaint' => $complaint->id]) }}" method="POST">
        @csrf
        <div>
            <label for="response">Your Response:</label>
            <textarea id="response" name="response" rows="4" cols="50" required></textarea>
        </div>
        <div>
            <button type="submit">Submit Response</button>
        </div>
    </form>
</body>
</html>
