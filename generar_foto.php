
<video id="video" src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" controls></video>
<button onclick="capture()">Capture</button>
<canvas id="canvas" style="overflow:auto"></canvas>
<script>
function capture() {
    var canvas = document.getElementById('canvas');     
    var video = document.getElementById('video');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0, video.videoWidth, video.videoHeight);  
    canvas.toBlob() = (blob) => {
      const img = new Image();
      img.src = window.URL.createObjectUrl(blob);
    };
}
</script>