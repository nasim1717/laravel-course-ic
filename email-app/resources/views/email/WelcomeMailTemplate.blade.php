<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Verify your OTP</title>
    <style>
        /* Dark mode friendly logo/text tweaks for some clients */
        @media (prefers-color-scheme: dark) {
            .card { background:#111 !important; color:#eaeaea !important; }
            .muted { color:#9aa0a6 !important; }
            .btn { background:#4f46e5 !important; }
            .code { background:#0b0b0b !important; }
        }
    </style>
</head>
<body style="margin:0;padding:0;background:#f6f7f9;">
<table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f6f7f9;">
    <tr>
        <td align="center" style="padding:24px;">
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:600px;background:#ffffff;border-radius:10px" class="card">
                <tr>
                    <td style="padding:28px 28px 8px 28px; font:700 20px/1.2 -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Arial,sans-serif;">
                        Verify your email
                    </td>
                </tr>
                <tr>
                    <td style="padding:0 28px 8px 28px; font:400 14px/1.6 -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Arial,sans-serif;color:#5f6368" class="muted">
                        Use this One-Time Password to complete your sign in. Do not share it with anyone.
                    </td>
                </tr>

                <!-- OTP Code Block -->
                <tr>
                    <td align="center" style="padding:16px 28px 8px 28px;">
                        <div class="code" style="display:inline-block;font:700 28px/1.1 'SFMono-Regular',Consolas,'Liberation Mono',Menlo,monospace;letter-spacing:4px;color:#fff2f2;background:#f1f3f4;border:1px solid #e5e7eb;border-radius:8px;padding:14px 18px;">
                          {{$otp}}
                        </div>
                    </td>
                </tr>


                <tr>
                    <td style="padding:0 28px 28px 28px; font:400 12px/1.6 -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Arial,sans-serif;color:#9aa0a6" class="muted">
                        Having trouble? Enter the code manually: <span style="font-family:'SFMono-Regular',Consolas,'Liberation Mono',Menlo,monospace;color:#111">0000</span>
                    </td>
                </tr>
            </table>

            <!-- Footer -->
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:600px;">
                <tr>
                    <td align="center" style="padding:16px; font:400 11px/1.6 -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Arial,sans-serif;color:#9aa0a6">
                        © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>
