<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Appointment Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color: #f7f7f7; font-family: Arial, sans-serif; padding: 20px;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden;">
                    <tr>
                        <td align="center" style="padding: 20px;">
                            <img src="https://yorkshirehairandskinsolutions.co.uk/assets/img/yorkshirelogo_2.png" alt="Yorkshire Hair & Skin Solutions" style="max-width: 150px;">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px; text-align: left; color: #333;">
                            <h2 style="color: #005a87;">Thank you for booking an appointment!</h2>
                            <p style="font-size: 16px;">Dear <strong>{{ $emailform->name }}</strong>,</p>
                            <p style="font-size: 15px;">We have received your appointment request. Here are the details:</p>
                            <table style="margin-top: 10px; font-size: 15px;">
                                <tr>
                                    <td><strong>Appointment Type:</strong></td>
                                    <td>{{ $emailform->appointment_type }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Date:</strong></td>
                                    <td>{{ $emailform->date }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Time:</strong></td>
                                    <td>{{ $emailform->time }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Contact Number:</strong></td>
                                    <td>{{ $emailform->contact }}</td>
                                </tr>
                            </table>
                            @if(!empty($emailform->message))
                            <p style="margin-top: 15px;"><strong>Message from you:</strong><br>{{ $emailform->message }}</p>
                            @endif
                            <p style="margin-top: 20px;">Our team will contact you shortly to confirm. We look forward to seeing you!</p>
                            <div style="text-align: center; margin: 30px 0;">
                                <a href="https://yorkshirehairandskinsolutions.co.uk" style="background-color: #005a87; color: #fff; padding: 12px 24px; text-decoration: none; border-radius: 5px; font-weight: bold;">Visit Website</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="background-color: #f0f0f0; padding: 20px; font-size: 13px; color: #555;">
                            Sent from <strong>Yorkshire Hair & Skin Solutions</strong><br>
                            175 Dewsbury Road, Leeds LS11 5EG
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
