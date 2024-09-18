<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Accreditation Request</title>
    <style>
        /* Styles for better readability and appearance */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #007bff;
            text-align: center;
        }
        p {
            font-size: 18px;
            margin-bottom: 15px;
            color: #555;
        }
        strong {
            color: #007bff;
        }
        .info {
            background-color: #f2f9fc;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .thank-you {
            font-size: 24px;
            text-align: center;
            margin-top: 30px;
            color: #007bff;
        }
        .footer {
            font-size: 14px;
            color: #999;
            text-align: center;
            margin-top: 20px;
        }
        .accent-bg {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        .accent-bg:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Accreditation Request Received</h1>

        <div class="info">
             <p><strong>Organization Name:</strong> {{ $details->org_name}}</p>
            <p><strong>Organization Email:</strong> {{ $details->org_email }}</p>
            <p><strong>Organization Country:</strong> {{ $details->org_country }}</p>
            <p><strong>Organization City:</strong> {{ $details->org_city }}</p>
            <p><strong>Organization Phone:</strong> {{ $details->org_phone }}</p>
             <p><strong>Organization Phone:</strong> {{ $details->website }}</p>
            <p><strong>Contact Name Registered:</strong> {{ $details->contact_name }}</p>
            <p><strong>Contact Email Registered:</strong> {{ $details->contact_email }}</p>
            <p><strong>Contact Phone Number Registered:</strong> {{ $details->contact_phone }}</p>
        </div>

        <p>Someone has requested accreditation from us and has uploaded their documents. You can check them from the dashboard.</p>

        <p class="thank-you">Thank you in advance, {{ config('app.name') }}.</p>

        <p class="footer">This email is automatically generated. Please do not reply.</p>
        
        <a href="#" class="accent-bg">Visit Dashboard</a>
    </div>
</body>
</html>
