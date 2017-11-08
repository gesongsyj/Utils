<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<script type="text/javascript">
		$(function(){
			//处理上传
			$("#uploadBtn1").uploadify({
				height:30,//按钮大小
				width:120,//按钮宽度
				buttonText:"上传正面",//按钮文字
				fileObjName:"file",//上传文件的名字(对应的MultipartFile的名字)
				multi:false,//是否允许多选
				fileTypeExts:'*.gif; *.jpg; *.png',//控制上传文件的后缀
				swf:"/js/plugins/uploadify/uploadify.swf",//falsh文件的地址
				uploader:"/realAuthUpload.do",//后台处理上传文件的地址;
				//uploader: '/realAuthUpload.do;jsessionid=${sessionid}',//uploadify使用flash的方式上传文件,
				相当于在另一个浏览器中上传,因此session不是同一个,在需要共享session中的数据时,需要使用如上方式
				传递一个sessionid以保持session的一致,该sessionid可以通过model由后台传递到前台
				overrideEvents:['onUploadSuccess','onUploadProgress','onSelect'],
				onUploadSuccess:function(file,data){
					$("#uploadImg1").attr("src",data);
					$("#uploadImage1").val(data);
				}
			});
		});
</script>
</head>
<body>
		<div class="idCardItem">
			<div>
				<a href="javascript:;" id="uploadBtn1">上传正面</a>
			</div>
			<img alt="" src="" class="uploadImg" id="uploadImg1" /> <input
				type="hidden" name="image1" id="uploadImage1" />
		</div>
</body>
</html>