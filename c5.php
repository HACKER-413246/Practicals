<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Binary Converter</title>
    <script type="text/javascript">
        function convertToBinary() {
            // Get the decimal number from the input field
            var decimalNumber = document.getElementById("decimal").value;
            
            // Validate if the input is a number
            if (isNaN(decimalNumber) || decimalNumber === "") {
                alert("Please enter a valid number.");
                return false;
            }

            // Convert the decimal number to binary
            var binary = parseInt(decimalNumber).toString(2);
            
            // Display the binary result in the form
            document.getElementById("binaryResult").value = binary;
            
            return false; // Prevent the form from submitting to the server
        }
    </script>
</head>
<body>

<h2>Decimal to Binary Converter</h2>

<form method="POST" onsubmit="return convertToBinary();">
    <label for="decimal">Enter Decimal Number:</label>
    <input type="text" id="decimal" name="decimal" required>
    <br><br>
    
    <label for="binaryResult">Binary Equivalent:</label>
    <input type="text" id="binaryResult" name="binaryResult" readonly>
    <br><br>
    
    <input type="submit" value="Convert">
</form>

</body>
</html>
