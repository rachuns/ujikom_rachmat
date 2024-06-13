@extends('landing.konten')
@section('content-landing')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            margin-top: 150px;
            margin-right: 150px;
            margin-left: 150px;
            margin-bottom: 20px;
        }

        .table {
            margin-top: 20px;
            margin-bottom: 20px;
        }

    </style>

</head>

<body>
    <div class="card">
        <div class="row">
            <div class="col">
                <h5>Profil</h5>
                <h3>SMK Informatika Al Irsyad Al Islamiyyah Kota Cirebon</h3>
                <p>Berada di Jl. Perjuangan No.31, berdiri salah satu Sekolah Menengah Kejuruan yang memiliki tiga
                    kompetensi keahlian yang terdiri dari Teknik Komputer Jaringan (TKJ), Rekayasa Perangkat Lunak (RPL)
                    dan
                    Multimedia (MM). </p>
                <p>Sekolah Menengah Kejuruan ini membekali siswa-siswanya dengan materi islamiyyah nya. Sehingga
                    membiasakan
                    siswa-siswa nya untuk selalu menerapkan sikap perilaku yang diajarkan oleh agama islam.</p>
            </div>
            <div class="col">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Jl. Perjuangan No. 31, Kesambi, Kota Cirebon</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>smkinformatika@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td>(0231) 480140</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
