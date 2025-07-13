<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stylesheets/styles.css">
</head>
<body class="bg-color-nero"> 
    <aside class="bg-color-raisin-black">
        <a id="logo" href="../" class="anchor-blockify">
            <figure class="border-circle bg-color-jasmine"><img src="../images/aacj-logo.png"/></figure>
            <div>
                <p class="h2 color-jasmine font-weight-bold italics">AACJ</p>
                <p class="font-weight-medium">Cycle Parts</p>
            </div>
        </a>

        <figure id="main-navigation-hamburger" class="hidden-desktop cursor-pointer">
            <img src="../images/hamburger.png">
        </figure>

        <nav id="main-navigation" class="hidden-mobile bg-color-raisin-black font-weight-medium">
            <a href="../" class="anchor-blockify">
                <figure>
                    <img src="../images/dashboard.png"/>
                </figure>
                <p>Dashboard</p>
            </a>
            <a href="../inventory/" class="anchor-blockify">
                <figure>
                    <img src="../images/inventory.png"/>
                </figure>
                <p>Inventory</p>
            </a>
            <a href="../create-invoice/" class="anchor-blockify">
                <figure>
                    <img src="../images/create-invoice.png"/>
                </figure>
                <p>Create Invoice</p>
            </a>
            <a href="" class="anchor-blockify border-rounded bg-color-yellow">
                <figure>
                    <img src="../images/purchase-history-active.png"/>
                </figure>
                <p class="color-black font-weight-extra-bold">Purchase History</p>
            </a>
        </nav>       
    </aside>
    
    <div id="content-section">
        <header>
            <h1 class="title">Purchase History</h1>
            <p class="subtitle">Look into previous purchases</p>
        </header>
    </div>
</body>
<script src="../scripts/general-scripts.js"></script>
</html>
