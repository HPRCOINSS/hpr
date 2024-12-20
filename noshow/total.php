
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotCoin - Boosters</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <link rel="icon" type="image/x-icon" href="./assets/favicon/favicon.ico">
    <link rel="icon" type="image/png" href="./assets/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="./assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="./assets/favicon/apple-touch-icon.png">
    <link rel="android-chrome-192x192" href="./assets/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="android-chrome-512x512" href="./assets/favicon/android-chrome-512x512.png" sizes="512x512">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .guid-button {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-top: 20px;
    }

    .wallet-address-display {
        background-color: #f0f0f0;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 15px;
        width: 100%;
        max-width: 300px; /* �� �� �������� �� ����� ����� ��� ��� */
        word-break: break-all;
    }

    .wallet-address-display p {
        margin: 0 0 5px 0;
        font-weight: bold;
        color: #333;
    }

    .wallet-address-display span {
        color: #0066cc;
        font-size: 0.9em;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #45a049;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        border-radius: 10px;
        text-align: center;
    }

    .modal-content h2 {
        margin-top: 0;
        color: #333;
    }

    #wallet-address-input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
    }

    #submit-wallet-address {
        margin-top: 10px;
    }
    .guid-social a {
        color: inherit;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        margin-right: 10px;
    }
    .guid-social a:hover {
        opacity: 0.8;
    }
    .guid-social svg {
        margin-right: 5px;
    }
    .select-none {
    user-select: none; /* ������ �� ������ ��� */
    -webkit-user-select: none; /* ���� ���ѐ���� WebKit */
    -moz-user-select: none; /* ���� Firefox */
    pointer-events: none; /* ������ �� ������� */
}
</style>
</head>
<body class="boost">
    
    <div class="haeder">
        <a href="/noshow?chat_id=5959025771">
            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 11.9299H2" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.00009 19L2.84009 14C2.5677 13.7429 2.35071 13.433 2.20239 13.0891C2.05407 12.7452 1.97754 12.3745 1.97754 12C1.97754 11.6255 2.05407 11.2548 2.20239 10.9109C2.35071 10.567 2.5677 10.2571 2.84009 10L8.00009 5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <!-- <h1>Notcoin</h1> -->
    </div>

<div class="guid-social">
    <a href="" class="guid-telegram" target="_blank" rel="noopener noreferrer">
        <svg width="20px" height="20px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M41.4193 7.30899C41.4193 7.30899 45.3046 5.79399 44.9808 9.47328C44.8729 10.9883 43.9016 16.2908 43.1461 22.0262L40.5559 39.0159C40.5559 39.0159 40.3401 41.5048 38.3974 41.9377C36.4547 42.3705 33.5408 40.4227 33.0011 39.9898C32.5694 39.6652 24.9068 34.7955 22.2086 32.4148C21.4531 31.7655 20.5897 30.4669 22.3165 28.9519L33.6487 18.1305C34.9438 16.8319 36.2389 13.8019 30.8426 17.4812L15.7331 27.7616C15.7331 27.7616 14.0063 28.8437 10.7686 27.8698L3.75342 25.7055C3.75342 25.7055 1.16321 24.0823 5.58815 22.459C16.3807 17.3729 29.6555 12.1786 41.4193 7.30899Z" fill="#ffffff"/>
        </svg>
        Join
    </a>
    <a href="" class="guid-x" target="_blank" rel="noopener noreferrer">
        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="none" viewBox="0 0 16 16">
            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" fill="#ffffff"/>
        </svg>
        Follow
    </a>
</div>


    <div class="guid-content">
        <div class="guid-title">
            <h1>Notcoin</h1>
        </div>
        <div class="guid-help">
            <div class="guid-help-detail">
                <div>
                    <img src="./assets/images/golden.png" class="select-none" width="50px">
                </div>
                <div>
                    <h3>Total Coins:</h3>
                    <p>1373549</p>
                </div>
            </div>

            <div class="guid-help-detail">
                <div>
                    <img src="./assets/images/team.png" class="select-none" width="50px">
                </div>
                <div>
                    <h3>Total Users:</h3>
                    <p>770</p>
                </div>
            </div>

            <div class="guid-help-detail">
                <div>
                    <img src="./assets/images/powered.png" class="select-none" width="50px">
                </div>
                <div>
                    <h3></h3>
                    <p></p>
                </div>
            </div>

        </div>
    </div>

<div class="guid-button">
        <button id="wallet-button" class="button">Register Wallet Address</button>
</div>

<!-- Modal for wallet address input -->
<div id="wallet-modal" class="modal">
    <div class="modal-content">
        <h2>Paste wallet address()</h2>
        <input type="text" id="wallet-address-input" autofocus>
        <button id="submit-wallet-address" class="button">Submit</button>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('wallet-modal');
    var btn = document.getElementById('wallet-button');
    var submitBtn = document.getElementById('submit-wallet-address');
    var input = document.getElementById('wallet-address-input');

    btn.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default action
        modal.style.display = "block";
        setTimeout(function() {
            input.focus();
        }, 100);
    });

    submitBtn.addEventListener('click', function() {
        submitWalletAddress();
    });

    input.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            submitWalletAddress();
        }
    });

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function submitWalletAddress() {
        var address = input.value.trim();
        if(address) {
            // Send AJAX request to update wallet address
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'upgrade_speed_recharge.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if(this.status == 200) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Wallet address successfully registered',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload(); // Reload the page to show updated information
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Error in registering the wallet address!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            };
            xhr.send('chat_id=5959025771&wallet=' + encodeURIComponent(address));
        } else {
            Swal.fire({
                title: 'Wallet Address!',
                text: 'Please enter your wallet address ()',
                icon: 'info',
                confirmButtonText: 'OK'
            });
        }
    }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>