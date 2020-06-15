<style>
.dashboard header {background: #fff;}
.dashboard header a {margin-left: 10px;}

.hide{display:none;}
.fotoakun{width: 20%;display: block;border-radius: 50%;margin: 10px;float:left;}
.profile{text-align: left;display: block;width: calc(100% - 20% - 40px);float: left;padding: 10px;}
.profile h2, .profile p{margin:0;padding:0;}
.logout {
	text-align: center;
    border-radius: 4px;
    border: 3px solid;
    padding: 8px;
    font-size: 12px;
    background: #fff;
    color: #2d3e50;
    width: calc(50% - 22px - 2%);
    float: left;
    display: block;
    margin: 10px 1%;
}
.footer {
    box-shadow: 6px 0 6px rgba(0,0,0,.12);
    border-top: 1px solid #eee;
    bottom: 0;
    z-index: 3;
    position: fixed;
    width: 100%;
    text-decoration: none;
    background: #fff;
}
select, textarea, input {
    text-align: left;
    border: none;
    outline: none;
    padding: 3px 0;
    margin: 5px 0;
    width: 100%;
	height: 30px;
    border-bottom: 1px solid #eee;
}
a{text-decoration: none;}
.footer a {
    text-align: center;
    padding-top: 10px;
    float: left;
    width: 20%;
}
.footer img {
    text-align: center;
    display: block;
    margin: auto;
    width: 24px;
}
.footer p {
    color: #000;
    font-size: 12px;
    margin: 5px 0;
    line-height: 1;
}
.white-bg, .gantungan {
    background: #fff;
}
.gantungan {
    width: 100%;
    top: 45px;
    z-index: 2;
    position: sticky;
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    white-space: nowrap!important;
    overflow-x: auto!important;
    overflow-y: hidden!important;
}
.gantungan .current {
    color: #083d77!important;
    font-weight: bold;
    border-bottom: 3px solid #083d77;
    outline: none;
}
.gantungan .tab-link {
    padding: 10px;
    font-size: 12px;
    color: #000;
    display: inline-block!important;
    margin-left: 8px;
    text-decoration: none;
}
.w40{width:40%;}
.center{text-align:center}
.tab-content{display:none;}
.tab-content.current{display:block;}
.tab-content h2{font-size:14px;}
.panel2 {
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    vertical-align: middle;
    text-align: left;
    margin-bottom: 10px;
    padding: 10px;
}
.panel2 .menuli {
    font-size: 1.3rem;
    display: block;
    padding: 10px;
    margin: 0;
    border-bottom: 1px solid #eee;
}
.menuli:after {
    content: "";
    background-image: url(<?php echo $c_url;?>/compressed/amp/pnext.svg);
    width: 8px;
    height: 14px;
    margin-top: 5px;
    float: right;
}
.mbbawah{
    height: 5px;
    margin-bottom: 50px;
    float: left;
    width: 100%;	
}
</style>