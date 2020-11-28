
<input type="file" id="upload"/>
<img id="thumbnail"/>

<form action="action_page.php" method="post" target="_blank">
<input type="hidden" id="mytext" name="mytext" >
<input type="submit" value="Submit">
</form>

<script>
var input = document.getElementById('upload');
var img = document.getElementById('thumbnail');

input.addEventListener('change', function(event){
    var file = this.files[0];
    var url = URL.createObjectURL(file);

    var video = document.createElement('video');
    video.src = url;

    var snapshot = function(){
        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext('2d');
		canvas.width = 350;
		canvas.height = 250;
        ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
        img.src = canvas.toDataURL('image/png');
		document.getElementById("mytext").value = img.src;
        video.removeEventListener('canplay', snapshot);
    };
	
    video.addEventListener('canplay', snapshot);
});
</script>