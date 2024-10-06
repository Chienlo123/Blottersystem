
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Exam Motorcycle school </title>
   
 
</head>
<style>
form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
}

h2 {
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 100%;
  box-sizing: border-box;
}

button {
  background-color: #28a745;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  font-size: 18px;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #218838;
}

.qrcode {
  text-align: center;
  margin-top: 50px;
}

.qrcode img {
  display: block;
  margin: 0 auto;
}

</style>
<body>

<form action="process_payment.php" method="post">
  <h2>GCash Payment Form</h2>
  
<div class="qrcode">
  <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=123456789012345" alt="GCash QR Code">
  <p>Scan this QR code to pay with GCash.</p>
</div>
  
  <div class="form-group">
    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" required>
  </div>
  <div class="form-group">
    <label for="merchant_id">Merchant ID:</label>
    <input type="text" name="merchant_id" id="merchant_id" required>
  </div>
  <div class="form-group">
    <label for="transaction_id">Transaction ID:</label>
    <input type="text" name="transaction_id" id="transaction_id" required>
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="tel" name="phone" id="phone" required>
  </div>
  <button type="submit">Pay with GCash</button>
</form>


</body>
</html>
