<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>demo</title>
	<style>
	*{  
		margin:0px;
		padding:0px;
	}
	</style>
	<script>
		window.addEventListener('load',function(){
			var i=150,j=1;
			var s;
			var s1;
			this.addEventListener('scroll',function(event){
				// console.log(event);
				// console.log(document.documentElement.scrollHeight-document.documentElement.scrollTop);
				s=setInterval(fade,200);
				function fade(){
					if(document.documentElement.scrollTop>300){
						s && clearInterval(s);
						j=j-0.005;
						d1.style.backgroundColor="rgba("+i+","+i+","+i+","+j+")";
						(i==230 && j==0) ? clearInterval(s) : i++;
					}else{
						s && clearInterval(s);
						d1.style.backgroundColor="rgba("+i+","+i+","+i+","+j+")";
						j=j+0.005;
						(i==150 && j==1) ? clearInterval(s) : i--;
					}
				}
			});

		})
	</script>
</head>
<body style="height:1800px;">
	<div id="d1" style="width:1800px;position:fixed;background-color:rgba(150,150,150,1);">导航条</div>
	<div style="position:fixed;bottom:20px;right:20px;width:20px;height:20px;background-color: gray;text-align:center;">↑</div>
</body>
</html>