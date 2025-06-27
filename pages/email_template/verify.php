<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎉 Selamat Datang di Zizz Shop! Verifikasi Email Anda Sekarang!</title>
    <style>
        body {
            background-color: #0a192f;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background: #1e3a8a;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .header {
            background: linear-gradient(90deg, #1e3a8a, #60a5fa);
            padding: 20px;
            text-align: center;
            color: #ffffff;
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .content {
            padding: 30px;
            text-align: center;
            color: #ffffff;
            background: #0a192f;
            border-radius: 0 0 15px 15px;
        }
        .content p {
            font-size: 16px;
            margin: 10px 0;
            color: #d1d5db;
        }
        .code {
            background:rgb(226, 233, 236);
            color:rgb(14, 30, 68);
            font-size: 28px;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 10px;
            display: inline-block;
            animation: pulse 2s infinite;
            margin: 20px 0; /* Added margin for spacing */
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .footer {
            padding: 20px;
            font-size: 12px;
            color: #94a3b8;
            text-align: center;
            background: #1e3a8a;
        }
        .footer a {
            color: #60a5fa;
            text-decoration: none;
        }
        @media (max-width: 600px) {
            .container {
                width: 90% !important;
            }
            .header {
                font-size: 22px;
            }
            .code {
                font-size: 22px;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td align="center" style="padding: 20px 0;">
                <table role="presentation" class="container" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td class="header">
                            Zizz Shop - Verify Your Email
                        </td>
                    </tr>
                    <tr>
                        <td class="content">
                            <p>Halo <strong>{{USERNAME_ATAU_NAMA_DEPAN_JIKA_ADA}}</strong>,</p>
                            <p>Selamat datang di keluarga besar **Zizz Shop**! Kami sangat senang Anda bergabung.</p>
                            <p>Untuk mulai menikmati pengalaman belanja yang luar biasa, Anda hanya perlu satu langkah lagi: **verifikasi alamat email Anda.** Ini penting agar akun Anda aman dan Anda tidak akan melewatkan promo-promo menarik dari kami!</p>
                            <p>Silakan gunakan **kode verifikasi unik** di bawah ini untuk mengaktifkan akun Anda:</p>
                            <div class="code">
                                <strong>{{VERIFICATION_CODE}}</strong>
                            </div>
                            <p>Cukup masukkan kode ini di halaman verifikasi akun Zizz Shop.</p>
                            <p style="margin-top: 20px;">Setelah terverifikasi, Anda bisa langsung menjelajahi berbagai pilihan produk terbaru, diskon spesial, dan banyak lagi yang menanti Anda di Zizz Shop!</p>
                            <p style="margin-top: 20px;">**Butuh bantuan?** Jika Anda mengalami kesulitan atau ada pertanyaan, jangan ragu untuk menghubungi tim dukungan kami.</p>
                            <p>Jika Anda tidak merasa mendaftar di Zizz Shop, mohon abaikan email ini. Akun Anda akan tetap aman.</p>
                            <p>Selamat berbelanja!</p>
                            <p>Salam hangat,</p>
                            <p>Tim Zizz Shop</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="footer">
                            &copy; 2025 Zizz Shop. All rights reserved. | <a href="https://www.zizzshop.com" style="color: #60a5fa; text-decoration: none;">www.zizzshop.com</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>