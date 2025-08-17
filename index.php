<?php
 // Importing imported.php from sub_folder inside other_folder
 require 'Shared.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/WeLink/index.css">
 
</head>
<body>
 <div class="services-section">
    <div class="services-container">
        <div class="service-card" onclick="location.href='#scan'">
            <div class="service-icon">🔍</div>
            <div class="service-title">Scan</div>
            <div class="service-desc">QR codes, documents & more</div>
        </div>
        
        <div class="service-card" onclick="location.href='#services'">
            <div class="service-icon">⚙️</div>
            <div class="service-title">Services</div>
            <div class="service-desc">All digital services</div>
        </div>
        
        <div class="service-card" onclick="location.href='#transactions'">
            <div class="service-icon">💳</div>
            <div class="service-title">Transactions</div>
            <div class="service-desc">Secure payments</div>
        </div>
        
        <div class="service-card" onclick="location.href='#transportation'">
            <div class="service-icon">🚕</div>
            <div class="service-title">Transportation</div>
            <div class="service-desc">Rides & deliveries</div>
        </div>
        
        <div class="service-card" onclick="location.href='#bills'">
            <div class="service-icon">📋</div>
            <div class="service-title">Bills</div>
            <div class="service-desc">Payments & management</div>
        </div>
</div>
</div>  
</body>
</html>