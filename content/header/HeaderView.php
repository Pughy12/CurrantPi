<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="" />
<meta name="author" content="" />
<meta http-equiv="refresh" content="10" />

<title>Currant Pi - Raspberry Pi Status</title>

<link href="favicon.ico" type="image/x-icon" rel="icon" />

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- Font Awesome -->
<link rel="stylesheet" href="./css/fontello.css" />
<!-- Custom Fonts -->
<link href="./css/fonts.css" rel="stylesheet" />
<!-- Custom styles for this template -->
<link href="./css/custom.css" rel="stylesheet" />

<style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .line {
            position: absolute;
            top: 0;
            height: 7px;
            width: 0;
            background: #8db4a3;
            animation: roundtime calc(var(--duration) * 1s) linear forwards;
            transform-origin: right center;
        }
        @keyframes roundtime {
            to {
                /* More performant than animating `width` */
                width: 100vw;
            }
        }
</style>
