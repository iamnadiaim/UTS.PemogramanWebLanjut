<!DOCTYPE html>
<html>
<head>
<title>Flower Shop - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #5eaaa8;
            color: #fff;
            text-align: center;
            padding: 60px 0;
        }

        header h1 {
            font-size: 3em;
            margin-bottom: 15px;
        }

        header p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        header a {
            display: inline-block;
            padding: 12px 24px;
            text-decoration: none;
            color: #fff;
            background-color: #ea5f5f;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        header a:hover {
            background-color: #c53d3d;
        }

        main {
            padding: 40px;
        }

        .featured-products h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }

        .product {
            border: 2px solid #ccc;
            padding: 25px;
            margin-bottom: 30px;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .product h3 {
            margin-bottom: 15px;
            font-size: 1.5em;
        }

        .product img {
            max-width: 25%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .product p {
            margin-bottom: 15px;
            font-size: 1.1em;
        }

        .product a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #ea5f5f;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .product a:hover {
            background-color: #c53d3d;
        }

        .about-us h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }

        footer {
            text-align: center;
            background-color: #5eaaa8;
            color: #fff;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
<body>
    <header>
    <header>
    <h1>Selamat Datang di HOME FLORISTS</h1>
    <p>Dapatkan keindahan alami dengan koleksi bunga segar kami untuk setiap momen istimewa dalam hidup Anda.</p>
    <a href="{{ route('products') }}">Jelajahi Koleksi Bunga Kami</a>
</header>

    </header>

    <main>
        <section class="featured-products">
            <h2>Produk Unggulan</h2>
            <!-- Tampilkan beberapa produk unggulan di sini -->
            <div class="product">
                <h3>Nama Produk</h3>
                <img src="https://i.pinimg.com/originals/b7/ca/b8/b7cab8abd331f928c8fe6d09450d0d16.jpg" alt="LAVENDER">
                <p>Deskripsi produk...</p>
                <p>Harga: $250.000</p>
                <a href="{{ route('products') }}">Lihat Detail</a>
            </div>
            <!-- Tambahkan produk lainnya jika diperlukan -->
        </section>

        <section class="about-us">
        <section class="about-us">
            <h2>Tentang Kami</h2>
            <p>Kami adalah HOME FLORISTS, komunitas pecinta bunga yang berdedikasi untuk memberikan keindahan alami ke dalam kehidupan Anda. Kami tidak hanya menyediakan bunga berkualitas tinggi, tetapi juga cerita dari setiap rangkaian bunga yang kami ciptakan.</p>
            <p>Dengan pengalaman kami yang kaya, kami mampu menyesuaikan setiap buket untuk memenuhi kebutuhan acara spesial Anda. Setiap bunga yang kami tawarkan tidak hanya sebagai hiasan, tetapi sebagai pengantar pesan cinta, kebahagiaan, dan keceriaan.</p>
        </section>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Flower Shop - Hak Cipta Dilindungi</p>
    </footer>
</body>
</html>
