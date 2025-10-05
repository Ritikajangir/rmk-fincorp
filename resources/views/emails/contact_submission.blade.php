<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us Submission</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 30px;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: auto; background-color: #ffffff; border: 1px solid #e0e0e0; padding: 20px;">
        <tr>
            <td style="text-align: center;">
                <h2 style="margin-bottom: 10px; color: #333;">New Contact Us Submission</h2>
                <p style="color: #777;">You received a new message via the contact form.</p>
            </td>
        </tr>
        <tr>
            <td>
                <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">
                <p><strong>Name:</strong> {{ $data->name }}</p>
                <p><strong>Email:</strong> {{ $data->email }}</p>
                <p><strong>Phone:</strong> {{ $data->phone ?? 'N/A' }}</p>
                <p><strong>Message:</strong></p>
                <div style="background-color: #f4f4f4; padding: 15px; border-radius: 4px; white-space: pre-wrap;">
                    {{ $data->message }}
                </div>
                <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">
                <p style="font-size: 12px; color: #999;"><strong>Submitted At:</strong> {{ $data->created_at->format('d M Y, h:i A') }}</p>
            </td>
        </tr>
    </table>
</body>
</html>
