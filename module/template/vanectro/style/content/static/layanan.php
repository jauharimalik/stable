<style>
.svgelshape-bottom {
    z-index: 2;
    bottom: -1px;
}
.svgelshape {
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);	
    overflow: hidden;
    position: absolute;
    left: 0;
    width: 100%;
}
.og {
    border-bottom-left-radius: 6.25em;
    clip-path: polygon(0 0,100% 0,100% calc(100% - 3em),6.25em 100%,0 100%);
    background: linear-gradient(225deg,#00dcc0,#005af0 75%);
    float: left;
    position: relative;
    width: 100%;
	z-index:-2;
}
.oy{padding: 0 2.5em;margin-left: -64px;}
.ox {font-size: 4.8rem;color: #fff;font-weight: bold;margin: 0;}
.ok {
    line-height: 1.6rem;
    font-weight: 400;
    color: #fff;
    margin-top: 0;
    margin-bottom: .75em;
    font-size: 1.2rem;
}
.apabtn {
    line-height: 1.2em;
    font-size: 1em;
    display: inline-block;
    max-width: 100%;
    text-decoration: none;
    text-align: center;
    border-radius: 3px;
    border: none;
    cursor: pointer;
    box-shadow: 0 15px 35px -5px rgba(0,0,0,.25);
    color: #005af0;
    background-color: #fff;
    margin-top: 20px;
	padding: 1em 2em;
}
.cb {    margin: 5vw;
    float: left;
    width: 40%;
}
.ca{
	position: absolute;
    right: 0;
    z-index: +1;
    box-shadow: 0 15px 50px 0 rgba(0,0,0,.5);
    margin-top: 55px;
    padding: 0;
    height: 40rem;
    overflow: hidden;	
}
.ca img{
    object-fit: cover;
    width: 100%;
    margin-top: -50px;	
}
.dvid{position: absolute;right: 0;}
.sparator{height:40px;}
.ocatab{
    width: 45%;
    float: left;
    margin: 0 2vw;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.5);
    margin-top: -40px;	
}
.cover-image {
    position: relative;
    height: 380px;
    width: 100%;
    background-color: #F7F9FA;
    overflow: hidden;
    background-size: cover;
}
.cover-image-list img{height:380px; object-fit:cover;}
.cover-image-list {
    position: relative;
    width: 60%;
    height: 380px;
    left: 40%;
}
.cover-clip {
    display: block;
    position: absolute;
    left: -5%;
    top: -20%;
    height: 220%;
    width: 65%;
    background-color: #1BA0E2;
    border-top-right-radius: 40%;
    border-bottom-right-radius: 60%;
    transform: skew(-4deg, -6deg);
    overflow: hidden;
}
.cover-clip:before {
    content: "";
    display: block;
    position: absolute;
    height: 100%;
    width: 112%;
    left: -10%;
    background-image: url(<?php echo $c_url;?>/compressed/bglayanan.webp);
    background-size: contain;
    background-repeat: no-repeat;
    background-position-x: left;
    background-position-y: 48px;
    transform: skew(4deg, 6deg);
}
.cover-hero {
    position: absolute;
    top: 80px;
    left: 50%;
    transform: translateX(-50%);
    width: 960px;
    padding: 24px;
}
.cover-hero h1 {
    color: #fff;
    font-size: 32px;
    line-height: 40px;
    margin-bottom: 16px;
    margin-top: 12px;
}

.cover-hero p {
    color: #fff;
    font-size: 16px;
    line-height: 24px;
}
.cover-image
._3uLHC {
    font-weight: 700;
    line-height: 1.79;
}
.gantunganbanner {
    border-radius: 4px;
    box-shadow: 0 1px 3px 0 rgba(27,27,27,.2), 0 4px 8px 0 rgba(27,27,27,.1);
    background-color: #fff;
	padding: 10px;
	width:100%;
    float: left;
    font-size: 16px;
}
.btn {
    display: inline-block;
    font-weight: 700;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    padding: 10px 12px;
    font-size: 13px;
    line-height: 1.4;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.tombolutama {
    background: #23a2f4;
    color: #fff;
    font-weight: bold;
}
.tombolbiru{background:#1ba0e2;color:#fff;font-weight:bold;}
.judulkelebihan{
float: left;
    width: 100%;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 10px;
}
.jadi5 {width: 20%; text-align:center;float:left;}
.gbbulpo {
    width: 100px;
    height: 100px;
    padding: 5px;
}
.jadi5 .h5 {
	margin: 4px 0;
    font-size: 16px;
    font-weight: bold;
}

.section-title {
    margin: 32px 0 0;
    font-size: 24px;
    text-align: left;
}
.section-subtitle {
	letter-spacing: .5px;
    margin: 16px 0;
    text-align: left;
    line-height: 1.5;
    font-size: 14px;
}
table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    border-radius: 5px;
    padding: 0;
    width: 100%;
    table-layout: fixed;
}
table tr:nth-child(odd) {
    background-color: #eeeeee;
}
table th, table td {
    padding: .625em;
    text-align: left;
    padding-left: 20px;
}
table th {
    font-size: .85em;
    letter-spacing: .1em;
    text-transform: uppercase;
}
table thead tr {
    background-color: #0194f3!important;
    color: #fff;
}
table tr {
    border: 1px solid #ddd;
    padding: .35em;
}

</style>