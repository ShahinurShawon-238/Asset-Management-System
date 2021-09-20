<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2 style="text-align:center;">Invoice</h2>
                <hr>
            </div>
            <div class="card-body">
                <span style="position: absolute; left: 65%;">Date: <span style="color:blue;">{{$date}}</span></span> <br>
                <div style="margin-top:50px">
                    Tenant Name: {{$tenants->tenantName}}<br>
                    Tenant Email: {{$tenants->tenantEmail}}<br>
                    Tenant Phone Number: {{$tenants->tenantPhoneNumber}}<br>
                    Tenant NID: {{$tenants->tenantNID}}<br>
                </div>
                <div style="position: absolute; left: 65%; margin-top:-80px">
                    Building Name: {{$tenants->building->name}}<br>
                    Floor Number: {{$tenants->floor->floorNumber}}<br>
                    Shop Number: {{$tenants->shop->shopNumber}}<br>
                    Rent: {{$tenants->rent->rent}}Taka<br>
                </div>
                
                <h1 style="color:green; text-transform:uppercase; text-align:center; margin-top:100px">Paid</h1><br>

                Bill Generator: <span style="color:blue;">DCL</span><span style="position: absolute; left: 80%; text-align:center;">Signature</span>                
            </div>
        </div>
    </div>
</body>
</html>