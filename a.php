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
			this.addEventListener('resize',function(){
				d1.style.width=document.documentElement.clientWidth+'px';
			})
			var i=150,j=1,z=255,y=0,s11,s12,s13,s14;                             
			var s;
			var k;
			var s1;
			d1.style.display='block';
			d2.style.display='none';
			this.addEventListener('scroll',function(event){
				// console.log(event);
				// console.log(document.documentElement.scrollHeight-document.documentElement.scrollTop);
				d2.style.display='block';
				// s=setInterval(fade,200);
			 //  	k=setInterval(opa,200);
				// function opa(){
				// 	if(document.documentElement.scrollTop>300){
				// 		k && clearInterval(k);
				// 		j=j-0.01;
				// 		d1.style.opacity=j;
				// 		d2.style.opacity=y;
				// 		y=y+0.01;
				// 		if(j<0.2) {
				// 			// console.log(j);
				// 			// alert(3);
				// 			for(i1=1;i1<k;i1++){
				// 				clearInterval(i1);
				// 				j=0.21;
				// 			}
				// 		}
				// 	}else{
				// 		k && clearInterval(k);
				// 		j=j+0.01;
				// 		y=y-0.01;
				// 		d1.style.opacity=j;
				// 		d2.style.opacity=y;
				// 		if(j>=1){
				// 			for(i1=1;i1<k;i1++){
				// 				clearInterval(i1);
				// 				j=0.99;
				// 			}
				// 		}
				// 	}
				// }
				// function fade(){
				// 	if(document.documentElement.scrollTop>300){
				// 		s && clearInterval(s);
				// 		// j=j-0.005;
				// 		d1.style.backgroundColor="rgb("+i+","+i+","+i+")";
				// 		d2.style.backgroundColor="rgb("+z+","+z+","+z+")";
				// 		i==230 ? clearInterval(s) : i++;
				// 		z==175 ? clearInterval(s) : z--;
				// 	}else{
				// 		s && clearInterval(s);
				// 		d1.style.backgroundColor="rgb("+i+","+i+","+i+")";
				// 		d2.style.backgroundColor="rgb("+z+","+z+","+z+")";
				// 		// j=j+0.005;
				// 		i==150 ? clearInterval(s) : i--;
				// 		z==255 ? clearInterval(s) : z++;
				// 	}
				// }
				d1.addEventListener('mouseout',function(){
					if(s12)
						clearInterval(s12);
					s11=setInterval(fadeout,20);
					if(s14)
						clearInterval(s14);
					s13=setInterval(opaout,20);
				
				})
				function opaout(){
					j=j-0.01;
					d1.style.opacity=j;
					if(j<0.1)
						clearInterval(s13);										
				}
				function fadeout(){
					d1.style.backgroundColor="rgb("+i+","+i+","+i+")";
					i==230 ? clearInterval(s11) : i++;
				}
				d1.addEventListener('mouseover',function(){
					if(s11)
						clearInterval(s11);
					s12=setInterval(fadein,20);
					if(s13)
						clearInterval(s13);
					s14=setInterval(opain,20);
				})
				function opain(){
					j=j+0.01;
					d1.style.opacity=j;
					if(j>0.99)
						clearInterval(s14);		
				}
				function fadein(){
					d1.style.backgroundColor="rgb("+i+","+i+","+i+")";
					i==150 ? clearInterval(s12) : i--;
				}	
			});

		})
	</script>
</head>
<body style="height:1800px;">
	<div id="d1" style="width:1800px;position:fixed;background-color:rgba(150,150,150);">导航条</div>
	<div id="d2" style="position:fixed;bottom:20px;right:20px;width:20px;height:20px;background-color:rgba(150,150,150);text-align:center;">↑</div>
</body>
</html>