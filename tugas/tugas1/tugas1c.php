<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1c</title>
    <style>
        html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
        div{
            display:inline-block;
        }

        .container{
            width: 500px;
            height: 400px;
            margin-top: 15px;
            margin-left: 15px;
            font-family: arial;
            font-size: 20px;
        }

        .pertama{
            width: 300px;
        }
        .kedua{
            width: 300px;
        }
        .ketiga{
            width: 350px;
        }

        .kotak{
            background-color: yellow;
            width: 100px;
            height: 100px;
            border: 1px solid black;
            text-align:center;
            line-height: 100px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="pertama">
            <div class="kotak"><p>1</p></div>
        </div>
        <div class="kedua">
            <div class="kotak"><p>2</p></div><div class="kotak"><p>2</p></div>
        </div>
        <div class="ketiga">
            <div class="kotak"><p>3</p></div><div class="kotak"><p>3</p></div><div class="kotak"><p>3</p></div>
        </div>
    </div>
</body>
</html>