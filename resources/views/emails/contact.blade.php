<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
        }
        .container {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            color: #2563eb;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Contact Form Submission</h1>
        <p>You have received a new message from the website contact form.</p>
        
        <div class="field">
            <div class="label">Name:</div>
            <div>{{ $contact->name }}</div>
        </div>
        
        <div class="field">
            <div class="label">Email:</div>
            <div>{{ $contact->email }}</div>
        </div>
        
        <div class="field">
            <div class="label">Phone:</div>
            <div>{{ $contact->phone ?: 'Not provided' }}</div>
        </div>
        
        <div class="field">
            <div class="label">Message:</div>
            <div>{{ $contact->message }}</div>
        </div>
        
        <div class="field">
            <div class="label">Submitted at:</div>
            <div>{{ $contact->created_at->format('d F Y, H:i') }}</div>
        </div>
        
        <p>This is an automated email from the SMP Negeri 1 Cibadak website.</p>
    </div>
</body>
</html>