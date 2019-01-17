

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){

		var text="ต้น/คอมพิวเตอร์";
		var pathlist=text.split("/");
		var page=;

		console.log("ระดับชั้น : "+pathlist[0]);
		console.log("วิชา : "+pathlist[1]);
		console.log("เนื้อหา : "+pathlist[2]);
		console.log("จำนวนหน้า : "+page);

		$('#page').height($(document).height()-50);
        $('#content').height($(document).height());
        

        open(1);

        function open(number){
        	console.log("หน้าปัจุบัน "+"firebasestorage.googleapis.com/v0/b/tk-project-e4cd5.appspot.com/o/"+pathlist[0]+"%2F"+pathlist[1]+"%2F"+pathlist[2]+"%2F"+number+"?alt=media&token=5f165a08-286e-4045-b1e8-acbabe3b4184'");
        	$('#page').attr("src","https://firebasestorage.googleapis.com/v0/b/tk-project-e4cd5.appspot.com/o/"+pathlist[0]+"%2F"+pathlist[1]+"%2F"+pathlist[2]+"%2F"+number+"?alt=media&token=5f165a08-286e-4045-b1e8-acbabe3b4184");
        }
        var numbers=1;
        $('#left').click(function(){
        	numbers-=1;
        	if(numbers<1){
        		numbers=1;
        	}
        	open(numbers);
        });

        $('#right').click(function(){
        	numbers+=1;
        	if(numbers>page){
        		numbers=page;
        	}
        	open(numbers);
        });

        });

	</script>
	<style type="text/css">
		body{
			padding: 0;
			margin: 0;
			background-color: #fff;
		}
		#content{
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
		}
		#left{
			opacity: 0.2;
			margin:20px;
			width:10%;
			transition:all 0.5s ease;
		}
		#right{
			opacity: 0.2;
			margin:20px;
			width:10%;
			transition:all 0.5s ease;
		}
		#left:hover{
			opacity: 0.6;
			width:30%;
		}
		#right:hover{
			opacity: 0.6;
			width:30%;
		}
		#left>img{
			width: 10%;
		}
		#right>img{
			width: 10%;
		}
		#page{
			position: relative;
			border:10px solid #f47473;
			border-radius:15px;
			
		}#content{
	
		}
		#main{
			padding:10px 25px;
			
		}

	</style>
</head>
<body>



	<center>
		<div style="background: #f47473;width: 100%;">
		<img src="https://sites.google.com/a/thk.ac.th/tk-knowledge-center/_/rsrc/1544267761738/home/H1.jpg">
		</div>
		<br>
		<br>
    <table width="100%" border="0">
    <tr>
    <td>
    <center>
    <img src="Untitled-3.png" width="10%" id="left">
    </center>
    </td>
    <td width="700">
    <center>
	<img src="" id="page" width="100%" width="500">
    </center>
    </td>
    <td>
    <center>
    <img src="Untitled-2.png" width="10%" id="right">
    </center>
    </td>
    </tr>
    </table>
	</center>
    
	



<div style="text-align:right;position:fixed;bottom:3px;right:0px;width:100%;z-index:999999;cursor:pointer;line-height:0;display:block;"><a target="_blank" href="https://www.freewebhostingarea.com" title="Free Web Hosting with PHP5 or PHP7"><img alt="Free Web Hosting" width="253" height="45" src="https://www.freewebhostingarea.com/images/poweredby.png" style="border-width: 0px;"></a></div>
</body>
</html>
