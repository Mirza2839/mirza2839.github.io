<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pilihan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .menu-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .qty-input {
            width: 40px;
        }
        #total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Menu Pilihan</h1>
        <div class="menu-item">
            <label for="makanan1">Makanan 1 (RP. 2000)</label>
            <input type="number" id="makanan1" class="qty-input" value="0">
        </div>
        <div class="menu-item">
            <label for="makanan2">Makanan 2 (RP. 5000)</label>
            <input type="number" id="makanan2" class="qty-input" value="0">
        </div>
        <div class="menu-item">
            <label for="minuman1">Minuman 1 (RP. 3000)</label>
            <input type="number" id="minuman1" class="qty-input" value="0">
        </div>
        <div class="menu-item">
            <label for="minuman2">Minuman 2 (RP. 6000)</label>
            <input type="number" id="minuman2" class="qty-input" value="0">
        </div>
        <div>
            <h2>Total:</h2>
            <p id="total">RP. 0</p>
        </div>
    </div>

    <script>
        const makanan1 = document.getElementById("makanan1");
        const makanan2 = document.getElementById("makanan2");
        const minuman1 = document.getElementById("minuman1");
        const minuman2 = document.getElementById("minuman2");
        const totalElement = document.getElementById("total");

        const updateTotal = () => {
            const makanan1Value = parseInt(makanan1.value) * 2000;
            const makanan2Value = parseInt(makanan2.value) * 5000;
            const minuman1Value = parseInt(minuman1.value) * 3000;
            const minuman2Value = parseInt(minuman2.value) * 6000;

            const total = makanan1Value + makanan2Value + minuman1Value + minuman2Value;
            totalElement.textContent = `RP. ${total}`;
        };

        makanan1.addEventListener("input", updateTotal);
        makanan2.addEventListener("input", updateTotal);
        minuman1.addEventListener("input", updateTotal);
        minuman2.addEventListener("input", updateTotal);
    </script>
</body>
</html>
